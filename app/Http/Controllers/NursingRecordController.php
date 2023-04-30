<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Models\NursingTherapy;
use App\Models\TraceabilityTherapy;
use App\Models\monitoringClinicalParameter;
use App\Models\ClinicalParameterCollection;


use App\Classes\PDFClass;
use Codedge\Fpdf\Fpdf\Fpdf;
use Carbon\Carbon;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class NursingRecordController extends Controller
{

    public function index(Request $request){
        // $result= TraceabilityTherapy::all();
        $result= NursingTherapy::all();
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

            return [ "errorNumber"=>0,"message"=>"OK","TraceabilityTherapy" => $TraceabilityTherapy,"TraceabilityTherapysId" => 36];
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

















    public function getNursingTherapyById(Request $request){
        // return 'mario';
        if (NursingTherapy::where('user_instance_id', '=', 36)->exists()) {
            $query=NursingTherapy::where('user_instance_id', '=',36);
            $nursingTherapy=$query->get();

            return [ "errorNumber"=>0,"message"=>"OK","nursingTherapy" => $nursingTherapy,"nursingTherapysId" => 36];
        }else{
            return ['errorNumber'=>5000,'descrizione'=>'no records found'];
        }
    }

    public function getNursingTherapysByUserIstanceId(Request $request){

        if (NursingTherapy::where('user_instance_id', '=', 36)->exists()) {
            $query=NursingTherapy::where('user_instance_id', '=', 36);
            $allNursingTherapys=$query->first();

            return [ "errorNumber"=>0,"message"=>"OK","nursingTherapy" => $NursingTherapy,"nursingTherapysId" => 36];
        }else{
            return ['errorNumber'=>5000,'descrizione'=>'no records found'];
        }
    }
    
    public function getCurrentNursingTherapyById(Request $request){
        if (NursingTherapy::where('user_instance_id', '=',36)->exists()) {
            $query=NursingTherapy::where('user_instance_id', '=',36)->orderBy('th_date', 'desc');
            $NursingTherapy=$query->first();
            return [ "errorNumber"=>0,"message"=>"OK","CurrentNursingTherapy" => $NursingTherapy,"NursingTherapysId" => 36];
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
            $query=ClinicalParameterCollection::where('user_instance_id', '=',36)->orderBy('th_date', 'desc');
            $ClinicalParameterCollection=$query->first();
            return [ "errorNumber"=>0,"message"=>"OK","CurrentClinicalParameterCollection" => $ClinicalParameterCollection,"ClinicalParameterCollectionsId" => 36];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
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
                            case 'cpc':
                                $_nurs = $this->addClinicalParameterCollection($request);
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
                                        return ["errorNumber"=>2,"message"=>"Salvare Prima la scheda tossicologica"];
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
                }
            }else{
                return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
            }
            
        }else{
            return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
        }
    }







    public function addNursingTherapies(Request $request,$nursId){
        $userInstanceId=$request->input("user_instance_id",36);
        $_nursingTh = new addNursingTherapies;
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

        if($request->has('NursingTherapies')){
            $psyCardArr = json_decode($request->input('NursingTherapies'), true);
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
}
