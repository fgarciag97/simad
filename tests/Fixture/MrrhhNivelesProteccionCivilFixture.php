<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MrrhhNivelesProteccionCivilFixture
 */
class MrrhhNivelesProteccionCivilFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'mrrhh_niveles_proteccion_civil';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'grupo' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'denominacion' => ['type' => 'string', 'length' => 5, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'sueldo_base' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => false, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'mrrhh_niveles_proteccion_civil_grupo_fkey' => ['type' => 'foreign', 'columns' => ['grupo'], 'references' => ['mrrhh_grupos_proteccion_civil', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'grupo' => 1,
                'denominacion' => 'Lor',
                'sueldo_base' => 1.5
            ],
        ];
        parent::init();
    }
}
