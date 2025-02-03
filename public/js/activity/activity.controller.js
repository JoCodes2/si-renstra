import activityService from "./activity.service.js";


$(document).ready(function () {
    const activity = new activityService();
    activity.getAllData('partnership', 'activityCompany').then(() =>
        activity.getAllData('internal', 'activityCompany'),
    ).then(() =>
        activity.getAllData('economic-empowerment', 'activityCompany')
    ).catch(error => console.error("Error loading data:", error));

});

