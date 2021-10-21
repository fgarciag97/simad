<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CompraProveedore Entity
 *
 * @property int $rif
 * @property string $letra
 * @property string|null $razon_social
 * @property string|null $responsable
 * @property string|null $direccion
 * @property string|null $telefono
 * @property string|null $actividad
 * @property bool|null $estado
 * @property int|null $ci_responsable
 */
class CompraProveedore extends Entity
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
        'rif' => true,
        'letra' => true,
        'razon_social' => true,
        'responsable' => true,
        'direccion' => true,
        'telefono' => true,
        'actividad' => true,
        'estado' => true,
        'ci_responsable' => true
    ];
}
