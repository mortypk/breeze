@extends('home')
@section('title')
List of Students
@endsection
@section('body')
<x-layout.table>
    @if ($students->hasPages())
    <x-slot name="link">
        <div class='flex-1'>
        {{ $students->links() }}
        </div>
        <x-form.button type='a' href="{{ route('student.create') }}">New</x-form.button>
    </x-slot>
    @endif
    <x-slot name="head">
        <th>#</th>
        <th>Name</th>
        <th>Father Name</th>
        <th>Phone</th>
        <th>Gender</th>
        <th>Date of Birth</th>
        <th></th>
    </x-slot>
    @foreach ($students as $student )
    <x-layout.tbody>
        <td class="p-1">{{ $student->id }}</td>
        <td class="p-1">{{ $student->name }}</td>
        <td class="p-1">{{ $student->fname }}</td>
        <td class="p-1">{{ $student->phone }}</td>
        <td class="p-1">{{ $student->gender }}</td>
        <td class="p-1">{{ \Carbon\Carbon::parse($student->birthday)->format('d-m-Y') }}</td>
        <td class="flex p-1 space-x-1">
            <x-form.button type="a" href="{{ route('student.show', $student->id) }}">Show</x-form.button>
            <x-form.button type="a" href="{{ route('student.edit', $student->id) }}">Edit</x-form.button>
            <form method="POST" action="{{ route('student.destroy', $student->id) }}">
                @csrf
                @method('DELETE')
                <x-form.button bgcolor='red' type='submit'>Delete</x-form.button>
            </form>
        </td>
    </x-layout.tbody>
    @endforeach
</x-layout.table>
@endsection