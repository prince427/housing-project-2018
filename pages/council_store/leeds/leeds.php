<!DOCTYPE html>

<html>
<head>
    <title>Regeneration Research Platform | Pages | Sidebar Left</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="/housing_project_2018/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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
            <h1><a href="/housing_project_2018/index.html">Regeneration Research Platform</a></h1>
            <i class="fa fa-map-o"></i>
        </div>

        <nav id="mainav" class="fl_right">
            <ul class="clear">
                <li class="active"><a href="/housing_project_2018/index.html">Home</a></li>
                <li><a class="drop" href="/housing_project_2018/pages/locations.html">Locations</a>
                    <ul>
                        <li><a href="/housing_project_2018/pages/council_store/barnet/barnet.php">Barnet</a></li>
                        <li><a href="/housing_project_2018/pages/council_store/bristol/bristol.php">Bristol</a></li>
                        <li><a href="/housing_project_2018/pages/council_store/edinburgh/edinburgh.php">Edinburgh</a></li>
                        <li><a href="/housing_project_2018/pages/council_store/glasgow/glasgow.php">Glasgow</a></li>
                        <li><a href="/housing_project_2018/pages/council_store/leeds/leeds.php">Leeds</a></li>
                        <li><a href="/housing_project_2018/pages/council_store/manchester/manchester.php">Manchester</a></li>
                        <li><a href="/housing_project_2018/pages/council_store/salford/salford.php">Salford</a></li>
                        <li><a href="/housing_project_2018/pages/council_store/scarborough/scarborough.php">Scarborough</a></li>
                        <li><a href="/housing_project_2018/pages/council_store/southwark/southwark.php">Southwark</a></li>
                        <li><a href="/housing_project_2018/pages/council_store/york/york.php">York</a></li>
                    </ul>
                </li>
                <li><a class="drop" href="/housing_project_2018/national_data.php">National Data</a>
                    <ul>
                        <li><a href="/housing_project_2018/national_data.php">Regulations</a></li>
                        <li><a href="#">Example</a></li>
                    </ul>
                </li>
                <li><a href="/housing_project_2018/uploader.php">Upload Data</a></li>
                <li><a href="/housing_project_2018/contact_us.html">Contact Us</a></li>
            </ul>
        </nav>

    </header>
</div>

<div class="wrapper bgded overlay" style="background-image:url('/housing_project_2018/images/demo/backgrounds/01.jpg');">
    <div id="breadcrumb" class="hoc clear">

        <ul>
            <li><a href="/housing_project_2018/index.html">Home</a></li>
            <li><a href="/housing_project_2018/pages/council_store/leeds/leeds.php">Leeds</a></li>
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
                    <li><a href="leeds_mainstream.php">Main-Stream Media</a></li>
                    <li><a href="regeneration_stages/all_json.php">All available JSON files</a></li>
                    <li><a href="regeneration_stages/leeds_resident_engagement.php">Pre-Plan Consultation</a></li>
                    <li><a href="regeneration_stages/leeds_design_and_planning.php">Design and Planning</a></li>
                </ul>
            </nav>
            <div class="sdb_holder">
                <h6>Contact Details</h6>
                <address>
                    Leeds City Council<br>
                    Calverley Street<br>
                    Leeds <br>
                    LS1 1UR<br>
                    <br>
                    Tel: 0113 222 4412<br>
                </address>
            </div>

        </div>

        <div class="content three_quarter">

            <h1>Leeds Council Regeneration</h1>
            <p>Leeds is a city in the northern English county of Yorkshire. On the south bank of the River Aire, the Royal Armouries houses the national collection of arms and artillery. Across the river, the redeveloped industrial area around Call Lane is famed for bars and live music venues under converted railway arches. Leeds Kirkgate Market features hundreds of indoor and outdoor stalls.<p>
            <p>Leeds commitment to open data: <a href="https://www.leeds.gov.uk/opendata">Link</a></p>
                <h1>Regeneration Projects<h1>

            <p><a href="https://www.leeds.gov.uk/residents/neighbourhoods-and-community/neighbourhood-regeneration" class="button">Neighbourhood regeneration</a></p>

            <p><a href="https://www.leeds.gov.uk/docs/CD7-2%20Draft%20Regeneration%20Framework%20-August10.pdf" class="button">Regeneration framework</a></p>

            <p><a href="https://www.leeds.gov.uk/docs/Shortlist%20-%20Regeneration%20Schemes.pdf" class="button">Regeneration Schemes</a></p>


            <h1>                      <h1>


                    <em>Only GIF, JPG, and PNG files are allowed.</em>
                    <form action="upload_image.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="myFile"/>
                        <br/>
                        <input type="submit" value="Upload"/>
                    </form>
                    <h1>                      <h1>
                            <em>Only DOC and PDF files are allowed.</em>
                            <form action="upload_document.php" method="post" enctype="multipart/form-data">
                                <input type="file" name="filepdf" />
                                <br/>
                                <input type="submit" value="Upload" name="upload_pdf" />
                            </form>

                            <h3> Uploaded files </h3>


                            <?php

                            $dir_path = "uploads_image";
                            $dir_path_2 = "uploads_documents";

                            if(is_dir($dir_path_2));
                            {
                                $files_2 = scandir($dir_path_2);
                                for ($i = 0; $i < count($files_2); $i++) {
                                    if ($files_2[$i] != '.' && $files_2[$i] !== '..') {
                                        // get file name
                                        echo "<p> File name -> $files_2[$i]</p>";
                                    }
                                }
                            }

                            if(is_dir($dir_path));
                            {

                                $files = scandir($dir_path);

                                for ($i = 0; $i < count($files); $i++) {
                                    if ($files[$i] != '.' && $files[$i] !== '..') {
                                        // get file name
                                        echo "File name -> $files[$i]<br>";

                                        // get file extension
                                        $file = pathinfo($files[$i]);
                                        echo "<img src='$dir_path$files[$i]'<br>";
                                    }
                                }
                            }

                            ?>


        </div>

        <!-- / main body -->
        <div class="clear"></div>

        <h1>                      <h1>
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
            <h6 class="title">News Articles</h6>
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

        <p class="fl_left">Copyright &copy; 2018 <a href="#">Kieran Amrane-Rendall & Nazim Ahmed</a></p>
    </div>
</div>


<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="/housing_project_2018/layout/scripts/jquery.min.js"></script>
<script src="/housing_project_2018/layout/scripts/jquery.backtotop.js"></script>
<script src="/housing_project_2018/layout/scripts/jquery.mobilemenu.js"></script>

<script src="/housing_project_2018/layout/scripts/jquery.placeholder.min.js"></script>

</body>
</html>