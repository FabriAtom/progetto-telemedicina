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
use App\Models\PsySurvey;
use App\Models\PsyJsat;


use App\Classes\PDFClass;
use Codedge\Fpdf\Fpdf\Fpdf;

use Carbon\Carbon;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;


class PsyCardsController extends Controller
{

// --------------------------------------------------------------------------
//     PsyMentalHealthDepartment

//     public function printPdf(Request $request) {

//         $psy = PsyMentalHealthDepartment::where('id',2)->first();
    
//         $pdf = new PDFClass();
//         if (preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"])){
//             header("Content-type: application/PDF");
//         } else {
//             header("Content-type: application/PDF");
//             header("Content-Type: a \pplication/pdf");
//         }

//         $pdf->SetAutoPageBreak(true, 30);

//         $pdf->SetTitle('PDF PsyMentalHealthDepartment');
    
//         $pdf->AliasNbPages();

//         $pdf->AddPage();

//         $pdf->SetFillColor(255,255,255);
//         $pdf->SetDrawColor(0,0,0);
//         $pdf->SetTextColor(0,0,0);
//         $pdf->Cell(0,6,'Parte Psicologica Per Cartella Clinica',0,0,'C',true);
//         $pdf->Ln(15);

//         $pdf->SetLineWidth(.1);

//         $pdf->SetFont('Arial','',12);


//         $pdf->SetDrawColor(128,0,0);
//         $pdf->SetFillColor(0,78,155);
//         $pdf->SetTextColor(255,255,255);
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'Colloquio Psicologico',0,0,'L',true);
//         $pdf->SetFillColor(255,255,255);
//         $pdf->SetDrawColor(0,0,0);
//         $pdf->SetTextColor(0,0,0);
//         $pdf->Ln(10);
//         $pdf->SetFont('Arial','',12);
//         $pdf->MultiCell(0,10,$psy->psychological_interview,0,2,'L',true);
//         $pdf->Ln(5);


//         $pdf->SetDrawColor(128,0,0);
//         $pdf->SetFillColor(0,78,155);
//         $pdf->SetTextColor(255,255,255);
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'Ipotesi/Inquadramento Psicopatologico',0,0,'L',true);
//         $pdf->SetFillColor(255,255,255);
//         $pdf->SetDrawColor(0,0,0);
//         $pdf->SetTextColor(0,0,0);
//         $pdf->Ln(10);
//         $pdf->SetFont('Arial','',12);
//         $pdf->MultiCell(0,10,$psy->hypothesis_psychopathological_classification,0,2,'L',true);
//         $pdf->Ln(5);


//         $pdf->SetDrawColor(128,0,0);
//         $pdf->SetFillColor(0,78,155);
//         $pdf->SetTextColor(255,255,255);
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,' Progettualità/Tipologia Di Intervento:',0,0,'L',true);
//         $pdf->SetFillColor(255,255,255);
//         $pdf->SetDrawColor(0,0,0);
//         $pdf->SetTextColor(0,0,0);
//         $pdf->Ln(10);
//         $pdf->SetFont('Arial','',12);
//         $pdf->MultiCell(0,10,$psy->planning_type_of_intervention,0,2,'L',true);
//         $pdf->Ln(5);


//         $pdf->SetDrawColor(128,0,0);
//         $pdf->SetFillColor(0,78,155);
//         $pdf->SetTextColor(255,255,255);
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'Test',0,0,'L',true);
//         $pdf->SetFillColor(255,255,255);
//         $pdf->SetDrawColor(0,0,0);
//         $pdf->SetTextColor(0,0,0);
//         $pdf->Ln(10);
//         $pdf->SetFont('Arial','',12);
//         $pdf->MultiCell(0,10,$psy->test,0,2,'L',true);
//         $pdf->Ln(5);

//         $pdf->Output("stampa.pdf", "I");
//         exit();
//     }
// --------------------------------------------------------------------------










// --------------------------------------------------------------------------
//     PsyRehabilitationPsychiatricCard
    
//     public function printPdf(Request $request) {

//         $psyRehab = PsyRehabilitationPsychiatricCard::where('id',2)->first();

//         $pdf = new PDFClass();
//         if (preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"])){
//             header("Content-type: application/PDF");
//         } else {
//             header("Content-type: application/PDF");
//             header("Content-Type: a \pplication/pdf");
//         }
//         $pdf->SetAutoPageBreak(true, 30);

//         $pdf->SetTitle('PDF PsyRehabilitationPsychiatricCard');
    
//         $pdf->AliasNbPages();

//         $pdf->AddPage();

//         $pdf->SetFillColor(255,255,255);
//         $pdf->SetDrawColor(0,0,0);
//         $pdf->SetTextColor(0,0,0);
//         $pdf->Cell(0,6,'Cartella Informatizzata',0,0,'C',true);
//         $pdf->Ln(8);
//         $pdf->Cell(0,6,'Area Riabilitazione Pschiatrica (TRP)',0,0,'C',true);

//         $pdf->Ln(15);

//         $pdf->SetLineWidth(.1);

//         $pdf->SetFont('Arial','',12);


//         $pdf->SetDrawColor(128,0,0);
//         $pdf->SetFillColor(0,78,155);
//         $pdf->SetTextColor(255,255,255);
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'Breve Descrizione Progetto:',0,0,'L',true);
//         $pdf->SetFillColor(255,255,255);
//         $pdf->SetDrawColor(0,0,0);
//         $pdf->SetTextColor(0,0,0);
//         $pdf->Ln(10);
//         $pdf->SetFont('Arial','',12);
//         $pdf->MultiCell(0,10,$psyRehab->project_description,0,2,'L',true);
//         $pdf->Ln(5);


//         $pdf->SetDrawColor(128,0,0);
//         $pdf->SetFillColor(0,78,155);
//         $pdf->SetTextColor(255,255,255);
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'Obiettivi In Cui Viene Specificata Area Trattamento:',0,0,'L',true);
//         $pdf->SetFillColor(255,255,255);
//         $pdf->SetDrawColor(0,0,0);
//         $pdf->SetTextColor(0,0,0);
//         $pdf->Ln(10);
//         $pdf->SetFont('Arial','',12);
//         $pdf->MultiCell(0,10,$psyRehab->treatment_area_objective,0,2,'L',true);
//         $pdf->Ln(5);


//         $pdf->SetDrawColor(128,0,0);
//         $pdf->SetFillColor(0,78,155);
//         $pdf->SetTextColor(255,255,255);
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'Responsabile Progetto:',0,0,'L',true);
//         $pdf->SetFillColor(255,255,255);
//         $pdf->SetDrawColor(0,0,0);
//         $pdf->SetTextColor(0,0,0);
//         $pdf->Ln(10);
//         $pdf->SetFont('Arial','',12);
//         $pdf->MultiCell(0,10,$psyRehab->project_manager,0,2,'L',true);
//         $pdf->Ln(5);

//         $pdf->Output("stampa.pdf", "I");
//         exit();
//     }

 // ------------------------------------------------------------------------------------------------
















// -------------------------------------------------------------------------------------------------
//     psyUocDepartment

//     public function printPdf(Request $request) {

//         $psy = psyUocDepartment::where('id',2)->first();
    
//         $pdf = new PDFClass();
//         if (preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"])){
//             header("Content-type: application/PDF");
//         } else {
//             header("Content-type: application/PDF");
//             header("Content-Type: a \pplication/pdf");
//         }

//         $pdf->SetAutoPageBreak(true, 30);

//         $pdf->SetTitle('PDF psyUocDepartment');
    
//         $pdf->AliasNbPages();

//         $pdf->AddPage();

//         $pdf->SetFillColor(255,255,255);
//         $pdf->SetDrawColor(0,0,0);
//         $pdf->SetTextColor(0,0,0);
//         $pdf->Cell(0,6,'Scheda Psichiatrica',0,0,'C',true);
//         $pdf->Ln();
//         $pdf->Cell(0,6,'Dipartimento Salute Mentale Uoc',0,0,'C',true);
//         $pdf->Ln(15);
//         // $pdf->SetLineWidth(.1);
//         $pdf->SetFont('Arial','',12);


//         $pdf->SetDrawColor(128,0,0);
//         $pdf->SetFillColor(0,78,155);
//         $pdf->SetTextColor(255,255,255);
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'Elementi Anamnestici Rilevanti',0,0,'L',true);
//         $pdf->Ln(10);


//         $pdf->SetFillColor(255,255,255);
//         $pdf->SetDrawColor(0,0,0);
//         $pdf->SetTextColor(0,0,0);

//         $pdf->Cell(0,6,'Trattamenti Psichiatrici Precedenti',0,0,'L',true);
//         $pdf->Ln(8);
//         $pdf->SetFont('Arial','',12);
//         $pdf->MultiCell(0,10,$psy->psychiatric_treatment,0,2,'L',true);
//         $pdf->Ln(5);



//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'Csm',0,0,'L',true);
//         $pdf->Ln(8);
//         $pdf->SetFont('Arial','',12);
//         $pdf->MultiCell(0,10,$psy->csm,0,2,'L',true);
//         $pdf->Ln(5);


//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'Spdc',0,0,'L',true);
//         $pdf->Ln(8);
//         $pdf->SetFont('Arial','',12);
//         $pdf->MultiCell(0,10,$psy->spdc,0,2,'L',true);
//         $pdf->Ln(5);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'Rems',0,0,'L',true);
//         $pdf->Ln(8);
//         $pdf->SetFont('Arial','',12);
//         $pdf->MultiCell(0,10,$psy->rems,0,2,'L',true);
//         $pdf->Ln(5);

        
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'Prison',0,0,'L',true);
//         $pdf->Ln(8);
//         $pdf->SetFont('Arial','',12);
//         $pdf->MultiCell(0,10,$psy->prison,0,2,'L',true);
//         $pdf->Ln(5);


//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'Familiarità Psichiatrica',0,0,'L',true);
//         $pdf->Ln(8);
//         $pdf->SetFont('Arial','',12);
//         $pdf->MultiCell(0,10,$psy->psychiatric_familiarity,0,2,'L',true);
//         $pdf->Ln(5);


//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'Se Si,Chi?',0,0,'L',true);
//         $pdf->Ln(8);
//         $pdf->SetFont('Arial','',12);
//         $pdf->MultiCell(0,10,$psy->if_familiarity,0,2,'L',true);
//         $pdf->Ln(5);

//         $pdf->AddPage();

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'Esordio sintomatologia psichiatrica',0,0,'L',true);
//         $pdf->Ln(10);
//         $pdf->SetFont('Arial','',12);
//         $pdf->MultiCell(0,10,$psy->on_set_of_psychiatric_symptom,0,2,'L',true);
//         $pdf->Ln(5);

        
        
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'Uso di sostanze',0,0,'L',true);
//         // $pdf->Ln(10);
//         $pdf->SetFont('Arial','',12);
//         $pdf->MultiCell(0,10,$psy->substance_use,0,2,'L',true);
//         $pdf->Ln(5);


//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'In Carico Presso Ser.D. Territoriali',0,0,'L',true);
//         $pdf->Ln(10);
//         $pdf->SetFont('Arial','',12);
//         $pdf->MultiCell(0,10,$psy->in_charge_at_serd_territorial,0,2,'L',true);
//         $pdf->Ln(5);


//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'Quale?',0,0,'L',true);
//         $pdf->Ln(10);
//         $pdf->SetFont('Arial','',12);
//         $pdf->MultiCell(0,10,$psy->in_charge_at_serd_territorial_which,0,2,'L',true);
//         $pdf->Ln(10);



//         $pdf->SetDrawColor(128,0,0);
//         $pdf->SetFillColor(0,78,155);
//         $pdf->SetTextColor(255,255,255);
//         $pdf->SetFont('Arial','B',12);
//         $pdf->Cell(0,6,'Status Ingresso (Sintomatologia)',0,0,'L',true);
//         $pdf->Ln(15);
//         // $pdf->SetLineWidth(.1);        
//         $pdf->SetFillColor(255,255,255);
//         $pdf->SetDrawColor(0,0,0);
//         $pdf->SetTextColor(0,0,0);


//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'Psicotica',0,0,'L',true);
//         $pdf->Ln(5);
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(0,10,$psy->psychotic_symptom,0,2,'',true);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'Affettiva-Ansiosa',0,0,'L',true);
//         $pdf->Ln(5);
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(0,10,$psy->anxious_affective_symptom,0,2,'L',true);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'Impulsiva',0,0,'L',true);
//         $pdf->Ln(5);
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(0,10,$psy->impulsive_symptom,0,2,'L',true);
//         $pdf->Ln(5);



//         $pdf->SetFont('Arial','B',12);
//         $pdf->Cell(0,6,'Orientamento Diagnostico',0,0,'L',true);
//         $pdf->Ln(15);
//         // $pdf->SetLineWidth(.1);
//         $pdf->SetTextColor(0,0,0);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'D. Psicotico',0,0,'L',true);
//         $pdf->Ln(5);
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(0,10,$psy->psychotic_symptom,0,2,'',true);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'D. Affettivo-Ansioso',0,0,'L',true);
//         $pdf->Ln(5);
//         $pdf->SetFont('Arial','',12);
//         $pdf->MultiCell(0,10,$psy->anxious_affective_symptom,0,2,'L',true);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'D.Impulsivo',0,0,'L',true);
//         $pdf->Ln(5);
//         $pdf->SetFont('Arial','',12);
//         $pdf->MultiCell(0,10,$psy->impulsive_symptom,0,2,'L',true);
//         $pdf->Ln(5);



//         $pdf->SetDrawColor(128,0,0);
//         $pdf->SetFillColor(0,78,155);
//         $pdf->SetTextColor(255,255,255);
//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'Profilo Di Trattamento/PDTA Proposto Dopo Valutazione:',0,0,'L',true);
//         $pdf->Ln(10);

//         $pdf->SetFillColor(255,255,255);
//         $pdf->SetDrawColor(0,0,0);
//         $pdf->SetTextColor(0,0,0);


//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'Presa In Carico',0,0,'L',true);
//         $pdf->Ln(5);
//         $pdf->SetFont('Arial','',12);
//         $pdf->Cell(0,10,$psy->taking_charge_pdta,0,2,'',true);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'Assunzione In Cura',0,0,'L',true);
//         $pdf->Ln(5);
//         $pdf->SetFont('Arial','',12);
//         $pdf->MultiCell(0,10,$psy->care_intake_pdta,0,2,'L',true);

//         $pdf->SetFont('Arial', 'B', 12);
//         $pdf->Cell(0,6,'Consulenza',0,0,'L',true);
//         $pdf->Ln(5);
//         $pdf->SetFont('Arial','',12);
//         $pdf->MultiCell(0,10,$psy->consultancy_pdta,0,2,'L',true);
//         $pdf->Ln(5);
       
//         $pdf->Output("stampa.pdf", "I");
//         exit();
//     }
// --------------------------------------------------------------------------











