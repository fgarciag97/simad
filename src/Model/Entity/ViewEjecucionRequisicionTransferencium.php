<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewEjecucionRequisicionTransferencium Entity
 *
 * @property int|null $id
 * @property int|null $ano
 * @property \Cake\I18n\FrozenDate|null $fecha
 * @property int|null $mes
 * @property string|null $mes_denominacion
 * @property string|null $tipo
 * @property int|null $status
 * @property string|null $beneficiario
 * @property float|null $total
 * @property \Cake\I18n\FrozenDate|null $fecha_rrhh
 * @property \Cake\I18n\FrozenTime|null $hora_rrhh
 * @property \Cake\I18n\FrozenDate|null $fecha_ejecucion
 * @property \Cake\I18n\FrozenTime|null $hora_ejecucion
 * @property \Cake\I18n\FrozenDate|null $fecha_ordenamiento
 * @property \Cake\I18n\FrozenTime|null $hora_ordenamiento
 * @property \Cake\I18n\FrozenDate|null $fecha_tesoreria
 * @property \Cake\I18n\FrozenTime|null $hora_tesoreria
 * @property string|null $numero_orden_pago
 */
class ViewEjecucionRequisicionTransferencium extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'id' => true,
        'ano' => true,
        'fecha' => true,
        'mes' => true,
        'mes_denominacion' => true,
        'tipo' => true,
        'status' => true,
        'beneficiario' => true,
        'total' => true,
        'fecha_rrhh' => true,
        'hora_rrhh' => true,
        'fecha_ejecucion' => true,
        'hora_ejecucion' => true,
        'fecha_ordenamiento' => true,
        'hora_ordenamiento' => true,
        'fecha_tesoreria' => true,
        'hora_tesoreria' => true,
        'numero_orden_pago' => true
    ];
}
