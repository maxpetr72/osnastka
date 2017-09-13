Osnastka.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'osnastka-panel-home',
            renderTo: 'osnastka-panel-home-div'
        }]
    });
    Osnastka.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(Osnastka.page.Home, MODx.Component);
Ext.reg('osnastka-page-home', Osnastka.page.Home);