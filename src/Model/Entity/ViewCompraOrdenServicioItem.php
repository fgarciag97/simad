<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewCompraOrdenServicioItem Entity
 *
 * @property int|null $id
 * @property int|null $id_orden
 * @property int|null $requisicion
 * @property string|null $unidad_solicitante
 * @property string|null $descripcion_item
 * @property int|null $cantidad
 * @property string|null $unidad_medida
 * @property float|null $precio_unitario
 * @property float|null $iva
 * @property float|null $sub_total
 * @property string|null $id_partida
 * @property string|null $descripcion_partida
 * @property \Cake\I18n\FrozenDate|null $fecha
 * @property int|null $ano
 */
class ViewCompraOrdenServicioItem extends Entity
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
        'id_orden' => true,
        'requisicion' => true,
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
