@extends('layout')
@section('titulo-pagina')
Livraria-editoras
@endsection
@section('conteudo')
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
@if(auth()->check())
	@if(Gate::allows('atualizar-livro',$livro)||Gate::allows('admin'))
<a href="{{route('editoras.create')}}" class="btn btn-primary">Adicionar Editora</a>
	@endif
@endif
</ul>
@endsection