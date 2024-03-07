

<section id="gallery">
    <h2 class="text-center text-black mb-5 mt-5"> Edition passée</h2>
    @include('RevealHerPotential.includes.stat')

    <div class="container-sm">
        <div class="mt-2 gallery mb-5 d-flex">
                <div id="carouselExampleControls" class="carousel slide text-center" data-bs-ride="carousel">
                    <div class="carousel-inner text-center">
                        <div class="carousel-item active mx-2">
                            <img src="{{asset('images/DSC_0039.JPG')}}" class="mx-2" width="400" onclick="openModal();currentSlide(1)"  height="500">
                            <img src="{{asset('images/DSC_0049.JPG')}}"  class="mx-2" width="400" onclick="openModal();currentSlide(2)"  height="500">
                            <img src="{{asset('images/DSC_0081.JPG')}}"  class="mx-2" width="400" onclick="openModal();currentSlide(3)"  height="500">

                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('images/DSC_0184.JPG')}}" onclick="openModal();currentSlide(4)"   class="mx-2" width="400" height="500">
                            <img src="{{asset('images/DSC_0190.JPG')}}" onclick="openModal();currentSlide(5)"  class="mx-2" width="400" height="500">
                            <img src="{{asset('images/DSC_0193.JPG')}}" onclick="openModal();currentSlide(6)"  class="mx-2" width="400" height="500">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('images/DSC_0196.JPG')}}" onclick="openModal();currentSlide(7)"  class="mx-2" width="400" height="500">
                            <img src="{{asset('images/DSC_0206.JPG')}}" onclick="openModal();currentSlide(8)"  class="mx-2" width="400" height="500">
                            <img src="{{asset('images/DSC_0218.JPG')}}" onclick="openModal();currentSlide(9)"  class="mx-2" width="400" height="500">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
        </div>
        <div class="mt-2 gallery mb-5 d-flex">
            <div id="carouselExampleControls2" class="carousel slide text-center" data-bs-ride="carousel">
                <div class="carousel-inner text-center">
                    <div class="carousel-item active mx-2">
                        <img src="{{asset('images/DSC_0226.JPG')}}" onclick="openModal();currentSlide(10)"  class="mx-2" width="400" height="500">
                        <img src="{{asset('images/DSC_0240.JPG')}}" onclick="openModal();currentSlide(11)"  class="mx-2" width="400" height="500">
                        <img src="{{asset('images/DSC_0275.JPG')}}" onclick="openModal();currentSlide(12)"  class="mx-2" width="400" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/DSC_0279.JPG')}}" onclick="openModal();currentSlide(13)"  class="mx-2" width="400" height="500">
                        <img src="{{asset('images/DSC_0776.JPG')}}" onclick="openModal();currentSlide(14)"  class="mx-2" width="400" height="500">
                        <img src="{{asset('images/DSC_0783.JPG')}}" onclick="openModal();currentSlide(15)"  class="mx-2" width="400" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/DSC_0793.JPG')}}" onclick="openModal();currentSlide(16)"  class="mx-2" width="400" height="500">
                        <img src="{{asset('images/DSC_0848.JPG')}}" onclick="openModal();currentSlide(17)"  class="mx-2" width="400" height="500">
                        <img src="{{asset('images/DSC_0884.JPG')}}" onclick="openModal();currentSlide(18)"  class="mx-2" width="400" height="500">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
    </div>


    <style scoped>
    


    .row:after {onclick
    content: "";
    display: table;
    clear: both;
    }

    .column {
    float: left;
    width: 10%;
    margin-bottom:5px;
    }

    /* The Modal (background) */
    .modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.882);
    }

    /* Modal Content */
    .modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    width: 90%;
    max-width: 1200px;
    }

    /* The Close Button */
    .close {
    color: white;
    position: absolute;
    top: 10px;
    right: 25px;
    font-size: 35px;
    font-weight: bold;
    }

    .close:hover,
    .close:focus {
    color: #999;
    text-decoration: none;
    cursor: pointer;
    }

    .mySlides {
    display: none;
    }

    .cursor {
    cursor: pointer;
    }

    /* Next & previous buttons */
    .prev,
    .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -50px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
    right: 0;
    border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
    }

    /* Number text (1/3 etc) */
    .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
    }

    .caption-container {
    text-align: center;
    background-color: black;
    padding: 2px 16px;
    color: white;
    }

    .demo {
    opacity: 0.6;
    }

    .active,
    .demo:hover {
    opacity: 1;
    }


    </style> 
    

    <div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">

        <div class="mySlides">
        <div class="numbertext">1 / 18</div>
        <img src="{{asset('images/DSC_0039.JPG')}}" style="width:100%">
        </div>

        <div class="mySlides">
        <div class="numbertext">2 / 18</div>
        <img src="{{asset('images/DSC_0049.JPG')}}" style="width:100%">
        </div>

        <div class="mySlides">
        <div class="numbertext">3 / 18</div>
        <img src="{{asset('images/DSC_0081.JPG')}}" style="width:100%">
        </div>
        
        <div class="mySlides">
        <div class="numbertext">4 / 18</div>
        <img src="{{asset('images/DSC_0184.JPG')}}" style="width:100%">
        </div>
        <div class="mySlides">
        <div class="numbertext">5 / 18</div>
        <img src="{{asset('images/DSC_0190.JPG')}}" style="width:100%">
        </div>

        <div class="mySlides">
        <div class="numbertext">6 / 18</div>
        <img src="{{asset('images/DSC_0193.JPG')}}" style="width:100%">
        </div>

        <div class="mySlides">
        <div class="numbertext">7 / 18</div>
        <img src="{{asset('images/DSC_0196.JPG')}}" style="width:100%">
        </div>
        
        <div class="mySlides">
        <div class="numbertext">8 / 18</div>
        <img src="{{asset('images/DSC_0206.JPG')}}" style="width:100%">
        </div>
        <div class="mySlides">
        <div class="numbertext">9 / 18</div>
        <img src="{{asset('images/DSC_0218.JPG')}}" style="width:100%">
        </div>

        <div class="mySlides">
        <div class="numbertext">10 / 18</div>
        <img src="{{asset('images/DSC_0226.JPG')}}" style="width:100%">
        </div>

        <div class="mySlides">
        <div class="numbertext">11 / 18</div>
        <img src="{{asset('images/DSC_0240.JPG')}}" style="width:100%">
        </div>
        
        <div class="mySlides">
        <div class="numbertext">12 / 18</div>
        <img src="{{asset('images/DSC_0275.JPG')}}" style="width:100%">
        </div>

        <div class="mySlides">
        <div class="numbertext">13 / 18</div>
        <img src="{{asset('images/DSC_0279.JPG')}}" style="width:100%">
        </div>

        <div class="mySlides">
        <div class="numbertext">14 / 18</div>
        <img src="{{asset('images/DSC_0776.JPG')}}" style="width:100%">
        </div>

        <div class="mySlides">
        <div class="numbertext">15 / 18</div>
        <img src="{{asset('images/DSC_0783.JPG')}}" style="width:100%">
        </div>
        
        <div class="mySlides">
        <div class="numbertext">16 / 18</div>
        <img src="{{asset('images/DSC_0793.JPG')}}" style="width:100%">
        </div>
        <div class="mySlides">
        <div class="numbertext">17 / 18</div>
        <img src="{{asset('images/DSC_0848.JPG')}}" style="width:100%">
        </div>

        <div class="mySlides">
        <div class="numbertext">18 / 18</div>
        <img src="{{asset('images/DSC_0884.JPG')}}" style="width:100%">
        </div>

        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="caption-container">
        <p id="caption"></p>
        </div>
        <div class="d-flex ">
            <div class="">
                <img class="demo cursor" src="{{asset('images/DSC_0039.JPG')}}" style="width:100%" onclick="currentSlide(1)" alt="RHP">
            </div>
            <div class="">
                <img class="demo cursor" src="{{asset('images/DSC_0049.JPG')}}" style="width:100%" onclick="currentSlide(2)" alt="RHP">
            </div>
            <div class="">
                <img class="demo cursor" src="{{asset('images/DSC_0081.JPG')}}" style="width:100%" onclick="currentSlide(3)" alt="RHP">
            </div>
            <div class="">
                <img class="demo cursor" src="{{asset('images/DSC_0184.JPG')}}" style="width:100%" onclick="currentSlide(4)" alt="RHP">
            </div>
            <div class="">
                <img class="demo cursor" src="{{asset('images/DSC_0190.JPG')}}" style="width:100%" onclick="currentSlide(1)" alt="RHP">
            </div>
            <div class="">
                <img class="demo cursor" src="{{asset('images/DSC_0193.JPG')}}" style="width:100%" onclick="currentSlide(2)" alt="RHP">
            </div>
            <div class="">
                <img class="demo cursor" src="{{asset('images/DSC_0196.JPG')}}" style="width:100%" onclick="currentSlide(3)" alt="RHP">
            </div>
            <div class="">
                <img class="demo cursor" src="{{asset('images/DSC_0206.JPG')}}" style="width:100%" onclick="currentSlide(4)" alt="RHP">
            </div>
            <div class="">
                <img class="demo cursor" src="{{asset('images/DSC_0218.JPG')}}" style="width:100%" onclick="currentSlide(1)" alt="RHP">
            </div>
            <div class="">
                <img class="demo cursor" src="{{asset('images/DSC_0226.JPG')}}" style="width:100%" onclick="currentSlide(2)" alt="RHP">
            </div>
            <div class="">
                <img class="demo cursor" src="{{asset('images/DSC_0240.JPG')}}" style="width:100%" onclick="currentSlide(3)" alt="RHP">
            </div>
            <div class="">
                <img class="demo cursor" src="{{asset('images/DSC_0275.JPG')}}" style="width:100%" onclick="currentSlide(4)" alt="RHP">
            </div>
            <div class="">
                <img class="demo cursor" src="{{asset('images/DSC_0279.JPG')}}" style="width:100%" onclick="currentSlide(1)" alt="RHP">
            </div>
            <div class="">
                <img class="demo cursor" src="{{asset('images/DSC_0776.JPG')}}" style="width:100%" onclick="currentSlide(2)" alt="RHP">
            </div>
            <div class="">
                <img class="demo cursor" src="{{asset('images/DSC_0783.JPG')}}" style="width:100%" onclick="currentSlide(3)" alt="RHP">
            </div>
            <div class="">
                <img class="demo cursor" src="{{asset('images/DSC_0793.JPG')}}" style="width:100%" onclick="currentSlide(4)" alt="RHP">
            </div>
            <div class="">
                <img class="demo cursor" src="{{asset('images/DSC_0848.JPG')}}" style="width:100%" onclick="currentSlide(1)" alt="RHP">
            </div>
            <div class="">
                <img class="demo cursor" src="{{asset('images/DSC_0884.JPG')}}" style="width:100%" onclick="currentSlide(2)" alt="RHP">
            </div>
            
        </div>
    </div>
    </div>

    <script>
    function openModal() {
    document.getElementById("myModal").style.display = "block";
    }

    function closeModal() {
    document.getElementById("myModal").style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
    showSlides(slideIndex += n);
    }

    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
    }
    </script>
        


</section> 


