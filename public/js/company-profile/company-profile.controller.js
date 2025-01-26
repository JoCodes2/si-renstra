import companyProfileService from "./company-profile.service";

$(document).ready(function () {
    const companyProfile = new companyProfileService()
    companyProfile.getAllDataByCategory("vision")

    console.log("Controller loaded!");


});
