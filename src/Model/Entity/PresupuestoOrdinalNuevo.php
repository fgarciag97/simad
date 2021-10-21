<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PresupuestoOrdinalNuevo Entity
 *
 * @property int $id
 * @property int|null $id_sub_especifico
 * @property string $ordinal
 * @property string|null $descripcion
 * @property float|null $monto
 */
class PresupuestoOrdinalNuevo extends Entity
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
        'id_sub_especifico' => true,
        'ordinal' => true,
        'descripcion' => true,
        'monto' => true
    ];
}