// --------------------------------------------------------------------------
    // PsySocialFolder

    // public function printPdf(Request $request) {

    //     $psy = PsySocialFolder::where('id',2)->first();

    //     $pdf = new PDFClass();
    //     if (preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"])){
    //         header("Content-type: application/PDF");
    //     } else {
    //         header("Content-type: application/PDF");
    //         header("Content-Type: a \pplication/pdf");
    //     }

    //     $pdf->SetAutoPageBreak(true, 30);

    //     $pdf->SetTitle('PDF PsySocialFolder');

    //     $pdf->AliasNbPages();

    //     $pdf->AddPage();

    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Cell(0,7,'Scheda Psichiatrica',0,0,'C',true);
    //     $pdf->Ln();
    //     $pdf->Cell(0,7,'Cartella Sociale',0,0,'C',true);
    //     $pdf->Ln(15);
    //     // $pdf->SetLineWidth(.1);
    //     $pdf->SetFont('Arial','',12);


    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'1. Dati Anagrafici',0,0,'L',true);
    //     $pdf->Ln(15);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);


    //     $pdf->Cell(40,7,'Cittadinanza');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(55,7,$psy->citizenship);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,'Permesso Di Soggiorno');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(75,7,$psy->residency_permit);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(40,7,'Tipologia');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(55,7,$psy->typology);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,'Scadenza');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(75,7,$psy->expiration);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(40,7,'Stato Civile');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(55,7,$psy->marital_status);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,'Titolo Di Studio');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(75,7,$psy->social_degree);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(40,7,'Documento');
    //     // $pdf->Ln(5);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(55,7,$psy->identification_document);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,'Note');
    //     // $pdf->Ln(5);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(75,7,$psy->social_note);
    //     $pdf->Ln(15);


    //     // 2. Stato Giuridico
    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'2. Stato Giuridico',0,0,'L',true);
    //     $pdf->Ln(15);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);

    //     $pdf->Cell(45,7,'Educatore');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(50,7,$psy->legal_status_educator);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(65,7,'Avvocato');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(75,7,$psy->legal_status_lawyer);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(45,7,'Provenienza');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(50,7,$psy->legal_status_provenance);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(65,7,'Entrato Il');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(75,7,$psy->legal_status_entered);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(45,7,'Fine Pena');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(50,7,$psy->legal_status_end_of_sentence);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(65,7,'Stato Giuridico');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(75,7,$psy->legal_status_list_mix);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(45,7,'Misure Di Sicurezza');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(50,7,$psy->legal_status_security_measure);
    //     $pdf->Ln(6);
    //     $pdf->multiCell(180,7,$psy->legal_status_security_measure_text);
    //     $pdf->Ln(6);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(45,7,'Misure A Fine Pena');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(50,7,$psy->legal_status_end_of_the_sentence);
    //     $pdf->Ln(6);
    //     $pdf->multiCell(180,7,$psy->legal_status_end_of_the_sentence_text);
    //     $pdf->Ln(6);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(125,7,'Incensurato - Precedenti Detenzioni O Misure Alternative');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(20,7,$psy->legal_status_uncensored);
    //     $pdf->Ln(6);
    //     $pdf->multiCell(180,7,$psy->legal_status_uncensored_text);
    //     $pdf->Ln(6);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(35,7,'Rems O Altro');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(50,7,$psy->legal_status_rems_other);
    //     $pdf->Ln(6);
    //     $pdf->multiCell(180,7,$psy->legal_status_rems_other_text);   
    //     $pdf->Ln(12);



    //     $pdf->AddPage();


    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'3. Situazione Socio Sanitaria',0,0,'L',true);
    //     $pdf->Ln(15);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);



    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(45,7,'Csm');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(50,7,$psy->social_health_situation_csm);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Serd');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(75,7,$psy->social_health_situation_serd);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(45,7,'Altri Servizi Asl');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(50,7,$psy->social_health_situation_asl);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Certificato');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(75,7,$psy->social_health_situation_certificate);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(100,7,'Percorsi Terapeutici Precendenti / In Corso');
    //     $pdf->Ln(6);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->multiCell(180,7,$psy->social_health_situation_therapeutic_pathway);
    //     $pdf->Ln(5);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(100,7,'Invalidità Accompagno /Legge 104/92 - I.68/99');
    //     $pdf->Ln(6);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->multiCell(180,7,$psy->social_health_situation_disability_text);
    //     $pdf->Ln(5);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(45,7,'Invalidità Dal');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(50,7,$psy->social_health_situation_disability);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Revisione');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(75,7,$psy->social_health_situation_revision);
    //     $pdf->Ln(12);

        

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(115,7,'Amministatore Sostegno/Interdizione/Inabilitazione');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(75,7,$psy->social_health_situation_administrator);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(45,7,'Inps Di Riferimento');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(50,7,$psy->social_health_situation_inps);
    //     $pdf->Ln(12);



    //     // 4. Analisi Situazione Socio-Ambientale
    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'4. Analisi Situazione Socio-Ambientale',0,0,'L',true);
    //     $pdf->Ln(15);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);

        

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(50,7,'Famiglia Di Origine');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->multiCell(100,7,$psy->environmental_analysis_family_of_origin);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(50,7,'Alloggio');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->multiCell(70,7,$psy->environmental_analysis_accommodation);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(50,7,'Lavoro');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->multiCell(70,7,$psy->environmental_analysis_work);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(50,7,'Reddito',0,0,'L',true);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(70,7,$psy->environmental_analysis_income);
    //     $pdf->Ln(15);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(125,7,'Reti Formali E Informali (Interne Ed Esterne Al Carcere)');
    //     $pdf->Ln(6);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->multiCell(180,7,$psy->environmental_analysis_formal_network);
    //     $pdf->Ln(10);


    //     $pdf->AddPage();

    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,'5. Ipotesi Di Intervento /Progettualità',0,0,'L',true);
    //     $pdf->Ln(10);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,'Ipotesi Di Intervento',0,0,'L',true);
    //     $pdf->Ln(6);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->MultiCell(0,10,$psy->intervention_hypothesis_project,0,2,'L',true);
    //     $pdf->Ln(30);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,'Assistente Sociale',0,0,'R',true);
    //     $pdf->Ln(8);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,10,$psy->intervention_hypothesis_social_worker,0,2,'R',true);
    //     $pdf->Ln(5);
  
    //     $pdf->Output("stampa.pdf", "I");
    //     exit();
    // }

// --------------------------------------------------------------------------

// --------------------------------------------------------------------------
    // psyRating

    // public function printPdf(Request $request) {

    //     $psy = psyRating::where('id',2)->first();

    //     $pdf = new PDFClass();
    //     if (preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"])){
    //         header("Content-type: application/PDF");
    //     } else {
    //         header("Content-type: application/PDF");
    //         header("Content-Type: a \pplication/pdf");
    //     }

    //     $pdf->SetAutoPageBreak(true, 30);

    //     $pdf->SetTitle('PDF psyRating');

    //     $pdf->AliasNbPages();

    //     $pdf->AddPage();

    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Cell(0,6,'Scheda Psichiatrica',0,0,'C',true);
    //     $pdf->Ln();
    //     $pdf->Cell(0,6,'Brief Psychiatric Rating Scale BPRS',0,0,'C',true);
    //     $pdf->Ln(15);
    //     $pdf->SetFont('Arial','',12);

    //     $pdf->Cell(70,7,'Scala: NV = non valutato;');
    //     $pdf->Cell(40,7,'1 = assente;');
    //     $pdf->Cell(50,7,'2 = molto lieve;');
    //     $pdf->Cell(20,7,'3 = lieve;');
    //     $pdf->Ln();
    //     $pdf->Cell(30,7,'4 = moderato;');
    //     $pdf->Cell(60,7,'5 = moderatamente grave;');
    //     $pdf->Cell(50,7,'6 = grave;');
    //     $pdf->Cell(20,7,'7 = molto grave;');
    //     $pdf->Ln(10);

    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,'Descrizioni',0,0,'L',true);
    //     $pdf->Ln(10);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);

    //     $pdf->Ln(5);

    //     $pdf->SetFont('Arial','B',12);
    //     $pdf->Cell(70,7,'Preoccupazioni Somatiche');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->somatic_concern);
    //     $pdf->SetFont('Arial','B',12);
    //     $pdf->Cell(60,7,'Ansia');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->anxiety);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,'Depressione');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->depression);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Rischio Di Suicidio');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->risk_of_suicide);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,'Sentimenti Di Colpa');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->feeling_of_guilt);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Ostilità');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->hostility);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,"Elevazione Del Tono Dell'Umore");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->mood_elevation);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Grandiosità');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->grandeur);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,"Sospettosità");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->suspiciousness);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Allucinazioni');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->hallucination);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,"Contenuto Insolito Del Pensiero");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->unusual_content_of_thought);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Comportamento Bizzarro');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->bizarre_behavior);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,"Trascuratezza Della Cura Di Sé");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->neglect_of_self_care);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Disorientamento');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->disorientation);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,"Disorganizzazione Concettuale");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->conceptual_disorganization);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Appiattimento Affettivo');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->emotional_flattening);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,"Isolamento Emotivo");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->emotional_isolation);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Rallentamento Motorio');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->motor_slowdown);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,"Tensione Motoria");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->motor_tension);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Mancanza Di Cooperazione');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->lack_of_cooperation);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,"Eccitamento");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->excitement);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Distraibilità');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->distractibility);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,"Iperattività Motoria");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->motor_hyperactivity);

    //     $pdf->SetFont('Arial','B',12);
    //     $pdf->Cell(60,7,'Manierismi e posture');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->mannerism_and_posture);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial','B',12);
    //     $pdf->Cell(70,7,'Manierismi e posture');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->mannerism_and_posture);
    
    //     $pdf->Output("stampa.pdf", "I");
    //     exit();
    // }
// --------------------------------------------------------------------------


// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
    // psySucideAssessment

// public function printPdf(Request $request) {

    //     $psy = psySucideAssessment::where('id',2)->first();

    //     $pdf = new PDFClass();
    //     if (preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"])){
    //         header("Content-type: application/PDF");
    //     } else {
    //         header("Content-type: application/PDF");
    //         header("Content-Type: a \pplication/pdf");
    //     }

    //     $pdf->SetAutoPageBreak(true, 30);

    //     $pdf->SetTitle('PDF psySucideAssessment');

    //     $pdf->AliasNbPages();

    //     $pdf->AddPage();

    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Cell(0,6,'Scheda Psichiatrica',0,0,'C',true);
    //     $pdf->Ln();
    //     $pdf->Cell(0,6,'Brief Psychiatric Rating Scale BPRS',0,0,'C',true);
    //     $pdf->Ln(15);
    //     // $pdf->SetLineWidth(.1);
    //     $pdf->SetFont('Arial','',12);


    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,'Descrizioni',0,0,'L',true);
    //     $pdf->Ln(10);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);

    //     $pdf->Cell(0,6,'Preoccupazioni Somatiche',0,0,'L',true);
    //     $pdf->Ln(8);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,10,$psy->somatic_concern,0,2,'L',true);
    //     $pdf->Ln(5);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,'Ansia',0,0,'L',true);
    //     $pdf->Ln(8);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,10,$psy->anxiety,0,2,'L',true);
    //     $pdf->Ln(5);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,'Depressione',0,0,'L',true);
    //     $pdf->Ln(8);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,10,$psy->depression,0,2,'L',true);
    //     $pdf->Ln(5);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,'Rischio Di Suicidio',0,0,'L',true);
    //     $pdf->Ln(8);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,10,$psy->risk_of_suicide,0,2,'L',true);
    //     $pdf->Ln(5);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,'Sentimenti Di Colpa',0,0,'L',true);
    //     $pdf->Ln(8);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,10,$psy->feeling_of_guilt,0,2,'L',true);
    //     $pdf->Ln(5);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,'Ostilità',0,0,'L',true);
    //     $pdf->Ln(8);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,10,$psy->hostility,0,2,'L',true);
    //     $pdf->Ln(5);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,"Elevazione Del Tono Dell'Umore",0,0,'L',true);
    //     $pdf->Ln(8);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,10,$psy->mood_elevation,0,2,'L',true);
    //     $pdf->Ln(5);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,'Grandiosità',0,0,'L',true);
    //     $pdf->Ln(8);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,10,$psy->grandeur,0,2,'L',true);
    //     $pdf->Ln(5);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,"Sospettosità",0,0,'L',true);
    //     $pdf->Ln(8);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,10,$psy->suspiciousness,0,2,'L',true);
    //     $pdf->Ln(5);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,'Allucinazioni',0,0,'L',true);
    //     $pdf->Ln(8);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,10,$psy->hallucination,0,2,'L',true);
    //     $pdf->Ln(5);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,"Contenuto Insolito Del Pensiero",0,0,'L',true);
    //     $pdf->Ln(8);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,10,$psy->unusual_content_of_thought,0,2,'L',true);
    //     $pdf->Ln(5);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,'Comportamento Bizzarro',0,0,'L',true);
    //     $pdf->Ln(8);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,10,$psy->bizarre_behavior,0,2,'L',true);
    //     $pdf->Ln(5);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,"Trascuratezza Della Cura Di Sé",0,0,'L',true);
    //     $pdf->Ln(8);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,10,$psy->neglect_of_self_care,0,2,'L',true);
    //     $pdf->Ln(5);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,'Disorientamento',0,0,'L',true);
    //     $pdf->Ln(8);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,10,$psy->disorientation,0,2,'L',true);
    //     $pdf->Ln(5);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,"Disorganizzazione Concettuale",0,0,'L',true);
    //     $pdf->Ln(8);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,10,$psy->conceptual_disorganization,0,2,'L',true);
    //     $pdf->Ln(5);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,'Appiattimento Affettivo',0,0,'L',true);
    //     $pdf->Ln(8);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,10,$psy->emotional_flattening,0,2,'L',true);
    //     $pdf->Ln(5);



    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,"Isolamento Emotivo",0,0,'L',true);
    //     $pdf->Ln(8);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,10,$psy->emotional_isolation,0,2,'L',true);
    //     $pdf->Ln(5);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,'Rallentamento Motorio',0,0,'L',true);
    //     $pdf->Ln(8);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,10,$psy->motor_slowdown,0,2,'L',true);
    //     $pdf->Ln(5);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,"Tensione Motoria",0,0,'L',true);
    //     $pdf->Ln(8);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,10,$psy->motor_tension,0,2,'L',true);
    //     $pdf->Ln(5);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,'Mancanza Di Cooperazione',0,0,'L',true);
    //     $pdf->Ln(8);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,10,$psy->lack_of_cooperation,0,2,'L',true);
    //     $pdf->Ln(5);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,"Eccitamento",0,0,'L',true);
    //     $pdf->Ln(8);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,10,$psy->excitement,0,2,'L',true);
    //     $pdf->Ln(5);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,'Distraibilità',0,0,'L',true);
    //     $pdf->Ln(8);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,10,$psy->distractibility,0,2,'L',true);
    //     $pdf->Ln(5);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,"Iperattività Motoria",0,0,'L',true);
    //     $pdf->Ln(8);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,10,$psy->motor_hyperactivity,0,2,'L',true);
    //     $pdf->Ln(5);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,'Manierismi e posture',0,0,'L',true);
    //     $pdf->Ln(8);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,10,$psy->mannerism_and_posture,0,2,'L',true);
    //     $pdf->Ln(5);


        
    //     $pdf->Output("stampa.pdf", "I");
    //     exit();
    // }
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------


