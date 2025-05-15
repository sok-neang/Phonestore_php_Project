<?php session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
		
		}else{
			$message="Product ID is invalid";
		}
	}
		echo "<script>alert('Product has been added to the cart')</script>";
		echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">

    <title>Shopping Portal Home Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">`

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="assets/css/main.css">


    <style>
    /* General Styles */
    .section-title {
        position: relative;
        padding-bottom: 15px;
        margin-bottom: 30px;
        text-transform: uppercase;
        font-weight: 700;
    }

    .section-title:after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 50px;
        height: 3px;
        background: #743457;
    }

    /* Hero Section */
    .hero-section {
        background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1518655048521-f130df041f66?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
        background-size: cover;
        background-position: center;
        color: white;
        height: 100vh;
        min-height: 500px;
        display: flex;
        align-items: center;
    }

    .hero-section h1 {
        font-size: 4rem;
        margin-bottom: 1rem;
        text-transform: uppercase;
    }

    .hero-section p {
        font-size: 1.5rem;
        letter-spacing: 3px;
    }

    /* About Section */
    .about-section {
        padding: 100px 0;
    }

    .about-section img {
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    /* Stats Section */
    .stats-section {
        padding: 60px 0;
    }

    .stats-section h2 {
        color: #743457;
    }

    /* Testimonials */
    .testimonials .card {
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s;
    }

    .testimonials .card:hover {
        transform: translateY(-10px);
    }

    /* Progress Bars */
    .progress {
        height: 8px;
        border-radius: 4px;
    }

    .progress-bar {
        background-color: #743457;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .hero-section h1 {
            font-size: 2.5rem;
        }

        .hero-section p {
            font-size: 1rem;
        }

        .stats-section h2 {
            font-size: 2.5rem;
        }

        .my_image {
            margin-bottom: 200px;
        }
    }
    </style>



    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

<body>
    <!-- ============================================== HEADER ============================================== -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">MyWebsite</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header><!-- Hero Section -->
    <div class="hero-section">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12 text-center">
                    <h1 class="display-3 fw-bold">I AM LAY SOKNEANG</h1>
                    <p class="lead">FRONTEND DEVELOPER</p>
                    <a href="#about" class="btn btn-outline-light btn-lg mt-3">ABOUT ME</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <section class="stats-section py-5 bg-light">
        <div class="container">
            <div class="row text-center gap-5">
                <div class="col-md-4 border border-gray">
                    <h2 class="display-4 fw-bold">15k+</h2>
                    <p class="text-uppercase">Happy Customers</p>
                </div>
                <div class="col-md-4 border border-gray">
                    <h2 class="display-4 fw-bold">12k+</h2>
                    <p class="text-uppercase">Ticket Solved</p>
                </div>
                <div class="col-md-4 border border-gray">
                    <h2 class="display-4 fw-bold">9/10</h2>
                    <p class="text-uppercase">Average Rating</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="img/my_image.png" width="70%" alt=" Jo Breed" class="img-fluid rounded shadow my_image">
                </div>
                <div class="col-lg-6">
                    <h3 class="text-uppercase fw-bold mb-3">About Me</h3>
                    <h4 class="fw-semibold mb-3">Computer Science Student at Royal University of Phnom Penh</h4>
                    <p class="text-muted">
                        I'm currently a 3rd-year student pursuing a degree in Computer Science at the Royal
                        University
                        of Phnom Penh.
                        I'm passionate about technology, especially in web development, and constantly learning new
                        tools and frameworks to improve my skills.
                    </p>
                    <p class="text-muted">
                        I enjoy building creative projects with HTML, CSS, JavaScript, PHP, and React. I’m open to
                        internships, collaborative work, and learning experiences that can help me grow into a
                        professional full-stack developer.
                    </p>

                    <div class="skills mt-4">
                        <h5 class="mb-3">MY SKILLS</h5>
                        <div class="skill-item mb-3">
                            <div class="d-flex justify-content-between">
                                <span>HTML & CSS</span>
                                <span>90%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="skill-item mb-3">
                            <div class="d-flex justify-content-between">
                                <span>JavaScript</span>
                                <span>70%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 70%"></div>
                            </div>
                        </div>
                        <div class="skill-item mb-3">
                            <div class="d-flex justify-content-between">
                                <span>UI/UX Design</span>
                                <span>80%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="btn btn-primary mt-3">SEE MY PROJECTS</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center mb-5">WHAT CLIENTS SAY</h2>
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <p class="text-muted">"She's a hardworking and reliable teammate. Always ready to help
                                with
                                code and explain complex topics."</p>
                            <h6 class="fw-bold mb-0">Sokchea Rith</h6>
                            <small class="text-muted">Classmate, Group Project</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <p class="text-muted">"Shows great potential in frontend development. Her dedication and
                                attention to detail are impressive."</p>
                            <h6 class="fw-bold mb-0">Ms. Dara</h6>
                            <small class="text-muted">Lecturer, Web Development</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <p class="text-muted">"Very curious and self-driven. She’s always exploring new
                                technologies
                                and eager to learn more."</p>
                            <h6 class="fw-bold mb-0">Chansophea Leng</h6>
                            <small class="text-muted">Hackathon Teammate</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>LAY SOKNEANG</h5>
                    <p>Frontend Developer</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="social-links">
                        <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-behance"></i></a>
                    </div>
                    <p class="mt-2 mb-0">&copy; <?php echo date('Y'); ?> Lay Sokneang. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

</html>


<!-- Bootstrap JS Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>