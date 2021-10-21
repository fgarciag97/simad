<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MrrhhCestaTicketCementerio Entity
 *
 * @property int $id
 * @property int $requisicion
 * @property int $ano
 * @property int $mes
 * @property int $id_tipo_personal
 * @property int $cedula
 * @property int|null $dias_trabajados
 * @property int|null $dias_faltados
 * @property int|null $dias_a_cancelar
 * @property float|null $monto
 * @property bool|null $procesado
 */
class MrrhhCestaTicketCementerio extends Entity
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
        'dias_trabajados' => true,
        'dias_faltados' => true,
        'dias_a_cancelar' => true,
        'monto' => true,
        'procesado' => true
    ];
}
