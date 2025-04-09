<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = DB::table("categorias")->get();
        return response()->json($categorias);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table("categorias")->insert([
            "nombre"=> $request->nombre,
            "detalle"=> $request->detalle,
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        return response()->json(["mensaje"=> "categoria registrada"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria = DB::table("categorias")->where("id", $id)->first();

        return response()->json($categoria, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table("categorias")
        ->where('id', $id)
        ->update([
            "nombre" => $request->nombre,
            "detalle" => $request->detalle,
            'updated_at' => now(),
        ]);
        return response()->json(["mensaje"=> "categoria actualizado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table("categoria")
        ->where('id', $id)->delete();
        return response()->json(["messaje" => "categoria eliminada"]);
    }
}
