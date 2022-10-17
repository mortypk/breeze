@extends('home')
@section('title')
Edit Staff
@endsection
@section('body')
<form method="POST" action="{{route('staff.store')}}">
@csrf
<div class="flex flex-col space-y-2">
    <x-form.group-input>
        <x-form.label>Name</x-form.label>
        <x-form.input name="name"></x-form.input>
    </x-form.group-input>
    <x-form.group-input>
        <x-form.label>Title</x-form.label>
        <x-form.input name="title"></x-form.input>
    </x-form.group-input>
    <x-form.group-input class="justify-end space-x-2">
        <x-form.button type='a'  bgcolor="red" href="{{route('staff.index')}}">Close</x-form.button>
        <x-form.button type='submit' bgcolor="green">Save</x-form.button>
    </x-form.group-input>
</div>
</form>
@endsection