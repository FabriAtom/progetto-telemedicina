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
                                                    <input type="radio" name="communicate_italian" value="SI" v-model="psyCardMc.communicateItalian"/>
                                                    <label for="communicate_italian" class="col-form-label col-md-3 col-sm-2 label-align"><strong>Comunica in italiano</strong></label>
                                                </span>
                                                <br>
                                                <span>
                                                    <input type="radio" name="communicate_italian" value="NO" v-model="psyCardMc.communicateItalian"/>
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
                                            <label for="son" class="col-form-label col-md-2 col-sm-2 label-align"><strong>figli</strong></label><br>
                                            <div class="col-md-12 col-sm-12">
                                                <input type="radio" name="son" value="NO" v-model="psyCardMc.son"/>
                                                <span>NO</span>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <input type="radio" name="son" value="SI" v-model="psyCardMc.son"/>
                                                <span>SI</span>

                                                <label for="son_number" style="width:50px;" class="col-form-label col-md-1 col-sm-2 label-align"><strong>n°</strong></label>
                                                <input type="number" style="width:50px;" name="son_number" v-model="psyCardMc.son_number"/>
                                                <label for="son_age" style="width:50px;"  class="col-form-label col-md-1 col-sm-2 label-align"><strong>età</strong></label>
                                                <input type="number" style="width:90px;" name="son_age" v-model="psyCardMc.son_age"/>
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
                                                    <input type="radio" name="residence_not" value="SI" v-model="psyCardMc.residenceNot"/>
                                                    <span>Senza fissa dimora</span>
                                                </span>
                                                <br>
                                                <span>
                                                    <input type="radio" name="residence" value="NO" v-model="psyCardMc.residenceNot"/>
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
                                                    <input type="radio" name="title_study" value="Celibe/nubile" v-model="psyCardMc.titleStudy"/>
                                                    <span>Celibe/nubile</span>
                                                </div>
                                                <div>
                                                    <input type="radio" name="title_study" value="Coniugato/a" v-model="psyCardMc.titleStudy"/>
                                                    <span>Coniugato/a</span>
                                                </div>
                                                <div>
                                                    <input type="radio" name="title_study" value="convivente" v-model="psyCardMc.titleStudy"/>
                                                    <span>convivente</span>
                                                </div>
                                                <div>
                                                    <input type="radio" name="title_study" value="Separato/a-Divorziato/a" v-model="psyCardMc.titleStudy"/>
                                                    <span>Separato/a-Divorziato/a</span>
                                                </div>
                                                <div>
                                                    <input type="radio" name="title_study" value="Vedovo/a" v-model="psyCardMc.titleStudy"/>
                                                    <span>Vedovo/a</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="situation_housing" class="col-form-label col-md-3 col-sm-2 label-align"><strong>Situazione abitativa</strong></label><br>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="radio" name="situation_housing" value="Convivenza/coabitazione" v-model="psyCardMc.situationHousing"/>
                                                <span>Convivenza/coabitazione</span>
                                            </span>
                                        </div>
                                    </div>
                                </div> -->


                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="situation_work" class="col-form-label col-md-2 col-sm-2 label-align"><strong>Titolo di studio</strong></label>
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
                                                <div>
                                                    <input type="date" name="date_start_in_institute"  v-model="psyCardMc.dateStartInInstitute"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="first_experience_prison" class="col-form-label col-md-2 col-sm-2 label-align"><strong>Prima esperienza detentiva</strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <div>
                                                    <input type="radio" name="first_experience_prison" value="SI" v-model="psyCardMc.firstExperiencePrison"/>
                                                    <span>SI</span>
                                                </div>
                                                <div>
                                                    <input type="radio" name="first_experience_prison" value="NO" v-model="psyCardMc.firstExperiencePrison"/>
                                                    <span>NO</span>
                                                </div>
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

                                <h2>Primo colloquio psicologico <strong>Intake</strong></h2>
                                <h3>Anamnesi clinica: Disturbo psichico/ Disturbo uso di sostanze</h3>

                                

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
                                








                                <table>
                                    <h3></h3>

                                    <tr>
                                        <th>A2. Anamnesi patologica prossima/ remota</th>
                                        <td>No</td>
                                        <td>NR</td>
                                        <td>SI (indicare <br>quali, <br>dove,<br>quando)</td>
                                        <td>Documento</td>  
                                        <td>Riferito</td>
                                    </tr>
                                    <tr>
                                        <td>Dichiara (o riulta da documentazione/notizie) di aver tentato il suicidio</td>
                                        <td>
                                            <input type="radio"  name="pathological_attempted_suicide" value="No" v-model="psyCardMc.pathologicalAttemptedSuicide">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_attempted_suicide" value="Nr" v-model="psyCardMc.pathologicalAttemptedSuicide">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_attempted_suicide" value="Si" v-model="psyCardMc.pathologicalAttemptedSuicide">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_attempted_suicide" value="Documentato" v-model="psyCardMc.pathologicalAttemptedSuicide">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_attempted_suicide" value="Riferito" v-model="psyCardMc.pathologicalAttemptedSuicide">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>Dichiara di sentirsi (o essersi sentito) disperato o particolarmente depresso</td>
                                        <td>
                                            <input type="radio"  name="pathological_desperate" value="No" v-model="psyCardMc.pathologicalDesperate">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_desperate" value="Nr" v-model="psyCardMc.pathologicalDesperate">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_desperate" value="Si" v-model="psyCardMc.pathologicalDesperate">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_desperate" value="Documentato" v-model="psyCardMc.pathologicalDesperate">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_desperate" value="Riferito" v-model="psyCardMc.pathologicalDesperate">
                                        </td>
                                    </tr> 

                                    <tr>
                                        <td>Dichiara di sentirsi (o essersi sentito) disperato o particolarmente ansioso</td>
                                        <td>
                                            <input type="radio"  name="pathological_anxious" value="No" v-model="psyCardMc.pathologicalAnxious">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_anxious" value="Nr" v-model="psyCardMc.pathologicalAnxious">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_anxious" value="Si" v-model="psyCardMc.pathologicalAnxious">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_anxious" value="Documentato" v-model="psyCardMc.pathologicalAnxious">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_anxious" value="Riferito" v-model="psyCardMc.pathologicalAnxious">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>Dichiara di sentirsi (o essersi sentito) disperato o particolarmente attivato</td>
                                        <td>
                                            <input type="radio"  name="pathological_active" value="No" v-model="psyCardMc.pathologicalActive">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_active" value="Nr" v-model="psyCardMc.pathologicalActive">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_active" value="Si" v-model="psyCardMc.pathologicalActive">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_active" value="Documentato" v-model="psyCardMc.pathologicalActive">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_active" value="Riferito" v-model="psyCardMc.pathologicalActive">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dichiara di aver pensieri ritenuti da tutti gli altri come "strani"</td>
                                        <td>
                                            <input type="radio"  name="pathological_strange_thought" value="No" v-model="psyCardMc.pathologicalStrangeThought">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_strange_thought" value="Nr" v-model="psyCardMc.pathologicalStrangeThought">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_strange_thought" value="Si" v-model="psyCardMc.pathologicalStrangeThought">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_strange_thought" value="Documentato" v-model="psyCardMc.pathologicalStrangeThought">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_strange_thought" value="Riferito" v-model="psyCardMc.pathologicalStrangeThought">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>Dichiara di essere insonne o di avere gravi disturbi del sonno</td>
                                        <td>
                                            <input type="radio"  name="pathological_sleepless" value="No" v-model="psyCardMc.pathologicalSleepless">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_sleepless" value="Nr" v-model="psyCardMc.pathologicalSleepless">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_sleepless" value="Si" v-model="psyCardMc.pathologicalSleepless">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_sleepless" value="Documentato" v-model="psyCardMc.pathologicalSleepless">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_sleepless" value="Riferito" v-model="psyCardMc.pathologicalSleepless">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>Dichiara di non avere alcuna rete familiare / sociale di sostegno</td>
                                        <td>
                                            <input type="radio"  name="pathological_no_family" value="No" v-model="psyCardMc.pathologicalNoFamily">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_no_family" value="Nr" v-model="psyCardMc.pathologicalNoFamily">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_no_family" value="Si" v-model="psyCardMc.pathologicalNoFamily">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_no_family" value="Documentato" v-model="psyCardMc.pathologicalNoFamily">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_no_family" value="Riferito" v-model="psyCardMc.pathologicalNoFamily">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ammette di avere pensieri riguardanti il suicidio e ammette il suicidio come possible soluzione ai problemi</td>
                                        <td>
                                            <input type="radio"  name="pathological_thought_suicide" value="No" v-model="psyCardMc.pathologicalThoughtSuicide">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_thought_suicide" value="Nr" v-model="psyCardMc.pathologicalThoughtSuicide">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_thought_suicide" value="Si" v-model="psyCardMc.pathologicalThoughtSuicide">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_thought_suicide" value="Documentato" v-model="psyCardMc.pathologicalThoughtSuicide">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_thought_suicide" value="Riferito" v-model="psyCardMc.pathologicalThoughtSuicide">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Dichiara Episodi di intossicazione da alcol ("ubriacature") o di bingedrinking ("abbuffata")</td>
                                        <td>
                                            <input type="radio"  name="pathological_alcol" value="No" v-model="psyCardMc.pathologicalAlcol">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_alcol" value="Nr" v-model="psyCardMc.pathologicalAlcol">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_alcol" value="Si" v-model="psyCardMc.pathologicalAlcol">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_alcol" value="Documentato" v-model="psyCardMc.pathologicalAlcol">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_alcol" value="Riferito" v-model="psyCardMc.pathologicalAlcol">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Dichiara Comportamento additivo problematico senza sostanza (ad esempio GAP)</td>
                                        <td>
                                            <input type="radio"  name="pathological_addictive_behavior" value="No" v-model="psyCardMc.pathologicalAddictiveBehavior">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_addictive_behavior" value="Nr" v-model="psyCardMc.pathologicalAddictiveBehavior">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_addictive_behavior" value="Si" v-model="psyCardMc.pathologicalAddictiveBehavior">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_addictive_behavior" value="Documentato" v-model="psyCardMc.pathologicalAddictiveBehavior">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_addictive_behavior" value="Riferito" v-model="psyCardMc.pathologicalAddictiveBehavior">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Dichiara Comportamento additivo problematico senza sostanza (ad esempio GAP)</td>
                                        <td>
                                            <input type="radio"  name="pathological_claims_injuries" value="No" v-model="psyCardMc.pathologicalClaimsInjuries">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_claims_injuries" value="Nr" v-model="psyCardMc.pathologicalClaimsInjuries">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_claims_injuries" value="Si" v-model="psyCardMc.pathologicalClaimsInjuries">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_claims_injuries" value="Documentato" v-model="psyCardMc.pathologicalClaimsInjuries">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_claims_injuries" value="Riferito" v-model="psyCardMc.pathologicalClaimsInjuries">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Esprime livelli insoliti o pervasivi di vergogna, colpa, Preoccupazione per l'incarcerazione</td>
                                        <td>
                                            <input type="radio"  name="pathological_shame_level" value="No" v-model="psyCardMc.pathologicalShameLevel">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_shame_level" value="Nr" v-model="psyCardMc.pathologicalShameLevel">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_shame_level" value="Si" v-model="psyCardMc.pathologicalShameLevel">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_shame_level" value="Documentato" v-model="psyCardMc.pathologicalShameLevel">
                                        </td>
                                        <td>
                                            <input type="radio"  name="pathological_shame_level" value="Riferito" v-model="psyCardMc.pathologicalShameLevel">
                                        </td>
                                    </tr>
                                </table>



                                <h3>Status</h3>
                                <table>
                                    <h3></h3>

                                    <tr>
                                        <th>Colloquio e visita psicologica/psichiatrica</th>
                                         
                                        <td>note e specifiche</td>
                                    </tr>
                                 
