@extends('layouts.app')

@section('content')
    <detalle-user avance='@json($user["avance"])'  user='@json($user['user'])'></detalle-user>
@endsection
