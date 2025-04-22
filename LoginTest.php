<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('ENTERPRISE APPLICATION DEVELOPMENT')
                ->clickLink( 'Log in')
                ->assertPathIs('/login')
                ->type( 'email',  'admin@gmail.com')
                ->type( 'password',  'password')
                ->press( 'LOG IN')
                ->assertSee('/Dashboard');
        });
    }
}
