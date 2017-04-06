<?php
echo $this->Html->Link('Novo Produto', ['controler' => 'produtos', 'action' => 'novo']);
?>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Produto</th>
            <th>Preço</th>
            <th>Preço com desconto</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($produtos as $produto) { ?> 
            <tr>
                <td><?= $produto['id'] ?></td>
                <td><?= $produto['nome'] ?></td>
                <td><?= $this->Money->format($produto['preco']) ?></td>
                <td><?= $this->Money->format($produto->calculaDesconto()); ?></td>
                <td><?= $produto['descricao'] ?></td>
                <td><?= $this->Html->Link('Editar', ['action' => 'editar', $produto['id']]); ?>
                    <?= $this->Form->PostLink('Apagar', ['action' => 'apagar', $produto['id']], 
                            ['confirm' => 'Deseja realmente apagar o produto ' . $produto['nome'] . '?']);?></td>

            </tr>
        <?php } ?>
    </tbody>

</table>