<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MrrhhNivelesDirectivo Entity
 *
 * @property int $id
 * @property int $grupo
 * @property string $denominacion
 * @property float $sueldo_base
 */
class MrrhhNivelesDirectivo extends Entity
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
        'grupo' => true,
        'denominacion' => true,
        'sueldo_base' => true
    ];
}
