<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewEjecucionRequisicionCompra Entity
 *
 * @property int|null $id
 * @property int|null $id_requisicion
 * @property int|null $id_partida
 * @property string|null $denominacion_partida
 * @property string|null $descripcion_partida
 * @property float|null $monto_comprometer
 * @property float|null $monto_disponible
 * @property float|null $monto_restante
 * @property int|null $ano
 */
class ViewEjecucionRequisicionCompra extends Entity
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
        'id_requisicion' => true,
        'id_partida' => true,
        'denominacion_partida' => true,
        'descripcion_partida' => true,
        'monto_comprometer' => true,
        'monto_disponible' => true,
        'monto_restante' => true,
        'ano' => true
    ];
}
