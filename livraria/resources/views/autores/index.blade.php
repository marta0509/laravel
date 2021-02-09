@extends('layout')
@section('titulo-pagina')
Livraria-Autores
@endsection
@section('conteudo')
@if(auth()->check())
<br>
<ul>
@foreach($autores as $autor)
<li>
<a href="{{route('autores.show', ['id'=>$autor->id_autor])}}">
    {{$autor->nome}}
</a></li>
@endforeach
<br>
{{$autores->render()}}
<br>

	@if(Gate::allows('atualizar-autor',$autor)||Gate::allows('admin'))
<a href="{{route('autores.create')}}" class="btn btn-primary">Adicionar Autor</a>
	@endif
@endif
</ul>
@endsection