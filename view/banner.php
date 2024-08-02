<div class="bigbox">
    <div class="smallbox">

        <div class="boxsmallest">
            <div class="banner1">
                <div class="slideshow">
                    <img  class="slide" src="./img/image/15-pro-max-sliding-new-th11.jpg" style="
    width: 1430px;
    height: 420px; border-radius: 15px;position: relative;
    top: -10px;left:-5px;box-shadow: 8px 8px 8px gray;" alt="Banner 1">
                    <img class="slide" src="./img/banner1.jpg" style="
   width: 1430px;
    height: 420px; border-radius: 15px;position: relative;
    top: -10px;left:-5px;box-shadow: 8px 8px 8px gray;"alt="Banner 2">
                    <img class="slide" src="./img/banner2.jpg" style="
    width: 1430px;
    height: 420px; border-radius: 15px;position: relative;
    top: -10px;left:-5px;box-shadow: 8px 8px 8px gray;" alt="Banner 3">
                    <img class="slide" src="./img/image/15-pro-max-sliding-new-th11.jpg" style="
   width: 1430px;
    height: 420px; border-radius: 15px;position: relative;
    top: -10px;left:-5px;box-shadow: 8px 8px 8px gray;" alt="Banner 4">
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="bigbox2">
    <img src="./img/image/copy.png" height="60px" alt="">
</div>
<script>
        // setintaval slideshow auto
        var slides = document.getElementsByClassName("slide");
        var currentSlide = 0;

        function showSlide(n) {
            // Hide all slides
            for (var i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            // Show the specified slide
            slides[n].style.display = "block";
        }

        function nextSlide() {
            currentSlide++;
            if (currentSlide >= slides.length) {
                currentSlide = 0;
            }
            showSlide(currentSlide);
        }

        function previousSlide() {
            currentSlide--;
            if (currentSlide < 0) {
                currentSlide = slides.length - 1;
            }
            showSlide(currentSlide);
        }

        // Show the first slide
        showSlide(currentSlide);

        setInterval(nextSlide, 3500);
        //menu
        var navLinks = document.getElementsByTagName("a");

        for (var i = 0; i < navLinks.length; i++) {
            navLinks[i].addEventListener("click", function () {
                for (var j = 0; j < navLinks.length; j++) {
                    navLinks[j].classList.remove("active");
                }
                this.classList.add("active");
            });
        }

    </script>
