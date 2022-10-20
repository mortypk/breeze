@extends('home')
@section('title')
    Edit Designation
@endsection
@section('body')
    <x-form.form action="{{ route('title.update', $title->id) }}">
        @method('PUT')
        <x-form.group-input>
            <x-form.label>Title</x-form.label>
            <x-form.input name='title'>{{ old('title',$title->title) }}</x-form.input>
            @error('title')
            <x-slot name='showError'>
                {{ $message }}
            </x-slot>
            @enderror
        </x-form.group-input>
        <x-form.group-input class="justify-end space-x-2">
            <x-form.button type='a'  bgcolor="red" href="{{route('title.index')}}">Close</x-form.button>
            <x-form.button type='submit' bgcolor="green">Save</x-form.button>
        </x-form.group-input>
    </x-form.form>
@endsection