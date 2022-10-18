@extends('home')
@section('title')
    List of Designation
@endsection
@section('body')
    <x-layout.table>
    <x-layout.tbody>
        @foreach ($titles as $title)
            <td>{{ $title->id }}</td>
            <td>{{ $title->title }}</td>
        @endforeach
    </x-layout.tbody>
    </x-layout.table>
@endsection