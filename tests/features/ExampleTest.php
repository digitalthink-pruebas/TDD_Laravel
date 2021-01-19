<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        // Nombre del usuario a dar de alta
        $name = 'Daniel Martinez';
        $email = 'dmpinero@gmail.com';

        $user = factory(\App\User::class)->create(['name' => $name, 'email' => $email]);
        $this->actingAs($user, 'api')
             ->visit('/api/user')
             ->see($name)
             ->see($email);
    }
}
