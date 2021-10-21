    <script>
function show_alert()
{
   if (confirm("¿Seguro que desea continuar? Esta accion es irreversible")) { return true; } 
   return false;
}
</script>


  <form action="" method="post" id="form_incrementar">
  <div class="modal fade" id="incrementar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <table class="table table-responsive">
            <tr>
              <thead>
                <td></td>
                <td><div class="modal-header">
                    <h4 class="modal-title">Incrementar Partida</h4>
                  </div>
                </td>
                <td></td>
              </thead>
            </tr>
          </table>

          <input type="text" name="n_resolucion" id="n_resolucioni" hidden required>
          <input type="text" name="id_sector" id="id_sectori" hidden required>
          <input type="text" name="id_programa" id="id_programai" hidden required>
          <input type="text" name="id_sub_programa" id="id_sub_programai" hidden required>
          <input type="text" name="id_proyecto" id="id_proyectoi" hidden required>
          <input type="text" name="id_actividad" id="id_actividadi" hidden required>
          <input type="text" name="us" id="usa" hidden required>
          <input type="text" name="tipo_ajuste" value="+" hidden required>

          <table class="table table-responsive">

            <tr>
              <div class="modal-body">
          
              <div id="" class="input-group" on>
                  <span class="input-group-addon">Partida</span>
                  <input type="text" class="moneda form-control" id="partidai" name="partida" autocomplete="off" required readonly>
              </div>

              <br>

              <div id="" class="input-group" on>
                  <span class="input-group-addon">Nuevo Ajuste</span>
                  <input type="text" class="moneda form-control" name="incrementar" autocomplete="off" required>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Salir</button>
               <?= $this->form->submit('Actualizar', ["class" => "btn btn-success btn-sm pull-right", 'onclick' => 'return show_alert();']) ?>
            </div>
          </div><!-- /.modal-content -->
            </tr>
        </table>
        
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->   
   </div><!-- /.col-lg-6 -->
</div>
</div>
 </form>