<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MpForma2117 Entity
 *
 * @property int $forma
 * @property string|null $partida
 * @property string|null $programa_social
 * @property float|null $recursos_propios
 * @property float|null $otros_organismos
 * @property float|null $asignacion_anual
 */
class MpForma2117 extends Entity
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
        'partida' => true,
        'programa_social' => true,
        'recursos_propios' => true,
        'otros_organismos' => true,
        'asignacion_anual' => true
    ];
}
