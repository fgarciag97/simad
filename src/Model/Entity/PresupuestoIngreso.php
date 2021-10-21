<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PresupuestoIngreso Entity
 *
 * @property int $id
 * @property int $id_ramo
 * @property int $id_sub_ramo
 * @property int $id_especifico
 * @property int|null $id_sub_especifico
 * @property int|null $id_ordinal
 * @property string|null $descripcion
 * @property float $monto
 */
class PresupuestoIngreso extends Entity
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
        'id_ramo' => true,
        'id_sub_ramo' => true,
        'id_especifico' => true,
        'id_sub_especifico' => true,
        'id_ordinal' => true,
        'descripcion' => true,
        'monto' => true
    ];
}
