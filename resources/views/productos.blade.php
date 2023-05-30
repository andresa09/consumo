<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>

<meta http-equiv="refresh" content="4">



<div class="container mt-5">
    <div class="card">

        <div class="card-header">
            <h1 class="text-center">
                PRUEBA DESDE PREDUCTOS 2
            </h1>


            <div class="btn-group w-100" role="group" aria-label="Button group with nested dropdown">

                <div class="btn-group " role="group">
                    <button id="btnGroupDrop1" type="button" class="btn rounded-pill btn-primary dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        OPCIONES <i class="bi bi-bar-chart-steps"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">

                        <li class="list-group-item list-group-item-success"><a href="{{ route('productos.store') }}"
                                class="dropdown-item">Crear Nuevo Producto <i
                                    class="bi bi-plus-circle-dotted"style="font-size: 1.5rem; color: #32CD32;"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>



        <div class="card-body">

            <table id="tela" class="table table-responsive table-striped " style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>DESCRIPCION</th>
                        <th>CATEGORIA</th>
                        <th>PRECIO</th>
                        <th>ESTADO</th>
                        <th>ESTABLECIMIENTO FINAL </th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($data as $producto)
                        <tr>
                            <td>{{ $producto['id'] }}</td>
                            <td>{{ $producto['descripcion'] }}</td>
                            <td>{{ $producto['nombre_categoria'] }}</td>
                            <td>{{ $producto['precio'] }}</td>

                            <td>

                                <span
                                    @if ($producto['estado'] == 'aprobado' and $producto['precio'] >= '125000') class="badge rounded-pill text-bg-success"

                                @elseif ($producto['estado'] == 'aprobado' and $producto['precio'] <= '125000')
                                class="badge rounded-pill text-bg-secondary"

                                @elseif ($producto['estado'] == 'no aprobado')
                                class="badge rounded-pill text-bg-danger"

                                @elseif ($producto['estado'] == 'en gestion' and $producto['precio'] <= '112000')
                                class="badge rounded-pill text-bg-primary"

                                @elseif ($producto['estado'] == 'en gestion' and $producto['precio'] >= '112000')
                                class="badge rounded-pill text-bg-secondary"
                                
                                @else
                                style="background-color: #F0F8FF " @endif>{{ $producto['estado'] }}
                            </td>

                            <td>{{ $producto['establecimiento_final'] }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button"
                                            class="btn rounded-pill btn-warning dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            OPCIONES <i class="bi bi-bar-chart-steps"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">

                                            <li class="list-group-item list-group-item-danger ">
                                                <form class="m-0"
                                                    action="{{ route('producto.delete', ['id' => $producto['id']]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input class="btn" type="submit" value="BORRAR">
                                                </form>
                                            </li>
                                            <li class="list-group-item list-group-item-primary ">
                                                <a class="btn "
                                                    href="{{ route('producto.view', $producto['id']) }}">EDITAR</a>
                                            </li>


                                        </ul>
                                    </div>
                                </div>




                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>




    </div>

</div>




<script>
    $(document).ready(function() {
        $('#tela').DataTable({
            responsive: true,
            processing: true,

            lengthMenu: [5, 10, 25, 50, 75],
            language: {
                "url": "http://cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"
            },
            pagingType: 'full_numbers',
        });
    }); <
    script >
