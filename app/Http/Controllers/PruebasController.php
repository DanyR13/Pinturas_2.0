<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PruebasController extends Controller
{

        public function picasso() {
            return view ('picasso',
                ['title'=>'Pablo Picasso',
                'header'=>'Pablo Picasso']);
            }
        public function van() {
            return view ('van',
                ['title'=>'Vincent van Gogh',
                'header'=>'Vincent van Gogh']);
            }
        public function kahlo() {
            return view ('kahlo',
                ['title'=>'Frida Kahlo',
                'header'=>'Frida Kahlo']);
            } 
         public function rembr() {
            return view ('rembr',
                ['title'=>'Rembrandt',
                'header'=>'Rembrandt']);
            }
        public function vinci() {
            return view ('vinci',
                ['title'=>'Leonardo da Vinci',
                'header'=>'Leonardo da Vinci']);
            }
    
    

        public function login() {
            return view('admon.login');
        }

        public function validarLogin(Request $request) {
            $user = $request->input('user');
            $pass = $request->input('password');

            if($user === 'DanyR13' && $pass === 'Hola123'){
                $url='admon.dashboard';
            }
            elseif($user === 'Jess' && $pass === 'Hola123'){
                $url='admon.dashboard';
            }
            elseif($user === 'Toledo' && $pass === 'Hola123'){
                $url='admon.dashboard';
            } else {
                $url='admon.login';
            }
            return view ($url, [
                'user'=>$request->input('user')
            ]);
        }
}
