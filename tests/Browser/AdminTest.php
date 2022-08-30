<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminTest extends DuskTestCase
{
    // add private function to mount user
    private function getUserPassword($username)
    {
        $prefix = trim(DB::getTablePrefix(), '_');
        $year   = Carbon::now()->year;
        return sprintf('%s%s%s', $prefix, $year, 'developer');
    }

    // create test to admin login on /Admin and assert redirect to dashboard
    public function testAdminLoginAccess()
    {
        $prefix = trim(DB::getTablePrefix(), '_');
        $year   = Carbon::now()->year;
        $this->browse(function (Browser $browser) use ($prefix, $year) {
            $browser->visit('/admin')
                    ->type('email', 'projetos.developer@host.com')
                    ->type('password', sprintf('%s%s%s', $prefix, $year, 'developer'))
                    ->press('Conectar')
                    ->assertPathIs('/admin/dashboard')
                    ->assertSee('Administração');
        });
    }

    // create test to admin login on /Admin and assert redirect to dashboard
    // then goto /Admin/config and click on button Adicionar
    // then fill form and submit
    // then assert redirect to /Admin/config and see new config
    public function testAdminConfigAdd()
    {
        $prefix = trim(DB::getTablePrefix(), '_');
        $year   = Carbon::now()->year;
        $this->browse(function (Browser $browser) use ($prefix, $year) {
                $browser->visit('/admin')
                ->type('email', 'projetos.developer@host.com')
                ->type('password', $this->getUserPassword('developer'))
                ->press('Conectar')
                ->assertPathIs('/admin/dashboard')
                ->assertSee('Administração')
                ->visit('/admin/config')
                ->clickLink('Adicionar')
                ->type('name', 'test')
                ->type('value', 'test')
                ->press('Salvar')
                ->assertPathIs('/admin/config')
                ->assertSee('test');
        });
    }

    // create test to admin login on /Admin and assert redirect to dashboard
    // then goto /Admin/config and click on button Excluir on "test" register
    // then assert redirect to /Admin/config and see no "test" register
    public function testAdminConfigDelete()
    {
        $prefix = trim(DB::getTablePrefix(), '_');
        $year   = Carbon::now()->year;
        $this->browse(function (Browser $browser) use ($prefix, $year) {
                $browser->visit('/admin')
                ->type('email', 'projetos.developer@host.com')
                ->type('password', $this->getUserPassword('developer'))
                ->press('Conectar')
                ->assertPathIs('/admin/dashboard')
                ->assertSee('Administração')
                ->visit('/admin/config')
                ->clickAtXPath('/html/body/div[1]/div[1]/div[2]/div[1]/div/table/tbody/tr[1]/td[7]/form/button')
                ->waitForDialog(3)
                ->acceptDialog()
                ->assertPathIs('/admin/config');
        });
    }

}
