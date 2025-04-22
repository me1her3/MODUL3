<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Enterprise')
                    ->clickLink('Register')
                    ->assertPathIs('/register')
                    ->type('name', 'name')
                    ->type('email', 'admin@gmail.com')
                    ->type('password', 'password')
                    ->press('REGISTER')
                    ->assertPathIs('/dashboard');
        });
    }
}