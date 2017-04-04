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
        $this->set("produtos", $produtos);
    }

    public function novo() {
        $produtosTable = TableRegistry::get('Produtos');
        $produtos = $produtosTable->newEntity();
        $this->set("produtos", $produtos);
    }

    public function salva() {
        $produtosTable = TableRegistry::get('Produtos');
        $dado = $this->request->data();
        $produto = $produtosTable->newEntity($dado);
        if ($produtosTable->save($produto)) {
            $msg = "Produto salvo com sucesso!";
        } else {
            $msg = "Erro ao salvar produto!";
        }
        $this->set('msg', $msg);
    }

}
