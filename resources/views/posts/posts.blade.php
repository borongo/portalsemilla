@extends('layouts.app')

@section('content')
    <index-blog posts='@json($posts)' ></index-blog>
@endsection
