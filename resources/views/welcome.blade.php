@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card m-4">
                    <div class="card-header">
                        <h2 class="text-center">Crud con laravel 8 y GitHub</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-sm">
                            <a href="" class="btn btn-primary">Agregar nueva persona</a>
                            <thead>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido paterno</th>
                                <th>Apellido materno</th>
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
                                            <form action="" method="post">
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
