//***************************************************************//
//***************************************************************//
function checkOption() {
    if (document.getElementById('hasOption').checked) {
        return true;
      } else {
        alert('Vous devez accepter les conditions générales');
        return false;
      }
    }
//***************************************************************//
//***************************************************************//
function validateduration(obj) {
    var duration = $(obj).attr("duration");
    var result =  isNaN(parseInt(obj.val()));
    if ( obj.val() <= 0 || obj.val() > 15 || result === true) {
        $(obj).css("border", "#FF0000 1px solid");
        $("." + duration + "-validation").html("Required");
        alert('La durée doit etre superieur a 0 et inférieur à 15 ans ');
        return false;
    }

    $("." + duration + "-validation").html("");
    $(obj).css("border", "");
     return true;
  }
//***************************************************************//
function validateText(obj) {
    var text = $(obj).attr("text");
    //check si ce n'est pas un entier et bien une chaine de caractere
    //regex pour verifier si le texte contient des chiffres
    var regex = /[a-zA-Z]/g;
    //test si le texte contient des chiffres
    result = regex.test($(obj).val());
    if ( result === false) {
        $(obj).css("border", "#FF0000 1px solid");
        $("." + text + "-validation").html("Required");
        alert('Le champs ne doit pas contenir de chiffre ');
        return false;
    }
    $("." + text + "-validation").html("");
    $(obj).css("border", "");

    return true;
}
//***************************************************************//
function validateInteger(obj) {
    var amount = $(obj).attr("amount");
    var result =  isNaN(parseInt(obj.val()));
    if ( obj.val() < 0 || obj.val() > 75000 || result === true) {
        $(obj).css("border", "#FF0000 1px solid");
        $("." + amount + "-validation").html("Required");
        alert('Le montant doit etre superieur a 0 et inférieur à 75000 € ');
        return false;
    }

    $("." + amount + "-validation").html("");
    $(obj).css("border", "");
     return true;
  }
