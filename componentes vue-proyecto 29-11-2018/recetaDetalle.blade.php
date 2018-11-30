@extends('layouts.app')

@section('elementos-navBar')
    <p style="color: orange"><</p>
    <h5 id="titulo_pag" style="color: orange">{{strtoupper($rec[0]->slug)}}</h5>
@endsection
@section('content')
<detalle-receta></detalle-receta>
@endsection