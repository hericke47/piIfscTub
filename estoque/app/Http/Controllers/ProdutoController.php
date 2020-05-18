<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function index()
    {
        $produtos = Produto::latest()->paginate();
        return view('produtos.index',compact('produtos'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'quantidade' => 'required',
            'preco' => 'required',
        ]);

        Produto::create($request->all());
        return redirect()->route('produtos.index')->with('sucesso','Produto Cadastrado com sucesso.');
    }

    public function busca(Request $request){
        $produtos = Produto::busca($request->criterio);

        return view('produtos.index', 
        ['produtos' => $produtos, 
        'criterio' => $request->criterio]);
    }

    public function show(Produto $produto)
    {
        return view('produtos.show',compact('produto'));
    }


    public function edit(Produto $produto)
    {
        return view('produtos.edit',compact('produto'));
    }

    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'nome' => 'required',
            'quantidade' => 'required',
            'preco' => 'required',
        ]);

        $produto->update($request->all());
        return redirect()->route('produtos.index')->with('sucesso','Produto atualizado com sucesso.');
    }


    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('produtos.index')->with('sucesso','Produto deletado com sucesso.');
    }
}