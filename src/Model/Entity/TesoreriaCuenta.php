<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TesoreriaCuenta Entity
 *
 * @property int $id_banco
 * @property string $numero_cuenta
 * @property string $nombre_banco
 * @property string $representante
 * @property \Cake\I18n\FrozenDate|null $fecha_apertura
 * @property float|null $saldo
 * @property bool|null $tipo
 * @property int $cedula
 */
class TesoreriaCuenta extends Entity
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
        'nombre_banco' => true,
        'representante' => true,
        'fecha_apertura' => true,
        'saldo' => true,
        'tipo' => true,
        'cedula' => true
    ];
}
