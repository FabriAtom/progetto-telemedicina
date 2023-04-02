<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PsyCard;
use App\Models\PsySuicideAssessment;
use App\Models\PsyMentalHealthDepartment;
use App\Models\PsyRehabilitationPsychiatricCard;
use App\Models\PsyRating;
use App\Models\PsyUocDepartment;
use App\Models\PsySocialFolder;
use App\Models\PsyMembershipCard;

use Carbon\Carbon;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;


class PsyCardsController extends Controller
{
    public function index(Request $request){
        // dd($request->all());
        $result= PsyCard::all();
        if($result){
            return [ "errorNumber"=>0,"message"=>"OK","remarks" => $result];
        }else{
            return ['errorNumber'=>'5000','descrizione'=>'no records found'];
        }  
    }


    public function getPsyCardById(Request $request){
        if (PsyCard::where('id', '=', $request['id'])->exists()) {
            $query=PsyCard::where('id', '=', $request['id']);
            $psyCard=$query->get();

            return [ "errorNumber"=>0,"message"=>"OK","psyCard" => $psyCard,"psyCardId" => $request['id']];
        }else{
            return ['errorNumber'=>5000,'descrizione'=>'no records found'];
        }
    }


    public function getPsyCardsByUserIstanceId(Request $request){

        if (PsyCard::where('user_instance_id', '=', $request['id'])->exists()) {
            $query=PsyCard::where('user_instance_id', '=', $request['id']);
            $psyCard=$query->first();
            
            $PsySuicideAssessment=null;
            $allPsySuicideAssessments=null;

            $PsyMentalHealthDepartment=null;
            $allPsyMentalHealthDepartments=null;

            $PsyRehabilitationPsychiatricCard=null;
            $allPsyRehabilitationPsychiatricCards=null;

            $PsyRating=null;
            $allPsyRatings=null;

            $PsyUocDepartment=null;
            $allPsyUocDepartment=null;

            $PsySocialFolder=null;
            $allPsySocialFolder=null;

            $PsyMembershipCard=null;
            $allPsyMembershipCard=null;


       
            if (PsySuicideAssessment::where('psy_card_id', '=', $psyCard->id)->exists()) {
                $query=PsySuicideAssessment::where('psy_card_id', '=', $psyCard->id)->orderBy('sa_date', 'desc');
                $PsySuicideAssessment=$query->first();
                $allPsySuicideAssessments=PsySuicideAssessment::where('psy_card_id', '=', $psyCard->id)->orderBy('sa_date', 'desc')->get();
            }
            return [ "errorNumber"=>0,"message"=>"OK","psyCard" => $psyCard,"userIstanceId" => $request['id'], "PsySuicideAssessment"=>$PsySuicideAssessment,"allPsySuicideAssessments" => $allPsySuicideAssessments];


            if (PsyMentalHealthDepartment::where('psy_card_id', '=', $psyCard->id)->exists()) {
                $query=PsyMentalHealthDepartment::where('psy_card_id', '=', $psyCard->id)->orderBy('mh_date', 'desc');
                $PsyMentalHealthDepartment=$query->first();
                $allPsyMentalHealthDepartments=PsyMentalHealthDepartment::where('psy_card_id', '=', $psyCard->id)->orderBy('mh_date', 'desc')->get();
            }
            return [ "errorNumber"=>0,"message"=>"OK","psyCard" => $psyCard,"userIstanceId" => $request['id'], "PsyMentalHealthDepartment"=>$PsyMentalHealthDepartment,"allPsyMentalHealthDepartments" => $allPsyMentalHealthDepartments];

            if (PsyRehabilitationPsychiatricCard::where('psy_card_id', '=', $psyCard->id)->exists()) {
                $query=PsyRehabilitationPsychiatricCard::where('psy_card_id', '=', $psyCard->id)->orderBy('rp_date', 'desc');
                $PsyRehabilitationPsychiatricCard=$query->first();
                $allPsyRehabilitationPsychiatricCards=PsyRehabilitationPsychiatricCard::where('psy_card_id', '=', $psyCard->id)->orderBy('rp_date', 'desc')->get();
            }
            return [ "errorNumber"=>0,"message"=>"OK","psyCard" => $psyCard,"userIstanceId" => $request['id'], "PsyRehabilitationPsychiatricCard"=>$PsyRehabilitationPsychiatricCard,"allPsyRehabilitationPsychiatricCards" => $allPsyRehabilitationPsychiatricCards];

            // PSY_RATING
            if (PsyRating::where('psy_card_id', '=', $psyCard->id)->exists()) {
                $query=PsyRating::where('psy_card_id', '=', $psyCard->id)->orderBy('pr_date', 'desc');
                $PsyRating=$query->first();
                $allPsyRatings=PsyRating::where('psy_card_id', '=', $psyCard->id)->orderBy('pr_date', 'desc')->get();
            }
            return [ "errorNumber"=>0,"message"=>"OK","psyCard" => $psyCard,"userIstanceId" => $request['id'], "PsyRating"=>$PsyRating,"allPsyRatings" => $allPsyRatings];

            // PSY_UOC_DEPARTMENT
            if (PsyUocDepartment::where('psy_card_id', '=', $psyCard->id)->exists()) {
                $query=PsyUocDepartment::where('psy_card_id', '=', $psyCard->id)->orderBy('ud_date', 'desc');
                $PsyUocDepartment=$query->first();
                $allPsyUocDepartments=PsyUocDepartment::where('psy_card_id', '=', $psyCard->id)->orderBy('ud_date', 'desc')->get();
            }
            return [ "errorNumber"=>0,"message"=>"OK","psyCard" => $psyCard,"userIstanceId" => $request['id'], "PsyUocDepartment"=>$PsyUocDepartment,"allPsyUocDepartments" => $allPsyUocDepartments];

            // PSYSOCIALFOLDER
            if (PsySocialFolder::where('psy_card_id', '=', $psyCard->id)->exists()) {
                $query=PsySocialFolder::where('psy_card_id', '=', $psyCard->id)->orderBy('sf_date', 'desc');
                $PsySocialFolder=$query->first();
                $allPsySocialFolders=PsySocialFolder::where('psy_card_id', '=', $psyCard->id)->orderBy('sf_date', 'desc')->get();
            }
            return [ "errorNumber"=>0,"message"=>"OK","psyCard" => $psyCard,"userIstanceId" => $request['id'], "PsySocialFolder"=>$PsySocialFolder,"allPsySocialFolders" => $allPsySocialFolders];

            // PsyMembershipCard
            if (PsyMembershipCard::where('psy_card_id', '=', $psyCard->id)->exists()) {
                $query=PsyMembershipCard::where('psy_card_id', '=', $psyCard->id)->orderBy('mc_date', 'desc');
                $PsyMembershipCard=$query->first();
                $allPsyMembershipCards=PsyMembershipCard::where('psy_card_id', '=', $psyCard->id)->orderBy('mc_date', 'desc')->get();
            }
            return [ "errorNumber"=>0,"message"=>"OK","psyCard" => $psyCard,"userIstanceId" => $request['id'], "PsyMembershipCard"=>$PsyMembershipCard,"allPsyMembershipCards" => $allPsyMembershipCards];
            //return [ "errorNumber"=>0,"message"=>"OK","psyCard" => $psyCard,"userIstanceId" => $request['id'],"PsySuicideAssessment"=>$PsySuicideAssessment,"allPsySuicideAssessments" => $allPsySuicideAssessments, "PsyMentalHealthDepartment"=>$PsyMentalHealthDepartment,"allPsyMentalHealthDepartments" => $allPsyMentalHealthDepartments, "PsyRehabilitationPsychiatricCard"=>$PsyRehabilitationPsychiatricCard,"allPsyRehabilitationPsychiatricCards" => $allPsyRehabilitationPsychiatricCards];
            // return [ "errorNumber"=>0,"message"=>"OK","psyCard" => $psyCard,"userIstanceId" => $request['id'], "PsySuicideAssessment"=>$PsySuicideAssessment,"allPsySuicideAssessments" => $allPsySuicideAssessments];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }
    }

    // PsySuicideAssessment

    public function getCurrentSuicideAssessmentByPsyId(Request $request){
        if (PsySuicideAssessment::where('psy_card_id', '=', $request['id'])->exists()) {
            $query=PsySuicideAssessment::where('psy_card_id', '=', $request['id'])->orderBy('sa_date', 'desc');
            $PsySuicideAssessment=$query->first();
            return [ "errorNumber"=>0,"message"=>"OK","CurrentPsySuicideAssessment" => $PsySuicideAssessment,"PsyId" => $request['id']];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }  
    }
    
    // PsyMentalHealthDepartment

    public function getCurrentMentalHealthDepartmentByPsyId(Request $request){
        if (PsyMentalHealthDepartment::where('psy_card_id', '=', $request['id'])->exists()) {
            $query=PsyMentalHealthDepartment::where('psy_card_id', '=', $request['id'])->orderBy('mh_date', 'desc');
            $PsyMentalHealthDepartment=$query->first();
            return [ "errorNumber"=>0,"message"=>"OK","CurrentPsyMentalHealthDepartment" => $PsyMentalHealthDepartment,"PsyId" => $request['id']];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }  
    }

    // // PsyRehabilitationPsychiatricCard

    public function getCurrentRehabilitationPsychiatricCardByPsyId(Request $request){
        if (PsyRehabilitationPsychiatricCard::where('psy_card_id', '=', $request['id'])->exists()) {
            $query=PsyRehabilitationPsychiatricCard::where('psy_card_id', '=', $request['id'])->orderBy('rp_date', 'desc');
            $PsyRehabilitationPsychiatricCard=$query->first();
            return [ "errorNumber"=>0,"message"=>"OK","CurrentRehabilitationPsychiatricCard" => $PsyRehabilitationPsychiatricCard,"PsyId" => $request['id']];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }  
    }

    public function getCurrentRatingByPsyId(Request $request){
        if (PsyRating::where('psy_card_id', '=', $request['id'])->exists()) {
            $query=PsyRating::where('psy_card_id', '=', $request['id'])->orderBy('pr_date', 'desc');
            $PsyRating=$query->first();
            return [ "errorNumber"=>0,"message"=>"OK","CurrentPsyRating" => $PsyRating,"PsyId" => $request['id']];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }  
    }
    
    public function getCurrentUocDepartmentByPsyId(Request $request){
        if (PsyUocDepartment::where('psy_card_id', '=', $request['id'])->exists()) {
            $query=PsyUocDepartment::where('psy_card_id', '=', $request['id'])->orderBy('ud_date', 'desc');
            $PsyUocDepartment=$query->first();
            return [ "errorNumber"=>0,"message"=>"OK","CurrentPsyUocDepartment" => $PsyUocDepartment,"PsyId" => $request['id']];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }  
    }

    public function getCurrentSocialFolderByPsyId(Request $request){
        if (PsySocialFolder::where('psy_card_id', '=', $request['id'])->exists()) {
            $query=PsySocialFolder::where('psy_card_id', '=', $request['id'])->orderBy('sf_date', 'desc');
            $PsySocialFolder=$query->first();
            return [ "errorNumber"=>0,"message"=>"OK","CurrentPsySocialFolder" => $PsySocialFolder,"PsyId" => $request['id']];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }  
    }

    public function getCurrentMembershipCardByPsyId(Request $request){
        if (PsyMembershipCard::where('psy_card_id', '=', $request['id'])->exists()) {
            $query=PsyMembershipCard::where('psy_card_id', '=', $request['id'])->orderBy('mc_date', 'desc');
            $PsyMembershipCard=$query->first();
            return [ "errorNumber"=>0,"message"=>"OK","CurrentPsyMembershipCard" => $PsyMembershipCard,"PsyId" => $request['id']];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }  
    }







    public function getSuicideAssessmentsByPsyId(Request $request){
        if (PsySuicideAssessment::where('psy_card_id', '=', $request['id'])->exists()) {
            $query=PsySuicideAssessment::where('psy_card_id', '=', $request['id']);
            $PsySuicideAssessment=$query->get();
            return [ "errorNumber"=>0,"message"=>"OK","PsySuicideAssessment" => $PsySuicideAssessment,"PsyId" => $request['id']];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }      
    }

    public function getMentalHealthDepartmentsByPsyId(Request $request){
        if (PsyMentalHealthDepartment::where('psy_card_id', '=', $request['id'])->exists()) {
            $query=PsyMentalHealthDepartment::where('psy_card_id', '=', $request['id']);
            $PsyMentalHealthDepartment=$query->get();
            return [ "errorNumber"=>0,"message"=>"OK","PsyMentalHealthDepartment" => $PsyMentalHealthDepartment,"PsyId" => $request['id']];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }      
    }

    // // PsyRehabilitationPsychiatricCard
    public function getPsyRehabilitationPsychiatricCardsByPsyId(Request $request){
        if (PsyRehabilitationPsychiatricCard::where('psy_card_id', '=', $request['id'])->exists()) {
            $query=PsyRehabilitationPsychiatricCard::where('psy_card_id', '=', $request['id']);
            $PsyRehabilitationPsychiatricCard=$query->get();
            return [ "errorNumber"=>0,"message"=>"OK","PsyRehabilitationPsychiatricCard" => $PsyRehabilitationPsychiatricCard,"PsyId" => $request['id']];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }      
    }

    // PsyRating

    public function getRatingsByPsyId(Request $request){
        if (PsyRating::where('psy_card_id', '=', $request['id'])->exists()) {
            $query=PsyRating::where('psy_card_id', '=', $request['id']);
            $PsyRating=$query->get();
            return [ "errorNumber"=>0,"message"=>"OK","PsyRating" => $PsyRating,"PsyId" => $request['id']];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }      
    }

    public function getUocDepartmentsByPsyId(Request $request){
        if (PsyUocDepartment::where('psy_card_id', '=', $request['id'])->exists()) {
            $query=PsyUocDepartment::where('psy_card_id', '=', $request['id']);
            $PsyUocDepartment=$query->get();
            return [ "errorNumber"=>0,"message"=>"OK","PsyUocDepartment" => $PsyUocDepartment,"PsyId" => $request['id']];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }      
    }

    public function getSocialFoldersByPsyId(Request $request){
        if (PsySocialFolder::where('psy_card_id', '=', $request['id'])->exists()) {
            $query=PsySocialFolder::where('psy_card_id', '=', $request['id']);
            $PsySocialFolder=$query->get();
            return [ "errorNumber"=>0,"message"=>"OK","PsySocialFolder" => $PsySocialFolder,"PsyId" => $request['id']];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }      
    }


    public function getMembershipCardsByPsyId(Request $request){
        if (PsyMembershipCard::where('psy_card_id', '=', $request['id'])->exists()) {
            $query=PsyMembershipCard::where('psy_card_id', '=', $request['id']);
            $PsyMembershipCard=$query->get();
            return [ "errorNumber"=>0,"message"=>"OK","PsyMembershipCard" => $PsyMembershipCard,"PsyId" => $request['id']];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }      
    }








    public function store(Request $request){
        if ($request->has(['userId', 'userInstance'])) {
            if ($request->has('action')) {
                if($request->input('action')=='store'){
                    if($request->has('section')){
                        switch ($request->input('section')) {
                            case 'sa':
                                $_psy = $this->addPsyCard($request);
                                if($_psy){
                                    $_psyId=$_psy->id;
                                }
                                else{
                                    return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
                                }
                                break;
                            case 'pr':
                                $_psy = $this->addPsyCard($request);
                                if($_psy){
                                    $_psyId=$_psy->id;
                                }
                                else{
                                    return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
                                }
                                break;
                            case 'ud':
                                $_psy = $this->addPsyCard($request);
                                if($_psy){
                                    $_psyId=$_psy->id;
                                }
                                else{
                                    return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
                                }
                                break;
                            case 'sf':
                                $_psy = $this->addPsyCard($request);
                                if($_psy){
                                    $_psyId=$_psy->id;
                                }
                                else{
                                    return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
                                }
                                break;
                            case 'mh':
                                $_psy = $this->addPsyCard($request);
                                if($_psy){
                                    $_psyId=$_psy->id;
                                }
                                else{
                                    return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
                                }
                                break;
                            case 'rp':
                                $_psy = $this->addPsyCard($request);
                                if($_psy){
                                    $_psyId=$_psy->id;
                                }
                                else{
                                    return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
                                }
                                break;
                            case 'mc':
                                $_psy = $this->addPsyCard($request);
                                if($_psy){
                                    $_psyId=$_psy->id;
                                }
                                else{
                                    return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
                                }
                                break;
                            default:
                                if($request->has('psyId')){
                                    if (PsySuicideAssessment::where('psy_card_id', '=', $request->input('psyId'))->exists()) {
                                        $_psyId=$request->input('psyId');
                                    }else{
                                        return ["errorNumber"=>2,"message"=>"Salvare Prima la scheda tossicologica"];
                                    }
                                }else{
                                    return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
                                }
                        }
                    }
                }elseif($request->input('action')=='update'){
                    $_psyId=$request->input('psyId');
                }
            }else{
                return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
            }
            if($request->has('section')){
                switch ($request->input('section')) {
                        //  suicideAssessment
                    case 'sa':
                        return  $this->addSuicideAssessment($request,$_psyId);
                        break;
                        // mentalHealth
                    case 'mh':
                        return $this->addMentalHealthDepartment($request,$_psyId);
                        break;
                    case 'pr':
                        return $this->addRating($request,$_psyId);
                        break;
                    case 'ud':
                        return $this->addUocDepartment($request,$_psyId);
                        break;
                    case 'sf':
                        return $this->addSocialFolder($request,$_psyId);
                        break;
                    case 'rp':
                        return $this->addRehabilitationPsychiatricCard($request,$_psyId);
                        break;
                    case 'mc':
                        return $this->addMembershipCard($request,$_psyId);
                        break;
                }
            }else{
                return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
            }
            
        }else{
            return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
        }
    }

    public function addPsyCard(Request $request){
        $now=date("Y-m-d H:i:s");
        $userInstance=$request->input('userInstance');
        $userId=$request->input('userId');
        $_psy = new PsyCard;
        $_psy->user_instance_id=$userInstance;
        $_psy->user_id=$userId;
        $_psy->psy_card_date=$now;
        $_psy->save();
        return $_psy;
    }

    public function addSuicideAssessment(Request $request,$psyId){
        $userId=$request->input("userId");
        $_suicideValutation = new PsySuicideAssessment;
        $now=date("Y-m-d H:i:s");
        $_suicideValutation->psy_card_id=$psyId;
        if($request->has('doctorId')){
            $_suicideValutation->id_doctor=$request->input('doctorId');
        }
        if($request->has('doctorName')){
            $_suicideValutation->doctor_name=$request->input('doctorName');
        }
        if($request->has('doctorUserName')){
            $_suicideValutation->doctor_lastname=$request->input('doctorUserName');
        }
        $_suicideValutation->sa_date=$now;

        if($request->has('PsySuicideAssessment')){
            $psyCardArr = json_decode($request->input('PsySuicideAssessment'), true);
            if(array_key_exists('maritalStatus',$psyCardArr)){
                $_suicideValutation->marital_status=$psyCardArr['maritalStatus'];
            }
            // else{
            //      $_suicideValutation->marital_status=1;
            // }
            if(array_key_exists('drugAndAlcoholAbuse',$psyCardArr)){
                $_suicideValutation->drug_and_alcohol_abuse=$psyCardArr['drugAndAlcoholAbuse'];
            }
            if(array_key_exists('psychiatricAspect',$psyCardArr)){
                $_suicideValutation->psychiatric_aspect=$psyCardArr['psychiatricAspect'];
            }
            if(array_key_exists('suicideAttempt',$psyCardArr)){
                $_suicideValutation->suicide_attempt=$psyCardArr['suicideAttempt'];
            }
            if(array_key_exists('suicideAttemptInInstitution',$psyCardArr)){
                $_suicideValutation->suicide_attempt_in_institution=$psyCardArr['suicideAttemptInInstitution'];
            }
            if(array_key_exists('familySuicide',$psyCardArr)){
                $_suicideValutation->family_suicide=$psyCardArr['familySuicide'];
            }
            if(array_key_exists('arrestStory',$psyCardArr)){
                $_suicideValutation->arrest_story=$psyCardArr['arrestStory'];
            }
            if(array_key_exists('compulsiveBehavior',$psyCardArr)){
                $_suicideValutation->compulsive_behavior=$psyCardArr['compulsiveBehavior'];
            }
            if(array_key_exists('highCrimeProfile',$psyCardArr)){
                $_suicideValutation->high_crime_profile=$psyCardArr['highCrimeProfile'];
            }
            if(array_key_exists('currentIntoxication',$psyCardArr)){
                $_suicideValutation->current_intoxication=$psyCardArr['currentIntoxication'];
            }
            if(array_key_exists('worryAboutLifeProblem',$psyCardArr)){
                $_suicideValutation->worry_about_life_problem=$psyCardArr['worryAboutLifeProblem'];
            }
            if(array_key_exists('feelingOfHopelessness',$psyCardArr)){
                $_suicideValutation->feeling_of_hopelessness=$psyCardArr['feelingOfHopelessness'];
            }
            if(array_key_exists('psychoticSymptom',$psyCardArr)){
                $_suicideValutation->psychotic_symptom=$psyCardArr['psychoticSymptom'];
            }
            if(array_key_exists('depressiveSymptom',$psyCardArr)){
                $_suicideValutation->depressive_symptom=$psyCardArr['depressiveSymptom'];
            }
            if(array_key_exists('stressAndCoping',$psyCardArr)){
                $_suicideValutation->stress_and_coping=$psyCardArr['stressAndCoping'];
            }
            if(array_key_exists('socialSupport',$psyCardArr)){
                $_suicideValutation->social_support=$psyCardArr['socialSupport'];
            }
            if(array_key_exists('recentMajorLosse',$psyCardArr)){
                $_suicideValutation->recent_major_losse=$psyCardArr['recentMajorLosse'];
            }
            if(array_key_exists('suicidalIdeation',$psyCardArr)){
                $_suicideValutation->suicidal_ideation=$psyCardArr['suicidalIdeation'];
            }
            if(array_key_exists('suicidePlan',$psyCardArr)){
                $_suicideValutation->suicide_plan=$psyCardArr['suicidePlan'];
            }
            if(array_key_exists('totalScore',$psyCardArr)){
                $_suicideValutation->total_score=$psyCardArr['totalScore'];
            }

            if(array_key_exists('psySuicideNote',$psyCardArr)){
                $_suicideValutation->psy_suicide_note=$psyCardArr['psySuicideNote'];
            }
            if(array_key_exists('monitoringRecommendation',$psyCardArr)){
                $_suicideValutation->monitoring_recommendation=$psyCardArr['monitoringRecommendation'];
            }
            if(array_key_exists('frequency',$psyCardArr)){
                $_suicideValutation->frequency=$psyCardArr['frequency'];
            }
            if(array_key_exists('referralMentalHealthService',$psyCardArr)){
                $_suicideValutation->referral_mental_health_service=$psyCardArr['referralMentalHealthService'];
            }
            if(array_key_exists('comment',$psyCardArr)){
                $_suicideValutation->comment=$psyCardArr['comment'];
            }
            if(array_key_exists('saDateLast',$psyCardArr)){
                $_suicideValutation->sa_date_last=$psyCardArr['saDateLast'];
            }
        }
        // return $_suicideValutation;
        $_suicideValutation->save();

        if($_suicideValutation){
            return ["errorNumber"=>0,"message"=>"ok","sa"=>$_suicideValutation];

        }else{
            return ["errorNumber"=>3,"message"=>"Scheda non salvata contattare l'amministratore di sistema"];
        }
    }

    public function addMentalHealthDepartment(Request $request,$psyId){
        $userId=$request->input("userId");
        $_psychologicalInterview = new PsyMentalHealthDepartment;
        $now=date("Y-m-d H:i:s");
        $_psychologicalInterview->psy_card_id=$psyId;
        if($request->has('doctorId')){
            $_psychologicalInterview->id_doctor=$request->input('doctorId');
        }
        if($request->has('doctorName')){
            $_psychologicalInterview->doctor_name=$request->input('doctorName');
        }
        if($request->has('doctorUserName')){
            $_psychologicalInterview->doctor_lastname=$request->input('doctorUserName');
        }
        $_psychologicalInterview->mh_date=$now;

        if($request->has('PsyMentalHealthDepartment')){
            $psyCardArr = json_decode($request->input('PsyMentalHealthDepartment'), true);
            if(array_key_exists('psychologicalInterview',$psyCardArr)){
                $_psychologicalInterview->psychological_interview=$psyCardArr['psychologicalInterview'];
            }
            if(array_key_exists('hypothesisPsychopathologicalClassification',$psyCardArr)){
                $_psychologicalInterview->hypothesis_psychopathological_classification=$psyCardArr['hypothesisPsychopathologicalClassification'];
            }
            if(array_key_exists('psychiatricAspect',$psyCardArr)){
                $_psychologicalInterview->psychiatric_aspect=$psyCardArr['psychiatricAspect'];
            }
            if(array_key_exists('planningTypeOfIntervention',$psyCardArr)){
                $_psychologicalInterview->planning_type_of_intervention=$psyCardArr['planningTypeOfIntervention'];
            }
            if(array_key_exists('suicideAttemptInInstitution',$psyCardArr)){
                $_psychologicalInterview->suicide_attempt_in_institution=$psyCardArr['suicideAttemptInInstitution'];
            }
            if(array_key_exists('test',$psyCardArr)){
                $_psychologicalInterview->test=$psyCardArr['test'];
            }
        }
        $_psychologicalInterview->save();

        if($_psychologicalInterview){
            return ["errorNumber"=>0,"message"=>"ok","psyInterview"=>$_psychologicalInterview];

        }else{
            return ["errorNumber"=>3,"message"=>"Scheda non salvata contattare l'amministratore di sistema"];
        }
    }







    public function addRehabilitationPsychiatricCard(Request $request,$psyId){
        $userId=$request->input("userId");
        $_psyRehab = new PsyRehabilitationPsychiatricCard;
        $now=date("Y-m-d H:i:s");
        $_psyRehab->psy_card_id=$psyId;
        if($request->has('doctorId')){
            $_psyRehab->id_doctor=$request->input('doctorId');
        }
        if($request->has('doctorName')){
            $_psyRehab->doctor_name=$request->input('doctorName');
        }
        if($request->has('doctorUserName')){
            $_psyRehab->doctor_lastname=$request->input('doctorUserName');
        }
        $_psyRehab->rp_date=$now;

        if($request->has('PsyRehabilitationPsychiatricCard')){
            $psyCardArr = json_decode($request->input('PsyRehabilitationPsychiatricCard'), true);
            if(array_key_exists('projectDescription',$psyCardArr)){
                $_psyRehab->project_description=$psyCardArr['projectDescription'];
            }
            if(array_key_exists('treatmentAreaObjective',$psyCardArr)){
                $_psyRehab->treatment_area_objective=$psyCardArr['treatmentAreaObjective'];
            }
            if(array_key_exists('psychiatricIntervention',$psyCardArr)){
                $_psyRehab->psychiatric_intervention=$psyCardArr['psychiatricIntervention'];
            }
            if(array_key_exists('projectManager',$psyCardArr)){
                $_psyRehab->project_manager=$psyCardArr['projectManager'];
            }
            if(array_key_exists('psychiatricAttachment',$psyCardArr)){
                $_psyRehab->psychiatric_attachment=$psyCardArr['psychiatricAttachment'];
            }
        }
        $_psyRehab->save();

        if($_psyRehab){
            return ["errorNumber"=>0,"message"=>"ok","psyInterview"=>$_psyRehab];

        }else{
            return ["errorNumber"=>3,"message"=>"Scheda non salvata contattare l'amministratore di sistema"];
        }
    }




    public function addRating(Request $request,$psyId){
        $userId=$request->input("userId");
        $_psychiatricScale = new PsyRating;
        $now=date("Y-m-d H:i:s");
        $_psychiatricScale->psy_card_id=$psyId;
        if($request->has('doctorId')){
            $_psychiatricScale->id_doctor=$request->input('doctorId');
        }
        if($request->has('doctorName')){
            $_psychiatricScale->doctor_name=$request->input('doctorName');
        }
        if($request->has('doctorUserName')){
            $_psychiatricScale->doctor_lastname=$request->input('doctorUserName');
        }
        $_psychiatricScale->pr_date=$now;

        if($request->has('psyCardPr')){
            $psyCardArr = json_decode($request->input('psyCardPr'), true);
            if(array_key_exists('somatic_concern',$psyCardArr)){
                $_psychiatricScale->somatic_concern=$psyCardArr['somatic_concern'];
            }
            if(array_key_exists('anxiety',$psyCardArr)){
                $_psychiatricScale->anxiety=$psyCardArr['anxiety'];
            }
            if(array_key_exists('depression',$psyCardArr)){
                $_psychiatricScale->depression=$psyCardArr['depression'];
            }
            if(array_key_exists('risk_of_suicide',$psyCardArr)){
                $_psychiatricScale->risk_of_suicide=$psyCardArr['risk_of_suicide'];
            }
            if(array_key_exists('feeling_of_guilt',$psyCardArr)){
                $_psychiatricScale->feeling_of_guilt=$psyCardArr['feeling_of_guilt'];
            }
            if(array_key_exists('hostility',$psyCardArr)){
                $_psychiatricScale->hostility=$psyCardArr['hostility'];
            }
            if(array_key_exists('mood_elevation',$psyCardArr)){
                $_psychiatricScale->mood_elevation=$psyCardArr['mood_elevation'];
            }
            if(array_key_exists('grandeur',$psyCardArr)){
                $_psychiatricScale->grandeur=$psyCardArr['grandeur'];
            }
            if(array_key_exists('suspiciousness',$psyCardArr)){
                $_psychiatricScale->suspiciousness=$psyCardArr['suspiciousness'];
            }
            if(array_key_exists('hallucination',$psyCardArr)){
                $_psychiatricScale->hallucination=$psyCardArr['hallucination'];
            }
            if(array_key_exists('unusual_content_of_thought',$psyCardArr)){
                $_psychiatricScale->unusual_content_of_thought=$psyCardArr['unusual_content_of_thought'];
            }
            if(array_key_exists('bizarre_behavior',$psyCardArr)){
                $_psychiatricScale->bizarre_behavior=$psyCardArr['bizarre_behavior'];
            }
            if(array_key_exists('neglect_of_self_care',$psyCardArr)){
                $_psychiatricScale->neglect_of_self_care=$psyCardArr['neglect_of_self_care'];
            }
            if(array_key_exists('disorientation',$psyCardArr)){
                $_psychiatricScale->disorientation=$psyCardArr['disorientation'];
            }
            if(array_key_exists('conceptual_disorganization',$psyCardArr)){
                $_psychiatricScale->conceptual_disorganization=$psyCardArr['conceptual_disorganization'];
            }
            if(array_key_exists('emotional_flattening',$psyCardArr)){
                $_psychiatricScale->emotional_flattening=$psyCardArr['emotional_flattening'];
            }
            if(array_key_exists('emotional_isolation',$psyCardArr)){
                $_psychiatricScale->emotional_isolation=$psyCardArr['emotional_isolation'];
            }
            if(array_key_exists('suicidal_ideation',$psyCardArr)){
                $_psychiatricScale->suicidal_ideation=$psyCardArr['suicidal_ideation'];
            }
            if(array_key_exists('motor_slowdown',$psyCardArr)){
                $_psychiatricScale->motor_slowdown=$psyCardArr['motor_slowdown'];
            }
            if(array_key_exists('motor_tension',$psyCardArr)){
                $_psychiatricScale->motor_tension=$psyCardArr['motor_tension'];
            }
            if(array_key_exists('lack_of_cooperation',$psyCardArr)){
                $_psychiatricScale->lack_of_cooperation=$psyCardArr['lack_of_cooperation'];
            }
            if(array_key_exists('excitement',$psyCardArr)){
                $_psychiatricScale->excitement=$psyCardArr['excitement'];
            }
            if(array_key_exists('distractibility',$psyCardArr)){
                $_psychiatricScale->distractibility=$psyCardArr['distractibility'];
            }
            if(array_key_exists('motor_hyperactivity',$psyCardArr)){
                $_psychiatricScale->motor_hyperactivity=$psyCardArr['motor_hyperactivity'];
            }
            if(array_key_exists('mannerism_and_posture',$psyCardArr)){
                $_psychiatricScale->mannerism_and_posture=$psyCardArr['mannerism_and_posture'];
            }
            if(array_key_exists('total_score_rating',$psyCardArr)){
                $_psychiatricScale->total_score_rating=$psyCardArr['total_score_rating'];
            }
        }
        $_psychiatricScale->save();

        if($_psychiatricScale){
            return ["errorNumber"=>0,"message"=>"ok","pr"=>$_psychiatricScale];

        }else{
            return ["errorNumber"=>3,"message"=>"Scheda non salvata contattare l'amministratore di sistema"];
        }
    }




    public function addUocDepartment(Request $request,$psyId){
        $userId=$request->input("userId");
        $_psyUoc = new PsyUocDepartment;
        $now=date("Y-m-d H:i:s");
        $_psyUoc->psy_card_id=$psyId;
        if($request->has('doctorId')){
            $_psyUoc->id_doctor=$request->input('doctorId');
        }
        if($request->has('doctorName')){
            $_psyUoc->doctor_name=$request->input('doctorName');
        }
        if($request->has('doctorUserName')){
            $_psyUoc->doctor_lastname=$request->input('doctorUserName');
        }
        $_psyUoc->ud_date=$now;

        if($request->has('psyCardUd')){
            $psyCardArr = json_decode($request->input('psyCardUd'), true);
            if(array_key_exists('psychiatricTreatment',$psyCardArr)){
                $_psyUoc->psychiatric_treatment=$psyCardArr['psychiatricTreatment'];
            }
            if(array_key_exists('csm',$psyCardArr)){
                $_psyUoc->csm=$psyCardArr['csm'];
            }
            if(array_key_exists('spdc',$psyCardArr)){
                $_psyUoc->spdc=$psyCardArr['spdc'];
            }
            if(array_key_exists('rems',$psyCardArr)){
                $_psyUoc->rems=$psyCardArr['rems'];
            }
            if(array_key_exists('prison',$psyCardArr)){
                $_psyUoc->prison=$psyCardArr['prison'];
            }
            if(array_key_exists('psychiatricFamiliarity',$psyCardArr)){
                $_psyUoc->psychiatric_familiarity=$psyCardArr['psychiatricFamiliarity'];
            }
            if(array_key_exists('ifFamiliarity',$psyCardArr)){
                $_psyUoc->if_familiarity=$psyCardArr['ifFamiliarity'];
            }
            if(array_key_exists('onSetOfPsychiatricSymptom',$psyCardArr)){
                $_psyUoc->on_set_of_psychiatric_symptom=$psyCardArr['onSetOfPsychiatricSymptom'];
            }
            if(array_key_exists('substanceUse',$psyCardArr)){
                $_psyUoc->substance_use=$psyCardArr['substanceUse'];
            }
            if(array_key_exists('inChargeAtSerdTerritorial',$psyCardArr)){
                $_psyUoc->in_charge_at_serd_territorial=$psyCardArr['inChargeAtSerdTerritorial'];
            }
             if(array_key_exists('inChargeAtSerdTerritorialWhich',$psyCardArr)){
                $_psyUoc->in_charge_at_serd_territorial_which=$psyCardArr['inChargeAtSerdTerritorialWhich'];
            }
            if(array_key_exists('psychoticSymptom',$psyCardArr)){
                $_psyUoc->psychotic_symptom=$psyCardArr['psychoticSymptom'];
            }
            if(array_key_exists('anxiousAffectiveSymptom',$psyCardArr)){
                $_psyUoc->anxious_affective_symptom=$psyCardArr['anxiousAffectiveSymptom'];
            }
            if(array_key_exists('impulsiveSymptom',$psyCardArr)){
                $_psyUoc->impulsive_symptom=$psyCardArr['impulsiveSymptom'];
            }
            if(array_key_exists('psychoticDiagnosticOrientation',$psyCardArr)){
                $_psyUoc->psychotic_diagnostic_orientation=$psyCardArr['psychoticDiagnosticOrientation'];
            }
            if(array_key_exists('anxiousAffectiveOrientation',$psyCardArr)){
                $_psyUoc->anxious_affective_orientation=$psyCardArr['anxiousAffectiveOrientation'];
            }
            if(array_key_exists('conceptualDisorganization',$psyCardArr)){
                $_psyUoc->conceptual_disorganization=$psyCardArr['conceptualDisorganization'];
            }
            if(array_key_exists('personalityOrientation',$psyCardArr)){
                $_psyUoc->personality_orientation=$psyCardArr['personalityOrientation'];
            }
            if(array_key_exists('takingChargePdta',$psyCardArr)){
                $_psyUoc->taking_charge_pdta=$psyCardArr['takingChargePdta'];
            }
            if(array_key_exists('careIntakePdta',$psyCardArr)){
                $_psyUoc->care_intake_pdta=$psyCardArr['careIntakePdta'];
            }
            if(array_key_exists('consultancyPdta',$psyCardArr)){
                $_psyUoc->consultancy_pdta=$psyCardArr['consultancyPdta'];
            }
        }
        $_psyUoc->save();

        if($_psyUoc){
            return ["errorNumber"=>0,"message"=>"ok","ud"=>$_psyUoc];

        }else{
            return ["errorNumber"=>3,"message"=>"Scheda non salvata contattare l'amministratore di sistema"];
        }
    }



    public function addSocialFolder(Request $request,$psyId){
        $userId=$request->input("userId");
        $_psyFold = new PsySocialFolder;
        $now=date("Y-m-d H:i:s");
        $_psyFold->psy_card_id=$psyId;
        if($request->has('doctorId')){
            $_psyFold->id_doctor=$request->input('doctorId');
        }
        if($request->has('doctorName')){
            $_psyFold->doctor_name=$request->input('doctorName');
        }
        if($request->has('doctorUserName')){
            $_psyFold->doctor_lastname=$request->input('doctorUserName');
        }
        $_psyFold->sf_date=$now;

        if($request->has('psyCardSf')){
            $psyCardArr = json_decode($request->input('psyCardSf'), true);
            if(array_key_exists('citizenship',$psyCardArr)){
                $_psyFold->citizenship=$psyCardArr['citizenship'];
            }
            if(array_key_exists('residencyPermit',$psyCardArr)){
                $_psyFold->residency_permit=$psyCardArr['residencyPermit'];
            }
            if(array_key_exists('typology',$psyCardArr)){
                $_psyFold->typology=$psyCardArr['typology'];
            }
            if(array_key_exists('expiration',$psyCardArr)){
                $_psyFold->expiration=$psyCardArr['expiration'];
            }
            if(array_key_exists('identificationDocument',$psyCardArr)){
                $_psyFold->identification_document=$psyCardArr['identificationDocument'];
            }
            if(array_key_exists('socialNote',$psyCardArr)){
                $_psyFold->social_note=$psyCardArr['socialNote'];
            }
            if(array_key_exists('maritalStatus',$psyCardArr)){
                $_psyFold->marital_status=$psyCardArr['maritalStatus'];
            }
            if(array_key_exists('socialDegree',$psyCardArr)){
                $_psyFold->social_degree=$psyCardArr['socialDegree'];
            }

            // 2 STATO GIURIDICO

            if(array_key_exists('legalStatusEducator',$psyCardArr)){
                $_psyFold->legal_status_educator=$psyCardArr['legalStatusEducator'];
            }
            if(array_key_exists('legalStatusLawyer',$psyCardArr)){
                $_psyFold->legal_status_lawyer=$psyCardArr['legalStatusLawyer'];
            }
            if(array_key_exists('legalStatusProvenance',$psyCardArr)){
                $_psyFold->legal_status_provenance=$psyCardArr['legalStatusProvenance'];
            }
            if(array_key_exists('legalStatusEntered',$psyCardArr)){
                $_psyFold->legal_status_entered=$psyCardArr['legalStatusEntered'];
            }
            if(array_key_exists('legalStatusEndOfSentence',$psyCardArr)){
                $_psyFold->legal_status_end_of_sentence=$psyCardArr['legalStatusEndOfSentence'];
            }
            if(array_key_exists('legalStatusListMix',$psyCardArr)){
                $_psyFold->legal_status_list_mix=$psyCardArr['legalStatusListMix'];
            }
            if(array_key_exists('legalStatusSecurityMeasure',$psyCardArr)){
                $_psyFold->legal_status_security_measure=$psyCardArr['legalStatusSecurityMeasure'];
            }
            if(array_key_exists('legalStatusEndOfTheSentence',$psyCardArr)){
                $_psyFold->legal_status_end_of_the_sentence=$psyCardArr['legalStatusEndOfTheSentence'];
            }
            if(array_key_exists('legalStatusRemsOther',$psyCardArr)){
                $_psyFold->legal_status_rems_other=$psyCardArr['legalStatusRemsOther'];
            }
            if(array_key_exists('legalStatusUncensored',$psyCardArr)){
                $_psyFold->legal_status_uncensored=$psyCardArr['legalStatusUncensored'];
            }

            // 3 SITUAZIONE SOCIO SANITARIA

            if(array_key_exists('socialHealthSituationCsm',$psyCardArr)){
                $_psyFold->social_health_situation_csm=$psyCardArr['socialHealthSituationCsm'];
            }
            if(array_key_exists('socialHealthSituationSerd',$psyCardArr)){
                $_psyFold->social_health_situation_serd=$psyCardArr['socialHealthSituationSerd'];
            }
            if(array_key_exists('socialHealthSituationAsl',$psyCardArr)){
                $_psyFold->social_health_situation_asl=$psyCardArr['socialHealthSituationAsl'];
            }
            if(array_key_exists('socialHealthSituationCertificate',$psyCardArr)){
                $_psyFold->social_health_situation_certificate=$psyCardArr['socialHealthSituationCertificate'];
            }
            if(array_key_exists('socialHealthSituationTherapeuticPathway',$psyCardArr)){
                $_psyFold->social_health_situation_therapeutic_pathway=$psyCardArr['socialHealthSituationTherapeuticPathway'];
            }
            if(array_key_exists('socialHealthSituationDisability',$psyCardArr)){
                $_psyFold->social_health_situation_disability=$psyCardArr['socialHealthSituationDisability'];
            }
            if(array_key_exists('socialHealthSituationRevision',$psyCardArr)){
                $_psyFold->social_health_situation_revision=$psyCardArr['socialHealthSituationRevision'];
            }
            if(array_key_exists('socialHealthSituationInps',$psyCardArr)){
                $_psyFold->social_health_situation_inps=$psyCardArr['socialHealthSituationInps'];
            }
            if(array_key_exists('socialHealthSituationAdministrator',$psyCardArr)){
                $_psyFold->social_health_situation_administrator=$psyCardArr['socialHealthSituationAdministrator'];
            }


            // 4 ANALISI SITUAZIONE SOCIO-AMBIENTALE

            if(array_key_exists('environmentalAnalysisFamilyOfOrigin',$psyCardArr)){
                $_psyFold->environmental_analysis_family_of_origin=$psyCardArr['environmentalAnalysisFamilyOfOrigin'];
            }
            if(array_key_exists('environmentalAnalysisAccommodation',$psyCardArr)){
                $_psyFold->environmental_analysis_accommodation=$psyCardArr['environmentalAnalysisAccommodation'];
            }
            if(array_key_exists('environmentalAnalysisWork',$psyCardArr)){
                $_psyFold->environmental_analysis_work=$psyCardArr['environmentalAnalysisWork'];
            }
            if(array_key_exists('environmentalAnalysisIncome',$psyCardArr)){
                $_psyFold->environmental_analysis_income=$psyCardArr['environmentalAnalysisIncome'];
            }
            if(array_key_exists('environmentalAnalysisFormalNetwork',$psyCardArr)){
                $_psyFold->environmental_analysis_formal_network=$psyCardArr['environmentalAnalysisFormalNetwork'];
            }

             // 5 ANALISI SE

            if(array_key_exists('interventionHypothesisSocialProject',$psyCardArr)){
                $_psyFold->intervention_hypothesis_project=$psyCardArr['interventionHypothesisSocialProject'];
            }
            if(array_key_exists('interventionHypothesisSocialWorker',$psyCardArr)){
                $_psyFold->intervention_hypothesis_social_worker=$psyCardArr['interventionHypothesisSocialWorker'];
            }
        }
        $_psyFold->save();

        if($_psyFold){
            return ["errorNumber"=>0,"message"=>"ok","sf"=>$_psyFold];

        }else{
            return ["errorNumber"=>3,"message"=>"Scheda non salvata contattare l'amministratore di sistema"];
        }
    }



    public function addMembershipCard(Request $request,$psyId){
        $userId=$request->input("userId");
        $_psyMemb = new PsyMembershipCard;
        $now=date("Y-m-d H:i:s");
        $_psyMemb->psy_card_id=$psyId;
        if($request->has('doctorId')){
            $_psyMemb->id_doctor=$request->input('doctorId');
        }
        if($request->has('doctorName')){
            $_psyMemb->doctor_name=$request->input('doctorName');
        }
        if($request->has('doctorUserName')){
            $_psyMemb->doctor_lastname=$request->input('doctorUserName');
        }
        $_psyMemb->mc_date=$now;

        if($request->has('psyCardMc')){
            $psyCardArr = json_decode($request->input('psyCardMc'), true);
            if(array_key_exists('communicateItalian',$psyCardArr)){
                $_psyMemb->communicate_italian=$psyCardArr['communicateItalian'];
            }
            if(array_key_exists('communicate',$psyCardArr)){
                $_psyMemb->communicate=$psyCardArr['communicate'];
            }
            if(array_key_exists('maritalStatus',$psyCardArr)){
                $_psyMemb->marital_status=$psyCardArr['maritalStatus'];
            }
            if(array_key_exists('son',$psyCardArr)){
                $_psyMemb->son=$psyCardArr['son'];
            }
            if(array_key_exists('sonNumber',$psyCardArr)){
                $_psyMemb->son_number=$psyCardArr['sonNumber'];
            }
            if(array_key_exists('sonAge',$psyCardArr)){
                $_psyMemb->son_age=$psyCardArr['sonAge'];
            }
            if(array_key_exists('residenceNot',$psyCardArr)){
                $_psyMemb->residence_not=$psyCardArr['residenceNot'];
            }
            if(array_key_exists('residence',$psyCardArr)){
                $_psyMemb->residence=$psyCardArr['residence'];
            }
            if(array_key_exists('titleStudy',$psyCardArr)){
                $_psyMemb->title_study=$psyCardArr['titleStudy'];
            }
            if(array_key_exists('situationHousing]',$psyCardArr)){
                $_psyMemb->situation_housing=$psyCardArr['situationHousing'];
            }
            if(array_key_exists('situationWork',$psyCardArr)){
                $_psyMemb->situation_work=$psyCardArr['situationWork'];
            }
            if(array_key_exists('dateStartPrison',$psyCardArr)){
                $_psyMemb->date_start_prison=$psyCardArr['dateStartPrison'];
            }
            if(array_key_exists('dateStartInInstitute',$psyCardArr)){
                $_psyMemb->date_start_in_institute=$psyCardArr['dateStartInInstitute'];
            }
            if(array_key_exists('firstExperiencePrison',$psyCardArr)){
                $_psyMemb->first_experience_prison=$psyCardArr['firstExperiencePrison'];
            }
            if(array_key_exists('provenience',$psyCardArr)){
                $_psyMemb->provenience=$psyCardArr['provenience'];
            }
            if(array_key_exists('legalPosition',$psyCardArr)){
                $_psyMemb->legal_position=$psyCardArr['legalPosition'];
            }
            if(array_key_exists('endOfSentence',$psyCardArr)){
                $_psyMemb->end_of_sentence=$psyCardArr['endOfSentence'];
            }
            if(array_key_exists('economicResource',$psyCardArr)){
                $_psyMemb->economic_resource=$psyCardArr['economicResource'];
            }


            // if(array_key_exists('socialHealthSituationAdministrator',$psyCardArr)){
            //     $_psyMemb->social_health_situation_administrator=$psyCardArr['socialHealthSituationAdministrator'];
            // }
            // if(array_key_exists('environmentalAnalysisFamilyOfOrigin',$psyCardArr)){
            //     $_psyMemb->environmental_analysis_family_of_origin=$psyCardArr['environmentalAnalysisFamilyOfOrigin'];
            // }
            // if(array_key_exists('environmentalAnalysisAccommodation',$psyCardArr)){
            //     $_psyMemb->environmental_analysis_accommodation=$psyCardArr['environmentalAnalysisAccommodation'];
            // }
            // if(array_key_exists('environmentalAnalysisWork',$psyCardArr)){
            //     $_psyMemb->environmental_analysis_work=$psyCardArr['environmentalAnalysisWork'];
            // }
            // if(array_key_exists('environmentalAnalysisIncome',$psyCardArr)){
            //     $_psyMemb->environmental_analysis_income=$psyCardArr['environmentalAnalysisIncome'];
            // }
            // if(array_key_exists('environmentalAnalysisFormalNetwork',$psyCardArr)){
            //     $_psyMemb->environmental_analysis_formal_network=$psyCardArr['environmentalAnalysisFormalNetwork'];
            // }

            // if(array_key_exists('interventionHypothesisSocialProject',$psyCardArr)){
            //     $_psyMemb->intervention_hypothesis_project=$psyCardArr['interventionHypothesisSocialProject'];
            // }
            // if(array_key_exists('interventionHypothesisSocialWorker',$psyCardArr)){
            //     $_psyMemb->intervention_hypothesis_social_worker=$psyCardArr['interventionHypothesisSocialWorker'];
            // }
        }
        $_psyMemb->save();

        if($_psyMemb){
            return ["errorNumber"=>0,"message"=>"ok","mc"=>$_psyMemb];

        }else{
            return ["errorNumber"=>3,"message"=>"Scheda non salvata contattare l'amministratore di sistema"];
        }
    }
}
