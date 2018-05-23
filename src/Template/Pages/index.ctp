<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading">Ações</li>
        <li><?= $this->Html->link(__('Nova Pagina'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3>Páginas</h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
               <th>Titulo</th>
               <th>URL</th>
               <th>Ação</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($pages as $page): ?>
            <tr>
                 <td><?= $page->titulo; ?></td>
                 <td><?= $page->url; ?></td>
                 <td></td>   
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