accessToTheInterview
trafficWarden
lucid
orientatedInTheThreeParameter
                                    <tr>
                                        <td>accesso al colloquio</td>
                                        <td>
                                            <span>Collaborante</span>
                                            <input type="radio"  name="access_to_the_interview" value="Collaborante" v-model="psyCardMc.accessToTheInterview">
                                        </td>
                                        <td>
                                            <span>Passivo</span>
                                            <input type="radio"  name="access_to_the_interview" value="Passivo" v-model="psyCardMc.accessToTheInterview">
                                        </td>
                                        <td>
                                            <span>Oppositivo</span>
                                            <input type="radio"  name="access_to_the_interview" value="Oppositivo" v-model="psyCardMc.accessToTheInterview">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>Vigile</td>
                                        <td>
                                            <input type="radio"  name="traffic_warden" value="SI" v-model="psyCardMc.trafficWarden">
                                        </td>
                                        <td>
                                            <input type="radio"  name="traffic_warden" value="NO" v-model="psyCardMc.trafficWarden">
                                        </td>
                                    </tr> 

                                    <tr>
                                        <td>Lucido</td>
                                        <td>
                                            <input type="radio"  name="lucid" value="SI" v-model="psyCardMc.lucid">
                                        </td>
                                        <td>
                                            <input type="radio"  name="lucid" value="NO" v-model="psyCardMc.lucid">
                                        </td>
                                    </tr> 
                                    
                                    <tr>
                                        <td>Orientato nei tre paramentri</td>
                                        <td>
                                            <input type="radio"  name="orientated_in_the_three_parameter" value="No" v-model="psyCardMc.orientatedInTheThreeParameter">
                                        </td>
                                        <td>
                                            <input type="radio"  name="orientated_in_the_three_parameter" value="Nr" v-model="psyCardMc.orientatedInTheThreeParameter">
                                        </td>
                                        <td>
                                            <input type="radio"  name="orientated_in_the_three_parameter" value="Si" v-model="psyCardMc.orientatedInTheThreeParameter">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Umore</td>
                                        <td>
                                            <input type="radio"  name="umor" value="No" v-model="psyCardMc.umor">
                                        </td>
                                        <td>
                                            <input type="radio"  name="umor" value="Nr" v-model="psyCardMc.umor">
                                        </td>
                                        <td>
                                            <input type="radio"  name="umor" value="" v-model="psyCardMc.umor">
                                        </td>
                                        <td>
                                            <input type="radio"  name="umor" value="eccitato" v-model="psyCardMc.umor">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Ansia</td>
                                        <td>
                                            <input type="radio"  name="anxiety" value="No" v-model="psyCardMc.anxiety">
                                        </td>
                                        <td>
                                            <input type="radio"  name="anxiety" value="Nr" v-model="psyCardMc.anxiety">
                                        </td>
                                        <td>
                                            <input type="radio"  name="anxiety" value="Si" v-model="psyCardMc.anxiety">
                                        </td>
                                    </tr>
                                </table>
                                
                            </div>


                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="pull-right">
                                    <span class="btn btn-success i2hBtn ml-3" @click="addPsyMembershipCard('mc')">{{btnMcSend}}</span>
                                </div>
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
}

