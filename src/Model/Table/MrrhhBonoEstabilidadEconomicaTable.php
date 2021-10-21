<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MrrhhBonoEstabilidadEconomica Model
 *
 * @method \App\Model\Entity\MrrhhBonoEstabilidadEconomica get($primaryKey, $options = [])
 * @method \App\Model\Entity\MrrhhBonoEstabilidadEconomica newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MrrhhBonoEstabilidadEconomica[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhBonoEstabilidadEconomica|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhBonoEstabilidadEconomica saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhBonoEstabilidadEconomica patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhBonoEstabilidadEconomica[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhBonoEstabilidadEconomica findOrCreate($search, callable $callback = null, $options = [])
 */
class MrrhhBonoEstabilidadEconomicaTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('mrrhh_bono_estabilidad_economica');
        $this->setDisplayField('cedula');
        $this->setPrimaryKey('cedula');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('cedula')
            ->allowEmptyString('cedula', null, 'create');

        $validator
            ->integer('dias_no_laborables')
            ->allowEmptyString('dias_no_laborables');

        $validator
            ->integer('horas_extras_diurnas')
            ->allowEmptyString('horas_extras_diurnas');

        $validator
            ->integer('horas_extras_nocturnas')
            ->allowEmptyString('horas_extras_nocturnas');

        return $validator;
    }
}
