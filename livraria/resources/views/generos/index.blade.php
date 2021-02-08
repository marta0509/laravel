@extends('layout')
@section('titulo-pagina')
Livraria-generos
@endsection
@section('conteudo')
<br>
<ul>
@foreach($generos as $genero)
<li>
<a href="{{route('generos.show', ['id'=>$genero->id_genero])}}">
    {{$genero->designacao}}
</a></li>
@endforeach
<br>
{{$generos->render()}}
<br>
@if(auth()->check())
	@if(Gate::allows('atualizar-livro',$livro)||Gate::allows('admin'))	
<a href="{{route('generos.create')}}" class="btn btn-primary">Adicionar Genero</a>
	@endif
@endif
</ul>
@endsection