@extends('layout')

@section('Content')
    <table width="100%" cellspacing=2 cellpadding=2 border=0 align="">
        <tr height="" class="">
            <td width="70%" colspan=1 valign=top class="">
                <table width="100%" cellspacing=2 cellpadding=2 border=0 align="">
                    <tr height="" class="">
                        <td width="" colspan=1 valign=top class="">
                            <h2 class="futura">Bienvenue sur notre site <a href="https://www.facebook.com/pages/Qu%C3%A9bec-Natation/350622478305873" target="_BLANK"> <img border="0" src="img/facebook.png" width="25"></a></h2>

                            <p><span class=Soustitre>Québec Natation est une école de natation qui possède une expérience de plus de 40 ans dans le domaine de l'enseignement de la natation à Québec et les environs. Ses 160 employés en font la plus grosse école de natation dans la région de Québec et la deuxième au Québec, après la ville de Montréal.</span></p>



                            <p><span class=Texte>Nous offrons une programmation pour toutes les clientèles à partir de l'âge de six mois avec les programmes Préscolaire, Junior, Aquadultes, Assistant-Moniteur et Moniteur en sécurité aquatique de la Croix-Rouge. Pour les adolescents qui rechercheront éventuellement un emploi comme moniteur ou sauveteur, les cours des niveaux bronze et le cours de moniteur en sauvetage, de même que les cours de sauveteur national options piscine et plage continentale de la Société de Sauvetage font aussi parti de notre programme régulier.</p>

                            <p><span class=Texte>Les cours qui sont offert à Québec Natation inc. couvrent toute la programmation aquatique de la Croix-Rouge, les principaux programmes de la Société de Sauvetage et des programmes de maîtres nageurs, aquaforme, aquajogging et pré-post natal.</span></p>

                            <p><span class=Texte>Appelez nous sans tarder: (418) 687-4045</span></p>



                            <h6 class="futura">Moniteur et assistants moniteur : Envoyez votre candidature en ligne <a href="index.php?Section=CV">en cliquant ici</a></h6>

                            <h6 class="futura">Procédure de remboursement:  <a href="?Section=Procedure">cliquez ici</a></h6>

                        </td>
                    </tr>
                    <tr height="" class="">
                        <td width="" colspan=1 valign=top class="">
                            <br />

                            <br />

                        </td>
                    </tr>
                    <tr height="" class="">
                        <td width="" colspan=1 valign=top class="">
                            <table width="100%" cellspacing=2 cellpadding=2 border=0 align="">
                                <tr height="" class="">
                                    <td width="50%" colspan=1 valign=top class="">
                                        <table width="100%" cellspacing=2 cellpadding=2 border=0 align="">
                                            <tr height="" class="">
                                                <td width="" colspan=1 valign=top class="">
                                                    <span class=Titre><h4 class="futura">Pourquoi nous choisir?</h4></span>
                                                    <img src="img/raison.png" >
                                                </td>
                                            </tr>
                                            <tr height="" class="">
                                                <td width="" colspan=1 valign=top class="">
                                                    <p><span class=SousTitre>Raison numéro {{ $raison->numero }}: {{ $raison->titre }}</span></p>

                                                    <p><span class=Texte>{{ $raison->texte }}</span></p>

                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="50%" colspan=1 valign=top class="">
                                        <table width="100%" cellspacing=2 cellpadding=2 border=0 align="">
                                            <tr height="" class="">
                                                <td width="" colspan=1 valign=top class="">
                                                    <h4 class="futura">Dernière nouvelle</span></h4>
                                                    <p><span class=Texte>
