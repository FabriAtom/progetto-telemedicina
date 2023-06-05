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



use App\Anagrafic;



use App\Classes\PDFClass;
use Codedge\Fpdf\Fpdf\Fpdf;
use Carbon\Carbon;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class NursingRecordController extends Controller
{



    // --------------------------------------------------------------------------
    // MonitoringClinicalParameter SINGOLO
    
    // public function printPdf(Request $request) {

    //     $nursMcp = MonitoringClinicalParameter::where('id',$request['id'])->first();

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

    //     $pdf->Ln(12);

    //     $pdf->SetLineWidth(.1);

    //     $pdf->SetFont('Arial','',12);


    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'Archivio',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(10);
    
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(15,7,'Data:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(45,7,$nursMcp->mcp_date);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(20,7,'Medico:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$nursMcp->doctor_name);
    //     $pdf->Ln(12);

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
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(20,7,$nursMcp->mcp_diet);
    //     $pdf->Ln(10);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(36,7,'Peso Corporeo:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(20,7,$nursMcp->body_weight);
    //     // $pdf->Ln(5);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(30,7,'P/A Sitsolica:');
    //     // $pdf->Ln(10);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(20,7,$nursMcp->monitoring_pa_systolic);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(33,7,'P/A Diastolica:');
    //     // $pdf->Ln(10);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(20,7,$nursMcp->monitoring_pa_diastolic);
    //     // $pdf->Ln(10);

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

//  ------------------------------------------------------------------------------------------------


// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// MonitoringClinicalParameter TOTALE

// public function printPdf(Request $request) {

//     $nursMcp = MonitoringClinicalParameter::where('user_instance_id',36)->get();

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

    
//     foreach($nursMcp as $key=>$value) {
        
//         $pdf->SetDrawColor(128,0,0);
//         $pdf->SetFillColor(0,78,155);
//         $pdf->SetTextColor(255,255,255);
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,7,'Archivio',0,0,'L',true);
//         $pdf->SetFillColor(255,255,255);
//         $pdf->SetDrawColor(0,0,0);
//         $pdf->SetTextColor(0,0,0);
//         $pdf->Ln(10);
    
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(15,7,'Data:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(45,7,$value->mcp_date);
    
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(20,7,'Medico:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(35,7,$value->doctor_name);
//         $pdf->Ln(12);

//         $pdf->SetDrawColor(128,0,0);
//         $pdf->SetFillColor(0,78,155);
//         $pdf->SetTextColor(255,255,255);
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,7,'Info',0,0,'L',true);
//         $pdf->SetFillColor(255,255,255);
//         $pdf->SetDrawColor(0,0,0);
//         $pdf->SetTextColor(0,0,0);
//         $pdf->Ln(12);
    

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(70,7,'Data inizio Rifiuto Alimentazione:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->cell(80,7, $value->date_start_rejection);
//         $pdf->Ln(10);
        
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(70,7,'Data fine Rifiuto Alimentazione:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->cell(80,7,$value->date_end_rejection);
//         $pdf->Ln(12);

//         $pdf->SetDrawColor(128,0,0);
//         $pdf->SetFillColor(0,78,155);
//         $pdf->SetTextColor(255,255,255);
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,7,'Monitoraggio',0,0,'L',true);
//         $pdf->SetFillColor(255,255,255);
//         $pdf->SetDrawColor(0,0,0);
//         $pdf->SetTextColor(0,0,0);
//         $pdf->Ln(12);


//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(50,7,'Alimentazione rifiutata:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->multicell(160,7,$value->mcp_diet);
//         $pdf->Ln(2);
    
        
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(50,7,'Pressione Diastolica:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->cell(60,7,$value->monitoring_pa_diastolic);
        
        
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(50,7,'Pressione Sistolica:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->cell(65,7,$value->monitoring_pa_systolic);
//         $pdf->Ln(7);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(50,7,'Peso Corporeo:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->cell(60,7,$value->body_weight);

       
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(50,7,'Frequenza Cardiaca:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->cell(60,7,$value->monitoring_fc);
//         // $pdf->Ln(55);
//         $pdf->AddPage();

//     }

//     $pdf->Output("stampa.pdf", "I");
//     exit();
// }

// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++










// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    // ClinicalParameterCollection SINGOLO
    
    // public function printPdf(Request $request) {

    //     $nursCpc = ClinicalParameterCollection::where('id',$request['id'])->first();

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
    //     $pdf->Cell(0,7,'Archivio',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(10);
    
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(15,7,'Data:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(45,7,$nursCpc->cpc_date);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(20,7,'Medico:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$nursCpc->doctor_name);
    //     $pdf->Ln(12);


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
    //     $pdf->cell(40,7,$nursCpc->department_cpc);
    //     // $pdf->Ln(5);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(43,7,'Medico Prescrittore:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(40,7,$nursCpc->doctor_prescriber);
    //     $pdf->Ln(10);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(53,7,'Data Inizio Raccolta Dati:');
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     // $pdf->Ln(10);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(60,7,$nursCpc->date_start_collection);
    //     $pdf->Ln(10);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(53,7,'Data Fine Raccolta Dati:');
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(60,7,$nursCpc->date_end_collection);
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

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(30,7,'P/A Sistolica:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(36,7,$nursCpc->collection_pa_systolic);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(32,7,'P/A Sistolica:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(35,7,$nursCpc->collection_pa_diastolic);
    //     $pdf->Ln(10);
        

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(12,7,'F/C:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(54,7,$nursCpc->collection_fc);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(15,7,'SPO2:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(58,7,$nursCpc->collection_spo2);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(12,7,'T/C:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(56,7,$nursCpc->collection_tc);
    //     $pdf->Ln(20);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(13,7,'Firma Operatore:');
    //     $pdf->Ln(10);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(60,7,$nursCpc->collection_operator_signature);
    //     $pdf->Ln(10);

    //     $pdf->Output("stampa.pdf", "I");
    //     exit();
    // }
//  ------------------------------------------------------------------------------------------------


// -------------------------------------------------------------------------------------

// ClinicalParameterCollection TOTALE

// public function printPdf(Request $request) {

//     $nursCpc = ClinicalParameterCollection::where('user_instance_id',36)->get();

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


//     foreach($nursCpc as $key=>$value) {

//         $pdf->SetDrawColor(128,0,0);
//         $pdf->SetFillColor(0,78,155);
//         $pdf->SetTextColor(255,255,255);
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,7,'Archivio',0,0,'L',true);
//         $pdf->SetFillColor(255,255,255);
//         $pdf->SetDrawColor(0,0,0);
//         $pdf->SetTextColor(0,0,0);
//         $pdf->Ln(10);
    
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(15,7,'Data:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(45,7,$value->cpc_date);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(20,7,'Medico:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(35,7,$value->doctor_name);
//         $pdf->Ln(12);


//         $pdf->SetDrawColor(128,0,0);
//         $pdf->SetFillColor(0,78,155);
//         $pdf->SetTextColor(255,255,255);
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,7,'Info',0,0,'L',true);
//         $pdf->SetFillColor(255,255,255);
//         $pdf->SetDrawColor(0,0,0);
//         $pdf->SetTextColor(0,0,0);
//         $pdf->Ln(12);

//         $pdf->Ln(1);
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(50,7,'Data inizio raccolta dati:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->cell(60,7, $value->date_start_collection);
//         $pdf->Ln(10);
        
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(50,7,'Data fine raccolta dati:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->cell(60,7,$value->date_end_collection);
//         $pdf->Ln(12);

//         $pdf->SetDrawColor(128,0,0);
//         $pdf->SetFillColor(0,78,155);
//         $pdf->SetTextColor(255,255,255);
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,7,'Monitoraggio',0,0,'L',true);
//         $pdf->SetFillColor(255,255,255);
//         $pdf->SetDrawColor(0,0,0);
//         $pdf->SetTextColor(0,0,0);
//         $pdf->Ln(12);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(50,7,'Medico Prescrittore:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->multicell(160,7,$value->doctor_prescriber);
//         $pdf->Ln(2);
    

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(50,7,'P/A Sistolica:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->cell(60,7,$value->collection_pa_systolic);
        
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(50,7,'P/A Sistolica:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->cell(65,7,$value->collection_pa_diastolic);
//         $pdf->Ln(7);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(50,7,'F/C:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->cell(60,7,$value->collection_fc);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(50,7,'SPO2:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->cell(60,7,$value->collection_spo2);
//         $pdf->Ln(7);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(50,7,'T/C:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->cell(60,7,$value->collection_tc);
//         $pdf->Ln(11);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(13,7,'Firma Operatore:');
//         $pdf->Ln(10);
//         $pdf->SetFont('Arial','',12);
//         $pdf->cell(60,7,$value->collection_operator_signature);
//         $pdf->Ln(10);

//         $pdf->AddPage();
//     }

//     $pdf->Output("stampa.pdf", "I");
//     exit();
// }

// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    // CollectionFormHgt SINGOLO
    
    // public function printPdf(Request $request) {

    //     $nursHgt = CollectionFormHgt::where('id',$request['id'])->first();

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
    //     $pdf->Cell(0,7,'Archivio',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(10);
    
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(15,7,'Data:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(45,7,$nursHgt->hgt_date);

    //     $fullname=$nursHgt->doctor_name.' '.$nursHgt->doctor_lastname;

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(20,7,'Medico:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$fullname);
    //     $pdf->Ln(12);

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
    //     $pdf->cell(40,7,$nursHgt->department_hgt);
    //     // $pdf->Ln(5);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(43,7,'Medico Prescrittore:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(40,7,$nursHgt->doctor_prescriber_hgt);
    //     $pdf->Ln(10);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(53,7,'Data Inizio Raccolta Dati:');
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     // $pdf->Ln(10);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(60,7,$nursHgt->date_start_collection_hgt);
    //     $pdf->Ln(10);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(53,7,'Data Fine Raccolta Dati:');
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(60,7,$nursHgt->date_end_collection_hgt);
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


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(12,7,'Ora:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(60,7,$nursHgt->hours);
        
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(12,7,'HGT:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(45,7,$nursHgt->hgt);
    //     $pdf->Ln(20);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(36,7,'Firma Operatore:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(40,7,$nursHgt->hgt_operator_signature);

    //     $pdf->Output("stampa.pdf", "I");
    //     exit();
    // }

//  ------------------------------------------------------------------------------------------------

// CollectionFormHgt TOTALE
    

    // public function printPdf(Request $request) {

    //     $nursHgt = CollectionFormHgt::where('user_instance_id',36)->get();


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
    //     $pdf->Cell(0,6,'Modulo Di Monitoraggio Della Prescrizione E Della Somministrazione Della Terapia TAO',0,0,'C',true);
    //     $pdf->Ln(15);

    //     $pdf->SetLineWidth(.1);

    //     $pdf->SetFont('Arial','',12);


    //     foreach($nursHgt as $key=>$value) {

    //         $pdf->SetDrawColor(128,0,0);
    //         $pdf->SetFillColor(0,78,155);
    //         $pdf->SetTextColor(255,255,255);
    //         $pdf->SetFont('Arial', 'B', 12);
    //         $pdf->Cell(0,7,'Archivio',0,0,'L',true);
    //         $pdf->SetFillColor(255,255,255);
    //         $pdf->SetDrawColor(0,0,0);
    //         $pdf->SetTextColor(0,0,0);
    //         $pdf->Ln(10);
        
    //         $pdf->SetFont('Arial', 'B', 12);
    //         $pdf->Cell(15,7,'Data:');
    //         $pdf->SetFont('Arial','',12);
    //         $pdf->Cell(45,7,$value->hgt_date);

    //         $fullname=$value->doctor_name.' '.$value->doctor_lastname;

    //         $pdf->SetFont('Arial', 'B', 12);
    //         $pdf->Cell(20,7,'Medico:');
    //         $pdf->SetFont('Arial','',12);
    //         $pdf->Cell(35,7,$fullname);
    //         $pdf->Ln(12);

    //         $pdf->SetDrawColor(128,0,0);
    //         $pdf->SetFillColor(0,78,155);
    //         $pdf->SetTextColor(255,255,255);
    //         $pdf->SetFont('Arial', 'B', 12);
    //         $pdf->Cell(0,7,'Info',0,0,'L',true);
    //         $pdf->SetFillColor(255,255,255);
    //         $pdf->SetDrawColor(0,0,0);
    //         $pdf->SetTextColor(0,0,0);
    //         $pdf->Ln(12);

    //         $pdf->SetFont('Arial', 'B', 12);
    //         $pdf->Cell(50,7,'Data inizio raccolta dati:');
    //         $pdf->SetFont('Arial','',12);
    //         $pdf->cell(130,7, $value->date_start_collection_hgt);
    //         $pdf->Ln(10);
            
    //         $pdf->SetFont('Arial', 'B', 12);
    //         $pdf->Cell(50,7,'Data fine raccolta dati:');
    //         $pdf->SetFont('Arial','',12);
    //         $pdf->cell(130,7,$value->date_end_collection_hgt);
    //         $pdf->Ln(12);

    //         $pdf->SetDrawColor(128,0,0);
    //         $pdf->SetFillColor(0,78,155);
    //         $pdf->SetTextColor(255,255,255);
    //         $pdf->SetFont('Arial', 'B', 12);
    //         $pdf->Cell(0,7,'Modulo',0,0,'L',true);
    //         $pdf->SetFillColor(255,255,255);
    //         $pdf->SetDrawColor(0,0,0);
    //         $pdf->SetTextColor(0,0,0);
    //         $pdf->Ln(12);

    //         $pdf->SetFont('Arial', 'B', 12);
    //         $pdf->Cell(50,7,'Medico Prescrittore:');
    //         $pdf->SetFont('Arial','',12);
    //         $pdf->multicell(160,7,$value->doctor_prescriber_hgt);
    //         $pdf->Ln(2);

    //         $pdf->SetFont('Arial', 'B', 12);
    //         $pdf->Cell(50,7,'Orario:');
    //         $pdf->SetFont('Arial','',12);
    //         $pdf->cell(160,7,$value->hours);
    //         $pdf->Ln(8);

    //         $pdf->SetFont('Arial', 'B', 12);
    //         $pdf->Cell(50,7,'HGT:');
    //         $pdf->SetFont('Arial','',12);
    //         $pdf->cell(160,7,$value->hgt);
    //         $pdf->Ln(5);

    //         $pdf->AddPage();
    //     }

    //     $pdf->Output("stampa.pdf", "I");
    //     exit();
    // }
// -------------------------------------------------------------------------------------


//  -----------------------------------------------------------------------------------------------
    // TraceabilityTherapy SINGOLO
    
    // public function printPdf(Request $request) {

    //     $nursCardTh = TraceabilityTherapy::where('id',$request['id'])->first();
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
    //     $pdf->Cell(0,6,'Registro Per Ogni Turno Di Tracciabilità Delle Terapie Somministrate ',0,0,'C',true);
    //     $pdf->Ln(7);
    //     $pdf->Cell(0,6,'E Delle Eventuali Non Somministrazioni',0,0,'C',true);
    //     $pdf->Ln(15);

    //     $pdf->SetLineWidth(.1);

    //     $pdf->SetFont('Arial','',12);

    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'Archivio',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(10);
    
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(15,7,'Data:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(45,7,$nursCardTh->th_date);

    //     $fullname=$nursCardTh->doctor_name.' '.$nursCardTh->doctor_lastname;

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(20,7,'Medico:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$fullname);
    //     $pdf->Ln(12);


    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'Terapia non somministata al paziente:',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(12);

    //     $test=json_decode($nursCardTh->drugs_not_administered);
    //     $test2=collect($test->checked);

    //     $test3=collect($test->descriptions);

    //     $pdf->Cell(37,7,'Farmaco non somministrato:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Ln(10);

    //     foreach($test2 as $key=>$value) {
    //         if($value==1){
    //             $pdf->SetFont('Arial', 'B', 12);
    //             $pdf->Multicell(180,7,$key);
    //             $pdf->Cell(30,7,'Motivazione:');
    //             $pdf->SetFont('Arial','',12);
    //             $pdf->Multicell(160,7,$test3[$key]);
    //         }
    //       }
    //     $pdf->Ln(10);


    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'Annotazioni:',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(10);

        
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(37,7,'Medico Avvisato:');
    //     $medical_alert = ($nursCardTh->medical_alert==1) ? "sì" : "no";
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(20,7,$medical_alert);
    //     $pdf->Ln(8);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(20,7,'Note:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Multicell(160,7,$nursCardTh->medical_alert_note);
    //     $pdf->Ln(5);

    
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(85,7,'Annotazione O Prescrizione Del Medico:');
    //     $doctors_prescriptions = ($nursCardTh->doctors_prescriptions==1) ? "sì" : "no";
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(20,7,$doctors_prescriptions);
    //     $pdf->Ln(8);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(20,7,'Note:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Multicell(160,7,$nursCardTh->doctors_prescriptions_note);
        
    //     $pdf->Output("stampa.pdf", "I");
    //     exit();
    // }

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// TraceabilityTherapy TOTALE

// public function printPdf(Request $request) {

//     $nursCardTh = TraceabilityTherapy::where('user_instance_id',36)->get();

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
//     $pdf->Cell(0,6,'Scheda Terapie Non Somministrate Del Paziente',0,0,'C',true);
//     $pdf->Ln(12);

//     $pdf->SetLineWidth(.1);

//     $pdf->SetFont('Arial','',12);

//     foreach($nursCardTh as $key=>$value) {

//         $pdf->SetDrawColor(128,0,0);
//         $pdf->SetFillColor(0,78,155);
//         $pdf->SetTextColor(255,255,255);
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,7,'Archivio',0,0,'L',true);
//         $pdf->SetFillColor(255,255,255);
//         $pdf->SetDrawColor(0,0,0);
//         $pdf->SetTextColor(0,0,0);
//         $pdf->Ln(10);
    
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(15,7,'Data:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(45,7,$value->th_date);

//         $fullname=$value->doctor_name.' '.$value->doctor_lastname;

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(20,7,'Medico:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(35,7,$fullname);
//         $pdf->Ln(12);

//         $pdf->SetDrawColor(128,0,0);
//         $pdf->SetFillColor(0,78,155);
//         $pdf->SetTextColor(255,255,255);
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,7,'Terapia non somministata al paziente:',0,0,'L',true);
//         $pdf->SetFillColor(255,255,255);
//         $pdf->SetDrawColor(0,0,0);
//         $pdf->SetTextColor(0,0,0);
//         $pdf->Ln(12);

//         $test=json_decode($value->drugs_not_administered);
//         $test2=collect($test->checked);
//         $test3=collect($test->descriptions);

    
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(37,7,'Farmaco non somministrato:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Ln(10);
        
//         foreach($test2 as $keyx=>$valuex) {
//             if($valuex==1){
//                 $pdf->SetFont('Arial', 'B', 12);
//                 $pdf->Multicell(180,7,$keyx);
//                 $pdf->Cell(30,7,'Motivazione:');
//                 $pdf->SetFont('Arial','',12);
//                 $pdf->Multicell(160,7,$test3[$keyx]);
//             }
//         }
//         $pdf->Ln(7);

//         $pdf->SetDrawColor(128,0,0);
//         $pdf->SetFillColor(0,78,155);
//         $pdf->SetTextColor(255,255,255);
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,7,'Annotazioni:',0,0,'L',true);
//         $pdf->SetFillColor(255,255,255);
//         $pdf->SetDrawColor(0,0,0);
//         $pdf->SetTextColor(0,0,0);
//         $pdf->Ln(10);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(40,7,'Avvisato Medico:');
//         $medical_alert = ($value->medical_alert==1) ? "sì" : "no";
//         $pdf->SetFont('Arial','',12);
//         $pdf->cell(60,7,$medical_alert);
//         $pdf->Ln(7);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(30,7,'Note:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Multicell(160,7,$value->medical_alert_note);
//         $pdf->Ln(7);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(85,7,'Annotazione O Prescrizione Del Medico:');
//         $doctors_prescriptions = ($value->doctors_prescriptions==1) ? "sì" : "no";
//         $pdf->SetFont('Arial','',12);
//         $pdf->cell(60,7,$doctors_prescriptions);
//         $pdf->Ln(7);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(30,7,'Note:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Multicell(160,7,$value->doctors_prescriptions_note);
//         $pdf->Ln(15);
                
//         $pdf->AddPage();

//     }    

//     $pdf->Output("stampa.pdf", "I");
//     exit();
// }

// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



//  -----------------------------------------------------------------------------------------------
    // MonitoringPrescriptionTao SINGOLO
    
    // public function printPdf(Request $request) {

    //     $nursTao = MonitoringPrescriptionTao::where('id',$request['id'])->first();

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
    //     $pdf->Cell(0,6,'Modulo Di Monitoraggio Della Prescrizione E Della Somministrazione Della Terapia TAO',0,0,'C',true);
    //     $pdf->Ln(12);

    //     $pdf->SetLineWidth(.1);

    //     $pdf->SetFont('Arial','',12);

    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'Archivio',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(10);



    
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(15,7,'Data:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(45,7,$nursTao->tao_date);

    //     $fullname=$nursTao->doctor_name.' '.$nursTao->doctor_lastname;

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(20,7,'Medico:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$fullname);
    //     $pdf->Ln(12);


    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'Info',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(12);


    //     $pdf->Cell(39,7,'Reparto/Sezione:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(40,7,$nursTao->department_tao);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(45,7,'Data Prescrizione:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(40,7,$nursTao->date_tao);
    //     $pdf->Ln(10);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(43,7,'Diagnosi:');
    //     $pdf->Ln(6);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Multicell(180,7,$nursTao->diagnosis_tao);
    //     $pdf->Ln(5);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(47,7,'Farmaco Prescritto:');
    //     $pdf->Ln(6);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Multicell(180,7,$nursTao->drug_prescribed);
    //     $pdf->Ln(6);

    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'Monitoraggio',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(24,7,'Dosaggio:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(60,7,$nursTao->tao_dosage);
        
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(20,7,'Medico:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(45,7,$nursTao->tao_doctor);
    //     $pdf->Ln(10);
        
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(27,7,'Firma CPSI:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->cell(60,7,$nursTao->tao_cpsi_signature);

    //     $pdf->Output("stampa.pdf", "I");
    //     exit();
    // }

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


    // MonitoringPrescriptionTao TOTALE
    

    // public function printPdf(Request $request) {

    //     $nursTao = MonitoringPrescriptionTao::where('user_instance_id',36)->get();


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
    //     $pdf->Cell(0,6,'Modulo Di Monitoraggio Della Prescrizione E Della Somministrazione Della Terapia TAO',0,0,'C',true);
    //     $pdf->Ln(12);

    //     $pdf->SetLineWidth(.1);

    //     $pdf->SetFont('Arial','',12);


    //     foreach($nursTao as $key=>$value) {

    //         $pdf->SetDrawColor(128,0,0);
    //         $pdf->SetFillColor(0,78,155);
    //         $pdf->SetTextColor(255,255,255);
    //         $pdf->SetFont('Arial', 'B', 12);
    //         $pdf->Cell(0,7,'Archivio',0,0,'L',true);
    //         $pdf->SetFillColor(255,255,255);
    //         $pdf->SetDrawColor(0,0,0);
    //         $pdf->SetTextColor(0,0,0);
    //         $pdf->Ln(10);
        
    //         $pdf->SetFont('Arial', 'B', 12);
    //         $pdf->Cell(15,7,'Data:');
    //         $pdf->SetFont('Arial','',12);
    //         $pdf->Cell(45,7,$value->tao_date);

    //         $fullname=$value->doctor_name.' '.$value->doctor_lastname;

    //         $pdf->SetFont('Arial', 'B', 12);
    //         $pdf->Cell(20,7,'Medico:');
    //         $pdf->SetFont('Arial','',12);
    //         $pdf->Cell(35,7,$fullname);
    //         $pdf->Ln(12);

    //         $pdf->SetDrawColor(128,0,0);
    //         $pdf->SetFillColor(0,78,155);
    //         $pdf->SetTextColor(255,255,255);
    //         $pdf->SetFont('Arial', 'B', 12);
    //         $pdf->Cell(0,7,'Info',0,0,'L',true);
    //         $pdf->SetFillColor(255,255,255);
    //         $pdf->SetDrawColor(0,0,0);
    //         $pdf->SetTextColor(0,0,0);
    //         $pdf->Ln(12);

    //         $pdf->SetFont('Arial', 'B', 12);
    //         $pdf->Cell(50,7,'Farmaco Prescritto:');
    //         $pdf->SetFont('Arial','',12);
    //         $pdf->Multicell(130,7, $value->drug_prescribed);
    //         $pdf->Ln(4);

    //         $pdf->SetDrawColor(128,0,0);
    //         $pdf->SetFillColor(0,78,155);
    //         $pdf->SetTextColor(255,255,255);
    //         $pdf->SetFont('Arial', 'B', 12);
    //         $pdf->Cell(0,7,'Monitoraggio',0,0,'L',true);
    //         $pdf->SetFillColor(255,255,255);
    //         $pdf->SetDrawColor(0,0,0);
    //         $pdf->SetTextColor(0,0,0);
    //         $pdf->Ln(12);
            
    //         $pdf->SetFont('Arial', 'B', 12);
    //         $pdf->Cell(50,7,'Diagnosi:');
    //         $pdf->SetFont('Arial','',12);
    //         $pdf->Multicell(130,7,$value->diagnosis_tao);
    //         $pdf->Ln(4);

    //         $pdf->SetFont('Arial', 'B', 12);
    //         $pdf->Cell(50,7,'Dosaggio:');
    //         $pdf->SetFont('Arial','',12);
    //         $pdf->Multicell(160,7,$value->tao_dosage);

    //         $pdf->SetFont('Arial', 'B', 12);
    //         $pdf->Cell(50,7,'Medico:');
    //         $pdf->SetFont('Arial','',12);
    //         $pdf->Multicell(160,7,$value->tao_doctor);

    //         $pdf->SetFont('Arial', 'B', 12);
    //         $pdf->Cell(50,7,'Firma CPSI:');
    //         $pdf->SetFont('Arial','',12);
    //         $pdf->Multicell(160,7,$value->tao_cpsi_signature);
    //         $pdf->Ln(5);

    //         $pdf->AddPage();
    //     }

    //     $pdf->Output("stampa.pdf", "I");
    //     exit();
    // }

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



// // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// public function printPdf(Request $request) {

//         $pdf = new PDFClass();
//         if (preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"])){
//             header("Content-type: application/PDF");
//         } else {
//             header("Content-type: application/PDF");
//             header("Content-Type: a \pplication/pdf");
//         }
//         $pdf->SetAutoPageBreak(true, 30);
    
//         $pdf->SetTitle('PDF Anagrafic');
    
//         $pdf->AliasNbPages();
    
//         $pdf->AddPage();
    
//         $pdf->SetLineWidth(.1);

//         $pdf->SetDrawColor(128,0,0);
//         $pdf->SetFillColor(0,78,155);
//         $pdf->SetTextColor(255,255,255);
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,7,'Anagrafica',0,0,'C',true);
//         $pdf->SetFillColor(255,255,255);
//         $pdf->SetDrawColor(0,0,0);
//         $pdf->SetTextColor(0,0,0);
//         $pdf->Ln(12);


//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(140,7,'Nome:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(45,7,'cxxnamexxc');
//         $pdf->Ln(10);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(140,7,'Cognome:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(45,7,'cxxlastnamexxc');
//         $pdf->Ln(10);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(140,7,'Sesso:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(45,7,'cxxnewGenderxxc');
//         $pdf->Ln(10);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(140,7,'Data di nascita:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(45,7,'cxxbirthDatexxc');
//         $pdf->Ln(10);


//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(140,7,'Città di nascita:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(45,7,'cxxbirthplacexxc');
//         $pdf->Ln(10);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(140,7,'Provincia:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(45,7,'cxxprovinceOfBirthxxc');
//         $pdf->Ln(10);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(140,7,'Codice fiscale /STP/ENI:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(45,7,'cxxncodiceFiscalexxc');
//         $pdf->Ln(12);

//         $pdf->SetDrawColor(128,0,0);
//         $pdf->SetFillColor(0,78,155);
//         $pdf->SetTextColor(255,255,255);
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,7,'Indirizzi',0,0,'C',true);
//         $pdf->SetFillColor(255,255,255);
//         $pdf->SetDrawColor(0,0,0);
//         $pdf->SetTextColor(0,0,0);
//         $pdf->Ln(12);


//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(140,7,'Città di residenza:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(50,7,'cxxcityxxc');
//         $pdf->Ln(10);


//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(140,7,'Provincia:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(40,7,'cxxprovincexxc');
//         $pdf->Ln(10);



//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(140,7,'Indirizzo di residenza:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(40,7,'cxxaddressxxc');
//         $pdf->Ln(10);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(140,7,'Cap:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(50,7,'cxxcapxxc');
//         $pdf->Ln(10);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(140,7,'Civico:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(40,7,'cxxhouseNumberxxc');
//         $pdf->Ln(12);

//         $pdf->SetDrawColor(128,0,0);
//         $pdf->SetFillColor(0,78,155);
//         $pdf->SetTextColor(255,255,255);
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,7,'Domicilio',0,0,'C',true);
//         $pdf->SetFillColor(255,255,255);
//         $pdf->SetDrawColor(0,0,0);
//         $pdf->SetTextColor(0,0,0);

//         $pdf->Ln(12);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(140,7,'Città di residenza:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(50,7,'cxxcityDxxc');
//         $pdf->Ln(10);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(140,7,'Provincia:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(40,7,'cxxprovinceDxxc');
//         $pdf->Ln(10);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(140,7,'Indirizzo di residenza:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(40,7,'cxxaddressDxxc');
//         $pdf->Ln(10);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(140,7,'Cap:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(50,7,'cxxcapDxxc');
//         $pdf->Ln(10);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(140,7,'Civico:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(40,7,'cxxhouseNumberDxxc');
//         $pdf->Ln(12);

//         // $pdf->AddPage();

//         $pdf->SetDrawColor(128,0,0);
//         $pdf->SetFillColor(0,78,155);
//         $pdf->SetTextColor(255,255,255);
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,7,'Contatti',0,0,'C',true);
//         $pdf->SetFillColor(255,255,255);
//         $pdf->SetDrawColor(0,0,0);
//         $pdf->SetTextColor(0,0,0);

//         $pdf->Ln(12);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(60,7,'Email:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(37,7,'cxxemailxxc');
//         // $pdf->Ln(10);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(60,7,'Telefono:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(40,7,'cxxmobilexxc');
//         $pdf->Ln(10);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(60,7,'Note:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(37,7,'cxxnotexxc');
//         // $pdf->Ln(10);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(60,7,'Strutture Ocp:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(58,7,'cxxcarcerexxc');
//         $pdf->Ln(10);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(60,7,'Attivo:');
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(40,7,'cxxactivexxc');
//         $pdf->Ln(12);

//         $pdf->Output("stampa.pdf", "I");
//         exit();
//     }
// // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// public function printPdf(Request $request) {

    
    //     $pdf = new PDFClass();
    //     if (preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"])){
    //         header("Content-type: application/PDF");
    //     } else {
    //         header("Content-type: application/PDF");
    //         header("Content-Type: a \pplication/pdf");
    //     }
    //     $pdf->SetAutoPageBreak(true, 30);
    
    //     $pdf->SetTitle('PDF Anagrafic');
    
    //     $pdf->AliasNbPages();
    
    //     $pdf->AddPage();
    
    //     $pdf->SetLineWidth(.1);

    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,"SCORES per la valutazione (mmg) nell'arruolamento dei pazienti nel progetto AmbuCri-T",0,0,'C',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'Peso in kg');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(70,7,'cxxweightxxc');
    //     $pdf->Ln(10);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'Altezza in centimetri');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(40,7,'cxxheightxxc');
    //     $pdf->Ln(10);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'Bmi');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(40,7,'cxxbmixxc');
    //     $pdf->Ln(10);


    //     // if(isset($request->emergencyRoom)&& $request->emergencyRoom!==""){
    //         $pdf->SetFont('Arial', 'B', 12);
    //         $pdf->Cell(140,7,'Ricorso al pronto soccorso più di 3 volte nel corso di un anno');
    //         $pdf->SetFont('Arial','',12);
    //         $pdf->Cell(30,7,'cxxemergencyRoomxxc');
    //         // };
    //         $pdf->Ln(10);


    //     // if(isset($request->pharmacologicalTreatment)&& $request->pharmacologicalTreatment!==""){
    //         $pdf->SetFont('Arial', 'B', 12);
    //         $pdf->Cell(140,7,'In trattamento farmacologico con più di 4 farmaci die*');
    //         $pdf->SetFont('Arial','',12);
    //         $pdf->Cell(45,7,'cxxpharmacologicalTreatmentxxc');
    //     // };

    //     $pdf->Ln(12);

    //     // if(isset($request->anticoagulantDrugs)&& $request->anticoagulantDrugs!=="")
    //     // if(isset($request->antineoplasticDrugs)&& $request->antineoplasticDrugs!=="")
    //     // if(isset($request->antiarrhythmicDrugs)&& $request->antiarrhythmicDrugs!==""){
    //         $pdf->SetDrawColor(128,0,0);
    //         $pdf->SetFillColor(0,78,155);
    //         $pdf->SetTextColor(255,255,255);
    //         $pdf->SetFont('Arial', 'B', 12);
    //         $pdf->Cell(0,7,'Assunzione dei seguenti farmaci: * : Anticoagulanti, Antineoplastici, Antiaritmici',0,0,'C',true);
    //         $pdf->SetFillColor(255,255,255);
    //         $pdf->SetDrawColor(0,0,0);
    //         $pdf->SetTextColor(0,0,0);
    //     // };

    //     $pdf->Ln(12);

    // // if(isset($request->anticoagulantDrugs)&& $request->anticoagulantDrugs!==""){
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'Anticoagulanti');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(57,7,'cxxanticoagulantDrugsxxc');
    //     $pdf->Ln(12);
    // // };

    // // if(isset($request->antineoplasticDrugs)&& $request->antineoplasticDrugs!==""){
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'Antineoplastici');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(40,7,'cxxantineoplasticDrugsxxc');
    //     $pdf->Ln(12);
    // // };


    // //  if(isset($request->antiarrhythmicDrugs)&& $request->antiarrhythmicDrugs!==""){
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'Antiaritmici');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(57,7,'cxxantiarrhythmicDrugsxxc');
    //     $pdf->Ln(12);
    // // };


    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'Diagnosi di:',0,0,'C',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(12);

    // // if(isset($request->chronicHeartFailure)&& $request->chronicHeartFailure!==""){
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'Scompenso cardiaco cronico');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(62,7,'cxxchronicHeartFailurexxc');
    //     $pdf->Ln(10);
    //     // };


    // // if(isset($request->diabetes)&& $request->diabetes!==""){
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'Diabete');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(30,7,'cxxdiabetesxxc');
    //     $pdf->Ln(10);
    // // };

    // // if(isset($request->atrialFibrillation)&& $request->atrialFibrillation!==""){

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'Fibrillazione atriale');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(60,7,'cxxatrialFibrillationxxc');
    //     $pdf->Ln(10);
    // // };

    // // if(isset($request->bpco)&& $request->bpco!==""){
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'BPCO');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(27,7,'cxxbpcoxxc');
    //     $pdf->Ln(10);
    // // };


    // // if(isset($request->overweightObesity)&& $request->overweightObesity!==""){
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'Sovrappeso/Obesità');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(74,7,'cxxoverweightObesityxxc');
    //     $pdf->Ln(10);
    // // };

    // // if(isset($request->bpco)&& $request->bpco!==""){
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,"Ricovero ospedaliero nell'ultimo anno per malattia cardiovascolare");
    //     $pdf->Ln(8);
    //     $pdf->SetFont('Arial','',12);
    //     // $pdf->Cell(30,7,'si');
    //     $pdf->Cell(30,7,'cxxhospLastYearCardiovDisAcuteCerebrovaAccCancerxxc');
    //     $pdf->Ln(12);
    // // };

    //     $pdf->AddPage();


    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'----------',0,0,'C',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);

    //     $pdf->Ln(12);

    // // if(isset($request->hypertension)&& $request->hypertension!==""){
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'Ipertensione arteriosa');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(50,7,'cxxhypertensionxxc');
    //     $pdf->Ln(10);
    // // };


    // // if(isset($request->hypercholesterolemia)&& $request->hypercholesterolemia!==""){
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'Ipercolesterolemia');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(40,7,'cxxhypercholesterolemiaxxc');
    //     $pdf->Ln(10);
    // // };


    // // if(isset($request->chronicRenalFailure)&& $request->chronicRenalFailure!==""){
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'Insufficienza renale cronica');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(64,7,'cxxchronicRenalFailurexxc');
    //     $pdf->Ln(10);
    // // };

    // // if(isset($request->dialysis)&& $request->dialysis!==""){
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'Dialisi');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(40,7,'cxxdialysisxxc');
    //     $pdf->Ln(10);
    // // };

    // // if(isset($request->chronicNeurodegenerativeDiseases)&& $request->chronicNeurodegenerativeDiseases!==""){
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'Malattie neurodegenerative croniche');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(40,7,'cxxchronicNeurodegenerativeDiseasesxxc');
    //     $pdf->Ln(10);
    // // };


    // // if(isset($request->surgeriesInLastYear)&& $request->surgeriesInLastYear!==""){
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,"Interventi chirurgici nell'ultimo anno");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(40,7,'cxxsurgeriesInLastYearxxc');
    //     $pdf->Ln(10);
    // // };



    // // if(isset($request->sociallyFragile)&& $request->sociallyFragile!==""){
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'Vivi da solo* o senza fissa dimora o socialmente fragile');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(50,7,'cxxsociallyFragilexxc');
    //     $pdf->Ln(12);
    // // };


    //     // $pdf->AddPage();


    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'Dati Obiettivi',0,0,'C',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);

    //     $pdf->Ln(12);
        
    // // if(isset($request->bloodPressure)&& $request->bloodPressure!==""){
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'Pressione arteriosa');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(50,7,'cxxbloodPressurexxc');
    //     $pdf->Ln(10);
    // // };


    // // if(isset($request->oximetry)&& $request->oximetry!==""){
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'Ossimetria');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(40,7,'cxxoximetryxxc');
    //     $pdf->Ln(10);
    // // };


    // // if(isset($request->heartRate)&& $request->heartRate!==""){
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'Frequenza cardiaca');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(50,7,'cxxheartRatexxc');
    //     $pdf->Ln(10);
    // // };


    // // if(isset($request->arrhythmia)&& $request->arrhythmia!==""){
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'Aritmia');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(40,7,'cxxarrhythmiaxxc');
    //     $pdf->Ln(10);
    // // };


    // // if(isset($request->breathFrequency)&& $request->breathFrequency!==""){
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'Frequenza respiratoria');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(40,7,'cxxbreathFrequencyxxc');
    //     $pdf->Ln(10);
    // // };


    // // if(isset($request->chestAuscultationNoises)&& $request->chestAuscultationNoises!==""){
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,"Rumori di alterzioni all'ascolazione del torace");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(40,7,'cxxchestAuscultationNoisesxxc');
    //     $pdf->Ln(10);
    // // };


    // // if(isset($request->bodyTemperature)&& $request->bodyTemperature!==""){
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'Temperatura corporea');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(50,7,'cxxbodyTemperaturexxc');
    //     $pdf->Ln(10);
    // // };


    // // if(isset($request->breathlessnessStairs)&& $request->breathlessnessStairs!==""){
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'Affanno quando salgono le scale?');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(50,7,'cxxbreathlessnessStairsxxc');
    //     $pdf->Ln(10);
    // // };


    // // if(isset($request->snoring)&& $request->snoring!==""){
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'Russamento durante il sonno');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(50,7,'cxxsnoringxxc');
    //     $pdf->Ln(10);
    // // };

    //     $pdf->Output("stampa.pdf", "I");
    //     exit();
    // }
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++








































// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

public function printPdf(Request $request) {

        $pdf = new PDFClass();
        if (preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"])){
            header("Content-type: application/PDF");
        } else {
            header("Content-type: application/PDF");
            header("Content-Type: a \pplication/pdf");
        }
        $pdf->SetAutoPageBreak(true, 30);
    
        $pdf->SetTitle('PDF Scores');
    
        $pdf->AliasNbPages();
    
        $pdf->AddPage();
    
        $pdf->SetLineWidth(.1);

        $pdf->SetDrawColor(128,0,0);
        $pdf->SetFillColor(0,78,155);
        $pdf->SetTextColor(255,255,255);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0,7,'DATI PRELIMINARI DA INSERIRE',0,0,'C',true);
        $pdf->SetFillColor(255,255,255);
        $pdf->SetDrawColor(0,0,0);
        $pdf->SetTextColor(0,0,0);
        $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,'Peso in kg*');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(45,7,'cxxweightxxc');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,'Altezza in centimetri*');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(45,7,'cxxheightxxc');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,'bmi*');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(45,7,'cxxnumberxxc');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,'Genere*');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(45,7,'cxxtypexxc');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,'Età*');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(45,7,'cxxagexxc');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,'Diagnosi pregresse di Patologie Cardiovascolari*');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(45,7,'cxxpreviousDiagnosisCardioDiseasesxxc');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,'Sono in trattamento farmacologico*');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(45,7,'cxxpharmacologicalTreatmentxxc');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,'Specificare eventuali farmaci*');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(45,7,'cxxspecifyMedicationsxxc');
        $pdf->Ln(10);

        $pdf->SetDrawColor(128,0,0);
        $pdf->SetFillColor(0,78,155);
        $pdf->SetTextColor(255,255,255);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0,7,'FATTORI DI RISCHIO',0,0,'C',true);
        $pdf->SetFillColor(255,255,255);
        $pdf->SetDrawColor(0,0,0);
        $pdf->SetTextColor(0,0,0);
        $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,'Ipertensione arteriosa*');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(45,7,'cxxhypertensionxxc');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,'Fumo*');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(45,7,'cxxsmokexxc');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,'Sovrappeso/Obesità*');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(45,7,'cxxoverweightObesityxxc');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,'Storia familiare di malattia cardiovascolare*');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(45,7,'cxxfamilyHistoryCardiovascularxxc');
        $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,'Diabete mellito*');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(45,7,'cxxdiabetesxxc');
        $pdf->Ln(12);
        
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,'Ipercolesterolemia*');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(45,7,'cxxhypercholesterolemiaxxc');
        $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,'Scompenso cardiaco noto e/o renale*');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(45,7,'cxxheartFailurexxc');
        $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,"Fai attività fisica almeno 30' al giorno");
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(45,7,'cxxphysicalActivityxxc');
        $pdf->Ln(12);
        
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,'Mangi frutta e verdura tutti i giorni*');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(45,7,'cxxeatFruitEveryxxc');
        $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,'Vivi da solo*');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(45,7,'cxxliveAlonexxc');
        $pdf->Ln(12);
        
        $pdf->AddPage();

        $pdf->SetDrawColor(128,0,0);
        $pdf->SetFillColor(0,78,155);
        $pdf->SetTextColor(255,255,255);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0,7,'DATI SCOMPENSO CARDIACO E PATOLOGIE CARDIOVASCOLARI',0,0,'C',true);
        $pdf->SetFillColor(255,255,255);
        $pdf->SetDrawColor(0,0,0);
        $pdf->SetTextColor(0,0,0);
        $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,'Storia di scompenso cardiaco');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(50,7,'cxxhistoryHeartFailurexxc');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,'Oggi la mia pressione arteriosa è*');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(40,7,'cxxBloodPressurexxc');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,"l'apparecchio ha rilevato battiti cardiaci irregolari?");
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(40,7,'cxxIrregularHeartbeatDevicexxc');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,'Ho avuto un infarto Miocardico in passato?');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(50,7,'cxxheartAttackxxc');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,'Ho avuto un Ictus Miocardico in passato?');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(40,7,'cxxmyocardialStrokexxc');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,'Ho avuto mai Fibrillazione Atriale?');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(40,7,'cxxatrialFibrillationxxc');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,'Ho affanno quando salgo le scale?');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(50,7,'cxxbreathlessnessStairsxxc');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,'Russo durante il sonno?');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(40,7,'cxxsnoringxxc');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,"Ho difficoltà all'erezione? se uomo");
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(50,7,'cxxdifficultyErectionxxc');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(140,7,'Misura rapporto pancia/anche');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(40,7,'cxxmeasureBellyxxc');
        $pdf->Ln(12);

        $pdf->Output("stampa.pdf", "I");
        exit();
    }
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++












































    public function index(Request $request){
        $MonitoringClinicalParameters= MonitoringClinicalParameter::all();

        return response()->json($MonitoringClinicalParameters);

        // if($result){
        //     return [ "errorNumber"=>0,"message"=>"OK","remarks" => $result];
        // }else{
        //     return ['errorNumber'=>'5000','descrizione'=>'no records found'];
        // }  
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

        //return $request['first'];
        
        $a = filter_var($request['first'], FILTER_VALIDATE_BOOLEAN); 
        
        $startDate=$request['startDate'];
        $endDate=$request['endDate'];

        $last24Hours = Carbon::now()->subDay();

        $query=TraceabilityTherapy::where('user_instance_id', '=', 36);
        if($a == true){
            $allTraceabilityTherapys=$query->whereBetween('created_at', [$startDate, $endDate])->get();
        }else {
            $allTraceabilityTherapys=$query->whereDate('created_at', '>=', $last24Hours)->get();
        }

        if( $allTraceabilityTherapys){
            return [ "errorNumber"=>0,"message"=>"OK","TraceabilityTherapy" => $allTraceabilityTherapys,"TraceabilityTherapysId" => 36];
        }else{
            return ['errorNumber'=>5000,'descrizione'=>'no records found'];
        }
    

        // if (TraceabilityTherapy::where('user_instance_id', '=',36)->exists()) {
        //     $query=TraceabilityTherapy::where('user_instance_id', '=', 36);

        //     $allTraceabilityTherapys=$query->get()->slice(-10);

        //     return [ "errorNumber"=>0,"message"=>"OK","TraceabilityTherapy" => $allTraceabilityTherapys,"TraceabilityTherapysId" => 36];
        // }else{
        //     return ['errorNumber'=>5000,'descrizione'=>'no records found'];
        // }
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

        $a = filter_var($request['first'], FILTER_VALIDATE_BOOLEAN); 
        
        $startDate=$request['startDate'];
        $endDate=$request['endDate'];

        $last24Hours = Carbon::now()->subDay();

        $query=MonitoringClinicalParameter::where('user_instance_id', '=', 36);
        if($a == true){
            $allMonitoringClinicalParameters=$query->whereBetween('created_at', [$startDate, $endDate])->get();
        }else {
            $allMonitoringClinicalParameters=$query->whereDate('created_at', '>=', $last24Hours)->get();
        }

        if( $allMonitoringClinicalParameters){
            return [ "errorNumber"=>0,"message"=>"OK","MonitoringClinicalParameter" => $allMonitoringClinicalParameters,"monitoringClinicalParametersId" => 36];
        }else{
            return ['errorNumber'=>5000,'descrizione'=>'no records found'];
        }

        // if (MonitoringClinicalParameter::where('user_instance_id', '=', 36)->exists()) {
        //     $query=MonitoringClinicalParameter::where('user_instance_id', '=', 36);
        //     $allMonitoringClinicalParameters=$query->get()->slice(-10);

        //     return [ "errorNumber"=>0,"message"=>"OK","MonitoringClinicalParameter" => $allMonitoringClinicalParameters,"monitoringClinicalParametersId" => 36];
        // }else{
        //     return ['errorNumber'=>5000,'descrizione'=>'no records found'];
        // }
    }
    
    public function getCurrentMonitoringClinicalParameterById(Request $request){
        if (MonitoringClinicalParameter::where('user_instance_id', '=',36)->exists()) {
            $query=MonitoringClinicalParameter::where('user_instance_id', '=',36)->orderBy('th_date', 'desc');
            $MonitoringClinicalParameter=$query->get();
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

        $a = filter_var($request['first'], FILTER_VALIDATE_BOOLEAN); 
        
        $startDate=$request['startDate'];
        $endDate=$request['endDate'];

        
        $last24Hours = Carbon::now()->subDay();

        $query=ClinicalParameterCollection::where('user_instance_id', '=', 36);
        if($a == true){
            $allClinicalParameterCollections=$query->whereBetween('created_at', [$startDate, $endDate])->get();
        }else {
            $allClinicalParameterCollections=$query->whereDate('created_at', '>=', $last24Hours)->get();
        }

        if( $allClinicalParameterCollections){
            return [ "errorNumber"=>0,"message"=>"OK","ClinicalParameterCollection" => $allClinicalParameterCollections,"ClinicalParameterCollectionsId" => 36];
        }else{
            return ['errorNumber'=>5000,'descrizione'=>'no records found'];
        }

        // if (ClinicalParameterCollection::where('user_instance_id', '=', 36)->exists()) {
        //     $query=ClinicalParameterCollection::where('user_instance_id', '=', 36);
        //     $allClinicalParameterCollections=$query->get()->slice(-10);

        //     return [ "errorNumber"=>0,"message"=>"OK","ClinicalParameterCollection" => $allClinicalParameterCollections,"ClinicalParameterCollectionsId" => 36];
        // }else{
        //     return ['errorNumber'=>5000,'descrizione'=>'no records found'];
        // }
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

        $a = filter_var($request['first'], FILTER_VALIDATE_BOOLEAN); 
        
        $startDate=$request['startDate'];
        $endDate=$request['endDate'];

        $last24Hours = Carbon::now()->subDay();


        $query=CollectionFormHgt::where('user_instance_id', '=', 36);
        if($a == true){
            $allCollectionFormHgts=$query->whereBetween('created_at', [$startDate, $endDate])->get();
        }else {
            $allCollectionFormHgts=$query->whereDate('created_at', '>=', $last24Hours)->get();
        }

        if( $allCollectionFormHgts){
            return [ "errorNumber"=>0,"message"=>"OK","CollectionFormHgt" => $allCollectionFormHgts,"CollectionFormHgtsId" => 36];
        }else{
            return ['errorNumber'=>5000,'descrizione'=>'no records found'];
        }

        // if (CollectionFormHgt::where('user_instance_id', '=', 36)->exists()) {
        //     $query=CollectionFormHgt::where('user_instance_id', '=', 36);
        //     $allCollectionFormHgts=$query->get()->slice(-10);

        //     return [ "errorNumber"=>0,"message"=>"OK","CollectionFormHgt" => $allCollectionFormHgts,"CollectionFormHgtsId" => 36];
        // }else{
        //     return ['errorNumber'=>5000,'descrizione'=>'no records found'];
        // }
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

        $a = filter_var($request['first'], FILTER_VALIDATE_BOOLEAN); 
        
        $startDate=$request['startDate'];
        $endDate=$request['endDate'];

        $last24Hours = Carbon::now()->subDay();


        $query=MonitoringPrescriptionTao::where('user_instance_id', '=', 36);
        if($a == true){
            $allMonitoringPrescriptionTaos=$query->whereBetween('created_at', [$startDate, $endDate])->get();
        }else {
            $allMonitoringPrescriptionTaos=$query->whereDate('created_at', '>=', $last24Hours)->get();
        }

        if( $allMonitoringPrescriptionTaos){
            return [ "errorNumber"=>0,"message"=>"OK","MonitoringPrescriptionTao" => $allMonitoringPrescriptionTaos,"MonitoringPrescriptionTaosId" => 36];
        }else{
            return ['errorNumber'=>5000,'descrizione'=>'no records found'];
        }
        // if (MonitoringPrescriptionTao::where('user_instance_id', '=', 36)->exists()) {
        //     $query=MonitoringPrescriptionTao::where('user_instance_id', '=', 36);
        //     $allMonitoringPrescriptionTaos=$query->get()->slice(-10);

        //     return [ "errorNumber"=>0,"message"=>"OK","MonitoringPrescriptionTao" => $allMonitoringPrescriptionTaos,"MonitoringPrescriptionTaosId" => 36];
        // }else{
        //     return ['errorNumber'=>5000,'descrizione'=>'no records found'];
        // }
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
                                $_nurs = $this->addNursingTherapy($request);
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
                            case 'rt':
                                $_nurs = $this->addRefusedTreatment($request);
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
                    case 'rt':
                        return  $this->addRefusedTreatment($request,$_nursId);
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

        if($request->has('medicalAlert')){
            $_traceTerapy->medical_alert=$request->input('medicalAlert');
        }
        if($request->has('medicalAlertNote')){
            $_traceTerapy->medical_alert_note=$request->input('medicalAlertNote');
        }
        if($request->has('doctorsPrescriptions')){
            $_traceTerapy->doctors_prescriptions=$request->input('doctorsPrescriptions');
        }
        if($request->has('doctorsPrescriptionsNote')){
            $_traceTerapy->doctors_prescriptions_note=$request->input('doctorsPrescriptionsNote');
        }
        
        $testValue=0;
        if($request->has('RefusedTreatment')){
            $test=json_decode($request['RefusedTreatment'],true);

            foreach ($test['checked'] as $key => $value) {
                if($value==true){
                    $testValue+=$value;
                }
            };
            $_traceTerapy->drugs_not_administered=$request['RefusedTreatment'];
        }
        if($testValue>0){
            $_traceTerapy->save();
        }else{
            return ["errorNumber"=>4,"message"=>"Non ci sono dati da salvare"];
        }
        
        $test=json_decode($request['RefusedTreatment'],true);
        
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
            if(array_key_exists('collectionPaSystolic',$nursArr)){
                $_nursingCpc->collection_pa_systolic=$nursArr['collectionPaSystolic'];
            }
            if(array_key_exists('collectionPaDiastolic',$nursArr)){
                $_nursingCpc->collection_pa_diastolic=$nursArr['collectionPaDiastolic'];
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
            if(array_key_exists('mcpDiet',$nursArr)){
                $_nursingMcp->mcp_diet=$nursArr['mcpDiet'];
            }
            if(array_key_exists('bodyWeight',$nursArr)){
                $_nursingMcp->body_weight=$nursArr['bodyWeight'];
            }
            if(array_key_exists('monitoringPaSystolic',$nursArr)){
                $_nursingMcp->monitoring_pa_systolic=$nursArr['monitoringPaSystolic'];
            }
            if(array_key_exists('monitoringPaDiastolic',$nursArr)){
                $_nursingMcp->monitoring_pa_diastolic=$nursArr['monitoringPaDiastolic'];
            }
            if(array_key_exists('monitoringFc',$nursArr)){
                $_nursingMcp->monitoring_fc=$nursArr['monitoringFc'];
            }
            if(array_key_exists('operatorSignature',$nursArr)){
                $_nursingMcp->operator_signature=$nursArr['operatorSignature'];
            }
        }
        // if($request->has('MonitoringClinicalParameter')){
        //     $test=json_decode($request['MonitoringClinicalParameter'],true);

        //     foreach ($test as $key => $value) {

        //     };

        //     $_nursingMcp->mcp_diet=$request['MonitoringClinicalParameter'];
        // }else{
        //     return ["errorNumber"=>4,"message"=>"Non ci sono dati da salvare"];
        // }


        // $test=json_decode($request['MonitoringClinicalParameter'],true);
        
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
            if(array_key_exists('taoDosage',$nursArr)){
                $_nursingTao->tao_dosage=$nursArr['taoDosage'];
            }
            if(array_key_exists('taoDoctor',$nursArr)){
                $_nursingTao->tao_doctor=$nursArr['taoDoctor'];
            }
            if(array_key_exists('taoCpsiSignature',$nursArr)){
                $_nursingTao->tao_cpsi_signature=$nursArr['taoCpsiSignature'];
            }
        }
        $_nursingTao->save();

        if($_nursingTao){
            return ["errorNumber"=>0,"message"=>"ok","tao"=>$_nursingTao];

        }else{
            return ["errorNumber"=>3,"message"=>"Scheda non salvata contattare l'amministratore di sistema"];
        }
    }



    

    public function addRefusedTreatment(request $request){
        $userInstanceId=$request->input("user_instance_id");
        $_refusedTreat = new RefusedTreatment;
        $now=date("Y-m-d H:i:s");
        $_refusedTreat->user_instance_id= 36;
        if($request->has('doctorId')){
            $_refusedTreat->id_doctor=$request->input('doctorId');
        }
        if($request->has('doctorName')){
            $_refusedTreat->doctor_name=$request->input('doctorName');
        }
        if($request->has('doctorUserName')){
            $_refusedTreat->doctor_lastname=$request->input('doctorUserName');
        }
        $_refusedTreat->rt_date=$now;

        if($request->has('RefusedTreatment')){
            $nursArr = json_decode($request->input('RefusedTreatment'), true);
            // if(array_key_exists('checked',$nursArr)){
            //     $_refusedTreat->checked=$nursArr['checked'];
            // }
            // if(array_key_exists('descriptions',$nursArr)){
            //     $_refusedTreat->descriptions=$nursArr['descriptions'];
            // }
        }
        //$_refusedTreat->save();
        return $nursArr;

        // if($_refusedTreat){
        //     return ["errorNumber"=>0,"message"=>"ok","rt"=>$_refusedTreat];

        // }else{
        //     return ["errorNumber"=>3,"message"=>"Scheda non salvata contattare l'amministratore di sistema"];
        // }
    }
}


