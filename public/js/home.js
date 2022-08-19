var umsns = umsns || {};
umsns.Thome = function($, objname, options)
{
    'use strict';
    var self = this;
 
    this.create = function()
    {
        self.var_name = 'var_value';
        self.events.onCreate();
    };
 
    this.onReady = function()
    {
        self.events.onReady();
    };
 
    this.start = function()
    {
        self.events.onStarted();
    };
 
    this.processTriggers = function()
    {
 
    };
 
    this.onElementsEvents = function()
    {
 
    };
 
    this.execute = function()
    {
        // AUTO STARTED CODE ON CLASS READY AND STARTED
    };
 
    CjsBaseClass.call(this, $, objname, options);
};
 
umsns.home = new umsns.Thome
(
    window.cjsbaseclass_jquery,
    'home',
    {
        'debug'       : CJS_DEBUG_MODE_1,
        'highlighted' : 'auto',
        'another_opt' : 'custom_value'
    }
);
