<?php

namespace App\Http\Controllers;


class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function main () {
        echo "Helo world!!";
    }

    public function napis () {
        echo "<h1>Jakis tytul</h1>";

    }

    public function napisImie ($imie) {
        echo "<h1>Witaj $imie</h1>";


    }

}
