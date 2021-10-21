<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MrrhhHorasExtrasEmpleado Entity
 *
 * @property int $id
 * @property int $requisicion
 * @property int $ano
 * @property int $mes
 * @property int $id_tipo_personal
 * @property int $cedula
 * @property int|null $cantidad_dias
 * @property int|null $dias_no_laborables
 * @property int|null $cantidad_horas
 * @property int|null $cantidad_horas_extra_diurnas
 * @property int|null $cantidad_horas_extra_nocturnas
 * @property float|null $monto
 * @property float|null $monto_horas_diurnas
 * @property float|null $monto_horas_nocturnas
 * @property float|null $monto_dias_no_laborables
 * @property bool|null $procesado
 */
class MrrhhHorasExtrasEmpleado extends Entity
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
        'cantidad_dias' => true,
        'dias_no_laborables' => true,
        'cantidad_horas' => true,
        'cantidad_horas_extra_diurnas' => true,
        'cantidad_horas_extra_nocturnas' => true,
        'monto' => true,
        'monto_horas_diurnas' => true,
        'monto_horas_nocturnas' => true,
        'monto_dias_no_laborables' => true,
        'procesado' => true
    ];
}
