<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MrrhhHistorial Entity
 *
 * @property int $id
 * @property int $cedula
 * @property string $tipo_nomina
 * @property string $tipo_personal
 * @property string $cargo
 * @property string $banco
 * @property string $numero_cuenta
 */
class MrrhhHistorial extends Entity
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
        'tipo_nomina' => true,
        'tipo_personal' => true,
        'cargo' => true,
        'banco' => true,
        'numero_cuenta' => true
    ];
}