<b>ALERTE! SAUVETEUR RECHERCHÉS</b><br>Nous sommes présentement à la recherche de sauveteurs Qualifiés pour travailler dans la région de la ville de Québec, sur la côte de beauprée, rive-sud de Québec et à Ste-Marie de beauce! Appelez (418) 687-4047 le plus tôt possible pour postuler!
</span></p>
                                                </td>
                                            </tr>
                                            </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr height="" class="">
                                    <td width="50%" colspan=1 valign=top class="">
                                        <div align=right>
                                            <a href="index.php?Section=Raison" target=""><span class=link><img src=img/plus.png border=0></span></a>
                                        </div>
                                    </td>
                                    <td width="50%" colspan=1 valign=top class="">
                                        <div align=right>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                    </tr>
                    </td>
                </table>
            </td>
            <td width="30%" colspan=1 valign=top class="">
                <table width="100%" cellspacing=2 cellpadding=2 border=0 align="">
                    <tr height="" class="">
                        <td width="" colspan=1 valign=top class="">
                            <table width="100%" cellspacing=2 cellpadding=2 border=0 align="">
                                <tr height="" class="">
                                    <td width="40%" colspan=1 valign=top class="">
                                        <a href="index.php?Section=Prescolaire" target=""><span class=link><img src='img/prescolaire.png' border=0></span></a>
                                    </td>
                                    <td width="60%" colspan=1 valign=top class="">
                                        <h6 class="futura"><a href=index.php?Section=Prescolaire>Cours Préscolaire</a></h6>

                                        <p><span class="Texte">Les cours colorés du programmes préscolaire sont parfaits pour les enfants de 6 mois à 6 ans</span></p>

                                    </td>
                                </tr>
                            </table>
                        </td>
                    <tr height="" class="">
                    <tr height="" class="">
                        <td width="" colspan=1 valign=top class="">
                            <img src="img/dottedline.png" >
                        </td>
                    </tr>
                    <tr height="" class="">
                        <td width="" colspan=1 valign=top class="">
                            <table width="100%" cellspacing=2 cellpadding=2 border=0 align="">
                                <tr height="" class="">
                                    <td width="40%" colspan=1 valign=top class="">
                                        <a href="index.php?Section=Junior" target=""><span class=link><img src='img/junior.png' border=0></span></a>
                                    </td>
                                    <td width="60%" colspan=1 valign=top class="">
                                        <h6 class="futura"><a href=index.php?Section=Junior>Cours Juniors</span></a></h6>

                                        <p><span class="Texte">Les cours juniors offrent une gradation numérotée aidant les enfants a visualiser leur progression dans l'apprentissages des nages et des techniques aquatiques</span></p>

                                    </td>
                                </tr>
                            </table>
                        </td>
                    <tr height="" class="">
                    <tr height="" class="">
                        <td width="" colspan=1 valign=top class="">
                            <img src="img/dottedline.png" >
                        </td>
                    </tr>
                    <tr height="" class="">
                        <td width="" colspan=1 valign=top class="">
                            <table width="100%" cellspacing=2 cellpadding=2 border=0 align="">
                                <tr height="" class="">
                                    <td width="40%" colspan=1 valign=top class="">
                                        <a href="index.php?Section=Adulte" target=""><span class=link><img src='img/adulte.png' border=0></span></a>
                                    </td>
                                    <td width="60%" colspan=1 valign=top class="">
                                        <h6 class="futura"><a href=index.php?Section=Adulte>Cours Adultes</a></h6>

                                        <p><span class="Texte">Les cours pour adultes sont offerts dans une grande variété, autant pour ceux qui veulent affronter leur peur de l'eau, que pour ceux qui veulent maitriser un style de nage en particulier, en passant par les cours excercices aquatiques pour se mettre en forme </span></p>

                                    </td>
                                </tr>
                            </table>
                        </td>
                    <tr height="" class="">
                    <tr height="" class="">
                        <td width="" colspan=1 valign=top class="">
                            <img src="img/dottedline.png" >
                        </td>
                    </tr>
                    <tr height="" class="">
                        <td width="" colspan=1 valign=top class="">
                            <table width="100%" cellspacing=2 cellpadding=2 border=0 align="">
                                <tr height="" class="">
                                    <td width="40%" colspan=1 valign=top class="">
                                        <a href="index.php?Section=Formation" target=""><span class=link><img src='img/formation.png' border=0></span></a>
                                    </td>
                                    <td width="60%" colspan=1 valign=top class="">
                                        <h6 class="futura"><a href=index.php?Section=Formation>Cours de formation</a></h6>

                                        <p><span class="Texte">Ces cours parrainées par la croix-rouge et la sociétés de sauvetage offrent l'enseignement nécessaire pour devenir sauveteur ou moniteur de natation.</span></p>

                                    </td>
                                </tr>
                            </table>
                        </td>
                    <tr height="" class="">
                    <tr height="" class="">
                        <td width="" colspan=1 valign=top class="">
                            <img src="img/dottedline.png" >
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
@endsection

