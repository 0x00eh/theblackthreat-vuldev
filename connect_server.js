
function response(str) {
  if (str.length == 0) {
    document.getElementById("cmd_injection").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("cmd_injection").innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET", "source-cmd.php?q="+str, true);
    xmlhttp.send();
  }
}
