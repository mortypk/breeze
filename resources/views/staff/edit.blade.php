@extends('home')
@section('title')
Edit Staff
@endsection
@section('body')
<form method="POST" action="{{route('staff.update', $staff->id)}}">
@csrf
@method('PUT')
<div class="flex flex-col space-y-2">
    <x-form.group-input>
        <x-form.label>Name</x-form.label>
        <x-form.input name="name">{{ $staff->name }}</x-form.input>
    </x-form.group-input>
    <x-form.group-input>
        <x-form.label>Title</x-form.label>
        <x-form.input name="title">{{ $staff->title }}</x-form.input>
    </x-form.group-input>
    <x-form.group-input class="justify-end space-x-2">
        <x-form.button bgcolor="red" onclick="{{route('staff.index')}}">Cancel</x-form.button>
        <x-form.button type='submit' bgcolor="green">Save</x-form.button>
    </x-form.group-input>
</div>
</form>
@endsection