// --------------------------------------------------------------------------
    // PsyMembershipCard

    // public function printPdf(Request $request) {

    //     $psy = PsyMembershipCard::where('id',2)->first();

    //     $pdf = new PDFClass();
    //     if (preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"])){
    //         header("Content-type: application/PDF");
    //     } else {
    //         header("Content-type: application/PDF");
    //         header("Content-Type: a \pplication/pdf");
    //     }

    //     $pdf->SetAutoPageBreak(true, 30);

    //     $pdf->SetTitle('PDF PsyMembershipCard');

    //     $pdf->AliasNbPages();

    //     $pdf->AddPage();

    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Cell(0,6,'Scheda Socio-Anagrafica',0,0,'C',true);
    //     $pdf->Ln(12);
    //     $pdf->SetFont('Arial','',12);

    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,'Cittadinanza',0,0,'L',true);
    //     $pdf->Ln(10);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);


    //     $pdf->SetFont('Arial','B',12);
    //     $pdf->Cell(60,7,'Comunica In Italiano');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(40,7,$psy->communicate_italian);

    //     $pdf->SetFont('Arial','B',12);
    //     $pdf->Cell(60,7,'Comunica in');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->communicate);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Stato Civile');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(40,7,$psy->marital_status);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Figli');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->sons);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'N. Figli');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(40,7,$psy->son_number);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Età Figli');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->son_age);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,"Residenza");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(40,7,$psy->residence_not);

    //     // IF RESIDENZA SI.. TEXT
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->residence);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,"Titolo Di Studio");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(40,7,$psy->title_study);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Situazione Abitativa');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->situation_housing);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,"Situazione Lavorativa");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(40,7,$psy->situation_work);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Data Inizio Carcerazione');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->date_start_prison);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,"Data Ingresso In Istituto");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(40,7,$psy->date_start_in_institute);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Prima Esperienza Detentiva');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->first_experience_prison);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,"Provenienza");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(40,7,$psy->provenience);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Posizione Giuridica');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->legal_position);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,"Fine Pena");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(40,7,$psy->end_of_sentence);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Risorse Economiche');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->economic_resource);
    //     $pdf->Ln(15);


    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'Primo Colloquio Psicologico INTAKE',0,0,'L',true);
    //     $pdf->Ln(12);
    //     $pdf->SetFillColor(0,100,250);
    //     $pdf->Cell(48,7,"Precedenti Trattamenti",0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(10);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(80,7,"Per Problematiche O Disturbi Psichici");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,7,$psy->previous_treatment_for_problem);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(80,7,'Farmacologici E/O Psicosociali');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,7,$psy->previous_treatment_farmacology);
    //     $pdf->Ln(12);



    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,100,250);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(43,7,"Precedenti Diagnosi",0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(10);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(80,7,"Disturbo Mentale");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,7,$psy->previous_diagnoses_of_mental_disorder);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(80,7,'Abuso/Dipendenza Da Sostanze');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,7,$psy->previous_diagnosis_of_drug_abuse);
    //     $pdf->Ln(12);

    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,100,250);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(61,7,"Precedenti Ricoveri In Acuzie",0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(10);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(80,7,"In SPDC");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,7,$psy->previous_hospitalization_spdc);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial','B',12);
    //     $pdf->Cell(80,7,'In Pronto Soccorso E/O Ricoveri');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,7,$psy->previous_hospitalization_emergency);
    //     $pdf->Ln(12);


    //     $pdf->AddPage();

    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'A2. Anamnesi Patologica Prossima / Remota',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(80,7,"Dichiara di aver tentato il suicidio");
    //     $pdf->Ln(6);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,7,$psy->pathological_attempted_suicide);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(80,7,'Dichiara Di Sentirsi Disperato O Particolarmente Depresso');
    //     $pdf->Ln(6);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,7,$psy->pathological_desperate);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(80,7,"Dichiara Di Sentirsi Disperato O Particolarmente Ansioso");
    //     $pdf->Ln(6);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,7,$psy->pathological_anxious);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(80,7,'Dichiara Di Sentirsi Disperato O Particolarmente Attivato');
    //     $pdf->Ln(6);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,7,$psy->pathological_active);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(80,7,"Dichiara Di Sentirsi Disperato O Particolarmente Ansioso");
    //     $pdf->Ln(6);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,7,$psy->pathological_strange_thought);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(80,7,'Dichiara Di Essere Insonne O Di Avere Gravi Disturbi Del Sonno');
    //     $pdf->Ln(6);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,7,$psy->pathological_sleepless);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(80,7,"Dichiara Di Non Avere Alcuna Rete Familiare / Sociale Di Sostegno");
    //     $pdf->Ln(6);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,7,$psy->pathological_no_family);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(80,7,'Ammette Di Avere Pensieri Riguardanti Il Suicidio');
    //     $pdf->Ln(6);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,7,$psy->pathological_thought_suicide);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(80,7,'Dichiara Episodi Di Intossicazione Da Alcol ("Ubriacature") O Di Bingedrinking ("Abbuffata")');
    //     $pdf->Ln(6);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,7,$psy->pathological_alcol);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(80,7,"Dichiara Comportamento Additivo Problematico Senza Sostanza (Ad Esempio GAP)");
    //     $pdf->Ln(6);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,7,$psy->pathological_addictive_behavior);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(80,7,'Dichiara Lesioni Del Setto Nasale (Necrosi/Perforazione)');
    //     $pdf->Ln(6);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,7,$psy->pathological_claims_injuries);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(80,7,'Esprime Livelli Insoliti Di Vergogna,Colpa O Preoccupazione Per Incarcerazione');
    //     $pdf->Ln(6);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(0,7,$psy->pathological_shame_level);
    //     $pdf->Ln(12);

    //     $pdf->AddPage();

    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'Status',0,0,'L',true);
    //     $pdf->Ln(10);
    //     $pdf->SetFillColor(0,100,250);
    //     $pdf->Cell(88,7,"Colloquio E Visita Psicologica/Psichiatrica",0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,'Accesso Al Colloquio');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->access_to_the_interview);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Note');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->access_to_the_interview_note);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,'Vigile');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->traffic_warden);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Note');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->traffic_warden_note);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,'Lucido');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->lucid);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Note');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->lucid_note);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,'Orientato nei tre paramentri');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->orientated_in_the_three_parameter);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Note');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->orientated_in_the_three_parameter_note);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,'Umore');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->umor);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Note');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->umor_note);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,'Ansia');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->anxiety);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Note');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->anxiety_note);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,'Alterazione senso percezione');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->altered_perception);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Note');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->altered_perception_note);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,'Appettito');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->appetite);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Note');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->appetite_note);
    //     $pdf->Ln(12);
        
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,'Alterazione Forma Del Pensiero');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->altered_form_thought);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Note');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->altered_form_thought_note);
    //     $pdf->Ln(12);
       
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,'Ritmo Sonno-Veglia');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->sleep_wake_rhythm);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Note');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->sleep_wake_rhythm_note);
    //     $pdf->Ln(12);
       
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(70,7,'Progettualità Futura');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->future_project);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(60,7,'Note');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->future_project_note);
    //     $pdf->Ln(12);



    //     $pdf->AddPage();

    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'Questionario Sul Benessere Generale(GHQ-12)',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'Nelle Ultime Due Settimane Si é Sentito',0,0,'L',true);
    //     $pdf->Ln(10);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,"1. In Grado Di Concentrarsi Su Cio Che Stava Facendo");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->well_to_focus);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'2. Di Aver Perso Molto Sonno Tanto Da Preoccuoparsi');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->well_lost_sleep);
    //     $pdf->Ln(12);





    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,"3. Di Essere Produttivo Nella Maggior Parte Delle Attività");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->well_productive);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'4. In Grado Di Prendere Decisioni Nella Maggior Parte Dei Casi?');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->well_make_decision);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,"5. Costantemente Sotto Pressione/Stressato");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->well_pression);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'6. Di Non Essere In Grado Di Superare Le Difficoltà?');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->well_not_able);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,"7. In Grado Di Ritagliarsi Del Tempo Per Sé?");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->well_time_for_himself);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'8. In Grado Di Risolvere I Suoi Problemi?');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->well_problem_solving);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,"9. Infelice O Particolarmente Depresso");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->well_unhappy);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'10. Come Se Avesse Perso La Fiducia In Sé Stesso?');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->well_lost_confidence);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,'11. Come Se Avesse Minore Stima Di Sé?');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->well_lower_esteem);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(140,7,"12. Con Uno Stato Nel Complesso Felice O Sereno?");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->well_overall_happy);
    //     $pdf->Ln(12);



    //     // $pdf->AddPage();

    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,7,'MINI',0,0,'L',true);
    //     $pdf->Ln(10);
    //     $pdf->SetFillColor(0,100,250);
    //     $pdf->Cell(56,7,'Durante Il Mese Scorso Ha:',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(120,7,'1. Mai Pensato Che Sarebbe Stato Meglio Essere Morto?');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->well_lower_esteem);
    //     $pdf->Ln(10);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(120,7,"2. Voluto Farsi Del Male?");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->well_overall_happy);
    //     $pdf->Ln(10);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(120,7,'3. Pensato Al Suicidio?');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->well_lower_esteem);
    //     $pdf->Ln(10);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(120,7,"4. Pensato A Come Suicidarsi?");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->well_overall_happy);
    //     $pdf->Ln(10);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(120,7,'5. Messo In Atto Un Tentativo Di Suicidio?');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->well_lower_esteem);
    //     $pdf->Ln(10);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(120,7,"6. Ha Mai Messo In Atto Un Tentativo Di Suicidio?");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->well_overall_happy);
    //     $pdf->Ln(10);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(120,7,"- Livello Di Gravità Dell'ideazione Suicidaria");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->gravity_ideation_suicide);
    //     $pdf->Ln(12);



    //     // $pdf->AddPage();

    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(115,7,'Chek-List Valutazione Rischio Autolesivo E/O Suicidario',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(160,7,"1.Precedenti Ricoveri In Acuzie In SPDC Negli Ultimi 30 Giorni");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->check_spdc_hospitalizations);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(160,7,"Dichiara Di Aver Tentato Il Suicidio Nell'Ultimo Mese");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->check_declare_suicide);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(160,7,"Ammette Di Avere Pensieri Riguardanti Il Suicidio");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->check_thougth_suicide);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(160,7,"Esprime Livelli Insoliti Di Vergogna, Preoccupazione Per L'Incarcerazione");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->check_unusual_level_of_shame);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(160,7,"Stato Confusionale (Disorientamento Spazio-Temporale)");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->check_confusional_state);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(160,7,'Agitazione Psicomotoria A Grave E Incongruo Discontrollo Degli Impulsi');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->check_psychomotor_agitation);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(160,7,"Bizzarrie/Gravi Alterazioni Del Comportamento E/O Del Pensiero");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->check_bizarre_behavior);
    //     $pdf->Ln(12);

    
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(160,7,"Appiattimento Affettivo Psicomotoria/Assenza Di Comunicazione Verbale");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->check_verbal_communication);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(160,7,"Livello Alto Di Gravità Del M.I.N.I.");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->check_level_mini);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(160,7,"Questionario Sul Benessere Generale (GHQ-12)");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->check_general_well_being);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(160,7,"Forme Vane Di Violenza Subita Negli Ultimi 15 Giorni");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->check_vain_form_violence);
    //     $pdf->Ln(12);

    
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(160,7,"Provenienza Da Un Isolamento Forzato");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->check_come_from_forced_isolation);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(160,7,"Isolamento Delle Reti Sociali");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->check_isolation_social_network);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(160,7,'Incertezza Sulle Prospettive Future, Sul Lavoro E Sulle Relazioni');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->check_uncertainty_about_future);
    //     $pdf->Ln(15);
       
        

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(30,7,'Conclusioni:');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->check_conclusion);
    //     $pdf->Ln(12);


    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(120,7,'Conclusioni Valutazione Rischio Autolesivo E/O Suicidario',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(110,7,'Segnalazione Per Rischio Autolesivo E/O Suicidario');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->risk_assessment_conclusions);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(50,7,'Richiesta Attivazione Di Misure Di:');
    //     $pdf->Ln(2);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->request_activation_normal_surveillance);
    //     $pdf->Ln(6);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->request_activation_multiple_room);
    //     $pdf->Ln(6);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->request_activation_big_surveillance);
    //     $pdf->Ln(6);
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->request_activation_visual_surveillance);
    //     $pdf->Ln(12);




    //     $pdf->AddPage();

    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(51,7,'Prima Visita Psichiatrica',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(12);



    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(110,7,'Anamnesi');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->first_medical_history_visit);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(110,7,'Status');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->first_status);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(110,7,'Terapia');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->first_terapy);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(110,7,'Orientamento Diagnostico');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->first_orientation);
    //     $pdf->Ln(12);



    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(110,7,'Conclusioni, Si Propone Un Piano Di Intervento');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->intervention_plan_advice);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(110,7,'Specifiche Prescrizioni Suggerimenti');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->specific_prescription_suggestions);
    //     $pdf->Ln(12);


    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(64,7,'Visita Psichiatrica Di Controllo',0,0,'L',true);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(110,7,'a. Status');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->psychiatric_visit_status);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(110,7,'b. Terapia');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->psychiatric_visit_terapy);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(110,7,'c. Orientamento Diagnostico');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->psychiatric_visit_orientation);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(110,7,'d. Conclusioni, Si Propone Un Piano Di Intervento');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->psychiatric_intervention_plan_advice);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(110,7,'Specifiche Prescrizioni Suggerimenti');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(25,7,$psy->psychiatric_visit_prescription_suggestions);
    //     $pdf->Ln(12);
        
    //     $pdf->Output("stampa.pdf", "I");
    //     exit();
    // }



    // PsySurvey

    // public function printPdf(Request $request) {

    //     $psy = PsySurvey::where('id',2)->first();

    //     $pdf = new PDFClass();
    //     if (preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"])){
    //         header("Content-type: application/PDF");
    //     } else {
    //         header("Content-type: application/PDF");
    //         header("Content-Type: a \pplication/pdf");
    //     }

    //     $pdf->SetAutoPageBreak(true, 30);

    //     $pdf->SetTitle('PDF PsySurvey');

    //     $pdf->AliasNbPages();

    //     $pdf->AddPage();

    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);
    //     $pdf->Cell(0,6,'Scheda Psichiatrica',0,0,'C',true);
    //     $pdf->Ln();
    //     $pdf->Cell(0,6,'Clinical Outcome In Routine Evaluation',0,0,'C',true);
    //     $pdf->Ln(15);
    //     $pdf->SetFont('Arial','',12);

    //     $pdf->SetDrawColor(128,0,0);
    //     $pdf->SetFillColor(0,78,155);
    //     $pdf->SetTextColor(255,255,255);
    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(0,6,"Nell'Ultima Settimana",0,0,'L',true);
    //     $pdf->Ln(10);
    //     $pdf->SetFillColor(255,255,255);
    //     $pdf->SetDrawColor(0,0,0);
    //     $pdf->SetTextColor(0,0,0);

    //     $pdf->Ln(5);

    //     $pdf->SetFont('Arial','B',12);
    //     $pdf->Cell(135,7,'Mi Sono Sentito Terribilmente Solo E Isolato');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->survey_heard_alone);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial','B',12);
    //     $pdf->Cell(135,7,'Mi Sono Sentito Teso, Ansioso O Nervoso');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_heard_anxious);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,'Ho Sentito Di Avere Qualcuno A Cui Rivolgermi Per Un Sostegno');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->survey_support);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,'Mi Sono Sentito A Posto Con Me Stesso');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_okay_with_myself);
    //     $pdf->Ln(12);

        



    //     $pdf->SetFont('Arial','B',12);
    //     $pdf->Cell(135,7,'Mi Sono Sentito Completamente Privo Di Energia E Di Entusiasmo');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->survey_devoid_of_energy);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial','B',12);
    //     $pdf->Cell(135,7,'Sono Stato Violento Fisicamente Verso Altre Persone');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_violent_towards_others);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,'Mi Sono Sentito Capace Di Adattarmi In Caso Di Difficoltà');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->survey_able_to_adapt);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,'Sono Stato Disturbato Da Malesseri, Dolori O Altri Problemi Fisici');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_disturbed);
    //     $pdf->Ln(12);




    //     $pdf->SetFont('Arial','B',12);
    //     $pdf->Cell(135,7,'Ho Pensato A Farmi Del Male');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_hurt_me);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,'Non Ho Avuto La Forza Di Parlare Con Le Altre Persone');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->survey_not_force_to_speak);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,"La Tensione E L'Ansia Mi Hanno Impedito Di Fare Cose Importanti");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_tension_prevented);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial','B',12);
    //     $pdf->Cell(135,7,'Sono Stato Contento Per Le Cose Che Ho Fatto');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_happy);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,"Sono Stato Disturbato Da Pensieri E Stati D'Animo Indesiderati");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(35,7,$psy->survey_disturbed_by_thoughts);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,'Ho Avuto Voglia Di Piangere');
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_cry);
    //     $pdf->Ln(12);




    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,"Ho Provato Panico E Terrore");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_felt_panic);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,"Ho Progettato Di Mettere Fine Alla Mia Vita");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_planned_to_suicide);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,"Mi Sono Sentito Sopraffatto Dai Miei Problemi");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_felt_overwhelmed);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,"Ho Avuto Difficoltà Ad Addormentarmi O Mantenere Il Sonno");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_difficulty_falling_asleep);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,"Ho Provato Calore O Affetto Per Qualcuno");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_felt_affection);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,"Mi è Stato Impossibile Mettere Da Parte I Miei Problemi");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_impossible_aside_problems);
    //     $pdf->Ln(12);



    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,"Sono Stato In Grado Di Fare Le Cose Che Dovevo Fare");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_able_to_do_things);
    //     $pdf->Ln(12);



    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,"Ho Minacciato E Intimorito Qualcuno");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_threatened_someone);
    //     $pdf->Ln(12);



    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,"Mi Sono Sentito Affranto O Senza Speranza");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_felt_heartbroken);
    //     $pdf->Ln(12);



    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,"Ho Pensato: 'Sarebbe Meglio Essere Morto'");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_thought_better_to_die);
    //     $pdf->Ln(12);



    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,"Mi Sono Sentito Criticato Da Altre Persone");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_felt_critical);
    //     $pdf->Ln(12);



    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,"Ho Pensato Di Non Avere Amici");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_thought_had_no_friends);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,"Mi Sono Sentito Infelice");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_felt_unhappy);
    //     $pdf->Ln(12);

    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,"Sono Stato Turbato Da Immagini O Ricordi Indesiderati");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_troubled_by_images);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,"Mi Sono Sentito Irritato Mentre Ero Con Altre Persone");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_felt_irritated);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,"Ho Pensato Che è Mia La Colpa Dei Problemi");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_thought_my_fault);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,"Mi Sono Sentito Ottimista Per Il Mio Futuro");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_optimistic_about_the_future);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,"Ho Ottenuto Ciò Che Volevo");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_got_what_wanted);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,"Mi Sono Sentito Umiliato O Imbarazzato Da Altre Persone");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_felt_humiliated);
    //     $pdf->Ln(12);


    //     $pdf->SetFont('Arial', 'B', 12);
    //     $pdf->Cell(135,7,"Mi Sono Fatto Del Male Fisicamente");
    //     $pdf->SetFont('Arial','',12);
    //     $pdf->Cell(65,7,$psy->survey_hurt_myself);
    //     $pdf->Ln(12);


    
    //     $pdf->Output("stampa.pdf", "I");
    //     exit();
    // }
