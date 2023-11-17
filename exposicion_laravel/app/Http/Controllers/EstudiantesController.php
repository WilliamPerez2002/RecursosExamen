<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $estudiante = Http::get("http://localhost/Aplicaciones_orientadas_a_servicios/quinto/api.php");
        $estudiantesArray = $estudiante->json();
        
        return view('estudiante.mostrar', compact('estudiantesArray'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "hola";
        return view('estudiante.create');
    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Http::asForm()->post('http://localhost/Aplicaciones_orientadas_a_servicios/quinto/api.php', [
            'cedula' => $request->input('cedula'),
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'direccion' => $request->input('direccion'),
            'telefono' => $request->input('telefono'),
        ]);
        return redirect('/estudiante');
    }

    /**
     * Display the specified resource.
     */
    /*public function show(string $id)
    {
        //
    }*/

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $estudiante = Http::get('http://localhost/Aplicaciones_orientadas_a_servicios/quinto/api.php')->json();
        $estudiante = collect($estudiante)->firstWhere('CEDULA', $id);

        $estudiante = [
            'cedula' => $estudiante['CEDULA'],
            'nombre' => $estudiante['NOMBRE'],
            'apellido' => $estudiante['APELLIDO'],
            'direccion' => $estudiante['DIRECCION'],
            'telefono' => $estudiante['TELEFONO'],
        ];

        echo $estudiante['cedula'];


        return view('estudiante.edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $cedula = $request->input('cedula');
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $direccion = $request->input('direccion');
        $telefono = $request->input('telefono');

        $data = [
            'cedula' => $cedula,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'direccion' => $direccion,
            'telefono' => $telefono,
        ];

        Http::put('http://localhost/Aplicaciones_orientadas_a_servicios/quinto/api.php', $data);
        return redirect('/estudiante');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Cedula eliminada: "+$id;
    }
}