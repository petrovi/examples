@extends('layouts.main')

@section('tblock')Главная страница@endsection

@section('content')
<h1>Главная страница<h1>
@endsection

@section('aside')
    @parent
    <p>Доп текст</P>
@endsection
