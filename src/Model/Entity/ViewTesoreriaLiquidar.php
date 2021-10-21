<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewTesoreriaLiquidar Entity
 *
 * @property int|null $requisicion
 * @property \Cake\I18n\FrozenDate|null $fecha_facturacion
 * @property \Cake\I18n\FrozenDate|null $fecha_pago
 * @property string|null $tipo
 * @property string|null $razon_social
 * @property float|null $monto
 * @property int|null $status
 */
class ViewTesoreriaLiquidar extends Entity
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
        'fecha_facturacion' => true,
        'fecha_pago' => true,
        'tipo' => true,
        'razon_social' => true,
        'monto' => true,
        'status' => true
    ];
}
