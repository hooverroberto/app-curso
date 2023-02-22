<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use App\Models\Frutayverdura;
use Illuminate\Http\Request;

class RelacionFrutasyverduras extends Controller
{
    //
    public function index(){
        $inventarios = Inventario::all();
        return view('inventario', compact('inventarios'));
    }
}
