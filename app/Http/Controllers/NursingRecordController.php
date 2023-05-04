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
use App\Models\MonitoringPrescriptionTao;

use App\Classes\PDFClass;
use Codedge\Fpdf\Fpdf\Fpdf;

use Carbon\Carbon;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class NursingRecordController extends Controller
{



    // --------------------------------------------------------------------------
    // MonitoringClinicalParameter
    
    // public function printPdf(Request $request) {

    //     $nursMcp = MonitoringClinicalParameter::where('user_instance_id',36)->first();

    //     $pdf = new PDFClass();
    //     if (preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"])){
    //         header("Content-type: application/PDF");
    //     } else {
    //         header("Content-type: application/PDF");
    //         header("Content-Type: a \pplication/pdf");
    //     }
    //     $pdf->SetAutoPageBreak(true, 30);

    //     $pdf->SetTitle('PDF MonitoringClinicalParameter');
    
    //     $pdf->AliasNbPages();

    //     $pdf->AddPage();

    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Cell(0,6,'Modulo Di Monitoraggio Parametri Clinici In Caso Di Rifiuto Delle Alimentazioni',0,0,'C',true);
    //     $pdf->Ln(8);
    //     $pdf->Cell(0,6,'(sia liquidi, sia solidi)',0,0,'C',true);

    //     $pdf->Ln(15);

    //     $pdf->SetLineWidth(.1);

    //     $pdf->SetFont('Arial','',12);


    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'Info',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(12);


    //     $pdf->Cell(36,7,'Reparto/Sezione:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(40,7,$nursMcp->department);
    //     // $pdf->Ln(5);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,'Data Inizio Rifiuto Alimentazione:');
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     // $pdf->Ln(10);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(60,7,$nursMcp->date_start_rejection);
    //     $pdf->Ln(10);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(23,7,'Data Fine:');
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(30,7,$nursMcp->date_end_rejection);
    //     $pdf->Ln(12);

    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'Monitoraggio',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(12);


    //     $pdf->Cell(12,7,'Data:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(56,7,$nursMcp->mcp_date);
    //     $pdf->Ln(10);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(55,7,'Alimentazione Rifiutata:');
    //     // $pdf->SetFillColor(255,255,255);
    //     // $pdf->SetDrawColor(0,0,0);
    //     // $pdf->SetTextColor(0,0,0);
    //     // $pdf->Ln(10);
        
    //     if(isset($nursMcp->breakfast)&& $nursMcp->breakfast!==""){
    //         $pdf->SetFont('Arial','',12);
    //         $pdf->Cell(25,7,'Colazione');
    //         // $pdf->cell(20,7,$nursMcp->breakfast);
    //     };

    //     if(isset($nursMcp->lunch)&& $nursMcp->lunch!==""){
    //         $pdf->SetFont('Arial','',12);
    //         $pdf->Cell(20,7,'Pranzo');
    //         // $pdf->cell(30,7,$nursMcp->lunch);
    //     };

    //     if(isset($nursMcp->dinner)&& $nursMcp->dinner!==""){
    //         $pdf->SetFont('Arial','',12);
    //         $pdf->Cell(20,7,'Cena');
    //         // $pdf->cell(30,7,$nursMcp->dinner);
    //     };
    //     $pdf->Ln(10);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(36,7,'Peso Corporeo:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(20,7,$nursMcp->body_weight);
    //     // $pdf->Ln(5);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(15,7,'P/A:');
    //     // $pdf->Ln(10);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(60,7,$nursMcp->monitoring_pa);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(13,7,'F/C:');
    //     // $pdf->Ln(10);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(60,7,$nursMcp->monitoring_fc);
    //     $pdf->Ln(20);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(13,7,'Firma Operatore:');
    //     // $pdf->Ln(10);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(60,7,$nursMcp->operatorSignature);
    //     $pdf->Ln(10);


    //     $pdf->Output("stampa.pdf", "I");
    //     exit();
    // }

 // ------------------------------------------------------------------------------------------------

  // -----------------------------------------------------------------------------------------------
    // ClinicalParameterCollection
    
    // public function printPdf(Request $request) {

    //     $nursMcp = ClinicalParameterCollection::where('user_instance_id',36)->first();

    //     $pdf = new PDFClass();
    //     if (preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"])){
    //         header("Content-type: application/PDF");
    //     } else {
    //         header("Content-type: application/PDF");
    //         header("Content-Type: a \pplication/pdf");
    //     }
    //     $pdf->SetAutoPageBreak(true, 30);

    //     $pdf->SetTitle('PDF ClinicalParameterCollection');
    
    //     $pdf->AliasNbPages();

    //     $pdf->AddPage();

    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Cell(0,6,'Modulo Di Raccolta Dei Parametri Clinici Come Da Prescrizione',0,0,'C',true);
    //     $pdf->Ln(15);

    //     $pdf->SetLineWidth(.1);

    //     $pdf->SetFont('Arial','',12);


    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'Info',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(12);


    //     $pdf->Cell(37,7,'Reparto/Sezione:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(40,7,$nursMcp->department_cpc);
    //     // $pdf->Ln(5);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(43,7,'Medico Prescrittore:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(40,7,$nursMcp->doctor_prescriber);
    //     $pdf->Ln(10);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(53,7,'Data Inizio Raccolta Dati:');
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     // $pdf->Ln(10);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(60,7,$nursMcp->date_start_collection);
    //     $pdf->Ln(10);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(53,7,'Data Fine Raccolta Dati:');
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(60,7,$nursMcp->date_end_collection);
    //     $pdf->Ln(12);

    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'Monitoraggio',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(12);


    //     $pdf->Cell(12,7,'Data:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(56,7,$nursMcp->cpc_date);
    //     $pdf->Ln(10);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(12,7,'P/A:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(35,7,$nursMcp->collection_pa);
    //     // $pdf->Ln(10);
        
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(12,7,'F/C:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(40,7,$nursMcp->collection_fc);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(15,7,'SPO2:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(40,7,$nursMcp->collection_spo2);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(12,7,'T/C:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(37,7,$nursMcp->collection_tc);
    //     $pdf->Ln(20);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(13,7,'Firma Operatore:');
    //     $pdf->Ln(10);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(60,7,$nursMcp->collection_operator_signature);
    //     $pdf->Ln(10);

    //     $pdf->Output("stampa.pdf", "I");
    //     exit();
    // }
 // ------------------------------------------------------------------------------------------------

 
  // -----------------------------------------------------------------------------------------------
    // CollectionFormHgt
    
    // public function printPdf(Request $request) {

    //     $nursMcp = CollectionFormHgt::where('user_instance_id',36)->first();

    //     $pdf = new PDFClass();
    //     if (preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"])){
    //         header("Content-type: application/PDF");
    //     } else {
    //         header("Content-type: application/PDF");
    //         header("Content-Type: a \pplication/pdf");
    //     }
    //     $pdf->SetAutoPageBreak(true, 30);

    //     $pdf->SetTitle('PDF CollectionFormHgt');
    
    //     $pdf->AliasNbPages();

    //     $pdf->AddPage();

    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Cell(0,6,'Modulo Di Raccolta HGT',0,0,'C',true);
    //     $pdf->Ln(15);

    //     $pdf->SetLineWidth(.1);

    //     $pdf->SetFont('Arial','',12);


    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'Info',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(12);


    //     $pdf->Cell(37,7,'Reparto/Sezione:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(40,7,$nursMcp->department_hgt);
    //     // $pdf->Ln(5);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(43,7,'Medico Prescrittore:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(40,7,$nursMcp->doctor_prescriber_hgt);
    //     $pdf->Ln(10);




    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(53,7,'Data Inizio Raccolta Dati:');
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     // $pdf->Ln(10);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(60,7,$nursMcp->date_start_collection_hgt);
    //     $pdf->Ln(10);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(53,7,'Data Fine Raccolta Dati:');
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(60,7,$nursMcp->date_end_collection_hgt);
    //     $pdf->Ln(15);

    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'Modulo',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(12);


    //     $pdf->Cell(12,7,'Data:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(56,7,$nursMcp->hgt_date);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(12,7,'Ora:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(60,7,$nursMcp->hours);
        
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(12,7,'HGT:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(45,7,$nursMcp->hgt);
    //     $pdf->Ln(20);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(36,7,'Firma Operatore:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(40,7,$nursMcp->hgt_operator_signature);

    //     $pdf->Output("stampa.pdf", "I");
    //     exit();
    // }
 // ------------------------------------------------------------------------------------------------

 // -----------------------------------------------------------------------------------------------
    // TraceabilityTherapy
    
    // public function printPdf(Request $request) {

    //     $nursMcp = TraceabilityTherapy::where('user_instance_id',36)->first();

    //     $pdf = new PDFClass();
    //     if (preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"])){
    //         header("Content-type: application/PDF");
    //     } else {
    //         header("Content-type: application/PDF");
    //         header("Content-Type: a \pplication/pdf");
    //     }
    //     $pdf->SetAutoPageBreak(true, 30);

    //     $pdf->SetTitle('PDF TraceabilityTherapy');
    
    //     $pdf->AliasNbPages();

    //     $pdf->AddPage();

    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Cell(0,6,'Modulo Di Monitoraggio Parametri Clinici In Caso Di Rifiuto Della Alimentazione',0,0,'C',true);
    //     $pdf->Ln(15);

    //     $pdf->SetLineWidth(.1);

    //     $pdf->SetFont('Arial','',12);


    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'Info',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(12);


    //     $pdf->Cell(37,7,'Reparto/Sezione:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(40,7,$nursMcp->therapies);
    //     // $pdf->Ln(5);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(43,7,'Medico Prescrittore:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(40,7,$nursMcp->drug);
    //     $pdf->Ln(10);




    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(53,7,'Data Inizio Raccolta Dati:');
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     // $pdf->Ln(10);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(60,7,$nursMcp->date_start_collection_hgt);
    //     $pdf->Ln(10);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(53,7,'Data Fine Raccolta Dati:');
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(60,7,$nursMcp->date_end_collection_hgt);
    //     $pdf->Ln(15);

    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'Modulo',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(12);


    //     $pdf->Cell(12,7,'Data:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(56,7,$nursMcp->hgt_date);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(12,7,'Ora:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(60,7,$nursMcp->hours);
        
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(12,7,'HGT:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(45,7,$nursMcp->hgt);
    //     $pdf->Ln(20);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(36,7,'Firma Operatore:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(40,7,$nursMcp->hgt_operator_signature);

    //     $pdf->Output("stampa.pdf", "I");
    //     exit();
    // }

// ----------------------------------------------------------------------------------


 // -----------------------------------------------------------------------------------------------
    // MonitoringPrescriptionTao
    
    // public function printPdf(Request $request) {

    //     $nursMcp = MonitoringPrescriptionTao::where('user_instance_id',36)->first();

    //     $pdf = new PDFClass();
    //     if (preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"])){
    //         header("Content-type: application/PDF");
    //     } else {
    //         header("Content-type: application/PDF");
    //         header("Content-Type: a \pplication/pdf");
    //     }
    //     $pdf->SetAutoPageBreak(true, 30);

    //     $pdf->SetTitle('PDF MonitoringPrescriptionTao');
    
    //     $pdf->AliasNbPages();

    //     $pdf->AddPage();

    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Cell(0,6,'Modulo Di Monitoraggio Della Prescrizione E Della Somministrazione Della Terapia',0,0,'C',true);
    //     $pdf->Ln(15);

    //     $pdf->SetLineWidth(.1);

    //     $pdf->SetFont('Arial','',12);


    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'Info',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(12);


    //     $pdf->Cell(47,7,'Reparto/Sezione:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(40,7,$nursMcp->department_tao);
    //     // $pdf->Ln(5);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(43,7,'Diagnosi:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(40,7,$nursMcp->diagnosis_tao);
    //     $pdf->Ln(10);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(47,7,'Farmaco Prescritto:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(40,7,$nursMcp->drug_prescribed);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(43,7,'Data:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(40,7,$nursMcp->date_tao);
    //     $pdf->Ln(10);

    //     $pdf->Output("stampa.pdf", "I");
    //     exit();
    // }

// ----------------------------------------------------------------------------------







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









    public function getMonitoringPrescriptionTaoById(Request $request){
        if (MonitoringPrescriptionTao::where('user_instance_id', '=', 36)->exists()) {
            $query=MonitoringPrescriptionTao::where('user_instance_id', '=',36);
            $MonitoringPrescriptionTao=$query->get();

            return [ "errorNumber"=>0,"message"=>"OK","MonitoringPrescriptionTao" => $MonitoringPrescriptionTao,"MonitoringPrescriptionTaosId" => 36];
        }else{
            return ['errorNumber'=>5000,'descrizione'=>'no records found'];
        }
    }

    public function getMonitoringPrescriptionTaosByUserIstanceId(Request $request){

        if (MonitoringPrescriptionTao::where('user_instance_id', '=', 36)->exists()) {
            $query=MonitoringPrescriptionTao::where('user_instance_id', '=', 36);
            $allMonitoringPrescriptionTaos=$query->first();

            return [ "errorNumber"=>0,"message"=>"OK","MonitoringPrescriptionTao" => $allMonitoringPrescriptionTaos,"MonitoringPrescriptionTaosId" => 36];
        }else{
            return ['errorNumber'=>5000,'descrizione'=>'no records found'];
        }
    }
    
    public function getCurrentMonitoringPrescriptionTaoById(Request $request){
        if (MonitoringPrescriptionTao::where('user_instance_id', '=',36)->exists()) {
            $query=MonitoringPrescriptionTao::where('user_instance_id', '=',36)->orderBy('tao_date', 'desc');
            $MonitoringPrescriptionTao=$query->first();
            return [ "errorNumber"=>0,"message"=>"OK","CurrentMonitoringPrescription" => $MonitoringPrescriptionTao,"MonitoringPrescriptionTaosId" => 36];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }  
    }









    public function getNursingTherapysByUserIstanceId(Request $request){

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
                            case 'cpc':
                                $_nurs = $this->addClinicalParameterCollection($request);
                                if($_nurs){
                                    $_nursId=$_nurs->id;
                                }
                                else{
                                    return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
                                }
                                break;
                            case 'hgt':
                                $_nurs = $this->addCollectionFormHgt($request);
                                if($_nurs){
                                    $_nursId=$_nurs->id;
                                }
                                else{
                                    return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
                                }
                                break;
                            case 'tao':
                                $_nurs = $this->addMonitoringPrescriptionTao($request);
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
                                }
                                if($request->has('nursId')){
                                    if (MonitoringClinicalParameter::where('user_instance_id', '=', $request->input('user_instance_id', 36))->exists()) {
                                        $_nursId=$request->input('nursId');
                                    }else{
                                        return ["errorNumber"=>2,"message"=>"message errorNumber"];
                                    }
                                }
                                if($request->has('nursId')){
                                    if (ClinicalParameterCollection::where('user_instance_id', '=', $request->input('user_instance_id', 36))->exists()) {
                                        $_nursId=$request->input('nursId');
                                    }else{
                                        return ["errorNumber"=>2,"message"=>"message errorNumber"];
                                    }
                                }
                                if($request->has('nursId')){
                                    if (MonitoringPrescriptionTao::where('user_instance_id', '=', $request->input('user_instance_id', 36))->exists()) {
                                        $_nursId=$request->input('nursId');
                                    }else{
                                        return ["errorNumber"=>2,"message"=>"message errorNumber"];
                                    }
                                }
                                else{
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
                    case 'mcp':
                        return  $this->addMonitoringClinicalParameter($request,$_nursId);
                        break; 
                    case 'cpc':
                        return  $this->addClinicalParameterCollection($request,$_nursId);
                        break; 
                    case 'hgt':
                        return  $this->addCollectionFormHgt($request,$_nursId);
                        break;  
                    case 'tao':
                        return  $this->addMonitoringPrescriptionTao($request,$_nursId);
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
            $nursArr = json_decode($request->input('NursingTherapy'), true);
            if(array_key_exists('externalDoctorPrescription',$nursArr)){
                $_nursingTh->external_doctor_prescription=$nursArr['externalDoctorPrescription'];
            }
            if(array_key_exists('drug',$nursArr)){
                $_nursingTh->drug=$nursArr['drug'];
            }
            if(array_key_exists('posology',$nursArr)){
                $_nursingTh->posology=$nursArr['posology'];
            }
            if(array_key_exists('frequency',$nursArr)){
                $_nursingTh->frequency=$nursArr['frequency'];
            }
            if(array_key_exists('startTherapy',$nursArr)){
                $_nursingTh->start_therapy=$nursArr['startTherapy'];
            }
            if(array_key_exists('endTherapy',$nursArr)){
                $_nursingTh->end_therapy=$nursArr['endTherapy'];
            }
            if(array_key_exists('drugRoute',$nursArr)){
                $_nursingTh->drug_route=$nursArr['drugRoute'];
            }
            if(array_key_exists('morning',$nursArr)){
                $_nursingTh->morning=$nursArr['morning'];
            }
            if(array_key_exists('afternoon',$nursArr)){
                $_nursingTh->afternoon=$nursArr['afternoon'];
            }
            if(array_key_exists('evening',$nursArr)){
                $_nursingTh->evening=$nursArr['evening'];
            }
            if(array_key_exists('deleted',$nursArr)){
                $_nursingTh->deleted=$nursArr['deleted'];
            }
            if(array_key_exists('dateDeleted',$nursArr)){
                $_nursingTh->date_deleted=$nursArr['dateDeleted'];
            }
            if(array_key_exists('idDoctorDeleted',$nursArr)){
                $_nursingTh->id_doctor_deleted=$nursArr['idDoctorDeleted'];
            }
            if(array_key_exists('doctorDeletedName',$nursArr)){
                $_nursingTh->doctor_deleted_name=$nursArr['doctorDeletedName'];
            }
            if(array_key_exists('doctorDeletedLastname',$nursArr)){
                $_nursingTh->doctor_deleted_lastname=$nursArr['doctorDeletedLastname'];
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
            $nursArr = json_decode($request->input('TraceabilityTherapy'), true);
            if(array_key_exists('thDate',$nursArr)){
                $_traceTerapy->th_date=$nursArr['departmentCpc'];
            }
            if(array_key_exists('drugsNotAdministered',$nursArr)){
                $_traceTerapy->drugs_not_administered=$nursArr['drugsNotAdministered'];
            }
            if(array_key_exists('drugs',$nursArr)){
                $_traceTerapy->drugs=$nursArr['drugs'];
            }

            if(array_key_exists('thFromThe',$nursArr)){
                $_traceTerapy->drugs=$nursArr['thFromThe'];
            }
            if(array_key_exists('thToThe',$nursArr)){
                $_traceTerapy->motivation_not_take_medicine=$nursArr['thToThe'];
            }
            if(array_key_exists('thHours',$nursArr)){
                $_traceTerapy->medical_alert=$nursArr['thHours'];
            }
            if(array_key_exists('thFrequency',$nursArr)){
                $_traceTerapy->medical_alert_note=$nursArr['thFrequency'];
            }

            if(array_key_exists('motivationNotTakeMedicine',$nursArr)){
                $_traceTerapy->motivation_not_take_medicine=$nursArr['motivationNotTakeMedicine'];
            }
            if(array_key_exists('medicalAlert',$nursArr)){
                $_traceTerapy->medical_alert=$nursArr['medicalAlert'];
            }
            if(array_key_exists('medicalAlertNote',$nursArr)){
                $_traceTerapy->medical_alert_note=$nursArr['medicalAlertNote'];
            }
            if(array_key_exists('doctorsPrescriptions',$nursArr)){
                $_traceTerapy->doctors_prescriptions=$nursArr['doctorsPrescriptions'];
            }
            if(array_key_exists('doctorsPrescriptionsNote',$nursArr)){
                $_traceTerapy->doctors_prescriptions_note=$nursArr['doctorsPrescriptionsNote'];
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
        $userInstanceId=$request->input("user_instance_id");
        $_nursingCpc = new ClinicalParameterCollection;
        $now=date("Y-m-d H:i:s");
        $_nursingCpc->user_instance_id= 36;
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


        if($request->has('ClinicalParameterCollection')){
            $nursArr = json_decode($request->input('ClinicalParameterCollection'), true);
            if(array_key_exists('departmentCpc',$nursArr)){
                $_nursingCpc->department_cpc=$nursArr['departmentCpc'];
            }
            if(array_key_exists('dateStartCollection',$nursArr)){
                $_nursingCpc->date_start_collection=$nursArr['dateStartCollection'];
            }
            if(array_key_exists('dateEndCollection',$nursArr)){
                $_nursingCpc->date_end_collection=$nursArr['dateEndCollection'];
            }
            if(array_key_exists('doctorPrescriber',$nursArr)){
                $_nursingCpc->doctor_prescriber=$nursArr['doctorPrescriber'];
            }
            if(array_key_exists('cpcDate',$nursArr)){
                $_nursingCpc->cpc_date=$nursArr['cpcDate'];
            }
            if(array_key_exists('collectionPa',$nursArr)){
                $_nursingCpc->collection_pa=$nursArr['collectionPa'];
            }
            if(array_key_exists('collectionFc',$nursArr)){
                $_nursingCpc->collection_fc=$nursArr['collectionFc'];
            }
            if(array_key_exists('collectionSpo2',$nursArr)){
                $_nursingCpc->collection_spo2=$nursArr['collectionSpo2'];
            }
            if(array_key_exists('collectionTc',$nursArr)){
                $_nursingCpc->collection_tc=$nursArr['collectionTc'];
            }
            if(array_key_exists('collectionOperatorSignature',$nursArr)){
                $_nursingCpc->collection_operator_signature=$nursArr['collectionOperatorSignature'];
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
        $userInstanceId=$request->input("user_instance_id");
        $_nursingHgt = new CollectionFormHgt;
        $now=date("Y-m-d H:i:s");
        $_nursingHgt->user_instance_id= 36;
        if($request->has('doctorId')){
            $_nursingHgt->id_doctor=$request->input('doctorId');
        }
        if($request->has('doctorName')){
            $_nursingHgt->doctor_name=$request->input('doctorName');
        }
        if($request->has('doctorUserName')){
            $_nursingHgt->doctor_lastname=$request->input('doctorUserName');
        }
        $_nursingHgt->hgt_date=$now;

        if($request->has('CollectionFormHgt')){
            $nursArr = json_decode($request->input('CollectionFormHgt'), true);
            if(array_key_exists('departmentHgt',$nursArr)){
                $_nursingHgt->department_hgt=$nursArr['departmentHgt'];
            }
            if(array_key_exists('dateStartCollectionHgt',$nursArr)){
                $_nursingHgt->date_start_collection_hgt=$nursArr['dateStartCollectionHgt'];
            }
            if(array_key_exists('dateEndCollectionHgt',$nursArr)){
                $_nursingHgt->date_end_collection_hgt=$nursArr['dateEndCollectionHgt'];
            }
            if(array_key_exists('doctorPrescriberHgt',$nursArr)){
                $_nursingHgt->doctor_prescriber_hgt=$nursArr['doctorPrescriberHgt'];
            }
            if(array_key_exists('hgtDate',$nursArr)){
                $_nursingHgt->hgt_date=$nursArr['hgtDate'];
            }
            if(array_key_exists('hours',$nursArr)){
                $_nursingHgt->hours=$nursArr['hours'];
            }
            if(array_key_exists('hgt',$nursArr)){
                $_nursingHgt->hgt=$nursArr['hgt'];
            }
            if(array_key_exists('hgtOperatorSignature',$nursArr)){
                $_nursingHgt->hgt_operator_signature=$nursArr['hgtOperatorSignature'];
            }
            if(array_key_exists('hgtFolderPage',$nursArr)){
                $_nursingHgt->hgt_folder_page=$nursArr['hgtFolderPage'];
            }
        }
        $_nursingHgt->save();

        if($_nursingHgt){
            return ["errorNumber"=>0,"message"=>"ok","hgt"=>$_nursingHgt];

        }else{
            return ["errorNumber"=>3,"message"=>"Scheda non salvata contattare l'amministratore di sistema"];
        }
    }








    public function addMonitoringClinicalParameter(request $request){
        $userInstanceId=$request->input("user_instance_id");
        $_nursingMcp = new MonitoringClinicalParameter;
        $now=date("Y-m-d H:i:s");
        $_nursingMcp->user_instance_id= 36;
        if($request->has('doctorId')){
            $_nursingMcp->id_doctor=$request->input('doctorId');
        }
        if($request->has('doctorName')){
            $_nursingMcp->doctor_name=$request->input('doctorName');
        }
        if($request->has('doctorUserName')){
            $_nursingMcp->doctor_lastname=$request->input('doctorUserName');
        }
        $_nursingMcp->mcp_date=$now;

        if($request->has('MonitoringClinicalParameter')){
            $nursArr = json_decode($request->input('MonitoringClinicalParameter'), true);
            if(array_key_exists('department',$nursArr)){
                $_nursingMcp->department=$nursArr['department'];
            }
            if(array_key_exists('dateStartRejection',$nursArr)){
                $_nursingMcp->date_start_rejection=$nursArr['dateStartRejection'];
            }
            if(array_key_exists('dateEndRejection',$nursArr)){
                $_nursingMcp->date_end_rejection=$nursArr['dateEndRejection'];
            }
            if(array_key_exists('mcpDate',$nursArr)){
                $_nursingMcp->mcp_date=$nursArr['mcpDate'];
            }
            if(array_key_exists('breakfast',$nursArr)){
                $_nursingMcp->breakfast=$nursArr['breakfast'];
            }
            if(array_key_exists('lunch',$nursArr)){
                $_nursingMcp->lunch=$nursArr['lunch'];
            }
            if(array_key_exists('dinner',$nursArr)){
                $_nursingMcp->dinner=$nursArr['dinner'];
            }
            if(array_key_exists('bodyWeight',$nursArr)){
                $_nursingMcp->body_weight=$nursArr['bodyWeight'];
            }
            if(array_key_exists('monitoringPa',$nursArr)){
                $_nursingMcp->monitoring_pa=$nursArr['monitoringPa'];
            }
            if(array_key_exists('monitoringFc',$nursArr)){
                $_nursingMcp->monitoring_fc=$nursArr['monitoringFc'];
            }
            if(array_key_exists('operatorSignature',$nursArr)){
                $_nursingMcp->operator_signature=$nursArr['operatorSignature'];
            }
        }
        $_nursingMcp->save();
        if($_nursingMcp){
            return ["errorNumber"=>0,"message"=>"ok","mcp"=>$_nursingMcp];

        }else{
            return ["errorNumber"=>3,"message"=>"Scheda non salvata contattare l'amministratore di sistema"];
        }
    }




    


    public function addMonitoringPrescriptionTao(request $request){
        $userInstanceId=$request->input("user_instance_id");
        $_nursingTao = new MonitoringPrescriptionTao;
        $now=date("Y-m-d H:i:s");
        $_nursingTao->user_instance_id= 36;
        if($request->has('doctorId')){
            $_nursingTao->id_doctor=$request->input('doctorId');
        }
        if($request->has('doctorName')){
            $_nursingTao->doctor_name=$request->input('doctorName');
        }
        if($request->has('doctorUserName')){
            $_nursingTao->doctor_lastname=$request->input('doctorUserName');
        }
        $_nursingTao->tao_date=$now;

        if($request->has('MonitoringPrescriptionTao')){
            $nursArr = json_decode($request->input('MonitoringPrescriptionTao'), true);
            if(array_key_exists('departmentTao',$nursArr)){
                $_nursingTao->department_tao=$nursArr['departmentTao'];
            }
            if(array_key_exists('diagnosisTao',$nursArr)){
                $_nursingTao->diagnosis_tao=$nursArr['diagnosisTao'];
            }
            if(array_key_exists('drugPrescribed',$nursArr)){
                $_nursingTao->drug_prescribed=$nursArr['drugPrescribed'];
            }
            if(array_key_exists('dateTao',$nursArr)){
                $_nursingTao->date_tao=$nursArr['dateTao'];
            }
        }
        $_nursingTao->save();

        if($_nursingTao){
            return ["errorNumber"=>0,"message"=>"ok","tao"=>$_nursingTao];

        }else{
            return ["errorNumber"=>3,"message"=>"Scheda non salvata contattare l'amministratore di sistema"];
        }
    }
}