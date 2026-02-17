<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class MainController extends Controller
{
    public function showPage(): View
    {
        $data = [
            'Carlos' => [
                'Portugues',
                'Ingles'
            ],
            'João' => [
                'Portugues',
            ],
            'Maria' => [
                'Portugues',
                'Ingles',
                'Frances'
            ],
        ];

        return view('home', ['pessoas_linguas' => $data]);
    }
}
