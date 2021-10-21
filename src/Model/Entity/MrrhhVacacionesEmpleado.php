<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MrrhhVacacionesEmpleado Entity
 *
 * @property int $id
 * @property int $requisicion
 * @property int $ano
 * @property int $mes
 * @property int $id_tipo_personal
 * @property int $cedula
 * @property \Cake\I18n\FrozenDate|null $fecha_salida
 * @property \Cake\I18n\FrozenDate|null $fecha_entrada
 * @property float|null $monto
 * @property bool|null $procesado
 */
class MrrhhVacacionesEmpleado extends Entity
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
        'requisicion' => true,
        'ano' => true,
        'mes' => true,
        'id_tipo_personal' => true,
        'cedula' => true,
        'fecha_salida' => true,
        'fecha_entrada' => true,
        'monto' => true,
        'procesado' => true
    ];
}
