
<link rel="stylesheet" href="../assets/css/styles/test.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<div class="wrapper">
    <div class="navbar">
       
        <div class="right">
            <ul>
              <li>
                <a href="#">
                <p><?php  echo $_SESSION['nom']; ?><br> </p><img src="../assets/images/Profile.png" alt="Admin" width="40"><i class="fas fa-angle-down"></i>
                </a>
                 
                <div class="dropdown">
                    <ul>
                      <li><a href="profile.php"><br><i class="fas fa-user"></i>Profile</a></li>
                      <li><a href="panier.php"><br><i class="fas fa-shopping-basket"></i> Panier</a></li>
                      <li><a href="signout.php"><i class="fas fa-sign-out-alt"></i>Signout</a></li>
                  </ul>
                </div>
                
              </li>
          </ul>
        </div>
    </div>
</div>	

<script>
	document.querySelector(".right ul li").addEventListener("click", function(){
		  this.classList.toggle("active");
	});
</script>
