<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MrrhhNivelesObrerosNoPermanentes Model
 *
 * @method \App\Model\Entity\MrrhhNivelesObrerosNoPermanente get($primaryKey, $options = [])
 * @method \App\Model\Entity\MrrhhNivelesObrerosNoPermanente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MrrhhNivelesObrerosNoPermanente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhNivelesObrerosNoPermanente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhNivelesObrerosNoPermanente saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhNivelesObrerosNoPermanente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhNivelesObrerosNoPermanente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhNivelesObrerosNoPermanente findOrCreate($search, callable $callback = null, $options = [])
 */
class MrrhhNivelesObrerosNoPermanentesTable extends Table
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

        $this->setTable('mrrhh_niveles_obreros_no_permanentes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('grupo')
            ->requirePresence('grupo', 'create')
            ->notEmptyString('grupo');

        $validator
            ->scalar('denominacion')
            ->maxLength('denominacion', 5)
            ->requirePresence('denominacion', 'create')
            ->notEmptyString('denominacion');

        $validator
            ->decimal('sueldo_base')
            ->requirePresence('sueldo_base', 'create')
            ->notEmptyString('sueldo_base');

        return $validator;
    }
}
