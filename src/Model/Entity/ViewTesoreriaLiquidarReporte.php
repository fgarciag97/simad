<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewTesoreriaLiquidarReporte Entity
 *
 * @property int|null $requisicion
 * @property string|null $razon_social
 * @property \Cake\I18n\FrozenDate|null $fecha_pago
 * @property int|null $rif
 * @property string|null $letra
 * @property \Cake\I18n\FrozenDate|null $fecha_facturacion
 * @property string|null $n_factura
 * @property string|null $n_control
 * @property string|null $n_comprobante
 */
class ViewTesoreriaLiquidarReporte extends Entity
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
        'razon_social' => true,
        'fecha_pago' => true,
        'rif' => true,
        'letra' => true,
        'fecha_facturacion' => true,
        'n_factura' => true,
        'n_control' => true,
        'n_comprobante' => true
    ];
}
