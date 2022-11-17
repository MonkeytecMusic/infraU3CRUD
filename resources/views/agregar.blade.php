@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <br>
                <div class="card">
                    <div class="card-header"><h1 class="card-title text-center">Agregar Nueva Persona</h1></div>
                    <div class="card-body">
                        <form action="{{ route('personas.store') }}" method="POST">
                            @csrf
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control rounded-pill border border-dark" name="nombre" id="nombre" required placeholder="Ingresa aqui tu nombre">
                            <br>
                            <label for="paterno">Apellido Paterno:</label>
                            <input type="text" class="form-control rounded-pill border border-dark" name="paterno" id="paterno" required placeholder="Ingresa aqui tu apellido paterno">
                            <br>
                            <label for="materno">Apellido Materno:</label>
                            <input type="text" class="form-control rounded-pill border border-dark" name="materno" id="materno" required placeholder="Ingresa aqui tu apellido materno">
                            <br>
                            <div class="row text-center">
                                <div class="col-sm-6"><button class="btn btn-primary mt-3">Agregar</button></div>
                                <div class="col-sm-6"><a href="{{ route('personas.index') }}" class="btn btn-secondary mt-3">Regresar</a></div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection