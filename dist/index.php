<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
	<meta name="author" content="" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>MoM Development Navigator</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="https://cdn.freebiesupply.com/logos/large/2x/mercer-bears-logo-png-transparent.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
	<link href="css/styles.css" rel="stylesheet" />
	<style>
	table,th,td {
	  border: 2px solid brown;
	  padding: 5px;
	}
	th {
	  text-align: center;
	}
	</style>
    </head>

<?php
$servername = "localhost";
$username = "root";
$password = "qVP2nWjiLHuLJd";
$dbname = "ist351";

//create connection
$con = new mysqli($servername, $username, $password, $dbname);

//check connnection
if ($con ->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$namechange = "SET NAMES 'utf8mb4'";
$con->query($namechange);

if(isset($_POST["name"]))
{
$name = $_POST["name"];
$lat = $_POST["lat"];
$lng = $_POST["lng"];
$comment = htmlentities($_POST["comment"]);
$professor = htmlentities($_POST["professor"]);
$link = $_POST["link"];
$sql = "INSERT INTO MapMarkers (Name, Lat, Lng, Comment, Professor, Link)
		VALUES ('$name', '$lat', '$lng', '$comment', '$professor', '$link')";

if ($con->query($sql) === TRUE) {
		echo "New record created successfully";
}
}


$query = "SELECT * FROM MapMarkers";
$result = $con->query($query);
?>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top"  id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Mercer on Mission Navigator</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
		    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a></li>
			<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#steps">Steps</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#map">Map/Programs</a></li>
			<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead text-white text-center" style="background-color:#f48500">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5 bg-secondary" style="width:35%;border-radius:30px" src="https://cdn.freebiesupply.com/logos/large/2x/mercer-bears-logo-png-transparent.png" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Mercer on Mission Navigator</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Programs - Interactive Map - Contact Page</p>
            </div>
	</header>
        <!-- About Section-->
        <section class="page-section text-secondary mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary">About</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
		    <div style="text-align:justify;text-indent:50px"><p class="lead">International Development is a broad concept. It gives the idea that different countries around the world are at different "levels" of development, and that over time these countries will progress with the assistance of other countries who are more developed. Some people think of international development as being related strictly to economic success, but more recently development objectives have been focused on meeting the "basic needs of people, such as, primary education, healthcare, clean water, nutrition and food,and housing" (Fukada-Parr, 126). However, we cannot separate the importance of economic success in international development. Fukada-Parr claims that, "although welfare improvement is the ultimate goal, it is assumed that economic growth is not only a necessary but a sufficient condition to achieve this objective" (Fukada-Parr, 124). Most "international development" work is focused on bettering the human development level of countries whose citizens primarily live in poverty, but the human development aspect cannot be separated from the economic success of the country.</p></div>
		    <div style="text-align:justify;text-indent:50px"><p class="lead">It is also important to note that international development can take more forms than just that of resource management and infrastructure development. The FAIMER Institute is "based in the United States, with an international distribution of Fellows” whose goal is to provide education to healthcare providers in less developed countries (Burdick, 39). With Fellows residing in India, South Africa and Brazil, it was noted that "one-third to two-thirds of respondents noted improved teaching quality", showing that the education of those who teach in less developed countries is fundamentally important to the development of the country and cannot be disregarded in the field of international development (Burdick, 38).</p></div>
		    <div style="text-align:justify;text-indent:50px"><p class="lead">Another important aspect that must be taken into account is the context in which the project is being implemented. Ginsberg points out that there are two fundamental problems in many models of projects, those being "that complex project considerations are inaccessibly presented and second, that the non-government organization (NGO) undertaking the project is itself a critical factor in assessing the local project context" (Ginsberg, 432). This illustrates how important it is for those participating in development projects to fully udnerstand the context that they and the project are in, and that they ensure they are as knowledgeable as possible about the country and the project they are participating in. A lack of understanding may have been what caused "development assistance" to be "pronounced dead many times by analysts" (Esteves, 2). In the world of development, being aware of all of the variables in your project is more important than ever.</p></div>
		    <div style="text-align:justify;text-indent:50px"><p class="lead">The International Development Navigator: MoM is a website designed to showcase different additions that could streamline the Mercer on Mission website and ensure that visitors can access the information as easily and as intuitively as possible. In order to do this, I included an interactive map that includes all of the information for different Mercer on Mission programs including a link to the actual page, in order to actually apply and get a deeper understanding of the program. This would, ideally, be replaced with a page created in a similar fashion to this one, but for the time being the official page is being used as a placeholder. The map and programs list has access to a database containing all necessary information, allowing for a one-stop source for the program information. I included a mock page for adding information to the database to show how easy it is to add information as needed without needing to access the database directly. I also included a contact page that directly sends an email to the account connected to this website, and a footer that includes connections such as Twitter and Facebook.</p></div>
                </div>
            </div>
	</section>
        <!-- Works Cited Section-->
        <div class="copyright py-4 text-white">
            <div class="container" style="text-align:justify;padding-left:5px;text-indent:-5px">
                <small style="text-align:center">
                    Works Cited 
		</small>
		<br>
		<small style="text-align:justify">
		    Brière, S., Tremblay, M., & Daou, A. (2015). Challenges facing international projects for entrepreneurial development in South Africa. Development Southern Africa, 32(6), 711-725. doi:10.1080/0376835x.2015.1063981
		</small>
		<br>
		<small style="text-align:justify">
		Burdick, W. P., Friedman, S. R., & Diserens, D. (2012). Faculty development projects for international health professions educators: Vehicles for institutional change? Medical Teacher, 34(1), 38-44. doi:10.3109/0142159x.2011.558538
		</small>
		<br>
		<small style="text-align:justify">
		Esteves, P., & Zoccal, G. (2020). International development cooperation AND Multipolarity: Scrambling north And South? Revista Brasileira De Política Internacional, 63(2). doi:10.1590/0034-7329202000213	
		</small>
		<br>
		<small>
		Fukuda-Parr, S. (2011). Theory and policy in international development: Human development and capability approach and the millennium development goals. International Studies Review, 13(1), 122-132. doi:10.1111/j.1468-2486.2010.01003.x
		</small>
		<br>
		<small>
		Ginsberg, N. (2016). Determining the context of an international development project. The Journal of Developing Areas, 50(5), 431-442. doi:10.1353/jda.2016.0055
		</small>
            </div>
        </div>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="steps" style="background-color:#f48500">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white mb-0">Steps of the Project</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid h-100 w-100" src="https://atlantachallenge.com/wp-content/uploads/2015/06/business-planning-background-1600x900.png" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="https://indypendently.com/imager/uploads/general/605/05_scorp_llc_sp_v04_c0ac4e6aadd1000ea4be27a574251c3b.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="https://storage.googleapis.com/hackersandslackers-cdn/2019/02/SQLpt1-3.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="https://apastyle.apa.org/images/research-publication-category_tcm11-282728_w1024_n.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="https://thinkport.org/microsites/middleschoolmath/images/P9_trashball2.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 6-->
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="https://media.freebiesglobal.com/2020/12/the-complete-html-css-bootstrap-build-hands-on-projects.jpg" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Map Section-->
        <section class="page-section text-secondary mb-0" style="height:1000px" id="map">
            <div class="container">
                <!-- Map Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase">Interactive Map</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Map Section Content-->
		<div  class="row justify-content-center" id="googleMap" style="border-radius:10px;width:100%;height:600px"><script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8vM2mTOjFej38VSmTTHOWRp5lBrGi8vY&callback=myMap"></script>	 
                </div>
		<div class="row justify-content-center">
		<small>
		Latitude and Longitude coordinates taken from https://www.latlong.net/.
		</small>
		</div>
            </div>
	</section>

        <!-- Program Section-->
        <section class="page-section text-white mb-0" style="background-color:#f48500">
            <div class="container">
                <!-- Program Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Programs</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Program Section Content-->
                <div class="row justify-content-center">
		   <table style="width:100%">
			<tr>
			    <th>Program Name</th>
			    <th>Program Information</th>
			    <th>Faculty</th>
			    <th>Link to Apply</th>
			</tr>
<?php
$query = "SELECT * FROM MapMarkers";
$result = $con->query($query);
while($row = $result->fetch_assoc()) {
	echo "<tr><td>".$row["Name"]."</td><td>".$row["Comment"]."</td><td>".$row["Professor"]."</td><td><a style=\"color:blue;font-weight:bold\" href=\"".$row["Link"]."\" target=\"_blank\">Link</td></tr>";
}
?>
		   </table> 
		</div>
			<br>
			<form action="/seniorproject/bootstrap/dist/coordpage.php">
			<input type="submit" value="Add a new program here! (This would be only accessible to admin users)">
			</form>
            </div>
        </section>

        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Us!</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                        <form name="sentMessage" novalidate="novalidate" action="index.php" method="POST">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Name</label>
                                    <input class="form-control" id="name2" name="name2" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Email Address</label>
                                    <input class="form-control" id="email" name="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Phone Number</label>
                                    <input class="form-control" id="phone" name="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br />
                            <div id="success"></div>
			    <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Send</button></div>
			</form>
<?php
if(isset($_POST['name2'])){
	$sql2 = "INSERT INTO Responses (Name, Email, Phone, Message)
		VALUES ('$_POST[name2]','$_POST[email]','$_POST[phone]','$_POST[message]')";
	if($con->query($sql2) === TRUE){
		echo "Message received! Thank you for your feedback!";
	} else {
		  echo "Error...";
	}
}
?>
                    </div>
		</div>
		<br>
<!-- Responses table -->
		<div class="row justify-content-center">
			<p class="lead"><b>Responses So Far</b></p>
		</div>
                <div class="row justify-content-center">
		   <table style="width:100%">
			<tr>
			    <th>Name</th>
			    <th>Message</th>
			</tr>
<?php
$query = "SELECT * FROM Responses";
$result = $con->query($query);
while($row = $result->fetch_assoc()) {
	echo "<tr><td>".$row["Name"]."</td><td>".$row["Message"]."</td></tr>";
}
?>
		   </table> 
		</div>
            </div>
	</section>

	<!-- More Sources Section-->
        <section class="page-section text-secondary mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary">Interested in Learning/Doing More?</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
		    <div class="text-center"><p class="lead">Link and description here.</p></div>
		    <div class="text-center"><p class="lead">Link and description here.</p></div>
		    <div class="text-center"><p class="lead">Link and description here.</p></div>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            1501 Mercer University Dr.
                            <br />
                            Macon, GA, 31207
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/MercerOnMission"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/MercerAbroad"><i class="fab fa-fw fa-twitter"></i></a> 
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About the Site</h4>
                        <p class="lead mb-0">
                            Mercer on Mission Navigator is a senior project developed by Walker Gibbons.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container">
                <small>
                    Copyright &copy; International Development Navigator
                    <!-- This script automatically adds the current year to your website footer-->
                    <!-- (credit: https://updateyourfooter.com/)-->
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                </small>
            </div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Step 1: Deciding on a Project</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="https://atlantachallenge.com/wp-content/uploads/2015/06/business-planning-background-1600x900.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">The first step was one of the hardest. Due to my double major in IST and IAF, Dr. Houry thought it would be interesting to combine the two for my senior project and create something that demonstrates how they can work together. After talking to both Dr. Houry and Dr. Allen, I decided on making this website as a way to showcase potential upgrades and features to add to the Mercer on Mission website. I also wanted to ensure that there was a lot of information available to visitors who were unsure what exactly international development entails, as Dr. Allen pointed out that many people are not aware of the full scope of international development. Through this process, I would be able to learn and practice more about IST as well as incorporating International Affairs into it through research and education. By February, I had a general idea of what I wanted to do. It would take late February/early March to really settle on the full project scope.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal2Label">Step 2: Deciding the Features</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="https://indypendently.com/imager/uploads/general/605/05_scorp_llc_sp_v04_c0ac4e6aadd1000ea4be27a574251c3b.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">The next step was deciding on the features that I wanted the website to have. During the initial meeting with Dr. Houry and Dr. Allen, I found that Dr. Allen had many questions about what "International Development" meant. This lead me to incorporate the "About" section that gives a general view of what the term means, as well as the various forms this can take. This allows for visitors who are not entirely knowledgeable about the field of study to learn more about the programs' purposes. I then asked friends about what they thought about the already established Mercer on Mission website and what they think I could incorporate to improve upon it. After discussing with a few different people, I found a few similarities between the discussions. First of all, they found the program layout somewhat hard to grasp, and felt like that could have been improved upon. This gave me the idea for creating a map with the locations of the programs that were being offered, so as to give a visual experience to visitors that would help them understand the scope of the programs. Finally, I thought that a quick "Contact" page would be beneficial, so that visitors have a quick and easy way to contact the administrators of the site as well as the directors of the programs.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal3Label">Step 3: Creating the Database</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="https://storage.googleapis.com/hackersandslackers-cdn/2019/02/SQLpt1-3.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">My next step was creating the database. This involved a deeper look into SQL, and the way that they are incorporated into the website. I decided on creating a single database that holds all of the information that is required, as it makes it easy to pick and choose whatever information I need and also simplify the process of adding to the SQL database.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal4Label">Step 4: Doing the Research</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="https://apastyle.apa.org/images/research-publication-category_tcm11-282728_w1024_n.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
				    <p class="mb-5">This was one of the longer parts of this project. It involved me getting the information for the "About" section, as well as getting information from the current MoM website in order to move the information here and incorporate it into the map and programs section. It was tough for me primarily deciding what information I wanted to include, as I did not want a huge wall of text for each part but I also wanted to ensure that the information provided was enough, and gave enough information for any potential visitors to the site.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal5Label">Step 5: Deleting the Project</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="https://thinkport.org/microsites/middleschoolmath/images/P9_trashball2.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Believe it or not, this was an accident, and happened on the Saturday before BEAR Day. However, I did learn from it, as it helped me recognize the importance of keeping a backup at all times. It also helped me to realize the importance of doing everything mindfully, as using the command "rm" instead of "mv" was enough to delete everything I had. From this point onwards, I begins backing up all of the work I was doing so that it would not happen again. </p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal6Label">Step 6: Recovery and Styling</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="https://media.freebiesglobal.com/2020/12/the-complete-html-css-bootstrap-build-hands-on-projects.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">This step was primarily focused on re-doing the work I had done previously, which admittedly was easier given the fact that I knew what I wanted and generally remembered how to do most of it, barring a few exceptions. It was also at this point that I committed to ensuring that the styling was correct, and that everything looked the way I wanted it to.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	</div>

        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
	<script src="js/scripts.js"></script>

<?php
$query = "SELECT * FROM MapMarkers";
$result = $con->query($query);
?>

<script>
const arr = [];

<?php
while($row = $result->fetch_assoc()) {
	echo 'arr.push({Lat:'.$row["Lat"].',Lng:'.$row['Lng'].',Name:"'.$row["Name"].'",Comment:"'.$row["Comment"].'"});';
}
?>

function myMap(){
	var mapProp={
		center:new google.maps.LatLng(40.53,34.3), zoom:3
	}
	return new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
const map = myMap();
var InfoWindow = new google.maps.InfoWindow();
function createMarker(latlng,content){
	var marker = new google.maps.Marker({position: latlng, map:map});
	marker.addListener("click", ()=>{
		InfoWindow.setContent(content);
		InfoWindow.open(map,marker);
	});
}

for(var entry of arr){
	var contentStr = `<h1>${entry["Name"]}</h1> <br/> <p>${entry["Comment"]}</p>`;
	var latlng = {lat:entry["Lat"], lng: entry["Lng"]};
	createMarker(latlng,contentStr);
}

if (window.history.replaceState) {
	window.history.replaceState(null, null, window.location.href);
}

</script>

</body>
</html>
