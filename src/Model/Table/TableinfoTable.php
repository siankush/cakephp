<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\Locator\LocatorAwareTrait;
use Cake\ORM\TableRegistry;

/**
 * Tableinfo Model
 *
 * @method \App\Model\Entity\Tableinfo newEmptyEntity()
 * @method \App\Model\Entity\Tableinfo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Tableinfo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tableinfo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tableinfo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Tableinfo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tableinfo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tableinfo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tableinfo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tableinfo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tableinfo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tableinfo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tableinfo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TableinfoTable extends Table
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

        $this->setTable('tableinfo');
        $this->setDisplayField('name');
        $this->setPrimaryKey('Id');
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
            ->allowEmptyString('name');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 200)
            ->allowEmptyString('phone');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 255)
            ->allowEmptyString('gender');

        $validator
            ->scalar('password')
            ->maxLength('password', 10)
            ->requirePresence('password', 'create')
            ->notEmptyString('password', 'please enter password');
        //     ->add('password', [
        //         'lower'=>[
        //         'rule' => array('custom','/[a-z]/'),
        //         'message' => 'please enter lowercase',
        //         ],
        //     'upper'=>[
        //        'rule' => array('custom','/[A-Z]/'),
        //        'message' => 'please enter uppercase',
        //           ],
        //     'number'=>[
        //        'rule' => array('custom','/[0-9]/'),
        //        'message' => 'please enter number',
        //           ],
        //    'character'=>[
        //        'rule' => array('custom','/[#?!@$%^&*-]/'),
        //        'message' => 'please enter special character',
        //          ]
        //     ]);

        return $validator;
    }

    public function login($email, $password)
    {
        $result = $this->find('all')->where(['email' => $email, 'password' => $password])->first();
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

}
