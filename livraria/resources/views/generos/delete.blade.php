@extends('layout')
@section('titulo-pagina')
Generos-delete
@endsection
@section('conteudo')
<br>
<h2>Deseja eliminar a Editora</h2>
<h2>{{$generos->designacao}}</h2>
<form action="{{route('generos.destroy', ['id'=>$generos->id_genero])}}" method="post">
    @csrf
    @method('delete')
    <input type="hidden" value="{{$generos->id_genero}}">
    <input type="submit" value="Eliminar">
</form>
@endsection