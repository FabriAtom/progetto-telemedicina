<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;



use App\Models\NursingTherapy;

use App\Models\monitoringClinicalParameter;
use App\Models\ClinicalParameterCollection;
use App\Models\TraceabilityTherapy;
use App\Models\CollectionFormHgt;


use App\Classes\PDFClass;
use Codedge\Fpdf\Fpdf\Fpdf;

use Carbon\Carbon;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class NursingRecordController extends Controller
{



    // --------------------------------------------------------------------------
    // PsyRehabilitationPsychiatricCard
    
    // public function printPdf(Request $request) {

    //     $psyRehab = PsyRehabilitationPsychiatricCard::where('id',2)->first();

    //     $pdf = new PDFClass();
    //     if (preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"])){
    //         header("Content-type: application/PDF");
    //     } else {
    //         header("Content-type: application/PDF");
    //         header("Content-Type: a \pplication/pdf");
    //     }
    //     $pdf->SetAutoPageBreak(true, 30);

    //     $pdf->SetTitle('PDF PsyRehabilitationPsychiatricCard');
    
    //     $pdf->AliasNbPages();

    //     $pdf->AddPage();

    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Cell(0,6,'Cartella Informatizzata',0,0,'C',true);
    //     $pdf->Ln(8);
    //     $pdf->Cell(0,6,'Area Riabilitazione Pschiatrica (TRP)',0,0,'C',true);

    //     $pdf->Ln(15);

    //     $pdf->SetLineWidth(.1);

    //     $pdf->SetFont('Arial','',12);


    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,'Breve Descrizione Progetto:',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(10);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->MultiCell(0,10,$psyRehab->project_description,0,2,'L',true);
    //     $pdf->Ln(5);


    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,'Obiettivi In Cui Viene Specificata Area Trattamento:',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(10);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->MultiCell(0,10,$psyRehab->treatment_area_objective,0,2,'L',true);
    //     $pdf->Ln(5);


    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,'Responsabile Progetto:',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(10);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->MultiCell(0,10,$psyRehab->project_manager,0,2,'L',true);
    //     $pdf->Ln(5);

    //     $pdf->Output("stampa.pdf", "I");
    //     exit();
    // }

 // ------------------------------------------------------------------------------------------------










    public function index(Request $request){
        $result= TraceabilityTherapy::all();
        // $result= NursingTherapy::all();

        if($result){
            return [ "errorNumber"=>0,"message"=>"OK","remarks" => $result];
        }else{
            return ['errorNumber'=>'5000','descrizione'=>'no records found'];
        }  
    }




    public function getTraceabilityTherapyById(Request $request){
        if (TraceabilityTherapy::where('user_instance_id', '=', 36)->exists()) {
            $query=TraceabilityTherapy::where('user_instance_id', '=',36);
            $TraceabilityTherapy=$query->get();

            return [ "errorNumber"=>0,"message"=>"OK","TraceabilityTherapy" => $TraceabilityTherapy,"TraceabilityTherapysId" => 36];
        }else{
            return ['errorNumber'=>5000,'descrizione'=>'no records found'];
        }
    }

    public function getTraceabilityTherapysByUserIstanceId(Request $request){

        if (TraceabilityTherapy::where('user_instance_id', '=',36)->exists()) {
            $query=TraceabilityTherapy::where('user_instance_id', '=', 36);
            $allTraceabilityTherapys=$query->first();  

            return [ "errorNumber"=>0,"message"=>"OK","TraceabilityTherapy" => $allTraceabilityTherapys,"TraceabilityTherapysId" => 36];
        }else{
            return ['errorNumber'=>5000,'descrizione'=>'no records found'];
        }
    }

    public function getCurrentTraceabilityTherapyById(Request $request){
        if (TraceabilityTherapy::where('user_instance_id', '=',36)->exists()) {
            $query=TraceabilityTherapy::where('user_instance_id', '=',36)->orderBy('th_date', 'desc');
            $TraceabilityTherapy=$query->first();
            return [ "errorNumber"=>0,"message"=>"OK","CurrentTraceabilityTherapy" => $TraceabilityTherapy,"TraceabilityTherapysId" => 36];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }  
    }










    public function getMonitoringClinicalParameterById(Request $request){
        // return 'mario';
        if (MonitoringClinicalParameter::where('user_instance_id', '=', 36)->exists()) {
            $query=MonitoringClinicalParameter::where('user_instance_id', '=',36);
            $monitoringClinicalParameter=$query->get();

            return [ "errorNumber"=>0,"message"=>"OK","monitoringClinicalParameter" => $monitoringClinicalParameter,"monitoringClinicalParametersId" => 36];
        }else{
            return ['errorNumber'=>5000,'descrizione'=>'no records found'];
        }
    }

    public function getMonitoringClinicalParametersByUserIstanceId(Request $request){

        if (MonitoringClinicalParameter::where('user_instance_id', '=', 36)->exists()) {
            $query=MonitoringClinicalParameter::where('user_instance_id', '=', 36);
            $allMonitoringClinicalParameters=$query->first();

            return [ "errorNumber"=>0,"message"=>"OK","MonitoringClinicalParameter" => $allMonitoringClinicalParameters,"monitoringClinicalParametersId" => 36];
        }else{
            return ['errorNumber'=>5000,'descrizione'=>'no records found'];
        }
    }
    
    public function getCurrentMonitoringClinicalParameterById(Request $request){
        if (MonitoringClinicalParameter::where('user_instance_id', '=',36)->exists()) {
            $query=MonitoringClinicalParameter::where('user_instance_id', '=',36)->orderBy('th_date', 'desc');
            $MonitoringClinicalParameter=$query->first();
            return [ "errorNumber"=>0,"message"=>"OK","CurrentMonitoringClinicalParameter" => $MonitoringClinicalParameter,"MonitoringClinicalParametersId" => 36];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }  
    }












    public function getClinicalParameterCollectionById(Request $request){
        // return 'mario';
        if (ClinicalParameterCollection::where('user_instance_id', '=', 36)->exists()) {
            $query=ClinicalParameterCollection::where('user_instance_id', '=',36);
            $clinicalParameterCollection=$query->get();

            return [ "errorNumber"=>0,"message"=>"OK","ClinicalParameterCollection" => $ClinicalParameterCollection,"ClinicalParameterCollectionsId" => 36];
        }else{
            return ['errorNumber'=>5000,'descrizione'=>'no records found'];
        }
    }

    public function getClinicalParameterCollectionsByUserIstanceId(Request $request){

        if (ClinicalParameterCollection::where('user_instance_id', '=', 36)->exists()) {
            $query=ClinicalParameterCollection::where('user_instance_id', '=', 36);
            $allClinicalParameterCollections=$query->first();

            return [ "errorNumber"=>0,"message"=>"OK","ClinicalParameterCollection" => $allClinicalParameterCollections,"ClinicalParameterCollectionsId" => 36];
        }else{
            return ['errorNumber'=>5000,'descrizione'=>'no records found'];
        }
    }
    
    public function getCurrentClinicalParameterCollectionById(Request $request){
        if (ClinicalParameterCollection::where('user_instance_id', '=',36)->exists()) {
            $query=ClinicalParameterCollection::where('user_instance_id', '=',36)->orderBy('cpc_date', 'desc');
            $ClinicalParameterCollection=$query->first();
            return [ "errorNumber"=>0,"message"=>"OK","CurrentClinicalParameterCollection" => $ClinicalParameterCollection,"ClinicalParameterCollectionsId" => 36];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }  
    }







    


    public function getCollectionFormHgtById(Request $request){
        // return 'mario';
        if (CollectionFormHgt::where('user_instance_id', '=', 36)->exists()) {
            $query=CollectionFormHgt::where('user_instance_id', '=',36);
            $CollectionFormHgt=$query->get();

            return [ "errorNumber"=>0,"message"=>"OK","CollectionFormHgt" => $CollectionFormHgt,"CollectionFormHgtsId" => 36];
        }else{
            return ['errorNumber'=>5000,'descrizione'=>'no records found'];
        }
    }

    public function getCollectionFormHgtsByUserIstanceId(Request $request){

        if (CollectionFormHgt::where('user_instance_id', '=', 36)->exists()) {
            $query=CollectionFormHgt::where('user_instance_id', '=', 36);
            $allCollectionFormHgts=$query->first();

            return [ "errorNumber"=>0,"message"=>"OK","CollectionFormHgt" => $allCollectionFormHgts,"CollectionFormHgtsId" => 36];
        }else{
            return ['errorNumber'=>5000,'descrizione'=>'no records found'];
        }
    }
    
    public function getCurrentCollectionFormHgtById(Request $request){
        if (CollectionFormHgt::where('user_instance_id', '=',36)->exists()) {
            $query=CollectionFormHgt::where('user_instance_id', '=',36)->orderBy('hgt_date', 'desc');
            $CollectionFormHgt=$query->first();
            return [ "errorNumber"=>0,"message"=>"OK","CurrentCollectionFormHgt" => $CollectionFormHgt,"CollectionFormHgtsId" => 36];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }  
    }






    public function getNursingTherapyByUserIstanceId(Request $request){

        $today=Carbon::now();

        if (NursingTherapy::where('user_instance_id', '=', 36)->exists()) {

            $query="SELECT * FROM `therapies` WHERE (`user_instance_id`=".$request['id'].") AND (`deleted` = 0) AND (`endTherapy` > '" .$today. "' OR `endTherapy` IS NULL) ORDER BY `created_at`";

            $result = DB::select(DB::raw($query));

            return [ "errorNumber"=>0,"message"=>"OK","therapies" => $result,"userInstanceId" => $request['userInstanceId']];

        }else{
            return ['errorNumber'=>'5000','descrizione'=>'no records found'];
        }
    }
































    public function store(Request $request){
        if ($request->has(['userId', 'userInstanceId'])) {
            if ($request->has('action')) {
                if($request->input('action')=='store'){
                    if($request->has('section')){
                        switch ($request->input('section')) {
                            case 'th':
                                $_nurs = $this->addTraceabilityTherapy($request);
                                if($_nurs){
                                    $_nursId=$_nurs->id;
                                }
                                else{
                                    return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
                                }
                                break;

                            case 'nh':
                                return  $this->addNursingTherapy($request);
                                if($_nurs){
                                    $_nursId=$_nurs->id;
                                }
                                else{
                                    return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
                                }
                                break;

                            case 'mcp':
                                $_nurs = $this->addMonitoringClinicalParameter($request);
                                if($_nurs){
                                    $_nursId=$_nurs->id;
                                }
                                else{
                                    return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
                                }
                                break;
                                // 
                            case 'cpc':
                                $_nurs = $this->addClinicalParameterCollection($request);
                                if($_nurs){
                                    $_nursId=$_nurs->id;
                                }
                                else{
                                    return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
                                }
                                break;
                            case 'cpc':
                                $_nurs = $this->addCollectionFormHgt($request);
                                if($_nurs){
                                    $_nursId=$_nurs->id;
                                }
                                else{
                                    return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
                                }
                                break;
                            default:
                                if($request->has('nursId')){
                                    if (NursingTherapies::where('user_instance_id', '=', $request->input('user_instance_id', 36))->exists()) {
                                        $_nursId=$request->input('nursId');
                                    }else{
                                        return ["errorNumber"=>2,"message"=>"message errorNumber"];
                                    }
                                }else{
                                    return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
                                }
                        }
                    }
                }elseif($request->input('action')=='update'){
                    $_nursId=$request->input('nursId');
                }
            }else{
                return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
            }
            if($request->has('section')){
                switch ($request->input('section')) {
                    case 'nh':
                        return  $this->addNursingTherapy($request,$_nursId);
                        break; 
                    case 'th':
                        return  $this->addTraceabilityTherapy($request,$_nursId);
                        break; 
                    case 'th':
                        return  $this->addMonitoringClinicalParameter($request,$_nursId);
                        break; 
                    case 'th':
                        return  $this->addClinicalParameterCollection($request,$_nursId);
                        break; 
                    case 'th':
                        return  $this->addCollectionFormHgt($request,$_nursId);
                        break;    
                }
            }else{
                return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
            }
            
        }else{
            return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
        }
    }










    public function addNursingTherapy(Request $request,$nursId){
        $userInstanceId=$request->input("user_instance_id",36);
        $_nursingTh = new NursingTherapy;
        $now=date("Y-m-d H:i:s");
        $_nursingTh->user_instance_id=$nursId;
        if($request->has('doctorId')){
            $_nursingTh->id_doctor=$request->input('doctorId');
        }
        if($request->has('doctorName')){
            $_nursingTh->doctor_name=$request->input('doctorName');
        }
        if($request->has('doctorUserName')){
            $_nursingTh->doctor_lastname=$request->input('doctorUserName');
        }
        $_nursingTh->th_date=$now;

        if($request->has('NursingTherapy')){
            $psyCardArr = json_decode($request->input('NursingTherapy'), true);
            if(array_key_exists('externalDoctorPrescription',$psyCardArr)){
                $_nursingTh->external_doctor_prescription=$psyCardArr['externalDoctorPrescription'];
            }
            if(array_key_exists('drug',$psyCardArr)){
                $_nursingTh->drug=$psyCardArr['drug'];
            }
            if(array_key_exists('posology',$psyCardArr)){
                $_nursingTh->posology=$psyCardArr['posology'];
            }
            if(array_key_exists('frequency',$psyCardArr)){
                $_nursingTh->frequency=$psyCardArr['frequency'];
            }
            if(array_key_exists('startTherapy',$psyCardArr)){
                $_nursingTh->start_therapy=$psyCardArr['startTherapy'];
            }
            if(array_key_exists('endTherapy',$psyCardArr)){
                $_nursingTh->end_therapy=$psyCardArr['endTherapy'];
            }
            if(array_key_exists('drugRoute',$psyCardArr)){
                $_nursingTh->drug_route=$psyCardArr['drugRoute'];
            }
            if(array_key_exists('morning',$psyCardArr)){
                $_nursingTh->morning=$psyCardArr['morning'];
            }
            if(array_key_exists('afternoon',$psyCardArr)){
                $_nursingTh->afternoon=$psyCardArr['afternoon'];
            }
            if(array_key_exists('evening',$psyCardArr)){
                $_nursingTh->evening=$psyCardArr['evening'];
            }
            if(array_key_exists('deleted',$psyCardArr)){
                $_nursingTh->deleted=$psyCardArr['deleted'];
            }
            if(array_key_exists('dateDeleted',$psyCardArr)){
                $_nursingTh->date_deleted=$psyCardArr['dateDeleted'];
            }
            if(array_key_exists('idDoctorDeleted',$psyCardArr)){
                $_nursingTh->id_doctor_deleted=$psyCardArr['idDoctorDeleted'];
            }
            if(array_key_exists('doctorDeletedName',$psyCardArr)){
                $_nursingTh->doctor_deleted_name=$psyCardArr['doctorDeletedName'];
            }
            if(array_key_exists('doctorDeletedLastname',$psyCardArr)){
                $_nursingTh->doctor_deleted_lastname=$psyCardArr['doctorDeletedLastname'];
            }
        }
        $_nursingTh->save();

        if($_nursingTh){
            return ["errorNumber"=>0,"message"=>"ok","th"=>$_nursingTh];

        }else{
            return ["errorNumber"=>3,"message"=>"Scheda non salvata contattare l'amministratore di sistema"];
        }
    }






















    public function addTraceabilityTherapy(request $request){
        $userInstanceId=$request->input("user_instance_id",36);
        $_traceTerapy = new TraceabilityTherapy;
        $now=date("Y-m-d H:i:s");
        $_traceTerapy->user_instance_id=$userInstanceId;
        if($request->has('doctorId')){
            $_traceTerapy->id_doctor=$request->input('doctorId');
        }
        if($request->has('doctorName')){
            $_traceTerapy->doctor_name=$request->input('doctorName');
        }
        if($request->has('doctorUserName')){
            $_traceTerapy->doctor_lastname=$request->input('doctorUserName');
        }
        $_traceTerapy->th_date=$now;


        if($request->has('TraceabilityTherapy')){
            $psyCardArr = json_decode($request->input('TraceabilityTherapy'), true);
            if(array_key_exists('thDate',$psyCardArr)){
                $_traceTerapy->th_date=$psyCardArr['departmentCpc'];
            }
            if(array_key_exists('drugsNotAdministered',$psyCardArr)){
                $_traceTerapy->drugs_not_administered=$psyCardArr['drugsNotAdministered'];
            }
            if(array_key_exists('drugs',$psyCardArr)){
                $_traceTerapy->drugs=$psyCardArr['drugs'];
            }

            if(array_key_exists('thFromThe',$psyCardArr)){
                $_traceTerapy->drugs=$psyCardArr['thFromThe'];
            }
            if(array_key_exists('thToThe',$psyCardArr)){
                $_traceTerapy->motivation_not_take_medicine=$psyCardArr['thToThe'];
            }
            if(array_key_exists('thHours',$psyCardArr)){
                $_traceTerapy->medical_alert=$psyCardArr['thHours'];
            }
            if(array_key_exists('thFrequency',$psyCardArr)){
                $_traceTerapy->medical_alert_note=$psyCardArr['thFrequency'];
            }

            if(array_key_exists('motivationNotTakeMedicine',$psyCardArr)){
                $_traceTerapy->motivation_not_take_medicine=$psyCardArr['motivationNotTakeMedicine'];
            }
            if(array_key_exists('medicalAlert',$psyCardArr)){
                $_traceTerapy->medical_alert=$psyCardArr['medicalAlert'];
            }
            if(array_key_exists('medicalAlertNote',$psyCardArr)){
                $_traceTerapy->medical_alert_note=$psyCardArr['medicalAlertNote'];
            }
            if(array_key_exists('doctorsPrescriptions',$psyCardArr)){
                $_traceTerapy->doctors_prescriptions=$psyCardArr['doctorsPrescriptions'];
            }
            if(array_key_exists('doctorsPrescriptionsNote',$psyCardArr)){
                $_traceTerapy->doctors_prescriptions_note=$psyCardArr['doctorsPrescriptionsNote'];
            }
          
        }
        $_traceTerapy->save();

        if($_traceTerapy){
            return ["errorNumber"=>0,"message"=>"ok","th"=>$_traceTerapy];

        }else{
            return ["errorNumber"=>3,"message"=>"Scheda non salvata contattare l'amministratore di sistema"];
        }
    }























    public function addClinicalParameterCollection(request $request){
        $userInstanceId=$request->input("user_instance_id",36);
        $_nursingCpc = new ClinicalParameterCollection;
        $now=date("Y-m-d H:i:s");
        $_nursingCpc->user_instance_id=$userInstanceId;
        if($request->has('doctorId')){
            $_nursingCpc->id_doctor=$request->input('doctorId');
        }
        if($request->has('doctorName')){
            $_nursingCpc->doctor_name=$request->input('doctorName');
        }
        if($request->has('doctorUserName')){
            $_nursingCpc->doctor_lastname=$request->input('doctorUserName');
        }
        $_nursingCpc->cpc_date=$now;


        if($request->has('nursCpc')){
            $psyCardArr = json_decode($request->input('nursCpc'), true);
            if(array_key_exists('departmentCpc',$psyCardArr)){
                $_nursingCpc->department_cpc=$psyCardArr['departmentCpc'];
            }
            if(array_key_exists('dateStartCollection',$psyCardArr)){
                $_nursingCpc->date_start_collection=$psyCardArr['dateStartCollection'];
            }
            if(array_key_exists('dateEndCollection',$psyCardArr)){
                $_nursingCpc->date_end_collection=$psyCardArr['dateEndCollection'];
            }
            if(array_key_exists('doctorPrescriber',$psyCardArr)){
                $_nursingCpc->doctor_prescriber=$psyCardArr['doctorPrescriber'];
            }
            if(array_key_exists('cpcDate',$psyCardArr)){
                $_nursingCpc->cpc_date=$psyCardArr['cpcDate'];
            }
            if(array_key_exists('collectionPa',$psyCardArr)){
                $_nursingCpc->collection_pa=$psyCardArr['collectionPa'];
            }
            if(array_key_exists('collectionFc',$psyCardArr)){
                $_nursingCpc->collection_fc=$psyCardArr['collectionFc'];
            }
            if(array_key_exists('collectionSpo2',$psyCardArr)){
                $_nursingCpc->collection_spo2=$psyCardArr['collectionSpo2'];
            }
            if(array_key_exists('collectionTc',$psyCardArr)){
                $_nursingCpc->collection_tc=$psyCardArr['collectionTc'];
            }
            if(array_key_exists('collectionOperatorSignature',$psyCardArr)){
                $_nursingCpc->collection_operator_signature=$psyCardArr['collectionOperatorSignature'];
            }
            if(array_key_exists('folderPageCollection',$psyCardArr)){
                $_nursingCpc->folder_page_collection=$psyCardArr['folderPageCollection'];
            }
        }
        $_nursingCpc->save();

        if($_nursingCpc){
            return ["errorNumber"=>0,"message"=>"ok","cpc"=>$_nursingCpc];

        }else{
            return ["errorNumber"=>3,"message"=>"Scheda non salvata contattare l'amministratore di sistema"];
        }
    }













    

    public function addCollectionFormHgt(request $request){
        $userInstanceId=$request->input("user_instance_id",36);
        $_nursingHgt = new CollectionFormHgt;
        $now=date("Y-m-d H:i:s");
        $_nursingHgt->user_instance_id=$userInstanceId;
        if($request->has('doctorId')){
            $_nursingHgt->id_doctor=$request->input('doctorId');
        }
        if($request->has('doctorName')){
            $_nursingHgt->doctor_name=$request->input('doctorName');
        }
        if($request->has('doctorUserName')){
            $_nursingHgt->doctor_lastname=$request->input('doctorUserName');
        }
        $_nursingHgt->cpc_date=$now;


        if($request->has('CollectionFormHgt')){
            $psyCardArr = json_decode($request->input('CollectionFormHgt'), true);
            if(array_key_exists('departmentHgt',$psyCardArr)){
                $_nursingHgt->department_hgt=$psyCardArr['departmentHgt'];
            }
            if(array_key_exists('dateStartCollectionHgt',$psyCardArr)){
                $_nursingHgt->date_start_collection_hgt=$psyCardArr['dateStartCollectionHgt'];
            }
            if(array_key_exists('dateEndCollectionHgt',$psyCardArr)){
                $_nursingHgt->date_end_collection_hgt=$psyCardArr['dateEndCollectionHgt'];
            }
            if(array_key_exists('doctorPrescriberHgt',$psyCardArr)){
                $_nursingHgt->doctor_prescriber_hgt=$psyCardArr['doctorPrescriberHgt'];
            }
            if(array_key_exists('hgtDate',$psyCardArr)){
                $_nursingHgt->hgt_date=$psyCardArr['hgtDate'];
            }
            if(array_key_exists('hours',$psyCardArr)){
                $_nursingHgt->hours=$psyCardArr['hours'];
            }
            if(array_key_exists('hgt',$psyCardArr)){
                $_nursingHgt->hgt=$psyCardArr['hgt'];
            }
            if(array_key_exists('hgtOperatorSignature',$psyCardArr)){
                $_nursingHgt->hgt_operator_signature=$psyCardArr['hgtOperatorSignature'];
            }
            if(array_key_exists('hgtFolderPage',$psyCardArr)){
                $_nursingHgt->hgt_folder_page=$psyCardArr['hgtFolderPage'];
            }
        }
        $_nursingHgt->save();

        if($_nursingHgt){
            return ["errorNumber"=>0,"message"=>"ok","hgt"=>$_nursingHgt];

        }else{
            return ["errorNumber"=>3,"message"=>"Scheda non salvata contattare l'amministratore di sistema"];
        }
    }
}
