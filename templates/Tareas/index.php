<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tarea> $tareas
 */
?>
<div class="tareas index content">
    <?= $this->Html->link(__('New Tarea'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tareas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('usuario_id') ?></th>
                    <th><?= $this->Paginator->sort('titulo') ?></th>
                    <th><?= $this->Paginator->sort('estado') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tareas as $tarea): ?>
                <tr>
                    <td><?= $this->Number->format($tarea->id) ?></td>
                    <td><?= $tarea->hasValue('usuario') ? $this->Html->link($tarea->usuario->nombre, ['controller' => 'Usuarios', 'action' => 'view', $tarea->usuario->id]) : '' ?></td>
                    <td><?= h($tarea->titulo) ?></td>
                    <td><?= h($tarea->estado) ?></td>
                    <td><?= h($tarea->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tarea->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tarea->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $tarea->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $tarea->id),
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>