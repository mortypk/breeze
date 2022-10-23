@extends('home')
@section('title')
    List of Designation
@endsection
@section('body')
    <x-layout.table>
        <x-slot name='head'>
            <td>#</td>
            <td>Designation</td>
            <td></td>
            <td></td>
        </x-slot>
        @foreach ($titles as $title)
        <x-layout.tbody>
            <td>{{ $title->id }}</td>
            <td>{{ $title->title }}</td>
            <td>
                <x-layout.flexwrap>
                @foreach ($title->staffs as $staff)
                    <x-form.chip>{{ $staff->name }}</x-form.chip>
                @endforeach
                </x-layout.flexwrap>
            </td>
            <td class="flex space-x-1">
                <x-form.button type='a' href="{{ route('title.show', $title->id) }}">Show</x-form.button>
                <x-form.button type='a' href="{{ route('title.edit', $title->id) }}">Edit</x-form.button>
                <form method="POST" action="{{ route('title.destroy', $title->id) }}">
                    @csrf
                    @method('DELETE')
                    <x-form.button type='submit' bgcolor="red">Delete</x-form.button>
                </form>
            </td>
        </x-layout.tbody>
        @endforeach
        
    <x-slot name="link">
        <div class='flex-1'>
        {!! $titles->onEachSide(2)->links() !!}
        </div>
        <x-form.button type='a'  href="{{ route('title.create') }}" bgcolor='green'>New</x-form.button>
    </x-slot>
    </x-layout.table>
@endsection