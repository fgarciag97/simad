<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MrrhhHistoricoAmObrerosJubiladosFixture
 */
class MrrhhHistoricoAmObrerosJubiladosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'requisicion' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'ano' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'mes' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'quincena' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'id_tipo_personal' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'cedula' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'ente_adscrito' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'status' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'ano_servicio' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'anos_institucion' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'anos_servicio' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'grado_porcentaje' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'grupo' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'sueldo_base' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'sueldo' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'grado_nivel' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'denominacion_grado_nivel' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'beca_escolar_inicial' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'beca_escolar_primaria' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'beca_escolar_secundaria' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'beca_escolar_universitaria' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'beca_escolar_discapacidad' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'cantidad_beca_inicial' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'cantidad_beca_primaria' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'cantidad_beca_secundaria' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'cantidad_beca_universitaria' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'cantidad_beca_discapacidad' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'prima_hogar' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'caja_ahorro' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'prestamo_caja_ahorro' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'dias_dejados_cancelar' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'funeraria' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'asociacion_funeraria' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'sindicato' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'hijos' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'prima_hijos' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'antiguedad' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'prima_profesion' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'prima_antiguedad' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'deduccion_sso' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'deduccion_rpe' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'deduccion_fpj' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'depositario_judicial' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'depositario_judicial_monto' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'deduccion_caja_ahorro' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'aporte_patronal_asso' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'aporte_patronal_arpe' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'aporte_patronal_afpj' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'aporte_patronal_caja_ahorro' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'x_prima_profesion' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'x_prima_antiguedad' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'x_deduccion_sso' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'x_deduccion_rpe' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'x_deduccion_fpj' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'x_depositario_judicial' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'x_depositario_judicial_monto' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'x_deduccion_caja_ahorro' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'x_aporte_patronal_asso' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'x_aporte_patronal_arpe' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'x_porte_patronal_afpj' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'x_aporte_patronal_caja_ahorro' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'procesado' => ['type' => 'boolean', 'length' => null, 'default' => 0, 'null' => true, 'comment' => null, 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'mrrhh_historico_am_obreros_jubilados_cedula_fkey' => ['type' => 'foreign', 'columns' => ['cedula'], 'references' => ['mrrhh_personal', 'cedula'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'mrrhh_historico_am_obreros_jubilados_id_tipo_personal_fkey' => ['type' => 'foreign', 'columns' => ['id_tipo_personal'], 'references' => ['mrrhh_tipo_personal', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'mrrhh_historico_am_obreros_jubilados_mes_fkey' => ['type' => 'foreign', 'columns' => ['mes'], 'references' => ['mes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'mrrhh_historico_am_obreros_jubilados_quincena_fkey' => ['type' => 'foreign', 'columns' => ['quincena'], 'references' => ['quincena', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'mrrhh_historico_am_obreros_jubilados_requisicion_fkey' => ['type' => 'foreign', 'columns' => ['requisicion'], 'references' => ['mrrhh_requisicion', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'requisicion' => 1,
                'ano' => 1,
                'mes' => 1,
                'quincena' => 1,
                'id_tipo_personal' => 1,
                'cedula' => 1,
                'ente_adscrito' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'status' => 1,
                'ano_servicio' => 1,
                'anos_institucion' => 1,
                'anos_servicio' => 1,
                'grado_porcentaje' => 1.5,
                'grupo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'sueldo_base' => 1.5,
                'sueldo' => 1.5,
                'grado_nivel' => 1,
                'denominacion_grado_nivel' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'beca_escolar_inicial' => 1,
                'beca_escolar_primaria' => 1,
                'beca_escolar_secundaria' => 1,
                'beca_escolar_universitaria' => 1,
                'beca_escolar_discapacidad' => 1,
                'cantidad_beca_inicial' => 1,
                'cantidad_beca_primaria' => 1,
                'cantidad_beca_secundaria' => 1,
                'cantidad_beca_universitaria' => 1,
                'cantidad_beca_discapacidad' => 1,
                'prima_hogar' => 1,
                'caja_ahorro' => 1,
                'prestamo_caja_ahorro' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'dias_dejados_cancelar' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'funeraria' => 1,
                'asociacion_funeraria' => 1,
                'sindicato' => 1,
                'hijos' => 1,
                'prima_hijos' => 1.5,
                'antiguedad' => 1,
                'prima_profesion' => 1.5,
                'prima_antiguedad' => 1.5,
                'deduccion_sso' => 1.5,
                'deduccion_rpe' => 1.5,
                'deduccion_fpj' => 1.5,
                'depositario_judicial' => 1.5,
                'depositario_judicial_monto' => 1.5,
                'deduccion_caja_ahorro' => 1.5,
                'aporte_patronal_asso' => 1.5,
                'aporte_patronal_arpe' => 1.5,
                'aporte_patronal_afpj' => 1.5,
                'aporte_patronal_caja_ahorro' => 1.5,
                'x_prima_profesion' => 1.5,
                'x_prima_antiguedad' => 1.5,
                'x_deduccion_sso' => 1.5,
                'x_deduccion_rpe' => 1.5,
                'x_deduccion_fpj' => 1.5,
                'x_depositario_judicial' => 1.5,
                'x_depositario_judicial_monto' => 1.5,
                'x_deduccion_caja_ahorro' => 1.5,
                'x_aporte_patronal_asso' => 1.5,
                'x_aporte_patronal_arpe' => 1.5,
                'x_porte_patronal_afpj' => 1.5,
                'x_aporte_patronal_caja_ahorro' => 1.5,
                'procesado' => 1
            ],
        ];
        parent::init();
    }
}
