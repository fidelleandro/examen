<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Campaign;
use App\Models\PlanMedio;
use App\Models\Persona;
use App\Models\Medio; 
use App\Models\Programa;
use App\Models\Plataforma;
use App\Models\PlataformaClasificacion;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Cliente::select( 
            \DB::raw("clientes.nombreComercial AS cliente"), 
            \DB::raw("campaigns.titulo AS campaign"), 
            \DB::raw("plan_medios.nombre AS PlanMedio"),
            \DB::raw("personas.nombres AS NombrePeriodista"),
            \DB::raw("personas.apellidos AS ApellidoPeriodista"),
            \DB::raw("medios.nombre AS Medio"), 
            \DB::raw("programas.nombre AS NombrePrograma"), 
            \DB::raw("plataformas.descripcion AS PlataformaDescripción"), 
            \DB::raw("plataforma_clasificacions.descripcion AS PlataformaClasificación"), 
        )
        ->join("personas",function($join) { 
        })
        ->join("campaigns",function($join) {
             $join->on("campaigns.cliente_id","=",'clientes.id');
        }) 
        ->join("medios",function($join) { 
        })
        ->join("programas",function($join) {
            $join->on("programas.medio_id","=",'medios.id');
        })
        ->join("plan_medios",function($join) {
             $join->on("plan_medios.campaign_id","=",'campaigns.id');
        })
        ->join("programa_contactos",function($join) {
            $join->on("programa_contactos.programa_id","=",'programas.id');
            $join->on("programa_contactos.idContacto","=",'personas.id');
       })
        ->join("detalle_plan_medios",function($join) {
            $join->on("detalle_plan_medios.idPlanMedio","=",'plan_medios.id');
            $join->on("detalle_plan_medios.idProgramaContacto","=",'programa_contactos.id');
            //$join->on("detalle_plan_medios.idsMedioPlataforma","=",'plan_medios.id');
       })
        ->join("plataformas",function($join) { 
        })
        ->join("plataforma_clasificacions",function($join) {
            $join->on("plataforma_clasificacions.plataforma_id","=",'plataformas.id');
        })
        ->join("medio_plataformas",function($join) {
            $join->on("medio_plataformas.medio_id","=",'medios.id');
            $join->on("medio_plataformas.idPlataformaClasificacion","=",'plataforma_clasificacions.id');
        })
         
        ->paginate();
        //dd($data);  
        return view('results', compact('data'));
          
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
}
