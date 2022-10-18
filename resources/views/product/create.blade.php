@extends('home')
@section('title')
    Add New Product
@endsection
@section('body')
    <form method="POST" action="{{ route('product.store') }}">
    @csrf
    <div class="flex flex-col space-y-2">
        <x-form.group-input>
            <x-form.label>Item Name</x-form.label>
            <x-form.input name='item_name'></x-form.input>
        </x-form.group-input>
        <x-form.group-input>
            <x-form.label>Item Description</x-form.label>
            <x-form.input name='item_description'></x-form.input>
        </x-form.group-input>
        <x-form.group-input>
            <x-form.label>Item Price</x-form.label>
            <x-form.input name='item_price'></x-form.input>
        </x-form.group-input>
    <div class="flex space-x-1 justify-end">
        <x-form.button type='a' bgcolor="red" href="{{ route('product.index') }}">Cancel</x-form.button>
        <x-form.button type='submit' bgcolor="green">Save</x-form.button>
    </div>
    </div>
    </form>
@endsection