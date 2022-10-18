@extends('home')
@section('title')
    Product Info
@endsection
@section('body')
    
    <div class="flex flex-col space-y-2">
        <x-form.group-input>
            <x-form.label>Item Name</x-form.label>
            <x-form.input name='item_name'>{{ $product->item_name }}</x-form.input>
        </x-form.group-input>
        <x-form.group-input>
            <x-form.label>Item Description</x-form.label>
            <x-form.input name='item_description'>{{ $product->item_description }}</x-form.input>
        </x-form.group-input>
        <x-form.group-input>
            <x-form.label>Item Price</x-form.label>
            <x-form.input name='item_price'>{{ $product->item_price }}</x-form.input>
        </x-form.group-input>
    <div class="flex space-x-1 justify-end">
        <x-form.button type='a' bgcolor="red" href="{{ route('product.index') }}">Close</x-form.button>
    </div>
    </div>
@endsection