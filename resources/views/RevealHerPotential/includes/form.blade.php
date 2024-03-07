
<section id="form" style="background-color:white;padding:50px 0;margin-bottom:5px">
    <div class="mb-5 mt-5 container-sm">
        <div>
            <div class=" ">
                <form action="{{route('store')}}" method="post" class="row g-3" id="myForm">
                    @csrf

                    <input type="hidden" name="currentForm" id="currentForm" value="1">

                    <div id="etape1" class="d-block">
                        <h2 class=" mt-5 mb-5">
                            Vos informations
                        </h2>
                        <!--  -->
                        <div class="col-md-4">
                        <label for="validationDefault01" class="form-label">NOM</label>
                        <input type="text" class="form-control" name="nom" pattern="[a-zA-Z\s]*"  placeholder="Mark" required>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">PRENOMS</label>
                        <input type="text" class="form-control" name="prenom" pattern="[a-zA-Z\s]*"  placeholder="Otto" required>
                    </div>
                    <fieldset class="mb-3">
                        <legend class="col-form-label pb-3">PROFESSION</legend>
                        <div class="col-sm-10 mx-5">
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" name="profession" id="etudiante" value="etudiante" checked> 
                                <label class="form-check-label" for="gridRadios1">
                                    étudiante
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" name="profession" id="professionelle" value="professionnelle">
                                <label class="form-check-label" for="gridRadios2">
                                    professionnelle
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="col-md-4">
                        <label for="validationDefault01" class="form-label">UNIVERSITE/ENTREPRISE</label>
                        <input type="text" class="form-control" name="universite" pattern="[a-zA-Z\s]*"  placeholder="Pigier" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault03" class="form-label">SECTEUR/FILIERE</label>
                        <input type="text" class="form-control" name="filiere" pattern="[a-zA-Z\s]*"  required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault03" class="form-label">POURQUOI AVEZ-VOUS CHOISI CE SECTEUR?</label>
                        <input type="text" class="form-control" name="raison" pattern="[a-zA-Z\s]*"  required>
                    </div>
                    <div class="col-12">
                        <label for="validationDefault03" class="form-label">NUMERO DE TELEPHONE</label>
                        <input type="text" class="form-control" name="numero" pattern="[0-9\s]*" placeholder="XXX XXX XXX XX" required>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">VILLE ET QUARTIER DE RESIDENCE?</label>
                        <input type="text" class="form-control" name="address" pattern="[a-zA-Z0-9\s]*" placeholder="1234 Main St">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">VOS PASSES-TEMPS</label>
                        <input type="text" class="form-control" name="passeTemps"  pattern="[a-zA-Z\s]*" placeholder="lecture, musique">
                    </div>
                    <fieldset class="mb-3">
                        <legend class="col-form-label pb-3">ETES-VOUS MEMBRE D'UNE ORGANISATION ?</legend>
                        <div class="col-sm-10 mx-5">
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" name="organisation_member" id="yesOrganisation" value="1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    oui
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" name="organisation_member" id="noOrganisation" value="0">
                                <label class="form-check-label" for="gridRadios2">
                                    non
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <div class="col-12">
                        <label for="inputAddress" class="form-label">SI OUI LAQUELLE?</label>
                        <input type="text" class="form-control" name="organisationName"  pattern="[a-zA-Z\s]*"  placeholder="....">
                    </div>
                        <div class="col-12">
                            <button class="btn btn-primary btn-next" type="button" style="padding:10px; font-size:18px;">Suivant</button>
                        </div>
                    </div>

                    <div id="etape2" class="d-none">
                        <h2 class=" mb-5 mt-5">
                            A propos du projet
                        </h2>
                        <!--  -->
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label"> QUEL PROBLEME AVEZ-VOUS IDENTIFIÉ ?</label>
                        <input type="text" class="form-control" name="probleme"  pattern="[a-zA-Z\s]*"  placeholder="">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label"> QUEL EST LE NOM DU PROJET/BUSINESS ?</label>
                        <input type="text" class="form-control" name="nameProject"  pattern="[a-zA-Z\s]*"  placeholder="">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label"> QUELLE EST VOTRE IDÉE DE PROJET ?<br><small class="mx-3">Ne dépassez pas 300 mots.</small></label>
                        <textarea type="text" class="form-control" name="projet" maxlength="" placeholder=""></textarea>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label"> COMMENT COMPTEZ-VOUS GAGNER DE L'ARGENT AVEC VOTRE IDEE DE PROJET ?<br><small class="mx-3">Ne dépassez pas 300 mots.</small></label>
                        <textarea type="text" class="form-control" name="argent" maxlength="" placeholder=""></textarea>
                    </div>
                    <fieldset class=" mb-3">
                        <legend class="col-form-label pb-3">QUEL EST LE SECTEUR IDENTIFIÉ?</legend>
                        <div class="col-sm-10 mx-5">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="secteur" id="tic" value="tic">
                                <label class="form-check-label" for="gridRadios1">
                                tic
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" name="secteur" id="finance" value="finance">
                                <label class="form-check-label" for="gridRadios2">
                                finance
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" name="secteur" id="sante" value="sante">
                                <label class="form-check-label" for="gridRadios2">
                                santé
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" name="secteur" id="energie" value="energie">
                                <label class="form-check-label" for="gridRadios2">
                                énergie renouvelable
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" name="secteur" id="autreSecteur" value="autreSecteur">
                                <label class="form-check-label" for="gridRadios2">
                                autre
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <label class="form-label autre" for="gridRadios2">
                                AUTRE: 
                                </label>
                                <input type="text" class="form-control" name="nameSecteur" placeholder="">
                            </div>
                        </div>
                    </fieldset>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label"> Quel sont vos attentes vis à vis de ce projet?</label>
                        <input type="text" class="form-control" name="attente" pattern="[a-zA-Z\s]*" placeholder=""/>
                    </div>
                    <fieldset class=" mb-3">
                        <legend class="col-form-labe pb-3">COMMENT AVEZ-VOUS ENTENDU PARLER DU PROJET?</legend>
                        <div class="col-sm-10 mx-5">
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" name="heard_about_project" id="seanceInfo" value="seanceInfo"  >
                                <label class="form-check-label" for="gridRadios1">
                                à travers les séances d'informations
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" name="heard_about_project" id="reseauxSocial" value="reseauxSocial">
                                <label class="form-check-label" for="gridRadios2">
                                sur les réseaux sociaux
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" name="heard_about_project" id="ami" value="ami">
                                <label class="form-check-label" for="gridRadios2">
                                à travers un ami
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" name="heard_about_project" id="autre" value="autre">
                                <label class="form-check-label " for="gridRadios2">
                                autre
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <label class="form-label autre" for="gridRadios2">
                                AUTRE: 
                                </label>
                                <input type="text" class="form-control" name="nameOther" placeholder="">

                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="mb-3">
                        <legend class="col-form-label pb-3">ÊTES-VOUS EN BINÔME ?</legend>
                        <div class="col-sm-10 mx-5">
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" name="binome" id="yes" value="1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    oui
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" name="binome" id="no" value="0">
                                <label class="form-check-label" for="gridRadios2">
                                    non
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <div class="col-12">
                        <label for="inputAddress" class="form-label">SI OUI VEUILLEZ DONNER SON NOM,PRENOM ET CONTACT ?</label>
                        <textarea type="text" class="form-control" name="binomeName" maxlength="" placeholder=""></textarea>
                    </div>
                    <div class="d-flex">
                        <div class="mx-3">
                            <button class="btn btn-secondary btn-prev" type="button" style="padding:10px; font-size:18px;">Précédent</button>
                        </div>
                        <div class="">
                            <button class="btn btn-success" type="submit" style="padding:10px; font-size:18px;">Soumettre</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

