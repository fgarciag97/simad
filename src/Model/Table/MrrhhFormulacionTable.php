<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MrrhhFormulacion Model
 *
 * @method \App\Model\Entity\MrrhhFormulacion get($primaryKey, $options = [])
 * @method \App\Model\Entity\MrrhhFormulacion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MrrhhFormulacion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhFormulacion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhFormulacion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhFormulacion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhFormulacion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhFormulacion findOrCreate($search, callable $callback = null, $options = [])
 */
class MrrhhFormulacionTable extends Table
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

        $this->setTable('mrrhh_formulacion');
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
            ->integer('ano')
            ->requirePresence('ano', 'create')
            ->notEmptyString('ano');

        $validator
            ->scalar('tipo')
            ->requirePresence('tipo', 'create')
            ->notEmptyString('tipo');

        $validator
            ->scalar('subtipo')
            ->requirePresence('subtipo', 'create')
            ->notEmptyString('subtipo');

        $validator
            ->integer('ano_real_femenino')
            ->notEmptyString('ano_real_femenino');

        $validator
            ->integer('ano_real_maculino')
            ->notEmptyString('ano_real_maculino');

        $validator
            ->decimal('ano_real_monto')
            ->notEmptyString('ano_real_monto');

        $validator
            ->decimal('ano_real_incidencias')
            ->allowEmptyString('ano_real_incidencias');

        $validator
            ->integer('ultimo_ano_femenino')
            ->allowEmptyString('ultimo_ano_femenino');

        $validator
            ->integer('ultimo_ano_maculino')
            ->allowEmptyString('ultimo_ano_maculino');

        $validator
            ->decimal('ultimo_ano_monto')
            ->allowEmptyString('ultimo_ano_monto');

        $validator
            ->decimal('ultimo_ano_incidencias')
            ->allowEmptyString('ultimo_ano_incidencias');

        $validator
            ->integer('ano_presupuestado_femenino')
            ->allowEmptyString('ano_presupuestado_femenino');

        $validator
            ->integer('ano_presupuestado_maculino')
            ->allowEmptyString('ano_presupuestado_maculino');

        $validator
            ->decimal('ano_presupuestado_monto')
            ->allowEmptyString('ano_presupuestado_monto');

        $validator
            ->decimal('ano_presupuestado_incidencias')
            ->allowEmptyString('ano_presupuestado_incidencias');

        $validator
            ->decimal('ano_real_primas')
            ->allowEmptyString('ano_real_primas');

        $validator
            ->decimal('ultimo_ano_primas')
            ->allowEmptyString('ultimo_ano_primas');

        $validator
            ->decimal('ano_presupuestado_primas')
            ->allowEmptyString('ano_presupuestado_primas');

        $validator
            ->decimal('ano_real_compensaciones')
            ->allowEmptyString('ano_real_compensaciones');

        $validator
            ->decimal('ultimo_ano_compensaciones')
            ->allowEmptyString('ultimo_ano_compensaciones');

        $validator
            ->decimal('ano_presupuestado_compensaciones')
            ->allowEmptyString('ano_presupuestado_compensaciones');

        return $validator;
    }
}
