<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('nickname');
        $this->setPrimaryKey('id');
        $this->addBehavior('Timestamp');

        $this->hasMany('Tweets')
            ->setForeignKey('user_id')
            ->setJoinType('INNER');
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->email('email', false, '正しいメールアドレスを入力してください')
            ->requirePresence('email', 'create')
            ->notEmptyString('email', 'メールアドレスは必須です');

        $validator
            ->scalar('nickname')
            ->maxLength('nickname', 32, 'ニックネームは32文字以内で入力してください')
            ->requirePresence('nickname', 'create')
            ->notEmptyString('nickname', 'ニックネームは必須です');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password', 'パスワードは必須です');

        return $validator;
    }

    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);

        return $rules;
    }
}
