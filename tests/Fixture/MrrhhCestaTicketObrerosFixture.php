<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MrrhhCestaTicketObrerosFixture
 */
class MrrhhCestaTicketObrerosFixture extends TestFixture
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
        'mes' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'id_tipo_personal' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'cedula' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'dias_trabajados' => ['type' => 'integer', 'length' => 10, 'default' => '30', 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'dias_faltados' => ['type' => 'integer', 'length' => 10, 'default' => '0', 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'monto' => ['type' => 'decimal', 'length' => 26, 'default' => '0.00', 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'procesado' => ['type' => 'boolean', 'length' => null, 'default' => 0, 'null' => true, 'comment' => null, 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'mrrhh_cesta_ticket_obreros_cedula_fkey' => ['type' => 'foreign', 'columns' => ['cedula'], 'references' => ['mrrhh_personal', 'cedula'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'mrrhh_cesta_ticket_obreros_id_tipo_personal_fkey' => ['type' => 'foreign', 'columns' => ['id_tipo_personal'], 'references' => ['mrrhh_tipo_personal', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'mrrhh_cesta_ticket_obreros_mes_fkey' => ['type' => 'foreign', 'columns' => ['mes'], 'references' => ['mes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'mes' => 1,
                'id_tipo_personal' => 1,
                'cedula' => 1,
                'dias_trabajados' => 1,
                'dias_faltados' => 1,
                'monto' => 1.5,
                'procesado' => 1
            ],
        ];
        parent::init();
    }
}
