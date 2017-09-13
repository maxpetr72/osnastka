var Osnastka = function (config) {
    config = config || {};
    Osnastka.superclass.constructor.call(this, config);
};
Ext.extend(Osnastka, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('osnastka', Osnastka);

Osnastka = new Osnastka();