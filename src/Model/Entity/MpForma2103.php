<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MpForma2103 Entity
 *
 * @property int $forma
 * @property string $sector
 * @property string $denominacion
 * @property string|null $unidad_ejecutora
 * @property string|null $funcionario_responsable
 * @property int $ano
 */
class MpForma2103 extends Entity
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
        'sector' => true,
        'denominacion' => true,
        'unidad_ejecutora' => true,
        'funcionario_responsable' => true,
        'ano' => true
    ];
}
