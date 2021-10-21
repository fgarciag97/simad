<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MpForma2101 Entity
 *
 * @property int $forma
 * @property int $ano
 * @property string|null $entidad_federal
 * @property string|null $politica_presupuestaria
 * @property string|null $politica_gastos
 * @property string|null $politica_cobertura
 */
class MpForma2101 extends Entity
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
        'entidad_federal' => true,
        'politica_presupuestaria' => true,
        'politica_gastos' => true,
        'politica_cobertura' => true
    ];
}
