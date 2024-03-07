<section class="stats-section my-5">
    <div class="container">
        <div class="row g-4 stat">
            <div class="col-12 col-sm-6 col-lg-3 col- stats-div-container text-center">
                <div class="stats-div">
                    <i class="fa-solid fa-venus"></i>
                    <div><strong>327</strong><span>+</span></div>
                </div>
                <h4 class="text-white">
                    Etudiantes 
                    <br>
                    Impactées
                </h4>
            </div>

            
            <div class="col-12 col-sm-6 col-lg-3 stats-div-container text-center">
                <div class="stats-div">
                    <i class="fa-solid fa-clipboard"></i>
                    <div><strong>45 </strong><span>+</span></div>
                </div>
                <h4 class="text-white">
                    Projets
                    <br>
                    Retenus
                </h4>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 stats-div-container text-center">
                <div class="stats-div">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <div><strong>20</strong><span>+</span></div>
                </div>
                <h4 class="text-white">
                    Filles
                    <br>
                    Formées
                </h4>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 stats-div-container text-center">
                <div class="stats-div">
                    <i class="fa-solid fa-school"></i>
                    <div><strong>2</strong><span>+</span></div>
                </div>
                <h4 class="text-white">
                    Universités
                    <br>
                    Partenaires
                </h4>
            </div>

        </div>
    </div>
</section>

<style scoped>
.stats-section {
    padding: 80px;
    background-image: linear-gradient( 0deg, rgba(0, 0, 0, .6), black), url({{asset('images/statbg.png')}});
    background-repeat: no-repeat;
    background-size: cover;
    color: white;
}
sup{
    font-size:16px !important;
    padding-left:35px;
    padding-top:13px;
}
i{
    color: green !important;
}
.stats-div-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    color: white;
    margin-bottom: 24px;
    transition: transform 0.5s;
}

.stats-div-container h4 {
    margin-top: 10px;
    font-family: 'Montserrat-Bold', sans-serif;

}

.stats-div-container:hover {
    transform: translateY(-5%);
}

.stats-div {
    background-color: black;
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
    border: solid 1px white;
    border-radius: 5px;
    width: 120px;
    height: 120px;
    font-size: 24px;
    opacity: 1;
}

.stats-div i {
    color: red;
    width: 28px;
    height: 28px;
}

.stats-div div {
    position: relative;
}

.stats-div span {
    position: absolute;
    bottom: 12px;
    font-size: 18px;
}
.stats-div strong {
  transition: all 1s ease-in-out; 
}


</style>

<script>
const statsSection = document.querySelector('.stats-section');
const stats = statsSection.querySelectorAll('.stats-div strong'); // Select strong elements within .stats-div

const options = {
  root: null, // Observe the entire viewport
  rootMargin: '0px 0px -200px 0px', // Start observing 200px before the section enters the viewport
  threshold: 0 // Trigger animation as soon as the section becomes visible
};

const observer = new IntersectionObserver(entries => {
  if (entries[0].isIntersecting) {
    stats.forEach(stat => {
      const targetNumber = parseInt(stat.textContent);
      let currentNumber = 0;

      const animate = () => {
        currentNumber++;
        stat.textContent = currentNumber;

        if (currentNumber < targetNumber) {
          requestAnimationFrame(animate);
        }
      };

      animate(); // Start animation
    });
  }
}, options);

observer.observe(statsSection); // Observe the stats section

</script>