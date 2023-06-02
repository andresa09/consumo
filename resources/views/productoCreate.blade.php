<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>




<div class="container mt-5 ">
    <div class="card"> 

        <div class="card-header">
            <h1 class="text-center">
                INGRESO DE PRODUCTO
            </h1>
        </div>

        <div class="card-body">
            <form action="{{ route('productos.store') }}" method="post" >
            
                @csrf
                @method('POST')
                
                
                <div class="container">
                    <div class="row">
                        <div class="col-10 input-group">
                            <label class="w-100" for="descripcion">DESSCRIPCION DEL PRODUCTO</label>
                            <input type="text" class="form-control" name="descripcion" id="descripcion">
                        </div>
                        <div class="col-12">
                            <label class="w-100" for="id_categoria"> CATEGORIA </label>
                            {{-- <input type="text" class="form-control" name="id_categoria" id="id_categoria"> --}}
                            <select class="form-select" name="id_categoria" aria-label="Default select example" >
                                <option selected>SELECCIONE UNA CATEGORIA</option>
                                <option value="1">VENTAS</option>
                                <option value="2">INGRESOS</option>
                                <option value="3">COMPRAS</option>
                              </select>
                        </div>
                        <div class="col-12">
                            <label class="w-100" for="precio">PRECIO</label>
                            <input type="text" class="form-control" name="precio" id="precio">
                        </div>
                        <div class="col-12">
                            <label class="w-100" for="estado">ESTADO</label>
                            <select name="estado" class="form-control" id="estado">
                                <option selected>SELECCIONE UN ESTADO</option>
                                <option value="APROBADO">APROBADO</option>
                                <option value="NO APROBADO">NO APROBADO</option>
                                <option value="EN GESTION">EN GESTION</option>
                            </select>
                
                        </div>
                        <div class="col-12">
                            <label class="w-100" for="establecimiento_final">ESTABLECIMIENTO FINAL</label>
                            <input type="text" class="form-control" name="establecimiento_final" id="establecimiento_final">
                        </div>
                        
                        <div class="col-12 mt-2" > 
                            
                            <input class="btn rounded-pill btn-success" type="submit" value="GUARDAR ">
                            <a href="{{ route('productos.index') }}" class="btn rounded-pill btn-danger" >VOLVER AL INICIO <i class="bi bi-reply" style="color: red;"></i></a>
                            
                        
                        </div>
                    </div>
                </div>
 
    
                
            </form>
        </div>

    </div>
</div>





