<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class MainController extends Controller
{
    public function showPage(): View
    {
        $data = [
            'João' => [
                'Portugues',
                'Ingles'
            ],
            'Maria' => [
                'Portugues',
                'Espanhol'
            ],
            'Ana' => [
                'Portugues',
                'Ingles',
                'Espanhol'
            ],
        ];

        return view('home', ['pessoas_linguas' => $data]);
    }
}
