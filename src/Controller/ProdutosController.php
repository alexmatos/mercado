<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

/**
 * Description of ProdutosController
 *
 * @author alex
 */
class ProdutosController extends AppController {
    
    public function index() {
        
        $produtosTable = TableRegistry::get('Produtos');
        $produtos = $produtosTable->find('all');
        
//        $produtos[] = ['id'=>1,'nome'=>'HD externo', 'preco'=>300, 'descricao'=>'HD novo'];
//        $produtos[] = ['id'=>2,'nome'=>'Monitor 22\"', 'preco'=>600, 'descricao'=>'Ótimo monitor'];        
        $this->set("produtos", $produtos);
    }
}
