<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "este metodo es para mostrar el formulario de crear categorias";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "este metodo es para guardar categorias";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "este metodo es para mostrar categorias";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "este metodo es para mostrar el formulario de editar categorias";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "este metodo es para actualizar categorias";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "este metodo es para eliminar categorias";
    }
}
