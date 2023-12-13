<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extracurricular;

class ExtracurricularController extends Controller
{
    public function index()
    {
        $extra = Extracurricular::get();
        return view('extracurricular', ['extraList' => $extra]);
    }

    public function show($id)
    {
        $extra = Extracurricular::with('students')
            ->findOrFail($id);
        return view('extracurricular-detail', ['extra' => $extra]);
    }
}
