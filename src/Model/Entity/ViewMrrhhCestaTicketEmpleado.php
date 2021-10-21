<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewMrrhhCestaTicketEmpleado Entity
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
 * @property string|null $dependencia
 * @property int|null $dias_trabajados
 * @property int|null $dias_faltados
 * @property int|null $dias_a_cancelar
 * @property float|null $monto
 * @property bool|null $procesado
 */
class ViewMrrhhCestaTicketEmpleado extends Entity
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
        'dependencia' => true,
        'dias_trabajados' => true,
        'dias_faltados' => true,
        'dias_a_cancelar' => true,
        'monto' => true,
        'procesado' => true
    ];
}
