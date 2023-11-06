<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="header">
   <img src="image/finallogo.png" style="height:100px">
</div>

<div class="topnav">
    <form action="searchcompany.php" method="post">
   <input type="search" placeholder="Search Company.... " name="search">
        <input type="submit" name="submit" value="search">
</form>
    <a href="logout.php" style="float: right">Log Out</a>
    
    <a onclick="document.getElementById('id03').style.display='block'" style="float:right">Edit Your Profile</a>

<div id="id03" class="modal">
  
  <form class="modal-content animate" action="updateuser.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close">&times;</span>
     <h1>Update Your Profile</h1>
    </div>

    <div class="container">
	
        
      <label for="useremail"><b>Username(existing)</b></label>
      <input type="email" placeholder="Enter Username(Email)" name="useremail">
           
             
       <label for="skillset"><b>Skill Set(updated value)</b></label>
      <input type="text" placeholder="Enter Skill Set" name="skillset" required>
    </div>
      
    <div class="container" style="background-color:white">
      <button type="submit"class="cancelbtn">Update</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

    <a href="userprofile.php" style="float: right">View Profile</a>
</div>
<div class="row">
  <div class="leftcolumn">
      <div class="car">
    <div class="card">
     <div class="banneruser" style="background-image: url(image/input-bg-01.jpg)">
    <p style="font-size:35px">User</p>

  </div> 
    </div>
      </div>
  </div>
    </div>
<div class="footer">
  <h2>© Copyright 2018 Intern.Inc</h2>
     <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
</div>

</body>
</html>

