<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MrrhhBonoEstabilidadEconomicaFixture
 */
class MrrhhBonoEstabilidadEconomicaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'mrrhh_bono_estabilidad_economica';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'cedula' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'dias_no_laborables' => ['type' => 'integer', 'length' => 10, 'default' => '0', 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'horas_extras_diurnas' => ['type' => 'integer', 'length' => 10, 'default' => '0', 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'horas_extras_nocturnas' => ['type' => 'integer', 'length' => 10, 'default' => '0', 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cedula'], 'length' => []],
            'mrrhh_bono_estabilidad_economica_cedula_fkey' => ['type' => 'foreign', 'columns' => ['cedula'], 'references' => ['mrrhh_tipo_personal', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'dias_no_laborables' => 1,
                'horas_extras_diurnas' => 1,
                'horas_extras_nocturnas' => 1
            ],
        ];
        parent::init();
    }
}
