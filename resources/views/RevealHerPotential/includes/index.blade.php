
<section class="" id=" ">
    <div id="background" class="carousel slide carousel-fade" data-bs-ride="carousel" >
        <div class="carousel-inner" >
            <div class="carousel-item active">
                <img src="{{asset('images/Pictures template/2 slide.png')}}" class="d-block w-100" alt="..." >
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/Pictures template/3 slide.png')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/Pictures template/63.png')}}" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <div class="banner row" >
        <div class="col banner-left container-sm">
            <div class="container-sm">
                <img src="{{asset('images/Make your Idea a reality.png')}}" alt="" height="480">
            </div>
            <div  class="container-sm banner-button">
                <a href="{{route('candidate')}}" class="  " > CANDIDATER MAINTENANT</a>
            </div> 

<div id="loadingOverlay" class="hidden">
    </div>

        </div>
        <div class="col banner-right">
            <img src="{{asset('images/HeroP 01.png')}}" alt="" width="500">
        </div>
    </div>

</section>

<section id="description" class="  pb-5" >
    <div class=" pt-5 container-sm">
        <div class="d-flex row  ">
            <div class="col">
                <h2 class=" text-center">
                    DESCRIPTION
                </h2>
                <p class="  pt-5">
                    Le projet RHP est un programme de pré-idéation, idéation <br>lancé par theSPACE pour offrir une assistance complète aux <br>jeunes étudiantes désireuses de lancer leur idée d’entreprise.
                </p>
            </div>
        </div>
    </div>
</section>
@include('RevealHerPotential.includes.axes')

@include('RevealHerPotential.includes.objectif')

<section id="about" class="mt-5 pt-5 pb-5" >
    <div class="pb-5 pt-5 container-sm">
        <div class=" row  ">
            <div class="col">
                <h2 class=" text-center mb-5">
                    A PROPOS
                </h2>
                <div class="d-flex justify-content-center align-items-center">
                    <p class="  pt-5 pb-5 ">
                         Le projet propose un ensemble de programmes et de services qui visent à aider les femmes et les filles à développer leurs compétences, à acquérir de l'expérience professionnelle et à accéder à des opportunités économiques.

                        Le projet Reveal Her Potential a été lancé en 2022 et il a déjà touché des milliers de femmes et de filles au Bénin.

                    </p>
                    <img src="{{asset('images/Pictures template/6.png')}}"class="col mx-5 " alt="..." >
                </div>
            </div>
        </div>
    </div>
</section>

@include('RevealHerPotential.includes.gallery')
@include('RevealHerPotential.includes.calendrier')
<style scoped>
.banner-button a{
    box-shadow: #FFD600 0px 5px 15px;

}
</style>