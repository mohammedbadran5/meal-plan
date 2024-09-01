<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/sc.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">
   
    <title>Meals Generater</title>



</head>
<body>


  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img style="position: relative;top: -60px;" src="heybro/asedfr-removebg-preview.png"  width="250" height="50" alt="MEAL PLAN">
      </a>

      <nav class="navbar" data-navbar>

        <button class="close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="heybro/logo.svg" width="160" height="50" alt="MEAL CRAFT - Home">
        </a>

        <ul class="navbar-list">

     
        <li class="navbar-item">
            <a href="sched.html" class="navbar-link hover-underline active">
              <div class="separator"></div>
              <span class="span">Schedule</span>
            </a>
          </li>
          

        

          

         
          

        </ul>

       
      </nav>

     
      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>


    <section>
        <div class="content">
            <div class="main-content">
                <h1 data-aos="fade-right" data-aos-duration="2000">Foody</h1>
                <h2 data-aos="fade-left" data-aos-duration="2000" data-aos-delay="200">Tasty Meals Generater</h2>
                <h4 data-aos="fade-right" data-aos-duration="2000" data-aos-delay="400">MAKE YOUR MEALS SHCEDUALING</h4>
                <p data-aos="flip-down" data-aos-duration="2000" data-aos-delay="600">Plan your weekly meals hassle-free with our scheduling feature! Easily input your meal choices into our intuitive table, and we'll generate a comprehensive shopping list for you. Simplify your grocery runs by ensuring you have all the ingredients you need for a delicious week ahead!</p>
                <div class="order">
                    <h3 data-aos="zoom-in-right" data-aos-duration="2000" data-aos-delay="800">7 Days planing</h3>
                   
                </div>
            </div>
            <div class="image">
                <img src="./arkhé_restaurant_and_bar_on_Instagram___Asado_ribs_marinated_in_shio_Koji__raw_garlic_juice_and_chopped_rosemary__served_with_mustard_miso__Captured_by__jasonloucas_for___raremedium___-removebg-previe.png" data-aos="zoom-in" data-aos-duration="2000">
            </div>
        </div>
    </section>



    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        offset:1
      });
    </script>


   <div class="texty">
      <div class="text1"><h1 data-aos="fade-left" data-aos-duration="1000" >Make your Scheduale Now And Save It</h1></div>
   </div>

<form method="POST" >
<table data-aos="fade-up" data-aos-duration="1000">
    <thead>
        <tr>
            <th></th>
            <th>Breakfast</th>
            <th>Lunch</th>
            <th>Dinner</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Saturday</td>
            <td><input type="text" placeholder="Meal" name="meal[Saturday][Breakfast]"></td>
            <td><input type="text" placeholder="Meal" name="meal[Saturday][Lunch]"></td>
            <td><input type="text" placeholder="Meal" name="meal[Saturday][Dinner]"></td>
        </tr>
        <tr>
            <td>Sunday</td>
            <td><input type="text" placeholder="Meal" name="meal[Sunday][Breakfast]"></td>
            <td><input type="text" placeholder="Meal" name="meal[Sunday][Lunch]"></td>
            <td><input type="text" placeholder="Meal" name="meal[Sunday][Dinner]"></td>
        </tr>
        <tr>
            <td>Monday</td>
            <td><input type="text" placeholder="Meal" name="meal[Monday][Breakfast]"></td>
            <td><input type="text" placeholder="Meal" name="meal[Monday][Lunch]"></td>
            <td><input type="text" placeholder="Meal" name="meal[Monday][Dinner]"></td>
        </tr>
        <tr>
            <td>Tuesday</td>
            <td><input type="text" placeholder="Meal" name="meal[Tuesday][Breakfast]"></td>
            <td><input type="text" placeholder="Meal" name="meal[Tuesday][Lunch]"></td>
            <td><input type="text" placeholder="Meal" name="meal[Tuesday][Dinner]"></td>
        </tr>
        <tr>
            <td>Wednesday</td>
            <td><input type="text" placeholder="Meal" name="meal[Wednesday][Breakfast]"></td>
            <td><input type="text" placeholder="Meal" name="meal[Wednesday][Lunch]"></td>
            <td><input type="text" placeholder="Meal" name="meal[Wednesday][Dinner]"></td>
        </tr>
        <tr>
            <td>Thursday</td>
            <td><input type="text" placeholder="Meal" name="meal[Thursday][Breakfast]"></td>
            <td><input type="text" placeholder="Meal" name="meal[Thursday][Lunch]"></td>
            <td><input type="text" placeholder="Meal" name="meal[Thursday][Dinner]"></td>
        </tr>
        <tr>
            <td>Friday</td>
            <td><input type="text" placeholder="Meal" name="meal[Friday][Breakfast]"></td>
            <td><input type="text" placeholder="Meal" name="meal[Friday][Lunch]"></td>
            <td><input type="text" placeholder="Meal" name="meal[Friday][Dinner]"></td>
        </tr>
    </tbody>
