@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card m-4">
                    <div class="card-header">
                        <h1 class="text-center">Crud con Laravel 8 y GitHub</h1>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('personas.create') }}" class="btn btn-primary">Agregar nueva persona</a>
                        <p></p>
                        <table class="table table-sm table-bordered border-dark table-hover text-center">
                            <thead>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </thead>
                            <tbody>
                                @foreach ($personas as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nombre }}</td>
                                        <td>{{ $item->paterno }}</td>
                                        <td>{{ $item->materno }}</td>
                                        <td>
                                            <a href="" class="btn btn-warning">Editar</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('personas.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
