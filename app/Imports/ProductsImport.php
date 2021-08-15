<?php
namespace App\Imports;

use App\ProductModel;

use Maatwebsite\Excel\Concerns\ToModel;
 use Maatwebsite\Excel\Concerns\Importable;
 use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
 use Importable;

    public function model(array $row)
    {
        return new ProductModel([

            // 'product_name'              => $row[0],

            'recipient'        =>   $row['recipient'],
     
            'message'          =>   $row['message'],
     
    
            // 'password' => \Hash::make('123456'),

        ]);

    }

}

?>