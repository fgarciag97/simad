<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MpForma2119 Entity
 *
 * @property int $forma
 * @property string $partida
 * @property string $denominacion
 * @property string $sector1
 * @property float $monto1
 * @property string|null $sector2
 * @property float|null $monto2
 * @property string|null $sector3
 * @property float|null $monto3
 * @property string|null $sector4
 * @property float|null $monto4
 * @property string|null $sector5
 * @property float|null $monto5
 * @property string|null $sector6
 * @property float|null $monto6
 * @property string|null $sector7
 * @property float|null $monto7
 * @property string|null $sector8
 * @property float|null $monto8
 * @property string|null $sector9
 * @property float|null $monto9
 * @property string|null $sector10
 * @property float|null $monto10
 * @property float $total
 * @property int $ano
 */
class MpForma2119 extends Entity
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
        'denominacion' => true,
        'sector1' => true,
        'monto1' => true,
        'sector2' => true,
        'monto2' => true,
        'sector3' => true,
        'monto3' => true,
        'sector4' => true,
        'monto4' => true,
        'sector5' => true,
        'monto5' => true,
        'sector6' => true,
        'monto6' => true,
        'sector7' => true,
        'monto7' => true,
        'sector8' => true,
        'monto8' => true,
        'sector9' => true,
        'monto9' => true,
        'sector10' => true,
        'monto10' => true,
        'total' => true,
        'ano' => true
    ];
}