<script>
// Gestion des boutons Suivant et Précédent
const form = document.getElementById('myForm');
const btnNext = document.querySelector('.btn-next');
const btnPrev = document.querySelector('.btn-prev');
const etape1 = document.getElementById('etape1');
const etape2 = document.getElementById('etape2');

// Masquer l'étape 2 au démarrage
etape2.classList.add('d-none');

// Fonction pour passer à l'étape suivante
function goToNextStep() {
    const currentStep = parseInt(document.getElementById('currentForm').value);
    document.getElementById('currentForm').value = currentStep + 1; // Incrémenter l'étape

    if (currentStep === 1) {
        etape1.classList.add('d-none');
        etape2.classList.remove('d-none');
    } else {
        // Redirection vers la page de confirmation ou d'accueil si dernière étape
        form.submit();
    }
}

// Fonction pour revenir à l'étape précédente
function goToPreviousStep() {
    const currentStep = parseInt(document.getElementById('currentForm').value);
    document.getElementById('currentForm').value = currentStep - 1; // Décrémenter l'étape

    if (currentStep === 2) {
        etape2.classList.add('d-none');
        etape1.classList.remove('d-none');
    }
}

// Ajouter les gestionnaires d'événement aux boutons
btnNext.addEventListener('click', goToNextStep);
btnPrev.addEventListener('click', goToPreviousStep);




</script>