@extends('layouts.app')

@section('content')
    <videos videos='@json($videos)'></videos>
@endsection

