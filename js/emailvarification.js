function emailCheck(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("check").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("check").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "emailCheck.php?q="+str, true);
  xhttp.send();   
}
