@extends('layout')
@section('titulo-pagina')
Livraria-livros
@endsection
@section('conteudo')
<br>
<ul>
@foreach($livros as $livro)
<li>
<a href="{{route('livros.show', ['id'=>$livro->id_livro])}}">
    {{$livro->titulo}}
</a>
</li>
@endforeach
<br>
{{$livros->render()}}
<br>
@if(auth()->check())
	@if(Gate::allows('atualizar-livro',$livro)||Gate::allows('admin'))
<a href="{{route('livros.create')}}" class="btn btn-primary">Adicionar Livro</a>
	@endif
@endif
<br>
<br>
</ul>
@endsection
