<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SerdToxicologyReport;
use App\Models\SerdPsychologicalAnamnesis;
use App\Models\SerdSocialFolder;
use App\Models\SerdCard;
// use App\Classes\PDFClass;
// use Codedge\Fpdf\Fpdf\Fpdf;
use Carbon\Carbon;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;


class SerdCardsController extends Controller
{
    private const URL = 'https://demo.kgpartners.it/public/api/';

    public function index(Request $request){
        $result= SerdCard::all();
        if($result){
            return [ "errorNumber"=>0,"message"=>"OK","remarks" => $result];
        }else{
            return ['errorNumber'=>'5000','descrizione'=>'no records found'];
        }  
    }


    public function getPermissions()
    {
        $client = new \GuzzleHttp\Client();

        $url= self::URL.'account/permissions';

        $response = $client->request(

            'POST',

            $url,

            ['headers' => 
                [
                    'Authorization' => "Bearer " .session()->get("token")
                ]
            ]
        );
        $payload = json_decode($response->getBody()->getContents()); 
        return $payload;
    }




    public function getSerdCardById(Request $request){
        if (SerdCard::where('id', '=', $request['id'])->exists()) {
            $query=SerdCard::where('id', '=', $request['id']);
            $serdCard=$query->get();

            return [ "errorNumber"=>0,"message"=>"OK","serdCard" => $serdCard,"serdCardId" => $request['id']];
        }else{
            return ['errorNumber'=>5000,'descrizione'=>'no records found'];
        }
    }
    public function getSerdCardsByUserIstanceId(Request $request){

        if (SerdCard::where('user_instance_id', '=', $request['id'])->exists()) {
            $query=SerdCard::where('user_instance_id', '=', $request['id']);
            $serdCard=$query->first();
            $SerdToxicologyReport=null;
            $SerdPsychologicalAnamnesis=null;
            $SerdSocialFolder=null;
            $allSerdToxicologyReports=null;
            $allSerdPsychologicalAnamneses=null;
            $allSerdSocialFolders=null;
            if (SerdToxicologyReport::where('serd_card_id', '=', $serdCard->id)->exists()) {
                $query=SerdToxicologyReport::where('serd_card_id', '=', $serdCard->id)->orderBy('tsa_date', 'desc');
                $SerdToxicologyReport=$query->first();
                $allSerdToxicologyReports=SerdToxicologyReport::where('serd_card_id', '=', $serdCard->id)->orderBy('tsa_date', 'desc')->get();
            }
            if (SerdPsychologicalAnamnesis::where('serd_card_id', '=', $serdCard->id)->exists()) {
                $query=SerdPsychologicalAnamnesis::where('serd_card_id', '=', $serdCard->id)->orderBy('psa_date', 'desc');
                $SerdPsychologicalAnamnesis=$query->first();
                $allSerdPsychologicalAnamneses=SerdPsychologicalAnamnesis::where('serd_card_id', '=', $serdCard->id)->get();
            }
            if (SerdSocialFolder::where('serd_card_id', '=', $serdCard->id)->exists()) {
                $query=SerdSocialFolder::where('serd_card_id', '=', $serdCard->id)->orderBy('sf_date', 'desc');
                $SerdSocialFolder=$query->first();
                $allSerdSocialFolders=SerdSocialFolder::where('serd_card_id', '=', $serdCard->id)->get();
            }
            return [ "errorNumber"=>0,"message"=>"OK","serdCard" => $serdCard,"userIstanceId" => $request['id'],"SerdToxicologyReport"=>$SerdToxicologyReport,"SerdPsychologicalAnamnesis"=>$SerdPsychologicalAnamnesis,"SerdSocialFolder"=>$SerdSocialFolder,"allSerdToxicologyReports" => $allSerdToxicologyReports,"allSerdPsychologicalAnamneses"=>$allSerdPsychologicalAnamneses,"allSerdSocialFolder"=>$allSerdSocialFolders];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }      
    }
    public function getCurrentToxicologyReportBySerdId(Request $request){
        if (SerdToxicologyReport::where('serd_card_id', '=', $request['id'])->exists()) {
            $query=SerdToxicologyReport::where('serd_card_id', '=', $request['id'])->orderBy('tsa_date', 'desc');
            $SerdToxicologyReport=$query->first();
            return [ "errorNumber"=>0,"message"=>"OK","currentSerdToxicologyReport" => $SerdToxicologyReport,"SerdId" => $request['id']];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }  
    }
    public function getCurrentPsychologicalAnamnesisBySerdId(Request $request){
        if (SerdPsychologicalAnamnesis::where('serd_card_id', '=', $request['id'])->exists()) {
            $query=SerdPsychologicalAnamnesis::where('serd_card_id', '=', $request['id'])->orderBy('psa_date', 'desc');
            $SerdPsychologicalAnamnesis=$query->first();
            return [ "errorNumber"=>0,"message"=>"OK","currentSerdPsychologicalAnamnesis" => $SerdPsychologicalAnamnesis,"SerdId" => $request['id']];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }  

    }
    public function getCurrentSocialFolderBySerdId(Request $request){
        if (SerdSocialFolder::where('serd_card_id', '=', $request['id'])->exists()) {
            $query=SerdSocialFolder::where('serd_card_id', '=', $request['id'])->orderBy('sf_date', 'desc');
            $SerdSocialFolder=$query->first();
            return [ "errorNumber"=>0,"message"=>"OK","currentSerdSocialFolder" => $SerdSocialFolder,"SerdId" => $request['id']];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }  
    }        
    public function getToxicologyReportsBySerdId(Request $request){
        if (SerdToxicologyReport::where('serd_card_id', '=', $request['id'])->exists()) {
            $query=SerdToxicologyReport::where('serd_card_id', '=', $request['id']);
            $SerdToxicologyReport=$query->get();
            return [ "errorNumber"=>0,"message"=>"OK","SerdToxicologyReport" => $SerdToxicologyReport,"SerdId" => $request['id']];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }      
    }
    public function getPsychologicalAnamnesesBySerdId(Request $request){
        if (SerdPsychologicalAnamnesis::where('serd_card_id', '=', $request['id'])->exists()) {
            $query=SerdPsychologicalAnamnesis::where('serd_card_id', '=', $request['id']);
            $SerdPsychologicalAnamnesis=$query->get();
            return [ "errorNumber"=>0,"message"=>"OK","SerdPsychologicalAnamnesis" => $SerdPsychologicalAnamnesis,"SerdId" => $request['id']];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }        
    }
    public function getSocialFoldersBySerdId(Request $request){
        if (SerdSocialFolder::where('serd_card_id', '=', $request['id'])->exists()) {
            $query=SerdSocialFolder::where('serd_card_id', '=', $request['id']);
            $SerdSocialFolder=$query->get();
            return [ "errorNumber"=>0,"message"=>"OK","SerdSocialFolder" => $SerdSocialFolder,"SerdId" => $request['id']];
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
                            case 'txc':
                                $_serd = $this->addSerdCard($request);
                                if($_serd){
                                    $_serdId=$_serd->id;
                                }
                                else{
                                    return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
                                }
                                break;
                            default:
                                if($request->has('serdId')){
                                    if (SerdToxicologyReport::where('serd_card_id', '=', $request->input('serdId'))->exists()) {
                                        $_serdId=$request->input('serdId');
                                    }else{
                                        return ["errorNumber"=>2,"message"=>"Salvare Prima la scheda tossicologica"];
                                    }
                                }else{
                                    return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
                                }
                        }
                    }
                }elseif($request->input('action')=='update'){
                    $_serdId=$request->input('serdId');
                }
            }else{
                return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
            }
            if($request->has('section')){
                switch ($request->input('section')) {
                    case 'txc':
                        return  $this->addToxicologyReport($request,$_serdId);
                        break;
                    case 'psy':
                        return $this->addPsychologicalAnamnesis($request,$_serdId);
                        break;
                    case 'sf':
                        return $this->addSocialFolder($request,$_serdId);
                        break;
                }
            }else{
                return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
            }
            
        }else{
            return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
        }
    }
    public function addSerdCard(Request $request){
        $now=date("Y-m-d H:i:s");
        $userInstance=$request->input('userInstance');
        $userId=$request->input('userId');
        $_serd = new SerdCard;
        $_serd->user_instance_id=$userInstance;
        $_serd->user_id=$userId;
        $_serd->serd_date=$now;
        $_serd->save();
        return $_serd;
    }
    public function addToxicologyReport(Request $request,$serdId){
        $userId=$request->input("userId");
        $_toxicologyAnamnesis = new SerdToxicologyReport;
        $now=date("Y-m-d H:i:s");  
        $_toxicologyAnamnesis->serd_card_id=$serdId; 
        if($request->has('doctorId')){
            $_toxicologyAnamnesis->id_doctor=$request->input('doctorId');
        }
        if($request->has('doctorName')){
            $_toxicologyAnamnesis->doctor_name=$request->input('doctorName');
        }
        if($request->has('doctorUserName')){
            $_toxicologyAnamnesis->doctor_lastname=$request->input('doctorUserName');
        }
        $_toxicologyAnamnesis->tsa_date=$now;
        if($request->has('serdCard')){
            $serdCardArr = json_decode($request->input('serdCard'), true);
            if(array_key_exists('priSubce',$serdCardArr)){
                $_toxicologyAnamnesis->pri_subce=$serdCardArr['priSubce'];
            }
            if(array_key_exists('ageFirstTakePriSubce',$serdCardArr)){
                $_toxicologyAnamnesis->age_first_take_pri_subce=$serdCardArr['ageFirstTakePriSubce'];
            }
            if(array_key_exists('ageContinuedUsePriSubce',$serdCardArr)){
                $_toxicologyAnamnesis->age_continued_use_pri_subce=$serdCardArr['ageContinuedUsePriSubce'];
            }
            if(array_key_exists('waysTakingPriSubce',$serdCardArr)){
                $_toxicologyAnamnesis->ways_taking_pri_subce=$serdCardArr['waysTakingPriSubce'];
            }
            if(array_key_exists('frequencyTakingPriSubce',$serdCardArr)){
                $_toxicologyAnamnesis->frequency_taking_pri_subce=$serdCardArr['frequencyTakingPriSubce'];
            }
            if(array_key_exists('dosePriSubce',$serdCardArr)){
                $_toxicologyAnamnesis->dose_pri_subce= $serdCardArr['dosePriSubce'];
            }
            if(array_key_exists('secSubce',$serdCardArr)){
                $_toxicologyAnamnesis->sec_subce=$serdCardArr['secSubce'];
            }
            if(array_key_exists('ageFirstTakeSecSubce',$serdCardArr)){
                $_toxicologyAnamnesis->age_first_take_sec_subce=$serdCardArr['ageFirstTakeSecSubce'];
            }
            if(array_key_exists('ageContinuedUseSecSubce',$serdCardArr)){
                $_toxicologyAnamnesis->age_continued_use_sec_subce=$serdCardArr['ageContinuedUseSecSubce'];
            }
            if(array_key_exists('waysTakingSecSubce',$serdCardArr)){
                $_toxicologyAnamnesis->ways_taking_sec_subce=$serdCardArr['waysTakingSecSubce'];
            }
            if(array_key_exists('frequencyTakingSecSubce',$serdCardArr)){
                $_toxicologyAnamnesis->frequency_taking_sec_subce=$serdCardArr['frequencyTakingSecSubce'];
            }
            if(array_key_exists('doseSecSubce',$serdCardArr)){
                $_toxicologyAnamnesis->dose_sec_subce=$serdCardArr['doseSecSubce'];
            }
            if(array_key_exists('terSubce',$serdCardArr)){
                $_toxicologyAnamnesis->ter_subce=$serdCardArr['terSubce'];
            }
            if(array_key_exists('ageFirstTakeTerSubce',$serdCardArr)){
                $_toxicologyAnamnesis->age_first_take_ter_subce=$serdCardArr['ageFirstTakeTerSubce'];
            }
            if(array_key_exists('ageContinuedUseTerSubce',$serdCardArr)){
                $_toxicologyAnamnesis->age_continued_use_ter_subce=$serdCardArr['ageContinuedUseTerSubce'];
            }
            if(array_key_exists('waysTakingTerSubce',$serdCardArr)){
                $_toxicologyAnamnesis->ways_taking_ter_subce=$serdCardArr['waysTakingTerSubce'];
            }
            if(array_key_exists('frequencyTakingTerSubce',$serdCardArr)){
                $_toxicologyAnamnesis->frequency_taking_ter_subce=$serdCardArr['frequencyTakingTerSubce'];
            }
            if(array_key_exists('doseTerSubce',$serdCardArr)){
                $_toxicologyAnamnesis->dose_ter_subce=$serdCardArr['doseTerSubce'];
            }
            if(array_key_exists('otherSubce',$serdCardArr)){
                $_toxicologyAnamnesis->other_subce=$serdCardArr['otherSubce'];
            }
            if(array_key_exists('serdFacility',$serdCardArr)){
                $_toxicologyAnamnesis->serd_facility=$serdCardArr['serdFacility'];
            }
            if(array_key_exists('serdFacilityDesc',$serdCardArr)){
                $_toxicologyAnamnesis->serd_facility_desc=$serdCardArr['serdFacilityDesc'];
            }
            if(array_key_exists('otherSerdFacility',$serdCardArr)){
                $_toxicologyAnamnesis->other_serd_facility=$serdCardArr['otherSerdFacility'];
            }
            if(array_key_exists('otherSerdFacilityDesc',$serdCardArr)){
                $_toxicologyAnamnesis->other_serd_facility_desc=$serdCardArr['otherSerdFacilityDesc'];
            }
            if(array_key_exists('psychotherapeuticTreatments',$serdCardArr)){
                $_toxicologyAnamnesis->psychotherapeutic_treatments=$serdCardArr['psychotherapeuticTreatments'];
            }
            if(array_key_exists('psychotherapeuticTreatmentsDesc',$serdCardArr)){
                $_toxicologyAnamnesis->psychotherapeutic_treatments_desc=$serdCardArr['psychotherapeuticTreatmentsDesc'];
            }
            if(array_key_exists('therapeuticCommunityTreatments',$serdCardArr)){
                $_toxicologyAnamnesis->therapeutic_community_treatments=$serdCardArr['therapeuticCommunityTreatments'];
            }
            if(array_key_exists('therapeuticCommunityTreatmentsDesc',$serdCardArr)){
                $_toxicologyAnamnesis->therapeutic_community_treatments_desc=$serdCardArr['therapeuticCommunityTreatmentsDesc'];
            }
            if(array_key_exists('verificationContacts',$serdCardArr)){
                $_toxicologyAnamnesis->verification_contacts=$serdCardArr['verificationContacts'];
            }
            if(array_key_exists('overdoseEpisodes',$serdCardArr)){
                $_toxicologyAnamnesis->overdose_episodes=$serdCardArr['overdoseEpisodes'];
            }
            if(array_key_exists('overdoseEpisodesDesc',$serdCardArr)){
                $_toxicologyAnamnesis->overdose_episodes_desc=$serdCardArr['overdoseEpisodesDesc'];
            }
            if(array_key_exists('urineTestsDrugMetabolites',$serdCardArr)){
                $_toxicologyAnamnesis->urine_tests_drug_metabolites=$serdCardArr['urineTestsDrugMetabolites'];
            }
            if(array_key_exists('urineTestsDrugMetabolitesDesc',$serdCardArr)){
                $_toxicologyAnamnesis->urine_tests_drug_metabolites_desc=$serdCardArr['urineTestsDrugMetabolitesDesc'];
            }
            if(array_key_exists('venosclerosisSigns',$serdCardArr)){
                $_toxicologyAnamnesis->venosclerosis_signs=$serdCardArr['venosclerosisSigns'];
            }
            if(array_key_exists('venipunctureMarks',$serdCardArr)){
                $_toxicologyAnamnesis->venipuncture_marks=$serdCardArr['venipunctureMarks'];
            }
        }
        if($request->has('assessmentReason')){
            $_toxicologyAnamnesis->assessment_reason=$request->input('asssessmentReason');    
        }
        if($request->has('restingPulseRate')){   
            $_toxicologyAnamnesis->resting_pulse_rate=$request->input('restingPulseRate'); 
        }
        if($request->has('cows')){
            $cows = json_decode($request->input('cows'), true);
            if(array_key_exists('giUpset',$cows)){
                $_toxicologyAnamnesis->gi_Upset=$cows['giUpset'];
            }else{
                $_toxicologyAnamnesis->gi_Upset=0;
            }
            if(array_key_exists('sweating',$cows)){
                $_toxicologyAnamnesis->sweating=$cows['sweating'];
            }else{
                $_toxicologyAnamnesis->sweating=0;
            }
            if(array_key_exists('tremor',$cows)){
                $_toxicologyAnamnesis->tremor=$cows['tremor'];
            }else{
                $_toxicologyAnamnesis->tremor=0;
            }
            if(array_key_exists('restlessness',$cows)){
                $_toxicologyAnamnesis->restlessness=$cows['restlessness'];
            }else{
                $_toxicologyAnamnesis->restlessness=0;
            }
            if(array_key_exists('yawning',$cows)){
                $_toxicologyAnamnesis->yawning=$cows['yawning'];
            }else{
                $_toxicologyAnamnesis->yawning=0;
            }
            if(array_key_exists('pupilSize',$cows)){
                $_toxicologyAnamnesis->pupil_size=$cows['pupilSize'];
            }else{
                $_toxicologyAnamnesis->pupil_size=0;
            }
            if(array_key_exists('anxietyOrIrritability',$cows)){
                $_toxicologyAnamnesis->anxiety_or_irritability=$cows['anxietyOrIrritability'];
            }else{
                $_toxicologyAnamnesis->anxiety_or_irritability=0;
            }
            if(array_key_exists('boneOrJointAches',$cows)){
                $_toxicologyAnamnesis->bone_or_joint_aches= $cows['boneOrJointAches'];
            }else{
                $_toxicologyAnamnesis->bone_or_joint_aches=0;
            }
            if(array_key_exists('gooseflashSkin',$cows)){
                $_toxicologyAnamnesis->gooseflash_skin=$cows['gooseflashSkin'];
            }else{
                $_toxicologyAnamnesis->gooseflash_skin=0;
            }
            if(array_key_exists('runnyNoseOrTearing',$cows)){
                $_toxicologyAnamnesis->runny_nose_or_tearing=$cows['runnyNoseOrTearing'];
            }else{
                $_toxicologyAnamnesis->runny_nose_or_tearing=0;
            }
        }
        if($request->has('totalAbstinenceDegrreeScore')){   
            $_toxicologyAnamnesis->total_abstinence_degrree_score=$request->input('totalAbstinenceDegrreeScore'); 
        }
        if($request->has('abstinenceDegreeScoreDescription')){   
            $_toxicologyAnamnesis->abstinence_degree_score_description=$request->input('abstinenceDegreeScoreDescription'); 
        }
        $_toxicologyAnamnesis->save();
        if($_toxicologyAnamnesis){
            return ["errorNumber"=>0,"message"=>"ok","txc"=>$_toxicologyAnamnesis];

        }else{
            return ["errorNumber"=>3,"message"=>"Scheda non salvata contattare l'amministratore di sistema"];
        }
    }
    public function addPsychologicalAnamnesis(Request $request,$serdId){
        $_psycologyAnamnesis = new SerdPsychologicalAnamnesis;
        $now=date("Y-m-d H:i:s");  
        $_psycologyAnamnesis->serd_card_id=$serdId;
        if($request->has('doctorId')){
            $_psycologyAnamnesis->id_doctor=$request->input('doctorId');
        }
        if($request->has('doctorName')){
            $_psycologyAnamnesis->doctor_name=$request->input('doctorName');
        }
        if($request->has('doctorUserName')){
            $_psycologyAnamnesis->doctor_lastname=$request->input('doctorUserName');
        }
        $_psycologyAnamnesis->psa_date =$now;
        if($request->has('serdCardPsy')){
            $serdCardPsy = json_decode($request->input('serdCardPsy'), true);
            if(array_key_exists('psychologicalHistoryText',$serdCardPsy)){
                $_psycologyAnamnesis->psychological_history=$serdCardPsy['psychologicalHistoryText'];
            }
            if(array_key_exists('psychologicalDiagnosisText',$serdCardPsy)){
                $_psycologyAnamnesis->psychological_diagnosis=$serdCardPsy['psychologicalDiagnosisText'];
            }
            if(array_key_exists('therapeuticProgram',$serdCardPsy)){
                $_psycologyAnamnesis->therapeutic_program=$serdCardPsy['therapeuticProgram'];
            }
        }
        $_psycologyAnamnesis->save();
        if($_psycologyAnamnesis){
            return ["errorNumber"=>0,"message"=>"ok","psy"=>$_psycologyAnamnesis];

        }else{
            return ["errorNumber"=>3,"message"=>"Scheda non salvata contattare l'amministratore di sistema"];
        }
    }
    public function addSocialFolder(Request $request,$serdId){
        $_socialFolder = new SerdSocialFolder;

        $now=date("Y-m-d H:i:s");  
        $_socialFolder->serd_card_id=$serdId;
        if($request->has('doctorId')){
            $_socialFolder->id_doctor=$request->input('doctorId');
        }
        if($request->has('doctorName')){
            $_socialFolder->doctor_name=$request->input('doctorName');
        }
        if($request->has('doctorUserName')){
            $_socialFolder->doctor_lastname=$request->input('doctorUserName');
        }
        $_socialFolder->sf_date =$now;
        $socialFolder = json_decode($request->input('serdCardSf'), true);
        if(array_key_exists('userRequest',$socialFolder)){	
            $_socialFolder->user_request=$socialFolder['userRequest'];
        }
        if(array_key_exists('onSendingSpecify',$socialFolder)){
            $_socialFolder->on_sending_specify=$socialFolder['onSendingSpecify'];
        }
        if(array_key_exists('serdOfResidence',$socialFolder)){
            $_socialFolder->serd_of_residence=$socialFolder['serdOfResidence'];
        }
        if(array_key_exists('socialFamilyHistory',$socialFolder)){
            $_socialFolder->social_family_history=$socialFolder['socialFamilyHistory'];
        }
        if(array_key_exists('whoCurrentlyLiveWith',$socialFolder)){
            $_socialFolder->who_currently_live_with=$socialFolder['whoCurrentlyLiveWith'];
        }
        if(array_key_exists('userFamiliarResources',$socialFolder)){
            $_socialFolder->user_familiar_resources=$socialFolder['userFamiliarResources'];
        }
        if(array_key_exists('schooling',$socialFolder)){
            $_socialFolder->schooling=$socialFolder['schooling'];
        }
        if(array_key_exists('workingActivity',$socialFolder)){
            $_socialFolder->working_activity=$socialFolder['workingActivity'];
        }
        if(array_key_exists('assessmentSubstanceUseBehaviors',$socialFolder)){
            $_socialFolder->assessment_substance_use_behaviors=$socialFolder['assessmentSubstanceUseBehaviors'];
        }
        if(array_key_exists('juridicalStatusEvaluationDeviantBehaviours',$socialFolder)){
            $_socialFolder->juridical_status_evaluation_deviant_behaviours=$socialFolder['juridicalStatusEvaluationDeviantBehaviours'];
        }
        if(array_key_exists('detention',$socialFolder)){
            $_socialFolder->detention=$socialFolder['detention'];
        }
        if(array_key_exists('detentionSpecifications',$socialFolder)){
            $_socialFolder->detention_specifications=$socialFolder['detentionSpecifications'];
        }
        if(array_key_exists('legalPosition',$socialFolder)){
            $_socialFolder->legal_position=$socialFolder['legalPosition'];
        }
        if(array_key_exists('endSentence',$socialFolder)){
            $_socialFolder->end_sentence=$socialFolder['endSentence'];
        }
        if(array_key_exists('previousAlternativeMeasures',$socialFolder)){
            $_socialFolder->previous_alternative_measures=$socialFolder['previousAlternativeMeasures'];
        }
        if(array_key_exists('servicesInvolved',$socialFolder)){
            $_socialFolder->services_involved=$socialFolder['servicesInvolved'];
        }
        if(array_key_exists('interventionHypothesis',$socialFolder)){
            $_socialFolder->intervention_hypothesis=$socialFolder['interventionHypothesis'];
        }
        if(array_key_exists('otherInformation',$socialFolder)){
            $_socialFolder->other_information=$socialFolder['otherInformation'];
        }
        $_socialFolder->save();
        if($_socialFolder){
            return ["errorNumber"=>0,"message"=>"ok","sf"=>$_socialFolder];

        }else{
            return ["errorNumber"=>3,"message"=>"Scheda non salvata contattare l'amministratore di sistema"];
        }
    }

    // public function printArchive(Request $request){

    //     if($request['panel']){
    //         switch ($request['panel']) {
    //             case 'txc':
    //                 if (SerdToxicologyReport::where('id', '=', $request['id'])->exists()) {
    //                     $query=SerdToxicologyReport::where('id', '=', $request['id'])->orderBy('tsa_date', 'desc');
    //                     $SerdToxicologyArchive=$query->first();
    //                 }
    //                 break;
    //             case 'psy':
    //                 if (SerdPsychologicalAnamnesis::where('id', '=', $request['id'])->exists()) {
    //                     $query=SerdPsychologicalAnamnesis::where('id', '=', $request['id'])->orderBy('psa_date', 'desc');
    //                     $SerdPsychologicalArchive=$query->first();
    //                 }
    //             break;
    //             case 'sf':
    //                 if (SerdSocialFolder::where('id', '=', $request['id'])->exists()) {
    //                     $query=SerdSocialFolder::where('id', '=', $request['id'])->orderBy('sf_date', 'desc');
    //                     $SerdSocialFolder=$query->first();
    //                 }
    //             break;
    //         }
    //     }





    //      	//id_doctor 	doctor_name 	doctor_lastname 	tsa_date 	pri_subce 	age_first_take_pri_subce 	age_continued_use_pri_subce 	ways_taking_pri_subce


    //     $pdf = new PDFClass();
    //     $pdf->AliasNbPages();
    //     $pdf->SetFont('Arial','B');

    //     $pdf->AddPage('L', 'A4'); 
    //     $path = storage_path('/app/public/images/logoAsl.png');
    //     $path2 = storage_path('/app/public/images/logo-regione-lazio.png');
    //     $headerPdf="Serd Card di: Mario Rossi".$request['id']." ".$request['panel'];
        
    //     $pdf->Image($path,10,0,60,0,'PNG');
    //     $pdf->Image($path2,90,0,45,0,'PNG');
    //     $pdf->Ln(15);  
    //     $pdf->Cell(60,5,$headerPdf,0);
    //     $pdf->Ln(15); 
    //     if($request['id']){
    //         $pdf->SetFont('Arial','B',9);
    //         $pdf->Cell(60,5,$request['id']);
    //     }

    //     if($request['panel']){
    //         $pdf->SetFont('Arial','B',9);
    //         $pdf->Cell(60,5,$request['panel']);
    //     }

    //     $pdf->Output();
    //     exit;     

    // }
    public function destroy(Request $request){

    }
}

// addSerdCard
// getSerdCards
// getSerdCardById
// getSerdCardByUserIstanceId
// deleteSerdCard
