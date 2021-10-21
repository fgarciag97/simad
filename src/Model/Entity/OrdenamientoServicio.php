<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrdenamientoServicio Entity
 *
 * @property int $id
 * @property int $id_requisicion
 * @property string|null $n_factura
 * @property string|null $n_control
 * @property \Cake\I18n\FrozenDate $fecha
 * @property int $tipo_calculo
 * @property float|null $bs
 * @property float|null $tipo_porcentaje
 * @property float $neto
 * @property int $ano
 */
class OrdenamientoServicio extends Entity
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
        'ano' => true
    ];
}