td, th {
  border: 2px solid #dddddd;
  text-align: left;
  padding: 8px;
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

            panel:'mc',

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
        this.getPsyMembershipCardsByUserInstanceId(1);
    },

    methods: {
 
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
            form.append('userInstance', this.userInstance);
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
                    let _psyCardMc=JSON.stringify(this.psyCardMc);
                    alert(JSON.stringify(this.psyCardMc))
                    form.append('psyCardMc', _psyCardMc);
                }
            }else if(_panel=='mh'){

                if(!this.mHSaved){
                    form.append('action', 'store');
                }else{
                    form.append('action', 'update');
                }
                if (this.mHSaved) {
                    if(this.psyCardId){
                        form.append('psyId',this.psyCardId);
                    }else{
                        _errors++;
                        _errorTitle="Attenzione";
                        _errorDescription="Dati mancanti o incompleti contattare l\'amministratore di sistema"
                    }
                    form.append('section', 'mh');
                    if(!this.isObjEmpty(this.psyCardMh)){
                        let _psyCardMh=JSON.stringify(this.psyCardMh);
                        form.append('PsyMentalHealthDepartment', _psyCardMh);
                    }    
                }
            }
            if(_errors==0){
                try {
                    axios.post(actions.ADD_PSY_CARD,form).then(response => {
                        let error=response.data.errorNumber;
                        let _attempts=response.data.attempts;
                        _wm.errNum=error;
                        if(error == 0){

                            Swal.fire(
                                'Scheda',
                                'Aggiornata correttamente',
                                'success'
                            )
                            this.getPsyMembershipCardsByUserInstanceId(this.userInstance);
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
            //GET ALL CARDS
            let _wm = this;
            try {
                axios.get(actions.GET_PSY_CARDS).then(response => {
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

        getPsyMembershipCardById(id){
            let _wm = this;
            try {
                let url=actions.GET_PSY_CARD_BY_ID+'/'+id;
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

        getPsyMembershipCardsByUserInstanceId(id){
            let _wm = this;
            // alert('yy');

            try {
                let url=actions.GET_PSY_CARDS_BY_USER_INSTANCE_ID+'/'+id;
                axios.get(url).then(response => {
                    let error=response.data.errorNumber;
                    // let _attempts=response.data.attempts;
                    _wm.errNum=error;
                    //alert(JSON.stringify(response.data));
                    if(error == 0){
                    
                        _wm.mainTitle="Aggiornamento Cartella psy";
                        if(response.data.PsyMembershipCard){
                            _wm.mCSaved=true;
                            _wm.btnMcSend="Aggiorna";

                            let _SocialFold=response.data.PsySocialFolder;
                            // _wm.psyCardId=response.data.psyCard.id;

                            _wm.psyCardId=response.data.psyCard.id;
                            _wm.psyMcDoctorId = _SocialFold.id_doctor;

                            _wm.psyMcDoctorName = _SocialFold.doctor_name;
                            _wm.psyMcDoctorLastname = _SocialFold.doctor_lastname;

                            
                            _wm.psyCardMc.communicateItalian =_SocialFold.communicate_italian;
                            _wm.psyCardMc.communicate = _SocialFold.communicate 	
                            _wm.psyCardMc.maritalStatus = _SocialFold.marital_status 
                            _wm.psyCardMc.son = _SocialFold.son
                            _wm.psyCardMc.sonNumber = _SocialFold.son_number 
                            _wm.psyCardMc.sonAge = _SocialFold.son_age
                            _wm.psyCardMc.residenceNot = _SocialFold.residence_not

                            _wm.psyCardMc.residence = _SocialFold.residence 
                            _wm.psyCardMc.titleStudy = _SocialFold.title_study
                            _wm.psyCardMc.situationHousing = _SocialFold.situation_housing 
                            _wm.psyCardMc.situationWork = _SocialFold.situation_work
                            _wm.psyCardMc.dateStartPrison = _SocialFold.date_start_prison 
                            _wm.psyCardMc.dateStartInInstitute = _SocialFold.date_start_in_institute
                            _wm.psyCardMc.firstExperiencePrison = _SocialFold.first_experience_prison

                            
                            _wm.psyCardMc.provenience = _SocialFold.provenience
                            _wm.psyCardMc.legalPosition = _SocialFold.legal_position 

                            _wm.psyCardMc.endOfSentence = _SocialFold.end_of_sentence
                            _wm.psyCardMc.economicResource = _SocialFold.economic_resource 

                            _wm.psyCardMc.previousTreatmentForProblem = _SocialFold.previous_treatment_for_problem 
                            _wm.psyCardMc.previousTreatmentFarmacology = _SocialFold.previous_treatment_farmacology 
                            _wm.psyCardMc.previousDiagnosesOfMentalDisorder = _SocialFold.previous_diagnoses_of_mental_disorder 
                            _wm.psyCardMc.previousDiagnosisOfDrugAbuse = _SocialFold.previous_diagnosis_of_drug_abuse
                            _wm.psyCardMc.previousHospitalizationSpdc = _SocialFold.previous_hospitalization_spdc
                            _wm.psyCardMc.previousHospitalizationEmergency = _SocialFold.previous_hospitalization_emergency 
                            _wm.psyCardMc.pathologicalAttemptedSuicide = _SocialFold.pathological_attempted_suicide 
                            _wm.psyCardMc.pathologicalDesperate = _SocialFold.pathological_desperate
                            _wm.psyCardMc.pathologicalAnxious = _SocialFold.pathological_anxious 
                            _wm.psyCardMc.pathologicalActive = _SocialFold.pathological_active 
                            _wm.psyCardMc.pathologicalStrangeThought = _SocialFold.pathological_strange_thought

                            _wm.psyCardMc.pathologicalSleepless = _SocialFold.pathological_sleepless 
                            _wm.psyCardMc.pathologicalNoFamily = _SocialFold.pathological_no_family
                            _wm.psyCardMc.pathologicalThoughtSuicide = _SocialFold.pathological_thought_suicide
                            _wm.psyCardMc.pathologicalAddictiveBehavior = _SocialFold.pathological_addictive_behavior
                            _wm.psyCardMc.pathologicalClaimsInjuries = _SocialFold.pathological_claims_injuries
                            _wm.psyCardMc.pathologicalShameLevel = _SocialFold.pathological_shame_level

                            _wm.psyCardMc.accessToTheInterview = _SocialFold.access_to_the_interview 
                            _wm.psyCardMc.trafficWarden = _SocialFold.traffic_warden
                            _wm.psyCardMc.lucid = _SocialFold.lucid
                            _wm.psyCardMc.orientatedInTheThreeParameter = _SocialFold.orientated_in_the_three_parameter
                            _wm.psyCardMc.umor = _SocialFold.umor
                            _wm.psyCardMc.anxiety = _SocialFold.anxiety
                            _wm.psyCardMc.alteredPerception = _SocialFold.altered_perception
                            _wm.psyCardMc.appetite = _SocialFold.appetite
                            _wm.psyCardMc.alteredFormThought = _SocialFold.altered_form_thought
                            _wm.psyCardMc.sleepWakeRhythm = _SocialFold.sleep_wake_rhythm
                            _wm.psyCardMc.futureProject = _SocialFold.future_project

                            _wm.allPsyMembershipCards=response.data.allPsySocialFolders;
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
