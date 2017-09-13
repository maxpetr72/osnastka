Osnastka.panel.Home = function (config) {
    config = config || {};
    Ext.apply(config, {
        baseCls: 'modx-formpanel',
        layout: 'anchor',
        /*
         stateful: true,
         stateId: 'osnastka-panel-home',
         stateEvents: ['tabchange'],
         getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
         */
        hideMode: 'offsets',
        items: [{
            xtype: 'modx-tabs',
            defaults: {border: false, autoHeight: true},
            border: false,
            hideMode: 'offsets',
            items: [{
                title: _('osnastka_items'),
                layout: 'anchor',
                items: [{
                    html: _('osnastka_intro_msg'),
                    cls: 'panel-desc',
                }, {
                    xtype: 'osnastka-grid-items',
                    cls: 'main-wrapper',
                }]
            }]
        }]
    });
    Osnastka.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(Osnastka.panel.Home, MODx.Panel);
Ext.reg('osnastka-panel-home', Osnastka.panel.Home);
