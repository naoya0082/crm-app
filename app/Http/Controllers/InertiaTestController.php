<?php

namespace App\Http\Controllers;

use App\Models\InertiaTest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class InertiaTestController extends Controller
{
    public function index() {
        return Inertia::render('Inertia/Index');
    }

    public function show($id) {
        // dd($id);
        return Inertia::render('Inertia/Show',
        [
            'id' => $id
        ]);
    }

    public function store(Request $req) {
        $inertiaTest = new InertiaTest;
        $inertiaTest->title = $req->title;
        $inertiaTest->content = $req->content;
        $inertiaTest->save();

        return to_route('inertia.index');
    }
}
