@extends('home')
@section('title')
Edit Staff Details
@endsection
@section('body')
<div class="flex flex-col space-y-2">
    <x-form.group-input>
        <x-form.label>Name</x-form.label>
        <x-form.label>{{ $staff->name }}</x-form.label>
    </x-form.group-input>
    <x-form.group-input>
        <x-form.label>Title</x-form.label>
        <x-form.label>{{ $staff->title }}</x-form.label>
    </x-form.group-input>
    <x-form.group-input class="justify-end space-x-2">
        <x-form.button type='a'  bgcolor="red" href="{{route('staff.index')}}">Close</x-form.button>
    </x-form.group-input>
</div>
@endsection