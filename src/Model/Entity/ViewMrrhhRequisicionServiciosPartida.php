<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewMrrhhRequisicionServiciosPartida Entity
 *
 * @property int|null $id
 * @property int|null $ano
 * @property int|null $requisicion
 * @property int|null $id_partida
 * @property string|null $denominacion_partida
 * @property float|null $monto
 */
class ViewMrrhhRequisicionServiciosPartida extends Entity
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
        'requisicion' => true,
        'id_partida' => true,
        'denominacion_partida' => true,
        'monto' => true
    ];
}
