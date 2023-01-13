<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tabledata Model
 *
 * @method \App\Model\Entity\Tabledata newEmptyEntity()
 * @method \App\Model\Entity\Tabledata newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Tabledata[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tabledata get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tabledata findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Tabledata patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tabledata[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tabledata|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tabledata saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tabledata[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tabledata[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tabledata[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tabledata[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TabledataTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('tabledata');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name','please enter name')
            ->add('name', 'length', [
                'rule' => ['minLength', 3],
                'message' => 'please enter atleast 3 character.'
            ]);
        

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email','please enter email');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 255)
            ->allowEmptyString('phone','please enter phone');

        return $validator;
    }
}
