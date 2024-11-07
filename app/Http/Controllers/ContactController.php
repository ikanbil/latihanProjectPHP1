<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function data(){
        return view('contact', [
            'title' => 'contact',
            'nama' => 'Khalid Syihabuddin nabil',
            'Kelas' => '11 PPLG 2',
            'Linkedin' => 'https://www.linkedin.com/in/khalid-nabil-a8b2b52a1/',
            'Github' => 'https://github.com/ikanbil?tab=repositories'
        ]);
    }
}
