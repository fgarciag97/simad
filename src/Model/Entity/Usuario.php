<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $responsable
 * @property bool|null $presupuestof
 * @property bool|null $presupuestoe
 * @property bool|null $rrhh
 * @property bool|null $compra
 * @property bool|null $tesoreria
 * @property bool|null $usogeneral
 * @property bool|null $ordenamiento
 */
class Usuario extends Entity
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
        'username' => true,
        'password' => true,
        'responsable' => true,
        'presupuestof' => true,
        'presupuestoe' => true,
        'rrhh' => true,
        'compra' => true,
        'tesoreria' => true,
        'usogeneral' => true,
        'ordenamiento' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($value){
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($value);
    }
}
