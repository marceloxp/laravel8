<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;

class CarbonServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Returns only date with resets time.
         * Example: Carbon\Carbon::currentDate() => Carbon\Carbon{ date: 2022-09-23 00:00:00.0 America/Sao_Paulo (-03:00) }
         *
         * @return Carbon
         */
        Carbon::macro('getCurrentDate', static function () {
            return self::now()->setTime(0, 0, 0);
        });

        /**
         * Returns current date and time.
         * Example: Carbon\Carbon::currentDateTime() => Carbon\Carbon{ date: 2022-09-23 19:13:43.0 America/Sao_Paulo (-03:00) }
         *
         * @return Carbon
         */
        Carbon::macro('getCurrentDateTime', static function () {
            return self::now();
        });

        /**
         * Returns in BR Date format.
         * Example: Carbon\Carbon::now()->brDate() => "23/09/2022"
         *
         * @return Carbon
         */
        Carbon::macro('getBrDate', static function () {
            return self::this()->format('d/m/Y');
        });

        /**
         * Returns in BR DateTime format.
         * Example: Carbon\Carbon::now()->brDateTime() => "23/09/2022 19:13:43"
         *
         * @return Carbon
         */
        Carbon::macro('getBrDateTime', static function () {
            return self::this()->format('d/m/Y H:i:s');
        });

        /**
         * Returns in BR Date format.
         * Example: Carbon\Carbon::now()->br1() => "23/09/2022"
         *
         * @return Carbon
         */
        Carbon::macro('getBr1', static function () {
            return self::this()->format('d/m/Y');
        });

        /**
         * Returns in BR DateTime format.
         * Example: Carbon\Carbon::now()->br2() => "23/09/2022 19:13:43"
         *
         * @return Carbon
         */
        Carbon::macro('getBr2', static function () {
            return self::this()->format('d/m/Y H:i:s');
        });

        /**
         * Returns in JDate format.
         * Example: Carbon\Carbon::now()->jDate() => "20220923"
         *
         * @return Carbon
         */
        Carbon::macro('getJDate', static function () {
            return self::this()->format('Ymd');
        });

        /**
         * Returns in JDateTime format.
         * Example: Carbon\Carbon::now()->jDateTime() => "20220923191343007096"
         *
         * @return Carbon
         */
        Carbon::macro('getJDateTime', static function () {
            return self::this()->format('YmdHisu');
        });

        /**
         * Returns in SQL format.
         * Example: Carbon\Carbon::now()->sqlDate() => "2022-09-23"
         *
         * @return Carbon
         */
        Carbon::macro('getSqlDate', static function () {
            return self::this()->format('Y-m-d');
        });

        /**
         * Returns in SQL format.
         * Example: Carbon\Carbon::now()->sqlDateTime() => "2022-09-23 19:11:48"
         *
         * @return Carbon
         */
        Carbon::macro('getSqlDateTime', static function () {
            return self::this()->format('Y-m-d H:i:s');
        });
    }
}
