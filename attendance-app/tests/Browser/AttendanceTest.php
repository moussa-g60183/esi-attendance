<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AttendanceTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSelected('#course', '')
                ->select('#course', 'id')
                ->pause(1000)
                ->assertSee('Matricule')
                ->assertSee('Prénom')
                ->assertSee('Nom');
        });
    }
}
