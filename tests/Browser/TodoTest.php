<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TodoTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('https://lambdatest.github.io/sample-todo-app/')
                    ->assertTitleContains('Sample page - lambdatest.com')
                    ->check("li1")
                    ->check("li3")
                    ->type("#sampletodotext", "Let's add new to do item")
                    ->press('#addbutton');
            sleep(10);
        });

    }
}
