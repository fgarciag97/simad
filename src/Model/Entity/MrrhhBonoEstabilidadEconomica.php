<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MrrhhBonoEstabilidadEconomica Entity
 *
 * @property int $cedula
 * @property int|null $dias_no_laborables
 * @property int|null $horas_extras_diurnas
 * @property int|null $horas_extras_nocturnas
 */
class MrrhhBonoEstabilidadEconomica extends Entity
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
        'dias_no_laborables' => true,
        'horas_extras_diurnas' => true,
        'horas_extras_nocturnas' => true
    ];
}
