<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')  //Mengunjungi landing page
            ->clickLink('Log in') //Mengklik link login
            ->assertPathIs('/login') //Memastikan berada di halaman login
            ->type(field: 'email', value: 'email@gmail.com') //Mengisi field email
            ->type (field: 'password', value: 'pass12345') //Mengisi field password
            ->press(button: 'LOG IN') //Menekan tombol login
            ->clicklink('Notes') //Mengklik link Notes
            ->assertPathis('/notes') //Memastikan berada di halaman notes
            ->clicklink('Create Note') //Mengklik link Create Note
            ->assertpathis('/create-note') //Memastikan berada di halaman create note
            ->type(field: 'title', value: 'idk') //Mengisi field title
            ->type(field: 'description', value: 'ts pmo') //Mengisi field description
            ->press(button: 'CREATE'); //Menekan tombol create
        });
    }
}
