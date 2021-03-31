<!-- 

Name: nejood Abdulaziz Alfashka
ID: 1505971
Section: IAR
Suject: CPCS-403
Final project                                          

                                                                  
-->
<!--
  page description:

  this page contains plants image in a slideshow
-->
<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns=“http://www.w3.org/1999/xhtml”>
<head>
    <title>Gallery</title>
    <link rel="stylesheet" type="text/css" href="../global/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body onload="setActiveFunction('h5')">
<!--------------------------------- START HEADER --------------------------->
<div>
<?php include("../includes/header.php");?>
</div>
<!--------------------------------- END HEADER --------------------------->
<!--------------------------------- START SECTION --------------------------->
    <section >
        <div class="bubble">
<!----------------------- show images in slide ----------------------->
            <div class="slideshow-container">

                <!-- image 1: -->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 6</div>
                    <img class="galleryImgs" src="../images/1.jpg">
                </div>

                <!-- image 2: -->
                <div class="mySlides fade">
                    <div class="numbertext">2 / 6</div>
                    <img class="galleryImgs" src="../images/2.jpg">
                </div>

                <!-- image 3: -->
                <div class="mySlides fade">
                    <div class="numbertext">3 / 6</div>
                    <img class="galleryImgs" src="../images/3.png">
                </div>

                <!-- image 4: -->
                <div class="mySlides fade">
                    <div class="numbertext">4 / 6</div>
                    <img class="galleryImgs" src="../images/4.jpg">
                </div>

                <!-- image 5: -->
                <div class="mySlides fade">
                    <div class="numbertext">5 / 6</div>
                    <img class="galleryImgs" src="../images/5.png">
                </div>
               
                 <!-- image 6: -->
                 <div class="mySlides fade">
                    <div class="numbertext">6 / 6</div>
                    <img class="galleryImgs" src="../images/6.jpg">
                </div>
                
                <!-- the arrows: -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

            </div>
                     <!--------------------------->
<!----------------------- show images in small bar ----------------------->
            <div>
                <span class="dot select" onclick="currentSlide(1)">
                    <img class="dot" src="../images/1.jpg"></span>
                <span class="dot select" onclick="currentSlide(2)">
                    <img class="dot" src="../images/2.jpg"></span>
                <span class="dot select" onclick="currentSlide(3)">
                    <img class="dot" src="../images/3.png"></span>
                <span class="dot select" onclick="currentSlide(4)">
                    <img class="dot" src="../images/4.jpg"></span>
                <span class="dot select" onclick="currentSlide(5)">
                    <img class="dot" src="../images/5.png"></span>
                <span class="dot select" onclick="currentSlide(6)">
                    <img class="dot" src="../images/6.jpg"></span>
            </div>
                          <!--------------------------->
        </div>
    </section>
<!--------------------------------- END SECTION --------------------------->
<br>
<br>
<!--------------------------------- START FOOTER --------------------------->
<div>
<?php include("../includes/footer.php");?>
</div>
<!--------------------------------- END FOOTER --------------------------->

<!--------------------------------- START JS --------------------------->
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        // this function helps to move to the next image
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        // this function helps to display the current image
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("select");
        if (n > slides.length) { // to back to the first image
            slideIndex = 1 
        }
        if (n < 1) { // to go to the last image
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) { // to display images in order
            slides[i].style.display = "none";
            dots[i].className = dots[i].className.replace(" activeSlide", "");
            dots[i].style.border = "none";
        }
        // this lines is for control of the bar of images
        console.log(slideIndex);
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].style.border = "4px solid pink";
        dots[slideIndex - 1].className += " activeSlide";
    }
</script>
<!--------------------------------- END JS --------------------------->

</body>
</html>