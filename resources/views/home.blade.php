@extends('layouts.app')

@section('title-block', 'Главная страница')

@section('content')
    <h1>Главная страница</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid aspernatur assumenda at autem delectus, dolores fuga fugit hic illum modi necessitatibus nemo obcaecati odio odit pariatur quas repellendus ullam.</p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection
