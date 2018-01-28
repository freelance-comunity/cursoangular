<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankController extends Controller
{
    public function process()
    {
        $file_path = storage_path('app/public/banco.txt');
        $lines = (file($file_path));
        foreach ($lines as $line) {
            echo "# de Banco: ".substr($line,64,5);
            // echo $line;
            echo "<br/>";
            echo "Monto: ".substr($line, 34,4);
            echo "<br/>";
            echo "Fecha: ".substr($line, 165,8);
            echo "<br/>";
            echo "********************";
            echo "<br>";
        }
    }
}
