<template>
    <div class="container">
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title" style="background:lightgrey;padding:7px; border-radius:3px; margin-top:5px;">
                            <h1><strong> Jail Screening Assessment Tool <strong>(JSAT)</strong></strong></h1>
                        </div>

                        <div class="x_content">

                            <!-- <div class="tab-content" id="myTabContent"> -->
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left align-items-center">
                                <div class="row" style="margin-top:20px; border: 1px solid black; padding: 5px; text-align: center; max-width: 1155px;">
                                    <div class="col-md-12 col-sm-12">
                                        <span class="item form-group">
                                            <label for="entry_date" class="col-form-label col-md-2 col-sm-2 label-align"><strong>Data di entrata:</strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="date" name="entry_date" v-model="psyCardPj.entryDate"/>
                                            </span>
                                        </span>
                                        <span class="item form-group">
                                            <label for="valutation_date" class="col-form-label col-md-2 col-sm-2 label-align"><strong>Data di valutazione:</strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="date" name="valutation_date" v-model="psyCardPj.valutationDate"/>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="container" style="border: 1px solid black;">
                                    <span style="max-width: 50%; float: left;">

                                        <div class="row" style="margin-top:20px;">
                                            <!-- <h2 style="border: 1px solid black;">Informazioni</h2> -->
                                            <div class="col-md-12 col-sm-12">
                                                <span class="item form-group">
                                                    <label for="information_age" style="border: 1px solid black;" class="col-form-label col-md-5 col-sm-2 label-align mb-3"><h2><strong>Informazioni</strong></h2></label><br>
                                                    <span class="col-md-12 col-sm-12">
                                                        <input type="number" name="information_age" v-model="psyCardPj.informationAge"/>
                                                        <span>anni</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <span class="item form-group">
                                                    <label for="information_language" class="col-form-label col-md-2 col-sm-2 label-align">Italiano:</label>
                                                    <span class="col-md-12 col-sm-12">
                                                        <span>Si</span>
                                                        <input type="radio" name="information_language" value="1" v-model="psyCardPj.informationLanguage"/>
                                                        <span>No</span>
                                                        <input type="radio" name="information_language" value="0" v-model="psyCardPj.informationLanguage"/>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <span class="item form-group">
                                                    <label for="information_level_language" class="col-form-label col-md-1 col-sm-2 label-align">Livello:</label>
                                                    <span class="col-md-12 col-sm-12">
                                                        <span>Elementare</span>
                                                        <input type="radio" name="information_level_language" value="Elementare" v-model="psyCardPj.informationLevelLanguage"/>
                                                        <span>Intermedio</span>
                                                        <input type="radio" name="information_level_language" value="Intermedio" v-model="psyCardPj.informationLevelLanguage"/>
                                                        <span>Avanzato</span>
                                                        <input type="radio" name="information_level_language" value="Avanzato" v-model="psyCardPj.informationLevelLanguage"/>
                                                        <span>Nessuno</span>
                                                        <input type="radio" name="information_level_language" value="Nessuno" v-model="psyCardPj.informationLevelLanguage"/>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <span class="item form-group">
                                                    <label for="information_native_language" class="col-form-label col-md-3 col-sm-2 label-align">Lingua madre:</label>
                                                    <span class="col-md-2 col-sm-2">
                                                        <input type="text" name="information_native_language" v-model="psyCardPj.informationNativeLanguage"/>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </span>
    
                                    <span style="max-width: 50%;">
                                        <span class="row" style="margin-top:20px;">
                                            <span class="col-md-12 col-sm-12">
                                                <span class="item form-group">
                                                    <label for="information_background" class="col-form-label col-md-5 col-sm-4 label-align"><strong>Background Etnico/Culurale</strong></label>
                                                    <span class="col-md-12 col-sm-12 flex">
                                                        <ul>
                                                            <li>
                                                                <input type="radio" name="information_background" value="Italiano" v-model="psyCardPj.informationBackground"/>
                                                                <span>Italiano</span>
                                                            </li>
                                                            <li>
                                                                <input type="radio" name="information_background" value="Europeo" v-model="psyCardPj.informationBackground"/>
                                                                <span>Europeo</span>
                                                            </li>
                                                            <li>
                                                                <input type="radio" name="information_background" value="Africano" v-model="psyCardPj.informationBackground"/>
                                                                <span>Africano</span>
                                                            </li>
                                                            <li>
                                                                <input type="radio" name="information_background" value="Asiatico" v-model="psyCardPj.informationBackground"/>
                                                                <span>Asiatico</span>
                                                            </li>
                                                        </ul>
                                                        <ul>
                                                            <li>
                                                                <input type="radio" name="information_background" value="Nordamericano" v-model="psyCardPj.informationBackground"/>
                                                                <span>Nordamericano</span>
                                                            </li>
                                                            <li>
                                                                <input type="radio" name="information_background" value="Sudamericano" v-model="psyCardPj.informationBackground"/>
                                                                <span>Sudamericano</span>
                                                            </li>
                                                            <li>
                                                                <input type="radio" name="information_background" value="Rom-sinti/nomade" v-model="psyCardPj.informationBackground"/>
                                                                <span>Rom-sinti/nomade</span>
                                                            </li>
                                                            <li>
                                                                <input type="radio" name="information_background_other" value="altro" v-model="psyCardPj.informationBackgroundOther"/>
                                                                <span>altro</span>
                                                            </li>
                                                        </ul>                                                
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </div>

                                <div class="container" style="border: 1px solid black;">
                                    <h2>Situazione Giuridica</h2>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <span class="item form-group">
                                                <label for="legal_situation_now" class="col-form-label col-md-3 col-sm-3 label-align"><h2><strong>Attuale:</strong></h2></label><br>
                                                <span class="col-md-12 col-sm-12"><br>
                                                    <input type="radio" name="legal_situation_now" value="Imputato" v-model="psyCardPj.legalSituationNow"/>
                                                    <span>Imputato</span><br>
                                                    <input type="radio" name="legal_situation_now" value="Condannato Definitiv" v-model="psyCardPj.legalSituationNow"/>
                                                    <span>Condannato Definitiv.</span><br>
                                                    <input type="radio" name="legal_situation_now" value="Appellante" v-model="psyCardPj.legalSituationNow"/>
                                                    <span>Appellante</span><br>
                                                    <input type="radio" name="legal_situation_now" value="In trasferimento" v-model="psyCardPj.legalSituationNow"/>
                                                    <span>In trasferimento</span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <span class="item form-group">
                                                <label for="legal_situation_crime_committed" class="col-form-label col-md-4 col-sm-4 label-align"><h2>Tipo di reato Commesso:</h2></label><br>
                                                <span class="col-md-12 col-sm-12"><br>
                                                    <input type="radio" name="legal_situation_crime_committed" value="Contro la persona" v-model="psyCardPj.legalSituationCrimeCommitted"/>
                                                    <span>Contro la persona</span><br>
                                                    <input type="radio" name="legal_situation_crime_committed" value="Contro la proprietà" v-model="psyCardPj.legalSituationCrimeCommitted"/>
                                                    <span>Contro la proprietà</span><br>
                                                    <input type="radio" name="legal_situation_crime_committed" value="Contro la legge sugli stupefacenti" v-model="psyCardPj.legalSituationCrimeCommitted"/>
                                                    <span>Contro la legge sugli stupefacenti</span><br>
                                                    <input type="radio" name="legal_situation_crime_committed" value="delitto sessuale" v-model="psyCardPj.legalSituationCrimeCommitted"/>
                                                    <span>delitto sessuale</span><br>

                                                    <input type="radio" name="legal_situation_crime_committed">
                                                    <span>altro</span>
                                                    <input type="text" name="legal_situation_crime_committed_other" value="altro" v-model="psyCardPj.legalSituationCrimeCommittedOther"/>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="legal_situation_previous_incarceration" class="col-form-label col-md-3 col-sm-2 label-align"><strong>Precendenti Carcerazioni:</strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="radio" name="legal_situation_previous_incarceration" v-model="psyCardPj.legalSituationPreviousIncarceration"/>
                                                <span>Si</span>
                                                <input type="radio" name="legal_situation_previous_incarceration" v-model="psyCardPj.legalSituationPreviousIncarceration"/>
                                                <span>No</span>
                                            </span>
                                            <span class="col-md-12 col-sm-12"><br>
                                                <input type="radio" name="legal_situation_previous_incarceration_if" value="Nell'ultimo anno" v-model="psyCardPj.legalSituationPreviousIncarcerationIf"/>
                                                <span>Nell'ultimo anno</span><br>
                                                <input type="radio" name="legal_situation_previous_incarceration_if" value="Negli ultimi 6 mesi" v-model="psyCardPj.legalSituationPreviousIncarcerationIf"/>
                                                <span>Negli ultimi 6 mesi</span><br>
                                                <input type="radio" name="legal_situation_previous_incarceration_if" value="Nell'ultimo mese" v-model="psyCardPj.legalSituationPreviousIncarcerationIf"/>
                                                <span>Nell'ultimo mese</span><br>

                                                <input type="radio" name="legal_situation_previous_incarceration" v-model="psyCardPj.legalSituationPreviousIncarceration"/>
                                                <span>indicare qualsiasi rilievo pertinente:</span>
                                                <input type="text" name="legal_situation_previous_incarceration_if_prominence" v-model="psyCardPj.legalSituationPreviousIncarcerationIfProminance"/>
                                            </span>
                                        </div> 
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="criminal_record" class="col-form-label col-md-2 col-sm-2 label-align"><strong>Precendenti Penali:</strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="radio" name="criminal_record" v-model="psyCardPj.criminalRecord"/>
                                                <span>Si</span>
                                                <input type="radio" name="criminal_record" v-model="psyCardPj.criminalRecord"/>
                                                <span>No</span><br>

                                                <input type="radio" name="criminal_record" v-model="psyCardPj.criminalRecord"/>
                                                <span>Condanna più lunga</span>
                                                <input type="text" name="criminal_record_condemnation" v-model="psyCardPj.criminalRecordCondemnation"/>
                                            </span>
                                        </div> 
                                    </div>
                                </div>


                                <div class="container" style="border: 1px solid black;">
                                    <h2>Comportamenti Violenti</h2>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="violent_behavior_acts_aggression" class="col-form-label col-md-4 col-sm-2 label-align"><strong>Precendenti atti di aggressione/violenza:</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="radio" name="violent_behavior_acts_aggression" value="1" v-model="psyCardPj.violentBehaviorActsAggression"/>
                                                    <span>Si</span>
                                                    <input type="radio" name="violent_behavior_acts_aggression" value="0" v-model="psyCardPj.violentBehaviorActsAggression"/>
                                                    <span>No</span><br>

                                                    <span>Descrivere:</span>
                                                    <input type="text" name="violent_behavior_acts_aggression_desc" v-model="psyCardPj.violentBehaviorActsAggressionDesc"/>
                                                </span>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="violent_behavior_violent_crimes" class="col-form-label col-md-3 col-sm-2 label-align"><strong>Precendenti reati violenti:</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="radio" name="violent_behavior_violent_crimes" value="1" v-model="psyCardPj.violentBehaviorViolentCrimes"/>
                                                    <span>Si</span>
                                                    <input type="radio" name="violent_behavior_violent_crimes" value="0" v-model="psyCardPj.violentBehaviorViolentCrimes"/>
                                                    <span>No</span><br>

                                                    <span>Tipo:</span>
                                                    <input type="text" name="violent_behavior_crimes_type" v-model="psyCardPj.violentBehaviorCrimesType"/>
                                                </span>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="violent_behavior_during_incarceration" class="col-form-label col-md-3 col-sm-2 label-align"><strong>Atti di violenza durante carcerazione:</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="radio" name="violent_behavior_during_incarceration" value="1" v-model="psyCardPj.violentBehaviorDuringIncarceration"/>
                                                    <span>Si</span>
                                                    <input type="radio" name="violent_behavior_during_incarceration" value="0" v-model="psyCardPj.violentBehaviorDuringIncarceration"/>
                                                    <span>No</span><br>
                                                </span>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="violent_behavior_aggression_proceeding" class="col-form-label col-md-4 col-sm-2 label-align"><strong>Provvedimenti disciplinari per aggressività:</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="radio" name="violent_behavior_aggression_proceeding" value="1" v-model="psyCardPj.violentBehaviorAggressionProceeding"/>
                                                    <span>Si</span>
                                                    <input type="radio" name="violent_behavior_aggression_proceeding" value="0" v-model="psyCardPj.violentBehaviorAggressionProceeding"/>
                                                    <span>No</span><br>

                                                    <span>Descrivere:</span>
                                                    <input type="text" name="violent_behavior_aggression_proceeding_desc" v-model="psyCardPj.violentBehaviorAggressionProceedingDesc"/>
                                                </span>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="violent_behavior_last_aggression" class="col-form-label col-md-3 col-sm-2 label-align"><strong>Ultimo atto di aggressione:</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="text" name="violent_behavior_last_aggression" v-model="psyCardPj.violentBehaviorLastAggression"/>
                                                </span>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="violent_aggression_now" class="col-form-label col-md-4 col-sm-2 label-align"><strong>Atti di aggressione/rabbia attuale:</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="radio" name="violent_aggression_now" value="1" v-model="psyCardPj.violentAggressionNow"/>
                                                    <span>Si</span>
                                                    <input type="radio" name="violent_aggression_now" value="0" v-model="psyCardPj.violentAggressionNow"/>
                                                    <span>No</span>
                                                </span>
                                            </div> 
                                        </div>
                                    </div>
                                </div>


                                <div class="container" style="border: 1px solid black;">
                                    <h2>Background sociale</h2>

                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <span class="item form-group">
                                                <label for="background_social_marital_status" class="col-form-label col-md-3 col-sm-3 label-align"><h2><strong>Stato civile:</strong></h2></label><br>
                                                <span class="col-md-12 col-sm-12"><br>
                                                    <input type="radio" name="background_social_marital_status" value="Single" v-model="psyCardPj.backgroundSocialMaritalStatus"/>
                                                    <span>Single</span><br>
                                                    <input type="radio" name="background_social_marital_status" value="Sposato" v-model="psyCardPj.backgroundSocialMaritalStatus"/>
                                                    <span>Sposato</span><br>
                                                    <input type="radio" name="background_social_marital_status" value="Convivente" v-model="psyCardPj.backgroundSocialMaritalStatus"/>
                                                    <span>Convivente</span><br>
                                                    <input type="radio" name="background_social_marital_status" value="Fidanzato" v-model="psyCardPj.backgroundSocialMaritalStatus"/>
                                                    <span>Fidanzato</span><br>
                                                    <input type="radio" name="background_social_marital_status" value="Separato/Divorziato" v-model="psyCardPj.backgroundSocialMaritalStatus"/>
                                                    <span>Separato/Divorziato</span><br>
                                                    <input type="radio" name="background_social_marital_status" value="Vedovo" v-model="psyCardPj.backgroundSocialMaritalStatus"/>
                                                    <span>Vedovo</span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <span class="item form-group">
                                                <label for="background_social_stability_relation" class="col-form-label col-md-4 col-sm-3 label-align"><h2><strong>Stabilità della relazione:</strong></h2></label><br>
                                                <span class="col-md-12 col-sm-12"><br>
                                                    <input type="radio" name="background_social_stability_relation" value=">1 anno" v-model="psyCardPj.backgroundSocialStabilityRelation"/>
                                                    <span> > 1 anno</span><br>
                                                    <input type="radio" name="background_social_stability_relation" value="<1 anno" v-model="psyCardPj.backgroundSocialStabilityRelation"/>
                                                    <span>  1 anno </span><br>
                                                    <input type="radio" name="background_social_stability_relation" value="Problematiche" v-model="psyCardPj.backgroundSocialStabilityRelation"/>
                                                    <span>Problematiche</span>
                                                    <input type="text" name="background_social_relation_problem" v-model="psyCardPj.backgroundSocialStabilityRelationProblem">
                                                </span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <span class="item form-group">
                                                <label for="background_social_sons" class="col-form-label col-md-4 col-sm-3 label-align"><h2><strong> Figli:</strong></h2></label><br>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="radio" name="background_social_sons" value="1" v-model="psyCardPj.backgroundSocialStabilityRelation"/>
                                                    <span>Si</span>
                                                    <input type="radio" name="background_social_sons" value="0" v-model="psyCardPj.backgroundSocialStabilityRelation"/>
                                                    <span>No</span><br>
                                                    <input type="radio" name="background_social_sons" value="Problematiche" v-model="psyCardPj.backgroundSocialStabilityRelation"/>
                                                    <span>Problematiche</span>
                                                    <input type="text" name="background_social_sons_problem" v-model="psyCardPj.backgroundSocialSonsProblem">
                                                </span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <span class="item form-group">
                                                <label for="background_social_situation_house" class="col-form-label col-md-4 col-sm-3 label-align"><h2><strong>Situazione abitativa:</strong></h2></label><br>
                                                <span class="col-md-12 col-sm-12"><br>
                                                    <input type="radio" name="background_social_situation_house" value="Vive in casa di proprietà" v-model="psyCardPj.backgroundSocialMaritalStatus"/>
                                                    <span>Vive in casa di proprietà</span><br>
                                                    <input type="radio" name="background_social_situation_house" value="Vive in affitto" v-model="psyCardPj.backgroundSocialMaritalStatus"/>
                                                    <span>Vive in affitto</span><br>
                                                    <input type="radio" name="background_social_situation_house" value="Vive con la famiglia" v-model="psyCardPj.backgroundSocialMaritalStatus"/>
                                                    <span>Vive con la famiglia</span><br>
                                                    <input type="radio" name="background_social_situation_house" value="Hotel/da amici" v-model="psyCardPj.backgroundSocialMaritalStatus"/>
                                                    <span>Hotel/da amici</span><br>
                                                    <input type="radio" name="background_social_situation_house" value="Istituzione" v-model="psyCardPj.backgroundSocialMaritalStatus"/>
                                                    <span>Istituzione</span><br>
                                                    <input type="radio" name="background_social_situation_house" value="Senza casa" v-model="psyCardPj.backgroundSocialMaritalStatus"/>
                                                    <span>Senza casa</span><br>
                                                    <input type="radio" name="background_social_situation_house" value="In custodia" v-model="psyCardPj.backgroundSocialMaritalStatus"/>
                                                    <span>In custodia</span><br>
                                                    <input type="radio" name="background_social_situation_house" value="In custodia" v-model="psyCardPj.backgroundSocialMaritalStatus"/>
                                                    <span>Altro</span>
                                                    <input type="text" name="background_social_situation_house_other" v-model="psyCardPj.backgroundSocialMaritalStatusOther"/>
                                                </span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <span class="item form-group">
                                                <label for="background_social_support_family" class="col-form-label col-md-4 col-sm-3 label-align"><h2><strong>Supporto familiare:</strong></h2></label><br>
                                                <span class="col-md-12 col-sm-12"><br>
                                                    <input type="radio" name="background_social_support_family" value="1" v-model="psyCardPj.backgroundSocialSupportFamily"/>
                                                    <span>Si</span>
                                                    <input type="radio" name="background_social_support_family" value="0" v-model="psyCardPj.backgroundSocialSupportFamily"/>
                                                    <span>No</span><br>

                                                    <input type="radio" name="background_social_support_family_cont" value="Contatti frequenti" v-model="psyCardPj.backgroundSocialSupportFamilyCont"/>
                                                    <span>Contatti frequenti</span><br>
                                                    <input type="radio" name="background_social_support_family_cont" value="Contatti sporadici" v-model="psyCardPj.backgroundSocialSupportFamilyCont"/>
                                                    <span>Contatti sporadici</span><br>

                                                    <input type="radio" name="background_social_support_family" value="Problematiche" v-model="psyCardPj.backgroundSocialSupportFamily"/>
                                                    <span>Problematiche</span>
                                                    <input type="text" name="background_social_support_family_problem" v-model="psyCardPj.backgroundSocialSupportFamilyProblem">
                                                </span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <span class="item form-group">
                                                <label for="background_social_support" class="col-form-label col-md-4 col-sm-3 label-align"><h2><strong>Supporto sociale:</strong></h2></label><br>
                                                <span class="col-md-12 col-sm-12"><br>
                                                    <input type="radio" name="background_social_support" value="1" v-model="psyCardPj.backgroundSocialSupport"/>
                                                    <span>Si</span>
                                                    <input type="radio" name="background_social_support" value="0" v-model="psyCardPj.backgroundSocialSupport"/>
                                                    <span>No</span><br>

                                                    <input type="radio" name="background_social_support_cont" value="Amici conoscenti" v-model="psyCardPj.backgroundSocialSupportCont"/>
                                                    <span>Amici conoscenti</span><br>
                                                    <input type="radio" name="background_social_support_cont" value="Contatti sporadici" v-model="psyCardPj.backgroundSocialSupportCont"/>
                                                    <span>Associazioni</span><br>
                                                    <input type="radio" name="background_social_support_cont" value="Amici conoscenti" v-model="psyCardPj.backgroundSocialSupportCont"/>
                                                    <span>Parrocchia</span><br>
                                                    <input type="radio" name="background_social_support_cont" value="Contatti sporadici" v-model="psyCardPj.backgroundSocialSupportCont"/>
                                                    <span>Associazioni sanitarie</span><br>

                                                    <input type="radio" name="background_social_support" value="altro" v-model="psyCardPj.backgroundSocialSupport"/>
                                                    <span>altro</span>
                                                    <input type="text" name="background_social_support_other" v-model="psyCardPj.backgroundSocialSupportOther"><br>

                                                    <input type="radio" name="background_social_support" value="Problematiche" v-model="psyCardPj.backgroundSocialSupport"/>
                                                    <span>Problematiche</span><br>
                                                    <input type="text" name="background_social_support_problem" v-model="psyCardPj.backgroundSocialSupportProblem">
                                                </span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <span class="item form-group">
                                                <label for="background_social_schooling" class="col-form-label col-md-3 col-sm-3 label-align"><h2><strong>Scolarità:</strong></h2></label><br>
                                                <span class="col-md-12 col-sm-12"><br>
                                                    <input type="radio" name="background_social_schooling" value="Analfabeta" v-model="psyCardPj.backgroundSocialSchooling"/>
                                                    <span>Analfabeta</span><br>
                                                    <input type="radio" name="background_social_schooling" value="Scuola primaria" v-model="psyCardPj.backgroundSocialSchooling"/>
                                                    <span>Scuola primaria</span><br>
                                                    <input type="radio" name="background_social_schooling" value="Scuola secondaria di primo grado" v-model="psyCardPj.backgroundSocialSchooling"/>
                                                    <span>Scuola secondaria di primo grado</span><br>
                                                    <input type="radio" name="background_social_schooling" value="Diploma scuola secondaria di secondo grado" v-model="psyCardPj.backgroundSocialSchooling"/>
                                                    <span>Diploma scuola secondaria di secondo grado</span><br>
                                                    <input type="radio" name="background_social_schooling" value="Laurea/post lauream" v-model="psyCardPj.backgroundSocialSchooling"/>
                                                    <span>Laurea/post lauream</span><br>
                                                </span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <span class="item form-group">
                                                <label for="background_social_work" class="col-form-label col-md-3 col-sm-3 label-align"><h2><strong>Supporto lavorativo/finanziario:</strong></h2></label><br>
                                                <span class="col-md-12 col-sm-12"><br>
                                                    <input type="radio" name="background_social_work" value="Impiego fisso" v-model="psyCardPj.backgroundSocialWork"/>
                                                    <span>Impiego fisso</span><br>
                                                    <input type="radio" name="background_social_work" value="Impiego part-time" v-model="psyCardPj.backgroundSocialWork"/>
                                                    <span>Impiego part-time</span><br>
                                                    <input type="radio" name="background_social_work" value="Impiego stagionale" v-model="psyCardPj.backgroundSocialWork"/>
                                                    <span>Impiego stagionale</span><br>
                                                    <input type="radio" name="background_social_work" value="Diploma scuola secondaria di secondo grado" v-model="psyCardPj.backgroundSocialWork"/>
                                                    <span>Studente</span><br>
                                                    <input type="radio" name="background_social_work" value="Assistente sociale" v-model="psyCardPj.backgroundSocialWork"/>
                                                    <span>Assistente sociale</span><br>
                                                    <input type="radio" name="background_social_work" value="Disabile" v-model="psyCardPj.backgroundSocialWork"/>
                                                    <span>Disabile</span><br>
                                                    <input type="radio" name="background_social_work" value="Attività criminale" v-model="psyCardPj.backgroundSocialWork"/>
                                                    <span>Attività criminale</span><br>
                                                    <input type="radio" name="background_social_work" value="Carcerazione" v-model="psyCardPj.backgroundSocialWork"/>
                                                    <span>Carcerazione</span><br>
                                                    <input type="radio" name="background_social_work" value="Nessun mezzo di sostentamento" v-model="psyCardPj.backgroundSocialWork"/>
                                                    <span>Nessun mezzo di sostentamento</span><br>

                                                    <span>Altro:</span>
                                                    <input type="text" name="background_social_work_other" value="Nessun mezzo di sostentamento" v-model="psyCardPj.backgroundSocialWorkOther"/>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="container" style="border: 1px solid black;">
                                    <!-- <h2>Background sociale</h2> -->



                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="substance_use" style="border: 1px solid black;" class="col-form-label col-md-2 col-sm-2 label-align"><strong>Uso di sostanze</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="radio" name="substance_use" value="1" v-model="psyCardPj.substanceUse"/>
                                                    <span>Si</span>
                                                    <input type="radio" name="substance_use" value="0" v-model="psyCardPj.substanceUse"/>
                                                    <span>No</span>
                                                </span>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="substance_use_tabacco" class="col-form-label col-md-1 col-sm-2 label-align"><strong>Tabacco:</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="radio" name="substance_use_tabacco" value="1" v-model="psyCardPj.substanceUseTabacco"/>
                                                    <span>Si</span>
                                                    <input type="radio" name="substance_use_tabacco" value="0" v-model="psyCardPj.substanceUseTabacco"/>
                                                    <span>No</span>
                                                </span>
                                            </div> 
                                        </div>
                                    </div>


                                    <table>
                                        <tr>
                                            <!-- <td></td>
                                            <td></td>
                                            <td>
                                                Abuso 
                                            </td> -->
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>uso</td>
                                            <td>attuale</td>
                                            <td>di lungo periodo</td>
                                            <td>precendente</td>

                                        </tr>
                                        <tr>
                                            <td>alcol</td>
                                            <td>
                                                <input type="radio" name="substance_use_alcol" value="uso" v-model="psyCardPj.substanceUseAlcol">
                                            </td>
                                            <td>
                                                <input type="radio" name="substance_use_alcol" value="attuale" v-model="psyCardPj.substanceUseAlcol">
                                            </td>
                                            <td>
                                                <input type="radio" name="substance_use_alcol" value="di lungo periodo" v-model="psyCardPj.substanceUseAlcol">
                                            </td>
                                            <td>
                                                <input type="radio" name="substance_use_alcol" value="precedente" v-model="psyCardPj.substanceUseAlcol">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Marijuana</td>
                                            <td>
                                                <input type="radio" name="substance_use_marijuana" value="uso" v-model="psyCardPj.substanceUseMarijuana">
                                            </td>
                                            <td>
                                                <input type="radio" name="substance_use_marijuana" value="attuale" v-model="psyCardPj.substanceUseMarijuana">
                                            </td>
                                            <td>
                                                <input type="radio" name="substance_use_marijuana" value="di lungo periodo" v-model="psyCardPj.substanceUseMarijuana">
                                            </td>
                                            <td>
                                                <input type="radio" name="substance_use_marijuana" value="precedente" v-model="psyCardPj.substanceUseMarijuana">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Eroina</td>
                                            <td>
                                                <input type="radio" name="substance_use_eroin" value="uso" v-model="psyCardPj.substanceUseEroin">
                                            </td>
                                            <td>
                                                <input type="radio" name="substance_use_eroin" value="attuale" v-model="psyCardPj.substanceUseEroin">
                                            </td>
                                            <td>
                                                <input type="radio" name="substance_use_eroin" value="di lungo periodo" v-model="psyCardPj.substanceUseEroin">
                                            </td>
                                            <td>
                                                <input type="radio" name="substance_use_eroin" value="precedente" v-model="psyCardPj.substanceUseEroin">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cocaina</td>
                                            <td>
                                                <input type="radio" name="substance_use_cocaine" value="uso" v-model="psyCardPj.substanceUseCocaine">
                                            </td>
                                            <td>
                                                <input type="radio" name="substance_use_cocaine" value="attuale" v-model="psyCardPj.substanceUseCocaine">
                                            </td>
                                            <td>
                                                <input type="radio" name="substance_use_cocaine" value="di lungo periodo" v-model="psyCardPj.substanceUseCocaine">
                                            </td>
                                            <td>
                                                <input type="radio" name="substance_use_cocaine" value="precedente" v-model="psyCardPj.substanceUseCocaine">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Metanfetamine</td>
                                            <td>
                                                <input type="radio" name="substance_use_metamphetamin" value="uso" v-model="psyCardPj.substanceUseMetamphetamin">
                                            </td>
                                            <td>
                                                <input type="radio" name="substance_use_metamphetamin" value="attuale" v-model="psyCardPj.substanceUseMetamphetamin">
                                            </td>
                                            <td>
                                                <input type="radio" name="substance_use_metamphetamin" value="di lungo periodo" v-model="psyCardPj.substanceUseMetamphetamin">
                                            </td>
                                            <td>
                                                <input type="radio" name="substance_use_metamphetamin" value="precedente" v-model="psyCardPj.substanceUseMetamphetamin">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>altro</td>
                                            <td>
                                                <input type="radio" name="substanceUseOther" value="uso" v-model="psyCardPj.substanceUseOther">
                                            </td>
                                            <td>
                                                <input type="radio" name="substanceUseOther" value="attuale" v-model="psyCardPj.substanceUseOther">
                                            </td>
                                            <td>
                                                <input type="radio" name="substanceUseOther" value="di lungo periodo" v-model="psyCardPj.substanceUseOther">
                                            </td>
                                            <td>
                                                <input type="radio" name="substanceUseOther" value="precedente" v-model="psyCardPj.substanceUseOther">
                                            </td>
                                        </tr>
                                    </table>

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="substance_use_description" class="col-form-label col-md-1 col-sm-2 label-align"><strong>Descrivere:</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="text" name="substance_use_description" value="1" v-model="psyCardPj.substanceUseDescription"/>                                                    
                                                </span>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="substance_use_intravenous_mode" class="col-form-label col-md-2 col-sm-2 label-align"><strong>Modalità intravenosa:</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="radio" name="substance_use_intravenous_mode" value="1" v-model="psyCardPj.substanceUseIntravenousMode"/>
                                                    <span>Si</span>
                                                    <input type="radio" name="substance_use_intravenous_mode" value="0" v-model="psyCardPj.substanceUseIntravenousMode"/>
                                                    <span>No</span>
                                                </span>
                                            </div> 
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="substance_use_current_methadone_treatment" class="col-form-label col-md-3 col-sm-2 label-align"><strong>Attuale trattamento metadonico:</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="radio" name="substance_use_current_methadone_treatment" value="1" v-model="psyCardPj.substanceUseCurrentMethadoneTreatment"/>
                                                    <span>Si</span>
                                                    <input type="radio" name="substance_use_current_methadone_treatment" value="0" v-model="psyCardPj.substanceUseCurrentMethadoneTreatment"/>
                                                    <span>No</span><br>

                                                    <input type="radio" name="substance_use_current_methadon_list" value="nel passato" v-model="psyCardPj.substanceUseCurrentMethadonList"/>
                                                    <span>nel passato</span><br>
                                                    <input type="radio" name="substance_use_current_methadon_list" value="meno 1 mese" v-model="psyCardPj.substanceUseCurrentMethadonList"/>
                                                    <span> meno 1 mese </span><br>
                                                    <input type="radio" name="substance_use_current_methadon_list" value="meno 1 anno" v-model="psyCardPj.substanceUseCurrentMethadonList"/>
                                                    <span> meno 1 anno </span><br>
                                                    <input type="radio" name="substance_use_current_methadon_list" value="più 1 anno" v-model="psyCardPj.substanceUseCurrentMethadonList"/>
                                                    <span> più 1 anno </span>
                                                </span>
                                            </div> 
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="substance_use_substance_abuse" class="col-form-label col-md-3 col-sm-2 label-align"><strong>Precedente trattamento per abuso di sostanze:</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="radio" name="substance_use_substance_abuse" value="1" v-model="psyCardPj.substanceUseSubstanceAbuse"/>
                                                    <span>Si</span>
                                                    <input type="radio" name="substance_use_substance_abuse" value="0" v-model="psyCardPj.substanceUseSubstanceAbuse"/>
                                                    <span>No</span><br>

                                                    <input type="radio" name="substance_use_substance_abuse_list" value="Alcolisti e Narcotici" v-model="psyCardPj.substanceUseSubstanceAbuseList"/>
                                                    <span>AA/NA Alcolisti e Narcotici anonimi</span><br>
                                                    <input type="radio" name="substance_use_substance_abuse_list" value="Disintossicazione" v-model="psyCardPj.substanceUseSubstanceAbuseList"/>
                                                    <span>Disintossicazione</span><br>
                                                    <input type="radio" name="substance_use_substance_abuse_list" value="Comunità terapeutica" v-model="psyCardPj.substanceUseSubstanceAbuseList"/>
                                                    <span> Comunità terapeutica</span><br>
                                                    <input type="radio" name="substance_use_substance_abuse_list" value="Trattamento in carcere" v-model="psyCardPj.substanceUseSubstanceAbuseList"/>
                                                    <span>Trattamento in carcere</span><br>
                                                    <input type="radio" name="substance_use_substance_abuse_list" value="Counseling" v-model="psyCardPj.substanceUseSubstanceAbuseList"/>
                                                    <span>Counseling</span><br>

                                                    <input type="radio" name="substance_use_substance_abuse_list" value="Counseling" v-model="psyCardPj.substanceUseSubstanceAbuseList"/>
                                                    <span>Altro</span>
                                                    <input type="text" name="substance_use_substance_abuse_other" v-model="psyCardPj.substanceUseSubstanceAbuseOther" />
                                                </span>
                                            </div> 
                                        </div>
                                    </div>
                                </div>


                                <div class="container" style="border: 1px solid black;">
                                    <!-- <h2>Background sociale</h2> -->

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="psyc_treatments" style="border: 1px solid black;" class="col-form-label col-md-2 col-sm-2 label-align"><strong>Trattamenti psichiatrici</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="radio" name="psyc_treatments" value="1" v-model="psyCardPj.psycTreatments"/>
                                                    <span>Si</span>
                                                    <input type="radio" name="psyc_treatments" value="0" v-model="psyCardPj.psycTreatments"/>
                                                    <span>No</span>
                                                </span>
                                            </div> 
                                        </div>
                                    </div>

                                    <table>
                                        <tr>
                                            <td>Ultimo mese</td>
                                            <td>Da sempre</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="psyc_treatments_clinical_evaluation_order" value="1" v-model="psyCardPj.psycTreatmentsClinicalEvaluationOrder"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="psyc_treatments_clinical_evaluation_order" value="1" v-model="psyCardPj.psycTreatmentsClinicalEvaluationOrder"/>
                                            </td>
                                            <td>
                                                <p>valutazione clinica</p>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="psyc_treatments_clinical_evaluation_order" value="1" v-model="psyCardPj.psycTreatmentsClinicalEvaluationOrder"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="psyc_treatments_clinical_evaluation_order" value="1" v-model="psyCardPj.psycTreatmentsClinicalEvaluationOrder"/>
                                            </td>
                                            <td>
                                                <p>valutazione clinica (su ordine del tribunale o di altra autorità)</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="psyc_treatments_clinical_evaluation_order" value="1" v-model="psyCardPj.psycTreatmentsClinicalEvaluationOrder"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="psyc_treatments_clinical_evaluation_order" value="1" v-model="psyCardPj.psycTreatmentsClinicalEvaluationOrder"/>
                                            </td>
                                            <td>
                                               <p>Trattamento - in istituzione carceraria</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="psyc_treatments_clinical_evaluation_order" value="1" v-model="psyCardPj.psycTreatmentsClinicalEvaluationOrder"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="psyc_treatments_clinical_evaluation_order" value="1" v-model="psyCardPj.psycTreatmentsClinicalEvaluationOrder"/>
                                            </td>
                                            <td>
                                                <p>Trattamento - in comunità</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="psyc_treatments_clinical_evaluation_order" value="1" v-model="psyCardPj.psycTreatmentsClinicalEvaluationOrder"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="psyc_treatments_clinical_evaluation_order" value="1" v-model="psyCardPj.psycTreatmentsClinicalEvaluationOrder"/>
                                            </td>
                                            <td>
                                                <p>Trattamento - ospedalizzato</p>
                                            </td>
                                            <td>
                                                <input type="radio" name="psyc_treatments" value="> 6 mesi" v-model="psyCardPj.psycTreatments"/>
                                                <span>> 6 mesi</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="psyc_treatments_clinical_evaluation_order" value="1" v-model="psyCardPj.psycTreatmentsClinicalEvaluationOrder"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="psyc_treatments_clinical_evaluation_order" value="1" v-model="psyCardPj.psycTreatmentsClinicalEvaluationOrder"/>
                                            </td>
                                            <td>
                                                <p>Trattamento - su ordine del tribunale o di altra autorità</p>
                                            </td>
                                            <td>
                                                <input type="radio" name="psyc_treatments" value="> 6 mesi" v-model="psyCardPj.psycTreatments"/>
                                                <span>> 6 mesi</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="psyc_treatments_clinical_evaluation_order" value="1" v-model="psyCardPj.psycTreatmentsClinicalEvaluationOrder"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="psyc_treatments_clinical_evaluation_order" value="1" v-model="psyCardPj.psycTreatmentsClinicalEvaluationOrder"/>
                                            </td>
                                            <td>
                                                <p>Terapia farmacologica</p>
                                            </td>
                                            <td>
                                                <input type="radio" name="psyc_treatments" value=" > 6 mesi" v-model="psyCardPj.psycTreatments"/>
                                                <span>> 6 mesi</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="item form-group">
                                                            <label for="psyc_treatments_type" class="col-form-label col-md-1 col-sm-2 label-align"><strong>Tipo:</strong></label>
                                                            <span class="col-md-12 col-sm-12">
                                                                <input type="text" name="psyc_treatments_type" v-model="psyCardPj.psycTreatmentsType"/>                                                    
                                                            </span>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="psyc_treatments_previous_trauma" class="col-form-label col-md-3 col-sm-2 label-align"><strong>Precedenti traumi cerebrali:</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="radio" name="psyc_treatments_previous_trauma" value="1" v-model="psyCardPj.psycTreatmentsPreviousTrauma"/>
                                                    <span>Si</span>
                                                    <input type="radio" name="psyc_treatments_previous_trauma" value="0" v-model="psyCardPj.psycTreatmentsPreviousTrauma"/>
                                                    <span>No</span>
                                                </span>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="psyc_treatments_previous_trauma_desc" class="col-form-label col-md-1 col-sm-2 label-align"><strong>Descrivere:</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="text" name="psyc_treatments_previous_trauma_desc" value="1" v-model="psyCardPj.psycTreatmentsPreviousTraumaDesc"/>
                                                </span>
                                            </div> 
                                        </div>
                                    </div>
                                </div>   
                                
                                
                                <div class="container" style="border: 1px solid black;">
                                    <!-- <h2>Background sociale</h2> -->

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="suicidal_risk" style="border: 1px solid black;" class="col-form-label col-md-4 col-sm-2 label-align"><strong>Rischio suicidario/autolesionismo</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="radio" name="suicidal_risk" value="1" v-model="psyCardPj.suicidalRisk"/>
                                                    <span>Si</span>
                                                    <input type="radio" name="suicidal_risk" value="0" v-model="psyCardPj.suicidalRisk"/>
                                                    <span>No</span>
                                                </span>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="suicidal_risk_number_attempts" class="col-form-label col-md-2 col-sm-2 label-align"><strong>Numero di tentativi:</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="text" name="suicidal_risk_number_attempts" v-model="psyCardPj.suicidalRiskNumberAttempts"/>
                                                </span>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="suicidal_risk_time_attempts" class="col-form-label col-md-3 col-sm-2 label-align"><strong>Tempo dall'ultimo tentativo:</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="text" name="suicidal_risk_time_attempts" v-model="psyCardPj.suicidalRiskTimeAttempts"/>
                                                </span>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="suicidal_risk_methods_weapon" class="col-form-label col-md-3 col-sm-2 label-align"><strong>Metodi utilizzati:</strong></label>
                                                <span class="col-md-12 col-sm-12"><br>
                                                    <input type="radio" name="suicidal_risk_methods_weapon" value="Arma da fuoco" v-model="psyCardPj.suicidalRiskMethodsWeapon"/>
                                                    <span>Arma da fuoco</span><br>
                                                    <input type="radio" name="suicidal_risk_methods_weapon" value="Salto/defenestrazione" v-model="psyCardPj.suicidalRiskMethodsWeapon"/>
                                                    <span>Salto/defenestrazione</span><br>
                                                    <input type="radio" name="suicidal_risk_methods_weapon" value="Dissanguamento" v-model="psyCardPj.suicidalRiskMethodsWeapon"/>
                                                    <span>Dissanguamento</span><br>
                                                    <input type="radio" name="suicidal_risk_methods_weapon" value="Overdose di farmaci" v-model="psyCardPj.suicidalRiskMethodsWeapon"/>
                                                    <span>Overdose di farmaci</span><br>
                                                    <input type="radio" name="suicidal_risk_methods_weapon" value="Impiccagione/asfissia" v-model="psyCardPj.suicidalRiskMethodsWeapon"/>
                                                    <span>Impiccagione/asfissia</span><br>
                                                    <input type="radio" name="suicidal_risk_methods_weapon" value="Avvelenamento monossido carbonio" v-model="psyCardPj.suicidalRiskMethodsWeapon"/>
                                                    <span>Avvelenamento da monossido di carbonio</span><br>
                                                    <input type="radio" name="suicidal_risk_methods_weapon" value="Autoveicolo" v-model="psyCardPj.suicidalRiskMethodsWeapon"/>
                                                    <span>Autoveicolo</span><br>

                                                    <input type="radio" name="suicidal_risk_methods_weapon" value="Autoveicolo" v-model="psyCardPj.suicidalRiskMethodsWeapon"/>
                                                    <span>Altro:</span>
                                                    <input type="text" name="suicidal_risk_methods_weapon_other" value="Autoveicolo" v-model="psyCardPj.suicidalRiskMethodsWeaponOther"/>
                                                </span>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="suicidal_risk_level_ideation" class="col-form-label col-md-4 col-sm-2 label-align"><strong>Livello dell'ideazione/intento suicidario attuale:</strong></label>
                                                <span class="col-md-12 col-sm-12"><br>
                                                    <input type="radio" name="suicidal_risk_level_ideation" value="Nessun proposito" v-model="psyCardPj.suicidalRiskLevelIdeation"/>
                                                    <span>Nessun proposito</span><br>
                                                    <input type="radio" name="suicidal_risk_level_ideation" value="Ideazione/nessun intento suicidio" v-model="psyCardPj.suicidalRiskLevelIdeation"/>
                                                    <span>Ideazione/ma nessun intento di attuare suicidio</span><br>
                                                    <input type="radio" name="suicidal_risk_level_ideation" value="Ideazione/qualche intenzione suicidio" v-model="psyCardPj.suicidalRiskLevelIdeation"/>
                                                    <span>Ideazione/qualche intenzione di attuare suicidio</span><br>
                                                    <input type="radio" name="suicidal_risk_level_ideation" value="Ideazione più o meno espressa/osservazione" v-model="psyCardPj.suicidalRiskLevelIdeation"/>
                                                    <span>Ideazione più o meno espressa/in osservazione</span><br>
                                                    <input type="radio" name="suicidal_risk_level_ideation" value="Intenzione suicidarsi durante la detenzione" v-model="psyCardPj.suicidalRiskLevelIdeation"/>
                                                    <span>Intenzione di commettere atti suicidari durante la detenzione</span><br>
                                                </span>
                                            </div> 
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="suicidal_risk_sucide_tentative" style="border: 1px solid black;" class="col-form-label col-md-4 col-sm-2 label-align"><strong>tentativi di suicidio durante il periodo detentivo:</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="radio" name="suicidal_risk_sucide_tentative" value="1" v-model="psyCardPj.suicidalRiskSucideTentative"/>
                                                    <span>Si</span>
                                                    <input type="radio" name="suicidal_risk_sucide_tentative" value="0" v-model="psyCardPj.suicidalRiskSucideTentative"/>
                                                    <span>No</span>
                                                </span>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="suicidal_risk_sucide_tentative_number" class="col-form-label col-md-2 col-sm-2 label-align"><strong>Numero di tentativi durante la detenzione:</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="text" name="suicidal_risk_sucide_tentative_number" v-model="psyCardPj.suicidalRiskSucideTentativeNumber"/>
                                                </span>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="suicidal_risk_tentative_time" class="col-form-label col-md-2 col-sm-2 label-align"><strong>Tempo dall'ultimo tentativo durante la detenzione:</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="text" name="suicidal_risk_tentative_time" v-model="psyCardPj.suicidalRiskTentativeTime"/>
                                                </span>
                                            </div> 
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="suicidal_risk_methods_two" class="col-form-label col-md-3 col-sm-2 label-align"><strong>Metodi utilizzati:</strong></label>
                                                <span class="col-md-12 col-sm-12"><br>
                                                    <input type="radio" name="suicidal_risk_methods_two" value="Dissanguamento" v-model="psyCardPj.suicidalRiskMethodsTwo"/>
                                                    <span>Dissanguamento</span><br>
                                                    <input type="radio" name="suicidal_risk_methods_two" value="Overdose di farmaci" v-model="psyCardPj.suicidalRiskMethodsTwo"/>
                                                    <span>Overdose di farmaci</span><br>
                                                    <input type="radio" name="suicidal_risk_methods_two" value="Impiccagione/asfissia" v-model="psyCardPj.suicidalRiskMethodsTwo"/>
                                                    <span>Impiccagione/asfissia</span><br>
                                    
                                                    <input type="radio" name="suicidal_risk_methods_two" value="altro" v-model="psyCardPj.suicidalRiskMethodsTwo"/>
                                                    <span>Altro:</span>
                                                    <input type="text" name="suicidal_risk_methods_two_other" value="Autoveicolo" v-model="psyCardPj.suicidalRiskMethodsTwoOther"/>
                                                </span>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="suicidal_risk_act_of_self_harm" class="col-form-label col-md-2 col-sm-2 label-align"><strong>Atti di autolesionismo:</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="radio" name="suicidal_risk_act_of_self_harm" value="1" v-model="psyCardPj.suicidalRiskActOfSelfHarm"/>
                                                    <span>Si</span>
                                                    <input type="radio" name="suicidal_risk_act_of_self_harm" value="0" v-model="psyCardPj.suicidalRiskActOfSelfHarm"/>
                                                    <span>No</span><br>

                                                    <span>descrivere:</span>
                                                    <input type="text" name="suicidal_risk_act_of_self_harm_desc" v-model="psyCardPj.suicidalRiskActOfSelfHarmDesc"/>
                                                </span>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="container" style="border: 1px solid black;">
                                    <!-- <h2>Background sociale</h2> -->
                                    <table>
                                        <tr>
                                            <td>Presente</td>
                                            <td>Possibile</td>
                                            <td>Assente</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="mental_conditions_somatic_concerns" value="Presente" v-model="psyCardPj.mentalConditionsSomaticConcerns"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_somatic_concerns" value="Possibile" v-model="psyCardPj.mentalConditionsSomaticConcerns"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_somatic_concerns" value="Assente" v-model="psyCardPj.mentalConditionsSomaticConcerns"/>
                                            </td>
                                            <td>
                                                <p> 1. Preoccupazioni somatiche</p>
                                            </td>
                                            <td>
                                                <p>Preoccupazioni realistiche o meno per la salute</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="mental_conditions_anxiety" value="Presente" v-model="psyCardPj.mentalConditionsAnxiety"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_anxiety" value="possibile" v-model="psyCardPj.mentalConditionsAnxiety"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_anxiety" value="assente" v-model="psyCardPj.mentalConditionsAnxiety"/>
                                            </td>
                                            <td>
                                                <p> 2. Ansia</p>
                                            </td>
                                            <td>
                                                <p>Riporta apprensione, tensione, paura, preoccupazione eccessiva</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="mental_conditions_depression" value="Presente" v-model="psyCardPj.mentalConditionsDepression"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_depression" value="Possibile" v-model="psyCardPj.mentalConditionsDepression"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_depression" value="Assente" v-model="psyCardPj.mentalConditionsDepression"/>
                                            </td>
                                            <td>
                                                <p> 3. Depressione</p>
                                            </td>
                                            <td>
                                                <p>Tristezza, anedonia, mancanza di autostima</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="mental_conditions_suicide" value="Presente" v-model="psyCardPj.mentalConditionsSuicide"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_suicide" value="Possibile" v-model="psyCardPj.mentalConditionsSuicide"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_suicide" value="Assente" v-model="psyCardPj.mentalConditionsSuicide"/>
                                            </td>
                                            <td>
                                                <p> 4. Suicidio</p>
                                            </td>
                                            <td>
                                                <p>Desiderio, intenzione o azioni dirette a danneggiare se stessi</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="mental_conditions_guilt" value="Presente" v-model="psyCardPj.mentalConditionsGuilt"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_guilt" value="Possibile" v-model="psyCardPj.mentalConditionsGuilt"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_guilt" value="Assente" v-model="psyCardPj.mentalConditionsGuilt"/>
                                            </td>
                                            <td>
                                                <p> 5. Senso di colpa</p>
                                            </td>
                                            <td>
                                                <p>Rimorsi, eccesso di preoccupazioni</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="mental_conditions_hostility" value="Presente" v-model="psyCardPj.mentalConditionsHostility"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_hostility" value="Possibile" v-model="psyCardPj.mentalConditionsHostility"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_hostility" value="Assente" v-model="psyCardPj.mentalConditionsHostility"/>
                                            </td>
                                            <td>
                                                <p> 6. Ostilità</p>
                                            </td>
                                            <td>
                                                <p>Minacce, otilità, distruzione di cose, litigi</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="mental_conditions_elevated_mood" value="Presente" v-model="psyCardPj.mentalConditionsElevatedMood"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_elevated_mood" value="Possibile" v-model="psyCardPj.mentalConditionsElevatedMood"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_elevated_mood" value="Assente" v-model="psyCardPj.mentalConditionsElevatedMood"/>
                                            </td>
                                            <td>
                                                <p> 7. Umore elevato</p>
                                            </td>
                                            <td>
                                                <p>Sentimenti pervasivi ed esagerati di benessere, euforia</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="mental_conditions_grandeur" value="Presente" v-model="psyCardPj.mentalConditionsGrandeur"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_grandeur" value="Possibile" v-model="psyCardPj.mentalConditionsGrandeur"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_grandeur" value="Assente" v-model="psyCardPj.mentalConditionsGrandeur"/>
                                            </td>
                                            <td>
                                                <p> 8. Grandiosità</p>
                                            </td>
                                            <td>
                                                <p>Opinione esagerata di sé, identificazioni grandiose</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="mental_conditions_suspiciousness" value="Presente" v-model="psyCardPj.mentalConditionsSuspiciousness"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_suspiciousness" value="Possibile" v-model="psyCardPj.mentalConditionsSuspiciousness"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_suspiciousness" value="Assente" v-model="psyCardPj.mentalConditionsSuspiciousness"/>
                                            </td>
                                            <td>
                                                <p> 9. Sospettosità</p>
                                            </td>
                                            <td>
                                                <p>Credenza che qualcuno agisca con intenti maliziosi</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="mental_conditions_allucination" value="Presente" v-model="psyCardPj.mentalConditionsAllucination"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_allucination" value="Possibile" v-model="psyCardPj.mentalConditionsAllucination"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_allucination" value="Assente" v-model="psyCardPj.mentalConditionsAllucination"/>
                                            </td>
                                            <td>
                                                <p> 10. Allucinazioni</p>
                                            </td>
                                            <td>
                                                <p>Esperienze percettive in assenza di stimoli esterni</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="mental_conditions_unusual_thought" value="Presente" v-model="psyCardPj.mentalConditionsUnusualThought"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_unusual_thought" value="Possibile" v-model="psyCardPj.mentalConditionsUnusualThought"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_unusual_thought" value="Assente" v-model="psyCardPj.mentalConditionsUnusualThought"/>
                                            </td>
                                            <td>
                                                <p> 11. Contenuto di pensiero inusuale</p>
                                            </td>
                                            <td>
                                                <p>Contenuti ideativi bizzarri, strani</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="mental_conditions_bizarre_behavior" value="Presente" v-model="psyCardPj.mentalConditionsBizarreBehavior"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_bizarre_behavior" value="Possibile" v-model="psyCardPj.mentalConditionsBizarreBehavior"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_bizarre_behavior" value="Assente" v-model="psyCardPj.mentalConditionsBizarreBehavior"/>
                                            </td>
                                            <td>
                                                <p> 12. Comportamenti bizzarri</p>
                                            </td>
                                            <td>
                                                <p>Comportamenti strani, inusuali, devianti</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="mental_conditions_neglect" value="Presente" v-model="psyCardPj.mentalConditionsNeglect"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_neglect" value="Possibile" v-model="psyCardPj.mentalConditionsNeglect"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_neglect" value="Assente" v-model="psyCardPj.mentalConditionsNeglect"/>
                                            </td>
                                            <td>
                                                <p> 13. Trascuratezza </p>
                                            </td>
                                            <td>
                                                <p>Incuria nell'igiene, nell'aspetto, nel comportamento alimentare</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="mental_conditions_disorientation" value="Presente" v-model="psyCardPj.mentalConditionsDisorientation"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_disorientation" value="Possibile" v-model="psyCardPj.mentalConditionsDisorientation"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_disorientation" value="Assente" v-model="psyCardPj.mentalConditionsDisorientation"/>
                                            </td>
                                            <td>
                                                <p> 14. Disorientamento</p>
                                            </td>
                                            <td>
                                                <p>Mancanza di comprensione delle situazioni e confusione</p>
                                            </td>
                                        </tr>
                                    </table>

                                    <h5 class="text-center pt-4 pb-4"><strong>Gli item da 15-24 vengono valutati sulla base del colloquio e del comportamento osservati durante l'intervista</strong></h5>

                                    <table>
                                        <tr>
                                            <td>Presente</td>
                                            <td>Possibile</td>
                                            <td>Assente</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="mental_conditions_disorganization" value="Presente" v-model="psyCardPj.mentalConditionsDisorganization"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_disorganization" value="Possibile" v-model="psyCardPj.mentalConditionsDisorganization"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_disorganization" value="Assente" v-model="psyCardPj.mentalConditionsDisorganization"/>
                                            </td>
                                            <td>
                                                <p> 15. Disorganizzazione</p>
                                            </td>
                                            <td>
                                                <p>Discorsi confusi, sconnessi, vaghi</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="mental_conditions_blankness" value="Presente" v-model="psyCardPj.mentalConditionsBlankness"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_blankness" value="possibile" v-model="psyCardPj.mentalConditionsBlankness"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_blankness" value="assente" v-model="psyCardPj.mentalConditionsBlankness"/>
                                            </td>
                                            <td>
                                                <p> 16. Inespressività</p>
                                            </td>
                                            <td>
                                                <p>Spettro ridotto di espressività emotiva, di faccia, voce, gesti</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="mental_conditions_reduced_emotion" value="Presente" v-model="psyCardPj.mentalConditionsReducedEmotion"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_reduced_emotion" value="Possibile" v-model="psyCardPj.mentalConditionsReducedEmotion"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_reduced_emotion" value="Assente" v-model="psyCardPj.mentalConditionsReducedEmotion"/>
                                            </td>
                                            <td>
                                                <p> 17. Emotività ridotta</p>
                                            </td>
                                            <td>
                                                <p>Incapacità di relazionarsi emotivamente durante il colloquio</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="mental_conditions_motor_slowdown" value="Presente" v-model="psyCardPj.mentalConditionsMotorSlowdown"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_motor_slowdown" value="Possibile" v-model="psyCardPj.mentalConditionsMotorSlowdown"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_motor_slowdown" value="Assente" v-model="psyCardPj.mentalConditionsMotorSlowdown"/>
                                            </td>
                                            <td>
                                                <p> 18. Rallentamento motorio</p>
                                            </td>
                                            <td>
                                                <p>Riduzione nel livello di energia, movimenti rallentati</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="mental_conditions_voltage" value="Presente" v-model="psyCardPj.mentalConditionsVoltage"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_voltage" value="Possibile" v-model="psyCardPj.mentalConditionsVoltage"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_voltage" value="Assente" v-model="psyCardPj.mentalConditionsVoltage"/>
                                            </td>
                                            <td>
                                                <p> 19. Tensione</p>
                                            </td>
                                            <td>
                                                <p>Nervosismo, agitazione</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="mental_conditions_not_cooperation" value="Presente" v-model="psyCardPj.mentalConditionsNotCooperation"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_not_cooperation" value="Possibile" v-model="psyCardPj.mentalConditionsNotCooperation"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_not_cooperation" value="Assente" v-model="psyCardPj.mentalConditionsNotCooperation"/>
                                            </td>
                                            <td>
                                                <p> 20. Non collaborazione</p>
                                            </td>
                                            <td>
                                                <p>Resistenza e mancanza di cooperazione durante l'intervista</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="mental_conditions_excitement" value="Presente" v-model="psyCardPj.mentalConditionsExcitement"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_excitement" value="Possibile" v-model="psyCardPj.mentalConditionsExcitement"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_excitement" value="Assente" v-model="psyCardPj.mentalConditionsExcitement"/>
                                            </td>
                                            <td>
                                                <p> 21. Eccitazione</p>
                                            </td>
                                            <td>
                                                <p>Tono emotivo aumentato, reattività all'intervistatore</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="mental_conditions_distractibility" value="Presente" v-model="psyCardPj.mentalConditionsDistractibility"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_distractibility" value="Possibile" v-model="psyCardPj.mentalConditionsDistractibility"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_distractibility" value="Assente" v-model="psyCardPj.mentalConditionsDistractibility"/>
                                            </td>
                                            <td>
                                                <p> 22. Distraibilità</p>
                                            </td>
                                            <td>
                                                <p>Eloquio e azioni interrotte da stimoli esterni al colloquio</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="mental_conditions_motor_hyperactivity" value="Presente" v-model="psyCardPj.mentalConditionsMotorHyperactivity"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_motor_hyperactivity" value="Possibile" v-model="psyCardPj.mentalConditionsMotorHyperactivity"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_motor_hyperactivity" value="Assente" v-model="psyCardPj.mentalConditionsMotorHyperactivity"/>
                                            </td>
                                            <td>
                                                <p> 23. Iperattività motoria</p>
                                            </td>
                                            <td>
                                                <p>Aumento del livello di energia verbale e comportamentale</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="mental_conditions_mannerisms" value="Presente" v-model="psyCardPj.mentalConditionsMannerisms"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_mannerisms" value="Possibile" v-model="psyCardPj.mentalConditionsMannerisms"/>
                                            </td>
                                            <td>
                                                <input type="radio" name="mental_conditions_mannerisms" value="Assente" v-model="psyCardPj.mentalConditionsMannerisms"/>
                                            </td>
                                            <td>
                                                <p> 24. Manierismi</p>
                                            </td>
                                            <td>
                                                <p>Movimenti stilizzati, posture inappropriate</p>
                                            </td>
                                        </tr>
                                    </table>

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="psychological_problems" class="col-form-label col-md-4 col-sm-2 label-align"><strong>Problematiche psicologico/psichiatriche :</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="radio" name="psychological_problems" value="1" v-model="psyCardPj.psychologicalProblems"/>
                                                    <span>Si</span>
                                                    <input type="radio" name="psychological_problems" value="0" v-model="psyCardPj.psychologicalProblems"/>
                                                    <span>No</span><br>

                                                    <input type="radio" name="psychological_problems_list" value="Stress situazione/depressione" v-model="psyCardPj.psychologicalProblemsList"/>
                                                    <span>Stress situazione/depressione</span><br>
                                                    <input type="radio" name="psychological_problems_list" value="Possibile ansia/disturbi dell'umore" v-model="psyCardPj.psychologicalProblemsList"/>
                                                    <span>Possibile ansia/disturbi dell'umore</span><br>
                                                    <input type="radio" name="psychological_problems_list" value="disturbi psicotici/bipolari/paziente compensato" v-model="psyCardPj.psychologicalProblemsList"/>
                                                    <span>Storia di disturbi psicotici/bipolari/paziente compensato</span><br>
                                                    <input type="radio" name="psychological_problems_list" value="Sintomi psicotici possibilmente ricorrenti/paziente scompensato" v-model="psyCardPj.psychologicalProblemsList"/>
                                                    <span>Sintomi psicotici possibilmente ricorrenti/paziente scompensato</span><br>
                                                    <input type="radio" name="psychological_problems_list" value="Psicosi attiva attuale" v-model="psyCardPj.psychologicalProblemsList"/>
                                                    <span>Psicosi attiva attuale</span><br>
                                                    <input type="radio" name="psychological_problems_list" value="Disabilità cognitiva/danno cerebrale" v-model="psyCardPj.psychologicalProblemsList"/>
                                                    <span>Disabilità cognitiva/danno cerebrale</span><br>
                                                    <input type="radio" name="psychological_problems_list" value="Tratti di disturbi di personalità" v-model="psyCardPj.psychologicalProblemsList"/>
                                                    <span>Tratti di disturbi di personalità</span><br>

                                                    <span>Altro:</span>
                                                    <input type="text" name="psychological_problems_other" v-model="psyCardPj.psychologicalProblemsOther"/>
                                                </span>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="reports" class="col-form-label col-md-2 col-sm-2 label-align"><strong>Segnalazioni :</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="radio" name="reports" value="1" v-model="psyCardPj.reports"/>
                                                    <span>Si</span>
                                                    <input type="radio" name="reports" value="0" v-model="psyCardPj.reports"/>
                                                    <span>No</span><br>

                                                    <input type="radio" name="reports_list" value="Monitoraggio psicologico" v-model="psyCardPj.reportsList"/>
                                                    <span>Monitoraggio/assessment psicologico</span><br>
                                                    <input type="radio" name="reports_list" value="Counseling" v-model="psyCardPj.reportsList"/>
                                                    <span>Counseling</span><br>
                                                    <input type="radio" name="reports_list" value="Centro di salute mentale" v-model="psyCardPj.reportsList"/>
                                                    <span>Centro di salute mentale/terapia farmacologica</span><br>
                                                    <input type="radio" name="reports_list" value="Programmi di disintossicazione droga/alcol" v-model="psyCardPj.reportsList"/>
                                                    <span>Programmi di disintossicazione per droga e alcol</span><br>
                                                    <input type="radio" name="reports_list" value="Richiesta interprete linguistico-culturale" v-model="psyCardPj.reportsList"/>
                                                    <span>Si richiede interprete o mediatore linguistico-culturale</span><br>
                                                    
                                                    <input type="radio" name="reports_list" value="Altro" v-model="psyCardPj.reportsList"/>
                                                    <span>Altro:</span>
                                                    <input type="text" name="reports_other" v-model="psyCardPj.reportsOther"/>
                                                </span>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="container" style="border: 1px solid black;">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group">
                                                    <label for="suicidal_risk_self_harm" class="col-form-label col-md-3 col-sm-2 label-align"><strong>Rischio suicidario/autolesionismo:</strong></label>
                                                    <span class="col-md-12 col-sm-12"><br>
                                                        <input type="radio" name="suicidal_risk_self_harm" value="Nessuna evidenza" v-model="psyCardPj.suicidalRiskSelfHarm"/>
                                                        <span>Nessuna evidenza</span>
                                                        <input type="radio" name="suicidal_risk_self_harm" value="Allarme" v-model="psyCardPj.suicidalRiskSelfHarm"/>
                                                        <span>Allarme</span>
                                                        <input type="radio" name="suicidal_risk_self_harm" value="Alto rischio" v-model="psyCardPj.suicidalRiskSelfHarm"/>
                                                        <span>Alto rischio</span>                                                                                         
                                                    </span>
                                                </div> 
                                            </div>
                                        </div>
    
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group">
                                                    <label for="risk_of_violence" class="col-form-label col-md-2 col-sm-2 label-align"><strong>Rischio di violenza:</strong></label>
                                                    <span class="col-md-12 col-sm-12"><br>
                                                        <input type="radio" name="risk_of_violence" value="Nessuna evidenza" v-model="psyCardPj.riskOfViolence"/>
                                                        <span>Nessuna evidenza</span>
                                                        <input type="radio" name="risk_of_violence" value="Allarme" v-model="psyCardPj.riskOfViolence"/>
                                                        <span>Allarme</span>
                                                        <input type="radio" name="risk_of_violence" value="Alto rischio" v-model="psyCardPj.riskOfViolence"/>
                                                        <span>Alto rischio</span>                                                                                          
                                                    </span>
                                                </div> 
                                            </div>
                                        </div>
    
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group">
                                                    <label for="risk_of_victimization" class="col-form-label col-md-3 col-sm-2 label-align"><strong>Rischio di vittimizzazione:</strong></label>
                                                    <span class="col-md-12 col-sm-12"><br>
                                                        <input type="radio" name="risk_of_victimization" value="Nessuna evidenza" v-model="psyCardPj.riskOfVictimization"/>
                                                        <span>Nessuna evidenza</span>
                                                        <input type="radio" name="risk_of_victimization" value="Allarme" v-model="psyCardPj.riskOfVictimization"/>
                                                        <span>Allarme</span>
                                                        <input type="radio" name="risk_of_victimization" value="Alto rischio" v-model="psyCardPj.riskOfVictimization"/>
                                                        <span>Alto rischio</span>                                                                                         
                                                    </span>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="particular_assignment" class="col-form-label col-md-3 col-sm-2 label-align"><strong>Assegnazione particolare :</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="radio" name="particular_assignment" value="1" v-model="psyCardPj.particularAssignment"/>
                                                    <span>Si</span>
                                                    <input type="radio" name="particular_assignment" value="0" v-model="psyCardPj.particularAssignment"/>
                                                    <span>No</span><br>

                                                    <input type="radio" name="particular_assignment_list" value="cella regolare/monitoraggio per i cambiamenti d'umore" v-model="psyCardPj.particularAssignmentList"/>
                                                    <span>Cella regolare/monitoraggio per i cambiamenti d'umore</span><br>
                                                    <input type="radio" name="particular_assignment_list" value="Cella regolare/due letti" v-model="psyCardPj.particularAssignmentList"/>
                                                    <span>Cella regolare/due letti</span><br>
                                                    <input type="radio" name="particular_assignment_list" value="Cella regolare/letto singolo" v-model="psyCardPj.particularAssignmentList"/>
                                                    <span>Cella regolare/letto singolo</span><br>
                                                    <input type="radio" name="particular_assignment_list" value="Custodia protettiva" v-model="psyCardPj.particularAssignmentList"/>
                                                    <span>Custodia protettiva</span><br>
                                                    <input type="radio" name="particular_assignment_list" value="Unità per detenuti mentalmente disturbati" v-model="psyCardPj.particularAssignmentList"/>
                                                    <span>Unità per detenuti mentalmente disturbati</span><br>
                                                    <input type="radio" name="particular_assignment_list" value="Isolamento" v-model="psyCardPj.particularAssignmentList"/>
                                                    <span>Isolamento</span><br>
                                                    <input type="radio" name="particular_assignment_list" value="Osservazione" v-model="psyCardPj.particularAssignmentList"/>
                                                    <span>Osservazione</span><br>
                                                    <input type="radio" name="particular_assignment_list" value="Cella stabile(silenziosa)" v-model="psyCardPj.particularAssignmentList"/>
                                                    <span>Cella stabile(silenziosa)</span><br>
                                                    
                                                    <input type="radio" name="particular_assignment_list" value="Altro" v-model="psyCardPj.particularAssignmentList"/>
                                                    <span>Altro:</span>
                                                    <input type="text" name="particular_assignment_other" v-model="psyCardPj.particularAssignmentOther"/>
                                                </span>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="container" style="border: 1px solid black;">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="comment_clarifications" class="col-form-label col-md-3 col-sm-2 label-align"><strong>Commenti/chiarificazioni:</strong></label>
                                                <span class="col-md-12 col-sm-12"><br>
                                                    <textarea name="comment_clarifications" cols="100" rows="10" v-model="psyCardPj.commentClarifications"></textarea>                                                                          
                                                </span>
                                            </div> 
                                        </div>
                                    </div>
                                </div>




                                {{ psyCardPj }}
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="pull-right">
                                        <span class="btn btn-success i2hBtn ml-3" @click="addPsyJsat('pj')">{{btnPjSend}}</span>
                                    </div>
                                </div>
                            </form>
                        </div> 
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

