<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
       // dd(Input::all());
        echo "holapost"." ";
        $aRequest = json_decode(file_get_contents('php://input'));
        print_r($aRequest);
        //echo $aRequest[0]->nombre_fruta;
        //var_dump($aRequest[0]->nombre_fruta);
        /*for($i=0; $i < count($aRequest) ;$i++){
            $nombre_fruta = $aRequest[$i]->nombre_fruta;
            $cantidad = $aRequest[$i]->cantidad;
            echo $nombre_fruta." ".$cantidad;
            echo "";
        }*/
        $fichero=fopen('test3.log','w+');
        if($fichero == false) {
            die("No se ha podido crear el archivo.");
        }
        fwrite($fichero,json_encode($aRequest));
        fclose($fichero);

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
        return "hola show: " .$id;
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
}
