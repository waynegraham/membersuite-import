<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class ImportsTable extends Table
{
    public function initialize(array $config)
    {
      $this->addBehavior('Timestamp');
    }

   //  public function validationDefault(Validator $validator)
   //  {
      //  $validator
      //      ->notEmpty('title')
      //      ->requirePresence('title')
      //      ->notEmpty('body')
      //      ->requirePresence('body');
       //
      //  return $validator;
   // }
}
