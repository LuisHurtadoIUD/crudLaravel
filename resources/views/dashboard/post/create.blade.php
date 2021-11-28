@extends('dashboard.master')
@section('content')
    <h3>Crear Publicación</h3>
    <form action="{{ route('post.store') }}" method="post">
        @include('dashboard.post._form')    
    </form>
@endsection