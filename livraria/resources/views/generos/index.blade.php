@extends('layout')
@section('titulo-pagina')
Livraria-generos
@endsection
@section('conteudo')
@if(auth()->check())
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

	@if(Gate::allows('atualizar-genero',$genero)||Gate::allows('admin'))	
<a href="{{route('generos.create')}}" class="btn btn-primary">Adicionar Genero</a>
	@endif
@endif
</ul>
@endsection