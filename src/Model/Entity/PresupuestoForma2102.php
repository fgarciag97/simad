<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PresupuestoForma2102 Entity
 *
 * @property int $id
 * @property int $ano
 * @property int $id_ramo
 * @property int $id_sub_ramo
 * @property int|null $id_especifico
 * @property int $id_sub_especifico
 * @property int|null $ordinal
 * @property bool|null $tipo_ingreso
 * @property bool $resolucion
 * @property int $n_resolucion
 */
class PresupuestoForma2102 extends Entity
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
        'resolucion' => true,
        'n_resolucion' => true
    ];
}
