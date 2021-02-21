@extends('app')

@section('title')
    記事詳細
@endsection

@section('content')
    @include('nav')
    <div class="container">
        @include('articles.card')
    </div>
@endsection
