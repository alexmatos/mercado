<?php

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * Description of User
 *
 * @author alex.matos
 */
class User extends Entity {

    protected $_acessible = [
        '*' => true,
        'id' => false
    ];

    public function __setPassword($password) {
        return (new DefaultPasswordHasher)->hash($password);
    }

}
