<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testBasicExamples(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') //untuk visit dashboard
                    ->clickLink('Register') //click link register
                    ->assertPathIs('/register') //memastikan path
                    ->type(field : 'name', value :'ihsan') //mengisi field nama
                    ->type(field: 'email', value: 'email@gmail.com')
                    ->type (field: 'password', value: 'pass12345')
                    ->type(field: 'password_confirmation', value:'pass12345')
                    ->press(button: 'REGISTER')
                    ->assertPathIs('/dashboard');
        });
    }
}
