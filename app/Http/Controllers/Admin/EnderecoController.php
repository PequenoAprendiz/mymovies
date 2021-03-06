<?php

namespace App\Http\Controllers\Admin;

use App\Endereco;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Pessoa;
use Illuminate\Http\Request;


class EnderecoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 10;

        if (!empty($keyword)) {
            $endereco = Endereco::where('endereco', 'LIKE', "%$keyword%")
                ->orWhere('id_pessoa', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $endereco = Endereco::latest()->paginate($perPage);
        }

        $pessoa = Pessoa::all();

        return view('admin.endereco.index', compact('endereco'), ['pessoa'=>$pessoa]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $pessoas = Pessoa::pluck('nome', 'id')->toArray();

        return view('admin.endereco.create', ['pessoas'=>$pessoas]);
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
        $this->validate($request, [
            'endereco'  => 'min:4',
        ]);

        $requestData = $request->all();

        Endereco::create($requestData);

        return redirect('admin/endereco')->with('flash_message', 'Endereco added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $endereco = Endereco::findOrFail($id);
        $pessoa = Pessoa::all();
        return view('admin.endereco.show', compact('endereco'),  ['pessoa'=>$pessoa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $pessoas = Pessoa::pluck('nome', 'id')->toArray();

        $endereco = Endereco::findOrFail($id);

        return view('admin.endereco.edit', compact('endereco'), ['pessoas'=>$pessoas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'endereco' => 'min:4'
        ]);
        $requestData = $request->all();

        $endereco = Endereco::findOrFail($id);

        $endereco->update($requestData);

        return redirect('admin/endereco')->with('flash_message', 'Endereco updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Endereco::destroy($id);

        return redirect('admin/endereco')->with('flash_message', 'Endereco deleted!');
    }
}
