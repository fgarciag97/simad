<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MrrhhHistoricoEmpleado Entity
 *
 * @property int $id
 * @property int $ano
 * @property int $mes
 * @property int $quincena
 * @property int $id_tipo_personal
 * @property int $cedula
 */
class MrrhhHistoricoEmpleado extends Entity
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
        'mes' => true,
        'quincena' => true,
        'id_tipo_personal' => true,
        'cedula' => true
    ];
}
