<h1>
    PRUEBA DESDE PREDUCTO 
</h1>

<form action="{{ route('') }}" method="post">
    @csrf   
                
    <label for="descripcion">DESSCRIPCION DEL PRODUCTO</label>
    <input type="text" name="descripcion" id="descripcion">

    <label for="id_categoria"> CATEGORIA </label>
    <input type="text" name="id_categoria" id="id_categoria">

    <label for="precio">PRECIO</label>
    <input type="text" name="precio" id="precio">

    <label for="estado">ESTADO</label>
    <input type="text" name="estado" id="estado">

    <label for="establecimiento_final">ESTABLECIMIENTO FINAL</label>
    <input type="text" name="establecimiento_final" id="establecimiento_final">
</form>




