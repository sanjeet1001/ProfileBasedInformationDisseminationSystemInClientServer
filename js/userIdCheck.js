function userIdCheck(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("uid").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("uid").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "userIdCheck.php?q="+str, true);
  xhttp.send();   
}