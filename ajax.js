/**
 * Created by Ken on 7/06/2015.
 * 1084471
 */
//Name: Ken Par
//Student ID: 1084471
var xhr = createRequest();
function getData(dataSource, divID)  {
    if(xhr) {
        var place = document.getElementById(divID);
        xhr.open("GET", "retrieve.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                place.innerHTML = xhr.responseText;
            } // end if
        } // end anonymous call-back function
        xhr.send(null);
    } // end if
} // end function getData()

function submitData(dataSource,divID) {
    if (xhr) {
        var place1= document.getElementById(divID);
        xhr.open("GET", "Store.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                place1.innerHTML = xhr.responseText;
            } // end if
        }
        xhr.send();
    }
}

function assignData () {
    var url = "assign.php";
    var booknum = document.getElementById("assign").value;
    var assigndiv = document.getElementById("assigndiv");
    var variable = "assign=" +assign;

    if (xhr) {
        xhr.open("GET", url, true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.statust == 200) {
                assigndiv.innerHTML = xhr.responseText;
            }
        }
        xhr.send(variable);
    }


}
