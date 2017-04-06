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
        $produto = $produtosTable->newEntity();
        $this->set("produto", $produto);
    }

    public function salva() {
        $produtosTable = TableRegistry::get('Produtos');
        $dado = $this->request->data();
        $produto = $produtosTable->newEntity($dado);
        if ($produtosTable->save($produto)) {
            $msg = "Produto salvo com sucesso!";
            $this->Flash->set($msg, ['element'=>'success']);
        } else {
            $msg = "Erro ao salvar produto!";
            $this->Flash->set($msg, ['element'=>'error']);
        }
        $this->redirect('Produtos/index');
    }

    public function editar($id) {
        $produtosTable = TableRegistry::get('Produtos');
        $produto = $produtosTable->get($id);
        $this->set('produto', $produto);
        $this->render('novo');
    }

    public function apagar($id) {
        $produtosTable = TableRegistry::get('Produtos');
        $produto = $produtosTable->get($id);
        if($produtosTable->delete($produto)){
            $msg = "Produto removido com sucesso!";
        } else {
            $msg = "Não foi possível remover o produto!";
        }
        $this->Flash->set($msg, ['element'=>'error']);
        $this->redirect('produtos/index');
    }

}
