<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') // Mengunjungi landing page
            ->clickLink('Log in') // Mengklik link login
            ->assertPathIs('/login') // Memastikan berada di halaman login
            ->type(field: 'email', value: 'email@gmail.com') //Mengisi field email
            ->type (field: 'password', value: 'pass12345') // Mengisi field password
            ->press(button: 'LOG IN') // Menekan tombol login
            ->press('ihsan') // Mengklik nama user
            ->clickLink('Log Out') // Mengklik link Log Out
            ->assertPathIs('/'); // Memastikan berada di halaman landing page
        });
    }
}
