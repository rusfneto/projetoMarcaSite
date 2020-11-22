@extends('site.master.layout')
@section('title','Lista de Clientes')
@section ('content')
<div class="container py-5">
<br>
<div class="row">
<h2 class='text-danger'>Lista de Clientes</h2>
</div>
<div class="row">
<table class="table table-bordered table-striped">
<tr>
<th>Razão Social</th>
<th>Nome Fantasia</th>
<th>CNPJ</th>
<th>Endereço</th>
<th>Email</th>
<th>Telefone</th>
<th>Responsável</th>
<th>CPF Responsável</th>
</tr>
@foreach($listaclientes as $listcliente)
<tr>
<td>{{$listcliente->razaosocial}}</td>
<td>{{$listcliente->nomefantasia}}</td>
<td>{{$listcliente->cnpj}}</td>
<td>{{$listcliente->endereco}}</td>
<td>{{$listcliente->email}}</td>
<td>{{$listcliente->telefone}}</td>
<td>{{$listcliente->responsavel}}</td>
<td>{{$listcliente->cpf}}</td>
</div>
</div>
@endforeach
@endsection