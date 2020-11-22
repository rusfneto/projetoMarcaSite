@extends('site.master.layout')
@section('title','Página Inicial')
@section('content')<br>
<div class="container py-5">
<div class="row">
<h2 class='text-danger'>Seja Bem Vindo, {{ Auth::user()->name }}</h2>
</div>
<div class="row">
    <div class="col">
    Esta página foi criada como um teste por Rubens Felisberto Neto.
    </div>
</div>
@endsection