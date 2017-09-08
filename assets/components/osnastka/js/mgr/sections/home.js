Osnastka.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'Osnastka-panel-home',
            renderTo: 'Osnastka-panel-home-div'
        }]
    });
    Osnastka.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(Osnastka.page.Home, MODx.Component);
Ext.reg('Osnastka-page-home', Osnastka.page.Home);