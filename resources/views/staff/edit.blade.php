@extends('home')
@section('title')
Edit Staff
@endsection
@section('body')
<x-form.form action="{{ route('staff.update', $staff->id)}}">
@method('PUT')
<div class="flex flex-col space-y-2">
    <x-form.group-input>
        <x-form.label>Name</x-form.label>
        <x-form.input name="name">{{ old('name',$staff->name) }}</x-form.input>
    </x-form.group-input>
    <x-form.group-input>
        <x-form.label>Title</x-form.label>
        <x-form.select name="title">
            <x-form.option>{{ old('title',$staff->title) }}</x-form.option>
            @foreach (\App\Models\Title::all() as $title)
                <x-form.option>{{ $title->title }}</x-form.option>
            @endforeach
        </x-form.select>
    </x-form.group-input>
    <x-form.group-input class="justify-end space-x-2">
        <x-form.button type='a'  bgcolor="red" href="{{route('staff.index')}}">Close</x-form.button>
        <x-form.button type='submit' bgcolor="green">Save</x-form.button>
    </x-form.group-input>
</div>
</x-form.form>
@endsection