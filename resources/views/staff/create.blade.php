@extends('home')
@section('title')
Add New Staff
@endsection
@section('body')
<x-form.form action="{{route('staff.store')}}">
    <x-form.group-input>
        <x-form.label>Name</x-form.label>
        <x-form.input name="name">{{ old('name') }}</x-form.input>
        @error('name')
        <x-slot name='showError'>
            {{ $message }}
        </x-slot>
        @enderror
    </x-form.group-input>
    <x-form.group-input>
        <x-form.label>Title</x-form.label>
        <x-form.select name="title">
            @foreach (\App\Models\Title::all() as $title)
                <x-form.option>{{ $title->title }}</x-form.option>
            @endforeach
        </x-form.select>
        @error('title')
        <x-slot name='showError'>
            {{ $message }}
        </x-slot>
        @enderror
    </x-form.group-input>
    <x-form.group-input class="justify-end space-x-2">
        <x-form.button type='a'  bgcolor="red" href="{{route('staff.index')}}">Close</x-form.button>
        <x-form.button type='submit' bgcolor="green">Save</x-form.button>
    </x-form.group-input>
</x-form.form>
@endsection