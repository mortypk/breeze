@extends('home')
@section('title')
Staff List
@endsection
@section('body')
<x-layout.table>
    <x-slot name="head">
        <th class="sticky top-0 p-1">ID</th>
        <th class="sticky top-0 p-1">Name</th>
        <th class="sticky top-0 p-1">Title</th>
        <th class="sticky top-0 p-1"></th>
    </x-slot>
    @foreach ($staffs as $staff)
    <x-layout.tbody>
        <td class="p-1">{{ $staff->id }}</td>
        <td class="p-1">{{ $staff->name }}</td>
        <td class="p-1">{{ $staff->title }}</td>
        <td class="p-1">
            <x-form.button type="a" href="{{ route('staff.edit', $staff->id) }}">Edit</x-form.button>
        </td>
    </x-layout.tbody>
    @endforeach
    <x-slot name="link">
        {!! $staffs->onEachSide(2)->links() !!}
    </x-slot>
</x-layout.table>
@endsection