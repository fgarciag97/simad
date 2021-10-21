	<form action="" method="post" id="editar_partida_relf">
  <div class="modal fade" id="editar_partida_rel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Editar Partida</h4>
        </div>
        <div class="modal-body">
          
          <input type="text" id="epr_id" name="id" readonly hidden>
          <input type="text" id="epr_id_sector" name="id_sector" readonly hidden>
          <input type="text" id="epr_id_programa" name="id_programa" readonly hidden>
          <input type="text" id="epr_id_sub_programa" name="id_sub_programa" readonly hidden>
          <input type="text" id="epr_id_proyecto" name="id_proyecto" readonly hidden>
          <input type="text" id="epr_id_actividad" name="id_actividad" readonly hidden>
          <input type="text" id="epr_rel" name="rel" readonly hidden>

          <br>

          <div id="" class="input-group" on>
              <span class="input-group-addon">Ingresos Propios</span>
              <input type="input" class="moneda form-control" id="epr_ingreso_propio" name="ingreso_propio" autocomplete="off" required onKeyPress = 'return soloNum(event);'  onchange='sumarmodal(this.value);'>
          </div>

          <div id="" class="input-group" on>
              <span class="input-group-addon">Ejecutivo Nacional</span>
              <input type="input" class="moneda form-control" id="epr_situado" name="situado" autocomplete="off" required onKeyPress = 'return soloNum(event);'  onchange='sumarmodal(this.value);'>
          </div>

          <div id="" class="input-group" on>
              <span class="input-group-addon">Ingreso Estadal</span>
              <input type="input" class="moneda form-control" id="epr_ingreso_estadal" name="ingreso_estadal" autocomplete="off" required onKeyPress = 'return soloNum(event);'  onchange='sumarmodal(this.value);'>
          </div>

          <div id="" class="input-group" on>
              <span class="input-group-addon">Ingreso FCI</span>
              <input type="input" class="moneda form-control" id="epr_ingreso_fci" name="ingreso_fci" autocomplete="off" required onKeyPress = 'return soloNum(event);'  onchange='sumarmodal(this.value);'>
          </div>

          <div id="" class="input-group" on>
              <span class="input-group-addon"> Otra Fuente </span>
              <input type="input" class="moneda form-control" id="epr_otra_fuente" name="otra_fuente" autocomplete="off" required onKeyPress = 'return soloNum(event);'  onchange='sumarmodal(this.value);'>
          </div>

          <div id="" class="input-group" on>
              <span class="input-group-addon"> Monto </span>
              <input type="input" class="moneda form-control" id="epr_monto" name="monto" autocomplete="off" required onKeyPress = 'return soloNum(event);' readonly>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Salir</button>
           <button type="submit" class="btn btn-success btn-sm pull-right">Actualizar</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->   
   </div><!-- /.col-lg-6 -->
</div>
</div>
 </form>