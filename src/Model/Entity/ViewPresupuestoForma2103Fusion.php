<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewPresupuestoForma2103Fusion Entity
 *
 * @property int|null $id
 * @property string|null $actividad
 * @property string|null $denominacion
 * @property int|null $id_sector
 * @property string|null $sector
 * @property string|null $sector_denominacion
 * @property int|null $id_programa
 * @property string|null $programa
 * @property string|null $denominacion_programa
 * @property int|null $id_sub_programa
 * @property string|null $sub_programa
 * @property string|null $denominacion_sub_programa
 * @property string|null $concatenado
 * @property int|null $ano
 * @property string|null $unidad_ejecutora
 * @property string|null $funcionario_responsable
 */
class ViewPresupuestoForma2103Fusion extends Entity
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
        'actividad' => true,
        'denominacion' => true,
        'id_sector' => true,
        'sector' => true,
        'sector_denominacion' => true,
        'id_programa' => true,
        'programa' => true,
        'denominacion_programa' => true,
        'id_sub_programa' => true,
        'sub_programa' => true,
        'denominacion_sub_programa' => true,
        'concatenado' => true,
        'ano' => true,
        'unidad_ejecutora' => true,
        'funcionario_responsable' => true
    ];
}
