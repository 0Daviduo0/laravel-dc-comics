@extends('layouts.main-layout')

@section('content')
    
<ul>
    @foreach ($person as $people)
        <li>
            {{ $people -> firstName }}
            {{ $people -> lastName }}
            -
            <a href="{{ route('person.delete', ['id' => $people -> id]) }}">
                 <i class="fa-solid fa-trash-can"></i> 
            </a>
        </li>
    @endforeach
</ul>

@endsection