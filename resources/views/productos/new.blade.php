@extends('layouts.menu')

@section('contenido')

<div class="row">
    <h1 class="blue-grey-text text-darken-3">
        Nuevo producto
    </h1>
</div>
<div class="row">
    <form class="col s8" action="" method="POST">

        <div class="row">
            <div class="input-field col s8">
                <input type="text" placeholder="Nombre del producto" id="nombre" name="nombre">
                <label for="nombre">Nombre del producto:</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s8">
                <textarea id="desc" class="materialize-textarea"></textarea>
                <label for="desc">Descripción</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s8">
                <input type="number" placeholder="precio del producto" id="precio" name="precio">
                <label for="precio">Precio:</label>
            </div>
        </div>
        <div class="file-field input-field col s8 ">
            <div class="btn blue-grey darken-3 ">
                <span>Imagen...</span>
                <input name="imagen" type="file">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div><br>
            <div class="row">
                <button class="btn blue-grey darken-3" type="submit" name="action">Guardar</button>
            </div>
        </div>

    </form>
</div>
@endsection