<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AuthTest extends DuskTestCase
{

    /** @test */
    public function user_can_register()
    {
        $this->browse(function (Browser $browser){
            $browser->visit('/register')
                ->type('username', 'User')
                ->type('email', 'user@user.com')
                ->type('password', 'password')
                ->type('password_confirmation', 'password')
                ->click('button[type="submit"]')
                ->assertSee('You are logged in');
        });
    }


}
