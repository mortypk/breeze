@extends('home')
@section('title')
Student Info
@endsection
@section('body')
<form method="POST" action="{{route('student.update',$student->id)}}">
@csrf
@method('PUT')
<div class="flex flex-col space-y-2">
    <x-form.group-input>
        <x-form.label>Student Name</x-form.label>
        <x-form.label >{{ $student->name }}</x-form.label>
    </x-form.group-input>
    <x-form.group-input>
        <x-form.label>Father Name</x-form.label>
        <x-form.label >{{ $student->fname }}</x-form.label>
    </x-form.group-input>
    <x-form.group-input>
        <x-form.label>Gender</x-form.label>
        <x-form.label >{{ $student->gender }}</x-form.label>
    </x-form.group-input>
    <x-form.group-input>
        <x-form.label>Address</x-form.label>
        <x-form.label >{{ $student->address }}</x-form.label>
    </x-form.group-input>
    <x-form.group-input>
        <x-form.label>phone</x-form.label>
        <x-form.label >{{ $student->phone }}</x-form.label>
    </x-form.group-input>
    <x-form.group-input>
        <x-form.label>BirthDay</x-form.label>
        <x-form.label type='date' >{{ $student->birthday }}</x-form.label>
    </x-form.group-input>
    <div class="flex space-x-1 justify-end">
        <x-form.button type='a' bgcolor="red" href="{{ route('student.index') }}">Cancel</x-form.button>
        <x-form.button type='submit' bgcolor="green">Save</x-form.button>
    </div>
</div>
</form>
@endsection