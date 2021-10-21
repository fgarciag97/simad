<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EjecucionBeneficiario Entity
 *
 * @property int $cedula
 * @property string $letra
 * @property string|null $nombres
 * @property string|null $direccion
 * @property string|null $telefono
 * @property string|null $actividad
 * @property bool|null $estado
 */
class EjecucionBeneficiario extends Entity
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
        'letra' => true,
        'cedula' => true,
        'nombres' => true,
        'direccion' => true,
        'telefono' => true,
        'actividad' => true,
        'estado' => true
    ];
}
