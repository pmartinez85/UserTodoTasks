<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UsertodosTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {

        //la URL todos mostra els todos de l'usuari loguejat->URL protegida

        $user = factory(\App\User::class);
        $task = factory(\App\Task::class);

        $user->addTask($task);
        $this->actingAs($user)
                ->visit('/tasks')
                ->see($task->name);
    }
}
