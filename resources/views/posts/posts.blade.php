@extends('layouts.app')

@section('content')
    <index-blog posts='@json($posts)' user='@json(auth()->user())'></index-blog>
@endsection
