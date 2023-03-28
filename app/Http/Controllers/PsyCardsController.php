<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PsyCard;
use App\Models\PsySuicideAssessment;
use App\Models\PsyMentalHealthDepartment;
use App\Models\PsyRehabilitationPsychiatricCard;


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

            // $PsyRehabilitationPsychiatricCard=null;
            // $allPsyRehabilitationPsychiatricCards=null;

       
            if (PsySuicideAssessment::where('psy_card_id', '=', $psyCard->id)->exists()) {
                $query=PsySuicideAssessment::where('psy_card_id', '=', $psyCard->id)->orderBy('sa_date', 'desc');
                $PsySuicideAssessment=$query->first();
                $allPsySuicideAssessments=PsySuicideAssessment::where('psy_card_id', '=', $psyCard->id)->orderBy('sa_date', 'desc')->get();
            }
            // if (PsyMentalHealthDepartment::where('psy_card_id', '=', $psyCard->id)->exists()) {
            //     $query=PsyMentalHealthDepartment::where('psy_card_id', '=', $psyCard->id)->orderBy('mh_date', 'desc');
            //     $PsyMentalHealthDepartment=$query->first();
            //     $allPsyMentalHealthDepartments=PsyMentalHealthDepartment::where('psy_card_id', '=', $psyCard->id)->orderBy('mh_date', 'desc')->get();
            // }
            // return [ "errorNumber"=>0,"message"=>"OK","psyCard" => $psyCard,"userIstanceId" => $request['id'], "PsyMentalHealthDepartment"=>$PsyMentalHealthDepartment,"allPsyMentalHealthDepartments" => $allPsyMentalHealthDepartments];

            if (PsyRehabilitationPsychiatricCard::where('psy_card_id', '=', $psyCard->id)->exists()) {
                $query=PsyRehabilitationPsychiatricCard::where('psy_card_id', '=', $psyCard->id)->orderBy('rp_date', 'desc');
                $PsyRehabilitationPsychiatricCard=$query->first();
                $allPsyRehabilitationPsychiatricCards=PsyRehabilitationPsychiatricCard::where('psy_card_id', '=', $psyCard->id)->orderBy('rp_date', 'desc')->get();
            }
            return [ "errorNumber"=>0,"message"=>"OK","psyCard" => $psyCard,"userIstanceId" => $request['id'], "PsyRehabilitationPsychiatricCard"=>$PsyRehabilitationPsychiatricCard,"allPsyRehabilitationPsychiatricCards" => $allPsyRehabilitationPsychiatricCards];


            //return [ "errorNumber"=>0,"message"=>"OK","psyCard" => $psyCard,"userIstanceId" => $request['id'],"PsySuicideAssessment"=>$PsySuicideAssessment,"allPsySuicideAssessments" => $allPsySuicideAssessments, "PsyMentalHealthDepartment"=>$PsyMentalHealthDepartment,"allPsyMentalHealthDepartments" => $allPsyMentalHealthDepartments, "PsyRehabilitationPsychiatricCard"=>$PsyRehabilitationPsychiatricCard,"allPsyRehabilitationPsychiatricCards" => $allPsyRehabilitationPsychiatricCards];
            return [ "errorNumber"=>0,"message"=>"OK","psyCard" => $psyCard,"userIstanceId" => $request['id'], "PsySuicideAssessment"=>$PsySuicideAssessment,"allPsySuicideAssessments" => $allPsySuicideAssessments];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }
    }

    // PsySuicideAssessment
    public function getCurrentSuicideAssessmentByPsyId(Request $request){
        if (PsySuicideAssessment::where('psy_card_id', '=', $request['id'])->exists()) {
            $query=PsySuicideAssessment::where('psy_card_id', '=', $request['id'])->orderBy('tsa_date', 'desc');
            $PsySuicideAssessment=$query->first();
            return [ "errorNumber"=>0,"message"=>"OK","CurrentPsySuicideAssessment" => $PsySuicideAssessment,"PsyId" => $request['id']];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }  
    }
    
    // PsyMentalHealthDepartment
    public function getCurrentMentalHealthDepartmentByPsyId(Request $request){
        if (PsyMentalHealthDepartment::where('psy_card_id', '=', $request['id'])->exists()) {
            $query=PsyMentalHealthDepartment::where('psy_card_id', '=', $request['id'])->orderBy('tsa_date', 'desc');
            $PsyMentalHealthDepartment=$query->first();
            return [ "errorNumber"=>0,"message"=>"OK","CurrentPsyMentalHealthDepartment" => $PsyMentalHealthDepartment,"PsyId" => $request['id']];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }  
    }

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
    // public function getPsyRehabilitationPsychiatricCardsByPsyId(Request $request){
    //     if (PsyRehabilitationPsychiatricCard::where('psy_card_id', '=', $request['id'])->exists()) {
    //         $query=PsyRehabilitationPsychiatricCard::where('psy_card_id', '=', $request['id']);
    //         $PsyRehabilitationPsychiatricCard=$query->get();
    //         return [ "errorNumber"=>0,"message"=>"OK","PsyRehabilitationPsychiatricCard" => $PsyRehabilitationPsychiatricCard,"PsyId" => $request['id']];
    //     }else{
    //         return ['errorNumber'=>7,'descrizione'=>'no records found'];
    //     }      
    // }


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
}
