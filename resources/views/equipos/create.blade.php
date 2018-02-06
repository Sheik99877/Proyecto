@extends('layout')
@section('content')
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <h3>Anadir equipo</h3>

    <div class="form-group">
      <label for="descripcion">Descripcion</label>
      <input type="text" name="descripcion" class="form-control" placeholder="Descripcion...">
    </div>

    <div class="form-group">
      <label for="marca">Marca</label>
      <input type="text" name="marca" class="form-control" placeholder="Marca...">
    </div>

    <div class="form-group">
      <label for="modelo">Modelo</label>
      <input type="text" name="modelo" class="form-control" placeholder="Modelo...">
    </div>

    <div class="form-group">
      <label for="serie">Numero de serie</label>
      <input type="text" name="serie" class="form-control" placeholder="Numero de serie...">
    </div>

    <div class="form-group">
      <button class="btn btn-primary" type="submit">Guardar</button>
      <button class="btn btn-danger" type="reset">Cancelar</button>
    </div>

  </div>
</div>
@endsection
