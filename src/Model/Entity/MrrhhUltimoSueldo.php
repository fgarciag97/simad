<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MrrhhUltimoSueldo Entity
 *
 * @property int $id
 * @property int|null $cedula
 * @property int|null $id_tipo_personal
 * @property int|null $mes
 * @property int|null $quincena
 * @property float|null $monto
 * @property string|null $tipo
 * @property int|null $ano
 */
class MrrhhUltimoSueldo extends Entity
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
        'cedula' => true,
        'id_tipo_personal' => true,
        'mes' => true,
        'quincena' => true,
        'monto' => true,
        'tipo' => true,
        'ano' => true
    ];
}
