<?php
/**
 * Created by PhpStorm.
 * User: hp-dv4-
 * Date: 2016/9/3 0003
 * Time: 13:13
 */

namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config){
        $this->belongsTo('Roles');
    }

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('username', 'A username is required')
            ->notEmpty('password', 'A password is required')
            ->notEmpty('role', 'A role is required')
           ;
    }
    public function checkUser($username){
        $query=$this->find('list', [
            'keyField' => 'username',
            'valueField' => $username
        ]);
        $count=$query->count();
        if ($count==0)
        {
            return false;
        }
        return true;
    }
}