//***************************************************************//
function checkSelect(obj) {
    var select = $(obj).attr("selectListe");
    $("." + select + "-validation").html("");
    $(obj).css("border", "");
    if ($(obj).val() == "") {
        $(obj).css("border", "#FF0000 1px solid");
        $("." + select + "-validation").html("Required");
        return false;
    }
    return true;
}
//***************************************************************//
//check address regex 
function validateAddress(obj) {
    var address = $(obj).attr("address");
    $("." + address + "-validation").html("");
    $(obj).css("border", "");
    var result = checkEmpty(obj);
    if (!result) {
        $(obj).css("border", "#FF0000 1px solid");
        $("." + address + "-validation").html("Required");
        return false;
    }
    var address_regex = /^[a-zA-Z0-9\s,'-]*$/;
    result = address_regex.test($(obj).val());
    if (!result) {
        $(obj).css("border", "#FF0000 1px solid");
        $("." + address + "-validation").html("Invalid");
        return false;
    }
    return result;
}
//***************************************************************//
//***************************************************************//
function checkEmpty(obj) {
    var amount = $(obj).attr("amount");
    var duration = $(obj).attr("duration");

    $("." + amount + "-validation").html("");
    $("." + duration + "-validation").html("");
    $(obj).css("border", "");
    if ($(obj).val() == "") {
        $(obj).css("border", "#FF0000 1px solid");
        $("." + amount + "-validation").html("Required");
        $("." + duration + "-validation").html("Required");
        return false;
    }
    return true;
}
//***************************************************************//
//***************************************************************//
//validate input phone
function validatePhone(obj) {
    var phone = $(obj).attr("phone");
    $("." + phone + "-validation").html("");
    $(obj).css("border", "");
    var result = checkEmpty(obj);
    if (!result) {
        $(obj).css("border", "#FF0000 1px solid");
        $("." + phone + "-validation").html("Required");
        return false;
    }
    var phone_regex = /^0[1-9]([-. ]?[0-9]{2}){4}$/;
    result = phone_regex.test($(obj).val());
    if (!result) {
        $(obj).css("border", "#FF0000 1px solid");
        $("." + phone + "-validation").html("Invalid");
        return false;
    }
    return result;
}
//***************************************************************//
//***************************************************************//
//validate zip code
function validateZip(obj) {
    var zip = $(obj).attr("zip");
    $("." + zip + "-validation").html("");
    $(obj).css("border", "");
    var result = checkEmpty(obj);
    if (!result) {
        $(obj).css("border", "#FF0000 1px solid");
        $("." + zip + "-validation").html("Required");
        return false;
    }
    var zip_regex = /^[0-9]{5}$/;
    result = zip_regex.test($(obj).val());
    if (!result) {
        $(obj).css("border", "#FF0000 1px solid");
        $("." + zip + "-validation").html("Invalid");
        return false;
    }
    return result;
}
//***************************************************************//
//***************************************************************//
//validate Input Number
function validateNumber(obj) {
    var number = $(obj).attr("number");
    $("." + number + "-validation").html("");
    $(obj).css("border", "");
    var result = checkEmpty(obj);
    if (!result) {
        $(obj).css("border", "#FF0000 1px solid");
        $("." + number + "-validation").html("Required");
        return false;
    }
    var number_regex = /^[0-9]{1,2}$/;
    result = number_regex.test($(obj).val());
    if (!result) {
        $(obj).css("border", "#FF0000 1px solid");
        $("." + number + "-validation").html("Invalid");
        return false;
    }
    return result;
}
//***************************************************************//
//***************************************************************//
//validate Input Date
function validateDate(obj) {
    var date = $(obj).attr("date");
    $("." + date + "-validation").html("");
    $(obj).css("border", "");
    var result = checkEmpty(obj);
    if (!result) {
        $(obj).css("border", "#FF0000 1px solid");
        $("." + date + "-validation").html("Required");
        return false;
    }
    var date_regex = /^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/;
    result = date_regex.test($(obj).val());
    if (!result) {
        $(obj).css("border", "#FF0000 1px solid");
        $("." + date + "-validation").html("Invalid");
        return false;
    }
    return result;
}
//***************************************************************//
function checkEmail(obj) {
    var result = true;
    var name = $(obj).attr("name");
    $("." + name + "-validation").html("");
    $(obj).css("border", "");
    result = checkEmpty(obj);
    if (!result) {
        $(obj).css("border", "#FF0000 1px solid");
        $("." + name + "-validation").html("Required");
        return false;
    }
    var email_regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,3})+$/;
    result = email_regex.test($(obj).val());

    if (!result) {
        $(obj).css("border", "#FF0000 1px solid");
        $("." + name + "-validation").html("Invalid");
        return false;
    }
    return result;
}
//***************************************************************//
function validate(step) {
    let check;
    if($("#maritalStatus").val() === "maried"  || $("#maritalStatus").val() === "civilPartnership" ){
        if (step === '1-content') {
            check = checkSelect($("#carType"));
            check = check && checkSelect($("#carBrand"));
            check = check && checkSelect($("#carModel"));
            return check;
        } else if (step === '2-content') {
            check = checkSelect($("#worksType"));
            return check;
        } else if (step === '3-content') {
            check = checkSelect($("#projectType"));
            return check;
        } else if (step === '4-content') {
            check = checkEmpty($("#amount"));
            check = check && validateInteger($('#amount'));
            check = check && validateduration($('#duration'));
            check = check && checkEmpty($("#duration"));
            check = check && checkSelect($("#fundsDelay"));
            check = check && checkSelect($("#level"));
            check = check && checkSelect($("#assurance"));
            return check;
        } else if (step === '5-content') {
            check = checkSelect($("#maritalStatus"));
            return check;
        } else if (step === '6-content') {
            check = checkEmpty($("#incomeBeforeTax"));
            check = check && validateInteger($('#incomeBeforeTax'));
            check = check && checkEmpty($("#incomeBeforeTaxCo"));
            check = check && validateInteger($('#incomeBeforeTaxCo'));
            return check;
        } else if (step === '7-content') {
            check = checkEmpty($("#rentalIncome"));
            check = check && validateInteger($('#rentalIncome'));
            check = check && checkEmpty($("#otherHouseholdIncome"));
            check = check && validateInteger($('#otherHouseholdIncome'));
            check = check && checkEmpty($("#benefitAmount"));
            check = check && validateInteger($('#benefitAmount'));
            return check;
        } else if (step === '8-content') {
            check =  checkEmpty($("#totalMensualitesCreditConso"));
            check = check && validateInteger($('#benefitAmount'));
            check = check && checkEmpty($("#totalImmoCreditConso"));
            check = check && validateInteger($('#benefitAmount'));
            check = check && checkEmpty($("#rent"));
            check = check && validateInteger($('#benefitAmount'));
            return check;
        } else if (step === '9-content') {
            check = checkSelect($("#professionalSector"));
            check = check && checkSelect($("#professionalType"));
            check = check && checkSelect($("#professionalContractType"));
            check = check && checkEmpty($("#profession"));
            check = check && validateText($('#profession'));

            return check;
        } else if (step === '10-content') {
            check = checkSelect($("#professionalSectorCo"));
            check = check && checkSelect($("#professionalTypeCo"));
            check = check && checkSelect($("#professionalContractTypeCo"));
            check = check && checkEmpty($("#professionCo"));
            check = check && validateText($('#profession'));
            return check;
        } else if (step === '11-content') {
            check = checkSelect($("#estateStatus"));
            return check;
        } else if (step === '12-content') {
            check = checkSelect($("#bankType"));
            check = check && checkSelect($("#bankCardType"));
            return check;
        } else if (step === '13-content') {
            check = checkSelect($("#civilityGender"));
            check = check && checkEmpty($("#civilityLastname"));
            check = check && validateText($('#civilityLastname'));
            check = check && checkEmpty($("#civilityFirstname"));
            check = check && validateText($('#civilityFirstname'));
            check = check && checkSelect($("#civilityNationality"));
            check = check && checkEmpty($("#civilityCity"));
            check = check && validateText($('#civilityCity'));
            check = check && checkSelect($("#civilityNationality"));
            return check;
        }else if (step === '14-content') {
            check = checkSelect($("#civilityGenderCo"));
            check = check && checkEmpty($("#civilityLastnameCo"));
            check = check && validateText($('#civilityLastnameCo'));
            check = check && checkEmpty($("#civilityFirstnameCo"));
            check = check && validateText($('#civilityFirstnameCo'));
            check = check && checkSelect($("#civilityNationalityCo"));
            check = check && checkEmpty($("#civilityCityCo"));
            check = check && validateText($('#civilityCityCo'));
            return check;
        }
    }else{
        if (step === '1-content') {
            check = checkSelect($("#carType"));
            check = check && checkSelect($("#carState"));
            check = check && checkSelect($("#carBrand"));
            return check;
        } else if (step === '2-content') {
            check = checkSelect($("#worksType"));
            return check;
        } else if (step === '3-content') {
            check = checkSelect($("#projectType"));
            return check;
        } else if (step === '4-content') {
            check = checkEmpty($("#amount"));
            check = check && validateInteger($('#amount'));
            check = check && validateduration($('#duration'));
            check = check && checkEmpty($("#duration"));
            check = check && checkSelect($("#fundsDelay"));
            check = check && checkSelect($("#level"));
            check = check && checkSelect($("#assurance"));
            return check;
        } else if (step === '5-content') {
            check = checkSelect($("#maritalStatus"));
            return check;
        } else if (step === '6-content') {
            check = checkEmpty($("#incomeBeforeTax"));
            check = check && validateInteger($('#incomeBeforeTax'));
            return check;
        } else if (step === '7-content') {
            check = checkEmpty($("#rentalIncome"));
            check = check && validateInteger($('#rentalIncome'));
            check = check && checkEmpty($("#otherHouseholdIncome"));
            check = check && validateInteger($('#otherHouseholdIncome'));
            check = check && checkEmpty($("#benefitAmount"));
            check = check && validateInteger($('#benefitAmount'));
            return check;
        } else if (step === '8-content') {
            check =  checkEmpty($("#totalMensualitesCreditConso"));
            check = check && validateInteger($('#totalMensualitesCreditConso'));
            check = check && checkEmpty($("#totalImmoCreditConso"));
            check = check && validateInteger($('#totalImmoCreditConso'));
            check = check && checkEmpty($("#rent"));
            check = check && validateInteger($('#rent'));
            return check;
        } else if (step === '9-content') {
            check = checkSelect($("#professionalSector"));
            check = check && checkSelect($("#professionalType"));
            check = check && checkSelect($("#professionalContractType"));
            check = check && checkEmpty($("#profession"));
            check = check && validateText($('#profession'));
            return check;
        } else if (step === '11-content') {
            check = checkSelect($("#estateStatus"));
            return check;
        } else if (step === '12-content') {
            check = checkSelect($("#bankType"));
            check = check && checkSelect($("#bankCardType"));
            return check;
        } else if (step === '13-content') {
            check = checkSelect($("#civilityGender"));
            check = check && checkEmpty($("#civilityLastname"));
            check = check && validateText($('#civilityLastname'));
            check = check && checkEmpty($("#civilityFirstname"));
            check = check && validateText($('#civilityFirstname'));
            check = check && checkSelect($("#civilityNationality"));
            check = check && checkEmpty($("#civilityCity"));
            check = check && validateText($('#civilityCity'));
            check = check && checkSelect($("#civilityNationality"));
            return check;
        }
    }
     if (step === '15-content') {
        check = validateAddress($("#address"));
        check = check && checkEmpty($("#phone1"));
        check = check && validatePhone($('#phone1'));
        check = check && checkEmpty($("#email"));
        check = check && checkEmail($("#email"));
        check = check && checkEmpty($("#zipCodeInput"));
        check = check && validateZip($('#zipCodeInput'));
        check = check && checkEmpty($("#cityInput"));
        check = check && checkOption($("#hasOption"));
        return check;
     }
    return true;
}