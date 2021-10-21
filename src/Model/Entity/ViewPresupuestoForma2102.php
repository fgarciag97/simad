<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewPresupuestoForma2102 Entity
 *
 * @property int|null $id
 * @property int|null $ano
 * @property bool|null $tipo_ingreso
 * @property int|null $id_ramo
 * @property string|null $ramo
 * @property string|null $ramo_denominacion
 * @property float|null $monto_ramo
 * @property int|null $id_sub_ramo
 * @property string|null $sub_ramo
 * @property string|null $sub_ramo_denominacion
 * @property float|null $monto_sub_ramo
 * @property int|null $id_especifico
 * @property string|null $especifico
 * @property string|null $especifico_denominacion
 * @property float|null $monto_especifico
 * @property int|null $id_sub_especifico
 * @property string|null $sub_especifico
 * @property string|null $sub_especifico_denominacion
 * @property float|null $monto_b_especifico
 * @property int|null $ordinal
 * @property string|null $ordinald
 * @property string|null $ordinald_denominacion
 * @property float|null $monto_ordinald
 * @property string|null $concatenado
 */
class ViewPresupuestoForma2102 extends Entity
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
        'ano' => true,
        'tipo_ingreso' => true,
        'id_ramo' => true,
        'ramo' => true,
        'ramo_denominacion' => true,
        'monto_ramo' => true,
        'id_sub_ramo' => true,
        'sub_ramo' => true,
        'sub_ramo_denominacion' => true,
        'monto_sub_ramo' => true,
        'id_especifico' => true,
        'especifico' => true,
        'especifico_denominacion' => true,
        'monto_especifico' => true,
        'id_sub_especifico' => true,
        'sub_especifico' => true,
        'sub_especifico_denominacion' => true,
        'monto_b_especifico' => true,
        'ordinal' => true,
        'ordinald' => true,
        'ordinald_denominacion' => true,
        'monto_ordinald' => true,
        'concatenado' => true
    ];
}
