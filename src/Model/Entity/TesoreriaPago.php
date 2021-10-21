<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TesoreriaPago Entity
 *
 * @property int $id
 * @property int $requisicion
 * @property int $id_operacion
 * @property string|null $n_referencia
 * @property string|null $n_cheque
 * @property string|null $n_control_cheque
 * @property string|null $pago
 * @property string $numero_cuenta
 * @property string|null $descripcion
 * @property float|null $monto
 */
class TesoreriaPago extends Entity
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
        'requisicion' => true,
        'id_operacion' => true,
        'n_referencia' => true,
        'n_cheque' => true,
        'n_control_cheque' => true,
        'pago' => true,
        'numero_cuenta' => true,
        'descripcion' => true,
        'monto' => true
    ];
}
