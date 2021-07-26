<!-- como usamos el mismo formulario para create y edit, 
hacemos un if para comprobar que esta el valor y si no que lo ponga vacio-->

<div class="col-md-5" >
  <h1>{{$modo}} producto</h1>
</div>
</br>
<div class="form-group " width="50">
  <label class="col-md-3 control-label " for="producto">Producto</label>
  <div class="col-md-5">
    <input type="text" class="form-control" value="{{ isset($producto->producto)?$producto->producto:''}}" name="producto" id="producto" minlength="3" required>
  </div>
</div>


<div class="form-group" width="50">
  <label class="col-md-3 control-label" for="precio">Precio</label>
  <div class="col-md-5 d-flex">
    <input type="text" class="form-control" value="{{ isset($producto->precio)?$producto->precio:''}}" name="precio" id="precio" required>
    <div class="input-group-prepend">
      <div class="input-group-text">€</div>
    </div>
  </div>
</div>

<div class="form-group" width="50">
  <label class="col-md-3 control-label" for="observaciones">Observaciones</label>
  <div class="col-md-5">
  <input type="text" class="form-control"  value="{{isset($producto->observaciones)?$producto->observaciones:''}}" name="observaciones" id="observaciones" required>
  </div>
</div>


<div class="form-group" width="50">
  <label class="col-md-3 control-label" for="categoria">Categoría</label>
  <div class="col-md-5">
  <input type="text" class="form-control" value="{{isset($producto->categoria)?$producto->categoria:''}}" name="categoria" id="categoria" required>
  </div>
</div>


<div class="form-group" width="50">
  <label class="col-md-3 control-label" for="almacen">Almacén</label>
  <div class="col-md-5">
  <input type="text" class="form-control" value="{{isset($producto->almacen)?$producto->almacen:''}}" name="almacen" id="almacen" required>
  </div>
</div>
</br>

<div class="col-md-2">
  <input type="submit" class=" btn btn-success" value="{{$modo}} producto">  
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/2.29.0/jquery.validate.min.js"></script>
<script>
$(document).ready(function() {
  $("#basic-form").validate();
});
</script>


