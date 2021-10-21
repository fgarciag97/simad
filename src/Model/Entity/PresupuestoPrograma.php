<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PresupuestoPrograma Entity
 *
 * @property int $id
 * @property int $id_sector
 * @property string $programa
 * @property string|null $denominacion
 * @property string|null $tipo_categoria
 * @property bool $resolucion
 * @property int $n_resolucion
 */
class PresupuestoPrograma extends Entity
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
        'programa' => true,
        'denominacion' => true,
        'tipo_categoria' => true,
        'resolucion' => true,
        'n_resolucion' => true
    ];
}
