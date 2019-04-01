
<?php 
 
require 'C:/wamp64/www/Projet2eme/entites/produit.php';
require 'C:/wamp64/www/Projet2eme/core/produitC.php';
$refe=$_GET['refe'];
$produitC=new produitC();
$result=$produitC->recupererproduit($refe);
foreach($result as $produit) {
          $refe= $produit->refe; 
            $mar=$produit->mar;
            $dest=$produit->dest;
             $prix=$produit->prix;
                $qte=$produit->qte;
				   $url=$produit->url;
				   $nom=$produit->nomCat;
				      $descr=$produit->descr;
          }
function getnames()
{
	$str='';
	$names=getdata();
	foreach($names as $name)
    {
		$str.='<option value="'.$name.'">'.$name.'</option>';
		
	}	
	return $str;
}
function getdata()
{
	$names=array();
    $db= mysqli_connect("localhost","root","","optique");
    $sql="select nom from categorie ";
    $result = mysqli_query($db,$sql);	
	while ($obj=mysqli_fetch_object($result))
	{
		
		$names[]=$obj->nom;
		
	}
	return $names;
}		  
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EyeZone | Produits</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
		 <!-- Required meta tags -->
<script language="javascript" src="js/javafront.js" ></script>
  </head>
  <body>
  
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="index.html" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"> EyeZone</div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!-- Notifications-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red badge-corner">12</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications                                            </strong></a></li>
                  </ul>
                </li>
                <!-- Messages                        -->
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange badge-corner">10</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Jason Doe</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Frank Williams</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ashley Wood</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages   </strong></a></li>
                  </ul>
                </li>
                <!-- Languages dropdown    -->
                <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
                  <ul aria-labelledby="languages" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/DE.png" alt="English" class="mr-2">German</a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/FR.png" alt="English" class="mr-2">French                                         </a></li>
                  </ul>
                </li>
                <!-- Logout    -->
                <li class="nav-item"><a href="login.html" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Wafa Rabeh</h1>
              <p>Manager</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <li><a href="index.html"> <i class="icon-home"></i>Home </a></li>
                   <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Stock </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="produit_v.php">Produit</a></li>
                <li><a href="categorie_v.php">Categorie</a></li>
                
              </ul>
            </li>
	  

            <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Commandes </a></li>
            <li><a href="forms.html"> <i class="icon-padnote"></i>Clients </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Marketing </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
              </ul>
            </li>
            <li><a href="login.html"> <i class="icon-interface-windows"></i>Livraisons </a></li>
            <li><a href="login.html"> <i class="icon-interface-windows"></i>service aprés vente </a></li>
          </ul><span class="heading">Extras</span>
          <ul class="list-unstyled">
            <li> <a href="#"> <i class="icon-flask"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-screen"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-mail"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-picture"></i>Demo </a></li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">&nbsp;</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
    
       
    <div class="card" style="width: 70rem;">
    <div class="card-header">
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark"><a class="navbar-brand" href="#">    Modifier</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      
    </ul>
  </div>
</nav>         
     
</div>
  <div class="card-body">
 <form name="f" method="POST">
  <div class="form-group">
    <label for="formGroupExampleInput">Référence</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="reference" name="inputrefe" value="<?PHP echo $refe ?>" readonly>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Marque</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Marque" name="inputmar" value="<?PHP echo $mar ?>">
  </div>
  
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Destinataire</label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="inputdest" >
    <option selected><?PHP echo $dest ?></option>
    <option value="Homme">Homme</option>
    <option value="Femme">Femme</option>
    <option value="Enfant">Enfant</option>
  </select>
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Prix</label>
  <div class="input-group">
  
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="inputprix" value="<?PHP echo $prix ?>">
  <div class="input-group-append">
    <span class="input-group-text">Dt</span>
    <span class="input-group-text">0.00</span>
  </div>
</div>
<div class="form-group">
    <label for="formGroupExampleInput">Quantité</label>
    <input type="text" class="form-control" id="formGroupExampleeInput" placeholder="Qte" name="inputqte" value="<?PHP echo $qte ?>">
  </div>
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">URL image</label>
  <div class="custom-file">
  <input type="file" class="custom-file-input" id="customFile" name="inputurl" value="<?PHP echo $url ?>">
  <label class="custom-file-label" for="customFile">Choose file</label>
</div>
<p></p>
<div>
<label for="exampleFormControlTextarea1">Categorie</label>
<select name="names" class="custom-select my-1 mr-sm-2">
<?php echo getnames();?>
</select>
</div>
<p></p>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="inputdescr" value="<?PHP echo $descr?>"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="modifier" onClick="verifm()">Modifier</button>
</form>

  </div>
</div>
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>EyeZone</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>&nbsp;</p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>	
	<?php
	if (  isset($_POST['modifier']))
{
 $Refe=$_POST['inputrefe'];
 	$Mar=$_POST['inputmar'];
 	$Dest=$_POST['inputdest'];
  $Prix=$_POST['inputprix'];
  $Qte=$_POST['inputqte'];
 $Url=$_POST['inputurl'];
 $Nom=$_POST['names'];
 $Descr=$_POST['inputdescr'];
    if ($_POST['inputmar']==""  or $_POST['inputprix']=="" or $_POST['inputqte']=="" )
	{
		
				echo "<script type='text/javascript'>";
echo "alert('BTW  no  Empty Fields !');";
echo "</script>";
		
	}
	else if (ctype_alpha($_POST['inputmar'])==true and is_numeric($_POST['inputprix'])==true and is_numeric($_POST['inputqte'])==true){
 
 if ($Url=="" or $Descr=="") {
		echo "<script type='text/javascript'>";
        echo "alert('Check Description and Url');
		window.location.href='../admin/produit_v.php';
   ";
        echo "</script>";
		exit;
	}
  $produit = new produit($Refe , $Mar , $Dest , $Prix , $Qte , $Url, $Nom , $Descr );
$ec= new produitC();
  $ec->modifierproduit($produit,$Refe);
echo "<script type='text/javascript'>";
echo "alert('Modifier avec success!');
window.location.href='../admin/produit_v.php';";
	echo "</script>";
	
	}

else {
	echo "<script type='text/javascript'>";
        echo "alert('Marque Should letters only , Prix and Quantite Should be Numbers');
   ";
        echo "</script>";
}

}
?>
  </body>
</html>