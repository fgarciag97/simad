<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewMrrhhRequisicion Entity
 *
 * @property int|null $id
 * @property int|null $ano
 * @property int|null $mes
 * @property string|null $mes_denominacion
 * @property int|null $quincena
 * @property string|null $quincena_denominacion
 * @property int|null $id_tipo_personal
 * @property string|null $tipo_personal_denominacion
 * @property string|null $tipo
 * @property int|null $status
 * @property string|null $concepto
 * @property string|null $tipo_porcentaje
 * @property string|null $porcentaje
 * @property \Cake\I18n\FrozenDate|null $fecha_rrhh
 * @property \Cake\I18n\FrozenTime|null $hora_rrhh
 * @property \Cake\I18n\FrozenDate|null $fecha_ejecucion
 * @property \Cake\I18n\FrozenTime|null $hora_ejecucion
 * @property \Cake\I18n\FrozenDate|null $fecha_ordenamiento
 * @property \Cake\I18n\FrozenTime|null $hora_ordenamiento
 * @property \Cake\I18n\FrozenDate|null $fecha_tesoreria
 * @property \Cake\I18n\FrozenTime|null $hora_tesoreria
 * @property bool|null $prima_profesion
 * @property bool|null $prima_hogar
 * @property bool|null $prima_hijos
 * @property bool|null $prima_antiguedad
 * @property bool|null $sso
 * @property bool|null $rpe
 * @property bool|null $faov
 * @property bool|null $fjp
 * @property bool|null $caja_ahorro
 * @property bool|null $acofjam
 * @property bool|null $asociacion_funeraria
 * @property bool|null $depositario_judicial
 * @property bool|null $beca_escolar_inicial
 * @property bool|null $beca_escolar_primaria
 * @property bool|null $beca_escolar_secundaria
 * @property bool|null $beca_escolar_universitaria
 * @property bool|null $beca_escolar_discapacidad
 * @property int|null $numero_orden_pago
 * @property string|null $concepto_mod
 * @property float|null $monto
 * @property string|null $concepto2
 * @property float|null $monto2
 * @property string|null $tipo_porcentaje2
 * @property string|null $concepto3
 * @property float|null $monto3
 * @property string|null $tipo_porcentaje3
 * @property string|null $concepto4
 * @property float|null $monto4
 * @property string|null $tipo_porcentaje4
 */
class ViewMrrhhRequisicion extends Entity
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
        'ano' => true,
        'mes' => true,
        'mes_denominacion' => true,
        'quincena' => true,
        'quincena_denominacion' => true,
        'id_tipo_personal' => true,
        'tipo_personal_denominacion' => true,
        'tipo' => true,
        'status' => true,
        'concepto' => true,
        'tipo_porcentaje' => true,
        'porcentaje' => true,
        'fecha_rrhh' => true,
        'hora_rrhh' => true,
        'fecha_ejecucion' => true,
        'hora_ejecucion' => true,
        'fecha_ordenamiento' => true,
        'hora_ordenamiento' => true,
        'fecha_tesoreria' => true,
        'hora_tesoreria' => true,
        'prima_profesion' => true,
        'prima_hogar' => true,
        'prima_hijos' => true,
        'prima_antiguedad' => true,
        'sso' => true,
        'rpe' => true,
        'faov' => true,
        'fjp' => true,
        'caja_ahorro' => true,
        'acofjam' => true,
        'asociacion_funeraria' => true,
        'depositario_judicial' => true,
        'beca_escolar_inicial' => true,
        'beca_escolar_primaria' => true,
        'beca_escolar_secundaria' => true,
        'beca_escolar_universitaria' => true,
        'beca_escolar_discapacidad' => true,
        'numero_orden_pago' => true,
        'concepto_mod' => true,
        'monto' => true,
        'concepto2' => true,
        'monto2' => true,
        'tipo_porcentaje2' => true,
        'concepto3' => true,
        'monto3' => true,
        'tipo_porcentaje3' => true,
        'concepto4' => true,
        'monto4' => true,
        'tipo_porcentaje4' => true
    ];
}
