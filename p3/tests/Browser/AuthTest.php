<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Support\Str;

class AuthTest extends DuskTestCase
{
    /**
     * A Dusk test for registering a new user.
     *
     * @return void
     */
    public function testRegistration()
    {
        $this->browse(function (Browser $browser) {
            $rand_email = Str::random(5) . '@hotmail.com';
            $browser->visit('/register')
                    ->assertVisible('@register-heading')
                    ->type('@name-input', 'Random User')
                    ->type('@email-input', $rand_email )
                    ->type('@password-input', 'asdfasdf')
                    ->type('@confirm-password-input', 'asdfasdf')
                    ->click('@register-button')
                    ->assertVisible('@welcome-heading');
        });
    }


}