// *p{
//     margin-left: 15px;
// }


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

ul, li{
    list-style: none;
}

</style>



<script>

import * as actions from "../config/ApiUrl";
import axios from 'axios';
import Swal from 'sweetalert2';

export default {
    name: 'PsyJsat',

    data() {
        return {
            userName: 'Andrea',
            userLastName:'Giovanni',
            userFullName:'',
            userInstance:1,
            userId:0,
        
            accessData:[
               
                id => 14,
                name => 'Alessio',
                lastname => 'Ortu',  
            ],

            psyPjDoctorId:0,
            psyPjDoctorName:'',
            psyPjDoctorLastname:'',
            psyPjDate:null,
            psyCardId:null,
            date:new Date(),

            psyCardPj:{},
            // psyhowFeel:{},



            panel:'pj',



            mainTitle:"psy",
            firstSave:true,
            pJSaved:false,

            
            btnPjSend:"Salva",
            total:0,               
            allPsyJsats:null,
        }
    },

    created: function () {
        // this.getPermissions();
        this.getPsyJsatsByUserInstanceId(1);
    },


    methods: {
 
        addPsyJsat(panel){
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
            
            if(_panel=='pj'){

                if(!this.pHSaved){
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
                form.append('section', 'pj');
                if(!this.isObjEmpty(this.psyCardPj)){
                    // alert(JSON.stringify(this.psyCardPj));
                    let _psyCardPj=JSON.stringify(this.psyCardPj);
                    form.append('psyCardPj', _psyCardPj);
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
                            this.getPsyJsatsByUserInstanceId(this.userInstance);
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

        getPsyJsets(){
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

        getPsyJsatById(id){
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

        getPsyJsatsByUserInstanceId(id){
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
                        if(response.data.PsyJsat){
                            _wm.pJSaved=true;
                            _wm.btnPjSend="Aggiorna";

                            let _psyJsa=response.data.PsyJsat;
                            // _wm.psyCardId=response.data.psyCard.id;
                            _wm.psyCardId=response.data.psyCard.id;
                            _wm.psyPjDoctorId = _psyJsa.id_doctor;
                            _wm.psyPjDoctorName = _psyJsa.doctor_name;
                            _wm.psyPjDoctorLastname = _psyJsa.doctor_lastname;

                            _wm.psyCardPj.entryDate =_psyJsa.entry_date;
                            _wm.psyCardPj.valutationDate = _psyJsa.valutation_date 	
                            _wm.psyCardPj.informationAge = _psyJsa.information_age 
                            _wm.psyCardPj.informationLanguage = _psyJsa.information_language
                            _wm.psyCardPj.informationLevelLanguage = _psyJsa.information_level_language
                            _wm.psyCardPj.informationNativeLanguage = _psyJsa.information_native_language 

                            _wm.psyCardPj.informationBackground = _psyJsa.information_background
                            _wm.psyCardPj.informationBackgroundOther = _psyJsa.information_background_other
                            _wm.psyCardPj.legalSituationNow = _psyJsa.legal_situation_now 
                            _wm.psyCardPj.legalSituationCrimeCommitted = _psyJsa.legal_situation_crime_committed
                            _wm.psyCardPj.legalSituationCrimeCommittedOther = _psyJsa.legal_situation_crime_committed_other 

                            _wm.psyCardPj.legalSituationPreviousIncarceration = _psyJsa.legal_situation_previous_incarceration
                            _wm.psyCardPj.legalSituationPreviousIncarcerationIf = _psyJsa.legal_situation_previous_incarceration_if 
                            _wm.psyCardPj.legalSituationPreviousIncarcerationIfProminence = _psyJsa.legal_situation_previous_incarceration_if_prominence

                            _wm.psyCardPj.criminalRecord = _psyJsa.criminal_record
                            _wm.psyCardPj.criminalRecordCondemnation = _psyJsa.criminal_record_condemnation

                            _wm.psyCardPj.violentBehaviorActsAggression = _psyJsa.violent_behavior_acts_aggression 
                            _wm.psyCardPj.violentBehaviorActsAggressionDesc = _psyJsa.violent_behavior_acts_aggression_desc
                            _wm.psyCardPj.violentBehaviorViolentCrimes = _psyJsa.violent_behavior_violent_crimes 
                            _wm.psyCardPj.violentBehaviorCrimesType = _psyJsa.violent_behavior_crimes_type 
                            _wm.psyCardPj.violentBehaviorDuringIncarceration = _psyJsa.violent_behavior_during_incarceration 
                            _wm.psyCardPj.violentBehaviorAggressionProceeding = _psyJsa.violent_behavior_aggression_proceeding 
                            _wm.psyCardPj.violentBehaviorAggressionProceedingDesc = _psyJsa.violent_behavior_aggression_proceeding_desc
                            _wm.psyCardPj.violentBehaviorLastAggression = _psyJsa.violent_behavior_last_aggression
                            _wm.psyCardPj.violentAggressionNow = _psyJsa.violent_aggression_now 

                            _wm.psyCardPj.backgroundSocialMaritalStatus = _psyJsa.background_social_marital_status 
                            _wm.psyCardPj.backgroundSocialStabilityRelation = _psyJsa.background_social_stability_relation
                            _wm.psyCardPj.backgroundSocialRelationProblem = _psyJsa.background_social_relation_problem 
                            _wm.psyCardPj.backgroundSocialSons = _psyJsa.background_social_sons 
                            _wm.psyCardPj.backgroundSocialSonsProblem = _psyJsa.background_social_sons_problem
                            _wm.psyCardPj.backgroundSocialSituationHouse = _psyJsa.background_social_situation_house 
                            _wm.psyCardPj.backgroundSocialSituationHouseOther = _psyJsa.background_social_situation_house_other
                            _wm.psyCardPj.backgroundSocialSupportFamily = _psyJsa.background_social_support_family
                            _wm.psyCardPj.backgroundSocialSupportFamilyCont = _psyJsa.background_social_support_family_cont
                            _wm.psyCardPj.backgroundSocialSupportFamilyProblem = _psyJsa.background_social_support_family_problem
                            _wm.psyCardPj.backgroundSocialSupport = _psyJsa.background_social_support
                            _wm.psyCardPj.backgroundSocialSupportCont = _psyJsa.background_social_support_cont 
                            _wm.psyCardPj.backgroundSocialSupportOther = _psyJsa.background_social_support_other 
                            _wm.psyCardPj.backgroundSocialSupportProblem = _psyJsa.background_social_support_problem
                            _wm.psyCardPj.backgroundSocialSchooling = _psyJsa.background_social_schooling 
                            _wm.psyCardPj.backgroundSocialWork = _psyJsa.background_social_work
                            _wm.psyCardPj.backgroundSocialWorkOther = _psyJsa.background_social_work_other 



                            _wm.psyCardPj.substanceUse = _psyJsa.substance_use
                            _wm.psyCardPj.substanceUseTabacco = _psyJsa.substance_use_tabacco 
                            _wm.psyCardPj.substanceUseAlcol = _psyJsa.substance_use_alcol 
                            _wm.psyCardPj.substanceUseMarijuana = _psyJsa.substance_use_marijuana
                            _wm.psyCardPj.substanceUseEroin = _psyJsa.substance_use_eroin 
                            _wm.psyCardPj.substanceUseCocaine = _psyJsa.substance_use_cocaine
                            _wm.psyCardPj.substanceUseMetamphetamin = _psyJsa.substance_use_metamphetamin 
                            _wm.psyCardPj.substanceUseOther = _psyJsa.substance_use_other

                            _wm.psyCardPj.substanceUseDescription = _psyJsa.substance_use_description

                            _wm.psyCardPj.substanceUseIntravenousMode = _psyJsa.substance_use_intravenous_mode 
                            _wm.psyCardPj.substanceUseCurrentMethadoneTreatment = _psyJsa.substance_use_current_methadone_treatment
                            _wm.psyCardPj.substanceUseCurrentMethadonList = _psyJsa.substance_use_current_methadon_list
                            _wm.psyCardPj.substanceUseSubstanceAbuse = _psyJsa.substance_use_substance_abuse 
                            _wm.psyCardPj.substanceUseSubstanceAbuseList = _psyJsa.substance_use_substance_abuse_list
                            _wm.psyCardPj.substanceUseSubstanceAbuseOther = _psyJsa.substance_use_substance_abuse_other 

                            _wm.psyCardPj.psycTreatments = _psyJsa.psyc_treatments
                            _wm.psyCardPj.psycTreatmentsClinicalEvaluation = _psyJsa.psyc_treatments_clinical_evaluation 
                            _wm.psyCardPj.psycTreatmentsClinicalEvaluationOrder = _psyJsa.psyc_treatments_clinical_evaluation_order 
                            _wm.psyCardPj.psycTreatmentsInPrison = _psyJsa.psyc_treatments_in_prison
                            _wm.psyCardPj.psycTreatmentsComunity = _psyJsa.psyc_treatments_comunity 
                            _wm.psyCardPj.psycTreatmentsHospital = _psyJsa.psyc_treatments_hospital
                            _wm.psyCardPj.psycTreatmentsCourtOrder = _psyJsa.psyc_treatments_court_order 
                            _wm.psyCardPj.psycTreatmentsFarmacy = _psyJsa.psyc_treatments_farmacy
                            _wm.psyCardPj.psycTreatmentsType = _psyJsa.psyc_treatments_type 
                            _wm.psyCardPj.psycTreatmentsPreviousTrauma = _psyJsa.psyc_treatments_previous_trauma 
                            _wm.psyCardPj.psycTreatmentsPreviousTraumaDesc = _psyJsa.psyc_treatments_previous_trauma_desc

                            _wm.psyCardPj.suicidalRisk = _psyJsa.suicidal_risk 
                            _wm.psyCardPj.suicidalRiskNumberAttempts = _psyJsa.suicidal_risk_number_attempts
                            _wm.psyCardPj.suicidalRiskTimeAttempts = _psyJsa.suicidal_risk_time_attempts 
                            _wm.psyCardPj.suicidalRiskMethodsWeapon = _psyJsa.suicidal_risk_methods_weapon 
                            _wm.psyCardPj.suicidalRiskMethodsWeaponOther = _psyJsa.suicidal_risk_methods_weapon_other
                            _wm.psyCardPj.suicidalRiskLevelIdeation = _psyJsa.suicidal_risk_level_ideation 
                            _wm.psyCardPj.suicidalRiskSucideTentative = _psyJsa.suicidal_risk_sucide_tentative 
                            _wm.psyCardPj.suicidalRiskSucideTentativeNumber = _psyJsa.suicidal_risk_sucide_tentative_number
                            _wm.psyCardPj.suicidalRiskTentativeTime = _psyJsa.suicidal_risk_tentative_time 
                            _wm.psyCardPj.suicidalRiskMethodsTwo = _psyJsa.suicidal_risk_methods_two 
                            _wm.psyCardPj.suicidalRiskActOfSelfHarm = _psyJsa.suicidal_risk_act_of_self_harm 
                            _wm.psyCardPj.suicidalRiskActOfSelfHarmDesc = _psyJsa.suicidal_risk_act_of_self_harm_desc 







                            _wm.psyCardPj.mentalConditionsSomaticConcerns = _psyJsa.mental_conditions_somatic_concerns
                            _wm.psyCardPj.mentalConditionsAnxiety = _psyJsa.mental_conditions_anxiety 
                            _wm.psyCardPj.mentalConditionsDepression = _psyJsa.mental_conditions_depression 
                            _wm.psyCardPj.mentalConditionsSuicide = _psyJsa.mental_conditions_suicide
                            _wm.psyCardPj.mentalConditionsGuilt = _psyJsa.mental_conditions_guilt 
                            _wm.psyCardPj.mentalConditionsHostility = _psyJsa.mental_conditions_hostility
                            _wm.psyCardPj.mentalConditionsElevatedMood = _psyJsa.mental_conditions_elevated_mood 
                            _wm.psyCardPj.mentalConditionsGrandeur = _psyJsa.mental_conditions_grandeur
                            _wm.psyCardPj.mentalConditionsSuspiciousness = _psyJsa.mental_conditions_suspiciousness 
                            _wm.psyCardPj.mentalConditionsAllucination = _psyJsa.mental_conditions_allucination 
                            _wm.psyCardPj.mentalConditionsUnusualThought = _psyJsa.mental_conditions_unusual_thought

                            _wm.psyCardPj.mentalConditionsBizarreBehavior = _psyJsa.mental_conditions_bizarre_behavior 
                            _wm.psyCardPj.mentalConditionsNeglect = _psyJsa.mental_conditions_neglect
                            _wm.psyCardPj.mentalConditionsDisorientation = _psyJsa.mental_conditions_disorientation 
                            _wm.psyCardPj.mentalConditionsDisorganization = _psyJsa.mental_conditions_disorganization 
                            _wm.psyCardPj.mentalConditionsBlankness = _psyJsa.mental_conditions_blankness
                            _wm.psyCardPj.mentalConditionsReducedEmotion = _psyJsa.mental_conditions_reduced_emotion 
                            _wm.psyCardPj.mentalConditionsMotorSlowdown = _psyJsa.mental_conditions_motor_slowdown 
                            _wm.psyCardPj.mentalConditionsVoltage = _psyJsa.mental_conditions_voltage
                            _wm.psyCardPj.mentalConditionsNotCooperation = _psyJsa.mental_conditions_not_cooperation 
                            _wm.psyCardPj.mentalConditionsExcitement = _psyJsa.mental_conditions_excitement 
                            _wm.psyCardPj.mentalConditionsDistractibility = _psyJsa.mental_conditions_distractibility 
                            _wm.psyCardPj.mentalConditionsMotorHyperactivity = _psyJsa.mental_conditions_motor_hyperactivity 
                            _wm.psyCardPj.mentalConditionsMannerisms = _psyJsa.mental_conditions_mannerisms 





                            _wm.psyCardPj.psychologicalProblems = _psyJsa.psychological_problems
                            _wm.psyCardPj.psychologicalProblemsList = _psyJsa.psychological_problems_list 
                            _wm.psyCardPj.psychologicalProblemsOther = _psyJsa.psychological_problems_other

                            _wm.psyCardPj.reports = _psyJsa.reports 
                            _wm.psyCardPj.reportsList = _psyJsa.reports_list 
                            _wm.psyCardPj.reportsOther = _psyJsa.reports_other
                            
                            _wm.psyCardPj.suicidalRiskSelfHarm = _psyJsa.suicidal_risk_self_harm
                            _wm.psyCardPj.riskOfViolence = _psyJsa.risk_of_violence 
                            _wm.psyCardPj.riskOfVictimization = _psyJsa.risk_of_victimization 
                            _wm.psyCardPj.particularAssignment = _psyJsa.particular_assignment 
                            _wm.psyCardPj.particularAssignmentList = _psyJsa.particular_assignment_list 
                            _wm.psyCardPj.particularAssignmentOther = _psyJsa.particular_assignment_other

                            _wm.psyCardPj.commentClarifications = _psyJsa.comment_clarifications

                            
                            _wm.allPsyJsats=response.data.allPsyJsats;
                        }else{
                            _wm.btnPjSend="Salva";
                        }
                        
                        _wm.firstSave=false;
                    }else if(error == 7){
                        _wm.btnPjSend="Salva";
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
