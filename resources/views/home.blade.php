@extends('layouts.app')

@section('content')
    <index user='@json($users["user"])' users='@json($users["users"])'></index>
@endsection

