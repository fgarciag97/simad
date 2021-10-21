<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MrrhhFormulacion Entity
 *
 * @property int $id
 * @property int $ano
 * @property string $tipo
 * @property string $subtipo
 * @property int $ano_real_femenino
 * @property int $ano_real_maculino
 * @property float $ano_real_monto
 * @property float|null $ano_real_incidencias
 * @property int|null $ultimo_ano_femenino
 * @property int|null $ultimo_ano_maculino
 * @property float|null $ultimo_ano_monto
 * @property float|null $ultimo_ano_incidencias
 * @property int|null $ano_presupuestado_femenino
 * @property int|null $ano_presupuestado_maculino
 * @property float|null $ano_presupuestado_monto
 * @property float|null $ano_presupuestado_incidencias
 * @property float|null $ano_real_primas
 * @property float|null $ultimo_ano_primas
 * @property float|null $ano_presupuestado_primas
 * @property float|null $ano_real_compensaciones
 * @property float|null $ultimo_ano_compensaciones
 * @property float|null $ano_presupuestado_compensaciones
 */
class MrrhhFormulacion extends Entity
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
        'tipo' => true,
        'subtipo' => true,
        'ano_real_femenino' => true,
        'ano_real_maculino' => true,
        'ano_real_monto' => true,
        'ano_real_incidencias' => true,
        'ultimo_ano_femenino' => true,
        'ultimo_ano_maculino' => true,
        'ultimo_ano_monto' => true,
        'ultimo_ano_incidencias' => true,
        'ano_presupuestado_femenino' => true,
        'ano_presupuestado_maculino' => true,
        'ano_presupuestado_monto' => true,
        'ano_presupuestado_incidencias' => true,
        'ano_real_primas' => true,
        'ultimo_ano_primas' => true,
        'ano_presupuestado_primas' => true,
        'ano_real_compensaciones' => true,
        'ultimo_ano_compensaciones' => true,
        'ano_presupuestado_compensaciones' => true
    ];
}
