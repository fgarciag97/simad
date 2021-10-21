<form action="" method="post" id="form_info222">
  <div class="modal fade" id="itemservicio2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

      <table class="table table-responsive table-border">

      <thead>
            <tr>
              <th><h4 class="modal-title text-center">Actualización de Item</h4></th>
              <th></th>
            </tr>
          </thead>
      </table>

      <table class="table table-responsive table-border">
        
        <?= $this->Form->hidden('id', ['class'=> 'form-control', 'required', 'id' => 'id22']); ?>
        <?= $this->Form->hidden('id_orden', ['class'=> 'form-control', 'required', 'id' => 'id_orden22']); ?>
        <?= $this->Form->hidden('requisicion', ['class'=> 'form-control', 'required', 'id' => 'requisicion22']); ?>

          <tr>
              <td>
                <div id="" class="input-group" on>
                    <span class="input-group-addon"> Unidad Solicitante</span>
                    <?= $this->Form->select('unidad_solicitante', @$us, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'id' => 'unidad_solicitante22']); ?>
                </div>
              </td>
          </tr>

          <tr>
              <td>
                <div id="" class="input-group" on>
                    <span class="input-group-addon"> Descripcion del Items</span>
                    <input type="text" class="form-control" id="descripcion_item22" name="descripcion_item">
                </div>
              </td>
          </tr>

          <tr>
              <td>
                <div id="" class="input-group" on>
                    <span class="input-group-addon"> Partida</span>
                    <?= $this->Form->select('id_partida', @$partidas, ['empty' => '--Seleccione--', 'label' => false, 'class'=> 'form-control', 'required', 'id' => 'id_partida_22', 'onchange' => 'cargar_descripcion_partida(this);']); ?>
                </div>
              </td>
          </tr>

          <tr>
              <td>
                <div id="" class="input-group" on>
                    <span class="input-group-addon">Descripción de la Partida</span>
                    <input type="text" name="descripcion_partida" id="descripcion_partida_22" class="form-control" readonly>
                </div>
              </td>
          </tr>

      </table>

      <table class="table table-responsive border">
        <tr>
            <td>
                <div id="" class="input-group" on>
                    <span class="input-group-addon"> Cantidad</span>
                    <input type="text" class="form-control" id="cantidad222" name="cantidad">
                </div>
            </td>

            <td>
                <div id="" class="input-group" on>
                    <span class="input-group-addon"> Unidad de Medida</span>
                    <input type="text" class="form-control" id="unidad_medida222" name="unidad_medida">
                </div>
            </td>

            <td>
                <div id="" class="input-group" on>
                    <span class="input-group-addon"> Precio Unitario</span>
                    <input type="text" class="form-control" id="precio_unitario222" name="precio_unitario">
                </div>
            </td>
        </tr>
      </table>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Salir</button>
           <button type="submit" class="btn btn-success btn-sm pull-right">Actualizar</
        </div>
      </div>
    </div>
  </div>
   </div><
</div>
</div>
 </form>
