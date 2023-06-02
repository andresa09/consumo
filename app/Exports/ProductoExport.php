<?php

namespace App\Exports;


use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\Http;

class ProductoExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Producto::Consulta();
    // }

    public function collection()
    {
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::get($url.'/producto/Excel');
        $response = json_decode($response);

        return collect($response);
    }


    public function headings():array{
        return[
            'ID',
            'DESCRIPCION',
            'NOMBRE CATEGORIA',
            'PRECIO',
            'ESTADO',
            'ESTABLECIMIENTO FINAL'
        ];
    }
}
