<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\CadastroImovei;
use Illuminate\Http\Request;
use Session;

class CadastroImoveisController extends Controller
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
            $cadastroimoveis = CadastroImovei::where('disponivel', 'LIKE', "%$keyword%")
				->orWhere('tipoImovel', 'LIKE', "%$keyword%")
				->orWhere('locacaoVenda', 'LIKE', "%$keyword%")
				->orWhere('nomeEdificio', 'LIKE', "%$keyword%")
				->orWhere('numeroAptCasa', 'LIKE', "%$keyword%")
				->orWhere('tamanhoTerreno', 'LIKE', "%$keyword%")
				->orWhere('terrenoProprio', 'LIKE', "%$keyword%")
				->orWhere('marinha', 'LIKE', "%$keyword%")
				->orWhere('numeroAndares', 'LIKE', "%$keyword%")
				->orWhere('qtAptAndar', 'LIKE', "%$keyword%")
				->orWhere('endereco', 'LIKE', "%$keyword%")
				->orWhere('bairro', 'LIKE', "%$keyword%")
				->orWhere('cidade', 'LIKE', "%$keyword%")
				->orWhere('cep', 'LIKE', "%$keyword%")
				->orWhere('qtdQuartos', 'LIKE', "%$keyword%")
				->orWhere('qtdSuites', 'LIKE', "%$keyword%")
				->orWhere('qtdBanheiros', 'LIKE', "%$keyword%")
				->orWhere('varanda', 'LIKE', "%$keyword%")
				->orWhere('terraco', 'LIKE', "%$keyword%")
				->orWhere('areaUtil', 'LIKE', "%$keyword%")
				->orWhere('itensLazer', 'LIKE', "%$keyword%")
				->orWhere('tempoConstrucao', 'LIKE', "%$keyword%")
				->orWhere('valorCondominio', 'LIKE', "%$keyword%")
				->orWhere('valorIptu', 'LIKE', "%$keyword%")
				->orWhere('posicaoSol', 'LIKE', "%$keyword%")
				->orWhere('qtdGaragens', 'LIKE', "%$keyword%")
				->orWhere('tipoGaragens', 'LIKE', "%$keyword%")
				->orWhere('nomeProprietario', 'LIKE', "%$keyword%")
				->orWhere('emailProprietario', 'LIKE', "%$keyword%")
				->orWhere('foneProprietario', 'LIKE', "%$keyword%")
				->orWhere('valorVenda', 'LIKE', "%$keyword%")
				->orWhere('valorLocacao', 'LIKE', "%$keyword%")
				->orWhere('nomeConstrutora', 'LIKE', "%$keyword%")
				->orWhere('percentualComissao', 'LIKE', "%$keyword%")
				->orWhere('quemIndicou', 'LIKE', "%$keyword%")
				->orWhere('foneQuemIndicou', 'LIKE', "%$keyword%")
				->orWhere('outrasInformacoes', 'LIKE', "%$keyword%")
				->orWhere('dataCaptacao', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $cadastroimoveis = CadastroImovei::paginate($perPage);
        }

        return view('admin.cadastro-imoveis.index', compact('cadastroimoveis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.cadastro-imoveis.create');
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
        
        CadastroImovei::create($requestData);

        Session::flash('flash_message', 'CadastroImovei added!');

        return redirect('admin/cadastro-imoveis');
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
        $cadastroimovei = CadastroImovei::findOrFail($id);

        return view('admin.cadastro-imoveis.show', compact('cadastroimovei'));
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
        $cadastroimovei = CadastroImovei::findOrFail($id);

        return view('admin.cadastro-imoveis.edit', compact('cadastroimovei'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $cadastroimovei = CadastroImovei::findOrFail($id);
        $cadastroimovei->update($requestData);

        Session::flash('flash_message', 'CadastroImovei updated!');

        return redirect('admin/cadastro-imoveis');
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
        CadastroImovei::destroy($id);

        Session::flash('flash_message', 'CadastroImovei deleted!');

        return redirect('admin/cadastro-imoveis');
    }
}
