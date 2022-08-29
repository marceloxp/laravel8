<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserTest extends TestCase
{
    /** @test */
    public function check_if_user_has_username_developer()
    {
        // check if user model has Developer username
        $user = \App\Models\User::whereName('Developer')->first();
        $this->assertEquals('Developer', $user->name);
    }
}
