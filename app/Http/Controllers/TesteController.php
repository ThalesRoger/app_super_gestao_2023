<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2) {
        //echo "A soma de $p1 + $p2 é = ". ($p1 + $p2);
        //Array associativo:
        //return view('site.teste', ['p1' =>$p1, 'p2' =>$p2]);
        //Array Compact:
        //return view('site.teste', compact('p1', 'p2'));
        //obs.: o método compact está fazendo a mesma aplicação que o Arry associativo acima.
        //with:
        return view('site.teste')->with('xyz', $p1)-> with('zzz', $p2); 
        //obs.: o método with está fazendo a mesma aplicação que o Array associativo acima e o compact.

    }
}
