<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrdenamientoCompraFixture
 */
class OrdenamientoCompraFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'ordenamiento_compra';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'id_requisicion' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'n_factura' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null],
        'n_control' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null],
        'fecha' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'tipo_calculo' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'bs' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'tipo_porcentaje' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'neto' => ['type' => 'decimal', 'length' => 26, 'default' => null, 'null' => false, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'ano' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'observacion' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'fraccion' => ['type' => 'integer', 'length' => 10, 'default' => '1', 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'status1' => ['type' => 'boolean', 'length' => null, 'default' => 0, 'null' => true, 'comment' => null, 'precision' => null],
        'status2' => ['type' => 'boolean', 'length' => null, 'default' => 0, 'null' => true, 'comment' => null, 'precision' => null],
        'status3' => ['type' => 'boolean', 'length' => null, 'default' => 0, 'null' => true, 'comment' => null, 'precision' => null],
        'status4' => ['type' => 'boolean', 'length' => null, 'default' => 0, 'null' => true, 'comment' => null, 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'ordenamiento_compra_id_requisicion_fkey' => ['type' => 'foreign', 'columns' => ['id_requisicion'], 'references' => ['compra_requisicion', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'id_requisicion' => 1,
                'n_factura' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'n_control' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'fecha' => '2020-03-07',
                'tipo_calculo' => 1,
                'bs' => 1.5,
                'tipo_porcentaje' => 1.5,
                'neto' => 1.5,
                'ano' => 1,
                'observacion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'fraccion' => 1,
                'status1' => 1,
                'status2' => 1,
                'status3' => 1,
                'status4' => 1
            ],
        ];
        parent::init();
    }
}
