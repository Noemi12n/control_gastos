<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\tipo;
use App\User;
use App\movimiento;
use DB;
use PDF;


class MovimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
          // $pdf = App('dompdf.wrapper');
           //$pdf->loadHTML("<h1 style=''>Hola Mundo PDF</h1>");
            //return $pdf->stream();

       // $data=[
         //   'fecha'=>date('Y-m-d'),
         //   'user'=>Auth::user()->usu_nombre
        //];

        //$pdf = PDF::loadView('movimiento.reporte',$data);
              // return $pdf->stream('reporte.pdf');


        $data=$request->all();
        //dd($data);
        $desde=date('Y-m-d');
        $hasta=date('Y-m-d');
        if(isset($data['desde'])){
        $desde=$data['desde'];
        $hasta=$data['hasta'];
    }

        $movimiento=DB::select("
            SELECT * FROM movimiento m 
            JOIN users u ON m.usu_id=u.usu_id
            JOIN tipo t ON m.tip_id=t.tip_id
            WHERE m.mov_fecha BETWEEN '$desde' AND '$hasta'
            ");
        
         //boton del pdf
        if(isset($data['btn_pdf'])){ 
       $data=['movimiento'=>$movimiento];
       $pdf = PDF::loadView('movimiento.reporte',$data);
        return $pdf->stream('reporte.pdf');
           }

        return view('movimiento.index')
        ->with('movimiento',$movimiento)
        ->with('desde',$desde)
        ->with('hasta',$hasta)
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $movimiento=movimiento::all();
         $tipo=tipo::all();
         $user=User::all();
         return view('movimiento.create')
         ->with ('tipo', $tipo)
         ->with ('user', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $data=$request->all();
            //dd($data);
           $data['usu_id']=Auth::user()->usu_id;
            Movimiento::create( $data);
            return redirect(route('movimiento'));
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
        $movimiento=Movimiento::find($id);
        $tipo=tipo::all();
        $user=User::all();
        return view('movimiento.edit')
        ->with('movimiento',$movimiento)
        ->with ('tipo', $tipo)
        ->with ('user', $user);

        
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
        movimiento::destroy($id);
        return redirect(route('movimiento'));
    }
}
