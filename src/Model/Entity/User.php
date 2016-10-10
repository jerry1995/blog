<?php
/**
 * Created by PhpStorm.
 * User: hp-dv4-
 * Date: 2016/9/1 0001
 * Time: 21:01
 */
// src/Model/Entity/User.php
namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;
class User extends Entity
{
// Make all fields mass assignable except for primary key field "id".
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
// ...
    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }
// ...
}
?>