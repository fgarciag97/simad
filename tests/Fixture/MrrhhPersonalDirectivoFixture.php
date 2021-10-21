<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MrrhhPersonalDirectivoFixture
 */
class MrrhhPersonalDirectivoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'mrrhh_personal_directivo';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'cedula' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'apellidos' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'nombres' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'fecha_ingreso' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'grupo' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'cargo' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'tipo_personal' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'tipo_nomina' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'grado' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'hijos' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'nivel' => ['type' => 'string', 'length' => 2, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'estado_civil' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'caja_ahorro' => ['type' => 'boolean', 'length' => null, 'default' => 0, 'null' => true, 'comment' => null, 'precision' => null],
        'funeraria' => ['type' => 'boolean', 'length' => null, 'default' => 0, 'null' => true, 'comment' => null, 'precision' => null],
        'status' => ['type' => 'boolean', 'length' => null, 'default' => 1, 'null' => true, 'comment' => null, 'precision' => null],
        'photo' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'photo_dir' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cedula'], 'length' => []],
            'mrrhh_personal_directivo_cargo_fkey' => ['type' => 'foreign', 'columns' => ['cargo'], 'references' => ['mrrhh_cargos_directivos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'mrrhh_personal_directivo_grado_fkey' => ['type' => 'foreign', 'columns' => ['grado'], 'references' => ['grado', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'mrrhh_personal_directivo_grupo_fkey' => ['type' => 'foreign', 'columns' => ['grupo'], 'references' => ['mrrhh_grupos_directivos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'mrrhh_personal_directivo_tipo_nomina_fkey' => ['type' => 'foreign', 'columns' => ['tipo_nomina'], 'references' => ['mrrhh_nomina', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'mrrhh_personal_directivo_tipo_personal_fkey' => ['type' => 'foreign', 'columns' => ['tipo_personal'], 'references' => ['mrrhh_tipo_personal', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'apellidos' => 'Lorem ipsum dolor sit amet',
                'nombres' => 'Lorem ipsum dolor sit amet',
                'fecha_ingreso' => '2019-09-21',
                'grupo' => 1,
                'cargo' => 1,
                'tipo_personal' => 1,
                'tipo_nomina' => 1,
                'grado' => 1,
                'hijos' => 1,
                'nivel' => 'Lo',
                'estado_civil' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'caja_ahorro' => 1,
                'funeraria' => 1,
                'status' => 1,
                'photo' => 'Lorem ipsum dolor sit amet',
                'photo_dir' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
