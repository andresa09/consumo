<h1>
    PRUEBA DESDE PREDUCTOS
</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>DESCRIPCION</th>
            <th>CATEGORIA</th>
            <th>PRECIO</th>
            <th>ESTADO</th>
            <th>ESTABLECIMIENTO FINAL </th>
        </tr>
    </thead>

    <tbody>
        @foreach ( $data['data'] as $producto )
        <tr>
            <td>{{$producto['id']}}</td>
            <td>{{$producto['descripcion']}}</td>
            <td>{{$producto['id_categoria']}}</td>
            <td>{{$producto['precio']}}</td>
            <td>{{$producto['estado']}}</td>
            <td>{{$producto['establecimiento_final']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>