<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewMrrhhHorasExtrasProteccionCivil Entity
 *
 * @property int|null $id
 * @property int|null $requisicion
 * @property int|null $ano
 * @property int|null $mes
 * @property int|null $id_tipo_personal
 * @property int|null $cedula
 * @property string|null $nombres
 * @property string|null $apellidos
 * @property bool|null $status
 * @property string|null $cargo_pc
 * @property int|null $cantidad_dias
 * @property int|null $dias_no_laborables
 * @property int|null $cantidad_horas
 * @property int|null $cantidad_horas_extra_diurnas
 * @property int|null $cantidad_horas_extra_nocturnas
 * @property float|null $monto
 * @property bool|null $procesado
 */
class ViewMrrhhHorasExtrasProteccionCivil extends Entity
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
        'requisicion' => true,
        'ano' => true,
        'mes' => true,
        'id_tipo_personal' => true,
        'cedula' => true,
        'nombres' => true,
        'apellidos' => true,
        'status' => true,
        'cargo_pc' => true,
        'cantidad_dias' => true,
        'dias_no_laborables' => true,
        'cantidad_horas' => true,
        'cantidad_horas_extra_diurnas' => true,
        'cantidad_horas_extra_nocturnas' => true,
        'monto' => true,
        'procesado' => true
    ];
}
