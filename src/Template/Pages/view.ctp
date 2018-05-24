<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading">Ações</li>
        <li><?= $this->Html->link(__('Listar Pagina'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3>Visualizar</h3>
    <?php
        echo $pagina->titulo;
        
    ?>
</div>
