<?php 

include "php/config.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vijayakumar K - Software & Web Developer Portfolio</title>
	<link rel="icon" type="image/png" href="assets/images/favicon.jpg">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/responsive_index.css">
	<script src="https://kit.fontawesome.com/e370f778c1.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="navbar">
		<h2>WEB DEVELOPER</h2>

		<i id="menuicon" class="fa-solid fa-bars"></i>
		<!-- 
		<i class="fa-solid fa-xmark"></i>
		 -->

		<ul class="" id="ulcont">
			<li><a href="#about_me">About</a></li>
			<li><a href="#contact_me">Contact</a></li>
			<li><a href="assets/docs/Resume.pdf" download="Resume.pdf"><i id="downloadicon" class="fa-solid fa-download"></i> Resume</a></li>
		</ul>

		<div class="clearfix"></div>
	</div>


	<!-- <div class="banner"></div> -->


	<div class="slideshow_container">
        <div class="mySlides">
            <img src="assets/images/t1.jpg">
        </div>

        <div class="mySlides">
            <img src="assets/images/t2.png">
        </div>
        
        <div class="mySlides">
          <img src="assets/images/t3.png">
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

	<div id="about_me" class="about">
		<h2 class="content_hdns">About Me</h2>
		<p>
			I have been a fan of Internet and Computers since I was introduced to it, I've been learning Web Development as a SelfTaught for 2-3 years, an Internet-made developer. and later took some online courses, and I have tried some projects
			independently. I am looking forward an opportunity
		</p>
	</div>

	<div class="bio_tbl">
		<table cellspacing="10px">
			<tr>
				<td class="hrs" colspan="2"><hr></td>
			</tr>
			<tr>
				<td>Name</td>
				<td>VIJAYAKUMAR</td>
			</tr>
			<tr>
				<td>Profession</td>
				<td>Software / Web Development</td>
			</tr>
			<tr>
				<td>Spoken Languages</td>
				<td>Tamil (Native), English (Intermediate), Telugu (Basic)</td>
			</tr>
			<tr>
				<td>Location</td>
				<td>Bangalore, Karnataka - 560103</td>
			</tr>
			<!-- <tr>
				<td>Local Time</td>
				<td></td>
			</tr> -->
			<tr>
				<td class="hrs" colspan="2"><hr></td>
			</tr>
			<!-- <tr>
				<td class="shortbio" colspan="2" align="center">Nerd, Night Owl, Explorer</td>
			</tr> -->
		</table>
	</div>



	<div class="skills">
		<h2 class="content_hdns">SKILLS</h2>
		<div class="skills_tbl">
			<table cellspacing="10px">
				<tr>
					<td colspan="2"><h3 class="hdn_for_tbl2_val">Front End</h3></td>
				</tr>
				<tr>
					<td>HTML</td>
					<td class="progress_bar_tds"><progress value="80" min="0" max="100"></progress>&nbsp;80%</td>
				</tr>
				<tr>
					<td>CSS</td>
					<td class="progress_bar_tds"><progress value="70" min="0" max="100"></progress>&nbsp;70%</td>
				</tr>
				<tr>
					<td>JavaScript</td>
					<td class="progress_bar_tds"><progress value="45" min="0" max="100"></progress>&nbsp;45%</td>
				</tr>
				<tr>
					<td colspan="2"><h3 class="hdn_for_tbl2_val">Framworks/Librarys</h3></td>
				</tr>
				<tr>
					<td>React</td>
					<td class="progress_bar_tds"><progress value="30" min="0" max="100"></progress>&nbsp;30%</td>
				</tr>
				<tr>
					<td colspan="2"><h3 class="hdn_for_tbl2_val">Back End</h3></td>
				</tr>
				<tr>
					<td>Php</td>
					<td class="progress_bar_tds"><progress value="77" min="0" max="100"></progress>&nbsp;77%</td>
				</tr>
				<tr>
					<td>MySQL</td>
					<td class="progress_bar_tds"><progress value="80" min="0" max="100"></progress>&nbsp;80%</td>
				</tr>
				<tr>
					<td colspan="2"><h3 class="hdn_for_tbl2_val">Dev Tools</h3></td>
				</tr>
				<tr>
					<td>Git</td>
					<td class="progress_bar_tds"><progress value="45" min="0" max="100"></progress>&nbsp;45%</td>
				</tr>
				<tr>
					<td>GitHub</td>
					<td class="progress_bar_tds"><progress value="49" min="0" max="100"></progress>&nbsp;49%</td>
				</tr>
				<tr>
					<td colspan="2"><h3 class="hdn_for_tbl2_val">Design Tools</h3></td>
				</tr>
				<tr>
					<td>Canva</td>
					<td class="progress_bar_tds"><progress value="85" min="0" max="100"></progress>&nbsp;85%</td>
				</tr>
				<tr>
					<td>Figma</td>
					<td class="progress_bar_tds"><progress value="30" min="0" max="100"></progress>&nbsp;30%</td>
				</tr>
				<!-- <tr>
					<td colspan="2"><h3 class="hdn_for_tbl2_val">Others</h3></td>
				</tr>
				<tr>
					<td>Typing Speed</td>
					<td>50 WPM with 96% accuracy</td>
				</tr> -->			
			</table>
		</div>
	</div>


	<div class="coursesNcertifes">
		<h2 class="content_hdns">Courses & Certifications</h2>

		<div class="cNc_Container">
			<!-- <div class="box">
				<img src="assets/images/certificates/JavaScript for Beginners.png">
				<h3>META Front End Development</h3>
				<p>Coursera - Parsuing form Fab 2024</p>
			</div> -->
			<div class="box">
				<!-- <img src="assets/images/certificates/JavaScript for Beginners.png"> -->
				<h3>JavaScript for Beginners</h3>
				<p>GUVI - Completed on Dec 2023</p>
			</div>
			<div class="box">
				<!-- <img src="assets/images/certificates/DCA.jpg"> -->
				<h3>DCA (MS-OFFICE, C, C++)</h3>
				<p>IDEA Computer Education - Completed on Oct 2018</p>
			</div>
		</div>
	</div>


	
	<div class="coursesNcertifes">
		<h2 class="content_hdns">Projects</h2>

		<div class="cNc_Container">
			<div class="box">
				<!-- <img src="assets/images/certificates/JavaScript for Beginners.png"> -->
				<h3>Personal Blog</h3>
				<a target="_blank" href="https://codexd.netlify.app">Visit Site</a>
				<span class="dots"></span>
				<a target="_blank" href="https://github.com/vijayakumark3/codexd">Code</a>
			</div>
			<div class="box">
				<!-- <img src="assets/images/certificates/JavaScript for Beginners.png"> -->
				<h3>Weather Web App</h3>
				<a target="_blank" href="https://getmyweatherly.netlify.app">Visit Site</a>
				<span class="dots"></span>
				<a target="_blank" href="https://github.com/vijayakumark3/getmyweatherly">Code</a>
			</div>
			<div class="box">
				<!-- <img src="assets/images/certificates/DCA.jpg"> -->
				<h3>My YouTube Channel</h3>
				<a target="_blank" href="https://www.youtube.com/channel/UCN8z5hb1GU16JS_KisKtufQ">Visit Channel</a>
			</div>
		</div>
	</div>

	<div id="contact_me" class="contact">
		<div class="box">
			<h2 class="content_hdns">CONTACT</h2>
			<form action="" method="post">
				<!-- <label>Your Name</label> -->
				<input type="text" name="urName" placeholder="Your name" required>
				<!-- <label>Your Email</label> -->
				<input type="email" name="urEmail" placeholder="Your email" required>
				<!-- <label>Message</label> -->
				<textarea name="urMess" placeholder="Your message..." required></textarea>
				<button type="submit" name="urSubmit">SUBMIT</button>
			</form>
			<?php include "php/insert_contact_form_data.php"; ?>
		</div>
	</div>


	<div class="socialsNLinks">
		<h2 class="content_hdns">Link's</h2>
		<div class="container">
			<a href="mailto:contact.vijayakumark@gmail.com" target="_blank">
				<div class="box">
					<i class="fa-solid fa-envelope"></i>
				</div>
			</a>
			<a href="http://www.github.com/vijayakumark3" target="_blank">
				<div class="box">
					<i class="fa-brands fa-github"></i>
				</div>
			</a>
			<a href="https://www.linkedin.com/in/vijayakumar3/" target="_blank">
				<div class="box">
					<i class="fa-brands fa-linkedin"></i>
				</div>
			</a>
		</div>
	</div>


	<div class="footer">
		<p>Copyright &copy; 2024 - Designed by VIJAYAKUMAR</p>
	</div>
	


	<script src="js/menu_toggle.js"></script>
	<script src="js/slideshow.js"></script>
	<script src="js/popup_notifi.js"></script>

</body>
</html>