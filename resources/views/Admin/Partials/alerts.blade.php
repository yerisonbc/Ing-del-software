

@if (session('status'))

  @switch(session('status'))

    @case('success_ins')

      <div class="alert alert-success alert-dismissible" id="myAlert">
          <button type="button" onclick="close_alert()" class="close">&times;</button>
          <strong>Exito!</strong> Registro Almacenado Correctamente.
      </div>
    @break
    @case('Error_ins')

      <div class="alert alert-danger alert-dismissible" id="myAlert">
          <button type="button" class="close">&times;</button>
          <strong>Error!</strong> No se pudo completar la accion, Intentelo de nuevo!.
      </div>
    @break

@endswitch
@endif

<!-- <div class="alert alert-success alert-dismissible" id="myAlert">
    <button type="button" class="close">&times;</button>
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
</div> -->
