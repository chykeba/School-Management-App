<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        
        <title>iA2Z Tech &mdash; x</title>
    </head>
    <body>
        <div class="container">
            <header class="header">
                <img src="img/logo.png" alt="trillo logo" class="logo">

                <form action="#" class="search">
                    <input type="text" class="search__input" placeholder="Search my dashboard">
                    <button class="search__button">
                        <svg class="search__icon">
                            <use xlink:href="img/sprite.svg#icon-magnifying-glass"></use>
                        </svg>
                    </button>
                </form>

                <nav class="user-nav">
                    <div class="user-nav__icon-box">
                        <svg class="user-nav__icon">
                            <use xlink:href="img/sprite.svg#icon-bookmark"></use>
                        </svg>
                        <a href="dashboard.php?logout='1'" style="color: red;">Logout</a> 
                    </div>
                    <div class="user-nav__icon-box">
                        <svg class="user-nav__icon">
                            <use xlink:href="img/sprite.svg#icon-chat"></use>
                        </svg>
                        <span class="user-nav__notification">13</span>
                    </div>
                    
                    
                    <div class="user-nav__user">
                        <img src="img/user.jpg" alt="User photo" class="user-nav__user-photo">
                        <span class="user-nav__user-name">
                            <?php echo $_SESSION['username']; ?>
                        </span>
                    </div>
                </nav>
            </header>


            <div class="content">
                <nav class="sidebar">
                    <ul class="side-nav">
                        <li class="side-nav__item ">
                            <a href="#" class="side-nav__link">
                                <svg class="side-nav__icon">
                                    <use xlink:href="img/sprite.svg#icon-home"></use>
                                </svg>
                                <span>Home</span>
                            </a>
                        </li>
                       
                        
                        <li class="side-nav__item side-nav__item--active">
                            <a href="#" class="side-nav__link ">
                                <svg class="side-nav__icon">
                                    <use xlink:href="img/sprite.svg#icon-map"></use>
                                </svg>
                                <span>Courses</span>
                            </a>
                        </li>
                    </ul>

                    <div class="legal">
                        &copy; 2020 by Adebayo Odurinde. All rights reserved.
                    </div>
                </nav>



                <main class="school-view">
                    <div class="gallery">
                        <figure class="gallery__item">
                            <img src="img/lecture.jpg" alt="Photo of lecture hall 1" class="gallery__photo">
                        </figure>
                        <figure class="gallery__item">
                            <img src="img/lecture.jpg" alt="Photo of lecture hall 2" class="gallery__photo">
                        </figure>
                        <figure class="gallery__item">
                            <img src="img/lecture.jpg" alt="Photo of lecture hall 3" class="gallery__photo">
                        </figure>
                    </div>

                    <div class="overview">
                        <h1 class="overview__heading">
                            Student Dashboard
                        </h1>

                        <div class="overview__stars">
                            <svg class="overview__icon-star">
                                <use xlink:href="img/sprite.svg#icon-star"></use>
                            </svg>
                            <svg class="overview__icon-star">
                                <use xlink:href="img/sprite.svg#icon-star"></use>
                            </svg>
                            <svg class="overview__icon-star">
                                <use xlink:href="img/sprite.svg#icon-star"></use>
                            </svg>
                            <svg class="overview__icon-star">
                                <use xlink:href="img/sprite.svg#icon-star"></use>
                            </svg>
                            <svg class="overview__icon-star">
                                <use xlink:href="img/sprite.svg#icon-star"></use>
                            </svg>
                        </div>

                        <div class="overview__location">
                            <svg class="overview__icon-location">
                                <use xlink:href="img/sprite.svg#icon-location-pin"></use>
                            </svg>
                            <button class="btn-inline">iA2Z, Lagos</button>
                        </div>

                        <div class="overview__rating">
                            <div class="overview__rating-average">3.2 CGPA</div>
                            <div class="overview__rating-count">Semester 4</div>
                        </div>
                    </div>

                    <div class="detail">
                        <div class="description">
                            
                            <h3>Courses</h3>
                            <ul id="list" class="list">
                                <!-- <li class="minus">
                                  Cash <span>-$400</span><button class="delete-btn">x</button>
                                </li> -->
                              </ul>
                        </div>

                        <div class="cta">
                            <h2 class="cta__book-now">
                               Register you session courses. 
                            </h2>
                            <a href="#popup">
                                <button class="btn" >
                                    <span class="btn__visible">Register Course</span>
                                    <span class="btn__invisible">Register Now</span>
                                </button>
                            </a>
                        </div>
                        

                    </div>
                    <div class="popup" id="popup">
                        <div class="popup__content">
                        <a href="#" class="popup__close">&times;</a>
                            <div class="popup__content--container">
                            
                            <h2 class="popup__content--text">
                                Register Your Course
                            </h2>
                            <div class="popup__content--form">
                                <form id="course-form">
                                    <div class="input-group">
                                        <label>Course Name</label>
                                        <input type="text" name="name" id="cname">
                                    </div>
                                    <div class="input-group">
                                        <label>Course Code</label>
                                        <input type="text" name="code" id="code">
                                    </div>
                                    <div class="input-group">
                                        <label>Unit</label>
                                        <input type="number" name="unit" id="unit">
                                    </div>
                                    <div class="input-group">
                                        <button type="submit" class="btn" name="register_course">Register</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </main>
            </div>
        </div>
        <script type="text/javascript" src="script.js"></script>
    </body>
</html>
