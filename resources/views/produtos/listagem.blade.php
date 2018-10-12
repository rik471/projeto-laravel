@extends('layout.main')

@section('content')

 @if(empty($produtos))

  <div>Você não tem nenhum produto cadastrado.</div>

 @else
  <h1>Listagem de produtos</h1>
  <div class="Sem-bolinha">
  <table> 
    <td>Nome</td> <td>Valor</td> <td>Descrição</td> <td>Quantidade</td> <td>Tamanho</td>
  </table>
</div>
  <table class="table table-striped table-bordered table-hover">
    @foreach ($produtos as $p)
    <tr class="{{ $p->quantidade <= 1 ? 'danger' : '' }}">
      <td> {{ $p->nome }} </td>
      <td> {{ $p->valor }} </td>
      <td> {{ $p->descricao }} </td>
      <td> {{ $p->quantidade }} </td>
      <td> {{ $p->tamanho }} </td>
      <td> {{ $p->categoria->nome or ''}}</td>
      <td>
        <a href="/produtos/mostra/{{ $p->id}} ">
          <span class="glyphicon glyphicon-search"></span>
        </a>
      </td>
      <td>
        <a href="/produtos/remove/{{ $p->id}} ">
          <span class="glyphicon glyphicon-trash"></span>
        </a>
      </td>
    </tr>
    @endforeach
  </table>

  @if(old('nome'))
    <div class="alert alert-success">
      O produto {{old('nome')}} foi adcionado com sucesso!
    </div>
  @endif


  @endif
@stop