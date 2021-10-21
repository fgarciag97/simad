<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MpForma2112 Entity
 *
 * @property int $forma
 * @property int $ano
 * @property string|null $entidad_deferal
 * @property string|null $descripcion
 * @property string|null $unidad_medida
 * @property string|null $cantidad_programada
 * @property float|null $costo_financiero
 */
class MpForma2112 extends Entity
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
        'descripcion' => true,
        'unidad_medida' => true,
        'cantidad_programada' => true,
        'costo_financiero' => true
    ];
}
