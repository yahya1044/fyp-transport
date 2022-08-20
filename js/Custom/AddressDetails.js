$areaLocations = "";
$txtPinCode = null;
$ddlCity = null;
$ddlArea = null;
$ddlState = null;
$ddlDistrict = null;
$txtCountry = null;
$lblMessagePinCode = null;
$hfldAreaId = null;
function SetAddressVariables() {
    $txtPinCode = $("#cphContent_AddressDetails_txtPinCode");
    $ddlCity = $("#cphContent_AddressDetails_ddlCity");
    $ddlArea = $("#cphContent_AddressDetails_ddlArea");
    $ddlState = $("#cphContent_AddressDetails_ddlState");
    $ddlDistrict = $("#cphContent_AddressDetails_ddlDistrict");
    $txtCountry = $("#cphContent_AddressDetails_txtCountry");
    $lblMessagePinCode = $("#cphContent_AddressDetails_lblMessagePinCode");
    $hfldAreaId = $("#cphContent_AddressDetails_hfldAreaId");
    $("#cphContent_AddressDetails_rfvStateBlank").hide();
    $("#cphContent_AddressDetails_rfvDistrictBlank").hide();
    $("#cphContent_AddressDetails_rfvCityBlank").hide();
    $("#cphContent_AddressDetails_rfvAreaBlank").hide();
}
SetAddressVariables();

// Method to call a web method to fetch all area location details by pincode
function ShowAreaLocationsByPinCode() {
    SetAddressVariables();
    if ($txtPinCode.val().length == 6) {
        $.ajax({
            type: "POST",
            url: "../WebMethods.aspx/GetAreaLocationsByPinCode",
            data: '{pinCode: "' + $txtPinCode.val() + '" }',
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: AreaLocationAction,
            failure: function () {
                $lblMessagePinCode.html("Pin Code does not exist.");
                $txtCountry.val("India");
                $ddlState.html("");
                $ddlDistrict.html("");
                $ddlCity.html("");
                $ddlArea.html("");
                $hfldAreaId.val("");
                $ddlState.prop('disabled', true);
                $ddlDistrict.prop('disabled', true);
                $ddlCity.prop('disabled', true);
                $ddlArea.prop('disabled', true);
            }
        });
    }
    else {
        $lblMessagePinCode.html("");
        $txtCountry.val("India");
        $ddlState.html("");
        $ddlDistrict.html("");
        $ddlCity.html("");
        $ddlArea.html("");
        $hfldAreaId.val("");
        $ddlState.prop('disabled', true);
        $ddlDistrict.prop('disabled', true);
        $ddlCity.prop('disabled', true);
        $ddlArea.prop('disabled', true);
    }
}
function AreaLocationAction(response) {
    if (response.d != null && response.d != "" && response.d != "[]") {
        $lblMessagePinCode.html("");
        areaLocations = JSON.parse(response.d);
        $txtCountry.val(areaLocations[0].Country);
        BindStates(areaLocations);
        AutoSelectAreaLocation();
    }
    else {
        $lblMessagePinCode.html("Pin Code does not exist.");
        $txtCountry.val("India");
        $ddlState.html("");
        $ddlDistrict.html("");
        $ddlCity.html("");
        $ddlArea.html("");
        $hfldAreaId.val("");
        $ddlState.prop('disabled', true);
        $ddlDistrict.prop('disabled', true);
        $ddlCity.prop('disabled', true);
        $ddlArea.prop('disabled', true);
    }
}
function BindStates(areaLocations) {
    var States = {};
    $.each(areaLocations, function (i, v) {
        States[v.State] = v.StateId;
    });
    $ddlState.html("");
    $ddlDistrict.html("");
    $ddlCity.html("");
    $ddlArea.html("");
    $ddlState.append($("<option></option>").val('-1').html('Select'));
    $.each(States, function (k, v) {
        $ddlState.append($("<option></option>").val(v).html(k));
    });
    $ddlState.prop('disabled', false).focus();
}
function StateChange() {
    $ddlDistrict.html("");
    $ddlCity.html("");
    $ddlArea.html("");
    var selectedStateId = $ddlState.val();
    if (selectedStateId != -1) {
        $ddlDistrict.prop('disabled', false);
        var Cities = {}
        $.each(areaLocations, function (i, v) {
            if (v.StateId == selectedStateId)
                Cities[v.District] = v.DistrictId;
        });
        $ddlDistrict.append($("<option></option>").val('-1').html('Select'));
        $.each(Cities, function (k, v) {
            $ddlDistrict.append($("<option></option>").val(v).html(k));
        });
        $ddlDistrict.focus();
    }
    else {
        $ddlDistrict.prop('disabled', true);
        $ddlCity.prop('disabled', true);
        $ddlArea.prop('disabled', true);
    }
}
function DistrictChange() {
    $ddlCity.html("");
    $ddlArea.html("");
    var selectedDistrictId = $ddlDistrict.val();
    if (selectedDistrictId != -1) {
        $ddlCity.prop('disabled', false);
        var Cities = {}
        $.each(areaLocations, function (i, v) {
            if (v.DistrictId == selectedDistrictId)
                Cities[v.City] = v.CityId;
        });
        $ddlCity.append($("<option></option>").val('-1').html('Select'));
        $.each(Cities, function (k, v) {
            $ddlCity.append($("<option></option>").val(v).html(k));
        });
        $ddlCity.focus();
    }
    else {
        $ddlCity.prop('disabled', true);
        $ddlArea.prop('disabled', true);
    }
}
function CityChange() {
    $ddlArea.html("");
    var selectedCityId = $ddlCity.val();
    if (selectedCityId != -1) {
        $ddlArea.prop('disabled', false);
        var Areas = {}
        $.each(areaLocations, function (i, v) {
            if (v.CityId == selectedCityId)
                Areas[v.Area] = v.AreaId;
        });
        $ddlArea.append($("<option></option>").val('-1').html('Select'));
        $.each(Areas, function (k, v) {
            $ddlArea.append($("<option></option>").val(v).html(k));
        });
        $ddlArea.focus();
    }
    else $ddlArea.prop('disabled', true);
}
function AutoSelectAreaLocation() {
    if ($hfldAreaId.val() != "") {
        var stateId, ditrictId, cityId;
        $.each(areaLocations, function (i, v) {
            if (v.AreaId == $hfldAreaId.val()) {
                stateId = v.StateId;
                ditrictId = v.DistrictId;
                cityId = v.CityId;
            }
        });
        if (typeof ditrictId != "undefined" && typeof cityId != "undefined") {
            $ddlState.val(stateId);
            StateChange();
            $ddlDistrict.val(ditrictId);
            DistrictChange();
            $ddlCity.val(cityId);
            CityChange();
            $ddlArea.val($hfldAreaId.val());
        }
    }
}
function SetAddressControlsEvents() {
    $ddlState.change(function () {
        StateChange();
    });
    $ddlDistrict.change(function () {
        DistrictChange();
    });
    $ddlCity.change(function () {
        CityChange();
    });
    $ddlArea.change(function () {
        $hfldAreaId.val($ddlArea.val());
    });
}