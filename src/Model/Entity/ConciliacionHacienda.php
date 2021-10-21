<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ConciliacionHacienda Entity
 *
 * @property int $id
 * @property int $id_banco
 * @property string $numero_cuenta
 * @property \Cake\I18n\FrozenDate $fecha_inicio
 * @property \Cake\I18n\FrozenDate $fecha_corte
 * @property string|null $descripcion
 * @property float $saldo_libro
 * @property float $saldo_estado_cuenta
 */
class ConciliacionHacienda extends Entity
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
        'id_banco' => true,
        'numero_cuenta' => true,
        'fecha_inicio' => true,
        'fecha_corte' => true,
        'descripcion' => true,
        'saldo_libro' => true,
        'saldo_estado_cuenta' => true
    ];
}
