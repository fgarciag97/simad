<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PresupuestoProyectoFixture
 */
class PresupuestoProyectoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'presupuesto_proyecto';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'id_sector' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'id_programa' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'id_sub_programa' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'proyecto' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null],
        'denominacion' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'ano' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'resolucion' => ['type' => 'boolean', 'length' => null, 'default' => 0, 'null' => false, 'comment' => null, 'precision' => null],
        'n_resolucion' => ['type' => 'integer', 'length' => 10, 'default' => '0', 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'presupuesto_proyecto_id_programa_fkey' => ['type' => 'foreign', 'columns' => ['id_programa'], 'references' => ['presupuesto_programa', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'presupuesto_proyecto_id_sector_fkey' => ['type' => 'foreign', 'columns' => ['id_sector'], 'references' => ['presupuesto_sector', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'presupuesto_proyecto_id_sub_programa_fkey' => ['type' => 'foreign', 'columns' => ['id_sub_programa'], 'references' => ['presupuesto_sub_programa', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'presupuesto_proyecto_n_resolucion_fkey' => ['type' => 'foreign', 'columns' => ['n_resolucion'], 'references' => ['resoluciones', 'n_resolucion'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'id_sector' => 1,
                'id_programa' => 1,
                'id_sub_programa' => 1,
                'proyecto' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'denominacion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'ano' => 1,
                'resolucion' => 1,
                'n_resolucion' => 1
            ],
        ];
        parent::init();
    }
}
