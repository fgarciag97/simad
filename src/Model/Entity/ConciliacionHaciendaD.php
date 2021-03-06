<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ConciliacionHaciendaD Entity
 *
 * @property int $id
 * @property int $id_conciliacion
 * @property \Cake\I18n\FrozenDate $fecha
 * @property int $numero
 * @property string $concepto
 * @property float $monto
 */
class ConciliacionHaciendaD extends Entity
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
        'id_conciliacion' => true,
        'fecha' => true,
        'numero' => true,
        'concepto' => true,
        'monto' => true
    ];
}
