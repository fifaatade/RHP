
<section id="tableau" class="" style="width: 100%;">

    <div>
        <a href="{{route('export')}}" class="btn btn-success m-2 float-end " style="padding:5px;margin:15px; text-decoration:none;" > Télécharger</a>

    </div>
    <table class="" 
    style="
        border-collapse: collapse;
        border: 1px solid #ddd;
        width:100%;
        margin-top: 20px;
    ">
        <thead class="">
            <tr class="pt-4">
                <th style="border: 1px solid #ddd;
                    padding: 8px;background-color: #f2f2f2;"
                >Nom</th>
                <th style="border: 1px solid #ddd;
                    padding: 8px; background-color: #f2f2f2;">Prénom</th>
                <th style="border: 1px solid #ddd;
                    padding: 8px; background-color: #f2f2f2;">Université</th>
                <th style="border: 1px solid #ddd;
                    padding: 8px; background-color: #f2f2f2;">Filière</th>
                <th style="border: 1px solid #ddd;
                    padding: 8px; background-color: #f2f2f2;">Raison de la candidature</th>
                <th style="border: 1px solid #ddd;
                    padding: 8px; background-color: #f2f2f2;">Numéro de téléphone</th>
                <th style="border: 1px solid #ddd;
                    padding: 8px; background-color: #f2f2f2;">Adresse</th>
                <th style="border: 1px solid #ddd;
                    padding: 8px; background-color: #f2f2f2;">Passe-temps</th>
                <th style="border: 1px solid #ddd;
                    padding: 8px; background-color: #f2f2f2;">Membre d'une organisation</th>
                <th style="border: 1px solid #ddd;
                    padding: 8px; background-color: #f2f2f2;">Nom de l'organisation</th>
                <th style="border: 1px solid #ddd;
                    padding: 8px; background-color: #f2f2f2;">Profession</th>
                <th style="border: 1px solid #ddd;
                    padding: 8px; background-color: #f2f2f2;">Problème à résoudre</th>
                <th style="border: 1px solid #ddd;
                    padding: 8px; background-color: #f2f2f2;">Projet</th>
                <th style="border: 1px solid #ddd;
                    padding: 8px; background-color: #f2f2f2;">Secteur d'intérêt</th>
                <th style="border: 1px solid #ddd;
                    padding: 8px; background-color: #f2f2f2;">Autre secteur</th>                                        
                <th style="border: 1px solid #ddd;
                    padding: 8px; background-color: #f2f2f2;">Attente du programme</th>
                <th style="border: 1px solid #ddd;
                    padding: 8px; background-color: #f2f2f2;">Comment avez-vous entendu parler du programme ?</th>
                <th style="border: 1px solid #ddd;
                    padding: 8px; background-color: #f2f2f2;">Autre source (si applicable)</th>

                <th style="border: 1px solid #ddd;
                    padding: 8px; background-color: #f2f2f2;">Nom du projet</th>
                <th style="border: 1px solid #ddd;
                    padding: 8px; background-color: #f2f2f2;">Comment se faire de l'argent avec </th>
                <th style="border: 1px solid #ddd;
                padding: 8px; background-color: #f2f2f2;">avez-vous un binôme?</th>
                <th style="border: 1px solid #ddd;
                padding: 8px; background-color: #f2f2f2;">si oui, son nom?</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($candidates as $candidate)
            <tr>
                <td style="border: 1px solid #ddd;
                    padding: 8px;">{{ $candidate->nom }}</td>
                <td style="border: 1px solid #ddd;
                    padding: 8px;">{{ $candidate->prenom }}</td>
                <td style="border: 1px solid #ddd;
                    padding: 8px;">{{ $candidate->universite }}</td>
                <td style="border: 1px solid #ddd;
                    padding: 8px;">{{ $candidate->filiere }}</td>
                <td style="border: 1px solid #ddd;
                    padding: 8px;">{{ $candidate->raison }}</td>
                <td style="border: 1px solid #ddd;
                    padding: 8px;">{{ $candidate->numero }}</td>
                <td style="border: 1px solid #ddd;
                    padding: 8px;">{{ $candidate->address }}</td>
                <td style="border: 1px solid #ddd;
                    padding: 8px;">{{ $candidate->passeTemps }}</td>
                <td style="border: 1px solid #ddd;
                    padding: 8px;">
                    @if ($candidate->organisation_member)
                        Oui
                    @else
                        Non
                    @endif
                </td>
                <td style="border: 1px solid #ddd;
                    padding: 8px;">{{ $candidate->organisationName }}</td>
                <td style="border: 1px solid #ddd;
                    padding: 8px;">{{ $candidate->profession }}</td>
                <td style="border: 1px solid #ddd;
                    padding: 8px;">{{ $candidate->probleme }}</td>
                <td style="border: 1px solid #ddd;
                    padding: 8px;">{{ $candidate->projet }}</td>
                <td style="border: 1px solid #ddd;
                    padding: 8px;">{{ $candidate->secteur }}</td>
                <td style="border: 1px solid #ddd;
                    padding: 8px;">{{ $candidate->nameSecteur }}</td>
                <td style="border: 1px solid #ddd;
                    padding: 8px;">{{ $candidate->attente }}</td>
                <td style="border: 1px solid #ddd;
                    padding: 8px;">{{ $candidate->heard_about_project }}</td>
                <td style="border: 1px solid #ddd;
                    padding: 8px;">{{ $candidate->nameOther }}</td>

                <td style="border: 1px solid #ddd;
                padding: 8px;">{{ $candidate->nameProject }}</td>
                <td style="border: 1px solid #ddd;
                padding: 8px;">{{ $candidate->argent }}</td>
                <td style="border: 1px solid #ddd;
                    padding: 8px;">
                    @if ($candidate->binome)
                        Oui
                    @else
                        Non
                    @endif
                </td>
                <td style="border: 1px solid #ddd;
                padding: 8px;">{{ $candidate->binomeName }}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>


</section>

