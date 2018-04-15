<!DOCTYPE html>

<html>
<head>
<title>Regeneration Research Platform | Pages | Sidebar Left</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../../../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 

    <div class="fl_left">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-sign-in"></i> <a href="#">Login</a></li>
        <li><i class="fa fa-user"></i> <a href="#">Register</a></li>
      </ul>
    </div>
    <div class="fl_right">
      <form class="clear" method="post" action="#">
        <fieldset>
          <legend>Search:</legend>
          <input type="search" value="" placeholder="Search Here&hellip;">
          <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
        </fieldset>
      </form>
    </div>

  </div>
</div>

<div class="wrapper row1">
  <header id="header" class="hoc clear"> 

    <div id="logo" class="fl_left">
      <h1><a href="../../../index.html">Regeneration Research Platform</a></h1>
      <i class="fa fa-map-o"></i>
    </div>

    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="../../../index.html">Home</a></li>
        <li><a class="drop" href="#">Locations</a>
          <ul>

            <li><a href="/housing_project_2018/pages/council_store/southwark/southwark.php">Southwark</a></li>
          </ul>
        </li>
        <li><a href="#">Upload Data</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </nav>

  </header>
</div>

<div class="wrapper bgded overlay" style="background-image:url('../../../images/demo/backgrounds/01.jpg');">
  <div id="breadcrumb" class="hoc clear"> 

    <ul>
      <li><a href="../../../../index.html">Home</a></li>
      <li><a href="#">Southwark</a></li>
    </ul>
  </div>
</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->

    <div class="sidebar one_quarter first"> 

      <h6>Regeneration Stages</h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="#">Main-Stream Media</a></li>
          <p>Pre-Plan Consultation<p>
          <li><a href="regeneration_stages/resident_engagement.php">Resident Engagement</a></li>
          <li><a href="#">Financial Viability</a>
          <li><a href="#">Housing Needs survey</a>
          <p>Design and Planning<p>
          <li><a href="#">Master Planning</a>
          <li><a href="#">Detailed Design and Budget</a>
          <li><a href="#">Financial Viability</a>
          <li><a href="#">Planning Application and Design</a>
          <li><a href="#">Legislation</a>
        </ul>
      </nav>
      <div class="sdb_holder">
        <h6>Contact Details</h6>
        <address>
        Southwark London Borough Council<br>
        2QH<br>
        160 Tooley St<br>
        London <br>
        SE1 2HZ<br>
        <br>
        Tel: 020 7525 5000<br>
        </address>
      </div>

    </div>

    <div class="content three_quarter"> 

      <h1>Southwark London Borough Council Regeneration</h1>
      <p> This page contains media publications based on Southwark and its regeneration<p>
      <h1>Main-Stream Media</h1>

      <h1 style="text-align:center">The Guardian</h1>

      <div id="media">
    <?php
      // URL to the JSON using Rengeneration AND southwark as keywords.
      $json = file_get_contents("https://content.guardianapis.com/search?q=regeneration%20AND%20southwark&from-date=2014-01-01&api-key=2c0e1a7c-7fcc-4a0f-a15e-73ee51d1e665");
      // Stores the decoded data within a variable
      $json_decoded = json_decode($json);
      
      $info = array();
      // Stores the specific objects we require into an array which is result.
      foreach($json_decoded->response->results as $value){
        $info[] = $value;
      }
      // Allows for count
      $i = 0;
      // Loop to continue until if statement is met. 
      foreach($info as $value){
        if($i > 7){
          break;
        }
        else{
          // Prints the title and URL. This can be altered. 
          echo "<h1>" . $value->webTitle . "</h1>";
          echo "<p>Link to PDF is <a href='" . $value->webUrl . "'>here</a>";
          $i++;
        }
      }

      
    ?>
      </div>
    </div>

    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>



<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 

    <div class="one_third first">
      <h6 class="title">Company Name</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890<br>
          +00 (123) 456 7890</li>
        <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title">News Arcticles</h6>
      <ul class="nospace linklist">
        <li><a href="#">Example</a></li>
        <li><a href="#">Example</a></li>
        <li><a href="#">Example</a></li>
        <li><a href="#">Example</a></li>
        <li><a href="#">Example</a></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title">Register for Information in your area</h6>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <input class="btmspace-15" type="text" value="" placeholder="Postcode">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>

  </footer>
</div>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 

    <p class="fl_left">Copyright &copy; 2017 <a href="#">Kieran Amrane-Rendall</a></p>
  </div>
</div>


<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../../layout/scripts/jquery.min.js"></script>
<script src="../../layout/scripts/jquery.backtotop.js"></script>
<script src="../../layout/scripts/jquery.mobilemenu.js"></script>

<script src="../../layout/scripts/jquery.placeholder.min.js"></script>

</body>
</html>