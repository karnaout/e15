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

    /**
     * Test failed registration
     *
     */
    public function testFailedRegistration()
    {
        $this->browse(function (Browser $browser) {
            $browser->logout()
                    ->visit('/register')
                    ->assertVisible('@register-heading')
                    ->click('@register-button')
                    ->assertVisible('ul.alert');
        });
    }

    /**
     * Test login page
     */
    public function testLogin()
    {
        $this->browse(function (Browser $browser) {

            $browser->logout()
                    ->visit('/login')
                    ->assertVisible('@login')
                    ->type('@email-input', 'jill@harvard.edu' )
                    ->type('@password-input', 'asdfasdf')
                    ->click('@login-button')
                    ->assertVisible('@welcome-heading');
        });
    }

    /**
     * Test failed log in
     *
     */
    public function testFailedLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->logout()
                    ->visit('/login')
                    ->assertVisible('@login')
                    ->click('@login-button')
                    ->assertVisible('ul.alert');
        });
    }
}
