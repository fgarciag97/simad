<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Egresos Model
 *
 * @method \App\Model\Entity\Egreso get($primaryKey, $options = [])
 * @method \App\Model\Entity\Egreso newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Egreso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Egreso|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Egreso saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Egreso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Egreso[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Egreso findOrCreate($search, callable $callback = null, $options = [])
 */
class EgresosTable extends Table
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

        $this->setTable('egresos');
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
