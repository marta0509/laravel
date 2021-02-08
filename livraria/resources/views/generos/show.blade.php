@extends('layout')
@extends('layout')
@section('titulo-pagina')
Generos-show
@endsection
@section('conteudo')
<br>
<ul>
ID Genero:{{$genero->id_genero}}<br>
Designacao:{{$genero->designacao}}<br>
Observações:{{$genero->observacoes}}<br>
    @if(count($genero->livros))
        @foreach($genero->livros as $livro)
            {{$livro->titulo}}<br>
        @endforeach
    @else  
        <div class="alert alert-danger" role="alert">
            Neste genero ainda não há livros!
        </div>
    @endif 
<!--
Created_at:{{$genero->created_at}}<br>
Updated_at:{{$genero->updated_at}}<br>
Deleted_at:{{$genero->deleted_at}}<br>-->

@if(auth()->check())
	@if(Gate::allows('atualizar-livro',$livro)||Gate::allows('admin'))
<a href="{{route('generos.edit', ['id'=>$genero->id_genero])}}" class="btn btn-primary">Editar Genero</a>
<a href="{{route('generos.delete', ['id'=>$genero->id_genero])}}" class="btn btn-primary">Eliminar Genero</a>
	@endif
@endif
</ul>
@endsection