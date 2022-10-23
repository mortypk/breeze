<?php

namespace App\Http\Controllers;

use App\Models\title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titles = title::with('staffs')->paginate();
        return view('staff.title.index',['titles' => $titles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.title.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3|unique:titles,title'
        ]);
        $title=$request->all();
        Title::create($title);
        return redirect()->route('title.index')->with([
            'type' => 'success',
            'title' => 'Addition!',
            'message' => 'Title saved!',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\title  $title
     * @return \Illuminate\Http\Response
     */
    public function show(title $title)
    {
        return view('staff.title.show', compact('title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\title  $title
     * @return \Illuminate\Http\Response
     */
    public function edit(title $title)
    {
        return view('staff.title.edit', compact('title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\title  $title
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, title $title)
    {
        $request->validate([
            'title' => 'required'
        ]);
        $title->update($request->all());
        return redirect()->route('title.index')->with([
            'type' => 'success',
            'title' => 'Updated!',
            'message' => 'Title updated!',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\title  $title
     * @return \Illuminate\Http\Response
     */
    public function destroy(title $title)
    {
        $u=$title->title;
        $title->delete();
        return redirect()->back()->with([
            'type' => 'warning',
            'title' => 'Deletion!',
            'message' => "Title <b>$u</b> Deleted!",
        ]);
    }
}
