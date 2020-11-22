@extends('site.master.layout')
@section('title','Lista de Propostas')
@section ('content')



<div class="container py-5">
<br>
<div class="row">
<h2 class='text-danger'>Lista de Propostas</h2>
</div>


<div class="row">
    <div class="col">
    <form action="{{route('site.localizarproposta')}}" method="post">
@csrf
<input type="text" name="filtro" placeholder="Filtro: Nome Cliente/Proposta feita em/Status" class="form-control"></input>
    </div>
    <div class="col">
    <button type="submit" class="btn btn-danger btn-sm">Buscar</button>
</form>
    </div>
  </div>
</div>

<div class="row">
<div class="table-responsive">
<table  class="table table-hover table-bordered table-striped" id="editable">
<tr>
<th class='col-md-1'>Cliente</th>
<th class='col-md-1'>Proposta Feita em</th>
<th class='col-md-1'>Início Pagamento</th>
<th class='col-md-1'>Tipo de Serviço</th>
<th class='col-md-1'>Qtd. Parcelas</th>
<th class='col-md-1'>Sinal R$</th>
<th class='col-md-1'>Valor Parcelas</th>
<th class='col-md-1'>Total</th>
<th class='col-md-1'>Status</th>
<th>Ações</th>
</tr>

@foreach($listapropostas as $listproposta)

<tr>
<td>{{$listproposta->listcliente}}</td>
<td>{{$listproposta->propostaem}}</td>
<td>{{$listproposta->datainiciopg}}</td>
<td>{{$listproposta->tiposervico}}</td>
<td>{{$listproposta->qtdparcelas}}</td>
<td>R${{$listproposta->valorsinal}}</td>
<td>R${{$listproposta->valorparcelas}}</td>
<td>R${{$listproposta->valortotal}}</td>
<td><form action="{{route('site.updateproposta', $listproposta->id) }}" method="post">
    @csrf
    <select name="status" class="custom-select mr-sm-2">

    <option value="{{$listproposta->status}}">{{$listproposta->status}} - Atual</option>
    <option value="{{$listproposta->status}}">---Atualizar---</option>
    <option value="Em Aberto">Em Aberto</option>
    <option value="Fechado">Fechado</option>
    
    </select>
    
    <center><input type="submit" class="btn btn-danger btn-sm" value="Atualizar"></input></center>
    </form>
<td><a href="{{ route('site.editproposta', $listproposta->id)}}">Detalhes</a></td>
</tr>
@endforeach
</table>
</div>
</div>
</div>
<div class="col-lg"><center><a class="btn btn-danger btn-lg" href="/exportar-propostas" role="button">Exportar para Excel</a></center></div>
@endsection