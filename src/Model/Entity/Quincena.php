<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Quincena Entity
 *
 * @property int $id
 * @property string $denominacion
 * @property int $fecha_desde
 * @property int $fecha_hasta
 */
class Quincena extends Entity
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
        'denominacion' => true,
        'fecha_desde' => true,
        'fecha_hasta' => true
    ];
}
