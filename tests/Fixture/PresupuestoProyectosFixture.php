<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PresupuestoProyectosFixture
 */
class PresupuestoProyectosFixture extends TestFixture
{
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
        'id_proyecto' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'id_partida' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'monto' => ['type' => 'decimal', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'presupuesto_proyectos_id_partida_fkey' => ['type' => 'foreign', 'columns' => ['id_partida'], 'references' => ['presupuesto_ingresos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'presupuesto_proyectos_id_programa_fkey' => ['type' => 'foreign', 'columns' => ['id_programa'], 'references' => ['presupuesto_programa', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'presupuesto_proyectos_id_proyecto_fkey' => ['type' => 'foreign', 'columns' => ['id_proyecto'], 'references' => ['presupuesto_proyecto', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'presupuesto_proyectos_id_sector_fkey' => ['type' => 'foreign', 'columns' => ['id_sector'], 'references' => ['presupuesto_sector', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'id_proyecto' => 1,
                'id_partida' => 1,
                'monto' => 1.5
            ],
        ];
        parent::init();
    }
}
