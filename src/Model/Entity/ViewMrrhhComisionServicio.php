<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewMrrhhComisionServicio Entity
 *
 * @property int|null $cedula
 * @property int|null $tipo_personal
 * @property string|null $apellidos
 * @property string|null $nombres
 * @property bool|null $status
 * @property string|null $correo
 * @property \Cake\I18n\FrozenDate|null $fecha_ingreso_institucion
 * @property \Cake\I18n\FrozenDate|null $fecha_egreso_institucion
 * @property float|null $anos_institucion
 * @property int|null $ano_servicio
 * @property string|null $banco
 * @property string|null $numero_cuenta
 * @property string|null $prestamo_caja_ahorro
 * @property string|null $dias_dejados_cancelar
 * @property float|null $grado_porcentaje
 * @property int|null $grado_instruccion
 * @property string|null $grupo
 * @property int|null $id_grupo
 * @property int|null $cargo
 * @property int|null $id_cargo
 * @property float|null $sueldo_base
 * @property float|null $sueldo
 * @property float|null $depositario_judicial
 * @property float|null $depositario_judicial_monto
 * @property string|null $denominacion_grado_nivel
 * @property float|null $grado_nivel
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
 * @property float|null $porcentaje_caja
 * @property bool|null $funeraria
 * @property bool|null $asociacion_funeraria
 * @property bool|null $sindicato
 * @property int|null $hijos
 * @property string|null $ente_adscrito
 * @property int|null $id_ente_adscrito
 * @property float|null $antiguedad
 */
class ViewMrrhhComisionServicio extends Entity
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
        'tipo_personal' => true,
        'apellidos' => true,
        'nombres' => true,
        'status' => true,
        'correo' => true,
        'fecha_ingreso_institucion' => true,
        'fecha_egreso_institucion' => true,
        'anos_institucion' => true,
        'ano_servicio' => true,
        'banco' => true,
        'numero_cuenta' => true,
        'prestamo_caja_ahorro' => true,
        'dias_dejados_cancelar' => true,
        'grado_porcentaje' => true,
        'grado_instruccion' => true,
        'grupo' => true,
        'id_grupo' => true,
        'cargo' => true,
        'id_cargo' => true,
        'sueldo_base' => true,
        'sueldo' => true,
        'depositario_judicial' => true,
        'depositario_judicial_monto' => true,
        'denominacion_grado_nivel' => true,
        'grado_nivel' => true,
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
        'porcentaje_caja' => true,
        'funeraria' => true,
        'asociacion_funeraria' => true,
        'sindicato' => true,
        'hijos' => true,
        'ente_adscrito' => true,
        'id_ente_adscrito' => true,
        'antiguedad' => true
    ];
}
