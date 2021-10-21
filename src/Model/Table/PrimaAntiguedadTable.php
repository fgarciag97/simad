<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PrimaAntiguedad Model
 *
 * @method \App\Model\Entity\PrimaAntiguedad get($primaryKey, $options = [])
 * @method \App\Model\Entity\PrimaAntiguedad newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PrimaAntiguedad[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PrimaAntiguedad|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PrimaAntiguedad saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PrimaAntiguedad patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PrimaAntiguedad[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PrimaAntiguedad findOrCreate($search, callable $callback = null, $options = [])
 */
class PrimaAntiguedadTable extends Table
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

        $this->setTable('prima_antiguedad');
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
            ->scalar('cantidad')
            ->requirePresence('cantidad', 'create')
            ->notEmptyString('cantidad');

        $validator
            ->decimal('porcentaje')
            ->requirePresence('porcentaje', 'create')
            ->notEmptyString('porcentaje');

        return $validator;
    }
}
