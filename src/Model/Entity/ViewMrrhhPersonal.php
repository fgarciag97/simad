<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewMrrhhPersonal Entity
 *
 * @property int|null $cedula
 * @property bool|null $status
 * @property string|null $apellidos
 * @property string|null $nombres
 * @property string|null $genero
 * @property \Cake\I18n\FrozenDate|null $fecha_ingreso_institucion
 * @property \Cake\I18n\FrozenDate|null $fecha_egreso_institucion
 * @property int|null $ano_servicio
 * @property string|null $direccion
 * @property string|null $telefono
 * @property string|null $correo
 * @property string|null $rif
 * @property string|null $grado
 * @property string|null $ente_adscrito
 * @property int|null $hijos
 * @property string|null $estado_civil
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
 */
class ViewMrrhhPersonal extends Entity
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
        'status' => true,
        'apellidos' => true,
        'nombres' => true,
        'genero' => true,
        'fecha_ingreso_institucion' => true,
        'fecha_egreso_institucion' => true,
        'ano_servicio' => true,
        'direccion' => true,
        'telefono' => true,
        'correo' => true,
        'rif' => true,
        'grado' => true,
        'ente_adscrito' => true,
        'hijos' => true,
        'estado_civil' => true,
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
        'sindicato' => true
    ];
}
