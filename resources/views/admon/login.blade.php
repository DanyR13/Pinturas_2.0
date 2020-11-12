@extends('layouts.master')
@section('title')
Login
@stop
@section('header')
Login
@stop
@section('navbar')   
@stop
@section('content')
    <form action="{{action('PruebasController@validarLogin')}}" method="post">
    {{csrf_field()}}
    <label for="user">Usuario</label>
    <input type="text" name="user">
    <br>
    <label for="password">Password</label>
    <input type="password" name="password">
    <br>
    <input type="submit" value="Submit">
    </form>
    @stop 
@section('footer')
    Derechos reservados @parent
    @stop   