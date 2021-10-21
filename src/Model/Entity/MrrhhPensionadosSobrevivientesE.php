<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MrrhhPensionadosSobrevivientesE Entity
 *
 * @property int $cedula
 * @property int $tipo_nomina
 * @property int $tipo_personal
 * @property int $nivel
 * @property int $grado_nivel
 * @property int $cargo
 * @property string $banco
 * @property string $numero_cuenta
 * @property string|null $prestamo_caja_ahorro
 * @property string|null $dias_dejados_cancelar
 * @property float|null $depositario_judicial
 * @property float|null $depositario_judicial_monto
 * @property float $sueldo
 */
class MrrhhPensionadosSobrevivientesE extends Entity
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
        'tipo_nomina' => true,
        'tipo_personal' => true,
        'nivel' => true,
        'grado_nivel' => true,
        'cargo' => true,
        'banco' => true,
        'numero_cuenta' => true,
        'prestamo_caja_ahorro' => true,
        'dias_dejados_cancelar' => true,
        'depositario_judicial' => true,
        'depositario_judicial_monto' => true,
        'sueldo' => true
    ];
}
