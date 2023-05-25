@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.credenciale.actions.index'))

@section('body')

<div class="card">
    <div class="card-header text-center">
    <h2>Detalles de la Credencial : </h2>
        <h6>{{ $credenciale->grupo->nombre }}</h6>
    </div>

    <div class="card-body">

        <div class="row">
            <div class="form-group col-sm-2">
            <p class="card-text"><strong>SERVICIO:</strong>  {{ $credenciale->grupo->nombre }}</p>
            </div>
            <div class="form-group col-sm-3">
                <p class="card-text"><strong>ENLACE:</strong>  {{ $credenciale->enlace }}</p>
            </div>
            <div class="form-group col-sm-3">
                <p class="card-text"><strong>IP/SERVIDOR:</strong> {{ $credenciale->servidor->ip }}</p>
            </div>
            <div class="form-group col-sm-4">
                <p class="card-text"><strong>PUERTO:</strong> {{$credenciale->servidor->puerto }} </p>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-2">
                            <p class="card-text"><strong>IP/SERVIDOR:</strong> {{date("d/m/Y", strtotime($credenciale->fecha))}}</p>

        </div>
            <div class="form-group col-sm-3">

                            <p class="card-text"><strong>ESTADO:</strong> {{$credenciale->estado->nombre }} </p>

            </div>
            <div class="form-group col-sm-4">
                            <p class="card-text"><strong>TIPO DE CONEXION:</strong> {{$credenciale->tipodeconexion->nombre }} </p>

                <td style="text-align:center;">




                </td>
            </div>

        </div>

 </div>
 </div>

<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header text-center">
             CREDENCIAL :
            </div>
            <div class="card-body">
        <div class="form-group">
  <label for="usuario">Usuario:</label>
  <input type="text" id="usuario" name="usuario" class="form-control custom-input" value="{{ $credenciale->usuario }}" disabled>
</div>

<div class="form-group">
  <label for="contrasena">Contraseña:</label>
  <input type="password" id="contrasena" name="contrasena" class="form-control custom-input" value=" {{ $credenciale->contraseña }}">
</div>

            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="card">
            <div class="card-header text-center">
             INFORMACION ADICIONAL
            </div>
            <div class="card-body">
        <div class="form-row">
  <div class="form-group col-md-4">
    <label for="tipo_bd">Tipo de Base de Datos:</label>
    <input type="text" id="tipo_bd" name="tipo_bd" class="form-control custom-input" value="{{ $credenciale->cat_informaciones->tipodebd->nombre }}">
  </div>

  <div class="form-group col-md-4">
    <label for="nombre_bd">Nombre de BD:</label>
    <input type="text" id="nombre_bd" name="nombre_bd" class="form-control custom-input" value="{{ $credenciale->cat_informaciones->nombredebd }}">
  </div>

  <div class="form-group col-md-4">
    <label for="version_bd">Version de la BD:</label>
    <input type="text" id="version_bd" name="version_bd" class="form-control custom-input" value="{{ $credenciale->cat_informaciones->tipodebd ->version}}">
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <div class="form-group">
      <label for="tipo_bd">Tipo de BD:</label>
      <input type="text" id="tipo_bd" name="tipo_bd" class="form-control custom-input" value="{{ $credenciale->cat_informaciones->tipodebd->nombre }}">
    </div>
    <div class="form-group">
      <label for="nombre_bd">Nombre de BD:</label>
      <input type="text" id="nombre_bd" name="nombre_bd" class="form-control custom-input" value="{{ $credenciale->cat_informaciones->nombredebd }}">
    </div>
    <div class="form-group">
      <label for="version_bd">Version de la BD:</label>
      <input type="text" id="version_bd" name="version_bd" class="form-control custom-input" value="{{ $credenciale->cat_informaciones->tipodebd ->version}}">
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label for="venc_dominio">Fecha de Venc. Dominio: </label>
      <input type="text"class="form-control custom-input"value="{{date("d/m/Y", strtotime($credenciale->cat_informaciones->fecha_vec_dominio))}} ">
    </div>
    <div class="form-group">
      <label for="venc_ssl">Fecha de Venc. SSL:</label>
      <input type="text" id="venc_ssl" name="venc_ssl" class="form-control custom-input" value=" {{date("d/m/Y", strtotime($credenciale->cat_informaciones->fecha_vec_ssl))}} ">
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label for="ssl">Cuenta con SSL:</label>
      <input type="text" id="ssl" name="ssl" class="form-control custom-input" value="{{ $credenciale->cat_informaciones->ssl }}">
    </div>
    <div class="form-group">
      <label for="version">Versión  :</label>
      <input type="text" id="version" name="version" class="form-control custom-input" value="{{ $credenciale->cat_informaciones->versiones }}">
    </div>
  </div>
</div>



            </div>
        </div>
    </div>
</div>

@endsection

