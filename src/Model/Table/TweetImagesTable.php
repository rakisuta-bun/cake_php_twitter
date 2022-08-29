<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TweetImages Model
 *
 * @property \App\Model\Table\TweetsTable&\Cake\ORM\Association\BelongsTo $Tweets
 *
 * @method \App\Model\Entity\TweetImage newEmptyEntity()
 * @method \App\Model\Entity\TweetImage newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TweetImage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TweetImage get($primaryKey, $options = [])
 * @method \App\Model\Entity\TweetImage findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TweetImage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TweetImage[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TweetImage|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TweetImage saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TweetImage[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TweetImage[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TweetImage[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TweetImage[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TweetImagesTable extends Table
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

        $this->setTable('tweet_images');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Tweets', [
            'foreignKey' => 'tweet_id',
            'joinType' => 'INNER',
        ]);
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
            ->integer('tweet_id')
            ->requirePresence('tweet_id', 'create')
            ->notEmptyString('tweet_id');

        $validator
            ->scalar('path')
            ->maxLength('path', 255)
            ->requirePresence('path', 'create')
            ->notEmptyString('path');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('tweet_id', 'Tweets'), ['errorField' => 'tweet_id']);

        return $rules;
    }
}
