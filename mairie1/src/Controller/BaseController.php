<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BaseController extends AbstractController
{
    #[Route('/wancourt', name: 'app_base')]
    public function index(): Response
    {
        return $this->render('base/index.html.twig', [
        ]);
    }

    #[Route('/wancourt/journal', name: 'app_journal')]
    public function journal(): Response
    {
        return $this->render('base/journal.html.twig', [
        ]);
    }
    #[Route('/wancourt/eau-ars', name: 'app_eau_ars')]
    public function eauARS(): Response
    {
        return $this->render('base/eau-ars.html.twig', [
        ]);
    }
    #[Route('/wancourt/election-2024', name: 'app_election2024')]
    public function election2024(): Response
    {
        return $this->render('base/election2024.html.twig', [
        ]);
    }
    #[Route('/wancourt/brocante', name: 'app_brocante')]
    public function brocante(): Response
    {
        return $this->render('base/brocante.html.twig', [
        ]);
    }
    #[Route('/wancourt/impot', name: 'app_impot')]
    public function impot(): Response
    {
        return $this->render('base/impot.html.twig', [
        ]);
    }
    #[Route('/wancourt/marche-et-vtt-16-mars-2024', name: 'app_marche')]
    public function vtt(): Response
    {
        return $this->render('base/marche.html.twig', [
        ]);
    }
    #[Route('/wancourt/cycliste', name: 'app_cycliste')]
    public function cycliste(): Response
    {
        return $this->render('base/cycliste.html.twig', [
        ]);
    }
    #[Route('/wancourt/ducasse', name: 'app_ducasse')]
    public function ducasse(): Response
    {
        return $this->render('base/ducasse.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie', name: 'app_mairie')]
    public function mairie(): Response
    {
        return $this->render('base/mairie.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/agenda', name: 'app_agenda')]
    public function agenda(): Response
    {
        return $this->render('base/agenda.html.twig', [
        ]);
    }
    
    #[Route('/wancourt/mairie/horaire', name: 'app_horaire')]
    public function horaire(): Response
    {
        return $this->render('base/horaire.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/information', name: 'app_info')]
    public function information(): Response
    {
        return $this->render('base/informations.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/commissions-et-delegations', name: 'app_commissions_et_delegations')]
    public function commission(): Response
    {
        return $this->render('base/commission.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/arretes-communaux', name: 'app_arrete_communaux')]
    public function arrete(): Response
    {
        return $this->render('base/arrete.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/arretes-communaux-ponctuel', name: 'app_arrete_communaux_ponctuel')]
    public function arretePonctuel(): Response
    {
        return $this->render('base/arrete-ponctuel.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/arretes-communaux-permanent', name: 'app_arrete_communaux_permanent')]
    public function arretePermanent(): Response
    {
        return $this->render('base/arrete-permanent.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/feux-vegetaux-potager', name: 'app_feux_vegetaux_potager')]
    public function feuxVegetauxPotager(): Response
    {
        return $this->render('base/feux-vegetaux-potager.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/bruits-voisinage', name: 'app_bruits_voisinages')]
    public function bruitsVoisinage(): Response
    {
        return $this->render('base/bruits-voisinages.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/feux-artifices', name: 'app_feux_artifices')]
    public function feuxArtifices(): Response
    {
        return $this->render('base/feux-artifices-prive.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/dejection-animale', name: 'app_dejection_animale')]
    public function dejection(): Response
    {
        return $this->render('base/dejection-animale.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/course-4-jours-dunkerque', name: 'app_course_dunkerque')]
    public function courseDunkerque(): Response
    {
        return $this->render('base/course-dunkerque.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/demarchage-a-domicile', name: 'app_demarchage_domicile')]
    public function demarchageDomicile(): Response
    {
        return $this->render('base/demarchage-domicile.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/cimetiere', name: 'app_cimetiere')]
    public function cimetiere(): Response
    {
        return $this->render('base/cimetiere.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/plan-cimetiere', name: 'app_plan_cimetiere')]
    public function planCimetiere(): Response
    {
        return $this->render('base/plan-cimetiere.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/reglement-cimetiere', name: 'app_reglement_cimetiere')]
    public function reglementCimetiere(): Response
    {
        return $this->render('base/reglement-cimetiere.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/vie-pratiques', name: 'app_vie_pratique')]
    public function viePratiques(): Response
    {
        return $this->render('base/vie-pratiques.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/etat-civil', name: 'app_etat_civil')]
    public function etatCivil(): Response
    {
        return $this->render('base/etat-civil.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/carte-nationale-identite', name: 'app_carte_nationale_identite')]
    public function carteNationaleIdentité(): Response
    {
        return $this->render('base/carte-nationale-identite.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/passeport-biometrique', name: 'app_passeport_biometrique')]
    public function passeport(): Response
    {
        return $this->render('base/passeport-biometrique.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/certificat', name: 'app_certificat')]
    public function certificat(): Response
    {
        return $this->render('base/certificat.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/election', name: 'app_election')]
    public function election(): Response
    {
        return $this->render('base/election.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/armee', name: 'app_armee')]
    public function armee(): Response
    {
        return $this->render('base/armee.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/info-utiles', name: 'app_info_utiles')]
    public function infosUtiles(): Response
    {
        return $this->render('base/infos-utiles.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/ccas-aides-ponctuelles', name: 'app_ccas_aides_ponctuelles')]
    public function ccasAidesPonctuelles(): Response
    {
        return $this->render('base/ccas-aide-ponctuelle.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/ccas', name: 'app_ccas')]
    public function ccas(): Response
    {
        return $this->render('base/ccas.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/ccas-aide-energie', name: 'app_ccas_aide_energie')]
    public function ccasEnergie(): Response
    {
        return $this->render('base/ccas-energie.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/ccas-aide-subsistance', name: 'app_ccas_aide_subsistance')]
    public function ccasSubsistance(): Response
    {
        return $this->render('base/ccas-subsistance.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/ccas-aide-cantine', name: 'app_ccas_aide_cantine')]
    public function ccasCantine(): Response
    {
        return $this->render('base/ccas-cantine.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/ccas-bourse-etudiant', name: 'app_ccas_bourse_etudiant')]
    public function ccasBourseEtudiant(): Response
    {
        return $this->render('base/ccas-bourse-etudiant.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/ccas-aide-pratique-sportive-culturelle', name: 'app_ccas_aide_sportive_culturelle')]
    public function ccasPratiqueSportiveCulturelle(): Response
    {
        return $this->render('base/ccas-sportive-culturelle.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/ccas-centre-loisir-vacance-scolaire', name: 'app_ccas_centre_loisir')]
    public function ccasCentreLoisir(): Response
    {
        return $this->render('base/ccas-centre-loisir.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/ccas-infos-coordonnées-utiles', name: 'app_ccas_info_utile')]
    public function ccasInfoUtile(): Response
    {
        return $this->render('base/ccas-info-utile.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/ccas-mutuelle-pour-tous', name: 'app_ccas_mutuelle_pour_tous')]
    public function ccasMutuelleTous(): Response
    {
        return $this->render('base/ccas-mutuelle-tous.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/ccas-pass-jeunes', name: 'app_ccas_pass_jeunes')]
    public function ccasPassJeunes(): Response
    {
        return $this->render('base/ccas-pass-jeune.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/ccas-formulaire', name: 'app_ccas_formulaire')]
    public function ccasFormulaire(): Response
    {
        return $this->render('base/ccas-formulaire.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/urbanisme', name: 'app_urbanisme')]
    public function urbanisme(): Response
    {
        return $this->render('base/urbanisme.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/planning-horaires', name: 'app_planning')]
    public function planning(): Response
    {
        return $this->render('base/planning.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/dechets-vert', name: 'app_dechet_vert')]
    public function dechetVert(): Response
    {
        return $this->render('base/dechet-vert.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/passage-smav', name: 'app_smav')]
    public function passageSMAV(): Response
    {
        return $this->render('base/smav.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/artis', name: 'app_artis')]
    public function artis(): Response
    {
        return $this->render('base/artis.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/vie-associative', name: 'app_vie_associative')]
    public function vieAssociative(): Response
    {
        return $this->render('base/vie-associative.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/fitclub', name: 'app_fitclub')]
    public function fitclub(): Response
    {
        return $this->render('base/fitclub.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/association-parent-eleve', name: 'app_association_parents_eleves')]
    public function associationParentEleve(): Response
    {
        return $this->render('base/parent-eleve.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/amicale-des-anciens', name: 'app_amicale_des_anciens')]
    public function amicaleDesAnciens(): Response
    {
        return $this->render('base/amicale-des-anciens.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/sophrologie', name: 'app_sophrologie')]
    public function sophrologie(): Response
    {
        return $this->render('base/sophrologie.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/art-coeur', name: 'app_art_coeur')]
    public function artCoeur(): Response
    {
        return $this->render('base/art-coeur.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/bibliotheque', name: 'app_bibliotheque')]
    public function bibliotheque(): Response
    {
        return $this->render('base/bibliotheque.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/comite-des-fetes', name: 'app_comite_des_fetes')]
    public function comiteFetes(): Response
    {
        return $this->render('base/comite-des-fetes.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/endurance', name: 'app_endurance')]
    public function endurance(): Response
    {
        return $this->render('base/endurance.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/location-des-salles', name: 'app_location_des_salles')]
    public function location(): Response
    {
        return $this->render('base/locations-des-salles.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/salles-des-fetes-rue-de-flandres', name: 'app_rue_flandres')]
    public function flandres(): Response
    {
        return $this->render('base/flandres.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/salles-des-associations-rue-alsace', name: 'app_rue_alsace')]
    public function alsace(): Response
    {
        return $this->render('base/alsace.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/education', name: 'app_education')]
    public function education(): Response
    {
        return $this->render('base/education.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/education-rpi', name: 'app_rpi')]
    public function rpi(): Response
    {
        return $this->render('base/rpi.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/relais-petite-enfance', name: 'app_rpe')]
    public function assistantesMaternelles(): Response
    {
        return $this->render('base/rpe.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/hier-et-jadis', name: 'app_hier_jadis')]
    public function hierEtJadis(): Response
    {
        return $this->render('base/hier_jadis.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/hier', name: 'app_hier')]
    public function hier(): Response
    {
        return $this->render('base/hier.html.twig', [
        ]);
    }
    #[Route('/wancourt/mairie/jadis', name: 'app_jadis')]
    public function jadis(): Response
    {
        return $this->render('base/jadis.html.twig', [
        ]);
    }
    
}
