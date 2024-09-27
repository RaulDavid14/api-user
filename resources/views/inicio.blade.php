@extends('layouts.app')

@section('titulo') Inicio de Sesión @endsection

@section('body')
    <div>
        <form action="" method="post">
            <div class="">
                <label for="">Primer Nombre: </label>
                <input name="pnombre" type="text">
            </div>
            <div class="">
                <label for="">Segundo Nombre: </label>
                <input name="snombre" type="text">
            </div>
            <div class="">
                <label for="">Apellido Paterno: </label>
                <input name="apaterno" type="text">
            </div>
            <div class="">
                <label for="">Apellido Materno: </label>
                <input name="amaterno" type="text">
            </div>
            <div>
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
@endsection
