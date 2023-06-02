<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>

<div class="container mt-5">
    <div class="card">

        <div class="card-header">
            <h1 class="text-center">
                VISTA USUARIO
            </h1>
        </div>



        <div class="card-body">
            @foreach ($data as $producto)
                <form action="{{ route('producto.update', ['id' => $producto['id']]) }}" method="post">

                    @csrf
                    @method('PUT')

                    <div class="container">
                        <div class="row">

                            <input type="hidden" name="id" value=" {{ $producto['id'] }} ">

                            <div class="col-10 input-group">
                                <label class=" form-label w-100" for="descripcion">DESSCRIPCION DEL PRODUCTO</label>
                                <input type="text" class="form-control" name="descripcion" id="descripcion"
                                    value="{{ $producto['descripcion'] }}">

                            </div>

                            <div class="col-10 input-group">
                                <label class=" form-label w-100" for="id_categoria"> CATEGORIA </label>
                                {{-- <input type="text" class="form-control" name="id_categoria" id="id_categoria" value="{{$producto['id_categoria']}}"> --}}
                                <select class="form-select" name="id_categoria" aria-label="Default select example">
                                    <option selected>{{ $producto['id_categoria'] }}</option>
                                    <option value="1">VENTAS</option>
                                    <option value="2">INGRESOS</option>
                                    <option value="3">COMPRAS</option>
                                </select>
                            </div>


                            <div class="col-10 input-group">
                                <label class=" form-label w-100" for="precio">PRECIO</label>
                                <input type="text" class="form-control" name="precio" id="precio"
                                    value="{{ $producto['precio'] }}">
                            </div>


                            <div class="col-10 input-group">
                                <label class=" form-label w-100" for="estado">ESTADO</label>
                                {{-- <input type="text" class="form-control" name="estado" id="estado" value="{{$producto['estado']}}"> --}}
                                <select name="estado" class="form-control" id="estado">
                                    <option selected>{{ $producto['estado'] }}</option>
                                    <option value="APROBADO">APROBADO</option>
                                    <option value="NO APROBADO">NO APROBADO</option>
                                    <option value="EN GESTION">EN GESTION</option>
                                </select>
                            </div>

                            <div class="col-10 input-group">
                                <label class=" form-label w-100" for="establecimiento_final">ESTABLECIMIENTO
                                    FINAL</label>
                                <input type="text" class="form-control" name="establecimiento_final"
                                    id="establecimiento_final" value="{{ $producto['establecimiento_final'] }}">
                            </div>

                            <div class="col-12 mt-2">
                                <input class="btn rounded-pill btn-success" type="submit" value="GUARDAR  ">

                                <a href="{{ route('productos.index') }}" class="btn rounded-pill btn-danger">VOLVER AL
                                    INICIO <i class="bi bi-reply" style="color: red;"></i></a>
                            </div>

                        </div>

                    </div>
                </form>
            @endforeach
        </div>


    </div>

</div>
