@extends('home')
@section('title')
Staff List
@endsection
@section('body')
<x-layout.table>
    <x-slot name="head">
        <th>ID</th>
        <th>Name</th>
        <th>Title</th>
        <th></th>
    </x-slot>
    @foreach ($staffs as $staff)
    <x-layout.tbody>
        <td class="p-1">{{ $staff->id }}</td>
        <td class="p-1">{{ $staff->name }}</td>
        <td class="p-1">{{ $staff->title }}</td>
        <td class="flex space-x-1 p-1">
            <x-form.button type="a" href="{{ route('staff.show', $staff->id) }}">Show</x-form.button>
            <x-form.button type="a" href="{{ route('staff.edit', $staff->id) }}">Edit</x-form.button>
            <form method="POST" action="{{ route('staff.destroy', $staff->id) }}" >
                @csrf
                @method('DELETE')
                <x-form.button type="submit" bgcolor='red' href="{{ route('staff.edit', $staff->id) }}">Delete</x-form.button>
            </form>
        </td>
    </x-layout.tbody>
    @endforeach
    <x-slot name="link">
        <div class='flex-1'>
        {!! $staffs->onEachSide(2)->links() !!}
        </div>
        <x-form.button type='a'  href="{{ route('staff.create') }}" bgcolor='green'>New</x-form.button>
    </x-slot>
</x-layout.table>
@endsection