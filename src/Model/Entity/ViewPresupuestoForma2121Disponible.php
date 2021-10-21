<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewPresupuestoForma2121Disponible Entity
 *
 * @property int|null $id_partida
 * @property float|null $disponible
 * @property string|null $partida
 * @property string|null $denominacion
 */
class ViewPresupuestoForma2121Disponible extends Entity
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
        'id_partida' => true,
        'disponible' => true,
        'partida' => true,
        'denominacion' => true
    ];
}
