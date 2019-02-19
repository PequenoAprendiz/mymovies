<?php

namespace App\Http\Controllers\Admin;

use App\Endereco;
use App\Http\Controllers\Controller;
use App\Http\Requests;
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
//            $endereco = Endereco::where('endereço', 'LIKE', "%$keyword%")
//                ->orWhere('id_pessoa', 'LIKE', "%$keyword%")
//                ->latest()->paginate($perPage);
            $endereco = DB::table('enderecos')
                ->join('pessoas', 'pessoas.id', '=', 'enderecos.id_pessoa')
                ->select('enderecos.endereço','pessoas.nome')
                ->get();
        } else {
            $endereco = Endereco::latest()->paginate($perPage);
        }

        return view('admin.endereco.index', compact('endereco'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.endereco.create');
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
            'endereco' => 'min:4'
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

        return view('admin.endereco.show', compact('endereco'));
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
        $endereco = Endereco::findOrFail($id);

        return view('admin.endereco.edit', compact('endereco'));
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
