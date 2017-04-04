<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Description of Produto
 *
 * @author alex.matos
 */
class Produto extends Entity {

    public function calculaDesconto() {
        return $this->preco * 0.9;
    }

}
