<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PresupuestoForma2121Partida Entity
 *
 * @property int $id
 * @property int $ano
 * @property int $id_ramo
 * @property int $id_sub_ramo
 * @property int|null $id_especifico
 * @property int $id_sub_especifico
 * @property int|null $ordinal
 * @property bool|null $tipo_ingreso
 * @property int $id_sector
 * @property int $id_programa
 * @property int $id_sub_programa
 * @property int|null $id_proyecto
 * @property int|null $id_actividad
 * @property float|null $ingreso_propio
 * @property float|null $situado
 * @property float|null $ingreso_estadal
 * @property float|null $ingreso_fci
 * @property float|null $otra_fuente
 * @property float|null $monto
 * @property bool $resolucion
 * @property int $n_resolucion
 */
class PresupuestoForma2121Partida extends Entity
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
        'id_ramo' => true,
        'id_sub_ramo' => true,
        'id_especifico' => true,
        'id_sub_especifico' => true,
        'ordinal' => true,
        'tipo_ingreso' => true,
        'id_sector' => true,
        'id_programa' => true,
        'id_sub_programa' => true,
        'id_proyecto' => true,
        'id_actividad' => true,
        'ingreso_propio' => true,
        'situado' => true,
        'ingreso_estadal' => true,
        'ingreso_fci' => true,
        'otra_fuente' => true,
        'monto' => true,
        'resolucion' => true,
        'n_resolucion' => true
    ];
}
