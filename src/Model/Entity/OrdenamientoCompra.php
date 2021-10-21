<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrdenamientoCompra Entity
 *
 * @property int $id
 * @property int $id_requisicion
 * @property string $n_factura
 * @property string $n_control
 * @property \Cake\I18n\FrozenDate $fecha
 * @property int $tipo_calculo
 * @property float|null $bs
 * @property float|null $tipo_porcentaje
 * @property float $neto
 * @property int $ano
 * @property string|null $observacion
 * @property int|null $fraccion
 * @property bool|null $status1
 * @property bool|null $status2
 * @property bool|null $status3
 * @property bool|null $status4
 */
class OrdenamientoCompra extends Entity
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
        'n_factura' => true,
        'n_control' => true,
        'fecha' => true,
        'tipo_calculo' => true,
        'bs' => true,
        'tipo_porcentaje' => true,
        'neto' => true,
        'ano' => true,
        'observacion' => true,
        'fraccion' => true,
        'status1' => true,
        'status2' => true,
        'status3' => true,
        'status4' => true
    ];
}
