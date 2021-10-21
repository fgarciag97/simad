<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CompraOrdenComprasItem Entity
 *
 * @property int $id
 * @property int $id_orden
 * @property int $unidad_solicitante
 * @property string $descripcion_item
 * @property int $cantidad
 * @property string|null $unidad_medida
 * @property float|null $precio_unitario
 * @property float|null $iva
 * @property float|null $sub_total
 * @property int $id_partida
 * @property string $descripcion_partida
 * @property \Cake\I18n\FrozenDate $fecha
 * @property int $ano
 */
class CompraOrdenComprasItem extends Entity
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
        'unidad_solicitante' => true,
        'descripcion_item' => true,
        'cantidad' => true,
        'unidad_medida' => true,
        'precio_unitario' => true,
        'iva' => true,
        'sub_total' => true,
        'id_partida' => true,
        'descripcion_partida' => true,
        'fecha' => true,
        'ano' => true
    ];
}
