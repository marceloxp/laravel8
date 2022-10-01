var umsapp = umsapp || {};
umsapp.Tadmin_common = function ($, objname, options) {
    'use strict';
    var self = this;

    this.create = function () {
        self.events.onCreate();
    };

    this.onReady = function () {
        self.events.onReady();
    };

    this.start = function () {
        self.events.onStarted();
    };

    this.processTriggers = function () {

    };

    this.onElementsEvents = function () {
        self.log.info('onElementsEvents');
        $(document).on
            (
                'click',
                '#screen-mode',
                function (e) {
                    e.preventDefault();
                    self.toogleScreenDarkMode();
                }
            );
    };

    this.execute = function () {
        // AUTO STARTED CODE ON CLASS READY AND STARTED
    };

    this.toogleScreenDarkMode = function () {
        if (!$('body').hasClass('dark-mode')) {
            $('body').addClass('dark-mode');
            setCookie('dark-mode', '1');
        } else {
            $('body').removeClass('dark-mode');
            setCookie('dark-mode', '0');
        }
    };

    CjsBaseClass.call(this, $, objname, options);
};

umsapp.admin_common = new umsapp.Tadmin_common
    (
        window.cjsbaseclass_jquery,
        'admin_common',
        {
            'debug': CJS_DEBUG_MODE_1,
            'highlighted': 'auto',
            'another_opt': 'custom_value'
        }
    );

function setCookie(name, value) {
    var d = new Date();
    d.setTime(d.getTime() + (365 * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
}
