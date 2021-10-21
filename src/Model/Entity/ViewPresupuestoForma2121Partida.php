<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewPresupuestoForma2121Partida Entity
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
 * @property string|null $denominacion_proyecto
 * @property int|null $id_actividad
 * @property string|null $actividad
 * @property string|null $denominacion_actividad
 * @property int|null $id_partida
 * @property string|null $partida
 * @property string|null $denominacion
 * @property float|null $ingreso_propio
 * @property float|null $situado
 * @property float|null $ingreso_estadal
 * @property float|null $ingreso_fci
 * @property float|null $otra_fuente
 * @property float|null $monto
 */
class ViewPresupuestoForma2121Partida extends Entity
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
        'denominacion_proyecto' => true,
        'id_actividad' => true,
        'actividad' => true,
        'denominacion_actividad' => true,
        'id_partida' => true,
        'partida' => true,
        'denominacion' => true,
        'ingreso_propio' => true,
        'situado' => true,
        'ingreso_estadal' => true,
        'ingreso_fci' => true,
        'otra_fuente' => true,
        'monto' => true
    ];
}
