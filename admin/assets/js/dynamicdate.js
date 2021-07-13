function display_c() {
  var refresh = 1000;
  mytime = setTimeout("display_ct()", refresh);
}

function display_ct() {
  var x = new Date();
  document.getElementById("time").innerHTML = x.toLocaleTimeString();
  display_c();
}

var dt = new Date();
document.getElementById("time").innerHTML = dt.toLocaleTimeString();
var dd = dt.getDate();
var mm = dt.getMonth() + 1;
var yyyy = dt.getFullYear();
if (dd < 10) {
  dd = "0" + dd;
}

if (mm < 10) {
  mm = "0" + mm;
}
document.getElementById("date").innerHTML = dd + "/" + mm + "/" + yyyy;

$(document).ready(display_ct);
