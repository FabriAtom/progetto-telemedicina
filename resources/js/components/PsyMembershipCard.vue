<template>
     <div class="container">
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <h1 class="ml-3"><strong>SCHEDA SOCIO-ANAGRAFICA</strong></h1>
                        
                        <!-- 1.CITTADINANZA -->
                        
                        <div class="x_title" style="background:lightgrey;padding:7px; border-radius:3px; margin-top:5px; margin-left: 10px;  width: 900px;">
                            <span style="margin-left:10px;"><strong>CITTADINANZA</strong></span> 
                        </div>
                        <hr style="border:2px solid black">
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left align-items-center">
                            <div class="x_content">
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <div class="col-md-12 col-sm-12">
                                                <span>
                                                    <input type="radio" name="communicate_italian" value="1" v-model="psyCardMc.communicateItalian"/>
                                                    <label for="communicate_italian" class="col-form-label col-md-3 col-sm-2 label-align"><strong>Comunica in italiano</strong></label>
                                                </span>
                                                <br>
                                                <span>
                                                    <input type="radio" name="communicate_italian" value="0" v-model="psyCardMc.communicateItalian"/>
                                                    <label for="communicate" class="col-form-label col-md-2 col-sm-2 label-align"><strong>Comunica in</strong></label>
                                                    <input type="text" name="communicate" v-model="psyCardMc.communicate"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div> 
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="marital_status" class="col-form-label col-md-2 col-sm-2 label-align"><strong>Stato civile</strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <div>
                                                    <input type="radio" name="marital_status" value="Celibe/nubile" v-model="psyCardMc.maritalStatus"/>
                                                    <span>Celibe/nubile</span>
                                                </div>
                                                <div>
                                                    <input type="radio" name="marital_status" value="Coniugato/a" v-model="psyCardMc.maritalStatus"/>
                                                    <span>Coniugato/a</span>
                                                </div>
                                                <div>
                                                    <input type="radio" name="marital_status" value="convivente" v-model="psyCardMc.maritalStatus"/>
                                                    <span>convivente</span>
                                                </div>
                                                <div>
                                                    <input type="radio" name="marital_status" value="Separato/a-Divorziato/a" v-model="psyCardMc.maritalStatus"/>
                                                    <span>Separato/a-Divorziato/a</span>
                                                </div>
                                                <div>
                                                    <input type="radio" name="marital_status" value="Vedovo/a" v-model="psyCardMc.maritalStatus"/>
                                                    <span>Vedovo/a</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="sons" class="col-form-label col-md-2 col-sm-2 label-align"><strong>figli</strong></label><br>
                                            <div class="col-md-12 col-sm-12">
                                                <input type="radio" name="sons" value="0" v-model="psyCardMc.sons"/>
                                                <span>NO</span>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <input type="radio" name="sons" value="1" v-model="psyCardMc.sons"/>
                                                <span>SI</span>

                                                <label for="son_number" style="width:50px;" class="col-form-label col-md-1 col-sm-2 label-align"><strong>n°</strong></label>
                                                <input type="number" style="width:50px;" name="son_number" v-model="psyCardMc.sonNumber"/>
                                                <label for="son_age" style="width:50px;"  class="col-form-label col-md-1 col-sm-2 label-align"><strong>età</strong></label>
                                                <input type="number" style="width:90px;" name="son_age" v-model="psyCardMc.sonAge"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <div class="col-md-12 col-sm-12">
                                                <label for="residence_not" class="col-form-label col-md-3 col-sm-2 label-align"><strong>Residenza</strong></label><br>
                                                <span>
                                                    <input type="radio" name="residence_not" value="Senza fissa dimora" v-model="psyCardMc.residenceNot"/>
                                                    <span>Senza fissa dimora</span>
                                                </span>
                                                <br>
                                                <span>
                                                    <input type="radio" name="residence_not" v-model="psyCardMc.residenceNot"/>
                                                    <input type="text" name="residence" v-model="psyCardMc.residence"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div> 
                                </div> 
                            


                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="title_study" class="col-form-label col-md-2 col-sm-2 label-align"><strong>Titolo di studio</strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <div>
                                                    <input type="radio" name="title_study" value="Analfabeta" v-model="psyCardMc.titleStudy"/>
                                                    <span>Analfabeta</span>
                                                </div>
                                                <div>
                                                    <input type="radio" name="title_study" value="Licenza elementare" v-model="psyCardMc.titleStudy"/>
                                                    <span>Licenza elementare</span>
                                                </div>
                                                <div>
                                                    <input type="radio" name="title_study" value="Licenza media inferiore" v-model="psyCardMc.titleStudy"/>
                                                    <span>Licenza media inferiore</span>
                                                </div>
                                                <div>
                                                    <input type="radio" name="title_study" value="Licenza media superiore" v-model="psyCardMc.titleStudy"/>
                                                    <span>Licenza media superiore</span>
                                                </div>
                                                <div>
                                                    <input type="radio" name="title_study" value="Laurea" v-model="psyCardMc.titleStudy"/>
                                                    <span>Laurea</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="situation_housing" class="col-form-label col-md-3 col-sm-2 label-align"><strong>Situazione abitativa</strong></label><br>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="checkbox" name="situation_housing" value="Convivenza" v-model="psyCardMc.situationHousing"/>
                                                <span>Convivenza/coabitazione</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>


                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="situation_work" class="col-form-label col-md-2 col-sm-2 label-align"><strong>Situazione lavorativa</strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <div>
                                                    <input type="radio" name="situation_work" value="Occupato" v-model="psyCardMc.situationWork"/>
                                                    <span>Celibe/nubile</span>
                                                </div>
                                                <div>
                                                    <input type="radio" name="situation_work" value="Non occupato" v-model="psyCardMc.situationWork"/>
                                                    <span>Coniugato/a</span>
                                                </div>
                                                <div>
                                                    <input type="radio" name="situation_work" value="Saltuariamente occupato" v-model="psyCardMc.situationWork"/>
                                                    <span>convivente</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="date_start_prison" class="col-form-label col-md-2 col-sm-2 label-align"><strong>Data inizio carcerazione</strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <div>
                                                    <input type="date" name="date_start_prison"  v-model="psyCardMc.dateStartPrison"/>
                                                </div>
                                            </div>
                                            <label for="date_start_in_institute" class="col-form-label col-md-2 col-sm-2 label-align"><strong>Data ingresso in questo istituto</strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <span>
                                                    <input type="date" name="date_start_in_institute"  v-model="psyCardMc.dateStartInInstitute"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="first_experience_prison" class="col-form-label col-md-3 col-sm-2 label-align"><strong>Prima esperienza detentiva</strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input type="radio" name="first_experience_prison" value="1" v-model="psyCardMc.firstExperiencePrison"/>
                                                <span>SI</span>
                                                
                                                <input type="radio" name="first_experience_prison" value="0" v-model="psyCardMc.firstExperiencePrison"/>
                                                <span>NO</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="provenience" class="col-form-label col-md-2 col-sm-2 label-align"><strong>Provenienza</strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <div>
                                                    <input type="radio" name="provenience" value="altro istituto" v-model="psyCardMc.provenience"/>
                                                    <span>Altro istituto</span>
                                                </div>
                                                <div>
                                                    <input type="radio" name="provenience" value="liberta" v-model="psyCardMc.provenience"/>
                                                    <span>Libertà</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="legal_position" class="col-form-label col-md-2 col-sm-2 label-align"><strong>Posizione giuridica</strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <div>
                                                    <input type="radio" name="legal_position" value="Giudicabile" v-model="psyCardMc.legalPosition"/>
                                                    <span>Giudicabile</span>
                                                </div>
                                                <div>
                                                    <input type="radio" name="legal_position" value="Appellante" v-model="psyCardMc.legalPosition"/>
                                                    <span>Appellante</span>
                                                </div>
                                                <div>
                                                    <input type="radio" name="legal_position" value="Riccorrente" v-model="psyCardMc.legalPosition"/>
                                                    <span>Riccorrente</span>
                                                </div>
                                                <div>
                                                    <input type="radio" name="legal_position" value="Definitivo" v-model="psyCardMc.legalPosition"/>
                                                    <span>Definitivo</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="end_of_sentence" class="col-form-label col-md-2 col-sm-2 label-align"><strong>Fine pena</strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <div>
                                                    <input type="date" name="end_of_sentence" v-model="psyCardMc.endOfSentence"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="economic_resource" class="col-form-label col-md-2 col-sm-2 label-align"><strong>Risorse economiche</strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <div>
                                                    <input type="radio" name="economic_resource" value="Scarse/assenti" v-model="psyCardMc.economicResource"/>
                                                    <span>Scarse o assenti</span>
                                                </div>
                                                <div>
                                                    <input type="radio" name="economic_resource" value="Sufficienti" v-model="psyCardMc.economicResource"/>
                                                    <span>Sufficienti nel breve periodo</span>
                                                </div>
                                                <div>
                                                    <input type="radio" name="economic_resource" value="Adeguate" v-model="psyCardMc.economicResource"/>
                                                    <span>Adeguate</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="x_content">

                                <h2 class="pt-4 pl-3">Primo colloquio psicologico <strong>Intake</strong></h2>
                                <h3 class="pl-3">Anamnesi clinica: Disturbo psichico/ Disturbo uso di sostanze</h3>

                                

                                <table>
                                    <tr>
                                        <th>Precedenti trattamenti (documentati o riferiti)</th>
                                        <td>No</td>
                                        <td>NR</td>
                                        <td>SI (indicare <br>quali, <br>dove,<br>quando)</td>
                                        <td>Documento</td>  
                                        <td>Riferito</td>
                                    </tr>
                                    <tr>
                                        <td>Precedenti trattamenti per problematiche o <br> disturbi psichici <br> (ambulatoriali e/o residenziali)</td>
                                        <td>
                                            <input type="radio"  name="previous_treatment_for_problem" value="No" v-model="psyCardMc.previousTreatmentForProblem">
                                        </td>
                                        <td>
                                            <input type="radio"  name="previous_treatment_for_problem" value="Nr" v-model="psyCardMc.previousTreatmentForProblem">
                                        </td>
                                        <td>
                                            <input type="radio"  name="previous_treatment_for_problem" value="Si" v-model="psyCardMc.previousTreatmentForProblem">
                                        </td>
                                        <td>
                                            <input type="radio"  name="previous_treatment_for_problem" value="Documentato" v-model="psyCardMc.previousTreatmentForProblem">
                                        </td>
                                        <td>
                                            <input type="radio"  name="previous_treatment_for_problem" value="Riferito" v-model="psyCardMc.previousTreatmentForProblem">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>Precedenti trattamenti farmacologici e/o <br> psicosociali presso servizi ambulatori/residenziali <br> per le dipendenze</td>
                                        <td>
                                            <input type="radio"  name="previous_treatment_farmacology" value="No" v-model="psyCardMc.previousTreatmentFarmacology">
                                        </td>
                                        <td>
                                            <input type="radio"  name="previous_treatment_farmacology" value="Nr" v-model="psyCardMc.previousTreatmentFarmacology">
                                        </td>
                                        <td>
                                            <input type="radio"  name="previous_treatment_farmacology" value="Si" v-model="psyCardMc.previousTreatmentFarmacology">
                                        </td>
                                        <td>
                                            <input type="radio"  name="previous_treatment_farmacology" value="Documentato" v-model="psyCardMc.previousTreatmentFarmacology">
                                        </td>
                                        <td>
                                            <input type="radio"  name="previous_treatment_farmacology" value="Riferito" v-model="psyCardMc.previousTreatmentFarmacology">
                                        </td>
                                    </tr> 

                                    <tr>
                                        <td>Precedenti diagnosi di disturbo mentale </td>
                                        <td>
                                            <input type="radio"  name="previous_diagnoses_of_mental_disorder" value="No" v-model="psyCardMc.previousDiagnosesOfMentalDisorder">
                                        </td>
                                        <td>
                                            <input type="radio"  name="previous_diagnoses_of_mental_disorder" value="Nr" v-model="psyCardMc.previousDiagnosesOfMentalDisorder">
                                        </td>
                                        <td>
                                            <input type="radio"  name="previous_diagnoses_of_mental_disorder" value="Si" v-model="psyCardMc.previousDiagnosesOfMentalDisorder">
                                        </td>
                                        <td>
                                            <input type="radio"  name="previous_diagnoses_of_mental_disorder" value="Documentato" v-model="psyCardMc.previousDiagnosesOfMentalDisorder">
                                        </td>
                                        <td>
                                            <input type="radio"  name="previous_diagnoses_of_mental_disorder" value="Riferito" v-model="psyCardMc.previousDiagnosesOfMentalDisorder">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>Precedenti diagnosi di abuso/dipendenza da<br>sostanze </td>
                                        <td>
                                            <input type="radio"  name="previous_diagnosis_of_drug_abuse" value="No" v-model="psyCardMc.previousDiagnosisOfDrugAbuse">
                                        </td>
                                        <td>
                                            <input type="radio"  name="previous_diagnosis_of_drug_abuse" value="Nr" v-model="psyCardMc.previousDiagnosisOfDrugAbuse">
                                        </td>
                                        <td>
                                            <input type="radio"  name="previous_diagnosis_of_drug_abuse" value="Si" v-model="psyCardMc.previousDiagnosisOfDrugAbuse">
                                        </td>
                                        <td>
                                            <input type="radio"  name="previous_diagnosis_of_drug_abuse" value="Documentato" v-model="psyCardMc.previousDiagnosisOfDrugAbuse">
                                        </td>
                                        <td>
                                            <input type="radio"  name="previous_diagnosis_of_drug_abuse" value="Riferito" v-model="psyCardMc.previousDiagnosisOfDrugAbuse">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>Precedenti ricoveri in acuzie<br>in SPDC </td>
                                        <td>
                                            <input type="radio"  name="previous_hospitalization_spdc" value="No" v-model="psyCardMc.previousHospitalizationSpdc">
                                        </td>
                                        <td>
                                            <input type="radio"  name="previous_hospitalization_spdc" value="Nr" v-model="psyCardMc.previousHospitalizationSpdc">
                                        </td>
                                        <td>
                                            <input type="radio"  name="previous_hospitalization_spdc" value="Si" v-model="psyCardMc.previousHospitalizationSpdc">
                                        </td>
                                        <td>
                                            <input type="radio"  name="previous_hospitalization_spdc" value="Documentato" v-model="psyCardMc.previousHospitalizationSpdc">
                                        </td>
                                        <td>
                                            <input type="radio"  name="previous_hospitalization_spdc" value="Riferito" v-model="psyCardMc.previousHospitalizationSpdc">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>Precedenti ricoveri in acuzie in <br> Pronto Soccorso e/o <br> ricoveri per intossicazione acuta da sostanze <br>(compreso overdose)</td>
                                        <td>
                                            <input type="radio"  name="previous_hospitalization_emergency" value="No" v-model="psyCardMc.previousHospitalizationEmergency">
                                        </td>
                                        <td>
                                            <input type="radio"  name="previous_hospitalization_emergency" value="Nr" v-model="psyCardMc.previousHospitalizationEmergency">
                                        </td>
                                        <td>
                                            <input type="radio"  name="previous_hospitalization_emergency" value="Si" v-model="psyCardMc.previousHospitalizationEmergency">
                                        </td>
                                        <td>
                                            <input type="radio"  name="previous_hospitalization_emergency" value="Documentato" v-model="psyCardMc.previousHospitalizationEmergency">
                                        </td>
                                        <td>
                                            <input type="radio"  name="previous_hospitalization_emergency" value="Riferito" v-model="psyCardMc.previousHospitalizationEmergency">
                                        </td>
                                    </tr>
                                </table>
                                








                                <table class="mt-2">
                                    <h3></h3>

                                    <tr>
                                        <th>A2. Anamnesi patologica prossima/ remota</th>
                                        <td>si</td>
                                        <td>no</td>
                                        <td>nr</td>
                                        <td>Se si indicare <br>quando e come</td>  
                                    </tr>
                                    <tr>
                                        <td>Dichiara (o riulta da documentazione/notizie) di aver tentato il suicidio</td>
                                        <td>
                                            <input type="radio"  name="pathological_attempted_suicide" value="si" v-model="psyCardMc.pathologicalAttemptedSuicide">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_attempted_suicide" value="no" v-model="psyCardMc.pathologicalAttemptedSuicide">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_attempted_suicide" value="nr" v-model="psyCardMc.pathologicalAttemptedSuicide">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_attempted_suicide" value="se si indicare quando e come" v-model="psyCardMc.pathologicalAttemptedSuicide">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>Dichiara di sentirsi (o essersi sentito) disperato o particolarmente depresso</td>
                                        <td>
                                            <input type="radio"  name="pathological_desperate" value="si" v-model="psyCardMc.pathologicalDesperate">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_desperate" value="no" v-model="psyCardMc.pathologicalDesperate">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_desperate" value="nr" v-model="psyCardMc.pathologicalDesperate">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_desperate" value="se si indicare quando e come" v-model="psyCardMc.pathologicalDesperate">
                                        </td>
                                    </tr> 

                                    <tr>
                                        <td>Dichiara di sentirsi (o essersi sentito) disperato o particolarmente ansioso</td>
                                        <td>
                                            <input type="radio"  name="pathological_anxious" value="si" v-model="psyCardMc.pathologicalAnxious">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_anxious" value="no" v-model="psyCardMc.pathologicalAnxious">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_anxious" value="nr" v-model="psyCardMc.pathologicalAnxious">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_anxious" value="se si indicare quando e come" v-model="psyCardMc.pathologicalAnxious">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>Dichiara di sentirsi (o essersi sentito) disperato o particolarmente attivato</td>
                                        <td>
                                            <input type="radio"  name="pathological_active" value="si" v-model="psyCardMc.pathologicalActive">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_active" value="no" v-model="psyCardMc.pathologicalActive">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_active" value="nr" v-model="psyCardMc.pathologicalActive">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_active" value="se si indicare quando e come" v-model="psyCardMc.pathologicalActive">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dichiara di aver pensieri ritenuti da tutti gli altri come "strani"</td>
                                        <td>
                                            <input type="radio"  name="pathological_strange_thought" value="si" v-model="psyCardMc.pathologicalStrangeThought">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_strange_thought" value="no" v-model="psyCardMc.pathologicalStrangeThought">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_strange_thought" value="nr" v-model="psyCardMc.pathologicalStrangeThought">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_strange_thought" value="se si indicare quando e come" v-model="psyCardMc.pathologicalStrangeThought">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>Dichiara di essere insonne o di avere gravi disturbi del sonno</td>
                                        <td>
                                            <input type="radio"  name="pathological_sleepless" value="si" v-model="psyCardMc.pathologicalSleepless">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_sleepless" value="no" v-model="psyCardMc.pathologicalSleepless">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_sleepless" value="nr" v-model="psyCardMc.pathologicalSleepless">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_sleepless" value="se si indicare quando e come" v-model="psyCardMc.pathologicalSleepless">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>Dichiara di non avere alcuna rete familiare / sociale di sostegno</td>
                                        <td>
                                            <input type="radio"  name="pathological_no_family" value="si" v-model="psyCardMc.pathologicalNoFamily">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_no_family" value="no" v-model="psyCardMc.pathologicalNoFamily">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_no_family" value="nr" v-model="psyCardMc.pathologicalNoFamily">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_no_family" value="se si indicare quando e come" v-model="psyCardMc.pathologicalNoFamily">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ammette di avere pensieri riguardanti il suicidio e ammette il suicidio come possible soluzione ai problemi</td>
                                        <td>
                                            <input type="radio"  name="pathological_thought_suicide" value="si" v-model="psyCardMc.pathologicalThoughtSuicide">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_thought_suicide" value="no" v-model="psyCardMc.pathologicalThoughtSuicide">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_thought_suicide" value="nr" v-model="psyCardMc.pathologicalThoughtSuicide">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_thought_suicide" value="se si indicare quando e come" v-model="psyCardMc.pathologicalThoughtSuicide">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Dichiara Episodi di intossicazione da alcol ("ubriacature") o di bingedrinking ("abbuffata")</td>
                                        <td>
                                            <input type="radio"  name="pathological_alcol" value="si" v-model="psyCardMc.pathologicalAlcol">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_alcol" value="no" v-model="psyCardMc.pathologicalAlcol">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_alcol" value="nr" v-model="psyCardMc.pathologicalAlcol">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_alcol" value="se si indicare quando e come" v-model="psyCardMc.pathologicalAlcol">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Dichiara Comportamento additivo problematico senza sostanza (ad esempio GAP)</td>
                                        <td>
                                            <input type="radio"  name="pathological_addictive_behavior" value="si" v-model="psyCardMc.pathologicalAddictiveBehavior">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_addictive_behavior" value="no" v-model="psyCardMc.pathologicalAddictiveBehavior">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_addictive_behavior" value="nr" v-model="psyCardMc.pathologicalAddictiveBehavior">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_addictive_behavior" value="se si indicare quando e come" v-model="psyCardMc.pathologicalAddictiveBehavior">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>'Dichiara Lesioni Del Setto Nasale (Necrosi/Perforazione)</td>
                                        <td>
                                            <input type="radio"  name="pathological_claims_injuries" value="si" v-model="psyCardMc.pathologicalClaimsInjuries">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_claims_injuries" value="no" v-model="psyCardMc.pathologicalClaimsInjuries">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_claims_injuries" value="nr" v-model="psyCardMc.pathologicalClaimsInjuries">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_claims_injuries" value="se si indicare quando e come" v-model="psyCardMc.pathologicalClaimsInjuries">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Esprime livelli insoliti o pervasivi di vergogna, colpa, Preoccupazione per l'incarcerazione</td>
                                        <td>
                                            <input type="radio"  name="pathological_shame_level" value="si" v-model="psyCardMc.pathologicalShameLevel">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_shame_level" value="no" v-model="psyCardMc.pathologicalShameLevel">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_shame_level" value="nr" v-model="psyCardMc.pathologicalShameLevel">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_shame_level" value="se si indicare quando e come" v-model="psyCardMc.pathologicalShameLevel">
                                        </td>
                                    </tr>
                                </table>



                                <h3 class="ml-3 mt-2">Status</h3>
                                <table>
                                    <h3></h3>

                                    <tr>
                                        <th style="border-right:0">Colloquio e visita psicologica/psichiatrica</th>
                                        <td style="border-left:0"></td>
                                        <td>note e specifiche</td>
                                    </tr>
                                    <tr>
                                        <td>accesso al colloquio</td>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio"  name="access_to_the_interview" value="Collaborante" v-model="psyCardMc.accessToTheInterview">
                                                    <span>Collaborante</span>
                                                </li>
                                                <li>
                                                    <input type="radio"  name="access_to_the_interview" value="Passivo" v-model="psyCardMc.accessToTheInterview">
                                                    <span>Passivo</span>
                                                </li>
                                                <li>
                                                    <input type="radio"  name="access_to_the_interview" value="Oppositivo" v-model="psyCardMc.accessToTheInterview">
                                                    <span>Oppositivo</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <input type="textarea" name="access_to_the_interview_note" v-model="psyCardMc.accessToTheInterviewNote"/>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>Vigile</td>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio"  name="traffic_warden" value="SI" v-model="psyCardMc.trafficWarden">
                                                    <span>si</span>
                                                </li>
                                                <li>
                                                    <input type="radio"  name="traffic_warden" value="NO" v-model="psyCardMc.trafficWarden">
                                                    <span>no</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <input type="textarea" name="traffic_warden_note" v-model="psyCardMc.trafficWardenNote"/>
                                        </td>
                                    </tr> 

                                    <tr>
                                        <td>Lucido</td>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio"  name="lucid" value="SI" v-model="psyCardMc.lucid">
                                                    <span>si</span>
                                                </li>
                                                <li>
                                                    <input type="radio"  name="lucid" value="NO" v-model="psyCardMc.lucid">
                                                    <span>no</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <input type="textarea" name="lucid_note" v-model="psyCardMc.lucidNote"/>
                                        </td>
                                    </tr> 
                                    
                                    <tr>
                                        <td>Orientato nei tre paramentri</td>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio"  name="orientated_in_the_three_parameter" value="SI" v-model="psyCardMc.orientatedInTheThreeParameter">
                                                    <span>si</span>
                                                </li>
                                                <li>
                                                    <input type="radio"  name="orientated_in_the_three_parameter" value="NO" v-model="psyCardMc.orientatedInTheThreeParameter">
                                                    <span>no</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <input type="textarea" name="orientated_in_the_three_parameter_note" v-model="psyCardMc.orientatedInTheThreeParameterNote"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Umore</td>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio"  name="umor" value="in asse/nei limiti" v-model="psyCardMc.umor">
                                                    <span>in asse/nei limiti</span>
                                                </li>
                                                <li>
                                                    <input type="radio"  name="umor" value="depresso" v-model="psyCardMc.umor">
                                                    <span>depresso</span>
                                                </li>
                                                <li>
                                                    <input type="radio"  name="umor" value="disforico" v-model="psyCardMc.umor">
                                                    <span>disforico</span>
                                                </li>
                                                <li>
                                                    <input type="radio"  name="umor" value="eccitato" v-model="psyCardMc.umor">
                                                    <span>eccitato</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <input type="textarea" name="umor_note" v-model="psyCardMc.umorNote"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Ansia</td>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio"  name="anxiety" value="assente" v-model="psyCardMc.anxiety">
                                                    <span>assente</span>
                                                </li>
                                                <li>
                                                    <input type="radio"  name="anxiety" value="lieve" v-model="psyCardMc.anxiety">
                                                    <span>lieve</span>
                                                </li>
                                                <li>
                                                    <input type="radio"  name="anxiety" value="moderata" v-model="psyCardMc.anxiety">
                                                    <span>moderata</span>
                                                </li>
                                                <li>
                                                    <input type="radio"  name="anxiety" value="elevata" v-model="psyCardMc.anxiety">
                                                    <span>elevata</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <input type="textarea" name="anxiety_note" v-model="psyCardMc.anxietyNote"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Alterazione senso percezione</td>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio"  name="altered_perception" value="assente" v-model="psyCardMc.alteredPerception">
                                                    <span>assente</span>
                                                </li>
                                                <li>
                                                    <input type="radio"  name="altered_perception" value="presente" v-model="psyCardMc.alteredPerception">
                                                    <span>presente</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <input type="textarea" name="altered_perception_note" v-model="psyCardMc.alteredPerceptionNote"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Appettito</td>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio"  name="appetite" value="conservato" v-model="psyCardMc.appetite">
                                                    <span>conservato</span>
                                                </li>
                                                <li>
                                                    <input type="radio"  name="appetite" value="alterato" v-model="psyCardMc.appetite">
                                                    <span>alterato</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <input type="textarea" name="appetite_note" v-model="psyCardMc.appetiteNote"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Alterazione forma/contenuto del pensiero</td>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio"  name="altered_form_thought" value="assente" v-model="psyCardMc.alteredFormThought">
                                                    <span>assente</span>
                                                </li>
                                                <li>
                                                    <input type="radio"  name="altered_form_thought" value="presente" v-model="psyCardMc.alteredFormThought">
                                                    <span>presente</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <input type="textarea" name="altered_form_thought_note" v-model="psyCardMc.alteredFormThoughtNote"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Ritmo sonno-veglia</td>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio"  name="sleep_wake_rhythm" value="conservato" v-model="psyCardMc.sleepWakeRhythm">
                                                    <span>conservato</span>
                                                </li>
                                                <li>
                                                    <input type="radio"  name="sleep_wake_rhythm" value="alterato" v-model="psyCardMc.sleepWakeRhythm">
                                                    <span>alterato</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <input type="textarea" name="sleep_wake_rhythm_note" v-model="psyCardMc.sleepWakeRhythmNote"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Progettualità futura</td>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio"  name="future_project" value="preservata" v-model="psyCardMc.futureProject">
                                                    <span>preservata</span>
                                                </li>
                                                <li>
                                                    <input type="radio"  name="future_project" value="Incongrua/alterata" v-model="psyCardMc.futureProject">
                                                    <span>Incongrua/alterata</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <input type="textarea" name="future_project_note" v-model="psyCardMc.futureProjectNote"/>
                                        </td>
                                    </tr>
                                </table>









                                <!-- chekkkkkk -->
                                <h3 class="mt-3 ml-3">Questionario sul benessere generale (GHQ-12)</h3>
                                <table>
                                    <h3></h3>

                                    <tr>
                                        <th>Nelle ultime due settimane si è sentito</th>
                                        <td>Più del solito</td>
                                        <td>Come al solito</td>
                                        <td>Meno del solito</td>
                                        <td>Molto meno del solito</td>

                                    </tr>
                                    <tr>
                                        <td>1. in grado di concentrarsi su cio che stava <br>facendo</td>
                                        <td>
                                            <input type="radio" @change="calculateSum()" name="well_to_focus" value="0" v-model="psyhowFeel.wellToFocus">
                                            <span>0</span>
                                        </td>
                                         <td>
                                            <input type="radio" @change="calculateSum()" name="well_to_focus" value="1" v-model="psyhowFeel.wellToFocus">
                                            <span>1</span>
                                        </td>
                                        <td>
                                            <input type="radio" @change="calculateSum()" name="well_to_focus" value="2" v-model="psyhowFeel.wellToFocus">
                                            <span>2</span>
                                        </td>
                                        <td>
                                            <input type="radio" @change="calculateSum()" name="well_to_focus" value="3" v-model="psyhowFeel.wellToFocus"/>
                                            <span>3</span>
                                        </td>
                                    </tr> 
                                    
                                    <tr>
                                        <td>2. di aver perso molto sonno tanto da<br>preoccuoparsi</td>
                                        <td>
                                            <input type="radio" @change="calculateSum()"  name="well_lost_sleep" value="3" v-model="psyhowFeel.wellLostSleep">
                                            <span>3</span>
                                        </td>
                                         <td>
                                            <input type="radio" @change="calculateSum()" name="well_lost_sleep" value="2" v-model="psyhowFeel.wellLostSleep">
                                            <span>2</span>
                                        </td>
                                        <td>
                                            <input type="radio" @change="calculateSum()" name="well_lost_sleep" value="1" v-model="psyhowFeel.wellLostSleep">
                                            <span>1</span>
                                        </td>
                                        <td>
                                            <input type="radio" @change="calculateSum()" name="well_lost_sleep" value="0" v-model="psyhowFeel.wellLostSleep"/>
                                            <span>0</span>
                                        </td>
                                    </tr> 

                                    <tr>
                                        <td>3. di essere produttivo nella maggior parte delle<br>attività</td>
                                        <td>
                                            <input type="radio" @change="calculateSum()"  name="well_productive" value="0" v-model="psyhowFeel.wellProductive">
                                            <span>0</span>
                                        </td>
                                         <td>
                                            <input type="radio" @change="calculateSum()"  name="well_productive" value="1" v-model="psyhowFeel.wellProductive">
                                            <span>1</span>
                                        </td>
                                        <td>
                                            <input type="radio" @change="calculateSum()" name="well_productive" value="2" v-model="psyhowFeel.wellProductive">
                                            <span>2</span>
                                        </td>
                                        <td>
                                            <input type="radio" @change="calculateSum()" name="well_productive" value="3" v-model="psyhowFeel.wellProductive"/>
                                            <span>3</span>
                                        </td>
                                    </tr> 

                                    <tr>
                                        <td>4. in grado di prendere decisioni nella maggior<br>parte dei casi?</td>
                                        <td>
                                            <input type="radio" @change="calculateSum()"  name="well_make_decision" value="0" v-model="psyhowFeel.wellMakeDecision">
                                            <span>0</span>
                                        </td>
                                         <td>
                                            <input type="radio" @change="calculateSum()" name="well_make_decision" value="1" v-model="psyhowFeel.wellMakeDecision">
                                            <span>1</span>
                                        </td>
                                        <td>
                                            <input type="radio" @change="calculateSum()" name="well_make_decision" value="2" v-model="psyhowFeel.wellMakeDecision">
                                            <span>2</span>
                                        </td>
                                        <td>
                                            <input type="radio" @change="calculateSum()" name="well_make_decision" value="3" v-model="psyhowFeel.wellMakeDecision"/>
                                            <span>3</span>
                                        </td>
                                    </tr> 

                                    <tr>
                                        <td>5. costantemente sotto pressione/stressato</td>
                                        <td>
                                            <input type="radio" @change="calculateSum()"  name="well_pression" value="3" v-model="psyhowFeel.wellPression">
                                            <span>3</span>
                                        </td>
                                         <td>
                                            <input type="radio" @change="calculateSum()" name="well_pression" value="2" v-model="psyhowFeel.wellPression">
                                            <span>2</span>
                                        </td>
                                        <td>
                                            <input type="radio" @change="calculateSum()" name="well_pression" value="1" v-model="psyhowFeel.wellPression">
                                            <span>1</span>
                                        </td>
                                        <td>
                                            <input type="radio" @change="calculateSum()" name="well_pression" value="0" v-model="psyhowFeel.wellPression"/>
                                            <span>0</span>
                                        </td>
                                    </tr> 


                                    <tr>
                                        <td>6. di non essere in grado di superare le<br>difficoltà?</td>
                                        <td>
                                            <input type="radio" @change="calculateSum()"  name="well_not_able" value="3" v-model="psyhowFeel.wellNotAble">
                                            <span>3</span>
                                        </td>
                                         <td>
                                            <input type="radio" @change="calculateSum()" name="well_not_able" value="2" v-model="psyhowFeel.wellNotAble">
                                            <span>2</span>
                                        </td>
                                        <td>
                                            <input type="radio" @change="calculateSum()" name="well_not_able" value="1" v-model="psyhowFeel.wellNotAble">
                                            <span>1</span>
                                        </td>
                                        <td>
                                            <input type="radio" @change="calculateSum()" name="well_not_able" value="0" v-model="psyhowFeel.wellNotAble"/>
                                            <span>0</span>
                                        </td>
                                    </tr> 

                                    <tr>
                                        <td>7. in grado di ritagliarsi del tempo per sé?</td>
                                        <td>
                                            <input type="radio" @change="calculateSum()"  name="well_time_for_himself" value="0" v-model="psyhowFeel.wellTimeForHimself">
                                            <span>0</span>
                                        </td>
                                         <td>
                                            <input type="radio" @change="calculateSum()" name="well_time_for_himself" value="1" v-model="psyhowFeel.wellTimeForHimself">
                                            <span>1</span>
                                        </td>
                                        <td>
                                            <input type="radio" @change="calculateSum()" name="well_time_for_himself" value="2" v-model="psyhowFeel.wellTimeForHimself">
                                            <span>2</span>
                                        </td>
                                        <td>
                                            <input type="radio" @change="calculateSum()" name="well_time_for_himself" value="3" v-model="psyhowFeel.wellTimeForHimself"/>
                                            <span>3</span>
                                        </td>
                                    </tr> 


                                    <tr>
                                        <td>8. in grado di risolvere i suoi problemi?</td>
                                        <td>
                                            <input type="radio" @change="calculateSum()"  name="well_problem_solving" value="0" v-model="psyhowFeel.wellProblemSolving">
                                            <span>0</span>
                                        </td>
                                         <td>
                                            <input type="radio" @change="calculateSum()" name="well_problem_solving" value="1" v-model="psyhowFeel.wellProblemSolving">
                                            <span>1</span>
                                        </td>
                                        <td>
                                            <input type="radio" @change="calculateSum()" name="well_problem_solving" value="2" v-model="psyhowFeel.wellProblemSolving">
                                            <span>2</span>
                                        </td>
                                        <td>
                                            <input type="radio" @change="calculateSum()" name="well_problem_solving" value="3" v-model="psyhowFeel.wellProblemSolving"/>
                                            <span>3</span>
                                        </td>
                                    </tr> 


                                    <tr>
                                        <td>9. infelice o particolarmente depresso</td>
                                        <td>
                                            <input type="radio" @change="calculateSum()"  name="well_unhappy" value="3" v-model="psyhowFeel.wellUnhappy">
                                            <span>3</span>
                                        </td>
                                         <td>
                                            <input type="radio" @change="calculateSum()" name="well_unhappy" value="2" v-model="psyhowFeel.wellUnhappy">
                                            <span>2</span>
                                        </td>
                                        <td>
                                            <input type="radio" @change="calculateSum()" name="well_unhappy" value="1" v-model="psyhowFeel.wellUnhappy">
                                            <span>1</span>
                                        </td>
                                        <td>
                                            <input type="radio" @change="calculateSum()" name="well_unhappy" value="0" v-model="psyhowFeel.wellUnhappy"/>
                                            <span>0</span>
                                        </td>
                                    </tr> 


                                    <tr>
                                        <td>10. come se avesse perso la fiducia in sé stesso?</td>
                                        <td>
                                            <input type="radio" @change="calculateSum()"  name="well_lost_confidence" value="3" v-model="psyhowFeel.wellLostConfidence">
                                            <span>3</span>
                                        </td>
                                         <td>
                                            <input type="radio" @change="calculateSum()" name="well_lost_confidence" value="2" v-model="psyhowFeel.wellLostConfidence">
                                            <span>2</span>
                                        </td>
                                        <td>
                                            <input type="radio" @change="calculateSum()" name="well_lost_confidence" value="1" v-model="psyhowFeel.wellLostConfidence">
                                            <span>1</span>
                                        </td>
                                        <td>
                                            <input type="radio" @change="calculateSum()" name="well_lost_confidence" value="0" v-model="psyhowFeel.wellLostConfidence"/>
                                            <span>0</span>
                                        </td>
                                    </tr> 


                                    <tr>
                                        <td>11. come se avesse minore stima di sé?</td>
                                        <td>
                                            <input type="radio" @change="calculateSum()"  name="well_lower_esteem" value="0" v-model="psyhowFeel.wellLowerEsteem">
                                            <span>0</span>
                                        </td>
                                         <td>
                                            <input type="radio" @change="calculateSum()" name="well_lower_esteem" value="1" v-model="psyhowFeel.wellLowerEsteem">
                                            <span>1</span>
                                        </td>
                                        <td>
                                            <input type="radio" @change="calculateSum()" name="well_lower_esteem" value="2" v-model="psyhowFeel.wellLowerEsteem">
                                            <span>2</span>
                                        </td>
                                        <td>
                                            <input type="radio" @change="calculateSum()" name="well_lower_esteem" value="3" v-model="psyhowFeel.wellLowerEsteem"/>
                                            <span>3</span>
                                        </td>
                                    </tr> 

                                    <tr>
                                        <td>12. con uno stato nel complesso felice o sereno?</td>
                                        <td>
                                            <input type="radio" @change="calculateSum()"  name="well_overall_happy" value="0" v-model="psyhowFeel.wellOverallHappy">
                                            <span>0</span>
                                        </td>
                                         <td>
                                            <input type="radio" @change="calculateSum()" name="well_overall_happy" value="1" v-model="psyhowFeel.wellOverallHappy">
                                            <span>1</span>
                                        </td>
                                        <td>
                                            <input type="radio" @change="calculateSum()" name="well_overall_happy" value="2" v-model="psyhowFeel.wellOverallHappy">
                                            <span>2</span>
                                        </td>
                                        <td>
                                            <input type="radio" @change="calculateSum()" name="well_overall_happy" value="3" v-model="psyhowFeel.wellOverallHappy"/>
                                            <span>3</span>
                                        </td>
                                    </tr> 
                                </table>

                                <div class="ml-3">
                                    <h3 class="mt-4">Punteggio</h3>
                                    <textarea name="well_total_score" v-model="psyhowFeel.wellTotalScore"></textarea>
                                    <h4>da 0 a 14: assenza di rischio</h4>
                                    <h4>da 15 a 36: presenza di rischio</h4>
                                    <h3 class="mt-3">Mini</h3>
                                </div>

                        
                                <table>
                                    <h3></h3>

                                    <tr>
                                        <th>Durante il mese scorso ha:</th>
                                        <td>Si</td>
                                        <td>No</td>
                                    </tr>
                                    <tr>
                                        <td>1. Mai pensato che sarebbe stato meglio essere morto o desiderato di esserlo?</td>
                                        <td>
                                            <input type="radio" name="thought_he_was_dead" value="1" v-model="psyCardMc.thoughtHeWasDead">
                                        </td>
                                         <td>
                                            <input type="radio" name="thought_he_was_dead" value="0" v-model="psyCardMc.thoughtHeWasDead">
                                        </td>
                                    </tr> 

                                    <tr>
                                        <td>2. Voluto farsi del male?</td>
                                        <td>
                                            <input type="radio"  name="wanted_to_get_hurt" value="1" v-model="psyCardMc.wantedToGetHurt">
                                        </td>
                                         <td>
                                            <input type="radio"  name="wanted_to_get_hurt" value="0" v-model="psyCardMc.wantedToGetHurt">
                                        </td>
                                    </tr> 

                                    <tr>
                                        <td>3. Pensato al suicidio?</td>
                                        <td>
                                            <input type="radio" name="thought_suicide" value="1" v-model="psyCardMc.thoughtSuicide">
                                        </td>
                                         <td>
                                            <input type="radio" name="thought_suicide" value="0" v-model="psyCardMc.thoughtSuicide">
                                        </td>
                                    </tr> 

                                    <tr>
                                        <td>4. pensato a come suicidarsi?</td>
                                        <td>
                                            <input type="radio"  name="thought_how_suicide" value="1" v-model="psyCardMc.thoughtHowSuicide">
                                        </td>
                                         <td>
                                            <input type="radio" name="thought_how_suicide" value="0" v-model="psyCardMc.thoughtHowSuicide">
                                        </td>
                                    </tr> 

                                    <tr>
                                        <!-- <td>Nel corso della sua vita:</td> -->
                                        <td>5. Messo in atto un tentativo di suicidio?</td>
                                        <td>
                                            <input type="radio"  name="attempted_suicide" value="1" v-model="psyCardMc.attemptedSuicide">
                                        </td>
                                         <td>
                                            <input type="radio" name="attempted_suicide" value="0" v-model="psyCardMc.attemptedSuicide">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>6. Ha mai messo in atto un tentativo di suicidio?</td>
                                        <td>
                                            <input type="radio"  name="never_try_attempted_suicide" value="1" v-model="psyCardMc.neverTryAttemptedSuicide">
                                        </td>
                                         <td>
                                            <input type="radio"  name="never_try_attempted_suicide" value="0" v-model="psyCardMc.neverTryAttemptedSuicide">
                                        </td>
                                    </tr> 
                                </table>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="gravity_ideation_suicide" class="col-form-label col-md-6 col-sm-2 label-align"><strong>Livello di gravità dell'ideazione suicidaria</strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input type="radio" name="gravity_ideation_suicide" value="basso"  v-model="psyCardMc.gravityIdeationSuicide">
                                                <span>basso</span><br>
                                                <input type="radio" name="gravity_ideation_suicide" value="medio" v-model="psyCardMc.gravityIdeationSuicide">
                                                <span>medio</span><br>
                                                <input type="radio" name="gravity_ideation_suicide" value="elevato" v-model="psyCardMc.gravityIdeationSuicide">
                                                <span>elevato</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="x_content">

                                <p>
                                    ad ulteriore supporto prognostico, i sanitari, affinchè al termine della visita possano avvalersi di una <br>
                                    sintesi <strong>che non deve essere concepita come unico strumento di valutazione del rischio suicidario,</strong><br>
                                    una volta compilate le sezioni sopra riportate, possono fare riferimento alla seguente <strong>check-list finale:</strong>
                                </p>
                                <table>
                                    <tr>
                                        <td style="border-right:0"></td>
                                        <td style="border-right:0"></td>
                                        <td style="border-left:0"></td>
                                        <td style="border-left:0">
                                            <h3><strong>CHECK-LIST VALUTAZIONE RISCHIO AUTOLESIVO E/O SUICIDARIO</strong></h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>1</span>
                                        </td>
                                         <td>
                                            <input type="radio" name="check_spdc_hospitalizations" value="0" v-model="psyCardMc.checkSpdcHospitalizations">
                                            <span>no</span>
                                        </td>
                                        <td>
                                            <input type="radio" name="check_spdc_hospitalizations" value="1" v-model="psyCardMc.checkSpdcHospitalizations">
                                            <span>si</span>
                                        </td>
                                        <td>Precedenti ricoveri in acuzie in SPDC negli ultimi 30 giorni</td>
                                    </tr> 

                                    <tr>
                                        <td>
                                            <span>2</span>
                                        </td>
                                         <td>
                                            <input type="radio"  name="check_declare_suicide" value="0" v-model="psyCardMc.checkDeclareSuicide">
                                            <span>no</span>
                                        </td>
                                        <td>
                                            <input type="radio"  name="check_declare_suicide" value="1" v-model="psyCardMc.checkDeclareSuicide">
                                            <span>si</span>
                                        </td>
                                        <td>Dichiara (a risulta da documentazione/notizie) di aver tentato il suicidio nell'ultimo mese </td>
                                    </tr> 

                                    <tr>
                                        <td>
                                            <span>3</span>
                                        </td>
                                         <td>
                                            <input type="radio" name="check_thougth_suicide" value="0" v-model="psyCardMc.checkThougthSuicide">
                                            <span>no</span>
                                        </td>
                                        <td>
                                            <input type="radio"  name="check_thougth_suicide" value="1" v-model="psyCardMc.checkThougthSuicide">
                                            <span>si</span>
                                        </td>
                                        <td>Ammette di avere pensieri riguardanti il suicidio e ammette il suicidio come possibile<br>soluzione ai problemi</td>
                                    </tr> 

                                    <tr>
                                        <td>
                                            <span>4</span>
                                        </td>
                                         <td>
                                            <input type="radio" name="check_unusual_level_of_shame" value="0" v-model="psyCardMc.checkUnusualLevelOfShame">
                                            <span>no</span>
                                        </td>
                                        <td>
                                            <input type="radio" name="check_unusual_level_of_shame" value="1" v-model="psyCardMc.checkUnusualLevelOfShame">
                                            <span>si</span>
                                        </td>
                                        <td>Esprime livelli insoliti e pervasivi di vergogna, colpa, preoccupazione per<br>l'incarcerazione</td>
                                    </tr> 

                                    <tr>
                                        <td>
                                            <span>5</span>
                                        </td>
                                         <td>
                                            <input type="radio" name="check_confusional_state" value="0" v-model="psyCardMc.checkConfusionalState">
                                            <span>no</span>
                                        </td>
                                        <td>
                                            <input type="radio" name="check_confusional_state" value="1" v-model="psyCardMc.checkConfusionalState">
                                            <span>si</span>
                                        </td>
                                        <td>Stato confusionale (disorientamento spazio-temporale) </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <span>6</span>
                                        </td>
                                         <td>
                                            <input type="radio" name="check_psychomotor_agitation" value="0" v-model="psyCardMc.checkPsychomotorAgitation">
                                            <span>no</span>
                                        </td>
                                        <td>
                                            <input type="radio" name="check_psychomotor_agitation" value="1" v-model="psyCardMc.checkPsychomotorAgitation">
                                            <span>si</span>
                                        </td>
                                        <td>Agitazione psicomotoria a grave e incongruo discontrollo degli impulsi</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <span>7</span>
                                        </td>
                                         <td>
                                            <input type="radio" name="check_bizarre_behavior" value="0" v-model="psyCardMc.checkBizarreBehavior">
                                            <span>no</span>
                                        </td>
                                        <td>
                                            <input type="radio" name="check_bizarre_behavior" value="1" v-model="psyCardMc.checkBizarreBehavior">
                                            <span>si</span>
                                        </td>
                                        <td>Bizzarrie/gravi alterazioni del comportamento e/o del pensiero</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <span>8</span>
                                        </td>
                                         <td>
                                            <input type="radio" name="check_verbal_communication" value="0" v-model="psyCardMc.checkVerbalCommunication">
                                            <span>no</span>
                                        </td>
                                        <td>
                                            <input type="radio" name="check_verbal_communication" value="1" v-model="psyCardMc.checkVerbalCommunication">
                                            <span>si</span>
                                        </td>
                                        <td>Pianto/appiattimento affettivo/inibizione psicomotoria/assenza di comunicazione verbale</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <span>9</span>
                                        </td>
                                         <td>
                                            <input type="radio" name="check_level_mini" value="0" v-model="psyCardMc.checkLevelMini">
                                            <span>no</span>
                                        </td>
                                        <td>
                                            <input type="radio" name="check_level_mini" value="1" v-model="psyCardMc.checkLevelMini">
                                            <span>si</span>
                                        </td>
                                        <td>Livello alto di gravità del M.I.N.I.</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <span>10</span>
                                        </td>
                                         <td>
                                            <input type="radio" name="check_general_well_being" value="0" v-model="psyCardMc.checkGeneralWellBeing">
                                            <span>no</span>
                                        </td>
                                        <td>
                                            <input type="radio" name="check_general_well_being" value="1" v-model="psyCardMc.checkGeneralWellBeing">
                                            <span>si</span>
                                        </td>
                                        <td>Questionario sul benessere Generale (GHQ-12)</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <span>11</span>
                                        </td>
                                         <td>
                                            <input type="radio" name="check_vain_form_violence" value="0" v-model="psyCardMc.checkVainFormViolence">
                                            <span>no</span>
                                        </td>
                                        <td>
                                            <input type="radio" name="check_vain_form_violence" value="1" v-model="psyCardMc.checkVainFormViolence">
                                            <span>si</span>
                                        </td>
                                        <td>Forme vane di violenza subita negli ultimi 15 giorni </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <span>12</span>
                                        </td>
                                         <td>
                                            <input type="radio" name="check_come_from_forced_isolation" value="0" v-model="psyCardMc.checkComeFromForcedIsolation">
                                            <span>no</span>
                                        </td>
                                        <td>
                                            <input type="radio" name="check_come_from_forced_isolation" value="1" v-model="psyCardMc.checkComeFromForcedIsolation">
                                            <span>si</span>
                                        </td>
                                        <td>Provenienza da un isolamento forzato</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <span>13</span>
                                        </td>
                                         <td>
                                            <input type="radio" name="check_isolation_social_network" value="0" v-model="psyCardMc.checkIsolationSocialNetwork">
                                            <span>no</span>
                                        </td>
                                        <td>
                                            <input type="radio" name="check_isolation_social_network" value="1" v-model="psyCardMc.checkIsolationSocialNetwork">
                                            <span>si</span>
                                        </td>
                                        <td>Isolamento delle reti sociali</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <span>14</span>
                                        </td>
                                         <td>
                                            <input type="radio" name="check_uncertainty_about_future" value="0" v-model="psyCardMc.checkUncertaintyAboutFuture">
                                            <span>no</span>
                                        </td>
                                        <td>
                                            <input type="radio" name="check_uncertainty_about_future" value="1" v-model="psyCardMc.checkUncertaintyAboutFuture">
                                            <span>si</span>
                                        </td>
                                        <td>Incertezza sulle prospettive future, sul lavoro e sulle relazioni</td>
                                    </tr>
                                </table>  
                                
                                <p class="mt-5">
                                    Gli <strong>Items 1, 2, 5, 6, 8 e 9</strong> anche quando sono presenti da soli, concorrono all'ipotesi di presenza di 
                                    <br>
                                    rischio <strong>autolesivo/suicidario</strong>.
                                </p>
                                <p>
                                    Gli <strong>Items</strong> 3, 4, 7, 10, 11, 12, 13 e 14 devono essere presenti in associazione tra loro, <strong>almeno</strong> 4, per 
                                    <br>
                                    concorrere all'ipotesi di presenza di <strong>rischio autolesivo/suicidario</strong>.
                                </p>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="check_conclusion" class="col-form-label col-md-6 col-sm-2 label-align"><strong>Conclusioni</strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input type="radio" name="check_conclusion" value="non necessario, valutazione diagnostica e presa in carico" v-model="psyCardMc.checkConclusion">
                                                <span>non necessario, al momento, valutazione diagnostica e presa in carico</span><br>
                                                <input type="radio" name="check_conclusion" value="necessario l'avvio percorso valutazione diagnostica" v-model="psyCardMc.checkConclusion">
                                                <span>necessario l'avvio di un percorso di valutazione diagnostica</span><br>
                                                <input type="radio" name="check_conclusion" value="necessario l'avvio di un trattamento in urgenza/valutazione diagnostica" v-model="psyCardMc.checkConclusion">
                                                <span>necessario l'avvio di un trattamento in urgenza e di una valutazione diagnostica</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="x_content">
                                <h4 class="mt-5 ml-2"><strong>CONCLUSIONI VALUTAZIONE RISCHIO AUTOLESIVO E/O SUICIDARIO</strong></h4>
                                <div style="border:2px solid black; max-width: 800px; max-height: 650px; margin-left: 10px;margin-bottom: 10px;">
                                    <!-- <h4><strong>SEGNALAZIONE PER RISCHIO AUTOLESIVO E/O SUICIDARIO</strong></h4> -->

                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="risk_assessment_conclusions" class="col-form-label col-md-7 col-sm-5 label-align"><strong>SEGNALAZIONE PER RISCHIO AUTOLESIVO E/O SUICIDARIO</strong></label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input type="radio" name="risk_assessment_conclusions" value="1" v-model="psyCardMc.riskAssessmentConclusions">
                                                    <span>Si</span>
                                                    <input type="radio" name="risk_assessment_conclusions" value="0" v-model="psyCardMc.riskAssessmentConclusions">
                                                    <span>No</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  

                                    <!-- checkkkkkkkkkkkkkk -->
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="request_activation_of_measures" class="col-form-label col-md-6 col-sm-2 label-align"><strong>Richiesta attivazione di misure di:</strong></label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input type="checkbox" name="request_activation_normal_surveillance" value="Sorveglianza normale" v-model="psyCardMc.requestActivationNormalSurveillance">
                                                    <span>Sorveglianza normale</span><br>
                                                    <input type="checkbox" name="request_activation_multiple_room" value="Stanza multipla" v-model="psyCardMc.requestActivationMultipleRoom">
                                                    <span>Stanza multipla (per supporters)</span><br>
                                                    <input type="checkbox" name="request_activation_big_surveillance" value="Grande sorveglianza" v-model="psyCardMc.requestActivationBigSurveillance">
                                                    <span>Grande sorveglianza</span><br>
                                                    <input type="checkbox" name="request_activation_visual_surveillance" value="Sorveglianza a vista" v-model="psyCardMc.requestActivationVisualSurveillance">
                                                    <span>Sorveglianza a vista</span><br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div> 
                                <h3 class="ml-2"><strong>Prima visita psichiatrica</strong></h3>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="first_medical_history_visit" class="col-form-label col-md-6 col-sm-2 label-align"><strong>a. ANAMNESI</strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input type="text" name="first_medical_history_visit" v-model="psyCardMc.firstMedicalHistoryVisit">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="first_status" class="col-form-label col-md-6 col-sm-2 label-align"><strong>b. STATUS</strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input type="text" name="first_status" v-model="psyCardMc.firstStatus">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="first_terapy" class="col-form-label col-md-6 col-sm-2 label-align"><strong>c. TERAPIA</strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input type="text" name="first_terapy" v-model="psyCardMc.firstTerapy">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="first_orientation" class="col-form-label col-md-6 col-sm-2 label-align"><strong>d. ORIENTAMENTO DIAGNOSTICO</strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input type="text" name="first_orientation" v-model="psyCardMc.firstOrientation">
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                
                                
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="intervention_plan_advice" class="col-form-label col-md-6 col-sm-2 label-align"><strong>e. Conclusioni, si propone un PIANO DI INTERVENTO</strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input type="checkbox" name="intervention_plan_advice" value="Consulenza" v-model="psyCardMc.interventionPlanAdvice">
                                                <span>CONSULENZA (eventuali consulenze su richiesta;non necessario, al momento, trattamento terapeutico continuativo)</span><br>
                                                <input type="checkbox" name="intervention_plan_advice" value="Assunzione in cura" v-model="psyCardMc.interventionPlanAdvice">
                                                <span>ASSUNZIONE IN CURA (con trattamento farmacologico sintomatico continuativo, con monitoraggio; con trattamento psicologico, con monitoraggio;)</span><br>
                                                <input type="checkbox" name="intervention_plan_advice" value="Sorveglianza a vista" v-model="psyCardMc.interventionPlanAdvice">
                                                <span>PRESA IN CARICO INTEGRATA (con Piano di Trattamento individualizzato ed integrato, con presa in carico multidisciplinare)</span><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="specific_prescription_suggestions" class="col-form-label col-md-6 col-sm-2 label-align"><strong>SPECIFICHE PRESCRIZIONI SUGGERIMENTI</strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input type="radio" name="specific_prescription_suggestions" value="RICHIESTA INVIO/TRASFERIMENTO" v-model="psyCardMc.specificPrescriptionSuggestions">
                                                <span>RICHIESTA INVIO/TRASFERIMENTO IN SEZIONI SPECIFICHE AI SENSI ART. 111, 112, 148</span><br>
                                                <input type="radio" name="specific_prescription_suggestions" value="SUGGERIMENTI DI COLLOCAZIONI" v-model="psyCardMc.specificPrescriptionSuggestions">
                                                <span>SUGGERIMENTI DI COLLOCAZIONI PARTICOLARI IN ISTITUTO</span><br>
                                                <input type="radio" name="specific_prescription_suggestions" value="RICHIESTA MISURA DI SORVEGLIANZA" v-model="psyCardMc.specificPrescriptionSuggestions">
                                                <span>RICHIESTA MISURA DI SORVEGLIANZA</span><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="x_content">
                                <h3><strong> Visita psichiatrica di controllo</strong></h3>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="psychiatric_visit_status" class="col-form-label col-md-6 col-sm-2 label-align"><strong>a. STATUS</strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input type="text" name="psychiatric_visit_status" v-model="psyCardMc.psychiatricVisitStatus">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="psychiatric_visit_terapy" class="col-form-label col-md-6 col-sm-2 label-align"><strong>b. TERAPIA</strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input type="text" name="psychiatric_visit_terapy" v-model="psyCardMc.psychiatricVisitTerapy">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="psychiatric_visit_orientation" class="col-form-label col-md-6 col-sm-2 label-align"><strong>c. ORIENTAMENTO DIAGNOSTICO</strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input type="text" name="psychiatric_visit_orientation" v-model="psyCardMc.psychiatricVisitOrientation">
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <!-- controllo -->
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="psychiatric_intervention_plan_advice" class="col-form-label col-md-6 col-sm-2 label-align"><strong>d. Conclusioni, si propone un PIANO DI INTERVENTO</strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input type="radio" name="psychiatric_intervention_plan_advice" value="Consulenza" v-model="psyCardMc.psychiatricInterventionPlanAdvice">
                                                <span>CONSULENZA (eventuali consulenze su richiesta;non necessario, al momento, trattamento terapeutico continuativo)</span><br>
                                                <input type="radio" name="psychiatric_intervention_plan_advice" value="Assunzione in cura" v-model="psyCardMc.psychiatricInterventionPlanAdvice">
                                                <span>ASSUNZIONE IN CURA (con trattamento farmacologico sintomatico continuativo, con monitoraggio; con trattamento psicologico, con monitoraggio;)</span><br>
                                                <input type="radio" name="psychiatric_intervention_plan_advice" value="Presa in carico integrata" v-model="psyCardMc.psychiatricInterventionPlanAdvice">
                                                <span>PRESA IN CARICO INTEGRATA (con Piano di Trattamento individualizzato ed integrato, con presa in carico multidisciplinare)</span><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="psychiatric_visit_prescription_suggestions" class="col-form-label col-md-6 col-sm-2 label-align"><strong>SPECIFICHE PRESCRIZIONI SUGGERIMENTI</strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input type="radio" name="psychiatric_visit_prescription_suggestions" value="RICHIESTA INVIO/TRASFERIMENTO" v-model="psyCardMc.psychiatricVisitPrescriptionSuggestions">
                                                <span>RICHIESTA INVIO/TRASFERIMENTO IN SEZIONI SPECIFICHE AI SENSI ART. 111, 112, 148</span><br>
                                                <input type="radio" name="psychiatric_visit_prescription_suggestions" value="SUGGERIMENTI DI COLLOCAZIONI" v-model="psyCardMc.psychiatricVisitPrescriptionSuggestions">
                                                <span>SUGGERIMENTI DI COLLOCAZIONI PARTICOLARI IN ISTITUTO</span><br>
                                                <input type="radio" name="psychiatric_visit_prescription_suggestions" value="RICHIESTA MISURA DI SORVEGLIANZA" v-model="psyCardMc.psychiatricVisitPrescriptionSuggestions">
                                                <span>RICHIESTA MISURA DI SORVEGLIANZA</span><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           psycard: {{ psyCardMc }}  psyhow:{{ psyhowFeel }}


                            <div>
                                <h2 class="ml-4 mb-4 mt-4"><strong>Archivio</strong></h2>
                                <ul style="display:flex; flex-wrap: wrap;">
                                    <span v-for="(item, key, index) in PsyMembershipCard" :key="index" class="mr-5">

                                        <div @click="printArchivesCardPsyMembershipCard(item['id'])" class="card text-white bg-secondary mb-2" style="max-width: 19rem;  border-radius: 20px;">
                                            <div class="card-header">
                                                <span style="min-width: 100px;"> 
                                                    <div style="min-width: 100px;"><strong>Nome Medico: </strong><h5 style="display: inline-block;">{{ item['doctor_name'] }} {{ item['doctor_lastname'] }}</h5></div>
                                                    <div><strong>Data: </strong> {{ i2hDateFormat(item['mc_date']) }}</div>

                                                </span> 
                                        </div>
                                            <!-- <div class="card-body">
                                                <h5 class="card-title">
                                                    <div><strong>Data inizio:</strong> {{ i2hDateFormat(item['mc_date']) }}</div>
                                                </h5>
                                                <p class="card-text">
                                                    <div style="min-width: 100px;"><strong>Comunica :</strong> {{ (item['communicate_italian']) }}</div>
                                                    <div style="min-width: 100px;"><strong>Comunica :</strong> <br> {{ (item['communicate']) }}</div>
                                                    <div style="min-width: 100px;"><strong>Stato civile:</strong> {{ ((item['marital_status'])) }} </div>
                                                    <div style="min-width: 100px;"><strong>figli:</strong> {{ (item['sons']) }} </div> 
                                                </p>
                                            </div> -->
                                        </div>
                                        <br><br>
                                    </span>
                                </ul>
                            </div> 



                            <div class="row mb-3 ml-2 mt-4">
                                <div class="col-md-12 col-sm-12">
                                    <span class="item form-group">
                                        <label for="start_date" class="col-form-label col-md-1 col-sm-2 label-align"><strong><h4>DAL</h4></strong></label>
                                        <span class="col-md-12 col-sm-12">
                                            <input type="date" name="start_date" v-model="psyCardMc.startDate">
                                        </span>
                                        <label for="end_date" class="col-form-label col-md-1 col-sm-2 label-align"><strong><h4>AL</h4></strong></label>
                                        <span class="col-md-12 col-sm-12">
                                            <input type="date" name="end_date" v-model="psyCardMc.endDate">
                                        </span>
                                        <span class="search-bar">
                                            <a class="search-button btn btn-success"  @click="getPsyMembershipCardsByUserIstanceId(36,true)">Cerca</a>
                                        </span>
                                    </span>
                                </div>
                            </div>

    

                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="pull-right">
                                    <a class="btn bg-primary text-white i2hBtnPrint ml-4" @click=" printArchivePsyMembershipCard('printPdf')"><i class="fa fa-print"></i>Stampa Archivio</a>
                                </div>
                            </div>


                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="pull-right">
                                    <span class="btn btn-success i2hBtn ml-3" @click="addPsyMembershipCard('mc')">{{btnMcSend}}</span>
                                </div>
                                <a  class="btn btn-success i2hBtnPrint"  @click=" printPsyMembershipCard('printPdf')"><i class="fa fa-print"></i>Stampa</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>



