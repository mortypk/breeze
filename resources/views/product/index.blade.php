@extends('home')
@section('title')
Product List
@endsection
@section('body')
<x-layout.table>
@if ($products->hasPages())
    <x-slot name="link">
        <div class='flex-1'>
        {{ $products->links() }}
        </div>
        <x-form.button type='a' href="{{ route('product.create') }}">New</x-form.button>
    </x-slot>
    @endif
    <x-slot name="head">
        <th>#</th>
        <th>Item Name</th>
        <th>Description</th>
        <th>Price</th>
        <th></th>
    </x-slot>
    @foreach ($products as $product)
    <x-layout.tbody>
    <td class="p-1">{{ $product->id }}</td>
    <td class="p-1">{{ $product->item_name }}</td>
    <td class="p-1">{{ $product->item_description }}</td>
    <td class="p-1">{{ $product->item_price }}</td>
    <td class="flex space-x-1 p-1">
        <x-form.button type='a' href="{{ route('product.show', $product->id) }}">Show</x-form.button>
        <x-form.button type='a' href="{{ route('product.edit', $product->id) }}">Edit</x-form.button>
            <form action="{{ route('product.destroy', $product->id) }}" method="post">
            @csrf
            @method('DELETE')
            <x-form.button type="submit" bgcolor='red' >Delete</x-form.button>
            </form>
    </td>
    </x-layout.tbody>
    @endforeach
</x-layout.table>
@endsection