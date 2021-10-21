<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MpForma2110 Entity
 *
 * @property int $forma
 * @property string $sector
 * @property string $partida
 * @property string $denominacion
 * @property float|null $corriente
 * @property float|null $capital
 * @property float|null $total
 * @property int $ano
 */
class MpForma2110 extends Entity
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
        'partida' => true,
        'denominacion' => true,
        'corriente' => true,
        'capital' => true,
        'total' => true,
        'ano' => true
    ];
}
