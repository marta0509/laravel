@extends('layout')
@extends('layout')
@section('titulo-pagina')
Editoras-show
@endsection
@section('conteudo')
@if(auth()->check())
<br>
<ul>
IDE:{{$editora->id_editora}}<br>
Nome:{{$editora->nome}}<br>
Morada:{{$editora->morada}}<br>
Observacoes:{{$editora->observacoes}}<br>

@if(count($editora->livros))
        @foreach($editora->livros as $livro)
            {{$livro->titulo}}<br>
        @endforeach
@else  
    <div class="alert alert-danger" role="alert">
        Nesta editora ainda não há livros!
    </div>
@endif

<!--
Criado:{{$editora->created_at}}<br>
Atualizado:{{$editora->updated_at}}<br>
Eliminado:{{$editora->deleted_at}}<br>-->


	@if(Gate::allows('atualizar-editora',$editora)||Gate::allows('admin'))
<a href="{{route('editoras.edit', ['id'=>$editora->id_editora])}}" class="btn btn-primary">Editar Editora</a>
<a href="{{route('editoras.delete', ['id'=>$editora->id_editora])}}" class="btn btn-primary">Eliminar Editora</a>
	@endif
@endif
</ul>
@endsection