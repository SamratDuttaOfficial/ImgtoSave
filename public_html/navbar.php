       <nav>
        <div class="w3-bar w3-red">
        <div class="container">

  <a href="home.php" class="w3-bar-item w3-button">Home</a>
  <a href="received.php" class="w3-bar-item w3-button w3-hide-small"><i class="icon-user"></i>Received</a>
  <a href="mails.php" class="w3-bar-item w3-button w3-hide-small"><i class="icon-group"></i>Mails</a>
  <a href="logout.php" class="w3-bar-item w3-button w3-hide-small"><i class="icon-signout"></i> Logout</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
             <form class="form-inline" method="post" action="search.php">
             <input type="text" required="required" name="search" class="form-control"  id="span5" placeholder="Search">
            </form>          
</div></div>

<div id="demo" class="w3-bar-block w3-red w3-hide w3-hide-large w3-hide-medium">
<div class="container">
  <a href="received.php" class="w3-bar-item w3-button"><i class="icon-user"></i>Received</a>
  <a href="mails.php" class="w3-bar-item w3-button"><i class="icon-group"></i>Mails</a>
  <a href="logout.php" class="w3-bar-item w3-button"><i class="icon-signout"></i> Logout</a>

</div></div>
</nav>
<script>
function myFunction() {
    var x = document.getElementById("demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>



      

