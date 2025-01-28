import gapService from "./gap.service.js";

$(document).ready(function () {
    const gap = new gapService();
    gap.getAllData('strenght', 'gapTable');
    gap.getAllData('weakness', 'gapTable');
    gap.getAllData('opportinity', 'gapTable');
    gap.getAllData('threat', 'gapTable');

});
