<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewCompraOrdenServicio Entity
 *
 * @property int|null $id
 * @property int|null $requisicion
 * @property int|null $status
 * @property \Cake\I18n\FrozenDate|null $fecha
 * @property int|null $ano
 * @property string|null $proveedor
 * @property string|null $letra
 * @property int|null $rif
 * @property string|null $descripcion_ordena
 * @property float|null $total
 * @property string|null $descripcion_ordena_mod
 */
class ViewCompraOrdenServicio extends Entity
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
        'status' => true,
        'fecha' => true,
        'ano' => true,
        'proveedor' => true,
        'letra' => true,
        'rif' => true,
        'descripcion_ordena' => true,
        'total' => true,
        'descripcion_ordena_mod' => true
    ];
}
