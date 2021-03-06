<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use App\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
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
            $pessoa = Pessoa::where('nome', 'LIKE', "%$keyword%")
                ->orWhere('sobrenome', 'LIKE', "%$keyword%")
                ->orWhere('titulacao', 'LIKE', "%$keyword%")
                ->orWhere('cpf', 'LIKE', "%$keyword%")
                ->orWhere('rg', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $pessoa = Pessoa::latest()->paginate($perPage);
        }

        return view('admin.pessoa.index', compact('pessoa'));
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     *
     * protected function validator(array $data)
     * {
     * return Validator::make($data, [
     * 'nome' => ['required', 'string', 'max:255'],
     * 'sobrenome' => ['required', 'string', 'max:255'],
     * 'titulacao' => ['required', 'string', 'max:255'],
     * 'cpf' => ['required', 'integer', 'email', 'max:11', 'unique'],
     * 'rg' => ['required', 'string', 'min:10', 'unique'],
     * ]);
     * }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.pessoa.create');
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
        $this->validate($request, [                                           //validação simples para poder ganhar tempo na implementação
            'cpf' => 'required|min:11|max:11',
            'rg' => 'required|min:10|max:10'],
            [
                'cpf.required' => 'Preencha o campo Cpf',
                'cpf.min' => 'Cpf deve conter 11 digitos',
                'cpf.max' => 'Cpf deve conter 11 digitos',
                'rg.required' => 'Preencha o campo Rg',
                'rg.min' => 'Rg deve conter 10 digitos',
                'rg.max' => 'Rg deve conter 10 digitos',

            ]);
        $requestData = $request->all();

        Pessoa::create($requestData);

        //\Session::flash('mensagem_sucesso', 'Pessoa cadastrada com sucesso!');
        return redirect('admin/pessoa')->with('flash_message', 'Pessoa added!');
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
        $pessoa = Pessoa::findOrFail($id);

        return view('admin.pessoa.show', compact('pessoa'));
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
        $pessoa = Pessoa::findOrFail($id);

        return view('admin.pessoa.edit', compact('pessoa'));
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
        $this->validate($request, [                                           //validação simples na hora de atualizar para manter um padrão com o cadastro
            'cpf' => 'required|min:11|max:11',
            'rg' => 'required|min:10|max:10'],
            [
                'cpf.required' => 'Preencha o campo Cpf',
                'cpf.min' => 'Cpf deve conter 11 digitos',
                'cpf.max' => 'Cpf deve conter 11 digitos',
                'rg.required' => 'Preencha o campo Rg',
                'rg.min' => 'Rg deve conter 10 digitos',
                'rg.max' => 'Rg deve conter 10 digitos',

            ]);
        $requestData = $request->all();

        $pessoa = Pessoa::findOrFail($id);
        $pessoa->update($requestData);
        \Session::flash('mensagem_sucesso', 'Pessoa cadastrada com sucesso!');
        return redirect('admin/pessoa')->with('flash_message', 'Pessoa updated!');
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
        Pessoa::destroy($id);

        return redirect('admin/pessoa')->with('flash_message', 'Pessoa deleted!');
    }
}
