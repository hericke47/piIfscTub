<?php
namespace App\Http\Controllers;

use App\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = Fornecedor::latest()->paginate(5);
        return view('fornecedores.index', compact('fornecedores'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('fornecedores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'razao' => 'required',
            'cnpj' => 'required',
            'numero' => 'required',
            'whatsapp' => 'required',
        ]);

        Fornecedor::create($request->all());
        return redirect()->route('fornecedores.index')->with('sucesso','Fornecedor Cadastrado com sucesso.');

    }

    public function show(Fornecedor $fornecedor)
    {
        return view('fornecedores.show',compact('fornecedor'));
    }


    public function edit(Fornecedor $fornecedor)
    {
        return view('fornecedores.edit',compact('fornecedor'));
    }

    public function update(Request $request, Fornecedor $fornecedor)
    {
        $request->validate([
            'razao' => 'required',
            'cnpj' => 'required',
            'numero' => 'required',
            'whatsapp' => 'required',
        ]);

        $fornecedor->update($request->all());
        return redirect()->route('fornecedores.index')->with('sucesso','Fornecedor atualizado com sucesso.');
    }


    public function destroy(Fornecedor $fornecedor)
    {
        $fornecedor->delete();
        return redirect()->route('fornecedores.index')->with('sucesso','Fornecedor deletado com sucesso.');
    }

}