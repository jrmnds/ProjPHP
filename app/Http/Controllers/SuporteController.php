<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suportes;

class SuporteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $suporte = Suportes::all();
        return view('suportes.index', compact('suporte'));
    }

    public function create()
    {
        return view('suportes.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nome'=>'required|string|max:255',
            'descricao'=>'required',
          ]);
          Suportes::create($request->all());
          return redirect()->route('suportes.index')->with('successo','Suporte Criado com Sucesso');
    }

    public function show($id)
    {
        $suporte = Suportes::find($id);
        return view('suportes.show',compact('suporte'));
    }
    public function edit($id)
    {
        $suporte = Suportes::find($id);
        return view('suportes.edit',compact('suporte'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nome' => 'required',
            'descricao' => 'required',
          ]);
          Suportes::find($id)->update($request->all());
          return redirect()->route('suportes.index')->with('success','Campeão Deletado');
    }

    public function destroy($id)
    {
        Suportes::find($id)->delete();
        return redirect()->route('suportes.index')->with('successo','Campeão Deletado');
    }
}
