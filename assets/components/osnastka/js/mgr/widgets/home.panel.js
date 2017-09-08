Osnastka.panel.Home = function (config) {
    config = config || {};
    Ext.apply(config, {
        baseCls: 'modx-formpanel',
        layout: 'anchor',
        /*
         stateful: true,
         stateId: 'Osnastka-panel-home',
         stateEvents: ['tabchange'],
         getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
         */
        hideMode: 'offsets',
        items: [{
            html: '<h2>' + _('Osnastka') + '</h2>',
            cls: '',
            style: {margin: '15px 0'}
        }, {
            xtype: 'modx-tabs',
            defaults: {border: false, autoHeight: true},
            border: true,
            hideMode: 'offsets',
            items: [{
                title: _('Osnastka_items'),
                layout: 'anchor',
                items: [{
                    html: _('Osnastka_intro_msg'),
                    cls: 'panel-desc',
                }, {
                    xtype: 'Osnastka-grid-items',
                    cls: 'main-wrapper',
                }]
            }]
        }]
    });
    Osnastka.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(Osnastka.panel.Home, MODx.Panel);
Ext.reg('Osnastka-panel-home', Osnastka.panel.Home);
