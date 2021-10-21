<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PresupuestoForma2103 Entity
 *
 * @property int $id
 * @property int $ano
 * @property int $id_sector
 * @property int $id_programa
 * @property int|null $id_sub_programa
 * @property string|null $unidad_ejecutora
 * @property string|null $funcionario_responsable
 * @property bool $resolucion
 * @property int $n_resolucion
 */
class PresupuestoForma2103 extends Entity
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
        'id_sector' => true,
        'id_programa' => true,
        'id_sub_programa' => true,
        'unidad_ejecutora' => true,
        'funcionario_responsable' => true,
        'resolucion' => true,
        'n_resolucion' => true
    ];
}
