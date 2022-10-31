@extends('home')
@section('title')
    Create Class
@endsection
@section('body')
<x-form.form action="{{ route('grade.store') }}">
    <x-form.group-input>
        <x-form.label>Class</x-form.label>
        <x-form.input name='grade'>{{ old('grade') }}</x-form.input>
        @error('grade')
        <x-slot name='showError'>
            {{ $message }}
        </x-slot>
        @enderror
    </x-form.group-input>
    <x-form.group-input class="justify-end space-x-2">
        <x-form.button type='a'  bgcolor="red" href="{{route('grade.index')}}">Close</x-form.button>
        <x-form.button type='submit' bgcolor="green">Save</x-form.button>
    </x-form.group-input>
</x-form.form>
@endsection