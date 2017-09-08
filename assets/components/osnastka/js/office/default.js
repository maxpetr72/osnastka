Ext.onReady(function () {
    Osnastka.config.connector_url = OfficeConfig.actionUrl;

    var grid = new Osnastka.panel.Home();
    grid.render('office-Osnastka-wrapper');

    var preloader = document.getElementById('office-preloader');
    if (preloader) {
        preloader.parentNode.removeChild(preloader);
    }
});