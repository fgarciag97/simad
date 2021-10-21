<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PresupuestoForma2121Ajuste Entity
 *
 * @property int $id
 * @property int $id_sector
 * @property int $id_programa
 * @property int $id_sub_programa
 * @property int|null $id_proyecto
 * @property int|null $id_actividad
 * @property string $partida
 * @property string|null $tipo_ajuste
 * @property float|null $incrementar
 * @property float|null $disminuir
 * @property int $ano
 * @property \Cake\I18n\FrozenDate $fecha
 * @property bool $resolucion
 * @property int $n_resolucion
 */
class PresupuestoForma2121Ajuste extends Entity
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
        'id_sector' => true,
        'id_programa' => true,
        'id_sub_programa' => true,
        'id_proyecto' => true,
        'id_actividad' => true,
        'partida' => true,
        'tipo_ajuste' => true,
        'incrementar' => true,
        'disminuir' => true,
        'ano' => true,
        'fecha' => true,
        'resolucion' => true,
        'n_resolucion' => true
    ];
}
