<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PresupuestoForma2121Fixture
 */
class PresupuestoForma2121Fixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'presupuesto_forma2121';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'ano' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'id_sector' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'id_programa' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'id_sub_programa' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'id_proyecto' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'id_actividad' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'resolucion' => ['type' => 'boolean', 'length' => null, 'default' => 0, 'null' => false, 'comment' => null, 'precision' => null],
        'n_resolucion' => ['type' => 'integer', 'length' => 10, 'default' => '0', 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'presupuesto_forma2121_id_actividad_fkey' => ['type' => 'foreign', 'columns' => ['id_actividad'], 'references' => ['presupuesto_actividad', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'presupuesto_forma2121_id_programa_fkey' => ['type' => 'foreign', 'columns' => ['id_programa'], 'references' => ['presupuesto_programa', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'presupuesto_forma2121_id_proyecto_fkey' => ['type' => 'foreign', 'columns' => ['id_proyecto'], 'references' => ['presupuesto_proyecto', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'presupuesto_forma2121_id_sector_fkey' => ['type' => 'foreign', 'columns' => ['id_sector'], 'references' => ['presupuesto_sector', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'presupuesto_forma2121_id_sub_programa_fkey' => ['type' => 'foreign', 'columns' => ['id_sub_programa'], 'references' => ['presupuesto_sub_programa', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'presupuesto_forma2121_n_resolucion_fkey' => ['type' => 'foreign', 'columns' => ['n_resolucion'], 'references' => ['resoluciones', 'n_resolucion'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'ano' => 1,
                'id_sector' => 1,
                'id_programa' => 1,
                'id_sub_programa' => 1,
                'id_proyecto' => 1,
                'id_actividad' => 1,
                'resolucion' => 1,
                'n_resolucion' => 1
            ],
        ];
        parent::init();
    }
}
