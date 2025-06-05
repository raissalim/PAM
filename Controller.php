<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApiModel;

class ApiController extends Controller
{
    //public function create()
    //{
       // return view('cadastro');
//    }

   // public function store(Request $request)
    //{
      //  $request->validate([
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function indexapi ()
    {
        $usuario = ApiModel::all();
        return $usuario;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function storeapi(Request $request)
    {
        $usuario = new ApiModel();
        
        $usuario->nomeUsu = $request->nomeUsu;
        $usuario->cpfUsu = $request->cpfUsu;
        $usuario->alturaUsu = $request->alturaUsu;
        $usuario->pesoUsu = $request->pesoUsu;
        $usuario->senhaUsu = $request->senhaUsu;
        $usuario->emailUsu = $request->emailUsu;
        $usuario->nomeImagemUsu = $request->nomeImagemUsu;
        $usuario->dataNascUsu = $request->dataNascUsu;

        $usuario->save();



    }

// update api 

    public function updateApi(Request $request, $id)
{
    ApiModel::where('idcli', $id)->update([
        'nomeUsu' => $request->nomeUsu,
        'CpfUsu' => $request->cpfUsu,
        'alturaUsu' => $request->alturaUsu,
        'pesoUsu' => $request->pesoUsu,
        'senhaUsu' => $request->senhaUsu,
        'emailUsu' => $request->emailUsu,
        'nomeImagemUsu' => $request->nomeImagemUsu,
        'dataNascUsu' => $request->dataNascUsu,
    ]);

    return response()->json([
        'message' => 'Dados alterados com sucesso',
        'code' => 200
    ]);
}
// delete api

public function destroyapi($id)
{     

    ApiModel::where('idcli','=',$id)->delete();        

    return response()->json([
        'message'=> 'Dados excluídos com sucesso',
        'code'=>200]
    );        
}

/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function show($id)
{
    //
}

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    //
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, $id)
{
    //
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    //
}

    //public function index()
    //{
      //  return response()->json(ApiModel::all());
   // }
//}

}