<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::with('title')->paginate(30);
        return view('staff.index',['staffs' => $staffs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create');
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
            'name' => 'required',
            'title' => 'required',
        ]);
        
        $staff= $request->all();
        Staff::create([
            'name' => $staff['name'],
            'title' => $staff['title']
        ]);

        return redirect()->route('staff.index')->with([
            'type'=> 'success',
            'title'=> 'Saved!',
            'message'=> 'Staff detail saved successfully',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        return view('staff.show',compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        return view('staff.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
        ]);
        
        $staff->update($request->all());
        return redirect()->route('staff.index')->with([
            'type'=> 'success',
            'title'=> 'Saved!',
            'message'=> 'Staff detail update successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $n=$staff->name;
        $staff->delete();
        return redirect()->back()->with([
            'type'=> 'warning',
            'title'=> 'Notice!',
            'message'=> 'Staff <b>"'.$n.'"</b> detail deleted successfully',
        ]);
    }
}
