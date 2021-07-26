@extends('partails.main')

@section('title')
    Home
@endsection

@section('body')
    @if (Auth::check())
    You are connected <P>{{Auth::user()->name}}</P>
    @else
    You are not connected
    @endif
@endsection
