<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateUsuarios extends BaseMigration
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
        $table = $this->table('usuarios');
        $table->addColumn('nombre', 'string', [
            'limit' => 25,
            'null' => false
        ])
            ->addColumn('email', 'string', [
                'limit' => 100,
                'null' => false
            ])
            ->addColumn('password', 'string', [
                'limit' => 255,
                'null' => false
            ])
            ->addColumn('created', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP'
            ])
            ->create();
    }


}
