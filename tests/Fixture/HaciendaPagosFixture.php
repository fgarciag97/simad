<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HaciendaPagosFixture
 */
class HaciendaPagosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idcuenta' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'idplanunico' => ['type' => 'integer', 'length' => 10, 'default' => '1', 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'idctahaber' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'idrecibo' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'idgenera' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'idconccta' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'idcontrib' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'rmoncuenta' => ['type' => 'decimal', 'length' => 18, 'default' => '0.00', 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'rmoncuenta1' => ['type' => 'decimal', 'length' => 18, 'default' => '0.00', 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'ffeccuenta' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'fechapago' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'idpropiedad' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'ntipopropiedad' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'nsergenera' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'ntipcuenta' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'ldebcancelado' => ['type' => 'integer', 'length' => 10, 'default' => '0', 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'cobscuenta' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'npercuenta' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'nanocuenta' => ['type' => 'decimal', 'length' => 4, 'default' => '0', 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'cnomusuario' => ['type' => 'string', 'length' => 10, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'cnomequipo' => ['type' => 'string', 'length' => 10, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'idcaja' => ['type' => 'integer', 'length' => 10, 'default' => '0', 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'idasg' => ['type' => 'integer', 'length' => 10, 'default' => '1', 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'status' => ['type' => 'string', 'length' => 10, 'default' => 'PAGO', 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'tipo_propiedad' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'hacienda_pagos_tipo_propiedad_fkey' => ['type' => 'foreign', 'columns' => ['tipo_propiedad'], 'references' => ['tipo_propiedad', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'idcuenta' => 1,
                'idplanunico' => 1,
                'idctahaber' => 1,
                'idrecibo' => 1,
                'idgenera' => 1,
                'idconccta' => 1,
                'idcontrib' => 1,
                'rmoncuenta' => 1.5,
                'rmoncuenta1' => 1.5,
                'ffeccuenta' => '2020-04-22',
                'fechapago' => '2020-04-22',
                'idpropiedad' => 1,
                'ntipopropiedad' => 1,
                'nsergenera' => 1,
                'ntipcuenta' => 1,
                'ldebcancelado' => 1,
                'cobscuenta' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'npercuenta' => 1,
                'nanocuenta' => 1.5,
                'cnomusuario' => 'Lorem ip',
                'cnomequipo' => 'Lorem ip',
                'idcaja' => 1,
                'idasg' => 1,
                'status' => 'Lorem ip',
                'tipo_propiedad' => 1
            ],
        ];
        parent::init();
    }
}
