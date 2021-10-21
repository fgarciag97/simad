<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TesoreriaCheque Entity
 *
 * @property int $id
 * @property string|null $numero_cuenta
 * @property string|null $numero_chequera
 * @property string $numero_cheque
 * @property int|null $status
 */
class TesoreriaCheque extends Entity
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
        'numero_chequera' => true,
        'numero_cheque' => true,
        'status' => true
    ];
}
