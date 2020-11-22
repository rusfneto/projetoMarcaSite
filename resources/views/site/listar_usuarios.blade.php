@extends('site.master.layout')
@section('title','Lista de Usuários')
@section ('content')
<div class="container py-5">
<br>
<div class="row">
<h2 class='text-danger'>Lista de Usuários</h2>
</div>
<div class="row">
<table class="table table-bordered table-striped">
<tr>
<th>ID</th>
<th>Nome</th>
<th>E-mail</th>
<th>Senha</th>
</tr>
@foreach($listausuarios as $listausuario)
<tr>
<td>{{$listausuario->id}}</td>
<td>{{$listausuario->name}}</td>
<td>{{$listausuario->email}}</td>
<td>• • • •</td>
</div>
</div>
@endforeach
@endsection