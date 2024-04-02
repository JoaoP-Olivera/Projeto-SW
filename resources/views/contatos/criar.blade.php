@extends('layouts.main')
@section('title', 'Lista de Contatos | Criar Contato')
@section('conteudo')
<form action="{{ route('contatos.salvar') }}" method="POST">
 @csrf
@include('contatos._formulario')
@endsection
