<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrdenCompra Entity
 *
 * @property int $requisicion
 * @property int|null $sector
 * @property string|null $item
 * @property string|null $descripcion
 * @property int|null $partida
 * @property string|null $unidad
 * @property float|null $cantidad
 * @property float|null $precio_unitario
 * @property float|null $monto_total
 */
class OrdenCompra extends Entity
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
        'sector' => true,
        'item' => true,
        'descripcion' => true,
        'partida' => true,
        'unidad' => true,
        'cantidad' => true,
        'precio_unitario' => true,
        'monto_total' => true
    ];
}
