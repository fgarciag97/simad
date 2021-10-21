<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MpForma2121 Entity
 *
 * @property int $forma
 * @property string $sector
 * @property string $denominacion_sector
 * @property string $programa
 * @property string $denominacion_programa
 * @property string $proyecto
 * @property string $denominacion_proyecto
 * @property string $partida
 * @property string $denominacion
 * @property float $total
 * @property int $ano
 */
class MpForma2121 extends Entity
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
        'denominacion_sector' => true,
        'programa' => true,
        'denominacion_programa' => true,
        'proyecto' => true,
        'denominacion_proyecto' => true,
        'partida' => true,
        'denominacion' => true,
        'total' => true,
        'ano' => true
    ];
}
