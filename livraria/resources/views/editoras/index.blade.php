@extends('layout')
@section('titulo-pagina')
Livraria-editoras
@endsection
@section('conteudo')
@if(auth()->check())
<br>
<ul>
@foreach($editoras as $editora)
<li>
<a href="{{route('editoras.show', ['id'=>$editora->id_editora])}}">
    {{$editora->nome}}
</a></li>
@endforeach
<br>
{{$editoras->render()}}
<br>

	@if(Gate::allows('atualizar-editora',$editora)||Gate::allows('admin'))
<a href="{{route('editoras.create')}}" class="btn btn-primary">Adicionar Editora</a>
	@endif
@endif
</ul>
@endsection