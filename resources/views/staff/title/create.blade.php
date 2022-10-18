@extends('home')
@section('title')
    Add New Designation
@endsection
@section('body')
    <x-form.form action="{{ route('title.store') }}">
        <x-form.group-input>
            <x-form.label>Title</x-form.label>
            <x-form.input name='title'></x-form.input>
        </x-form.group-input>
        <x-form.group-input class="justify-end space-x-2">
            <x-form.button type='a'  bgcolor="red" href="{{route('title.index')}}">Close</x-form.button>
            <x-form.button type='submit' bgcolor="green">Save</x-form.button>
        </x-form.group-input>
    </x-form.form>
@endsection