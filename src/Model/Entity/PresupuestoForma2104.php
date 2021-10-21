<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PresupuestoForma2104 Entity
 *
 * @property int $forma
 * @property int $ano
 * @property string $entidad_federal
 * @property int $id_sector
 * @property int $id_programa
 * @property float $ingreso_propio
 * @property float $situado
 * @property float $ingreso_estadal
 * @property float $ingreso_fci
 * @property float $otra_fuente
 * @property float $total
 */
class PresupuestoForma2104 extends Entity
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
        'ano' => true,
        'entidad_federal' => true,
        'id_sector' => true,
        'id_programa' => true,
        'ingreso_propio' => true,
        'situado' => true,
        'ingreso_estadal' => true,
        'ingreso_fci' => true,
        'otra_fuente' => true,
        'total' => true
    ];
}
