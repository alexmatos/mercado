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
            <th>Descrição</th>
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
                <td><?= $this->Html->('Editar', ['action' => 'editar']); ?></td>
            </tr>
        <?php } ?>
    </tbody>

</table>