<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewMrrhhHistoricoEmpleadosPensionadosSobreviviente Entity
 *
 * @property int|null $id
 * @property int|null $requisicion
 * @property int|null $ano
 * @property int|null $mes
 * @property int|null $quincena
 * @property int|null $id_tipo_personal
 * @property int|null $cedula
 * @property string|null $nombres
 * @property string|null $apellidos
 * @property bool|null $status
 * @property string|null $correo
 * @property \Cake\I18n\FrozenDate|null $fecha_ingreso_institucion
 * @property \Cake\I18n\FrozenDate|null $fecha_egreso_institucion
 * @property string|null $cargo
 * @property string|null $banco
 * @property string|null $numero_cuenta
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
 * @property bool|null $prima_hogar
 * @property bool|null $caja_ahorro
 * @property bool|null $funeraria
 * @property int|null $hijos
 * @property float|null $prima_hijos
 * @property int|null $antiguedad
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
 * @property float|null $x_prima_profesion
 * @property float|null $x_prima_antiguedad
 * @property float|null $x_deduccion_sso
 * @property float|null $x_deduccion_rpe
 * @property float|null $x_deduccion_fpj
 * @property float|null $x_deduccion_caja_ahorro
 * @property float|null $x_aporte_patronal_asso
 * @property float|null $x_aporte_patronal_arpe
 * @property float|null $x_porte_patronal_afpj
 * @property float|null $x_aporte_patronal_caja_ahorro
 * @property bool|null $procesado
 */
class ViewMrrhhHistoricoEmpleadosPensionadosSobreviviente extends Entity
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
        'id' => true,
        'requisicion' => true,
        'ano' => true,
        'mes' => true,
        'quincena' => true,
        'id_tipo_personal' => true,
        'cedula' => true,
        'nombres' => true,
        'apellidos' => true,
        'status' => true,
        'correo' => true,
        'fecha_ingreso_institucion' => true,
        'fecha_egreso_institucion' => true,
        'cargo' => true,
        'banco' => true,
        'numero_cuenta' => true,
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
        'prima_hogar' => true,
        'caja_ahorro' => true,
        'funeraria' => true,
        'hijos' => true,
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
        'x_prima_profesion' => true,
        'x_prima_antiguedad' => true,
        'x_deduccion_sso' => true,
        'x_deduccion_rpe' => true,
        'x_deduccion_fpj' => true,
        'x_deduccion_caja_ahorro' => true,
        'x_aporte_patronal_asso' => true,
        'x_aporte_patronal_arpe' => true,
        'x_porte_patronal_afpj' => true,
        'x_aporte_patronal_caja_ahorro' => true,
        'procesado' => true
    ];
}
