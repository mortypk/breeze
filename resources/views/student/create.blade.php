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
        <x-form.input name="name"></x-form.input>
    </x-form.group-input>
    <x-form.group-input>
        <x-form.label>Father Name</x-form.label>
        <x-form.input name="fname"></x-form.input>
    </x-form.group-input>
    <x-form.group-input>
        <x-form.label>Gender</x-form.label>
        <x-form.input name="gender"></x-form.input>
    </x-form.group-input>
    <x-form.group-input>
        <x-form.label>Address</x-form.label>
        <x-form.input name="address"></x-form.input>
    </x-form.group-input>
    <x-form.group-input>
        <x-form.label>phone</x-form.label>
        <x-form.input name="phone"></x-form.input>
    </x-form.group-input>
    <x-form.group-input>
        <x-form.label>BirthDay</x-form.label>
        <x-form.input type='date' name="birthday"></x-form.input>
    </x-form.group-input>
    <div class="flex space-x-1 justify-end">
        <x-form.button type='a' bgcolor="red" href="{{ route('student.index') }}">Cancel</x-form.button>
        <x-form.button type='submit' bgcolor="green">Save</x-form.button>
    </div>
</div>
</form>
@endsection