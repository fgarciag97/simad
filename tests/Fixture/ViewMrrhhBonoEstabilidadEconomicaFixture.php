<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ViewMrrhhBonoEstabilidadEconomicaFixture
 */
class ViewMrrhhBonoEstabilidadEconomicaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'view_mrrhh_bono_estabilidad_economica';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'cedula' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'apellidos' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'nombres' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'dias_no_laborables' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'horas_extras_diurnas' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'horas_extras_nocturnas' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
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
                'apellidos' => 'Lorem ipsum dolor sit amet',
                'nombres' => 'Lorem ipsum dolor sit amet',
                'dias_no_laborables' => 1,
                'horas_extras_diurnas' => 1,
                'horas_extras_nocturnas' => 1
            ],
        ];
        parent::init();
    }
}
