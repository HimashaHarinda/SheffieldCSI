<!DOCTYPE html>
<html>
<head>
<style>
body {
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
}

.sidenav {
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
    padding: 2px 2px 2px 32px;
    text-decoration: none;
    font-size: 14px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 12px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="">Control Substance Unit</a>
   <ul class="sidebar-submenu">
      <li class="sidebar-menu-item active">
        <a href="http://localhost/csi/index.php/ControlSubstances/add_ControlSubstances" class="sidebar-menu-button">Control Substances</a>
      </li>
      <li class="sidebar-menu-item">
        <a href="http://localhost/csi/index.php/References/add_references" class="sidebar-menu-button">References</a>
      </li>
       <li class="sidebar-menu-item active">
        <a href="http://localhost/csi/index.php/Shipping/add_shipping" class="sidebar-menu-button">Shipping</a>
      </li>
      <li class="sidebar-menu-item">
        <a href="http://localhost/csi/index.php/Packaging/add_packaging" class="sidebar-menu-button">Packaging</a>
      </li>
      <li class="sidebar-menu-item">
        <a href="http://localhost/csi/index.php/Screening_test/add_screening" class="sidebar-menu-button">Screening Test</a>
      </li>
    </ul>
  <a href="#">Digital Evidence Unit</a>
   <ul class="sidebar-submenu">
      <li class="sidebar-menu-item active">
        <a href="http://localhost/csi/index.php/Evidence/add_evidence" class="sidebar-menu-button">Evidence</a>
      </li>
      <li class="sidebar-menu-item">
        <a href="http://localhost/csi/index.php/Device/add_device" class="sidebar-menu-button">Devices</a>
      </li>
       <li class="sidebar-menu-item active">
        <a href="http://localhost/csi/index.php/Crime/add_crime" class="sidebar-menu-button">Crime</a>
      </li>
      <li class="sidebar-menu-item">
        <a href="http://localhost/csi/index.php/Storage_media/add_sm" class="sidebar-menu-button">Storage Media</a>
      </li>
      <li class="sidebar-menu-item">
        <a href="#" class="sidebar-menu-button">Isolation Method</a>
      </li>
    </ul>

  <a href="#">Forensic Toxicology Unit</a>
   <ul class="sidebar-submenu">
      <li class="sidebar-menu-item active">
        <a href="http://localhost/csi/index.php/fte/add_fte" class="sidebar-menu-button">forensic toxicology</a>
      </li>
      <li class="sidebar-menu-item">
        <a href="#" class="sidebar-menu-button">specimen</a>
      </li>
       <li class="sidebar-menu-item active"> 
        <a href="http://localhost/csi/index.php/analytical_technique/add_analytical_technique" class="sidebar-menu-button">analytical technique</a>
      </li>
       <li class="sidebar-menu-item active">  
        <a href="http://localhost/csi/index.php/laboratory/add_laboratory" class="sidebar-menu-button">Laboratory</a>
      </li>
     
    </ul>
  <a href="#">DNA Analysis Unit</a>
   <ul class="sidebar-submenu">
      <li class="sidebar-menu-item active">
        <a href="http://localhost/csi/index.php/analysis/add_analysis" class="sidebar-menu-button">DNA Analysis</a>
      </li>
      <li class="sidebar-menu-item">
        <a href="http://localhost/csi/index.php/dna_results/add_dna_results" class="sidebar-menu-button">DNA Results</a>
      </li>
       <li class="sidebar-menu-item active">
        <a href="http://localhost/csi/index.php/dna_sample/add_dna_sample" class="sidebar-menu-button">DNA Sample</a>
      </li>
      <li class="sidebar-menu-item">
        <a href="http://localhost/csi/index.php/initial_test/add_initial_test" class="sidebar-menu-button">Initial Test</a>
      </li>
      <li class="sidebar-menu-item">
        <a href="#" class="sidebar-menu-button">Screening</a>
      </li>
    </ul>
</div>

<div id="main">
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Units</span>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
     
</body>
</html> 
