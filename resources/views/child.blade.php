@extends('master')

@section('title', 'Page Title')

@section('sidebar')
  @parent
  <a href="{{ url('/showall') }}">showall</a>
  <a href="{{ url('/add') }}">add</a>
@endsection

@section('content')
    <p>This is my body content.</p>

    @foreach ($users as $user)
        @include('include',['meno' => $user->meno,'priezvisko' => $user->priezvisko])
    @endforeach

@endsection
