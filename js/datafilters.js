function showCountryData(str) {

    if (str == "") {
        document.getElementById("dataTableView").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("dataTableView").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "db/datatableview.php?c=" + str, true);
        xmlhttp.send();
    }

}



// $(document).ready(function () {
// });