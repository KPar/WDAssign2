<?php
//Name: Ken Par
//Student ID: 1084471

$value = $_GET['query'];
$formfield = $_GET['field'];

//Check Valid or Invalid user name when user enters user name in username input field.
if ($formfield == "customername") {
    if(!preg_match("/^[a-zA-Z\s-]+$/",$value)){
        echo "must only contain letters";
    } else {
        echo "<span>Valid</span>";
    }
}

//Check Valid or Invalid password when user enters password in password input field.
if ($formfield == "customernumber") {
    if (!preg_match("/^[0-9]+$/", $value)) {
        echo "must only contain numbers";
    } else {
        echo "<span>Valid</span>";
    }
}

//Check Valid or Invalid email when user enters email in email input field.
if ($formfield == "streetnumber") {
    if (!preg_match("/^[a-zA-Z0-9]+$/", $value)) {
        echo "invalid address number";
    } else {
        echo "<span>Valid</span>";
    }
}

//Check Valid or Invalid website address when user enters website address in website input field.
if ($formfield == "streetname") {
    if (!preg_match("/^[a-zA-Z\s]+$/", $value)) {
        echo "must only contain letters";
    } else {
        echo "<span>Valid</span>";
    }
}

if ($formfield == "suburb") {
    if (!preg_match("/^[a-zA-Z\s]+$/", $value)) {
        echo "must only contain letters";
    } else {
        echo "<span>Valid</span>";
    }
}
?>