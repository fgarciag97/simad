<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CompraOrdenCompra Entity
 *
 * @property int $id
 * @property int $requisicion
 * @property \Cake\I18n\FrozenDate $fecha
 * @property int $ano
 * @property int $proveedor
 * @property string $descripcion_ordena
 * @property string|null $descripcion_ordena_mod
 */
class CompraOrdenCompra extends Entity
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
        'fecha' => true,
        'ano' => true,
        'proveedor' => true,
        'descripcion_ordena' => true,
        'descripcion_ordena_mod' => true
    ];
}
