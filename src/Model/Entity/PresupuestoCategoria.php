<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PresupuestoCategoria Entity
 *
 * @property int $id
 * @property int $id_sector
 * @property int $id_programa
 * @property int|null $id_sub_programa
 * @property int|null $id_proyecto
 * @property string|null $descripcion
 * @property float|null $monto
 */
class PresupuestoCategoria extends Entity
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
        'id_sector' => true,
        'id_programa' => true,
        'id_sub_programa' => true,
        'id_proyecto' => true,
        'descripcion' => true,
        'monto' => true
    ];
}
