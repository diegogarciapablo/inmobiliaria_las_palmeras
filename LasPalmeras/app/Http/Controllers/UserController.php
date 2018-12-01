<?php

namespace palmeras\Http\Controllers;
use palmeras\usuario;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = usuario::all();
        return view('usuarios.index',compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'nombre'=>'required',
            'apellido'=>'required',
            'telefono'=>'required',
            'direccion'=>'required',
            'slug'=>'required',
            'foto'=>'required|image'
        ]);
        if ($request->hasFile('foto')) {
            $file=$request->file('foto');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/imagenes/',$name);

        }
        $persona = new usuario();
        $persona->nombre = $request->input('nombre');
        $persona->apellido = $request->input('apellido');
        $persona->telefono = $request->input('telefono');
        $persona->direccion = $request->input('direccion');
        $persona->slug = $request->input('slug');
        $persona->foto=$name;
        $persona->save();
        return redirect()->route('usuarios.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(usuario $usuario)
    {

        return view('usuarios.show',compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(usuario $usuario)
    {
        return view('usuarios.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuario $usuario)
    {
        $usuario->fill($request->except('foto'));
        if ($request->hasFile('foto')) {
            $file=$request->file('foto');
            $name=time().$file->getClientOriginalName();
            $usuario->foto=$name;
            $file->move(public_path().'/imagenes/',$name);

        }
        $usuario->save();
        return redirect()->route('usuarios.show',[$usuario])->with('status','usuario actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( usuario $usuario)
    {
        $file_path=public_path().'/imagenes'.$usuario->foto;
        \File::delete($file_path);
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('status','usuario eliminado');
    }
}
