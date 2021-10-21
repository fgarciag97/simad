<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PresupuestoForma2121PartidasFixture
 */
class PresupuestoForma2121PartidasFixture extends TestFixture
{
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
        'id_sector' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'id_programa' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'id_sub_programa' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'id_proyecto' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'id_actividad' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'ingreso_propio' => ['type' => 'decimal', 'length' => 26, 'default' => '0.00', 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'situado' => ['type' => 'decimal', 'length' => 26, 'default' => '0.00', 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'ingreso_estadal' => ['type' => 'decimal', 'length' => 26, 'default' => '0.00', 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'ingreso_fci' => ['type' => 'decimal', 'length' => 26, 'default' => '0.00', 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'otra_fuente' => ['type' => 'decimal', 'length' => 26, 'default' => '0.00', 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'monto' => ['type' => 'decimal', 'length' => 26, 'default' => '0.00', 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'resolucion' => ['type' => 'boolean', 'length' => null, 'default' => 0, 'null' => false, 'comment' => null, 'precision' => null],
        'n_resolucion' => ['type' => 'integer', 'length' => 10, 'default' => '0', 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'presupuesto_forma2121_partidas_id_actividad_fkey' => ['type' => 'foreign', 'columns' => ['id_actividad'], 'references' => ['presupuesto_actividad', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'presupuesto_forma2121_partidas_id_especifico_fkey' => ['type' => 'foreign', 'columns' => ['id_especifico'], 'references' => ['presupuesto_especifico', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'presupuesto_forma2121_partidas_id_programa_fkey' => ['type' => 'foreign', 'columns' => ['id_programa'], 'references' => ['presupuesto_programa', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'presupuesto_forma2121_partidas_id_proyecto_fkey' => ['type' => 'foreign', 'columns' => ['id_proyecto'], 'references' => ['presupuesto_proyecto', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'presupuesto_forma2121_partidas_id_ramo_fkey' => ['type' => 'foreign', 'columns' => ['id_ramo'], 'references' => ['presupuesto_ramo', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'presupuesto_forma2121_partidas_id_sector_fkey' => ['type' => 'foreign', 'columns' => ['id_sector'], 'references' => ['presupuesto_sector', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'presupuesto_forma2121_partidas_id_sub_especifico_fkey' => ['type' => 'foreign', 'columns' => ['id_sub_especifico'], 'references' => ['presupuesto_sub_especifico', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'presupuesto_forma2121_partidas_id_sub_programa_fkey' => ['type' => 'foreign', 'columns' => ['id_sub_programa'], 'references' => ['presupuesto_sub_programa', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'presupuesto_forma2121_partidas_id_sub_ramo_fkey' => ['type' => 'foreign', 'columns' => ['id_sub_ramo'], 'references' => ['presupuesto_sub_ramo', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'presupuesto_forma2121_partidas_n_resolucion_fkey' => ['type' => 'foreign', 'columns' => ['n_resolucion'], 'references' => ['resoluciones', 'n_resolucion'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'id_sector' => 1,
                'id_programa' => 1,
                'id_sub_programa' => 1,
                'id_proyecto' => 1,
                'id_actividad' => 1,
                'ingreso_propio' => 1.5,
                'situado' => 1.5,
                'ingreso_estadal' => 1.5,
                'ingreso_fci' => 1.5,
                'otra_fuente' => 1.5,
                'monto' => 1.5,
                'resolucion' => 1,
                'n_resolucion' => 1
            ],
        ];
        parent::init();
    }
}
