<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patinetes;
class PatinetesController extends Controller
{
    function __contrusct()
    {
        $this->middleware('permission:ver-patinetes|crear-patinetes|editar-patinetes|borrar-patientes', ['only'=>['index']]);
        $this->middleware('permission:crear-patinetes', ['only'=>['create', 'store']]);
        $this->middleware('permission:editar-patinetes', ['only'=>['edit', 'update']]);
        $this->middleware('permission:borrar-patinetes', ['only'=>['destroy']]);
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patinetes = Patinetes:: paginate(5);
        return view('patinetes.index', compact('patinetes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patinetes.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'marca' => 'required' ,
            'modelo' => 'required',
            'estado' => 'required',
            'velocidad' => 'required',
            'tiempo_uso' => 'required'
        ]);

       $patinetes = Patinetes::create($request->all());
       return redirect()->route('patinetes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Patinetes $patinetes)
    {
        return view('patinetes.editar', compact('patinetes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patinetes $patinetes)
    {
        request()->validate([
            'marca' => 'required' ,
            'modelo' => 'required',
            'estado' => 'required',
            'velocidad' => 'required',
            'tiempo_uso' => 'required'
        ]);

        $patinetes->update($request->all());
        return redirect()->route('patinetes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patinetes $patinetes)
    {
        $patinetes->delete();
        return redirect('patinetes.index');
    }
}
