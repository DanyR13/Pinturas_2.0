@extends('layouts.master')
@section('title')
Login
@stop
@section('header')
@stop
@section('navbar')
@parent 
@stop
@section('content')
    <h1>Login Exitoso</h1>
    Bienvenid@ {{$user}}
    @stop 

@section('footer')

    Derechos reservados @parent
    @stop   