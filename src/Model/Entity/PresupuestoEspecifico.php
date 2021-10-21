<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PresupuestoEspecifico Entity
 *
 * @property int $id
 * @property int $id_sub_ramo
 * @property string $especifico
 * @property string|null $descripcion
 * @property float|null $monto
 * @property bool $resolucion
 * @property int $n_resolucion
 */
class PresupuestoEspecifico extends Entity
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
        'id_sub_ramo' => true,
        'especifico' => true,
        'descripcion' => true,
        'monto' => true,
        'resolucion' => true,
        'n_resolucion' => true
    ];
}
