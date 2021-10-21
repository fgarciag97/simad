<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RegistrosHacienda Entity
 *
 * @property int $id
 * @property string $numero_cuenta
 * @property int $recibo
 * @property string $referencia
 * @property float $monto_debe
 * @property float $monto_haber
 * @property float $saldo
 * @property string|null $tipo
 * @property string|null $descripcion
 * @property \Cake\I18n\FrozenDate|null $fecha_documento
 * @property \Cake\I18n\FrozenDate $fecha_pago
 * @property bool|null $revision
 */
class RegistrosHacienda extends Entity
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
        'numero_cuenta' => true,
        'recibo' => true,
        'referencia' => true,
        'monto_debe' => true,
        'monto_haber' => true,
        'saldo' => true,
        'tipo' => true,
        'descripcion' => true,
        'fecha_documento' => true,
        'fecha_pago' => true,
        'revision' => true
    ];
}
