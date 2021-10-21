<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EjecucionRequisicionTransferencium Entity
 *
 * @property int $id
 * @property int $ano
 * @property int $mes
 * @property \Cake\I18n\FrozenDate $fecha
 * @property string|null $tipo
 * @property int|null $status
 * @property \Cake\I18n\FrozenDate|null $fecha_rrhh
 * @property \Cake\I18n\FrozenTime|null $hora_rrhh
 * @property \Cake\I18n\FrozenDate|null $fecha_ejecucion
 * @property \Cake\I18n\FrozenTime|null $hora_ejecucion
 * @property \Cake\I18n\FrozenDate|null $fecha_ordenamiento
 * @property \Cake\I18n\FrozenTime|null $hora_ordenamiento
 * @property \Cake\I18n\FrozenDate|null $fecha_tesoreria
 * @property \Cake\I18n\FrozenTime|null $hora_tesoreria
 * @property int|null $numero_orden_pago
 * @property int|null $numero_orden_pago_ord
 */
class EjecucionRequisicionTransferencium extends Entity
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
        'ano' => true,
        'mes' => true,
        'fecha' => true,
        'tipo' => true,
        'status' => true,
        'fecha_rrhh' => true,
        'hora_rrhh' => true,
        'fecha_ejecucion' => true,
        'hora_ejecucion' => true,
        'fecha_ordenamiento' => true,
        'hora_ordenamiento' => true,
        'fecha_tesoreria' => true,
        'hora_tesoreria' => true,
        'numero_orden_pago' => true,
        'numero_orden_pago_ord' => true
    ];
}
