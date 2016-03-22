//Name: Ken Par
//Student ID: 1084471

function checkForm() {
//fetching values from all input fields and storing them in variables
    var customername = document.getElementById("customername1").value;
    var customernumber = document.getElementById("customernumber1").value;
    var streetnumber = document.getElementById("streetnumber1").value;
    var streetname = document.getElementById("streetname1").value;
    var suburb = document.getElementById("suburb1").value;
    var destinationaddress = document.getElementById("destinationaddress1").value;
    var date = document.getElementById("date1").value;
    var time = document.getElementById("time1").value;

//Check input Fields Should not be blanks.
    if (customername == '' || customernumber == '' || streetnumber == ''
        || streetname == '' || suburb == '' || destinationaddress == ''
        || date == '' || time == '') {
        alert("Fill All Required Fields");
    }

    else {

        //Notifying error fields
        var customername1 = document.getElementById("customername");
        var customernumber1 = document.getElementById("customernumber");
        var streetnumber1 = document.getElementById("streetnumber");
        var streetname1 = document.getElementById("streetname");
        var suburb1 = document.getElementById("suburb");
        var destinationaddress1 = document.getElementById("destinationaddress");
        var date1 = document.getElementById("date");
        var time1 = document.getElementById("time");




        //Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.

        if (customername1.innerHTML == 'must only contain letters' || customernumber1.innerHTML == 'must only contain numbers'
            || streetnumber1.innerHTML == 'invalid address number' || streetname1.innerHTML == 'must only contain letters'
            || suburb1.innerHTML == 'must only contain letters') {

            alert("Please fill valid information");

        }
        else {
            //Submit Form When All values are valid.
            document.getElementById("myForm").submit();
        }
    }
}

//AJAX Code to check  input field values when onblur event triggerd.
function validate(field, query) {
    var xhr;

    if (window.XMLHttpRequest) {// for IE7+, Firefox, Chrome, Opera, Safari
        xhr = new XMLHttpRequest();
    }
    else {// for IE6, IE5
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xhr.onreadystatechange = function () {
        if (xhr.readyState != 4 && xhr.status == 200) {
            document.getElementById(field).innerHTML = "Validating..";
        }
        else if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById(field).innerHTML = xhr.responseText;
        }
        else {
            document.getElementById(field).innerHTML ="";
        }
    }
    xhr.open("GET", "validation.php?field=" + field + "&query=" + query, true);
    xhr.send();
}

