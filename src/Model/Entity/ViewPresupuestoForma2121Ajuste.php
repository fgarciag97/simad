<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewPresupuestoForma2121Ajuste Entity
 *
 * @property int|null $id
 * @property int|null $id_partida
 * @property string|null $partida
 * @property string|null $denominacion
 * @property float|null $ajuste
 */
class ViewPresupuestoForma2121Ajuste extends Entity
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
        'id_partida' => true,
        'partida' => true,
        'denominacion' => true,
        'ajuste' => true
    ];
}
