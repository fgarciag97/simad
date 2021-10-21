<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MrrhhPersonal Entity
 *
 * @property int $cedula
 * @property string $apellidos
 * @property string $nombres
 * @property string|null $photo
 * @property string|null $photo_dir
 * @property \Cake\I18n\FrozenDate $fecha_ingreso_institucion
 * @property \Cake\I18n\FrozenDate|null $fecha_egreso_institucion
 * @property int $ano_servicio
 * @property string|null $direccion
 * @property string|null $telefono
 * @property string|null $rif
 * @property string|null $correo
 * @property bool|null $status
 * @property string|null $genero
 * @property int $grado
 * @property int|null $ente_adscrito
 * @property int|null $hijos
 * @property string|null $estado_civil
 * @property bool|null $beca_escolar_inicial
 * @property bool|null $beca_escolar_primaria
 * @property bool|null $beca_escolar_secundaria
 * @property bool|null $beca_escolar_universitaria
 * @property bool|null $beca_escolar_discapacidad
 * @property bool|null $prima_hogar
 * @property bool|null $caja_ahorro
 * @property float $porcentaje_caja
 * @property bool|null $funeraria
 * @property bool|null $asociacion_funeraria
 * @property bool|null $sindicato
 * @property int|null $cantidad_beca_inicial
 * @property int|null $cantidad_beca_primaria
 * @property int|null $cantidad_beca_secundaria
 * @property int|null $cantidad_beca_universitaria
 * @property int|null $cantidad_beca_discapacidad
 */
class MrrhhPersonal extends Entity
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
        'photo' => true,
        'photo_dir' => true,
        'fecha_ingreso_institucion' => true,
        'fecha_egreso_institucion' => true,
        'ano_servicio' => true,
        'direccion' => true,
        'telefono' => true,
        'rif' => true,
        'correo' => true,
        'status' => true,
        'genero' => true,
        'grado' => true,
        'ente_adscrito' => true,
        'hijos' => true,
        'estado_civil' => true,
        'beca_escolar_inicial' => true,
        'beca_escolar_primaria' => true,
        'beca_escolar_secundaria' => true,
        'beca_escolar_universitaria' => true,
        'beca_escolar_discapacidad' => true,
        'prima_hogar' => true,
        'caja_ahorro' => true,
        'porcentaje_caja' => true,
        'funeraria' => true,
        'asociacion_funeraria' => true,
        'sindicato' => true,
        'cantidad_beca_inicial' => true,
        'cantidad_beca_primaria' => true,
        'cantidad_beca_secundaria' => true,
        'cantidad_beca_universitaria' => true,
        'cantidad_beca_discapacidad' => true
    ];
}