</table>




<div id="ingredientsTable"></div>

  

<script>
    // Get references to all input fields
const inputFields = document.querySelectorAll('input[type="text"]');

// Function to adjust input field size
function adjustInputSize() {
    inputFields.forEach(input => {
        input.setAttribute('size', input.value.length);
    });
}

// Add event listeners to input fields
inputFields.forEach(input => {
    input.addEventListener('input', adjustInputSize);
});

</script>



<script>
    document.querySelectorAll('input[type="text"]').forEach(input => {
  input.addEventListener('focus', () => {
    input.placeholder = '';
  });

  input.addEventListener('blur', () => {
    input.placeholder = 'Meal';
  });
});
</script>

<section class="details-foods">
    <div class="title"><h1 data-aos="fade-left" data-aos-duration="1000" >Effective Time Management Strategies</h1></div>
    <div class="foods">
        <div class="card" data-aos="fade-up" data-aos-duration="1000">
            <img src="" alt="">
            <div class="discription">
                <h1> Essential Role in Organization</h1>
                <p>Scheduling is indispensable for organizing daily tasks effectively. It provides a framework to allocate time wisely, prioritize activities, and maintain productivity. A structured schedule fosters discipline, reduces procrastination, and ensures timely completion of essential tasks, leading to improved efficiency.</p>
                
            </div>
        </div>
        <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <img src="" alt="">
            <div class="discription">
                <h1>Time Management and Efficiency</h1>
                <p>Effective scheduling facilitates superior time management by delineating tasks and allocating suitable time slots. It empowers individuals to optimize their productivity, minimize distractions, and achieve their objectives promptly. With a well-planned schedule, people can balance their professional commitments.</p>
                
            </div>
        </div>
        <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            <img src="" alt="">
            <div class="discription">
                <h1>Achieving Balance and Harmony</h1>
                <p>Balancing various aspects of life necessitates a well-organized schedule that accommodates diverse responsibilities. By scheduling tasks strategically, individuals can strike a harmonious equilibrium between work, family, leisure, and self-care. This balance cultivates a sense of fulfillment, reduces stress, and enhances overall well-being.</p>
                
            </div>
        </div>
        <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
            <img src="" alt="">
            <div class="discription">
                <h1>Flexibility and Adaptability</h1>
                <p>While schedules provide structure, they must also allow for flexibility and adaptation to changing circumstances. A flexible schedule accommodates unforeseen events, adjustments in priorities, and spontaneous opportunities without compromising productivity. By incorporating buffer times and maintaining a degree of adaptability.</p>
                
            </div>
        </div>
    </div>
</section>

<div class="mee">
  <div class="save">
    <button class="btn btn-secondary" type="submit" data-aos="fade-left" data-aos-duration="1000" style="color: black;" onmouseover="this.style.color='white'" onmouseout="this.style.color='black'">SEE NEEDED MATERIAL</button>
  </div>
</div>

</form>




<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, "CS499B");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $meals = $_POST['meal'];
        $all_empty = true;

        foreach ($meals as $day => $day_meals) {
            foreach ($day_meals as $meal_type => $meal_name) {
                if (!empty($meal_name)) {
                    $all_empty = false;
                    $sql = "SELECT ingredients FROM meal2 WHERE Title = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("s", $meal_name);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $ingredients[$day][$meal_type] = $meal_name . ": " . $row['ingredients'];
                    } else {
                        $ingredients[$day][$meal_type] ='The meal is not found. Please enter another meal.';
                    }
                } else {
                    $ingredients[$day][$meal_type] = "";
                }
            }
        }

        if ($all_empty) {
            echo '<script>alert("Warning: Please fill at least one field.")</script>';
        } else {
            echo "<table border='1' class='table2'>
                <thead>
                    <tr>
                        <th></th>
                        <th>Breakfast</th>
                        <th>Lunch</th>
                        <th>Dinner</th>
                    </tr>
                </thead>
                <tbody>";
            foreach ($ingredients as $day => $day_meals) {
                echo "<tr><td>$day</td>";
                foreach ($day_meals as $meal_type => $ingredient) {
                    echo "<td>$ingredient</td>";
                }
                echo "</tr>";
            }
            echo "</tbody></table>";

        }
    }

