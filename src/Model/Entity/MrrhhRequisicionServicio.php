<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MrrhhRequisicionServicio Entity
 *
 * @property int $id
 * @property int $ano
 * @property int|null $mes
 * @property int|null $quincena
 * @property int|null $id_tipo_personal
 * @property string|null $tipo
 * @property int|null $status
 * @property string|null $concepto
 * @property string|null $concepto_mod
 * @property int|null $numero_orden_pago
 * @property int|null $numero_orden_pago_ord
 * @property \Cake\I18n\FrozenDate|null $fecha_rrhh
 * @property \Cake\I18n\FrozenTime|null $hora_rrhh
 * @property \Cake\I18n\FrozenDate|null $fecha_ejecucion
 * @property \Cake\I18n\FrozenTime|null $hora_ejecucion
 * @property \Cake\I18n\FrozenDate|null $fecha_ordenamiento
 * @property \Cake\I18n\FrozenTime|null $hora_ordenamiento
 * @property \Cake\I18n\FrozenDate|null $fecha_tesoreria
 * @property \Cake\I18n\FrozenTime|null $hora_tesoreria
 * @property int|null $beneficiario
 * @property string|null $letra
 * @property string|null $rif
 */
class MrrhhRequisicionServicio extends Entity
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
        'quincena' => true,
        'id_tipo_personal' => true,
        'tipo' => true,
        'status' => true,
        'concepto' => true,
        'concepto_mod' => true,
        'numero_orden_pago' => true,
        'numero_orden_pago_ord' => true,
        'fecha_rrhh' => true,
        'hora_rrhh' => true,
        'fecha_ejecucion' => true,
        'hora_ejecucion' => true,
        'fecha_ordenamiento' => true,
        'hora_ordenamiento' => true,
        'fecha_tesoreria' => true,
        'hora_tesoreria' => true,
        'beneficiario' => true,
        'letra' => true,
        'rif' => true
    ];
}
