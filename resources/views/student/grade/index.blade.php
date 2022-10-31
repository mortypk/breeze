@extends('home')
@section('title')
    List of Classes
@endsection
@section('body')
<x-layout.table>
    <x-slot name='head'>
        <td>#</td>
        <td>Class</td>
        <td></td>
        <td></td>
    </x-slot>
    @foreach ($grades as $grade)
    <x-layout.tbody>
        <td>{{ $grade->id }}</td>
        <td>{{ $grade->grade }}</td>
        <td>
            <x-layout.flexwrap>
            @foreach ($grade->students as $student)
                <x-form.chip>{{ $student->name }}</x-form.chip>
            @endforeach
            </x-layout.flexwrap>
        </td>
        <td class="flex space-x-1">
            <x-form.button type='a' href="{{ route('grade.show', $grade->id) }}">Show</x-form.button>
            <x-form.button type='a' href="{{ route('grade.edit', $grade->id) }}">Edit</x-form.button>
            <form method="POST" action="{{ route('grade.destroy', $grade->id) }}">
                @csrf
                @method('DELETE')
                <x-form.button type='submit' bgcolor="red">Delete</x-form.button>
            </form>
        </td>
    </x-layout.tbody>
    @endforeach
    
<x-slot name="link">
    <div class='flex-1'>
    {!! $grades->onEachSide(2)->links() !!}
    </div>
    <x-form.button type='a'  href="{{ route('grade.create') }}" bgcolor='green'>New</x-form.button>
</x-slot>
</x-layout.table>
@endsection