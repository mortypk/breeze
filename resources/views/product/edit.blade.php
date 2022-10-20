@extends('home')
@section('title')
    Edit Product
@endsection
@section('body')
    <form method="POST" action="{{ route('product.update', $product->id) }}">
    @csrf
    @method('PUT')
    <div class="flex flex-col space-y-2">
        <x-form.group-input>
            <x-form.label>Item Name</x-form.label>
            <x-form.input name='item_name'>{{ old('item_name',$product->item_name) }}</x-form.input>
            @error('item_name')
            <x-slot name='showError'>
                {{ $message }}
            </x-slot>
            @enderror
        </x-form.group-input>
        <x-form.group-input>
            <x-form.label>Item Description</x-form.label>
            <x-form.input name='item_description'>{{ old('item_description',$product->item_description) }}</x-form.input>
            @error('item_description')
            <x-slot name='showError'>
                {{ $message }}
            </x-slot>
            @enderror
        </x-form.group-input>
        <x-form.group-input>
            <x-form.label>Item Price</x-form.label>
            <x-form.input name='item_price'>{{ old('item_price',$product->item_price) }}</x-form.input>
            @error('item_price')
            <x-slot name='showError'>
                {{ $message }}
            </x-slot>
            @enderror
        </x-form.group-input>
        <div class="flex space-x-1 justify-end">
            <x-form.button type='a' bgcolor="red" href="{{ route('product.index') }}">Cancel</x-form.button>
            <x-form.button type='submit' bgcolor="green">Save</x-form.button>
        </div>
    </div>
    </form>
@endsection