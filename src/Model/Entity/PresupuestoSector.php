<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PresupuestoSector Entity
 *
 * @property int $id
 * @property string $sector
 * @property string|null $denominacion
 * @property string|null $tipo_categoria
 * @property bool $resolucion
 * @property int $n_resolucion
 */
class PresupuestoSector extends Entity
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
        'sector' => true,
        'denominacion' => true,
        'tipo_categoria' => true,
        'resolucion' => true,
        'n_resolucion' => true
    ];
}
