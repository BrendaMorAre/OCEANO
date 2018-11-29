<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PruebaController extends Controller
{
    public function import_tarifas(Request $request){
        $this->validate($request,[
            'file' => 'required|mimes:csv,txt'
        ]);

        if (($handle = fopen($_FILES['file']['tmp_name'],"r")) !== FALSE){
            fgetcsv($handle);

            while (($data = fgetcsv($handle ,1000,",")) !== FALSE){
                $addPro = DB::table('tarifas')->insert([
                    'mes' => $data[0],
                    'limi_inf' => $data[1],
                    'limi_sup' => $data[2],
                    'cuota_fija' => $data[3],
                    'excedente' => $data[4]
                ]);
            }
        }
    }

    public function index(){
        return view('prueba');
    }

}
