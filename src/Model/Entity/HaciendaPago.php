<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HaciendaPago Entity
 *
 * @property int $idcuenta
 * @property int|null $idplanunico
 * @property int|null $idctahaber
 * @property int|null $idrecibo
 * @property int|null $idgenera
 * @property int|null $idconccta
 * @property int|null $idcontrib
 * @property float|null $rmoncuenta
 * @property float|null $rmoncuenta1
 * @property \Cake\I18n\FrozenDate|null $ffeccuenta
 * @property \Cake\I18n\FrozenDate|null $fechapago
 * @property int|null $idpropiedad
 * @property int|null $ntipopropiedad
 * @property int|null $nsergenera
 * @property int|null $ntipcuenta
 * @property int|null $ldebcancelado
 * @property string|null $cobscuenta
 * @property int|null $npercuenta
 * @property float|null $nanocuenta
 * @property string|null $cnomusuario
 * @property string|null $cnomequipo
 * @property int|null $idcaja
 * @property int $idasg
 * @property string|null $status
 * @property int|null $tipo_propiedad
 */
class HaciendaPago extends Entity
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
        'idcuenta' => true,
        'idplanunico' => true,
        'idctahaber' => true,
        'idrecibo' => true,
        'idgenera' => true,
        'idconccta' => true,
        'idcontrib' => true,
        'rmoncuenta' => true,
        'rmoncuenta1' => true,
        'ffeccuenta' => true,
        'fechapago' => true,
        'idpropiedad' => true,
        'ntipopropiedad' => true,
        'nsergenera' => true,
        'ntipcuenta' => true,
        'ldebcancelado' => true,
        'cobscuenta' => true,
        'npercuenta' => true,
        'nanocuenta' => true,
        'cnomusuario' => true,
        'cnomequipo' => true,
        'idcaja' => true,
        'idasg' => true,
        'status' => true,
        'tipo_propiedad' => true
    ];
}