$conn->close();
?>


  <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get references to all input fields within the table with class "table2"
        const inputFields = document.querySelectorAll('.table2 input[type="text"]');
    
        // Function to adjust input field size
        function adjustInputSize() {
            inputFields.forEach(input => {
                input.setAttribute('size', input.value.length);
            });
        }
    
        // Add event listeners to input fields
        inputFields.forEach(input => {
            input.addEventListener('input', adjustInputSize);
        });
    });
    </script>
    

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get references to all input fields
    const inputFields = document.querySelectorAll('input[type="text"]');

    // Function to save form data to localStorage
    function saveFormData() {
        const formData = {};
        inputFields.forEach(input => {
            formData[input.name] = input.value;
        });
        localStorage.setItem('formData', JSON.stringify(formData));
    }

    // Restore form data if it exists in localStorage
    function restoreFormData() {
        const savedFormData = localStorage.getItem('formData');
        if (savedFormData) {
            const formData = JSON.parse(savedFormData);
            inputFields.forEach(input => {
                if (formData[input.name]) {
                    input.value = formData[input.name];
                }
            });
        }
    }

    // Call restoreFormData function on page load
    restoreFormData();

    // Add event listener to the "see needed" button to save form data
    document.querySelector('button[type="submit"]').addEventListener('click', saveFormData);
});
</script>










<script>
    'use strict';



/**
 * PRELOAD
 * 
 * loading will be end after document is loaded
 */

const preloader = document.querySelector("[data-preaload]");

window.addEventListener("load", function () {
  preloader.classList.add("loaded");
  document.body.classList.add("loaded");
});



/**
 * add event listener on multiple elements
 */

const addEventOnElements = function (elements, eventType, callback) {
  for (let i = 0, len = elements.length; i < len; i++) {
    elements[i].addEventListener(eventType, callback);
  }
}



/**
 * NAVBAR
 */

const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");
const overlay = document.querySelector("[data-overlay]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
  document.body.classList.toggle("nav-active");
}

addEventOnElements(navTogglers, "click", toggleNavbar);



/**
 * HEADER & BACK TOP BTN
 */

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

let lastScrollPos = 0;

const hideHeader = function () {
  const isScrollBottom = lastScrollPos < window.scrollY;
  if (isScrollBottom) {
    header.classList.add("hide");
  } else {
    header.classList.remove("hide");
  }

  lastScrollPos = window.scrollY;
}

window.addEventListener("scroll", function () {
  if (window.scrollY >= 50) {
    header.classList.add("active");
    backTopBtn.classList.add("active");
    hideHeader();
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
  }
});



/**
 * HERO SLIDER
 */

const heroSlider = document.querySelector("[data-hero-slider]");
const heroSliderItems = document.querySelectorAll("[data-hero-slider-item]");
const heroSliderPrevBtn = document.querySelector("[data-prev-btn]");
const heroSliderNextBtn = document.querySelector("[data-next-btn]");

let currentSlidePos = 0;
let lastActiveSliderItem = heroSliderItems[0];

const updateSliderPos = function () {
  lastActiveSliderItem.classList.remove("active");
  heroSliderItems[currentSlidePos].classList.add("active");
  lastActiveSliderItem = heroSliderItems[currentSlidePos];
}

const slideNext = function () {
  if (currentSlidePos >= heroSliderItems.length - 1) {
    currentSlidePos = 0;
  } else {
    currentSlidePos++;
  }

  updateSliderPos();
}

heroSliderNextBtn.addEventListener("click", slideNext);

const slidePrev = function () {
  if (currentSlidePos <= 0) {
    currentSlidePos = heroSliderItems.length - 1;
  } else {
    currentSlidePos--;
  }

  updateSliderPos();
}

heroSliderPrevBtn.addEventListener("click", slidePrev);

/**
 * auto slide
 */

let autoSlideInterval;

const autoSlide = function () {
  autoSlideInterval = setInterval(function () {
    slideNext();
  }, 7000);
}

addEventOnElements([heroSliderNextBtn, heroSliderPrevBtn], "mouseover", function () {
  clearInterval(autoSlideInterval);
});

addEventOnElements([heroSliderNextBtn, heroSliderPrevBtn], "mouseout", autoSlide);

window.addEventListener("load", autoSlide);



/**
 * PARALLAX EFFECT
 */

const parallaxItems = document.querySelectorAll("[data-parallax-item]");

let x, y;

window.addEventListener("mousemove", function (event) {

  x = (event.clientX / window.innerWidth * 10) - 5;
  y = (event.clientY / window.innerHeight * 10) - 5;

  // reverse the number eg. 20 -> -20, -5 -> 5
  x = x - (x * 2);
  y = y - (y * 2);

  for (let i = 0, len = parallaxItems.length; i < len; i++) {
    x = x * Number(parallaxItems[i].dataset.parallaxSpeed);
    y = y * Number(parallaxItems[i].dataset.parallaxSpeed);
    parallaxItems[i].style.transform = `translate3d(${x}px, ${y}px, 0px)`;
  }

});
</script>

   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
