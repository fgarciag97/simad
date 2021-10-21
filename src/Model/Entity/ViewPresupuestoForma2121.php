<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewPresupuestoForma2121 Entity
 *
 * @property int|null $id
 * @property int|null $ano
 * @property int|null $id_sector
 * @property string|null $sector
 * @property string|null $denominacion_sector
 * @property int|null $id_programa
 * @property string|null $programa
 * @property string|null $denominacion_programa
 * @property int|null $id_sub_programa
 * @property string|null $sub_programa
 * @property string|null $denominacion_sub_programa
 * @property int|null $id_proyecto
 * @property string|null $proyecto
 * @property int|null $id_actividad
 * @property string|null $actividad
 * @property float|null $monto_total_proyecto
 * @property float|null $monto_total_actividad
 */
class ViewPresupuestoForma2121 extends Entity
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
        'id' => true,
        'ano' => true,
        'id_sector' => true,
        'sector' => true,
        'denominacion_sector' => true,
        'id_programa' => true,
        'programa' => true,
        'denominacion_programa' => true,
        'id_sub_programa' => true,
        'sub_programa' => true,
        'denominacion_sub_programa' => true,
        'id_proyecto' => true,
        'proyecto' => true,
        'id_actividad' => true,
        'actividad' => true,
        'monto_total_proyecto' => true,
        'monto_total_actividad' => true
    ];
}
