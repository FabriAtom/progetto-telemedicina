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
            
            // $PsySuicideAssessment=null;
            // $allPsySuicideAssessments=null;

            // $PsyMentalHealthDepartment=null;
            // $allPsyMentalHealthDepartments=null;

            // $PsyRehabilitationPsychiatricCard=null;
            // $allPsyRehabilitationPsychiatricCards=null;

            $PsyRating=null;
            $allPsyRatings=null;

            $PsyUocDepartment=null;
            $allPsyUocDepartment=null;

       
            // if (PsySuicideAssessment::where('psy_card_id', '=', $psyCard->id)->exists()) {
            //     $query=PsySuicideAssessment::where('psy_card_id', '=', $psyCard->id)->orderBy('sa_date', 'desc');
            //     $PsySuicideAssessment=$query->first();
            //     $allPsySuicideAssessments=PsySuicideAssessment::where('psy_card_id', '=', $psyCard->id)->orderBy('sa_date', 'desc')->get();
            // }

            // if (PsyMentalHealthDepartment::where('psy_card_id', '=', $psyCard->id)->exists()) {
            //     $query=PsyMentalHealthDepartment::where('psy_card_id', '=', $psyCard->id)->orderBy('mh_date', 'desc');
            //     $PsyMentalHealthDepartment=$query->first();
            //     $allPsyMentalHealthDepartments=PsyMentalHealthDepartment::where('psy_card_id', '=', $psyCard->id)->orderBy('mh_date', 'desc')->get();
            // }
            // return [ "errorNumber"=>0,"message"=>"OK","psyCard" => $psyCard,"userIstanceId" => $request['id'], "PsyMentalHealthDepartment"=>$PsyMentalHealthDepartment,"allPsyMentalHealthDepartments" => $allPsyMentalHealthDepartments];

            // if (PsyRehabilitationPsychiatricCard::where('psy_card_id', '=', $psyCard->id)->exists()) {
            //     $query=PsyRehabilitationPsychiatricCard::where('psy_card_id', '=', $psyCard->id)->orderBy('rp_date', 'desc');
            //     $PsyRehabilitationPsychiatricCard=$query->first();
            //     $allPsyRehabilitationPsychiatricCards=PsyRehabilitationPsychiatricCard::where('psy_card_id', '=', $psyCard->id)->orderBy('rp_date', 'desc')->get();
            // }
            // return [ "errorNumber"=>0,"message"=>"OK","psyCard" => $psyCard,"userIstanceId" => $request['id'], "PsyRehabilitationPsychiatricCard"=>$PsyRehabilitationPsychiatricCard,"allPsyRehabilitationPsychiatricCards" => $allPsyRehabilitationPsychiatricCards];



            // PSY_RATING

            if (PsyRating::where('psy_card_id', '=', $psyCard->id)->exists()) {
                $query=PsyRating::where('psy_card_id', '=', $psyCard->id)->orderBy('pr_date', 'desc');
                $PsyRating=$query->first();
                $allPsyRatings=PsyRating::where('psy_card_id', '=', $psyCard->id)->orderBy('pr_date', 'desc')->get();
            }
            return [ "errorNumber"=>0,"message"=>"OK","psyCard" => $psyCard,"userIstanceId" => $request['id'], "PsyRating"=>$PsyRating,"allPsyRatings" => $allPsyRatings];


            // PSY_UOC_DEPARTMENT

            if (PsyUocDepartment::where('psy_card_id', '=', $psyCard->id)->exists()) {
                $query=PsyUocDepartment::where('psy_card_id', '=', $psyCard->id)->orderBy('pr_date', 'desc');
                $PsyUocDepartment=$query->first();
                $allPsyUocDepartments=PsyUocDepartment::where('psy_card_id', '=', $psyCard->id)->orderBy('pr_date', 'desc')->get();
            }
            return [ "errorNumber"=>0,"message"=>"OK","psyCard" => $psyCard,"userIstanceId" => $request['id'], "PsyUocDepartment"=>$PsyUocDepartment,"allPsyUocDepartments" => $allPsyUocDepartments];

            //return [ "errorNumber"=>0,"message"=>"OK","psyCard" => $psyCard,"userIstanceId" => $request['id'],"PsySuicideAssessment"=>$PsySuicideAssessment,"allPsySuicideAssessments" => $allPsySuicideAssessments, "PsyMentalHealthDepartment"=>$PsyMentalHealthDepartment,"allPsyMentalHealthDepartments" => $allPsyMentalHealthDepartments, "PsyRehabilitationPsychiatricCard"=>$PsyRehabilitationPsychiatricCard,"allPsyRehabilitationPsychiatricCards" => $allPsyRehabilitationPsychiatricCards];
            // return [ "errorNumber"=>0,"message"=>"OK","psyCard" => $psyCard,"userIstanceId" => $request['id'], "PsySuicideAssessment"=>$PsySuicideAssessment,"allPsySuicideAssessments" => $allPsySuicideAssessments];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }
    }

    // PsySuicideAssessment
    // public function getCurrentSuicideAssessmentByPsyId(Request $request){
    //     if (PsySuicideAssessment::where('psy_card_id', '=', $request['id'])->exists()) {
    //         $query=PsySuicideAssessment::where('psy_card_id', '=', $request['id'])->orderBy('tsa_date', 'desc');
    //         $PsySuicideAssessment=$query->first();
    //         return [ "errorNumber"=>0,"message"=>"OK","CurrentPsySuicideAssessment" => $PsySuicideAssessment,"PsyId" => $request['id']];
    //     }else{
    //         return ['errorNumber'=>7,'descrizione'=>'no records found'];
    //     }  
    // }
    
    // PsyMentalHealthDepartment
    // public function getCurrentMentalHealthDepartmentByPsyId(Request $request){
    //     if (PsyMentalHealthDepartment::where('psy_card_id', '=', $request['id'])->exists()) {
    //         $query=PsyMentalHealthDepartment::where('psy_card_id', '=', $request['id'])->orderBy('tsa_date', 'desc');
    //         $PsyMentalHealthDepartment=$query->first();
    //         return [ "errorNumber"=>0,"message"=>"OK","CurrentPsyMentalHealthDepartment" => $PsyMentalHealthDepartment,"PsyId" => $request['id']];
    //     }else{
    //         return ['errorNumber'=>7,'descrizione'=>'no records found'];
    //     }  
    // }

    // // PsyRehabilitationPsychiatricCard
    // public function getCurrentRehabilitationPsychiatricCardByPsyId(Request $request){
    //     if (PsyRehabilitationPsychiatricCard::where('psy_card_id', '=', $request['id'])->exists()) {
    //         $query=PsyRehabilitationPsychiatricCard::where('psy_card_id', '=', $request['id'])->orderBy('tsa_date', 'desc');
    //         $PsyRehabilitationPsychiatricCard=$query->first();
    //         return [ "errorNumber"=>0,"message"=>"OK","CurrentRehabilitationPsychiatricCard" => $PsyRehabilitationPsychiatricCard,"PsyId" => $request['id']];
    //     }else{
    //         return ['errorNumber'=>7,'descrizione'=>'no records found'];
    //     }  
    // }

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
            $query=PsyUocDepartment::where('psy_card_id', '=', $request['id'])->orderBy('pr_date', 'desc');
            $PsyUocDepartment=$query->first();
            return [ "errorNumber"=>0,"message"=>"OK","CurrentPsyUocDepartment" => $PsyUocDepartment,"PsyId" => $request['id']];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }  
    }

    



    // public function getSuicideAssessmentsByPsyId(Request $request){
    //     if (PsySuicideAssessment::where('psy_card_id', '=', $request['id'])->exists()) {
    //         $query=PsySuicideAssessment::where('psy_card_id', '=', $request['id']);
    //         $PsySuicideAssessment=$query->get();
    //         return [ "errorNumber"=>0,"message"=>"OK","PsySuicideAssessment" => $PsySuicideAssessment,"PsyId" => $request['id']];
    //     }else{
    //         return ['errorNumber'=>7,'descrizione'=>'no records found'];
    //     }      
    // }

    // public function getMentalHealthDepartmentsByPsyId(Request $request){
    //     if (PsyMentalHealthDepartment::where('psy_card_id', '=', $request['id'])->exists()) {
    //         $query=PsyMentalHealthDepartment::where('psy_card_id', '=', $request['id']);
    //         $PsyMentalHealthDepartment=$query->get();
    //         return [ "errorNumber"=>0,"message"=>"OK","PsyMentalHealthDepartment" => $PsyMentalHealthDepartment,"PsyId" => $request['id']];
    //     }else{
    //         return ['errorNumber'=>7,'descrizione'=>'no records found'];
    //     }      
    // }

    // // PsyRehabilitationPsychiatricCard

    // public function getPsyRehabilitationPsychiatricCardsByPsyId(Request $request){
    //     if (PsyRehabilitationPsychiatricCard::where('psy_card_id', '=', $request['id'])->exists()) {
    //         $query=PsyRehabilitationPsychiatricCard::where('psy_card_id', '=', $request['id']);
    //         $PsyRehabilitationPsychiatricCard=$query->get();
    //         return [ "errorNumber"=>0,"message"=>"OK","PsyRehabilitationPsychiatricCard" => $PsyRehabilitationPsychiatricCard,"PsyId" => $request['id']];
    //     }else{
    //         return ['errorNumber'=>7,'descrizione'=>'no records found'];
    //     }      
    // }

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

        if($request->has('psyriskFactor')){
            $psyCardArr = json_decode($request->input('psyriskFactor'), true);
            if(array_key_exists('marital_status',$psyCardArr)){
                $_suicideValutation->marital_status=$psyCardArr['marital_status'];
            }
            if(array_key_exists('drug_and_alcohol_abuse',$psyCardArr)){
                $_suicideValutation->drug_and_alcohol_abuse=$psyCardArr['drug_and_alcohol_abuse'];
            }
            if(array_key_exists('psychiatric_aspect',$psyCardArr)){
                $_suicideValutation->psychiatric_aspect=$psyCardArr['psychiatric_aspect'];
            }
            if(array_key_exists('suicide_attempt',$psyCardArr)){
                $_suicideValutation->suicide_attempt=$psyCardArr['suicide_attempt'];
            }
            if(array_key_exists('suicide_attempt_in_institution',$psyCardArr)){
                $_suicideValutation->suicide_attempt_in_institution=$psyCardArr['suicide_attempt_in_institution'];
            }
            if(array_key_exists('family_suicide',$psyCardArr)){
                $_suicideValutation->family_suicide=$psyCardArr['family_suicide'];
            }
            if(array_key_exists('arrest_story',$psyCardArr)){
                $_suicideValutation->arrest_story=$psyCardArr['arrest_story'];
            }
            if(array_key_exists('compulsive_behavior',$psyCardArr)){
                $_suicideValutation->compulsive_behavior=$psyCardArr['compulsive_behavior'];
            }
            if(array_key_exists('high_crime_profile',$psyCardArr)){
                $_suicideValutation->high_crime_profile=$psyCardArr['high_crime_profile'];
            }
            if(array_key_exists('current_intoxication',$psyCardArr)){
                $_suicideValutation->current_intoxication=$psyCardArr['current_intoxication'];
            }
            if(array_key_exists('worry_about_life_problem',$psyCardArr)){
                $_suicideValutation->worry_about_life_problem=$psyCardArr['worry_about_life_problem'];
            }
            if(array_key_exists('feeling_of_hopelessness',$psyCardArr)){
                $_suicideValutation->feeling_of_hopelessness=$psyCardArr['feeling_of_hopelessness'];
            }
            if(array_key_exists('psychotic_symptom',$psyCardArr)){
                $_suicideValutation->psychotic_symptom=$psyCardArr['psychotic_symptom'];
            }
            if(array_key_exists('depressive_symptom',$psyCardArr)){
                $_suicideValutation->depressive_symptom=$psyCardArr['depressive_symptom'];
            }
            if(array_key_exists('stress_and_coping',$psyCardArr)){
                $_suicideValutation->stress_and_coping=$psyCardArr['stress_and_coping'];
            }
            if(array_key_exists('social_support',$psyCardArr)){
                $_suicideValutation->social_support=$psyCardArr['social_support'];
            }
            if(array_key_exists('recent_major_losse',$psyCardArr)){
                $_suicideValutation->recent_major_losse=$psyCardArr['recent_major_losse'];
            }
            if(array_key_exists('suicidal_ideation',$psyCardArr)){
                $_suicideValutation->suicidal_ideation=$psyCardArr['suicidal_ideation'];
            }
            if(array_key_exists('suicide_plan',$psyCardArr)){
                $_suicideValutation->suicide_plan=$psyCardArr['suicide_plan'];
            }
            if(array_key_exists('total_score',$psyCardArr)){
                $_suicideValutation->total_score=$psyCardArr['total_score'];
            }
            if(array_key_exists('psy_suicide_note',$psyCardArr)){
                $_suicideValutation->psy_suicide_note=$psyCardArr['psy_suicide_note'];
            }
            if(array_key_exists('monitoring_recommendation',$psyCardArr)){
                $_suicideValutation->monitoring_recommendation=$psyCardArr['monitoring_recommendation'];
            }
            if(array_key_exists('frequency',$psyCardArr)){
                $_suicideValutation->frequency=$psyCardArr['frequency'];
            }
            if(array_key_exists('referral_mental_health_service',$psyCardArr)){
                $_suicideValutation->referral_mental_health_service=$psyCardArr['referral_mental_health_service'];
            }
            if(array_key_exists('comment',$psyCardArr)){
                $_suicideValutation->comment=$psyCardArr['comment'];
            }
            if(array_key_exists('sa_date_last',$psyCardArr)){
                $_suicideValutation->sa_date_last=$psyCardArr['sa_date_last'];
            }
        }
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
        // $_psychologicalInterview->sa_date=$now;

        if($request->has('psyMentalHealthDepartment')){
            $psyCardArr = json_decode($request->input('psyMentalHealthDepartment'), true);
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
            return ["errorNumber"=>0,"message"=>"ok","sa"=>$_psychiatricScale];

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
            if(array_key_exists('psychiatric_treatment',$psyCardArr)){
                $_psyUoc->psychiatric_treatment=$psyCardArr['psychiatric_treatment'];
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
            if(array_key_exists('psychiatric_familiarity',$psyCardArr)){
                $_psyUoc->psychiatric_familiarity=$psyCardArr['psychiatric_familiarity'];
            }
            if(array_key_exists('on_set_of_psychiatric_symptom',$psyCardArr)){
                $_psyUoc->on_set_of_psychiatric_symptom=$psyCardArr['on_set_of_psychiatric_symptom'];
            }
            if(array_key_exists('substance_use',$psyCardArr)){
                $_psyUoc->substance_use=$psyCardArr['substance_use'];
            }
            if(array_key_exists('in_charge_at_serd_territorial',$psyCardArr)){
                $_psyUoc->in_charge_at_serd_territorial=$psyCardArr['in_charge_at_serd_territorial'];
            }
            if(array_key_exists('psychotic_symptom',$psyCardArr)){
                $_psyUoc->psychotic_symptom=$psyCardArr['psychotic_symptom'];
            }
            if(array_key_exists('anxious_affective_symptom',$psyCardArr)){
                $_psyUoc->anxious_affective_symptom=$psyCardArr['anxious_affective_symptom'];
            }
            if(array_key_exists('impulsive_symptom',$psyCardArr)){
                $_psyUoc->impulsive_symptom=$psyCardArr['impulsive_symptom'];
            }
            if(array_key_exists('psychotic_diagnostic_orientation',$psyCardArr)){
                $_psyUoc->psychotic_diagnostic_orientation=$psyCardArr['psychotic_diagnostic_orientation'];
            }
            if(array_key_exists('anxious_affective_orientation',$psyCardArr)){
                $_psyUoc->anxious_affective_orientation=$psyCardArr['anxious_affective_orientation'];
            }
            if(array_key_exists('conceptual_disorganization',$psyCardArr)){
                $_psyUoc->conceptual_disorganization=$psyCardArr['conceptual_disorganization'];
            }
            if(array_key_exists('personality_orientation',$psyCardArr)){
                $_psyUoc->personality_orientation=$psyCardArr['personality_orientation'];
            }
            if(array_key_exists('taking_charge_pdta',$psyCardArr)){
                $_psyUoc->taking_charge_pdta=$psyCardArr['taking_charge_pdta'];
            }
            if(array_key_exists('consultancy_pdta',$psyCardArr)){
                $_psyUoc->consultancy_pdta=$psyCardArr['consultancy_pdta'];
            }
        }
        $_psyUoc->save();

        if($_psyUoc){
            return ["errorNumber"=>0,"message"=>"ok","sa"=>$_psyUoc];

        }else{
            return ["errorNumber"=>3,"message"=>"Scheda non salvata contattare l'amministratore di sistema"];
        }
    }
}
