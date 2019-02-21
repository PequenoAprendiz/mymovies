<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Filme_favorito;
use App\Pessoa;
use Illuminate\Http\Request;

class Filme_favoritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $filme_favorito = Filme_favorito::where('titulo', 'LIKE', "%$keyword%")
                ->orWhere('ano', 'LIKE', "%$keyword%")
                ->orWhere('diretor', 'LIKE', "%$keyword%")
                ->orWhere('id_pessoa', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $filme_favorito = Filme_favorito::latest()->paginate($perPage);
        }
        $pessoa = Pessoa::all();
        return view('admin.filme_favorito.index', compact('filme_favorito'), ['pessoa'=>$pessoa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $pessoas = Pessoa::pluck('nome', 'id')->toArray();

        return view('admin.filme_favorito.create',  ['pessoas'=>$pessoas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        
        Filme_favorito::create($requestData);

        return redirect('admin/filme_favorito')->with('flash_message', 'Filme_favorito added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $filme_favorito = Filme_favorito::findOrFail($id);
        $pessoa = Pessoa::all();
        return view('admin.filme_favorito.show', compact('filme_favorito'), ['pessoa'=>$pessoa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $filme_favorito = Filme_favorito::findOrFail($id);

        $pessoas = Pessoa::pluck('nome', 'id')->toArray();

        return view('admin.filme_favorito.edit', compact('filme_favorito'),  ['pessoas'=>$pessoas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $filme_favorito = Filme_favorito::findOrFail($id);
        $filme_favorito->update($requestData);

        return redirect('admin/filme_favorito')->with('flash_message', 'Filme_favorito updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Filme_favorito::destroy($id);

        return redirect('admin/filme_favorito')->with('flash_message', 'Filme_favorito deleted!');
    }
}
