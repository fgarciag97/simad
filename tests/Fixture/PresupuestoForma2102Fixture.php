<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PresupuestoForma2102Fixture
 */
class PresupuestoForma2102Fixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'presupuesto_forma2102';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'ano' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'id_ramo' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'id_sub_ramo' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'id_especifico' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'id_sub_especifico' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'ordinal' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'tipo_ingreso' => ['type' => 'boolean', 'length' => null, 'default' => 0, 'null' => true, 'comment' => null, 'precision' => null],
        'resolucion' => ['type' => 'boolean', 'length' => null, 'default' => 0, 'null' => false, 'comment' => null, 'precision' => null],
        'n_resolucion' => ['type' => 'integer', 'length' => 10, 'default' => '0', 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'presupuesto_forma2102_id_especifico_fkey' => ['type' => 'foreign', 'columns' => ['id_especifico'], 'references' => ['presupuesto_especifico', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'presupuesto_forma2102_id_ramo_fkey' => ['type' => 'foreign', 'columns' => ['id_ramo'], 'references' => ['presupuesto_ramo', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'presupuesto_forma2102_id_sub_especifico_fkey' => ['type' => 'foreign', 'columns' => ['id_sub_especifico'], 'references' => ['presupuesto_sub_especifico', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'presupuesto_forma2102_id_sub_ramo_fkey' => ['type' => 'foreign', 'columns' => ['id_sub_ramo'], 'references' => ['presupuesto_sub_ramo', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'presupuesto_forma2102_n_resolucion_fkey' => ['type' => 'foreign', 'columns' => ['n_resolucion'], 'references' => ['resoluciones', 'n_resolucion'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'id_ramo' => 1,
                'id_sub_ramo' => 1,
                'id_especifico' => 1,
                'id_sub_especifico' => 1,
                'ordinal' => 1,
                'tipo_ingreso' => 1,
                'resolucion' => 1,
                'n_resolucion' => 1
            ],
        ];
        parent::init();
    }
}
