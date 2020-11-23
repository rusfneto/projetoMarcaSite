@extends('site.master.layout')
@section('title','Cadastrar Propostas')
@section ('content')
<form method="POST" action="{{route('site.importar_propostas')}}" enctype="multipart/form-data">
<br>
{!! csrf_field() !!}
<div class="container py-5">
<div class="row">
<h2 class='text-danger'>Cadastro de Propostas</h2>
</div>
<div class="row">
    <div class="col"><select name="listcliente" class="form-control">
<option>Escolhe o cliente</option>
@foreach ($clientesdb as $listcliente)
<option value="{{$listcliente['nomefantasia']}}">{{$listcliente['nomefantasia']}}</option>
@endforeach
</select></div>
    <div class="w-100"></div><br>
    <input type="hidden" value="{{date('d/m/Y')}}" name="propostaem">
    <div class="col"><input class="form-control" type="text" name="enderecodaobra" placeholder="Endereço da Obra"></div>
    <div class="w-100"></div><br>
    <div class="col"><input class="form-control" type="text" name="tiposervico" placeholder="Tipo de Serviço"></div>
    <div class="w-100"></div><br>
    <div class="col"><input class="form-control" type="text" name="valortotal" placeholder="Valor Total"></div>
    <div class="col"><input class="form-control" type="text" name="valorsinal" placeholder="Valor de Sinal"></div>
    <div class="w-100"></div><br>
    <div class="col"><input class="form-control" type="text" name="qtdparcelas" placeholder="Quantidade de Parcelas"></div>
    <div class="col"><input class="form-control" type="text" name="valorparcelas" placeholder="Valor das Parcelas"></div>
    <div class="w-100"></div><br>
    <div class="col"><input class="form-control" type="text" name="datainiciopg" placeholder="Data de Início do Pagamento"></div>
    <div class="col"><input class="form-control" type="text" name="dataparcelas" placeholder="Data das Parcelas"></div>
    <div class="w-100"></div><br>
    <div class="col"><input type="file" name="arquivo" id=""></div>
    <div class="w-100"></div><br>
    <div class="col"><select name="status" class="form-control">
    <option value="Em aberto">Em aberto</option>
    <option value="Fechado">Fechado</option>
    </select>
    <input type="hidden" value="{{ Auth::user()->name }}" name="criadapor">
    <input type="hidden" value="{{date('Y-m-d h:i:s')}}" name="updated_at">
  </div>
</div><br>
<div class="col-lg"><center><input type="submit" class="btn btn-danger btn-lg" value="CADASTRAR PROPOSTA"></input></center></div>
</form>
@endsection 