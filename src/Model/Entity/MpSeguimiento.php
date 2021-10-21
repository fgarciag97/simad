<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MpSeguimiento Entity
 *
 * @property int $ano
 * @property bool|null $datosentidad
 * @property bool|null $politica_presupuestaria
 * @property bool|null $ingresos
 * @property bool|null $categorias
 * @property bool|null $proyectos
 */
class MpSeguimiento extends Entity
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
        'datosentidad' => true,
        'politica_presupuestaria' => true,
        'ingresos' => true,
        'categorias' => true,
        'proyectos' => true
    ];
}
