<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TesoreriaChequera Entity
 *
 * @property string $numero_chequera
 * @property string|null $numero_cuenta
 * @property \Cake\I18n\FrozenDate $fecha_chequera
 * @property int $cantidad_cheques
 * @property int $numero_inicio
 */
class TesoreriaChequera extends Entity
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
        'numero_chequera' => true,
        'numero_cuenta' => true,
        'fecha_chequera' => true,
        'cantidad_cheques' => true,
        'numero_inicio' => true
    ];
}
