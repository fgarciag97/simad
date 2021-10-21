<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MrrhhCestaTicketObreros Model
 *
 * @method \App\Model\Entity\MrrhhCestaTicketObrero get($primaryKey, $options = [])
 * @method \App\Model\Entity\MrrhhCestaTicketObrero newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MrrhhCestaTicketObrero[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhCestaTicketObrero|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhCestaTicketObrero saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhCestaTicketObrero patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhCestaTicketObrero[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhCestaTicketObrero findOrCreate($search, callable $callback = null, $options = [])
 */
class MrrhhCestaTicketObrerosTable extends Table
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

        $this->setTable('mrrhh_cesta_ticket_obreros');
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
            ->integer('mes')
            ->requirePresence('mes', 'create')
            ->notEmptyString('mes');

        $validator
            ->integer('id_tipo_personal')
            ->requirePresence('id_tipo_personal', 'create')
            ->notEmptyString('id_tipo_personal');

        $validator
            ->integer('cedula')
            ->requirePresence('cedula', 'create')
            ->notEmptyString('cedula');

        $validator
            ->integer('dias_trabajados')
            ->allowEmptyString('dias_trabajados');

        $validator
            ->integer('dias_faltados')
            ->allowEmptyString('dias_faltados');

        $validator
            ->decimal('monto')
            ->allowEmptyString('monto');

        $validator
            ->boolean('procesado')
            ->allowEmptyString('procesado');

        return $validator;
    }
}
