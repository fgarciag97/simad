<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PresupuestoSubEspecifico Entity
 *
 * @property int $id
 * @property int|null $id_especifico
 * @property string $sub_especifico
 * @property string|null $descripcion
 * @property float|null $monto
 * @property bool $resolucion
 * @property int $n_resolucion
 */
class PresupuestoSubEspecifico extends Entity
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
        'id_especifico' => true,
        'sub_especifico' => true,
        'descripcion' => true,
        'monto' => true,
        'resolucion' => true,
        'n_resolucion' => true
    ];
}
