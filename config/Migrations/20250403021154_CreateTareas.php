<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateTareas extends BaseMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/migrations/4/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('tareas');
        $table->addColumn('usuario_id', 'integer')
            ->addColumn('titulo', 'string', [
                'limit' => 255,
                'null' => false
            ])
            ->addColumn('descripcion', 'text', [
                'null' => false
            ])
            ->addColumn('estado', 'enum', [
                'values' => ['pendiente', 'en progreso', 'completado']
            ])
            ->addColumn('created', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP'
            ])
            ->addForeignKey('usuario_id', 'usuarios', 'id',[
                'delete' => 'CASCADE'
            ])
            ->create();
    }
}
