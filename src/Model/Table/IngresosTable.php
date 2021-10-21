<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ingresos Model
 *
 * @method \App\Model\Entity\Ingreso get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ingreso newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ingreso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ingreso|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ingreso saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ingreso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ingreso[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ingreso findOrCreate($search, callable $callback = null, $options = [])
 */
class IngresosTable extends Table
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

        $this->setTable('ingresos');
        $this->setDisplayField('partida');
        $this->setPrimaryKey('partida');
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
            ->scalar('partida')
            ->maxLength('partida', 20)
            ->allowEmptyString('partida', null, 'create');

        $validator
            ->scalar('denominacion')
            ->requirePresence('denominacion', 'create')
            ->notEmptyString('denominacion');

        return $validator;
    }
}
