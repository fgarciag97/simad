<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MrrhhHistBeCementerio Entity
 *
 * @property int $id
 * @property int $requisicion
 * @property int $ano
 * @property int $mes
 * @property int $quincena
 * @property int $id_tipo_personal
 * @property int $cedula
 * @property string|null $ente_adscrito
 * @property bool|null $status
 * @property int|null $ano_servicio
 * @property int|null $anos_institucion
 * @property int|null $anos_servicio
 * @property float|null $grado_porcentaje
 * @property string|null $grupo
 * @property float|null $sueldo_base
 * @property float|null $sueldo
 * @property int|null $grado_nivel
 * @property string|null $denominacion_grado_nivel
 * @property bool|null $beca_escolar_inicial
 * @property bool|null $beca_escolar_primaria
 * @property bool|null $beca_escolar_secundaria
 * @property bool|null $beca_escolar_universitaria
 * @property bool|null $beca_escolar_discapacidad
 * @property int|null $cantidad_beca_inicial
 * @property int|null $cantidad_beca_primaria
 * @property int|null $cantidad_beca_secundaria
 * @property int|null $cantidad_beca_universitaria
 * @property int|null $cantidad_beca_discapacidad
 * @property bool|null $prima_hogar
 * @property bool|null $caja_ahorro
 * @property string|null $prestamo_caja_ahorro
 * @property string|null $dias_dejados_cancelar
 * @property bool|null $funeraria
 * @property bool|null $asociacion_funeraria
 * @property bool|null $sindicato
 * @property int|null $hijos
 * @property float|null $prima_hijos
 * @property int|null $antiguedad
 * @property float|null $prima_profesion
 * @property float|null $prima_antiguedad
 * @property float|null $deduccion_sso
 * @property float|null $deduccion_rpe
 * @property float|null $deduccion_fpj
 * @property float|null $depositario_judicial
 * @property float|null $depositario_judicial_monto
 * @property float|null $deduccion_caja_ahorro
 * @property float|null $aporte_patronal_asso
 * @property float|null $aporte_patronal_arpe
 * @property float|null $aporte_patronal_afpj
 * @property float|null $aporte_patronal_caja_ahorro
 * @property float|null $x_prima_profesion
 * @property float|null $x_prima_antiguedad
 * @property float|null $x_deduccion_sso
 * @property float|null $x_deduccion_rpe
 * @property float|null $x_deduccion_fpj
 * @property float|null $x_depositario_judicial
 * @property float|null $x_depositario_judicial_monto
 * @property float|null $x_deduccion_caja_ahorro
 * @property float|null $x_aporte_patronal_asso
 * @property float|null $x_aporte_patronal_arpe
 * @property float|null $x_porte_patronal_afpj
 * @property float|null $x_aporte_patronal_caja_ahorro
 * @property bool|null $procesado
 * @property float|null $bono_dejado_c
 */
class MrrhhHistBeCementerio extends Entity
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
        'requisicion' => true,
        'ano' => true,
        'mes' => true,
        'quincena' => true,
        'id_tipo_personal' => true,
        'cedula' => true,
        'ente_adscrito' => true,
        'status' => true,
        'ano_servicio' => true,
        'anos_institucion' => true,
        'anos_servicio' => true,
        'grado_porcentaje' => true,
        'grupo' => true,
        'sueldo_base' => true,
        'sueldo' => true,
        'grado_nivel' => true,
        'denominacion_grado_nivel' => true,
        'beca_escolar_inicial' => true,
        'beca_escolar_primaria' => true,
        'beca_escolar_secundaria' => true,
        'beca_escolar_universitaria' => true,
        'beca_escolar_discapacidad' => true,
        'cantidad_beca_inicial' => true,
        'cantidad_beca_primaria' => true,
        'cantidad_beca_secundaria' => true,
        'cantidad_beca_universitaria' => true,
        'cantidad_beca_discapacidad' => true,
        'prima_hogar' => true,
        'caja_ahorro' => true,
        'prestamo_caja_ahorro' => true,
        'dias_dejados_cancelar' => true,
        'funeraria' => true,
        'asociacion_funeraria' => true,
        'sindicato' => true,
        'hijos' => true,
        'prima_hijos' => true,
        'antiguedad' => true,
        'prima_profesion' => true,
        'prima_antiguedad' => true,
        'deduccion_sso' => true,
        'deduccion_rpe' => true,
        'deduccion_fpj' => true,
        'depositario_judicial' => true,
        'depositario_judicial_monto' => true,
        'deduccion_caja_ahorro' => true,
        'aporte_patronal_asso' => true,
        'aporte_patronal_arpe' => true,
        'aporte_patronal_afpj' => true,
        'aporte_patronal_caja_ahorro' => true,
        'x_prima_profesion' => true,
        'x_prima_antiguedad' => true,
        'x_deduccion_sso' => true,
        'x_deduccion_rpe' => true,
        'x_deduccion_fpj' => true,
        'x_depositario_judicial' => true,
        'x_depositario_judicial_monto' => true,
        'x_deduccion_caja_ahorro' => true,
        'x_aporte_patronal_asso' => true,
        'x_aporte_patronal_arpe' => true,
        'x_porte_patronal_afpj' => true,
        'x_aporte_patronal_caja_ahorro' => true,
        'procesado' => true,
        'bono_dejado_c' => true
    ];
}
