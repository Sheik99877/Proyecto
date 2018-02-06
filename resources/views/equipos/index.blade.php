@extends('layout')
@section('content')
<div class="row">
  <div class="col-lg-8 col-md-8 col-xs.12">
    <h3>Listado de Equipos <a href="/Proyecto/public/create"<button class="btn btn-success">Nuevo</button></a></h3>
    @include('equipos.search')
  </div>
</div>

<div class="row">
  <div class="col-lg-8 col-md-8 col-xs-12">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-condensed table-hover">
          <thead>
            <th>ID</th>
            <th>Numero de Serie</th>
            <th>Descripcion</th>
            <th>Proactivos</th>
            <th>Opciones</th>
          </thead>

          @foreach($equipos as $equip)
          <tr>
            <td>{{$equip->id}}</td>
            <td>{{$equip->serie}}</td>
            <td>{{$equip->descripcion}}</td>
            <td></td>
          <td>
                <a href=""><button class="btn btn-info">Editar</button></a>
                <a href=""><button class="btn btn-danger">Eliminar</button></a>
                <a href=""><button class="btn btn-success">Detalles</button>
            </td>
          </tr>
          @endforeach
      </table>
    </div>

  </div>
</div>
@endsection
