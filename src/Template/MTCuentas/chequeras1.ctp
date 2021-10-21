<?php $this->assign('title', 'Chequeras'); ?>

<div class="well">

	<!--====================== DATOS DE CHEQUES ==================-->

		<table class="table table-responsive">

			<thead>
				<tr>
					<th></th>
					<td></td>
					<th class="text-center"><strong>Chequeras</strong></th>
					<th></th>
					<th></th>
				</tr>
			</thead>
		</table>

		
		<table class="table-responsive table">

			<?php 
				if(isset($data) && count($data) != 0){
					foreach ($data as $key) { ?>
						
						<tr>
							<td><div id="" class="input-group">
									<span class="input-group-addon">N° Chequera</span>
									<?= $this->Form->input('numero_chequera', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'value' => $key['numero_chequera'], 'readonly']); ?>
									</div>
							</td>

							<td>
								<div id="" class="input-group">
									<span class="input-group-addon">Fecha de Chequera</span>
									<input type="date" name="fecha_chequera" name="fecha_chequera" readonly value = <?= $key['fecha_chequera'] ?> >
								</div>
							</td>

							<td>
								<div id="" class="input-group">
									<span class="input-group-addon">Cantidad de Cheques</span>
									<?= $this->Form->select('cantidad_cheques', [
						    			'25' => '25',
						    			'50' => '50',
						    			'75' => '75',
						    			'100' => '100'],['empty' => '--',
						    			'class'=> 'form-control', 'label' => false, 'escape' => false, 'id' => 'cantidad_cheques', 'value' => $key['cantidad_cheques'], 'readonly']); ?>
								</div>
							</td>

							<td>
								<div id="" class="input-group">
									<span class="input-group-addon">N° de Inicio de Cheque</span>
									<?= $this->Form->input('numero_inicio', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);', 'value' => $key['numero_inicio'], 'readonly']); ?>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<?php foreach ($cheques as $k) { 
									if($k['numero_chequera'] == $key['numero_chequera']){ ?>

										<table class="table table-responsive">
												<tr>
													<th><?= $k['numero_cheque'] ?></th>
													<td>
														<?php 
															if($k['status'] == 0){
																echo "Activo";
															}else if($k['status'] == 1){
																echo "Pagado";
															}else if($k['status'] == 2){
																echo "anulado";
															}
														?></td>
													<th>
														<?= $this->Form->postLink('Anular', ['action' => 'anular1', $cuenta, $k['numero_chequera'], $req], ['confirm' => __('Desea eliminar la partida?'), 'class' => 'btn btn-danger btn-xs']) ?>
													</th>
												</tr>
										</table>
								<?php } } ?>
							</td>
						</tr>

					<?php }
				}
			?>

			<?= $this->Form->create($tesoreria, array('class'=>'well')) ?>
				<tr>
					<td><div id="" class="input-group">
							<span class="input-group-addon">N° Chequera</span>
							<?= $this->Form->input('numero_chequera', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);']); ?>
							</div>
					</td>

					<td>
						<div id="" class="input-group">
							<span class="input-group-addon">Fecha de Chequera</span>
							<input type="date" name="fecha_chequera" name="fecha_chequera">
						</div>
					</td>

					<td>
						<div id="" class="input-group">
							<span class="input-group-addon">Cantidad de Cheques</span>
							<?= $this->Form->input('cantidad_cheques', ['class'=> 'form-control', 'label' => false, 'escape' => false, 'required']); ?>
						</div>
					</td>

					<td>
						<div id="" class="input-group">
							<span class="input-group-addon">N° de Inicio de Cheque</span>
							<?= $this->Form->input('numero_inicio', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);']); ?>
						</div>
					</td>

					<td>
						<?= $this->Form->submit('Registrar', ['class'=>'btn btn-default']); ?>
					</td>
				</tr>
			<?php echo $this->Form->end();?>
		</table>
</div>