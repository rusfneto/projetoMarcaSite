@extends('site.master.layout')
@section('title','Cadastrar Clientes')
@section ('content')
<form method="POST" action="{{route('site.importar_clientes')}}">
<br>
{!! csrf_field() !!}
<div class="container py-5">
<div class="row">
<h2 class='text-danger'>Cadastro de Clientes</h2>
</div>
  <div class="row">
    <div class="col"><input class="form-control" type="text" name="razaosocial" placeholder="Razão Social"></div>
    <div class="w-100"></div><br>
    <div class="col"><input class="form-control" type="text" name="nomefantasia" placeholder="Nome Fantasia"></div>
    <div class="w-100"></div><br>
    <div class="col"><input class="form-control" type="text" name="cnpj" placeholder="CNPJ"></div>
    <div class="col"><input class="form-control" type="text" name="endereco" placeholder="Endereço Completo"></div>
    <div class="w-100"></div><br>
    <div class="col"><input class="form-control" type="text" name="email" placeholder="Email"></div>
    <div class="col"><input class="form-control" type="text" name="telefone" placeholder="Telefone"></div>
    <div class="w-100"></div><br>
    <div class="col"><input class="form-control" type="text" name="responsavel" placeholder="Responsável da Empresa"></div>
    <div class="col"><input class="form-control" type="text" name="cpf" placeholder="CPF"></div>
  </div>
</div>
<div class="col-lg"><center><input type="submit" class="btn btn-danger btn-lg" value="CADASTRAR CLIENTE"></input></center></div>
</form>
@endsection