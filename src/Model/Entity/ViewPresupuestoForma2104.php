<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewPresupuestoForma2104 Entity
 *
 * @property int|null $forma
 * @property int|null $ano
 * @property string|null $entidad_federal
 * @property int|null $id_sector
 * @property string|null $sector
 * @property int|null $id_programa
 * @property string|null $programa
 * @property float|null $ingreso_propio
 * @property float|null $situado
 * @property float|null $ingreso_estadal
 * @property float|null $ingreso_fci
 * @property float|null $otra_fuente
 * @property float|null $total
 */
class ViewPresupuestoForma2104 extends Entity
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
        'forma' => true,
        'ano' => true,
        'entidad_federal' => true,
        'id_sector' => true,
        'sector' => true,
        'id_programa' => true,
        'programa' => true,
        'ingreso_propio' => true,
        'situado' => true,
        'ingreso_estadal' => true,
        'ingreso_fci' => true,
        'otra_fuente' => true,
        'total' => true
    ];
}
