
<script>
   
    var flag = 0;

function toggleNav(){
    if(flag === 0){
        document.getElementById("mySidenav").style.width = "250px";
        flag = 1;
    }else{
        document.getElementById("mySidenav").style.width = "0";
        flag = 0; 
    }
}



</script>

<style>
    .sidenav {
  margin-top: 131px;
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
</style>



<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom: 100px;">
  <!-- Container wrapper -->
  <div class="container-fluid">
    

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <a style="font-size:30px;cursor:pointer" onclick="toggleNav()">
        <i class="fas fa-bars"></i>
        </a>
        
        
        <div id="mySidenav" class="sidenav">

  <a href="#">Home</a>       
  <a href="#">Amici</a>
  
</div>
        
        

        
    </div>
    <!-- Collapsible wrapper -->

  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar --><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/TecWeb2023/resources/views/bottombar.blade.php ENDPATH**/ ?>