<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AuthTest extends DuskTestCase
{
    /**
     * A Dusk test for registration.
     *
     * @return void
     */
    public function testRegistration()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->assertVisible('@register-heading')
                    ->type('@name-input', 'Khaled Arnaout')
                    ->type('@email-input', 'ka2@live.com')
                    ->type('@password-input', 'asdfasdf')
                    ->type('@confirm-password-input', 'asdfasdf')
                    ->click('@register-button');
                    // ->assertVisible('@welcome-heading');
        });
    }
}
