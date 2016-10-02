<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
		
		</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="img/favicon.ico" />
		<link rel="stylesheet" href="css/main.css" />
		<script src="../js/register.js"></script>
	</head>
	<body>
		<div id="big_wrapper">
			<header id="top_header">
				<a href="index.html"><img id="logo" src="img/logo.png" alt="Logo"></a>
				<span id="website_title">4 Dimension's Book Store</span>
			</header>
			<nav id="top_menu">
				<a href="index.html"><p>Home</p></a>
				<a href="about_us.html"><p>About Us</p></a>
				<a href="books.html"><p>Books</p></a>
				<a href="login.html"><p>Login/Register</p></a>
			</nav>
			<section id="main_section">
				<h1>Register </h1>
				<article>
					<form method="POST" onsubmit="reg.php">
						<br />
						First Name:
						<input type="text" name="first_name" placeholder="First Name" required="" autofocus="" />
						<br />
						Last Name:
						<input type="text" name="last_name" placeholder="Last Name" required="" autofocus="" />
						<br />
						E-mail Address:
						<input type="email" name="email" placeholder="abcde@fghk.com" required="" autofocus="" />
						<br />
						Gender:
						<input type="radio" name="gender" value="female" required="" autofocus="" />Female 
						<input type="radio" name="gender" value="male" required="" autofocus="" />Male 
						<br />
						Date of Birth:
						<input type="date" name="date_of_birth" placeholder="DD-MM-YYYY" required="" autofocus="" />
						<br />
						Username:
						<input type="text" name="username" placeholder="Username" required="" autofocus="" />
						<br />
						Password:
						<input type="password" name="pass1" id="pass1" placeholder="Password" required="" autofocus="" minlength="10" maxlength="16" />
						<br />
						Retype Password:
						<input type="password" name="pass2" id="pass2" onkeyup="checkPass(); return false;" placeholder="Retype password" required="" autofocus="" minlength="10" maxlength="16" />
						<span id="confirmMessage" class="confirmMessage"></span>
						<br />
						<input type="reset" name="reset" value="Reset" />
						<input type="submit" name="submit" value="Submit" onclick="checkPass()"/>
					</form>
				</article>
			</section>
			<footer id="the_footer">
				<a href="contact_us.html">Contact us</a> -
				<a href="site_map.html">Site Map</a>
				<p>Copyright &copy; 4 Dimension 2016</p>
			</footer>
		</div>
	</body>
</html>
