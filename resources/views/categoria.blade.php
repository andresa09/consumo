<h1>
    PROBADO DESDE CATEGORIA
   
</h1>
<table>
    <thead>
        <tr>
            <th>ID </th>
            <th> NOMBRE</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $data2['data'] as $categoria)
        <tr>
           
        
            
        <td>{{$categoria['id']}}</td>
        <td>{{$categoria['nombre_categoria']}}</td>
        </tr>
    @endforeach
        
    </tbody>
</table>