<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipos;
use DB;

class EquipmentController extends Controller
{
    public function index(Request $request)
    {
      $equipos=Equipos::all();
      // dd($equipos);

      return view('equipos.index' ,compact('equipos'));
      // if ($request)
      // {
      //   $query=trim($request-> get ('searchText'));
      //   $equipos=DB::table('equipo')->where('serie', 'LIKE', '%'.$query.'%' );
      //   ->where ('condicion', '=', '1')
      //   ->orderBy('id', 'des')
      //   ->paginate(10);
      //   return view('equipos.index', ["equipos"=>$categorias, "searchText"=>$query]);
      // }
    }

    public function create()
    {
      return view('equipos.create');
    }

    public function store()
    {

    }

    public function show()
    {
      return view('equipos.show');
    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
}
