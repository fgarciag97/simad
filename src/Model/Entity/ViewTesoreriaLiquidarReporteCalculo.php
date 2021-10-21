<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewTesoreriaLiquidarReporteCalculo Entity
 *
 * @property int|null $id_requisicion
 * @property \Cake\I18n\FrozenDate|null $fecha
 * @property string|null $n_factura
 * @property string|null $n_control
 * @property string|null $tipo_calculo
 * @property float|null $base_imponible
 * @property float|null $total
 * @property int|null $porcentaje
 * @property float|null $impuesto
 */
class ViewTesoreriaLiquidarReporteCalculo extends Entity
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
        'id_requisicion' => true,
        'fecha' => true,
        'n_factura' => true,
        'n_control' => true,
        'tipo_calculo' => true,
        'base_imponible' => true,
        'total' => true,
        'porcentaje' => true,
        'impuesto' => true
    ];
}
