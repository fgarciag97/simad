<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LogUser Entity
 *
 * @property int $id
 * @property int $id_usuario
 * @property \Cake\I18n\FrozenDate|null $fecha_inicio
 * @property \Cake\I18n\FrozenTime|null $hora_inicio
 * @property \Cake\I18n\FrozenDate|null $fecha_cierre
 * @property \Cake\I18n\FrozenTime|null $hora_cierre
 * @property string|null $ip_sesion
 * @property bool|null $status
 * @property \Cake\I18n\FrozenDate|null $ultima_fecha
 * @property \Cake\I18n\FrozenTime|null $ultima_hora
 */
class LogUser extends Entity
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
        'id_usuario' => true,
        'fecha_inicio' => true,
        'hora_inicio' => true,
        'fecha_cierre' => true,
        'hora_cierre' => true,
        'ip_sesion' => true,
        'status' => true,
        'ultima_fecha' => true,
        'ultima_hora' => true
    ];
}
