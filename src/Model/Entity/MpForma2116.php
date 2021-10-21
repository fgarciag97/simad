<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MpForma2116 Entity
 *
 * @property int $forma
 * @property string|null $partida
 * @property string|null $unidad_ejecutora
 * @property string|null $codigo_obra
 * @property string|null $descripcion
 * @property string|null $estatus
 * @property \Cake\I18n\FrozenDate|null $fecha_inicio
 * @property \Cake\I18n\FrozenDate|null $fecha_conclusion
 * @property string|null $c_anteriores
 * @property string|null $c_vigentes
 * @property float|null $total_comprometidas
 * @property string|null $e_anteriores
 * @property string|null $e_vigentes
 * @property float|null $total_ejecutadas
 * @property string|null $estimadas_anteriores
 * @property string|null $estimadas_vigentes
 */
class MpForma2116 extends Entity
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
        'partida' => true,
        'unidad_ejecutora' => true,
        'codigo_obra' => true,
        'descripcion' => true,
        'estatus' => true,
        'fecha_inicio' => true,
        'fecha_conclusion' => true,
        'c_anteriores' => true,
        'c_vigentes' => true,
        'total_comprometidas' => true,
        'e_anteriores' => true,
        'e_vigentes' => true,
        'total_ejecutadas' => true,
        'estimadas_anteriores' => true,
        'estimadas_vigentes' => true
    ];
}
