@extends('layout')
@section('titulo-pagina')
Livraria-Autores
@endsection
@section('conteudo')
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
@if(auth()->check())
	@if(Gate::allows('atualizar-livro',$livro)||Gate::allows('admin'))
<a href="{{route('autores.create')}}" class="btn btn-primary">Adicionar Autor</a>
	@endif
@endif
</ul>
@endsection