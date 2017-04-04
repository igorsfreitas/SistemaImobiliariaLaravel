<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Imovei;
use Illuminate\Http\Request;
use Session;

class ImoveisController extends Controller
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
            $imoveis = Imovei::where('tipoImovel', 'LIKE', "%$keyword%")
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
            $imoveis = Imovei::paginate($perPage);
        }

        return view('imoveis.index', compact('imoveis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('imoveis.create');
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
        
        Imovei::create($requestData);

        Session::flash('flash_message', 'Imovei added!');

        return redirect('imoveis');
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
        $imovei = Imovei::findOrFail($id);

        return view('imoveis.show', compact('imovei'));
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
        $imovei = Imovei::findOrFail($id);

        return view('imoveis.edit', compact('imovei'));
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
        
        $imovei = Imovei::findOrFail($id);
        $imovei->update($requestData);

        Session::flash('flash_message', 'Imovei updated!');

        return redirect('imoveis');
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
        Imovei::destroy($id);

        Session::flash('flash_message', 'Imovei deleted!');

        return redirect('imoveis');
    }
}
