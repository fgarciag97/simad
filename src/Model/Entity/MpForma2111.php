<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MpForma2111 Entity
 *
 * @property int $forma
 * @property int $ano
 * @property string|null $entidad_deferal
 * @property string|null $unidad_administrativa
 * @property string|null $descripcion
 */
class MpForma2111 extends Entity
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
        'ano' => true,
        'entidad_deferal' => true,
        'unidad_administrativa' => true,
        'descripcion' => true
    ];
}
