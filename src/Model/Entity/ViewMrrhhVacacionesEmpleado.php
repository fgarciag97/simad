<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewMrrhhVacacionesEmpleado Entity
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
 * @property string|null $cargo_fijo
 * @property string|null $cargo_contratado
 * @property string|null $cargo_directivo
 * @property \Cake\I18n\FrozenDate|null $fecha_salida
 * @property \Cake\I18n\FrozenDate|null $fecha_entrada
 * @property float|null $monto
 * @property bool|null $procesado
 */
class ViewMrrhhVacacionesEmpleado extends Entity
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
        'cargo_fijo' => true,
        'cargo_contratado' => true,
        'cargo_directivo' => true,
        'fecha_salida' => true,
        'fecha_entrada' => true,
        'monto' => true,
        'procesado' => true
    ];
}
