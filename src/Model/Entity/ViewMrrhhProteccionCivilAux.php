<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewMrrhhProteccionCivilAux Entity
 *
 * @property int|null $cedula
 * @property string|null $apellidos
 * @property string|null $nombres
 * @property bool|null $status
 * @property string|null $correo
 * @property int|null $tipo_personal
 * @property string|null $banco
 * @property string|null $numero_cuenta
 * @property \Cake\I18n\FrozenDate|null $fecha_ingreso_institucion
 * @property \Cake\I18n\FrozenDate|null $fecha_egreso_institucion
 * @property int|null $ano_servicio
 * @property float|null $anos_institucion
 * @property float|null $anos_servicio
 * @property float|null $grado_porcentaje
 * @property string|null $grupo
 * @property string|null $cargo
 * @property float|null $sueldo_base
 * @property float|null $grado_nivel
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
 * @property float|null $depositario_judicial
 * @property float|null $depositario_judicial_monto
 * @property float|null $prima_hijos
 * @property float|null $antiguedad
 * @property float|null $prima_profesion
 * @property float|null $prima_antiguedad
 * @property float|null $deduccion_sso
 * @property float|null $deduccion_rpe
 * @property float|null $deduccion_fpj
 * @property float|null $deduccion_caja_ahorro
 * @property float|null $aporte_patronal_asso
 * @property float|null $aporte_patronal_arpe
 * @property float|null $aporte_patronal_afpj
 * @property float|null $aporte_patronal_caja_ahorro
 * @property string|null $ente_adscrito
 */
class ViewMrrhhProteccionCivilAux extends Entity
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
        'cedula' => true,
        'apellidos' => true,
        'nombres' => true,
        'status' => true,
        'correo' => true,
        'tipo_personal' => true,
        'banco' => true,
        'numero_cuenta' => true,
        'fecha_ingreso_institucion' => true,
        'fecha_egreso_institucion' => true,
        'ano_servicio' => true,
        'anos_institucion' => true,
        'anos_servicio' => true,
        'grado_porcentaje' => true,
        'grupo' => true,
        'cargo' => true,
        'sueldo_base' => true,
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
        'depositario_judicial' => true,
        'depositario_judicial_monto' => true,
        'prima_hijos' => true,
        'antiguedad' => true,
        'prima_profesion' => true,
        'prima_antiguedad' => true,
        'deduccion_sso' => true,
        'deduccion_rpe' => true,
        'deduccion_fpj' => true,
        'deduccion_caja_ahorro' => true,
        'aporte_patronal_asso' => true,
        'aporte_patronal_arpe' => true,
        'aporte_patronal_afpj' => true,
        'aporte_patronal_caja_ahorro' => true,
        'ente_adscrito' => true
    ];
}
