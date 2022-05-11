<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= $this->renderSection('title') ?></title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
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

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

<?= $this->renderSection('styles') ?>
</style>
</head>
<body>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="<?= base_url() ?>/admin/orders" class="active"">Order's</a>
  <a href="<?= base_url() ?>/admin/add_items">add Items</a>
  <a href="<?= base_url() ?>/admin/items">show all items</a>
  <a href="">Order's Deliver</a>
  <a href="">Order's Complete</a>
  <a href="#">Customers</a>
  <a href="<?= base_url('admin/myprofile') ?>">My Profile</a>

  <a href="<?= base_url()?>/admin/logout">Logout</a>
</div>

<div id="main">
  <button class="openbtn" id="openbtn" onclick="openNav()">☰ Open Sidebar</button>  
  <?= $this->renderSection('body') ?>
</div>

<script>
  <?= $this->renderSection('script') ?>
function openNav() {
  document.getElementById("mySidebar").style.visibility = "visible";
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.getElementById("openbtn").style.visibility = "hidden";
  // $('.openbtn').css("visibility", "hidden");
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("mySidebar").style.visibility = "hidden";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("openbtn").style.visibility = "visible";
}
</script>


