@extends('layouts.main-layout')

@section('content')

    <h1>Aggiungi Persona</h1>

    <form method="POST" action="{{ route('person.ToDB') }}">
        @csrf

        <input type="text" name="firstName" id="" placeholder="nome">
        <input type="text" name="lastName" id="" placeholder="cognome">
        <input type="date" name="dateOfBirth" id="">
        <input type="number" name="heigth" id="" placeholder="altezza">
        <input type="submit" value="Aggiungi">

    </form>
    
@endsection