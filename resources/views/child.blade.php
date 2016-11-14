@extends('master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>

    @foreach ($users as $user)
        @include('include',['meno' => $user->meno,'priezvisko' => $user->priezvisko])
    @endforeach

@endsection
