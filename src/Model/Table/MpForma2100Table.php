<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MpForma2100 Model
 *
 * @method \App\Model\Entity\MpForma2100 get($primaryKey, $options = [])
 * @method \App\Model\Entity\MpForma2100 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MpForma2100[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2100|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MpForma2100 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MpForma2100 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2100[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2100 findOrCreate($search, callable $callback = null, $options = [])
 */
class MpForma2100Table extends Table
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

        $this->setTable('mp_forma2100');
        $this->setDisplayField('forma');
        $this->setPrimaryKey('forma');
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
            ->integer('forma')
            ->allowEmptyString('forma', null, 'create');

        $validator
            ->integer('ano')
            ->requirePresence('ano', 'create')
            ->notEmptyString('ano');

        $validator
            ->scalar('nombre_alcalde')
            ->maxLength('nombre_alcalde', 50)
            ->allowEmptyString('nombre_alcalde');

        $validator
            ->scalar('director_general')
            ->maxLength('director_general', 50)
            ->allowEmptyString('director_general');

        $validator
            ->scalar('personal_directivo')
            ->allowEmptyString('personal_directivo');

        $validator
            ->scalar('nombres_directivo')
            ->allowEmptyString('nombres_directivo');

        $validator
            ->scalar('correo_directivo')
            ->allowEmptyString('correo_directivo');

        $validator
            ->scalar('telefono_directivo')
            ->allowEmptyString('telefono_directivo');

        $validator
            ->scalar('correo_director_general')
            ->maxLength('correo_director_general', 30)
            ->allowEmptyString('correo_director_general');

        $validator
            ->scalar('correo_consejal')
            ->maxLength('correo_consejal', 30)
            ->allowEmptyString('correo_consejal');

        $validator
            ->scalar('telefono_director_general')
            ->maxLength('telefono_director_general', 20)
            ->allowEmptyString('telefono_director_general');

        $validator
            ->scalar('contralor_municipal')
            ->maxLength('contralor_municipal', 50)
            ->allowEmptyString('contralor_municipal');

        $validator
            ->scalar('domicilio_contralor')
            ->allowEmptyString('domicilio_contralor');

        $validator
            ->scalar('telefono_contralor')
            ->maxLength('telefono_contralor', 20)
            ->allowEmptyString('telefono_contralor');

        $validator
            ->scalar('pagina_web_contralor')
            ->maxLength('pagina_web_contralor', 50)
            ->allowEmptyString('pagina_web_contralor');

        $validator
            ->scalar('fax_contralor')
            ->maxLength('fax_contralor', 20)
            ->allowEmptyString('fax_contralor');

        $validator
            ->scalar('presidente_concejo_municipal')
            ->maxLength('presidente_concejo_municipal', 50)
            ->allowEmptyString('presidente_concejo_municipal');

        $validator
            ->scalar('secretario_concejo_municipal')
            ->maxLength('secretario_concejo_municipal', 50)
            ->allowEmptyString('secretario_concejo_municipal');

        $validator
            ->scalar('domicilio_concejo_municipal')
            ->allowEmptyString('domicilio_concejo_municipal');

        $validator
            ->scalar('telefono_concejo_municipal')
            ->maxLength('telefono_concejo_municipal', 20)
            ->allowEmptyString('telefono_concejo_municipal');

        $validator
            ->scalar('pagina_web_concejo_municipal')
            ->maxLength('pagina_web_concejo_municipal', 50)
            ->allowEmptyString('pagina_web_concejo_municipal');

        $validator
            ->scalar('fax_concejo_municipal')
            ->maxLength('fax_concejo_municipal', 20)
            ->allowEmptyString('fax_concejo_municipal');

        $validator
            ->scalar('concejo_local')
            ->allowEmptyString('concejo_local');

        return $validator;
    }
}
