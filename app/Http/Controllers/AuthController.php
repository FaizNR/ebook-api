<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return
        [
            "NISN" => 3103119037,
            "Nama" => "Faiz Naufal Ramadhan",
            "Gender" => "Laki-laki",
            "Phone" => 6288985006348,
            "Kelas" => "XII RPL 3"
 
       ];

    }

}