<style lang="scss" scoped>
.labelWidth {
min-width: 190px;
}
.dbTitle {
background: #184140;
color: white;
padding: 10px;
font-weight: bold !important;
}
.item input, .item textarea {
margin-right: 10px;
}
.treatment{
border:1px double #f1f1f1;
margin: 1.5rem 0;
padding: 20px 15px;
font-style: italic; 
-webkit-box-shadow: 1px 1px 3px 1px #ccc; 
box-shadow: 1px 1px 3px 1px #ccc; 
border-radius: 5px;
color: #333; 
}

*p{
    margin-left: 15px;
}


table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-left:1rem;
}

td, th {
  border: 2px solid #dddddd;
  text-align: left;
  padding: 8px;
}

li{
    list-style: none;
}

*{
    // padding-left: 3px;
    // margin: 2px;
    box-sizing: border-box;
}

</style>



<script>
      
import * as actions from "../config/ApiUrl";
import axios from 'axios';
import Swal from 'sweetalert2';

export default {

    name: 'PsyMembershipCard',

    data() {
        return {
            userName: 'Andrea',
            userLastName:'Giovanni',
            userFullName:'',
            userInstance:1,
            userId:0,

            showInput: false,
            showInput1:false,
            showInput2: false,
            showInput3: false,
            showInput4: false,
            showInput5: false,
            showInput6: false,
            showInput7: false,
            showinput8: false,

        
            accessData:[
               
                id => 14,
                name => 'Alessio',
                lastname => 'Ortu',  
            ],

            psyMcDoctorId:0,
            psyMcDoctorName:'',
            psyMcDoctorLastname:'',
            psyMcDate:null,
            psyCardId:null,
            date:new Date(),

            psyCardMc:{},
            psyhowFeel:{},


            PsyMembershipCard:{},

            // panel:'mc',

            // psyCardMh:{},


            mainTitle:"psy",
            firstSave:true,
            mCSaved:false,

            
            btnMcSend:"Salva",
            total:0,               
            allPsyMembershipCards:null,
        }
    },

    created: function () {
        // this.getPermissions();
        this.getPsyMembershipCardsByUserIstanceId(1);
    },



    methods: {

        i2hDateFormat(date){

            let current=new Date(date);
            let year = `${current.getFullYear()}`;
            let month = `${current.getMonth()}`;
            let timeHours=`${current.getHours()}`;
            let timeMinuts=`${current.getMinutes()}`;
            let day = `${current.getDate()}`;
            month=this.zeroFill(month);
            day=this.zeroFill(day);
            timeMinuts=this.zeroFill(timeMinuts);
            timeHours=this.zeroFill(timeHours);
            let tDate=day+'/'+month+'/'+year+' - '+ timeHours + ':' + timeMinuts;
            return tDate;
        },
        zeroFill(value){
            if(parseInt(value)<10){
                value = '0'+value;
            }
            return value
        },


        i2hHourFormat(dataz){
            let dataw= new Date(dataz);
            //return date;
            return dataw.getHours() +':'+dataw.getMinutes();
        },


        printPsyMembershipCard(printPdf){

            let v_myWindow
            let url= 'printPdf/2';
            v_myWindow = window.open(url, 'v_myWindow', 'width=' + screen.width + ',height=' + screen.height + ', scrollbars=yes, titlebar=no, top=0, left=0');
            return false;
        },

        printArchivePsyMembershipCard(printPdf){

            let v_myWindow
            let url= 'printPdf/2';
            v_myWindow = window.open(url, 'v_myWindow', 'width=' + screen.width + ',height=' + screen.height + ', scrollbars=yes, titlebar=no, top=0, left=0');
            return false;
        },


        printArchivesCardPsyMembershipCard(id){

            let v_myWindow
            let url= 'printPdf/'+id;
            v_myWindow = window.open(url, 'v_myWindow', 'width=' + screen.width + ',height=' + screen.height + ', scrollbars=yes, titlebar=no, top=0, left=0');
            return false;
        },




        calculateSum() {
            // Calcola la somma delle opzioni selezionate
            //this.sum = parseInt(this.selectedOption) || 0;
            
            let i=0;
            for (const property in this.psyhowFeel) {
                if(this.psyhowFeel[property]!==null){
                    i += parseInt(this.psyhowFeel[property]);
                }
            }
            this.sum=i;

        },

 
        addPsyMembershipCard(panel){
            let _wm = this;
            let _panel=panel;
            let _errors=0;
            let _errorTitle="Scheda"
            let _errorDescription="Non aggiornata";
            let form = new FormData();
            form.append('userName', this.userName);
            form.append('userLastName', this.userLastName);
            form.append('userFullName', this.userFullName);
            form.append('userInstanceId', this.userInstanceId);
            form.append('userId', this.userId);
            // form.append('doctorId', this.accessData.id);
            // form.append('doctorName', this.accessData.name);
            // form.append('doctorUserName', this.accessData.lastname);
            form.append('doctorId', 14);
            form.append('doctorName', 'mario');
            form.append('doctorUserName', 'bross');
            
            if(_panel=='mc'){

                if(!this.sFSaved){
                    form.append('action', 'store');
                }else{
                    form.append('action', 'update');
                    if(this.psyCardId){
                        form.append('psyId',this.psyCardId);
                    }else{
                        _errors++;
                        _errorTitle="Attenzione";
                        _errorDescription="Dati mancanti o incompleti contattare l\'amministratore di sistema"
                    }
                }
                form.append('section', 'mc');
                if(!this.isObjEmpty(this.psyCardMc)){
                    // alert(JSON.stringify(this.psyCardMc));
                    let _psyCardMc=JSON.stringify(this.psyCardMc);
                    form.append('psyCardMc', _psyCardMc);

                    form.append('communicateItalian', this.psyCardMc.communicateItalian);
                    form.append('communicate', this.psyCardMc.communicate);
                    form.append('maritalStatus', this.psyCardMc.maritalStatus);
                    form.append('sons', this.psyCardMc.sons);
                }
                if(!this.isObjEmpty(this.psyhowFeel)){
                    let _psyhowFeel=JSON.stringify(this.psyhowFeel);
                    //alert(JSON.stringify(this.psyhowFeel))
                    form.append('psyhowFeel', _psyhowFeel);
                }
            }
           
            if(_errors==0){
                try {
                    axios.post(actions.ADD_MEMBERSHIP_CARD,form).then(response => {
                        let error=response.data.errorNumber;
                        let _attempts=response.data.attempts;
                        _wm.errNum=error;
                        if(error == 0){

                            Swal.fire(
                                'Scheda',
                                'Aggiornata correttamente',
                                'success'
                            )
                            // this.getPsyMembershipCardsByUserIstanceId(this.userInstance);
                        }else{
                            // eventBus.$emit('errorEvent', error, _attempts);
                            Swal.fire(
                                'Scheda',
                                'Non aggiornata contattare l\'amministratore di sistema',
                                'warning'
                            )
                        }
                    });
                } catch (error) {
                    throw error
                }
            }else{
                Swal.fire(
                    _errorTitle,
                    _errorDescription,
                    'error'
                )
            }
        },
        getPsyMembershipCards(){
            let _wm = this;
            try {
                axios.get(actions.GET_MEMBERSHIP_CARDS).then(response => {
                    let error=response.data.errorNumber;
                    let _attempts=response.data.attempts;
                    _wm.errNum=error;
                    if(error == 0){
                        //alert(JSON.stringify(response))
                    }else{
                        // eventBus.$emit('errorEvent', error, _attempts);
                    }
                });
            } catch (error) {
                throw error
            }
        },

        getMembershipCardByPsyId(id){
            let _wm = this;
            try {
                let url=actions.GET_MEMBERSHIP_CARD_BY_PSY_ID+'/'+id;
                axios.get(url).then(response => {
                    let error=response.data.errorNumber;
                    let _attempts=response.data.attempts;
                    _wm.errNum=error;
                    if(error == 0){
                        //alert(JSON.stringify(response))
                    }else{
                        // eventBus.$emit('errorEvent', error, _attempts);
                    }
                });
            } catch (error) {
                throw error
            }
        },

         
        getPsyMembershipCardsByUserIstanceId(id,first){
            let _wm = this;

            
            let _param;
            _wm.PsyMembershipCard=[];



            try {
                let url=actions.GE_MEMBERSHIP_CARDS_BY_USER_ISTANCE_ID+'/'+id;
                axios.get(url,{params:{first:first,startDate:this.psyCardMc.startDate,endDate:this.psyCardMc.endDate}}).then(response => {
                    let error=response.data.errorNumber;
                    // let _attempts=response.data.attempts;
                    _wm.errNum=error;
                    //alert(JSON.stringify(response.data));
                    if(error == 0){
                    
                        _wm.mainTitle="Aggiornamento Cartella psy";
                        if(response.data.PsyMembershipCard){
                            // _wm.mCSaved=true;
                            // _wm.btnMcSend="Aggiorna";



                            _wm.PsyMembershipCard=response.data.PsyMembershipCard;

                            for (let prop in _wm.PsyMembershipCard) {

                            }


                            // let _MemberShip=response.data.PsyMembershipCard;
                            // _wm.psyCardId=response.data.psyCard.id;

                            // _wm.psyCardId=response.data.psyCard.id;
                            // _wm.psyMcDoctorId = _MemberShip.id_doctor;

                            // _wm.psyMcDoctorName = _MemberShip.doctor_name;
                            // _wm.psyMcDoctorLastname = _MemberShip.doctor_lastname;

                            
                            // _wm.psyCardMc.communicateItalian =_MemberShip.communicate_italian;
                            // _wm.psyCardMc.communicate = _MemberShip.communicate 	
                            // _wm.psyCardMc.maritalStatus = _MemberShip.marital_status 
                            // _wm.psyCardMc.sons = _MemberShip.sons
                            // _wm.psyCardMc.sonNumber = _MemberShip.son_number 
                            // _wm.psyCardMc.sonAge = _MemberShip.son_age
                            // _wm.psyCardMc.residenceNot = _MemberShip.residence_not

                            // _wm.psyCardMc.residence = _MemberShip.residence 
                            // _wm.psyCardMc.titleStudy = _MemberShip.title_study
                            // _wm.psyCardMc.situationHousing = _MemberShip.situation_housing 
                            // _wm.psyCardMc.situationWork = _MemberShip.situation_work
                            // _wm.psyCardMc.dateStartPrison = _MemberShip.date_start_prison 
                            // _wm.psyCardMc.dateStartInInstitute = _MemberShip.date_start_in_institute
                            // _wm.psyCardMc.firstExperiencePrison = _MemberShip.first_experience_prison

                            
                            // _wm.psyCardMc.provenience = _MemberShip.provenience
                            // _wm.psyCardMc.legalPosition = _MemberShip.legal_position 

                            // _wm.psyCardMc.endOfSentence = _MemberShip.end_of_sentence
                            // _wm.psyCardMc.economicResource = _MemberShip.economic_resource 

                            // _wm.psyCardMc.previousTreatmentForProblem = _MemberShip.previous_treatment_for_problem 
                            // _wm.psyCardMc.previousTreatmentFarmacology = _MemberShip.previous_treatment_farmacology 
                            // _wm.psyCardMc.previousDiagnosesOfMentalDisorder = _MemberShip.previous_diagnoses_of_mental_disorder 
                            // _wm.psyCardMc.previousDiagnosisOfDrugAbuse = _MemberShip.previous_diagnosis_of_drug_abuse
                            // _wm.psyCardMc.previousHospitalizationSpdc = _MemberShip.previous_hospitalization_spdc
                            // _wm.psyCardMc.previousHospitalizationEmergency = _MemberShip.previous_hospitalization_emergency 
                            // _wm.psyCardMc.pathologicalAttemptedSuicide = _MemberShip.pathological_attempted_suicide 
                            // _wm.psyCardMc.pathologicalDesperate = _MemberShip.pathological_desperate
                            // _wm.psyCardMc.pathologicalAnxious = _MemberShip.pathological_anxious 
                            // _wm.psyCardMc.pathologicalActive = _MemberShip.pathological_active 
                            // _wm.psyCardMc.pathologicalStrangeThought = _MemberShip.pathological_strange_thought

                            // _wm.psyCardMc.pathologicalSleepless = _MemberShip.pathological_sleepless 
                            // _wm.psyCardMc.pathologicalNoFamily = _MemberShip.pathological_no_family
                            // _wm.psyCardMc.pathologicalThoughtSuicide = _MemberShip.pathological_thought_suicide
                            // _wm.psyCardMc.pathologicalAddictiveBehavior = _MemberShip.pathological_addictive_behavior
                            // _wm.psyCardMc.pathologicalClaimsInjuries = _MemberShip.pathological_claims_injuries
                            // _wm.psyCardMc.pathologicalShameLevel = _MemberShip.pathological_shame_level

                            // _wm.psyCardMc.accessToTheInterview = _MemberShip.access_to_the_interview 
                            // _wm.psyCardMc.trafficWarden = _MemberShip.traffic_warden
                            // _wm.psyCardMc.lucid = _MemberShip.lucid
                            // _wm.psyCardMc.orientatedInTheThreeParameter = _MemberShip.orientated_in_the_three_parameter
                            // _wm.psyCardMc.umor = _MemberShip.umor
                            // _wm.psyCardMc.anxiety = _MemberShip.anxiety
                            // _wm.psyCardMc.alteredPerception = _MemberShip.altered_perception
                            // _wm.psyCardMc.appetite = _MemberShip.appetite
                            // _wm.psyCardMc.alteredFormThought = _MemberShip.altered_form_thought
                            // _wm.psyCardMc.sleepWakeRhythm = _MemberShip.sleep_wake_rhythm
                            // _wm.psyCardMc.futureProject = _MemberShip.future_project


                            // _wm.psyCardMc.accessToTheInterviewNote = _MemberShip.access_to_the_interview_note
                            // _wm.psyCardMc.trafficWardenNote = _MemberShip.traffic_warden_note
                            // _wm.psyCardMc.lucidNote = _MemberShip.lucid_note
                            // _wm.psyCardMc.orientatedInTheThreeParameterNote = _MemberShip.orientated_in_the_three_parameter_note
                            // _wm.psyCardMc.umorNote = _MemberShip.umor_note
                            // _wm.psyCardMc.anxietyNote = _MemberShip.anxiety_note
                            // _wm.psyCardMc.alteredPerceptionNote = _MemberShip.altered_perception_note
                            // _wm.psyCardMc.appetiteNote = _MemberShip.appetite_note
                            // _wm.psyCardMc.alteredFormThoughtNote = _MemberShip.altered_form_thought_note
                            // _wm.psyCardMc.sleepWakeRhythmNote = _MemberShip.sleep_wake_rhythm_note
                            // _wm.psyCardMc.futureProjectNote = _MemberShip.future_project_note


                            // _wm.psyhowFeel.wellToFocus = _MemberShip.well_to_focus 
                            // _wm.psyhowFeel.wellLostSleep = _MemberShip.well_lost_sleep
                            // _wm.psyhowFeel.wellProductive = _MemberShip.well_productive
                            // _wm.psyhowFeel.wellMakeDecision = _MemberShip.well_make_decision
                            // _wm.psyhowFeel.wellPression = _MemberShip.well_pression
                            // _wm.psyhowFeel.wellNotAble = _MemberShip.well_not_able
                            // _wm.psyhowFeel.wellTimeForHimself = _MemberShip.well_time_for_himself
                            // _wm.psyhowFeel.wellProblemSolving = _MemberShip.well_problem_solving
                            // _wm.psyhowFeel.wellUnhappy = _MemberShip.well_unhappy
                            // _wm.psyhowFeel.wellLostConfidence = _MemberShip.well_lost_confidence
                            // _wm.psyhowFeel.wellLowerEsteem = _MemberShip.well_lower_esteem
                            // _wm.psyhowFeel.wellOverallHappy = _MemberShip.well_overall_happy
                            // _wm.psyhowFeel.wellTotalScore = _MemberShip.well_total_score


                            // _wm.psyCardMc.thoughtHeWasDead = _MemberShip.thought_he_was_dead 
                            // _wm.psyCardMc.wantedToGetHurt = _MemberShip.wanted_to_get_hurt
                            // _wm.psyCardMc.thoughtSuicide = _MemberShip.thought_suicide
                            // _wm.psyCardMc.thoughtHowSuicide = _MemberShip.thought_how_suicide
                            // _wm.psyCardMc.attemptedSuicide = _MemberShip.attempted_suicide
                            // _wm.psyCardMc.neverTryAttemptedSuicide = _MemberShip.never_try_attempted_suicide

                            // _wm.psyCardMc.gravityIdeationSuicide = _MemberShip.gravity_ideation_suicide


                            // _wm.psyCardMc.checkSpdcHospitalizations = _MemberShip.check_spdc_hospitalizations
                            // _wm.psyCardMc.checkDeclareSuicide = _MemberShip.check_declare_suicide
                            // _wm.psyCardMc.checkThougthSuicide = _MemberShip.check_thougth_suicide
                            // _wm.psyCardMc.checkUnusualLevelOfShame = _MemberShip.check_unusual_level_of_shame
                            // _wm.psyCardMc.checkConfusionalState = _MemberShip.check_confusional_state
                            // _wm.psyCardMc.checkPsychomotorAgitation = _MemberShip.check_psychomotor_agitation
                            // _wm.psyCardMc.checkBizarreBehavior = _MemberShip.check_bizarre_behavior
                            // _wm.psyCardMc.checkVerbalCommunication = _MemberShip.check_verbal_communication
                            // _wm.psyCardMc.checkLevelMini = _MemberShip.check_level_mini
                            // _wm.psyCardMc.checkGeneralWellBeing = _MemberShip.check_general_well_being
                            // _wm.psyCardMc.checkVainFormViolence = _MemberShip.check_vain_form_violence
                            // _wm.psyCardMc.checkComeFromForcedIsolation = _MemberShip.check_come_from_forced_isolation
                            // _wm.psyCardMc.checkIsolationSocialNetwork = _MemberShip.check_isolation_social_network
                            // _wm.psyCardMc.checkUncertaintyAboutFuture = _MemberShip.check_uncertainty_about_future
                            // _wm.psyCardMc.checkConclusion = _MemberShip.check_conclusion


                            // _wm.psyCardMc.riskAssessmentConclusions = _MemberShip.risk_assessment_conclusions

                            // _wm.psyCardMc.requestActivationOfMeasures = _MemberShip.request_activation_of_measures
                            // _wm.psyCardMc.requestActivationNormalSurveillance = _MemberShip.request_activation_normal_surveillance
                            // _wm.psyCardMc.requestActivationMultipleRoom = _MemberShip.request_activation_multiple_room
                            // _wm.psyCardMc.requestActivationBigSurveillance = _MemberShip.request_activation_big_surveillance
                            // _wm.psyCardMc.requestActivationVisualSurveillance = _MemberShip.request_activation_visual_surveillance








                            // _wm.psyCardMc.firstMedicalHistoryVisit = _MemberShip.first_medical_history_visit
                            // _wm.psyCardMc.firstStatus = _MemberShip.first_status
                            // _wm.psyCardMc.firstTerapy = _MemberShip.first_terapy
                            // _wm.psyCardMc.firstOrientation = _MemberShip.first_orientation

                            // // _wm.psyCardMc.interventionPlanConclusions = _MemberShip.intervention_plan_conclusions
                            // _wm.psyCardMc.interventionPlanAdvice = _MemberShip.intervention_plan_advice
                            // _wm.psyCardMc.interventionPlanTakingIntoCare = _MemberShip.intervention_plan_taking_into_care
                            // _wm.psyCardMc.interventionPlanIntegratedHandling = _MemberShip.intervention_plan_integrated_handling

                            // // _wm.psyCardMc.psychiatricVisitPlanConclusions = _MemberShip.psychiatric_visit_plan_conclusions 
                            // _wm.psyCardMc.psychiatricInterventionPlanAdvice = _MemberShip.psychiatric_intervention_plan_advice
                            // _wm.psyCardMc.psychiatricVisitPrescriptionSuggestions = _MemberShip.psychiatric_visit_prescription_suggestions

                            
                            // _wm.allPsyMembershipCards=response.data.allPsyMembershipCards;
                        }else{
                            _wm.btnMcSend="Salva";
                        }
                        
                        _wm.firstSave=false;
                    }else if(error == 7){
                        _wm.btnMcSend="Salva";
                        _wm.firstSave=true;
                    }
                    else{
                        // eventBus.$emit('errorEvent', error, _attempts);
                    }
                });
            } catch (error) {
                throw error
            }
        },
        isObjEmpty (obj) {
            return Object.keys(obj).length === 0;
        },
    }
}
</script>
