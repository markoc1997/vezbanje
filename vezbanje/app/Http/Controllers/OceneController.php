<?php

namespace App\Http\Controllers;

use App\Models\Ocene;
use Illuminate\Http\Request;

class OceneController extends Controller
{
    public function addGrade(Request $request)
    {
        $request->validate([
            "profesor" => "string|required",
            "predmet" => "string|required",
            "ocena" => "string|required",
        ]);

        Ocene::create([
            'profesor' => $request->get("profesor"),
            'predmet' => $request->get("predmet"),
            'ocena' => $request->get("ocena")
        ]);

        return redirect("/");
    }
}
