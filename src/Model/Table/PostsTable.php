<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class PostsTable extends Table
{
	public function initialize(array $config)
	{
		parent::initialize($config);
		
		$this->table('posts');
		$this->displayField('title');
		$this->primaryKey('id');
		
		$this->addBehavior('Timestamp');
		
                /*
		$this->belongsTo('Authors',[
				'foreignKey' => 'author_id',
				'joinType' => 'INNER'
		]);
		$this->belongsTo('Categories',[
				'foreignKey' => 'category_id',
				'joinType' => 'INNER'
		]);
                */
	}
	
	public function validationDefault(Validator $validator)
	{
		$validator
				->integer('id')
				->allowEmpty('id', 'create');
		$validator
				->notEmpty('title');
                $validator
                                ->integer('period')
                                ->notEmpty('period');
                
                /*
		$validator
				->integer('price')
				->requirePresence('price', 'create')
				->notEmpty('price');
		$validator
				->integer('author_id')
				->requirePresence('author_id', 'create')
				->notEmpty('author_id');
		$validator
			->integer('category_id')
			->requirePresence('category_id','create')
			->notEmpty('category_id');
		
                 * 
                 */
		return $validator;
	}
	
	public function buildRules(RulesChecker $rules)
	{
            
            return $rules;
            /*
		$rules->add($rules->existsIn(
				['author_id'],
				'Authors',
				['message'=>'存在しない値です']));
		
		$rules->add($rules->existsIn(
				['category_id'],
				'Categories',
				['message'=>'存在しない値です']));
		return $rules;
             * 
             */
	}
}
