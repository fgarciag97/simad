<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MpForma2109 Entity
 *
 * @property int $forma
 * @property string $programa
 * @property string $partida
 * @property string $denominacion
 * @property float|null $asignacion
 * @property string|null $observacion
 * @property int $ano
 */
class MpForma2109 extends Entity
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
        'programa' => true,
        'partida' => true,
        'denominacion' => true,
        'asignacion' => true,
        'observacion' => true,
        'ano' => true
    ];
}
