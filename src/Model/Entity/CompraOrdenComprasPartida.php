<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CompraOrdenComprasPartida Entity
 *
 * @property int $id
 * @property int $id_orden
 * @property int $id_partida
 * @property string $descripcion
 * @property float|null $monto
 */
class CompraOrdenComprasPartida extends Entity
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
        'id_orden' => true,
        'id_partida' => true,
        'descripcion' => true,
        'monto' => true
    ];
}