// -----------------------------------------------------------------------

// -----------------------------------------------------------------------
    // PsyJsat

    public function printPdf(Request $request) {

        $psy = PsyJsat::where('id',2)->first();

        $pdf = new PDFClass();
        if (preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"])){
            header("Content-type: application/PDF");
        } else {
            header("Content-type: application/PDF");
            header("Content-Type: a \pplication/pdf");
        }

        $pdf->SetAutoPageBreak(true, 30);

        $pdf->SetTitle('PDF PsyJsat');

        $pdf->AliasNbPages();

        $pdf->AddPage();

        $pdf->SetFillColor(255,255,255);
        $pdf->SetDrawColor(0,0,0);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(0,6,'Jail Screening Assessment Tool',0,0,'C',true);
        $pdf->Ln();
        $pdf->Cell(0,6,'Foglio Di Codifica',0,0,'C',true);
        $pdf->Ln(15);
        $pdf->SetFont('Arial','',12);

        $pdf->SetDrawColor(128,0,0);
        $pdf->SetFillColor(0,78,155);
        $pdf->SetTextColor(255,255,255);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0,6,"Informazioni",0,0,'L',true);
        $pdf->Ln(10);
        $pdf->SetFillColor(255,255,255);
        $pdf->SetDrawColor(0,0,0);
        $pdf->SetTextColor(0,0,0);


        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(60,7,'Data Di Entrata:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->entry_date);

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(60,7,'Data Di Valutazione');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(65,7,$psy->valutation_date);
        $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Anni');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->information_age);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Italiano:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(65,7,$psy->information_language);
        $pdf->Ln(12);


        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Livello:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->information_level_language);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Lingua Madre:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(65,7,$psy->information_native_language);
        $pdf->Ln(12);



        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Background Etnico/Culturale:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->information_background);
        
        if(isset($psy->information_background_text)&& $psy->information_background_text!==""){
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(60,7,'Background:');
            $pdf->SetFont('Arial','',12);
            $pdf->Cell(65,7,$psy->information_background_text);
        }

        $pdf->Ln(12);


        $pdf->SetDrawColor(128,0,0);
        $pdf->SetFillColor(0,78,155);
        $pdf->SetTextColor(255,255,255);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0,6,"Situazione Giuridica",0,0,'L',true);
        $pdf->Ln(10);
        $pdf->SetFillColor(255,255,255);
        $pdf->SetDrawColor(0,0,0);
        $pdf->SetTextColor(0,0,0);



        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(35,7,'Attuale:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(60,7,$psy->legal_situation_now);
        // $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Tipo Di Reato Commesso:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->legal_situation_crime_committed);
        $pdf->Ln(12);

        if(isset($psy->legal_situation_crime_committed_other)&& $psy->legal_situation_crime_committed_other!==""){
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(60,7,'Altro:');
            $pdf->SetFont('Arial','',12);
            $pdf->Cell(65,7,$psy->legal_situation_crime_committed_other);
            $pdf->Ln(12);
        };


        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Precendenti Carcerazioni:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->legal_situation_previous_incarceration);
        // $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Precendenti Carcerazioni:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(65,7,$psy->legal_situation_previous_incarceration_if);
        $pdf->Ln(12);

        if(isset($psy->legal_situation_previous_incarceration_if_prominence)&& $psy->legal_situation_previous_incarceration_if_prominence!==""){
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(60,7,'Indicare Qualsiasi Rilievo Pertinente:');
            $pdf->Ln(5);
            $pdf->SetFont('Arial','',12);
            $pdf->Cell(65,7,$psy->legal_situation_previous_incarceration_if_prominence);
            $pdf->Ln(12);
        };


        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Precendenti Penali:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->criminal_record);

        if(isset($psy->criminal_record_condemnation)&& $psy->criminal_record_condemnation!==""){
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(60,7,'Condanna Più Lunga:');
            $pdf->SetFont('Arial','',12);
            $pdf->Cell(65,7,$psy->criminal_record_condemnation);
        };
        $pdf->Ln(12);

        $pdf->SetDrawColor(128,0,0);
        $pdf->SetFillColor(0,78,155);
        $pdf->SetTextColor(255,255,255);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0,6,"Comportamenti Violenti",0,0,'L',true);
        $pdf->Ln(10);
        $pdf->SetFillColor(255,255,255);
        $pdf->SetDrawColor(0,0,0);
        $pdf->SetTextColor(0,0,0);
        

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Comportamenti Violenti');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->violent_behavior);
        // $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(70,7,'Precendenti aggressioni/violenze:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(65,7,$psy->violent_behavior_acts_aggression);
        $pdf->Ln(12);

        if(isset($psy->violent_behavior_acts_aggression_desc)&& $psy->violent_behavior_acts_aggression_desc!==""){
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(40,7,'Descrivere Violenze:');
            $pdf->Ln(5);
            $pdf->SetFont('Arial','',12);
            $pdf->multiCell(150,7,$psy->violent_behavior_acts_aggression_desc);
            $pdf->Ln(5);
        };


        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Precendenti Reati Violenti:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(65,7,$psy->violent_behavior_violent_crimes);
        $pdf->Ln(10);
        
        if(isset($psy->violent_behavior_crimes_type)&& $psy->violent_behavior_crimes_type!==""){
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(30,7,'Tipo:');
            $pdf->Ln(5);
            $pdf->SetFont('Arial','',12);
            $pdf->multiCell(150,7,$psy->violent_behavior_crimes_type);
            $pdf->Ln(5);
        };

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(93,7,'Atti Di Violenza Durante Carcerazione:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(65,7,$psy->violent_behavior_during_incarceration);
        $pdf->Ln(12);


        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(93,7,'Provvedimenti Disciplinari Per Aggressività:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(65,7,$psy->violent_behavior_aggression_proceeding);
        $pdf->Ln(10);
        
        if(isset($psy->violent_behavior_aggression_proceeding_desc)&& $psy->violent_behavior_aggression_proceeding_desc!==""){
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(30,7,'Descrivere:');
            $pdf->Ln(5);
            $pdf->SetFont('Arial','',12);
            $pdf->multiCell(150,7,$psy->violent_behavior_aggression_proceeding_desc);
            $pdf->Ln(2);
        };


        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(93,7,'Ultimo Atto Di Aggressione:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(65,7,$psy->violent_behavior_last_aggression);
        $pdf->Ln(7);
        
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(93,7,'Atti Di Aggressione/Rabbia Attuale:');
        $pdf->SetFont('Arial','',12);
        $pdf->multiCell(150,7,$psy->violent_aggression_now);
        $pdf->Ln(5);


        $pdf->AddPage();

        $pdf->SetDrawColor(128,0,0);
        $pdf->SetFillColor(0,78,155);
        $pdf->SetTextColor(255,255,255);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0,6,"Background Sociale",0,0,'L',true);
        $pdf->Ln(10);
        $pdf->SetFillColor(255,255,255);
        $pdf->SetDrawColor(0,0,0);
        $pdf->SetTextColor(0,0,0);
        


        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Stato Civile:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->background_social_marital_status);
        $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Stabilità Della Relazione:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->background_social_stability_relation);
        $pdf->Ln(6);

        if(isset($psy->background_social_relation_problem)&& $psy->background_social_relation_problem!==""){
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(60,7,'Problematiche:');
            $pdf->SetFont('Arial','',12);
            $pdf->Cell(100,7,$psy->background_social_relation_problem);
            $pdf->Ln(5);
        };
        $pdf->Ln(7);


        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Figli:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->background_social_sons);
        $pdf->Ln(6);

        if(isset($psy->background_social_sons_problem)&& $psy->background_social_sons_problem!==""){
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(60,7,'Problematiche:');
            $pdf->SetFont('Arial','',12);
            $pdf->multiCell(100,7,$psy->background_social_sons_problem);
            $pdf->Ln(5);
        };
        $pdf->Ln(7);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Situazione Abitativa:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->background_social_situation_house);
        $pdf->Ln(7);
        
        if(isset($psy->background_social_situation_house_other)&& $psy->background_social_situation_house_other!==""){
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(60,7,'Altro:');
            $pdf->SetFont('Arial','',12);
            $pdf->multiCell(100,7,$psy->background_social_situation_house_other);
            $pdf->Ln(5);
        };
        $pdf->Ln(7);


        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Supporto Familiare:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->background_social_support_family);
        $pdf->Ln(7);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Contatti Familiari:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->background_social_support_family_cont);
        $pdf->Ln(7);

        if(isset($psy->background_social_support_family_problem)&& $psy->background_social_support_family_problem!==""){
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(60,7,'Problematiche:');
            $pdf->SetFont('Arial','',12);
            $pdf->multiCell(100,7,$psy->background_social_support_family_problem);
            $pdf->Ln(5);
        };
        $pdf->Ln(7);



        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Supporto Sociale:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->background_social_support);
        $pdf->Ln(7);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Supporto Da:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->background_social_support_cont);
        $pdf->Ln(7);

        if(isset($psy->background_social_support_other)&& $psy->background_social_support_other!==""){
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(60,7,'Altro:');
            $pdf->SetFont('Arial','',12);
            $pdf->multiCell(100,7,$psy->background_social_support_other);
            $pdf->Ln(5);
        };
        $pdf->Ln(5);

        if(isset($psy->background_social_support_problem)&& $psy->background_social_support_problem!==""){
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(35,7,'Problematiche:');
            $pdf->SetFont('Arial','',12);
            $pdf->multiCell(100,7,$psy->background_social_support_problem);
            $pdf->Ln(5);
        };
        $pdf->Ln(2);


        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Scolarità:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->background_social_schooling);
        $pdf->Ln(12);


        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Supporto Lavorativo:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->background_social_work);
        $pdf->Ln(7);

        if(isset($psy->background_social_work_other)&& $psy->background_social_work_other!==""){
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(60,7,'Altro:');
            $pdf->SetFont('Arial','',12);
            $pdf->multiCell(100,7,$psy->background_social_work_other);
            $pdf->Ln(5);
        };
        $pdf->Ln(7);
    



        $pdf->AddPage();

        $pdf->SetDrawColor(128,0,0);
        $pdf->SetFillColor(0,78,155);
        $pdf->SetTextColor(255,255,255);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0,6,"Uso Di Sostanze",0,0,'L',true);
        $pdf->Ln(10);
        $pdf->SetFillColor(255,255,255);
        $pdf->SetDrawColor(0,0,0);
        $pdf->SetTextColor(0,0,0);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Uso Di Sostanze:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->substance_use);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Tabacco:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->substance_use_tabacco);
        $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Alcol:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->substance_use_alcol);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Marijuana:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->substance_use_marijuana);
        $pdf->Ln(12);




        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Eroina:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->substance_use_eroin);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Cocaina:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->substance_use_cocaine);
        $pdf->Ln(12);



        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Metanfetamine:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->substance_use_metamphetamin);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Altro:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->substance_use_other);
        $pdf->Ln(8);

        if(isset($psy->substance_use_description)&& $psy->substance_use_description!==""){
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(60,7,'Descrivere:');
            $pdf->Ln(5);
            $pdf->SetFont('Arial','',12);
            $pdf->multiCell(150,7,$psy->substance_use_description);
            $pdf->Ln(2);
        };

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Trattamento Metadonico:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->substance_use_current_methadone_treatment);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'Modalità Intravenosa:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->substance_use_intravenous_mode);
        $pdf->Ln(7);
        

        if(isset($psy->substance_use_current_methadon_list)&& $psy->substance_use_current_methadon_list!==""){
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(60,7,'Quando:');
            $pdf->SetFont('Arial','',12);
            $pdf->Cell(35,7,$psy->substance_use_current_methadon_list);
            $pdf->Ln(5);
        };
        $pdf->Ln(5);


        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(110,7,'Precedente Trattamento Per Abuso Di Sostanze:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->substance_use_substance_abuse);
        $pdf->Ln(7);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(110,7,'Trattamento:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->substance_use_substance_abuse_list);
        $pdf->Ln(7);
        if(isset($psy->substance_use_substance_abuse_other)&& $psy->substance_use_substance_abuse_other!==""){
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(60,7,'Altro:');
            $pdf->SetFont('Arial','',12);
            $pdf->multiCell(100,7,$psy->substance_use_substance_abuse_other);
        };
        $pdf->Ln(5);

        // $pdf->AddPage();

        $pdf->SetDrawColor(128,0,0);
        $pdf->SetFillColor(0,78,155);
        $pdf->SetTextColor(255,255,255);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0,6,"Trattamenti Psichiatrici",0,0,'L',true);
        $pdf->Ln(10);
        $pdf->SetFillColor(255,255,255);
        $pdf->SetDrawColor(0,0,0);
        $pdf->SetTextColor(0,0,0);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(127,7,'Trattamenti Psichiatrici:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->psyc_treatments);
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(127,7,'Valutazione Clinica:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->psyc_treatments_clinical_evaluation);
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(127,7,'Valutazione Clinica (Su Ordine Del Tribunale):');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->psyc_treatments_clinical_evaluation);
        $pdf->Ln(10);


        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(127,7,'Trattamento - In Istituzione Carceraria:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->psyc_treatments_in_prison);
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(127,7,'Trattamento - In Comunità:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->psyc_treatments_comunity);
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(127,7,'Trattamento - Ospedalizzato:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->psyc_treatments_hospital);
        $pdf->Cell(55,7,$psy->psyc_treatments_check_hospital);
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(127,7,'Trattamento - Su Ordine Del Tribunale:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->psyc_treatments_court_order);
        $pdf->Cell(55,7,$psy->psyc_treatments_check_order);
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(127,7,'Terapia Farmacologica:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->psyc_treatments_farmacy);
        $pdf->Cell(55,7,$psy->psyc_treatments_check_farmacy);
        $pdf->Ln(10);


        if(isset($psy->psyc_treatments_type)&& $psy->psyc_treatments_type!==""){
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(15,7,'Tipo:');
            $pdf->Ln(5);
            $pdf->SetFont('Arial','',12);
            $pdf->multiCell(150,7,$psy->psyc_treatments_type);
        };
        $pdf->Ln(2);




        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(66,7,'Precedenti Traumi Cerebrali:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(65,7,$psy->psyc_treatments_previous_trauma);
        $pdf->Ln(7);

        if(isset($psy->psyc_treatments_previous_trauma_desc)&& $psy->psyc_treatments_previous_trauma_desc!==""){
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(30,7,'Descrivere:');
            $pdf->Ln(5);
            $pdf->SetFont('Arial','',12);
            $pdf->multiCell(150,7,$psy->psyc_treatments_previous_trauma_desc);
            $pdf->Ln(2);
        };
        $pdf->Ln(2);


        $pdf->AddPage();

        $pdf->SetDrawColor(128,0,0);
        $pdf->SetFillColor(0,78,155);
        $pdf->SetTextColor(255,255,255);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0,6,"Rischio Suicidario Autolesionismo",0,0,'L',true);
        $pdf->Ln(10);
        $pdf->SetFillColor(255,255,255);
        $pdf->SetDrawColor(0,0,0);
        $pdf->SetTextColor(0,0,0);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(127,7,'Rischio Suicidario/Autolesionismo:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->suicidal_risk);
        $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(127,7,'Numero Di Tentativi:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->suicidal_risk_number_attempts);
        $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(127,7,"Tempo Dall'Ultimo Tentativo:");
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->suicidal_risk_time_attempts);
        $pdf->Ln(12);


        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(127,7,"Metodi Utilizzati:");
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->suicidal_risk_methods_weapon);
        $pdf->Ln(7);

        if(isset($psy->suicidal_risk_methods_weapon_other)&& $psy->suicidal_risk_methods_weapon_other!==""){
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(127,7,"Altri Metodi:");
            $pdf->SetFont('Arial','',12);
            $pdf->Cell(35,7,$psy->suicidal_risk_methods_weapon_other);
            $pdf->Ln(7);
        };
        $pdf->Ln(5);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(127,7,"Livello Dell'Intento Suicidario Attuale:");
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->suicidal_risk_level_ideation);
        $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(127,7,"Tentativi Di Suicidio Durante Il Periodo Detentivo:");
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->suicidal_risk_sucide_tentative);
        $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(127,7,"Numero Di Tentativi Durante La Detenzione:");
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->suicidal_risk_sucide_tentative_number);
        $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(127,7,"Tempo Dall'Ultimo Tentativo:");
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->suicidal_risk_tentative_time);
        $pdf->Ln(12);


        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(127,7,"Metodi Utilizzati:");
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->suicidal_risk_methods_two);
        $pdf->Ln(7);

        if(isset($psy->suicidal_risk_methods_two_other)&& $psy->suicidal_risk_methods_two_other!==""){
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(127,7,"Altri Metodi:");
            $pdf->SetFont('Arial','',12);
            $pdf->Cell(35,7,$psy->suicidal_risk_methods_two_other);
            $pdf->Ln(7);
        };
        $pdf->Ln(5);


        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(127,7,"Atti Di Autolesionismo:");
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->suicidal_risk_act_of_self_harm);
        $pdf->Ln(7);

        if(isset($psy->suicidal_risk_act_of_self_harm_desc)&& $psy->suicidal_risk_act_of_self_harm_desc!==""){
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(30,7,"Descrivere:");
            $pdf->Ln(6);
            $pdf->SetFont('Arial','',12);
            $pdf->multiCell(150,7,$psy->suicidal_risk_act_of_self_harm_desc);
            $pdf->Ln(7);
        };
        $pdf->Ln(5);



        $pdf->AddPage();

        $pdf->SetDrawColor(128,0,0);
        $pdf->SetFillColor(0,78,155);
        $pdf->SetTextColor(255,255,255);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0,6,"Condizioni Mentali",0,0,'L',true);
        $pdf->Ln(10);
        $pdf->SetFillColor(255,255,255);
        $pdf->SetDrawColor(0,0,0);
        $pdf->SetTextColor(0,0,0);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(70,7,'1. Preoccupazioni Somatiche');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->mental_conditions_somatic_concerns);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50,7,' 2. Ansia');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->mental_conditions_anxiety);
        $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(70,7,'3. Depressione');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->mental_conditions_depression);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50,7,'4. Suicidio');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->mental_conditions_suicide);
        $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(70,7,'5. Senso di colpa');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->mental_conditions_guilt);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50,7,'6. Ostilità');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->mental_conditions_hostility);
        $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(70,7,'7. Umore elevato');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->mental_conditions_elevated_mood);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50,7,' 8. Grandiosità');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->mental_conditions_grandeur);
        $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(70,7,'9. Sospettosità');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->mental_conditions_suspiciousness);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50,7,'10. Allucinazioni');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->mental_conditions_allucination);
        $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(70,7,'11. Pensiero Inusuale');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->mental_conditions_unusual_thought);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,'12. Comportamenti bizzarri');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->mental_conditions_bizarre_behavior);
        $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(70,7,' 13. Trascuratezza');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->mental_conditions_neglect);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50,7,'14. Disorientamento');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->mental_conditions_disorientation);
        $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(70,7,'15. Disorganizzazione');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->mental_conditions_disorganization);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50,7,'16. Inespressività');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->mental_conditions_blankness);
        $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(70,7,'17. Emotività Ridotta');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->mental_conditions_reduced_emotion);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60,7,' 18. Rallentamento Motorio');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->mental_conditions_motor_slowdown);
        $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(70,7,' 19. Tensione');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->mental_conditions_voltage);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50,7,'20. Non Collaborazione');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->mental_conditions_not_cooperation);
        $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(70,7,'21. Eccitazione');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->mental_conditions_excitement);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50,7,' 22. Distraibilità');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->mental_conditions_distractibility);
        $pdf->Ln(12);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(70,7,'23. Iperattività Motoria');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->mental_conditions_motor_hyperactivity);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50,7,' 24. Manierismi');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->mental_conditions_mannerisms);
        $pdf->Ln(12);



        $pdf->SetDrawColor(128,0,0);
        $pdf->SetFillColor(0,78,155);
        $pdf->SetTextColor(255,255,255);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0,6,"Gestione Del Rischio: Linee Guida",0,0,'L',true);
        $pdf->Ln(10);
        $pdf->SetFillColor(255,255,255);
        $pdf->SetDrawColor(0,0,0);
        $pdf->SetTextColor(0,0,0);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(90,7,'Problematiche Psicologico/Psichiatriche:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->psychological_problems);
        $pdf->Ln(7);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(90,7,'Problematiche:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->psychological_problems_list);
        $pdf->Ln(7);

        if(isset($psy->psychological_problems_other)&& $psy->psychological_problems_other!==""){
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(90,7,'Altro:');
            $pdf->SetFont('Arial','',12);
            $pdf->multiCell(150,7,$psy->psychological_problems_other);
            $pdf->Ln(7);
        };

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(90,7,'Segnalazioni:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->reports);
        $pdf->Ln(7);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(90,7,'Segnalazioni:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->reports_list);
        $pdf->Ln(7);

        if(isset($psy->reports_other)&& $psy->reports_other!==""){
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(90,7,'Altro:');
            $pdf->SetFont('Arial','',12);
            $pdf->multiCell(150,7,$psy->reports_other);
            $pdf->Ln(7);
        };
        $pdf->Ln(3);


        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(90,7,'Rischio Suicidario/Autolesionismo:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->suicidal_risk_self_harm);
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(90,7,'Rischio Di Violenza:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->risk_of_violence);
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(90,7,'Rischio Di Vittimizzazione:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->risk_of_victimization);
        $pdf->Ln(12);



        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(90,7,'Assegnazione Particolare:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->particular_assignment);
        $pdf->Ln(7);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(90,7,'Assegnazione:');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(35,7,$psy->particular_assignment_list);
        $pdf->Ln(7);

        if(isset($psy->particular_assignment_other)&& $psy->particular_assignment_other!==""){
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(90,7,'Altro:');
            $pdf->SetFont('Arial','',12);
            $pdf->multiCell(150,7,$psy->particular_assignment_other);
            $pdf->Ln(7);
        };


        $pdf->SetDrawColor(128,0,0);
        $pdf->SetFillColor(0,78,155);
        $pdf->SetTextColor(255,255,255);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0,6,"Commenti/Chiarificazioni",0,0,'L',true);
        $pdf->Ln(10);
        $pdf->SetFillColor(255,255,255);
        $pdf->SetDrawColor(0,0,0);
        $pdf->SetTextColor(0,0,0);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50,7,'Commenti/Chiarificazioni:');
        $pdf->Ln(6);
        $pdf->SetFont('Arial','',12);
        $pdf->multiCell(150,7,$psy->comment_clarifications);
        $pdf->Ln(10);

        $pdf->Output("stampa.pdf", "I");
        exit();
    }

    



























































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

            // scheda psichiatrica
            $PsyRehabilitationPsychiatricCard=null;
            $allPsyRehabilitationPsychiatricCards=null;

            $PsyRating=null;
            $allPsyRatings=null;

            $PsyUocDepartment=null;
            $allPsyUocDepartments=null;

            $PsySocialFolder=null;
            $allPsySocialFolders=null;
            // ------------------------

            $PsyMembershipCard=null;
            $allPsyMembershipCards=null;

            $PsySurvey=null;
            $allPsySurveys=null;

            $PsyJsat=null;
            $allPsyJsats=null;




       
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


            if (PsySurvey::where('psy_card_id', '=', $psyCard->id)->exists()) {
                $query=PsySurvey::where('psy_card_id', '=', $psyCard->id)->orderBy('ps_date', 'desc');
                $PsySurvey=$query->first();
                $allPsySurveys=PsySurvey::where('psy_card_id', '=', $psyCard->id)->orderBy('ps_date', 'desc')->get();
            }
            return [ "errorNumber"=>0,"message"=>"OK","psyCard" => $psyCard,"userIstanceId" => $request['id'], "PsySurvey"=>$PsySurvey,"allPsySurveys" => $allPsySurveys];


            if (PsyJsat::where('psy_card_id', '=', $psyCard->id)->exists()) {
                $query=PsyJsat::where('psy_card_id', '=', $psyCard->id)->orderBy('pj_date', 'desc');
                $PsyJsat=$query->first();
                $allPsyJsats=PsyJsat::where('psy_card_id', '=', $psyCard->id)->orderBy('pj_date', 'desc')->get();
            }
            return [ "errorNumber"=>0,"message"=>"OK","psyCard" => $psyCard,"userIstanceId" => $request['id'], "PsyJsat"=>$PsyJsat,"allPsyJsats" => $allPsyJsats];
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

    public function getCurrentSurveyByPsyId(Request $request){
        if (PsySurvey::where('psy_card_id', '=', $request['id'])->exists()) {
            $query=PsySurvey::where('psy_card_id', '=', $request['id'])->orderBy('ps_date', 'desc');
            $PsySurvey=$query->first();
            return [ "errorNumber"=>0,"message"=>"OK","CurrentSurvey" => $PsySurvey,"PsyId" => $request['id']];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }  
    }

    public function getCurrentJsatByPsyId(Request $request){
        if (PsyJsat::where('psy_card_id', '=', $request['id'])->exists()) {
            $query=PsyJsat::where('psy_card_id', '=', $request['id'])->orderBy('pj_date', 'desc');
            $PsyJsat=$query->first();
            return [ "errorNumber"=>0,"message"=>"OK","CurrentSurvey" => $PsyJsat,"PsyId" => $request['id']];
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

    // PsyRehabilitationPsychiatricCard
    public function getRehabilitationPsychiatricCardsByPsyId(Request $request){
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

    public function getSurveysByPsyId(Request $request){
        if (PsySurvey::where('psy_card_id', '=', $request['id'])->exists()) {
            $query=PsySurvey::where('psy_card_id', '=', $request['id']);
            $PsySurvey=$query->get();
            return [ "errorNumber"=>0,"message"=>"OK","PsySurvey" => $PsySurvey,"PsyId" => $request['id']];
        }else{
            return ['errorNumber'=>7,'descrizione'=>'no records found'];
        }      
    }


    public function getJsatsByPsyId(Request $request){
        if (PsyJsat::where('psy_card_id', '=', $request['id'])->exists()) {
            $query=PsyJsat::where('psy_card_id', '=', $request['id']);
            $PsyJsat=$query->get();
            return [ "errorNumber"=>0,"message"=>"OK","PsyJsat" => $PsyJsat,"PsyId" => $request['id']];
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
                            case 'ps':
                                $_psy = $this->addPsyCard($request);
                                if($_psy){
                                    $_psyId=$_psy->id;
                                }
                                else{
                                    return ["errorNumber"=>1,"message"=>"Dati mancanti o non validi contattare l'amministratore di sistema"];
                                }
                                break;
                            case 'pj':
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
                                }
                                if($request->has('psyId')){
                                    if (PsyMentalHealthDepartment::where('psy_card_id', '=', $request->input('psyId'))->exists()) {
                                        $_psyId=$request->input('psyId');
                                    }else{
                                        return ["errorNumber"=>2,"message"=>"Salvare Prima la scheda tossicologica"];
                                    }
                                }
                                if($request->has('psyId')){
                                    if (psyUocDepartment::where('psy_card_id', '=', $request->input('psyId'))->exists()) {
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
                    case 'ps':
                        return $this->addSurvey($request,$_psyId);
                        break;
                    case 'pj':
                        return $this->addJsat($request,$_psyId);
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
            return ["errorNumber"=>0,"message"=>"ok","mh"=>$_psychologicalInterview];

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
            return ["errorNumber"=>0,"message"=>"ok","rp"=>$_psyRehab];

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

        if($request->has('PsyRating')){
            $psyCardArr = json_decode($request->input('PsyRating'), true);
            if(array_key_exists('somaticConcern',$psyCardArr)){
                $_psychiatricScale->somatic_concern=$psyCardArr['somaticConcern'];
            }
            if(array_key_exists('anxiety',$psyCardArr)){
                $_psychiatricScale->anxiety=$psyCardArr['anxiety'];
            }
            if(array_key_exists('depression',$psyCardArr)){
                $_psychiatricScale->depression=$psyCardArr['depression'];
            }
            if(array_key_exists('riskOfSuicide',$psyCardArr)){
                $_psychiatricScale->risk_of_suicide=$psyCardArr['riskOfSuicide'];
            }
            if(array_key_exists('feelingOfGuilt',$psyCardArr)){
                $_psychiatricScale->feeling_of_guilt=$psyCardArr['feelingOfGuilt'];
            }
            if(array_key_exists('hostility',$psyCardArr)){
                $_psychiatricScale->hostility=$psyCardArr['hostility'];
            }
            if(array_key_exists('moodElevation',$psyCardArr)){
                $_psychiatricScale->mood_elevation=$psyCardArr['moodElevation'];
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
            if(array_key_exists('unusualContentOfThought',$psyCardArr)){
                $_psychiatricScale->unusual_content_of_thought=$psyCardArr['unusualContentOfThought'];
            }
            if(array_key_exists('bizarreBehavior',$psyCardArr)){
                $_psychiatricScale->bizarre_behavior=$psyCardArr['bizarreBehavior'];
            }
            if(array_key_exists('neglectOfSelfCare',$psyCardArr)){
                $_psychiatricScale->neglect_of_self_care=$psyCardArr['neglectOfSelfCare'];
            }
            if(array_key_exists('disorientation',$psyCardArr)){
                $_psychiatricScale->disorientation=$psyCardArr['disorientation'];
            }
            if(array_key_exists('conceptualDisorganization',$psyCardArr)){
                $_psychiatricScale->conceptual_disorganization=$psyCardArr['conceptualDisorganization'];
            }
            if(array_key_exists('emotionalFlattening',$psyCardArr)){
                $_psychiatricScale->emotional_flattening=$psyCardArr['emotionalFlattening'];
            }
            if(array_key_exists('emotionalIsolation',$psyCardArr)){
                $_psychiatricScale->emotional_isolation=$psyCardArr['emotionalIsolation'];
            }
            if(array_key_exists('suicidalIdeation',$psyCardArr)){
                $_psychiatricScale->suicidal_ideation=$psyCardArr['suicidalIdeation'];
            }
            if(array_key_exists('motorSlowdown',$psyCardArr)){
                $_psychiatricScale->motor_slowdown=$psyCardArr['motorSlowdown'];
            }
            if(array_key_exists('motorTension',$psyCardArr)){
                $_psychiatricScale->motor_tension=$psyCardArr['motorTension'];
            }
            if(array_key_exists('lackOfCooperation',$psyCardArr)){
                $_psychiatricScale->lack_of_cooperation=$psyCardArr['lackOfCooperation'];
            }
            if(array_key_exists('excitement',$psyCardArr)){
                $_psychiatricScale->excitement=$psyCardArr['excitement'];
            }
            if(array_key_exists('distractibility',$psyCardArr)){
                $_psychiatricScale->distractibility=$psyCardArr['distractibility'];
            }
            if(array_key_exists('motorHyperactivity',$psyCardArr)){
                $_psychiatricScale->motor_hyperactivity=$psyCardArr['motorHyperactivity'];
            }
            if(array_key_exists('mannerismAndPosture',$psyCardArr)){
                $_psychiatricScale->mannerism_and_posture=$psyCardArr['mannerismAndPosture'];
            }
            if(array_key_exists('totalScoreRating',$psyCardArr)){
                $_psychiatricScale->total_score_rating=$psyCardArr['totalScoreRating'];
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

        if($request->has('PsySocialFolder')){
            $psyCardArr = json_decode($request->input('PsySocialFolder'), true);
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
            if(array_key_exists('socialHealthSituationDisabilityText',$psyCardArr)){
                $_psyFold->social_health_situation_disability_text=$psyCardArr['socialHealthSituationDisabilityText'];   
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
            if(array_key_exists('sons',$psyCardArr)){
                $_psyMemb->sons=$psyCardArr['sons'];
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

            if(array_key_exists('previousTreatmentForProblem',$psyCardArr)){
                $_psyMemb->previous_treatment_for_problem=$psyCardArr['previousTreatmentForProblem'];
            }
            if(array_key_exists('previousTreatmentFarmacology',$psyCardArr)){
                $_psyMemb->previous_treatment_farmacology=$psyCardArr['previousTreatmentFarmacology'];
            }
            if(array_key_exists('previousDiagnosesOfMentalDisorder',$psyCardArr)){
                $_psyMemb->previous_diagnoses_of_mental_disorder=$psyCardArr['previousDiagnosesOfMentalDisorder'];
            }
            if(array_key_exists('previousDiagnosisOfDrugAbuse',$psyCardArr)){
                $_psyMemb->previous_diagnosis_of_drug_abuse=$psyCardArr['previousDiagnosisOfDrugAbuse'];
            }
            if(array_key_exists('previousHospitalizationSpdc',$psyCardArr)){
                $_psyMemb->previous_hospitalization_spdc=$psyCardArr['previousHospitalizationSpdc'];
            }
            if(array_key_exists('previousHospitalizationEmergency',$psyCardArr)){
                $_psyMemb->previous_hospitalization_emergency=$psyCardArr['previousHospitalizationEmergency'];
            }
            if(array_key_exists('pathologicalAttemptedSuicide',$psyCardArr)){
                $_psyMemb->pathological_attempted_suicide=$psyCardArr['pathologicalAttemptedSuicide'];
            }
            if(array_key_exists('pathologicalDesperate',$psyCardArr)){
                $_psyMemb->pathological_desperate=$psyCardArr['pathologicalDesperate'];
            }
            if(array_key_exists('pathologicalAnxious',$psyCardArr)){
                $_psyMemb->pathological_anxious=$psyCardArr['pathologicalAnxious'];
            }
            if(array_key_exists('pathologicalActive',$psyCardArr)){
                $_psyMemb->pathological_active=$psyCardArr['pathologicalActive'];
            }
            if(array_key_exists('pathologicalStrangeThought',$psyCardArr)){
                $_psyMemb->pathological_strange_thought=$psyCardArr['pathologicalStrangeThought'];
            }
            if(array_key_exists('pathologicalSleepless',$psyCardArr)){
                $_psyMemb->pathological_sleepless=$psyCardArr['pathologicalSleepless'];
            }
            if(array_key_exists('pathologicalNoFamily',$psyCardArr)){
                $_psyMemb->pathological_no_family=$psyCardArr['pathologicalNoFamily'];
            }
            if(array_key_exists('pathologicalThoughtSuicide',$psyCardArr)){
                $_psyMemb->pathological_thought_suicide=$psyCardArr['pathologicalThoughtSuicide'];
            }
            if(array_key_exists('pathologicalAlcol',$psyCardArr)){
                $_psyMemb->pathological_alcol=$psyCardArr['pathologicalAlcol'];
            }
            if(array_key_exists('pathologicalAddictiveBehavior',$psyCardArr)){
                $_psyMemb->pathological_addictive_behavior=$psyCardArr['pathologicalAddictiveBehavior'];
            }
            if(array_key_exists('pathologicalClaimsInjuries',$psyCardArr)){
                $_psyMemb->pathological_claims_injuries=$psyCardArr['pathologicalClaimsInjuries'];
            }
            if(array_key_exists('pathologicalShameLevel',$psyCardArr)){
                $_psyMemb->pathological_shame_level=$psyCardArr['pathologicalShameLevel'];
            }


            if(array_key_exists('accessToTheInterview',$psyCardArr)){
                $_psyMemb->access_to_the_interview=$psyCardArr['accessToTheInterview'];
            }
            if(array_key_exists('trafficWarden',$psyCardArr)){
                $_psyMemb->traffic_warden=$psyCardArr['trafficWarden'];
            }
            if(array_key_exists('lucid',$psyCardArr)){
                $_psyMemb->lucid=$psyCardArr['lucid'];
            }
            if(array_key_exists('orientatedInTheThreeParameter',$psyCardArr)){
                $_psyMemb->orientated_in_the_three_parameter=$psyCardArr['orientatedInTheThreeParameter'];
            }
            if(array_key_exists('umor',$psyCardArr)){
                $_psyMemb->umor=$psyCardArr['umor'];
            }
            if(array_key_exists('anxiety',$psyCardArr)){
                $_psyMemb->anxiety=$psyCardArr['anxiety'];
            }
            if(array_key_exists('alteredPerception',$psyCardArr)){
                $_psyMemb->altered_perception=$psyCardArr['alteredPerception'];
            }
            if(array_key_exists('appetite',$psyCardArr)){
                $_psyMemb->appetite=$psyCardArr['appetite'];
            }
            if(array_key_exists('alteredFormThought',$psyCardArr)){
                $_psyMemb->altered_form_thought=$psyCardArr['alteredFormThought'];
            }
            if(array_key_exists('sleepWakeRhythm',$psyCardArr)){
                $_psyMemb->sleep_wake_rhythm=$psyCardArr['sleepWakeRhythm'];
            }
            if(array_key_exists('futureProject',$psyCardArr)){
                $_psyMemb->future_project=$psyCardArr['futureProject'];
            }


            if(array_key_exists('accessToTheInterviewNote',$psyCardArr)){
                $_psyMemb->access_to_the_interview_note=$psyCardArr['accessToTheInterviewNote'];
            }
            if(array_key_exists('trafficWardenNote',$psyCardArr)){
                $_psyMemb->traffic_warden_note=$psyCardArr['trafficWardenNote'];
            }
            if(array_key_exists('lucidNote',$psyCardArr)){
                $_psyMemb->lucid_note=$psyCardArr['lucidNote'];
            }
            if(array_key_exists('orientatedInTheThreeParameterNote',$psyCardArr)){
                $_psyMemb->orientated_in_the_three_parameter_note=$psyCardArr['orientatedInTheThreeParameterNote'];
            }
            if(array_key_exists('umorNote',$psyCardArr)){
                $_psyMemb->umor_note=$psyCardArr['umorNote'];
            }
            if(array_key_exists('anxietyNote',$psyCardArr)){
                $_psyMemb->anxiety_note=$psyCardArr['anxietyNote'];
            }
            if(array_key_exists('alteredPerceptionNote',$psyCardArr)){
                $_psyMemb->altered_perception_note=$psyCardArr['alteredPerceptionNote'];
            }
            if(array_key_exists('appetiteNote',$psyCardArr)){
                $_psyMemb->appetite_note=$psyCardArr['appetiteNote'];
            }
            if(array_key_exists('alteredFormThoughtNote',$psyCardArr)){
                $_psyMemb->altered_form_thought_note=$psyCardArr['alteredFormThoughtNote'];
            }
            if(array_key_exists('sleepWakeRhythmNote',$psyCardArr)){
                $_psyMemb->sleep_wake_rhythm_note=$psyCardArr['sleepWakeRhythmNote'];
            }
            if(array_key_exists('futureProjectNote',$psyCardArr)){
                $_psyMemb->future_project_note=$psyCardArr['futureProjectNote'];
            }


            if(array_key_exists('thoughtHeWasDead',$psyCardArr)){
                $_psyMemb->thought_he_was_dead=$psyCardArr['thoughtHeWasDead'];
            }
            if(array_key_exists('wantedToGetHurt',$psyCardArr)){
                $_psyMemb->wanted_to_get_hurt=$psyCardArr['wantedToGetHurt'];
            }
            if(array_key_exists('thoughtSuicide',$psyCardArr)){
                $_psyMemb->thought_suicide=$psyCardArr['thoughtSuicide'];
            }
            if(array_key_exists('thoughtHowSuicide',$psyCardArr)){
                $_psyMemb->thought_how_suicide=$psyCardArr['thoughtHowSuicide'];
            }
            if(array_key_exists('attemptedSuicide',$psyCardArr)){
                $_psyMemb->attempted_suicide=$psyCardArr['attemptedSuicide'];
            }
            if(array_key_exists('neverTryAttemptedSuicide',$psyCardArr)){
                $_psyMemb->never_try_attempted_suicide=$psyCardArr['neverTryAttemptedSuicide'];
            }

            if(array_key_exists('gravityIdeationSuicide',$psyCardArr)){
                $_psyMemb->gravity_ideation_suicide=$psyCardArr['gravityIdeationSuicide'];
            }




            if(array_key_exists('checkSpdcHospitalizations',$psyCardArr)){
                $_psyMemb->check_spdc_hospitalizations=$psyCardArr['checkSpdcHospitalizations'];
            }
            if(array_key_exists('checkDeclareSuicide',$psyCardArr)){
                $_psyMemb->check_declare_suicide=$psyCardArr['checkDeclareSuicide'];
            }
            if(array_key_exists('checkThougthSuicide',$psyCardArr)){
                $_psyMemb->check_thougth_suicide=$psyCardArr['checkThougthSuicide'];
            }
            if(array_key_exists('checkUnusualLevelOfShame',$psyCardArr)){
                $_psyMemb->check_unusual_level_of_shame=$psyCardArr['checkUnusualLevelOfShame'];
            }
            if(array_key_exists('checkConfusionalState',$psyCardArr)){
                $_psyMemb->check_confusional_state=$psyCardArr['checkConfusionalState'];
            }

            if(array_key_exists('checkPsychomotorAgitation',$psyCardArr)){
                $_psyMemb->check_psychomotor_agitation=$psyCardArr['checkPsychomotorAgitation'];
            }
            if(array_key_exists('checkBizarreBehavior',$psyCardArr)){
                $_psyMemb->check_bizarre_behavior=$psyCardArr['checkBizarreBehavior'];
            }
            if(array_key_exists('checkVerbalCommunication',$psyCardArr)){
                $_psyMemb->check_verbal_communication=$psyCardArr['checkVerbalCommunication'];
            }
            if(array_key_exists('checkLevelMini',$psyCardArr)){
                $_psyMemb->check_level_mini=$psyCardArr['checkLevelMini'];
            }
            if(array_key_exists('checkGeneralWellBeing',$psyCardArr)){
                $_psyMemb->check_general_well_being=$psyCardArr['checkGeneralWellBeing'];
            }

            if(array_key_exists('checkVainFormViolence',$psyCardArr)){
                $_psyMemb->check_vain_form_violence=$psyCardArr['checkVainFormViolence'];
            }
            if(array_key_exists('checkComeFromForcedIsolation',$psyCardArr)){
                $_psyMemb->check_come_from_forced_isolation=$psyCardArr['checkComeFromForcedIsolation'];
            }
            if(array_key_exists('checkIsolationSocialNetwork',$psyCardArr)){
                $_psyMemb->check_isolation_social_network=$psyCardArr['checkIsolationSocialNetwork'];
            }
            if(array_key_exists('checkUncertaintyAboutFuture',$psyCardArr)){
                $_psyMemb->check_uncertainty_about_future=$psyCardArr['checkUncertaintyAboutFuture'];
            }
            if(array_key_exists('checkConclusion',$psyCardArr)){
                $_psyMemb->check_conclusion=$psyCardArr['checkConclusion'];
            }

            if(array_key_exists('riskAssessmentConclusions',$psyCardArr)){
                $_psyMemb->risk_assessment_conclusions=$psyCardArr['riskAssessmentConclusions'];
            }


            if(array_key_exists('requestActivationOfMeasures',$psyCardArr)){
                $_psyMemb->request_activation_of_measures=$psyCardArr['requestActivationOfMeasures'];
            }

            if(array_key_exists('requestActivationNormalSurveillance',$psyCardArr)){
                $_psyMemb->request_activation_normal_surveillance=$psyCardArr['requestActivationNormalSurveillance'];
            }
            if(array_key_exists('requestActivationMultipleRoom',$psyCardArr)){
                $_psyMemb->request_activation_multiple_room=$psyCardArr['requestActivationMultipleRoom'];
            }
            if(array_key_exists('requestActivationBigSurveillance',$psyCardArr)){
                $_psyMemb->request_activation_big_surveillance=$psyCardArr['requestActivationBigSurveillance'];
            }
            if(array_key_exists('requestActivationVisualSurveillance',$psyCardArr)){
                $_psyMemb->request_activation_visual_surveillance=$psyCardArr['requestActivationVisualSurveillance'];
            }




            if(array_key_exists('firstMedicalHistoryVisit',$psyCardArr)){
                $_psyMemb->first_medical_history_visit=$psyCardArr['firstMedicalHistoryVisit'];
            }
            if(array_key_exists('firstStatus',$psyCardArr)){
                $_psyMemb->first_status=$psyCardArr['firstStatus'];
            }
            if(array_key_exists('firstTerapy',$psyCardArr)){
                $_psyMemb->first_terapy=$psyCardArr['firstTerapy'];
            }
            if(array_key_exists('firstOrientation',$psyCardArr)){
                $_psyMemb->first_orientation=$psyCardArr['firstOrientation'];
            }

            // if(array_key_exists('interventionConclusions',$psyCardArr)){
            //     $_psyMemb->intervention_conclusion=$psyCardArr['interventionConclusion'];
            // }
            if(array_key_exists('interventionPlanAdvice',$psyCardArr)){
                $_psyMemb->intervention_plan_advice=$psyCardArr['interventionPlanAdvice'];
            }
            // if(array_key_exists('interventionPlanTakingIntoCare',$psyCardArr)){
            //     $_psyMemb->intervention_plan_taking_into_care=$psyCardArr['interventionPlanTakingIntoCare'];
            // }
            // if(array_key_exists('interventionPlanIntegratedHandling',$psyCardArr)){
            //     $_psyMemb->intervention_plan_integrated_handling=$psyCardArr['interventionPlanIntegratedHandling'];
            // }


            if(array_key_exists('specificPrescriptionSuggestions',$psyCardArr)){
                $_psyMemb->specific_prescription_suggestions=$psyCardArr['specificPrescriptionSuggestions'];
            } 


            if(array_key_exists('psychiatricVisitStatus',$psyCardArr)){
                $_psyMemb->psychiatric_visit_status=$psyCardArr['psychiatricVisitStatus'];
            }
            if(array_key_exists('psychiatricVisitTerapy',$psyCardArr)){
                $_psyMemb->psychiatric_visit_terapy=$psyCardArr['psychiatricVisitTerapy'];
            }
            if(array_key_exists('psychiatricVisitOrientation',$psyCardArr)){
                $_psyMemb->psychiatric_visit_orientation=$psyCardArr['psychiatricVisitOrientation'];
            }

            // if(array_key_exists('psychiatricVisitPlanConclusions',$psyCardArr)){
            //     $_psyMemb->psychiatric_visit_plan_conclusions=$psyCardArr['psychiatricVisitPlanConclusions'];
            // }
            if(array_key_exists('psychiatricInterventionPlanAdvice',$psyCardArr)){
                $_psyMemb->psychiatric_intervention_plan_advice=$psyCardArr['psychiatricInterventionPlanAdvice'];
            }
            if(array_key_exists('psychiatricPlanTakingIntoCare',$psyCardArr)){
                $_psyMemb->psychiatric_plan_taking_into_care=$psyCardArr['psychiatricPlanTakingIntoCare'];
            }
            if(array_key_exists('psychiatricPlanIntegratedHandling',$psyCardArr)){
                $_psyMemb->psychiatric_plan_integrated_handling=$psyCardArr['psychiatricPlanIntegratedHandling'];
            }

            if(array_key_exists('psychiatricVisitPrescriptionSuggestions',$psyCardArr)){
                $_psyMemb->psychiatric_visit_prescription_suggestions=$psyCardArr['psychiatricVisitPrescriptionSuggestions'];
            } 
        }
        $_psyMemb->save();

        if($_psyMemb){
            return ["errorNumber"=>0,"message"=>"ok","mc"=>$_psyMemb];

        }else{
            return ["errorNumber"=>3,"message"=>"Scheda non salvata contattare l'amministratore di sistema"];
        }
    }








    public function addSurvey(Request $request,$psyId){
        $userId=$request->input("userId");
        $_psySurv = new PsySurvey;
        $now=date("Y-m-d H:i:s");
        $_psySurv->psy_card_id=$psyId;
        if($request->has('doctorId')){
            $_psySurv->id_doctor=$request->input('doctorId');
        }
        if($request->has('doctorName')){
            $_psySurv->doctor_name=$request->input('doctorName');
        }
        if($request->has('doctorUserName')){
            $_psySurv->doctor_lastname=$request->input('doctorUserName');
        }
        $_psySurv->ps_date=$now;

        if($request->has('PsySurvey')){
            $psyCardArr = json_decode($request->input('PsySurvey'), true);
            if(array_key_exists('surveyHeardAlone',$psyCardArr)){
                $_psySurv->survey_heard_alone=$psyCardArr['surveyHeardAlone'];
            }
            if(array_key_exists('surveyHeardAnxious',$psyCardArr)){
                $_psySurv->survey_heard_anxious=$psyCardArr['surveyHeardAnxious'];
            }
            if(array_key_exists('surveySupport',$psyCardArr)){
                $_psySurv->survey_support=$psyCardArr['surveySupport'];
            }
            if(array_key_exists('surveyOkayWithMyself',$psyCardArr)){
                $_psySurv->survey_okay_with_myself=$psyCardArr['surveyOkayWithMyself'];
            }
            if(array_key_exists('surveyDevoidOfEnergy',$psyCardArr)){
                $_psySurv->survey_devoid_of_energy=$psyCardArr['surveyDevoidOfEnergy'];
            }
            if(array_key_exists('surveyViolentTowardsOthers',$psyCardArr)){
                $_psySurv->survey_violent_towards_others=$psyCardArr['surveyViolentTowardsOthers'];
            }
            if(array_key_exists('surveyAbleToAdapt',$psyCardArr)){
                $_psySurv->survey_able_to_adapt=$psyCardArr['surveyAbleToAdapt'];
            }

            if(array_key_exists('surveyDisturbed',$psyCardArr)){
                $_psySurv->survey_disturbed=$psyCardArr['surveyDisturbed'];
            }
            if(array_key_exists('surveyHurtMe',$psyCardArr)){
                $_psySurv->survey_hurt_me=$psyCardArr['surveyHurtMe'];
            }
            if(array_key_exists('surveyNotForceToSpeak',$psyCardArr)){
                $_psySurv->survey_not_force_to_speak=$psyCardArr['surveyNotForceToSpeak'];
            }
             if(array_key_exists('surveyTensionPrevented',$psyCardArr)){
                $_psySurv->survey_tension_prevented=$psyCardArr['surveyTensionPrevented'];
            }
            if(array_key_exists('surveyHappy',$psyCardArr)){
                $_psySurv->survey_happy=$psyCardArr['surveyHappy'];
            }
            if(array_key_exists('surveyDisturbedByThoughts',$psyCardArr)){
                $_psySurv->survey_disturbed_by_thoughts=$psyCardArr['surveyDisturbedByThoughts'];
            }
            if(array_key_exists('surveyCry',$psyCardArr)){
                $_psySurv->survey_cry=$psyCardArr['surveyCry'];
            }
            if(array_key_exists('surveyFeltPanic',$psyCardArr)){
                $_psySurv->survey_felt_panic=$psyCardArr['surveyFeltPanic'];
            }
            if(array_key_exists('surveyPlannedToSuicide',$psyCardArr)){
                $_psySurv->survey_planned_to_suicide=$psyCardArr['surveyPlannedToSuicide'];
            }
            if(array_key_exists('surveyFeltOverwhelmed',$psyCardArr)){
                $_psySurv->survey_felt_overwhelmed=$psyCardArr['surveyFeltOverwhelmed'];
            }
            if(array_key_exists('surveyDifficultyFallingAsleep',$psyCardArr)){
                $_psySurv->survey_difficulty_falling_asleep=$psyCardArr['surveyDifficultyFallingAsleep'];
            }
            if(array_key_exists('surveyFeltAffection',$psyCardArr)){
                $_psySurv->survey_felt_affection=$psyCardArr['surveyFeltAffection'];
            }

            if(array_key_exists('surveyImpossibleAsideProblems',$psyCardArr)){
                $_psySurv->survey_impossible_aside_problems=$psyCardArr['surveyImpossibleAsideProblems'];
            }
            if(array_key_exists('surveyAbleToDoThings',$psyCardArr)){
                $_psySurv->survey_able_to_do_things=$psyCardArr['surveyAbleToDoThings'];
            }
            if(array_key_exists('surveyThreatenedSomeone',$psyCardArr)){
                $_psySurv->survey_threatened_someone=$psyCardArr['surveyThreatenedSomeone'];
            }
            if(array_key_exists('surveyFeltHeartbroken',$psyCardArr)){
                $_psySurv->survey_felt_heartbroken=$psyCardArr['surveyFeltHeartbroken'];
            }
            if(array_key_exists('surveyThoughtBetterToDie',$psyCardArr)){
                $_psySurv->survey_thought_better_to_die=$psyCardArr['surveyThoughtBetterToDie'];
            }
            if(array_key_exists('surveyFeltCritical',$psyCardArr)){
                $_psySurv->survey_felt_critical=$psyCardArr['surveyFeltCritical'];
            }
            if(array_key_exists('surveyThoughtHadNoFriends',$psyCardArr)){
                $_psySurv->survey_thought_had_no_friends=$psyCardArr['surveyThoughtHadNoFriends'];
            }
            if(array_key_exists('surveyFeltUnhappy',$psyCardArr)){
                $_psySurv->survey_felt_unhappy=$psyCardArr['surveyFeltUnhappy'];
            }
            if(array_key_exists('surveyTroubledByImages',$psyCardArr)){
                $_psySurv->survey_troubled_by_images=$psyCardArr['surveyTroubledByImages'];
            }
            if(array_key_exists('surveyFeltIrritated',$psyCardArr)){
                $_psySurv->survey_felt_irritated=$psyCardArr['surveyFeltIrritated'];
            }


            if(array_key_exists('surveyThoughtMyFault',$psyCardArr)){
                $_psySurv->survey_thought_my_fault=$psyCardArr['surveyThoughtMyFault'];
            }
            if(array_key_exists('surveyOptimisticAboutTheFuture',$psyCardArr)){
                $_psySurv->survey_optimistic_about_the_future=$psyCardArr['surveyOptimisticAboutTheFuture'];
            }
            if(array_key_exists('surveyGotWhatWanted',$psyCardArr)){
                $_psySurv->survey_got_what_wanted=$psyCardArr['surveyGotWhatWanted'];
            }
            if(array_key_exists('surveyFeltHumiliated',$psyCardArr)){
                $_psySurv->survey_felt_humiliated=$psyCardArr['surveyFeltHumiliated'];
            }
            if(array_key_exists('surveyHurtMyself',$psyCardArr)){
                $_psySurv->survey_hurt_myself=$psyCardArr['surveyHurtMyself'];
            }
        }
        $_psySurv->save();

        if($_psySurv){
            return ["errorNumber"=>0,"message"=>"ok","ud"=>$_psySurv];

        }else{
            return ["errorNumber"=>3,"message"=>"Scheda non salvata contattare l'amministratore di sistema"];
        }
    }


    public function addJsat(Request $request,$psyId){
        $userId=$request->input("userId");
        $_psyJsa = new PsyJsat;
        $now=date("Y-m-d H:i:s");
        $_psyJsa->psy_card_id=$psyId;
        if($request->has('doctorId')){
            $_psyJsa->id_doctor=$request->input('doctorId');
        }
        if($request->has('doctorName')){
            $_psyJsa->doctor_name=$request->input('doctorName');
        }
        if($request->has('doctorUserName')){
            $_psyJsa->doctor_lastname=$request->input('doctorUserName');
        }
        $_psyJsa->pj_date=$now;

        if($request->has('psyCardPj')){
            $psyCardArr = json_decode($request->input('psyCardPj'), true);
            if(array_key_exists('entryDate',$psyCardArr)){
                $_psyJsa->entry_date=$psyCardArr['entryDate'];
            }
            if(array_key_exists('valutationDate',$psyCardArr)){
                $_psyJsa->valutation_date=$psyCardArr['valutationDate'];
            }
            
            if(array_key_exists('informationAge',$psyCardArr)){
                $_psyJsa->information_age=$psyCardArr['informationAge'];
            }
            if(array_key_exists('informationLanguage',$psyCardArr)){
                $_psyJsa->information_language=$psyCardArr['informationLanguage'];
            }
            if(array_key_exists('informationLevelLanguage',$psyCardArr)){
                $_psyJsa->information_level_language=$psyCardArr['informationLevelLanguage'];
            }
            if(array_key_exists('informationNativeLanguage',$psyCardArr)){
                $_psyJsa->information_native_language=$psyCardArr['informationNativeLanguage'];
            }
            if(array_key_exists('informationBackground',$psyCardArr)){
                $_psyJsa->information_background=$psyCardArr['informationBackground'];
            }
            if(array_key_exists('informationBackgroundOther',$psyCardArr)){
                $_psyJsa->information_background_other=$psyCardArr['informationBackgroundOther'];
            }
            if(array_key_exists('informationBackgroundText',$psyCardArr)){
                $_psyJsa->information_background_text=$psyCardArr['informationBackgroundText'];
            }
            if(array_key_exists('legalSituationNow',$psyCardArr)){
                $_psyJsa->legal_situation_now=$psyCardArr['legalSituationNow'];
            }
            if(array_key_exists('legalSituationCrimeCommitted',$psyCardArr)){
                $_psyJsa->legal_situation_crime_committed=$psyCardArr['legalSituationCrimeCommitted'];
            }
            if(array_key_exists('legalSituationCrimeCommittedOther',$psyCardArr)){
                $_psyJsa->legal_situation_crime_committed_other=$psyCardArr['legalSituationCrimeCommittedOther'];
            }
             if(array_key_exists('legalSituationPreviousIncarceration',$psyCardArr)){
                $_psyJsa->legal_situation_previous_incarceration=$psyCardArr['legalSituationPreviousIncarceration'];
            }
            if(array_key_exists('legalSituationPreviousIncarcerationIf',$psyCardArr)){
                $_psyJsa->legal_situation_previous_incarceration_if=$psyCardArr['legalSituationPreviousIncarcerationIf'];
            }
            if(array_key_exists('legalSituationPreviousIncarcerationIfProminence',$psyCardArr)){
                $_psyJsa->legal_situation_previous_incarceration_if_prominence=$psyCardArr['legalSituationPreviousIncarcerationIfProminence'];
            }

            if(array_key_exists('criminalRecord',$psyCardArr)){
                $_psyJsa->criminal_record=$psyCardArr['criminalRecord'];
            }
            if(array_key_exists('criminalRecordCondemnation',$psyCardArr)){
                $_psyJsa->criminal_record_condemnation=$psyCardArr['criminalRecordCondemnation'];
            }

            if(array_key_exists('violentBehavior',$psyCardArr)){
                $_psyJsa->violent_behavior=$psyCardArr['violentBehavior'];
            }
            
            if(array_key_exists('violentBehaviorActsAggression',$psyCardArr)){
                $_psyJsa->violent_behavior_acts_aggression=$psyCardArr['violentBehaviorActsAggression'];
            }
            if(array_key_exists('violentBehaviorActsAggressionDesc',$psyCardArr)){
                $_psyJsa->violent_behavior_acts_aggression_desc=$psyCardArr['violentBehaviorActsAggressionDesc'];
            }
            if(array_key_exists('violentBehaviorViolentCrimes',$psyCardArr)){
                $_psyJsa->violent_behavior_violent_crimes=$psyCardArr['violentBehaviorViolentCrimes'];
            }
            if(array_key_exists('violentBehaviorCrimesType',$psyCardArr)){
                $_psyJsa->violent_behavior_crimes_type=$psyCardArr['violentBehaviorCrimesType'];
            }
            if(array_key_exists('violentBehaviorDuringIncarceration',$psyCardArr)){
                $_psyJsa->violent_behavior_during_incarceration=$psyCardArr['violentBehaviorDuringIncarceration'];
            }
            if(array_key_exists('violentBehaviorAggressionProceeding',$psyCardArr)){
                $_psyJsa->violent_behavior_aggression_proceeding=$psyCardArr['violentBehaviorAggressionProceeding'];
            }
            if(array_key_exists('violentBehaviorAggressionProceedingDesc',$psyCardArr)){
                $_psyJsa->violent_behavior_aggression_proceeding_desc=$psyCardArr['violentBehaviorAggressionProceedingDesc'];
            }
            if(array_key_exists('violentBehaviorLastAggression',$psyCardArr)){
                $_psyJsa->violent_behavior_last_aggression=$psyCardArr['violentBehaviorLastAggression'];
            }
            if(array_key_exists('violentAggressionNow',$psyCardArr)){
                $_psyJsa->violent_aggression_now=$psyCardArr['violentAggressionNow'];
            }


            if(array_key_exists('backgroundSocialMaritalStatus',$psyCardArr)){
                $_psyJsa->background_social_marital_status=$psyCardArr['backgroundSocialMaritalStatus'];
            }
            if(array_key_exists('backgroundSocialStabilityRelation',$psyCardArr)){
                $_psyJsa->background_social_stability_relation=$psyCardArr['backgroundSocialStabilityRelation'];
            }

            if(array_key_exists('backgroundSocialStabilityProblem',$psyCardArr)){
                $_psyJsa->background_social_stability_problem=$psyCardArr['backgroundSocialStabilityProblem'];
            }

            if(array_key_exists('backgroundSocialRelationProblem',$psyCardArr)){
                $_psyJsa->background_social_relation_problem=$psyCardArr['backgroundSocialRelationProblem'];
            }
            if(array_key_exists('backgroundSocialSons',$psyCardArr)){
                $_psyJsa->background_social_sons=$psyCardArr['backgroundSocialSons'];
            }
            if(array_key_exists('backgroundSocialProblem',$psyCardArr)){
                $_psyJsa->background_social_problem=$psyCardArr['backgroundSocialProblem'];
            }

            
            if(array_key_exists('backgroundSocialSonsProblem',$psyCardArr)){
                $_psyJsa->background_social_sons_problem=$psyCardArr['backgroundSocialSonsProblem'];
            }
            if(array_key_exists('backgroundSocialSituationHouse',$psyCardArr)){
                $_psyJsa->background_social_situation_house=$psyCardArr['backgroundSocialSituationHouse'];
            }
            if(array_key_exists('backgroundSocialSituationHouseOther',$psyCardArr)){
                $_psyJsa->background_social_situation_house_other=$psyCardArr['backgroundSocialSituationHouseOther'];
            }
            if(array_key_exists('backgroundSocialSupportFamily',$psyCardArr)){
                $_psyJsa->background_social_support_family=$psyCardArr['backgroundSocialSupportFamily'];
            }
            if(array_key_exists('backgroundSocialSupportFamilyCont',$psyCardArr)){
                $_psyJsa->background_social_support_family_cont=$psyCardArr['backgroundSocialSupportFamilyCont'];
            }
            if(array_key_exists('backgroundSocialSupportFamilyProblem',$psyCardArr)){
                $_psyJsa->background_social_support_family_problem=$psyCardArr['backgroundSocialSupportFamilyProblem'];
            }
            if(array_key_exists('backgroundSocialSupport',$psyCardArr)){
                $_psyJsa->background_social_support=$psyCardArr['backgroundSocialSupport'];
            }
            if(array_key_exists('backgroundSocialSupportCont',$psyCardArr)){
                $_psyJsa->background_social_support_cont=$psyCardArr['backgroundSocialSupportCont'];
            }
            if(array_key_exists('backgroundSocialSupportOther',$psyCardArr)){
                $_psyJsa->background_social_support_other=$psyCardArr['backgroundSocialSupportOther'];
            }
            if(array_key_exists('backgroundSocialSupportProblem',$psyCardArr)){
                $_psyJsa->background_social_support_problem=$psyCardArr['backgroundSocialSupportProblem'];
            }
            if(array_key_exists('backgroundSocialSchooling',$psyCardArr)){
                $_psyJsa->background_social_schooling=$psyCardArr['backgroundSocialSchooling'];
            }
            if(array_key_exists('backgroundSocialWork',$psyCardArr)){
                $_psyJsa->background_social_work=$psyCardArr['backgroundSocialWork'];
            }
            if(array_key_exists('backgroundSocialWorkOther',$psyCardArr)){
                $_psyJsa->background_social_work_other=$psyCardArr['backgroundSocialWorkOther'];
            }




            if(array_key_exists('substanceUse',$psyCardArr)){
                $_psyJsa->substance_use=$psyCardArr['substanceUse'];
            }
            if(array_key_exists('substanceUseTabacco',$psyCardArr)){
                $_psyJsa->substance_use_tabacco=$psyCardArr['substanceUseTabacco'];
            }
            if(array_key_exists('substanceUseAlcol',$psyCardArr)){
                $_psyJsa->substance_use_alcol=$psyCardArr['substanceUseAlcol'];
            }
            if(array_key_exists('substanceUseMarijuana',$psyCardArr)){
                $_psyJsa->substance_use_marijuana=$psyCardArr['substanceUseMarijuana'];
            }
            if(array_key_exists('substanceUseEroin',$psyCardArr)){
                $_psyJsa->substance_use_eroin=$psyCardArr['substanceUseEroin'];
            }
            if(array_key_exists('substanceUseCocaine',$psyCardArr)){
                $_psyJsa->substance_use_cocaine=$psyCardArr['substanceUseCocaine'];
            }
            if(array_key_exists('substanceUseMetamphetamin',$psyCardArr)){
                $_psyJsa->substance_use_metamphetamin=$psyCardArr['substanceUseMetamphetamin'];
            }
            if(array_key_exists('substanceUseOther',$psyCardArr)){
                $_psyJsa->substance_use_other=$psyCardArr['substanceUseOther'];
            }
            if(array_key_exists('substanceUseDescription',$psyCardArr)){
                $_psyJsa->substance_use_description=$psyCardArr['substanceUseDescription'];
            }
            if(array_key_exists('substanceUseIntravenousMode',$psyCardArr)){
                $_psyJsa->substance_use_intravenous_mode=$psyCardArr['substanceUseIntravenousMode'];
            }
            if(array_key_exists('substanceUseCurrentMethadoneTreatment',$psyCardArr)){
                $_psyJsa->substance_use_current_methadone_treatment=$psyCardArr['substanceUseCurrentMethadoneTreatment'];
            }
            if(array_key_exists('substanceUseCurrentMethadonList',$psyCardArr)){
                $_psyJsa->substance_use_current_methadon_list=$psyCardArr['substanceUseCurrentMethadonList'];
            }
            if(array_key_exists('substanceUseSubstanceAbuse',$psyCardArr)){
                $_psyJsa->substance_use_substance_abuse=$psyCardArr['substanceUseSubstanceAbuse'];
            }
            if(array_key_exists('substanceUseSubstanceAbuseList',$psyCardArr)){
                $_psyJsa->substance_use_substance_abuse_list=$psyCardArr['substanceUseSubstanceAbuseList'];
            }
            if(array_key_exists('substanceUseSubstanceAbuseOther',$psyCardArr)){
                $_psyJsa->substance_use_substance_abuse_other=$psyCardArr['substanceUseSubstanceAbuseOther'];
            }



            if(array_key_exists('psycTreatmentsCheckHospital',$psyCardArr)){
                $_psyJsa->psyc_treatments_check_hospital=$psyCardArr['psycTreatmentsCheckHospital'];
            }
            if(array_key_exists('psycTreatmentsCheckOrder',$psyCardArr)){
                $_psyJsa->psyc_treatments_check_order=$psyCardArr['psycTreatmentsCheckOrder'];
            }
            if(array_key_exists('psycTreatmentsCheckFarmacy',$psyCardArr)){
                $_psyJsa->psyc_treatments_check_farmacy=$psyCardArr['psycTreatmentsCheckFarmacy'];
            }


            if(array_key_exists('psycTreatmentsClinicalEvaluation',$psyCardArr)){
                $_psyJsa->psyc_treatments_clinical_evaluation=$psyCardArr['psycTreatmentsClinicalEvaluation'];
            }
            if(array_key_exists('psycTreatmentsClinicalEvaluationOrder',$psyCardArr)){
                $_psyJsa->psyc_treatments_clinical_evaluation_order=$psyCardArr['psycTreatmentsClinicalEvaluationOrder'];
            }
            if(array_key_exists('psycTreatmentsInPrison',$psyCardArr)){
                $_psyJsa->psyc_treatments_in_prison=$psyCardArr['psycTreatmentsInPrison'];
            }
            if(array_key_exists('psycTreatmentsComunity',$psyCardArr)){
                $_psyJsa->psyc_treatments_comunity=$psyCardArr['psycTreatmentsComunity'];
            }
            if(array_key_exists('psycTreatmentsHospital',$psyCardArr)){
                $_psyJsa->psyc_treatments_hospital=$psyCardArr['psycTreatmentsHospital'];
            }
            if(array_key_exists('psycTreatmentsCourtOrder',$psyCardArr)){
                $_psyJsa->psyc_treatments_court_order=$psyCardArr['psycTreatmentsCourtOrder'];
            }
            if(array_key_exists('psycTreatmentsFarmacy',$psyCardArr)){
                $_psyJsa->psyc_treatments_farmacy=$psyCardArr['psycTreatmentsFarmacy'];
            }
            if(array_key_exists('psycTreatmentsType',$psyCardArr)){
                $_psyJsa->psyc_treatments_type=$psyCardArr['psycTreatmentsType'];
            }
            if(array_key_exists('psycTreatmentsPreviousTrauma',$psyCardArr)){
                $_psyJsa->psyc_treatments_previous_trauma=$psyCardArr['psycTreatmentsPreviousTrauma'];
            }
            if(array_key_exists('psycTreatmentsPreviousTraumaDesc',$psyCardArr)){
                $_psyJsa->psyc_treatments_previous_trauma_desc=$psyCardArr['psycTreatmentsPreviousTraumaDesc'];
            }


            if(array_key_exists('suicidalRisk',$psyCardArr)){
                $_psyJsa->suicidal_risk=$psyCardArr['suicidalRisk'];
            }
            if(array_key_exists('suicidalRiskNumberAttempts',$psyCardArr)){
                $_psyJsa->suicidal_risk_number_attempts=$psyCardArr['suicidalRiskNumberAttempts'];
            }
            if(array_key_exists('suicidalRiskTimeAttempts',$psyCardArr)){
                $_psyJsa->suicidal_risk_time_attempts=$psyCardArr['suicidalRiskTimeAttempts'];
            }
            if(array_key_exists('suicidalRiskMethodsWeapon',$psyCardArr)){
                $_psyJsa->suicidal_risk_methods_weapon=$psyCardArr['suicidalRiskMethodsWeapon'];
            }
            if(array_key_exists('suicidalRiskMethodsWeaponOther',$psyCardArr)){
                $_psyJsa->suicidal_risk_methods_weapon_other=$psyCardArr['suicidalRiskMethodsWeaponOther'];
            }
            if(array_key_exists('suicidalRiskLevelIdeation',$psyCardArr)){
                $_psyJsa->suicidal_risk_level_ideation=$psyCardArr['suicidalRiskLevelIdeation'];
            }
            if(array_key_exists('suicidalRiskSucideTentative',$psyCardArr)){
                $_psyJsa->suicidal_risk_sucide_tentative=$psyCardArr['suicidalRiskSucideTentative'];
            }
            if(array_key_exists('suicidalRiskSucideTentativeNumber',$psyCardArr)){
                $_psyJsa->suicidal_risk_sucide_tentative_number=$psyCardArr['suicidalRiskSucideTentativeNumber'];
            }
            if(array_key_exists('suicidalRiskTentativeTime',$psyCardArr)){
                $_psyJsa->suicidal_risk_tentative_time=$psyCardArr['suicidalRiskTentativeTime'];
            }
            if(array_key_exists('suicidalRiskMethodsTwo',$psyCardArr)){
                $_psyJsa->suicidal_risk_methods_two=$psyCardArr['suicidalRiskMethodsTwo'];
            }
            if(array_key_exists('suicidalRiskMethodsTwoOther',$psyCardArr)){
                $_psyJsa->suicidal_risk_methods_two_other=$psyCardArr['suicidalRiskMethodsTwoOther'];
            }
            if(array_key_exists('suicidalRiskActOfSelfHarm',$psyCardArr)){
                $_psyJsa->suicidal_risk_act_of_self_harm=$psyCardArr['suicidalRiskActOfSelfHarm'];
            }
            if(array_key_exists('suicidalRiskActOfSelfHarmDesc',$psyCardArr)){
                $_psyJsa->suicidal_risk_act_of_self_harm_desc=$psyCardArr['suicidalRiskActOfSelfHarmDesc'];
            }




            if(array_key_exists('mentalConditionsSomaticConcerns',$psyCardArr)){
                $_psyJsa->mental_conditions_somatic_concerns=$psyCardArr['mentalConditionsSomaticConcerns'];
            }
            if(array_key_exists('mentalConditionsAnxiety',$psyCardArr)){
                $_psyJsa->mental_conditions_anxiety=$psyCardArr['mentalConditionsAnxiety'];
            }
            if(array_key_exists('mentalConditionsDepression',$psyCardArr)){
                $_psyJsa->mental_conditions_depression=$psyCardArr['mentalConditionsDepression'];
            }
            if(array_key_exists('mentalConditionsSuicide',$psyCardArr)){
                $_psyJsa->mental_conditions_suicide=$psyCardArr['mentalConditionsSuicide'];
            }
            if(array_key_exists('mentalConditionsGuilt',$psyCardArr)){
                $_psyJsa->mental_conditions_guilt=$psyCardArr['mentalConditionsGuilt'];
            }
            if(array_key_exists('mentalConditionsHostility',$psyCardArr)){
                $_psyJsa->mental_conditions_hostility=$psyCardArr['mentalConditionsHostility'];
            }
            if(array_key_exists('mentalConditionsElevatedMood',$psyCardArr)){
                $_psyJsa->mental_conditions_elevated_mood=$psyCardArr['mentalConditionsElevatedMood'];
            }
            if(array_key_exists('mentalConditionsGrandeur',$psyCardArr)){
                $_psyJsa->mental_conditions_grandeur=$psyCardArr['mentalConditionsGrandeur'];
            }
            if(array_key_exists('mentalConditionsSuspiciousness',$psyCardArr)){
                $_psyJsa->mental_conditions_suspiciousness=$psyCardArr['mentalConditionsSuspiciousness'];
            }
            if(array_key_exists('mentalConditionsAllucination',$psyCardArr)){
                $_psyJsa->mental_conditions_allucination=$psyCardArr['mentalConditionsAllucination'];
            }
            if(array_key_exists('mentalConditionsUnusualThought',$psyCardArr)){
                $_psyJsa->mental_conditions_unusual_thought=$psyCardArr['mentalConditionsUnusualThought'];
            }
            if(array_key_exists('mentalConditionsBizarreBehavior',$psyCardArr)){
                $_psyJsa->mental_conditions_bizarre_behavior=$psyCardArr['mentalConditionsBizarreBehavior'];
            }
            if(array_key_exists('mentalConditionsNeglect',$psyCardArr)){
                $_psyJsa->mental_conditions_neglect=$psyCardArr['mentalConditionsNeglect'];
            }
            if(array_key_exists('mentalConditionsDisorientation',$psyCardArr)){
                $_psyJsa->mental_conditions_disorientation=$psyCardArr['mentalConditionsDisorientation'];
            }
            if(array_key_exists('mentalConditionsDisorganization',$psyCardArr)){
                $_psyJsa->mental_conditions_disorganization=$psyCardArr['mentalConditionsDisorganization'];
            }
            if(array_key_exists('mentalConditionsBlankness',$psyCardArr)){
                $_psyJsa->mental_conditions_blankness=$psyCardArr['mentalConditionsBlankness'];
            }
            if(array_key_exists('mentalConditionsReducedEmotion',$psyCardArr)){
                $_psyJsa->mental_conditions_reduced_emotion=$psyCardArr['mentalConditionsReducedEmotion'];
            }
            if(array_key_exists('mentalConditionsMotorSlowdown',$psyCardArr)){
                $_psyJsa->mental_conditions_motor_slowdown=$psyCardArr['mentalConditionsMotorSlowdown'];
            }
            if(array_key_exists('mentalConditionsVoltage',$psyCardArr)){
                $_psyJsa->mental_conditions_voltage=$psyCardArr['mentalConditionsVoltage'];
            }
            if(array_key_exists('mentalConditionsNotCooperation',$psyCardArr)){
                $_psyJsa->mental_conditions_not_cooperation=$psyCardArr['mentalConditionsNotCooperation'];
            }
            if(array_key_exists('mentalConditionsExcitement',$psyCardArr)){
                $_psyJsa->mental_conditions_excitement=$psyCardArr['mentalConditionsExcitement'];
            }
            if(array_key_exists('mentalConditionsDistractibility',$psyCardArr)){
                $_psyJsa->mental_conditions_distractibility=$psyCardArr['mentalConditionsDistractibility'];
            }
            if(array_key_exists('mentalConditionsMotorHyperactivity',$psyCardArr)){
                $_psyJsa->mental_conditions_motor_hyperactivity=$psyCardArr['mentalConditionsMotorHyperactivity'];
            }
            if(array_key_exists('mentalConditionsMannerisms',$psyCardArr)){
                $_psyJsa->mental_conditions_mannerisms=$psyCardArr['mentalConditionsMannerisms'];
            }


            if(array_key_exists('psychologicalProblems',$psyCardArr)){
                $_psyJsa->psychological_problems=$psyCardArr['psychologicalProblems'];
            }
            if(array_key_exists('psychologicalProblemsList',$psyCardArr)){
                $_psyJsa->psychological_problems_list=$psyCardArr['psychologicalProblemsList'];
            }
            if(array_key_exists('psychologicalProblemsOther',$psyCardArr)){
                $_psyJsa->psychological_problems_other=$psyCardArr['psychologicalProblemsOther'];
            }


            if(array_key_exists('reports',$psyCardArr)){
                $_psyJsa->reports=$psyCardArr['reports'];
            }
            if(array_key_exists('reportsList',$psyCardArr)){
                $_psyJsa->reports_list=$psyCardArr['reportsList'];
            }
            if(array_key_exists('reportsOther',$psyCardArr)){
                $_psyJsa->reports_other=$psyCardArr['reportsOther'];
            }

            if(array_key_exists('suicidalRiskSelfHarm',$psyCardArr)){
                $_psyJsa->suicidal_risk_self_harm=$psyCardArr['suicidalRiskSelfHarm'];
            }
            if(array_key_exists('riskOfViolence',$psyCardArr)){
                $_psyJsa->risk_of_violence=$psyCardArr['riskOfViolence'];
            }
            if(array_key_exists('riskOfVictimization',$psyCardArr)){
                $_psyJsa->risk_of_victimization=$psyCardArr['riskOfVictimization'];
            }

            if(array_key_exists('particularAssignment',$psyCardArr)){
                $_psyJsa->particular_assignment=$psyCardArr['particularAssignment'];
            }
            if(array_key_exists('particularAssignmentList',$psyCardArr)){
                $_psyJsa->particular_assignment_list=$psyCardArr['particularAssignmentList'];
            }
            if(array_key_exists('particularAssignmentOther',$psyCardArr)){
                $_psyJsa->particular_assignment_other=$psyCardArr['particularAssignmentOther'];
            }
            
            if(array_key_exists('commentClarifications',$psyCardArr)){
                $_psyJsa->comment_clarifications=$psyCardArr['commentClarifications'];
            }
        }
        $_psyJsa->save();

        if($_psyJsa){
            return ["errorNumber"=>0,"message"=>"ok","pj"=>$_psyJsa];

        }else{
            return ["errorNumber"=>3,"message"=>"Scheda non salvata contattare l'amministratore di sistema"];
        }
    }
}
