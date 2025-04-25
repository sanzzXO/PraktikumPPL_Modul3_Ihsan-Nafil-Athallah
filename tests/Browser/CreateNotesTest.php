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
            $browser->visit('/')
            ->clickLink('Log in')
            ->assertPathIs('/login')
            ->type(field: 'email', value: 'email@gmail.com')
            ->type (field: 'password', value: 'pass12345')
            ->press(button: 'LOG IN')
            ->assertPathIs('/dashboard')
            ->clicklink('Notes')
            ->assertPathis('/notes')
            ->clicklink('Create Note')
            ->assertpathis('/create-note')
            ->type(field: 'title', value: 'idk')
            ->type(field: 'description', value: 'ts pmo')
            ->press(button: 'CREATE');
        });
    }
}
