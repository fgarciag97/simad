<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewCompraFiltroOrdenesComprometida Entity
 *
 * @property int|null $requisicion
 * @property string|null $tipo
 * @property int|null $proveedor
 * @property string|null $proveedor_denominacion
 * @property int|null $id_registro
 * @property int|null $status
 * @property \Cake\I18n\FrozenDate|null $fecha
 * @property float|null $monto
 */
class ViewCompraFiltroOrdenesComprometida extends Entity
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
        'tipo' => true,
        'proveedor' => true,
        'proveedor_denominacion' => true,
        'id_registro' => true,
        'status' => true,
        'fecha' => true,
        'monto' => true
    ];
}
