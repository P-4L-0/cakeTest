<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Usuario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="usuarios view content">
            <h3><?= h($usuario->nombre) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($usuario->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($usuario->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($usuario->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($usuario->created) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Tareas') ?></h4>
                <?php if (!empty($usuario->tareas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Usuario Id') ?></th>
                            <th><?= __('Titulo') ?></th>
                            <th><?= __('Descripcion') ?></th>
                            <th><?= __('Estado') ?></th>
                            <th><?= __('Created') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($usuario->tareas as $tarea) : ?>
                        <tr>
                            <td><?= h($tarea->id) ?></td>
                            <td><?= h($tarea->usuario_id) ?></td>
                            <td><?= h($tarea->titulo) ?></td>
                            <td><?= h($tarea->descripcion) ?></td>
                            <td><?= h($tarea->estado) ?></td>
                            <td><?= h($tarea->created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Tareas', 'action' => 'view', $tarea->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Tareas', 'action' => 'edit', $tarea->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Tareas', 'action' => 'delete', $tarea->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $tarea->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>