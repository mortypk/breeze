@php
    session(['age'=>14]);
@endphp
@extends('home')
@section('title')
Add New Student Info
@endsection
@section('body')
<form method="POST" action="{{route('student.store')}}">
@csrf
<div class="flex flex-col space-y-2">
    <x-form.group-input>
        <x-form.label>Student Name</x-form.label>
        <x-form.input name="name">{{ old('name') }}</x-form.input>
        @error('name')
        <x-slot name="showError">
            {{ $message }}
        </x-slot>
        @enderror
    </x-form.group-input>
    <x-form.group-input>
        <x-form.label>Father Name</x-form.label>
        <x-form.input name="fname">{{ old('fname') }}</x-form.input>
        @error('fname')
        <x-slot name="showError">
            {{ $message }}
        </x-slot>
        @enderror
    </x-form.group-input>
    <x-form.group-input>
        <x-form.label>Gender</x-form.label>
        <x-form.select name="gender">
            <x-form.option>{{ old('gender') }}</x-form.option>
            <x-form.option value='male'>male</x-form.option>
            <x-form.option value='female'>female</x-form.option>
        </x-form.select>
        @error('gender')
        <x-slot name="showError">
            {{ $message }}
        </x-slot>
        @enderror
    </x-form.group-input>
    <x-form.group-input>
        <x-form.label>Address</x-form.label>
        <x-form.input name="address">{{ old('address') }}</x-form.input>
        @error('address')
        <x-slot name="showError">
            {{ $message }}
        </x-slot>
        @enderror
    </x-form.group-input>
    <x-form.group-input>
        <x-form.label>phone</x-form.label>
        <x-form.input name="phone">{{ old('phone') }}</x-form.input>
        @error('phone')
        <x-slot name="showError">
            {{ $message }}
        </x-slot>
        @enderror
    </x-form.group-input>
    <x-form.group-input>
        <x-form.label>BirthDay</x-form.label>
        <x-form.input type='date' name="birthday">{{ old('birthday') }}</x-form.input>
        @error('birthday')
        <x-slot name="showError">
            {{ $message }}
        </x-slot>
        @enderror
    </x-form.group-input>
    <div class="flex space-x-1 justify-end">
        <x-form.button type='a' bgcolor="red" href="{{ route('student.index') }}">Cancel</x-form.button>
        <x-form.button type='submit' bgcolor="green">Save</x-form.button>
    </div>
</div>
</form>
@endsection