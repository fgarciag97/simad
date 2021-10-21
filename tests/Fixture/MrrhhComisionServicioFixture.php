<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MrrhhComisionServicioFixture
 */
class MrrhhComisionServicioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'mrrhh_comision_servicio';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'cedula' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'tipo_nomina' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'tipo_personal' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'nivel' => ['type' => 'integer', 'length' => 10, 'default' => '1', 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'grado_nivel' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'cargo' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'banco' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null],
        'numero_cuenta' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null],
        'prestamo_caja_ahorro' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'dias_dejados_cancelar' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'depositario_judicial' => ['type' => 'decimal', 'length' => 26, 'default' => '0.00', 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'depositario_judicial_monto' => ['type' => 'decimal', 'length' => 26, 'default' => '0.00', 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'sueldo' => ['type' => 'decimal', 'length' => 26, 'default' => '0', 'null' => false, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cedula'], 'length' => []],
            'mrrhh_comision_servicio_cargo_fkey' => ['type' => 'foreign', 'columns' => ['cargo'], 'references' => ['mrrhh_cargos_directivos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'mrrhh_comision_servicio_cedula_fkey' => ['type' => 'foreign', 'columns' => ['cedula'], 'references' => ['mrrhh_personal', 'cedula'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'mrrhh_comision_servicio_nivel_fkey' => ['type' => 'foreign', 'columns' => ['nivel'], 'references' => ['mrrhh_niveles_directivos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'mrrhh_comision_servicio_tipo_nomina_fkey' => ['type' => 'foreign', 'columns' => ['tipo_nomina'], 'references' => ['mrrhh_tipo_nomina', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'mrrhh_comision_servicio_tipo_personal_fkey' => ['type' => 'foreign', 'columns' => ['tipo_personal'], 'references' => ['mrrhh_tipo_personal', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'cedula' => 1,
                'tipo_nomina' => 1,
                'tipo_personal' => 1,
                'nivel' => 1,
                'grado_nivel' => 1,
                'cargo' => 1,
                'banco' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'numero_cuenta' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'prestamo_caja_ahorro' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'dias_dejados_cancelar' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'depositario_judicial' => 1.5,
                'depositario_judicial_monto' => 1.5,
                'sueldo' => 1.5
            ],
        ];
        parent::init();
    }
}
