<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MpForma2115 Entity
 *
 * @property int $forma
 * @property string $sector
 * @property string $denominacion_sector
 * @property string $programa
 * @property string $denominacion_programa
 * @property string $partida
 * @property string $denominacion
 * @property float $ingreso_propio
 * @property float $situado
 * @property float $ingreso_estadal
 * @property float $ingreso_fci
 * @property float $otra_fuente
 * @property float $total
 * @property int $ano
 */
class MpForma2115 extends Entity
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
        'partida' => true,
        'denominacion' => true,
        'ingreso_propio' => true,
        'situado' => true,
        'ingreso_estadal' => true,
        'ingreso_fci' => true,
        'otra_fuente' => true,
        'total' => true,
        'ano' => true
    ];
}
