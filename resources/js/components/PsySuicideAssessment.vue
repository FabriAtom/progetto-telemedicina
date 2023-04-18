<!-- SUICIDE ASSESSMENT -->
<!-- PRIMO FASCICOLO INIZIATO CON SUM SCORE -->
<template>
    <div class="container">
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <h1 class="text-center"><strong> SAMI</strong></h1>
                        <h3 class="text-center">Modulo di valutazione</h3><hr>
                        <div class="x_title" style="background:lightgrey;padding:7px; border-radius:3px; margin-top:5px;">
                            <span style="margin-left:10px;" ><strong>Fattori di rischio</strong></span>
                            <span style="margin-left:510px;"><strong>Scala (0, 1, 2)</strong></span>
                        </div>

                        <div class="x_content">

                            <!-- <div class="tab-content" id="myTabContent"> -->

                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left align-items-center">

                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="marital_status" class="col-form-label col-md-6 col-sm-2 label-align">1. Stato civile</label>
                                                <span class="col-md-12 col-sm-12">
                                                    <span> Zero</span>
                                                    <input type="radio" @change="calculateSum()"  name="marital_status" value="0"  v-model="psyriskFactor.maritalStatus"/>
                                                    <span> Uno</span>
                                                    <input type="radio" @change="calculateSum()"  name="marital_status" value="1"  v-model="psyriskFactor.maritalStatus"/>
                                                    <span>Due</span> 
                                                    <input type="radio" @change="calculateSum()"  name="marital_status" value="2"  v-model="psyriskFactor.maritalStatus"/> 
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group" >
                                                <label for="drug_and_alcohol_abuse" class="col-form-label col-md-6 col-sm-2 label-align">2. Abuso di droga o alcol</label>
                                                <span class="col-md-12 col-sm-12">
                                                    <span>Zero</span>
                                                    <input type="radio"  @change="calculateSum()" name="drug_and_alcohol_abuse" value="0" v-model="psyriskFactor.drugAndAlcoholAbuse"/>
                                                    <span>Uno</span>
                                                    <input type="radio"  @change="calculateSum()" name="drug_and_alcohol_abuse" value="1" v-model="psyriskFactor.drugAndAlcoholAbuse"/>
                                                    <span>Due</span> 
                                                    <input type="radio"  @change="calculateSum()" name="drug_and_alcohol_abuse" value="2" v-model="psyriskFactor.drugAndAlcoholAbuse"/> 
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group" >
                                                <label for="psychiatric_aspect" class="col-form-label col-md-6 col-sm-2 label-align">3. Aspetti psichiatrici</label>
                                                <span class="col-md-12 col-sm-12 ">
                                                    <span>Zero</span>
                                                    <input type="radio"  @change="calculateSum()" name="psychiatric_aspect" value="0" v-model="psyriskFactor.psychiatricAspect"/>
                                                    <span>Uno</span>
                                                    <input type="radio"  @change="calculateSum()" name="psychiatric_aspect" value="1" v-model="psyriskFactor.psychiatricAspect"/>
                                                    <span>Due</span> 
                                                    <input type="radio"  @change="calculateSum()" name="psychiatric_aspect" value="2" v-model="psyriskFactor.psychiatricAspect"/> 
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group" >
                                                <label for="suicide_attempt" class="col-form-label col-md-6 col-sm-2 label-align">4. Tentativi di suicidio</label>
                                                <span class="col-md-12 col-sm-12">
                                                    <span>Zero</span>
                                                    <input type="radio"  @change="calculateSum()" name="suicide_attempt" value="0" v-model="psyriskFactor.suicideAttempt"/>
                                                    <span>Uno</span>
                                                    <input type="radio"  @change="calculateSum()" name="suicide_attempt" value="1" v-model="psyriskFactor.suicideAttempt"/>
                                                    <span>Due</span> 
                                                    <input type="radio"  @change="calculateSum()" name="suicide_attempt" value="2" v-model="psyriskFactor.suicideAttempt"/> 
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group" >
                                                <label for="suicide_attempt_in_institution" class="col-form-label col-md-6 col-sm-2 label-align">5. Tentativi di suicidio nelle istituzioni</label>
                                                <span class="col-md-12 col-sm-12">
                                                    <span>Zero</span>
                                                    <input type="radio"  @change="calculateSum()" name="suicide_attempt_in_institution" value="0" v-model="psyriskFactor.suicideAttemptInInstitution"/>
                                                    <span>Uno</span>
                                                    <input type="radio"  @change="calculateSum()" name="suicide_attempt_in_institution" value="1" v-model="psyriskFactor.suicideAttemptInInstitution"/>
                                                    <span>Due</span> 
                                                    <input type="radio"   @change="calculateSum()" name="suicide_attempt_in_institution" value="2" v-model="psyriskFactor.suicideAttemptInInstitution"/> 
                                                </span>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group" >
                                                <label for="family_suicide" class="col-form-label col-md-6 col-sm-2 label-align">6. Suicidi in famiglia</label>
                                                <span class="col-md-12 col-sm-12">
                                                    <span>Zero</span>
                                                    <input type="radio"  @change="calculateSum()" name="family_suicide" value="0" v-model="psyriskFactor.familySuicide"/>
                                                    <span>Uno</span>
                                                    <input type="radio"  @change="calculateSum()" name="family_suicide" value="1" v-model="psyriskFactor.familySuicide"/>
                                                    <span>Due</span> 
                                                    <input type="radio"  @change="calculateSum()" name="family_suicide" value="2" v-model="psyriskFactor.familySuicide"/> 
                                                </span>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="arrest_story" class="col-form-label col-md-6 col-sm-2 label-align">7. Storia dell'arresto</label>
                                                <span class="col-md-12 col-sm-12 ">
                                                    <span>Zero</span>
                                                    <input type="radio"  @change="calculateSum()" name="arrest_story" value="0" v-model="psyriskFactor.arrestStory"/>
                                                    <span>Uno</span>
                                                    <input type="radio"  @change="calculateSum()" name="arrest_story" value="1" v-model="psyriskFactor.arrestStory"/>
                                                    <span>Due</span> 
                                                    <input type="radio"  @change="calculateSum()" name="arrest_story" value="2" v-model="psyriskFactor.arrestStory"/> 
                                                </span>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="compulsive_behavior" class="col-form-label col-md-6 col-sm-2 label-align">8. Comportamento impulsivo</label>
                                                <span class="col-md-12 col-sm-12">
                                                    <span>Zero</span>
                                                    <input type="radio"  @change="calculateSum()" name="compulsive_behavior" value="0" v-model="psyriskFactor.compulsiveBehavior"/>
                                                    <span>Uno</span>
                                                    <input type="radio"  @change="calculateSum()" name="compulsive_behavior" value="1" v-model="psyriskFactor.compulsiveBehavior"/>
                                                    <span>Due</span> 
                                                    <input type="radio"  @change="calculateSum()" name="compulsive_behavior" value="2" v-model="psyriskFactor.compulsiveBehavior"/> 
                                                </span>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group" >
                                                <label for="high_crime_profile" class="col-form-label col-md-6 col-sm-2 label-align">9. Alto profilo del delitto o posizione di prestigio</label>
                                                <span class="col-md-12 col-sm-12">
                                                    <span>Zero</span>
                                                    <input type="radio"  @change="calculateSum()" name="high_crime_profile" value="0" v-model="psyriskFactor.highCrimeProfile"/>
                                                    <span>Uno</span>
                                                    <input type="radio"  @change="calculateSum()" name="high_crime_profile" value="1" v-model="psyriskFactor.highCrimeProfile"/>
                                                    <span>Due</span> 
                                                    <input type="radio"  @change="calculateSum()" name="high_crime_profile" value="2" v-model="psyriskFactor.highCrimeProfile"/> 
                                                </span>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group" >
                                                <label for="current_intoxication" class="col-form-label col-md-6 col-sm-2 label-align">10. Intossicazione attuale</label>
                                                <span class="col-md-12 col-sm-12">
                                                    <span>Zero</span>
                                                    <input type="radio"  @change="calculateSum()" name="current_intoxication" value="0" v-model="psyriskFactor.currentIntoxication"/>
                                                    <span>Uno</span>
                                                    <input type="radio"  @change="calculateSum()" name="current_intoxication" value="1" v-model="psyriskFactor.currentIntoxication"/>
                                                    <span>Due</span> 
                                                    <input type="radio"  @change="calculateSum()" name="current_intoxication" value="2" v-model="psyriskFactor.currentIntoxication"/> 
                                                </span>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group" >
                                                <label for="worry_about_life_problem" class="col-form-label col-md-6 col-sm-2 label-align-end">11. Preoccupazione per i problemi della vita</label>
                                                <span class="col-md-12 col-sm-12">
                                                    <span>Zero</span>
                                                    <input type="radio"   @change="calculateSum()" name="worry_about_life_problem" value="0" v-model="psyriskFactor.worryAboutLifeProblem"/>
                                                    <span>Uno</span>
                                                    <input type="radio"  @change="calculateSum()" name="worry_about_life_problem" value="1" v-model="psyriskFactor.worryAboutLifeProblem"/>
                                                    <span>Due</span> 
                                                    <input type="radio"  @change="calculateSum()" name="worry_about_life_problem" value="2" v-model="psyriskFactor.worryAboutLifeProblem"/> 
                                                </span>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group" >
                                                <label for="feeling_of_hopelessness" class="col-form-label col-md-6 col-sm-2 label-align">12. Sentimenti di disperazione o di eccessivi sensi di colpa</label>
                                                <span class="col-md-12 col-sm-12">
                                                    <span>Zero</span>
                                                    <input type="radio"  @change="calculateSum()" name="feeling_of_hopelessness" value="0" v-model="psyriskFactor.feelingOfHopelessness"/>
                                                    <span>Uno</span>
                                                    <input type="radio"  @change="calculateSum()" name="feeling_of_hopelessness" value="1" v-model="psyriskFactor.feelingOfHopelessness"/>
                                                    <span>Due</span> 
                                                    <input type="radio"  @change="calculateSum()" name="feeling_of_hopelessness" value="2" v-model="psyriskFactor.feelingOfHopelessness"/> 
                                                </span>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group" >
                                                <label for="psychotic_symptom" class="col-form-label col-md-6 col-sm-2 label-align">13. Sintomi psicotici o disturbi del pensiero</label>
                                                <span class="col-md-12 col-sm-12">
                                                    <span>Zero</span>
                                                    <input type="radio"  @change="calculateSum()" name="psychotic_symptom" value="0" v-model="psyriskFactor.psychoticSymptom"/>
                                                    <span>Uno</span>
                                                    <input type="radio"  @change="calculateSum()" name="psychotic_symptom" value="1" v-model="psyriskFactor.psychoticSymptom"/>
                                                    <span>Due</span> 
                                                    <input type="radio"  @change="calculateSum()" name="psychotic_symptom" value="2" v-model="psyriskFactor.psychoticSymptom"/> 
                                                </span>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group" >
                                                <label for="depressive_symptom" class="col-form-label col-md-6 col-sm-2 label-align">14. Sintomatologia depressiva</label>
                                                <span class="col-md-12 col-sm-12">
                                                    <span>Zero</span>
                                                    <input type="radio"  @change="calculateSum()" name="depressive_symptom" value="0" v-model="psyriskFactor.depressiveSymptom"/>
                                                    <span>Uno</span>
                                                    <input type="radio"  @change="calculateSum()" name="depressive_symptom" value="1" v-model="psyriskFactor.depressiveSymptom"/>
                                                    <span>Due</span> 
                                                    <input type="radio"  @change="calculateSum()" name="depressive_symptom" value="2" v-model="psyriskFactor.depressiveSymptom"/> 
                                                </span>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group" >
                                                <label for="stress_and_coping" class="col-form-label col-md-6 col-sm-2 label-align">15. Stress e coping</label>
                                                <span class="col-md-12 col-sm-12">
                                                    <span>Zero</span>
                                                    <input type="radio"  @change="calculateSum()" name="stress_and_coping" value="0" v-model="psyriskFactor.stressAndCoping"/>
                                                    <span>Uno</span>
                                                    <input type="radio"   @change="calculateSum()" name="stress_and_coping" value="1" v-model="psyriskFactor.stressAndCoping"/>
                                                    <span>Due</span> 
                                                    <input type="radio"  @change="calculateSum()" name="stress_and_coping" value="2" v-model="psyriskFactor.stressAndCoping"/> 
                                                </span>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group" >
                                                <label for="social_support" class="col-form-label col-md-6 col-sm-2 label-align">16. Sostegno sociale</label>
                                                <span class="col-md-12 col-sm-12">
                                                    <span>Zero</span>
                                                    <input type="radio"  @change="calculateSum()" name="social_support" value="0" v-model="psyriskFactor.socialSupport"/>
                                                    <span>Uno</span>
                                                    <input type="radio"  @change="calculateSum()" name="social_support" value="1" v-model="psyriskFactor.socialSupport"/>
                                                    <span>Due</span> 
                                                    <input type="radio"  @change="calculateSum()" name="social_support" value="2" v-model="psyriskFactor.socialSupport"/> 
                                                </span>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group" >
                                                <label for="recent_major_losse" class="col-form-label col-md-6 col-sm-2 label-align">17. Recenti perdite importanti</label>
                                                <span class="col-md-12 col-sm-12">
                                                    <span>Zero</span>
                                                    <input type="radio"  @change="calculateSum()" name="recent_major_losse" value="0" v-model="psyriskFactor.recentMajorLosse"/>
                                                    <span>Uno</span>
                                                    <input type="radio"  @change="calculateSum()" name="recent_major_losse" value="1" v-model="psyriskFactor.recentMajorLosse"/>
                                                    <span>Due</span> 
                                                    <input type="radio"  @change="calculateSum()" name="recent_major_losse" value="2" v-model="psyriskFactor.recentMajorLosse"/> 
                                                </span>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group" >
                                                <label for="suicidal_ideation" class="col-form-label col-md-6 col-sm-2 label-align">18. Ideazione suicidaria</label>
                                                <span class="col-md-12 col-sm-12">
                                                    <span>Zero</span>
                                                    <input type="radio"  @change="calculateSum()" name="suicidal_ideation" value="0" v-model="psyriskFactor.suicidalIdeation"/>
                                                    <span>Uno</span>
                                                    <input type="radio"  @change="calculateSum()" name="suicidal_ideation" value="1" v-model="psyriskFactor.suicidalIdeation"/>
                                                    <span>Due</span> 
                                                    <input type="radio"  @change="calculateSum()" name="suicidal_ideation" value="2" v-model="psyriskFactor.suicidalIdeation"/> 
                                                </span>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group" >
                                                <label for="suicidal_intent" class="col-form-label col-md-6 col-sm-2 label-align">19. Intento suicidario</label>
                                                <span class="col-md-12 col-sm-12">
                                                    <span>Zero</span>
                                                    <input type="radio"  @change="calculateSum()" name="suicidal_intent" value="0" v-model="psyriskFactor.suicidalIntent"/>
                                                    <span>Uno</span>
                                                    <input type="radio"  @change="calculateSum()" name="suicidal_intent" value="1" v-model="psyriskFactor.suicidalIntent"/>
                                                    <span>Due</span> 
                                                    <input type="radio"  @change="calculateSum()" name="suicidal_intent" value="2" v-model="psyriskFactor.suicidalIntent"/> 
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group" >
                                                <label for="suicide_plan" class="col-form-label col-md-6 col-sm-2 label-align">20. Piano di suicidio</label>
                                                <span class="col-md-12 col-sm-12">
                                                    <span>Zero</span>
                                                    <input type="radio"  @change="calculateSum()" name="suicide_plan" value="0" v-model="psyriskFactor.suicidePlan"/>
                                                    <span>Uno</span>
                                                    <input type="radio"  @change="calculateSum()" name="suicide_plan" value="1" v-model="psyriskFactor.suicidePlan"/>
                                                    <span>Due</span> 
                                                    <input type="radio"  @change="calculateSum()" name="suicide_plan" value="2" v-model="psyriskFactor.suicidePlan"/> 
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group" >
                                                <label for="total_score" class="col-form-label col-md-6 col-sm-2 label-align"><strong><h2>Punteggio totale:</h2></strong></label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input type="text" name="punteggio" v-model="sum"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    

                                    <!-- note -->
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group" >
                                                <label for="psy_suicide_note" class="col-form-label col-md-6 col-sm-2 label-align">Note/altre considerazioni:</label>
                                                <div class="col-md-12 col-sm-12">
                                                    <!-- <input type="text" name="psy_suicide_note" rows="20" v-model="psyriskFactor.psy_suicide_note"/>  -->
                                                    <textarea name="psy_suicide_note" cols="25" rows="5" v-model="psyCardSa.psySuicideNote"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div style="background:lightgrey;">
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" style="padding-top: 2rem;">
                                                    <label for="imminent_risk_of_suicide" class="col-form-label col-md-6 col-sm-2 label-align"><strong>Rischio imminente di suicidio:</strong></label>
                                                    <span class="col-md-12 col-sm-12">
                                                        <span>Alto</span>
                                                        <input type="radio" name="imminent_risk_of_suicide" value="alto" v-model="psyCardSa.imminentRiskOfSuicide"/>
                                                        <span>Medio</span>
                                                        <input type="radio" name="imminent_risk_of_suicide" value="medio" v-model="psyCardSa.imminentRiskOfSuicide"/>
                                                        <span>Basso</span> 
                                                        <input type="radio" name="imminent_risk_of_suicide" value="basso" v-model="psyCardSa.imminentRiskOfSuicide"/> 
                                                    </span>
                                                </div>
                                            </div>
                                        </div>  
                                    </div> 
                                    
                                    
                                    
                                    
                                    <h1 style="text-align:center; margin-top: 70px; margin-bottom: 10px;">Azioni da avviare</h1>

                                    <div style="background:lightgrey;padding:7px; border-radius:3px; margin-top:5px;">
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="monitoring_recommendation" class="col-form-label col-md-6 col-sm-2 label-align"><strong>Raccomandazione di monitoraggio:</strong></label>
                                                    <span class="col-md-12 col-sm-12">
                                                        <span>Si</span>
                                                        <input type="radio" name="monitoring_recommendation" value="1" v-model="psyCardSa.monitoringRecommendation"/>
                                                        <span>No</span>
                                                        <input type="radio" name="monitoring_recommendation" value="0" v-model="psyCardSa.monitoringRecommendation"/>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="frequency" class="col-form-label col-md-6 col-sm-2 label-align"><strong>Frequenza:</strong></label>
                                                    <span class="col-md-12 col-sm-12">
                                                        <span>24 ore</span>
                                                        <input type="radio" name="frequency" value="24 ore" v-model="psyCardSa.frequency"/>
                                                        <span>15 min.</span>
                                                        <input type="radio" name="frequency" value="15 min" v-model="psyCardSa.frequency"/>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div style="background:lightgrey;padding:7px; border-radius:3px; margin-top:5px;">
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="referral_mental_health_service" class="col-form-label col-md-6 col-sm-2 label-align"><strong>Invio al servizio di Salute mentale:</strong></label>
                                                    <span class="col-md-12 col-sm-12">
                                                        <span>Si</span>
                                                        <input type="radio" name="referral_mental_health_service" value="1" v-model="psyCardSa.referralMentalHealthService"/>
                                                        <span>No</span>
                                                        <input type="radio" name="referral_mental_health_service" value="0" v-model="psyCardSa.referralMentalHealthService"/>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group" >
                                                <label for="comment" class="col-form-label col-md-6 col-sm-2 label-align">Commenti/altre raccomandazioni:</label>
                                                <div class="col-md-12 col-sm-12">
                                                    <textarea name="textarea" cols="25" rows="5" v-model="psyCardSa.comment"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   

                                    psa:{{ psyCardSa }} psyf: {{psyriskFactor}} 
                                    <div class="ln_solid"></div>
                                    <div class="item form-group" >
                                        <div class="pull-right">
                                            <span  class="btn btn-success i2hBtn ml-3" @click="addPsyCard('sa')">{{btnSaSend}}</span>
                                        </div>
                                    </div>

                                    <!-- <a  class="btn btn-success i2hBtnPrint"  @click=" printpsyCard('printPdf')"><i class="fa fa-print"></i>Stampa</a> -->
                                </form>
                            <!-- </div> -->
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>                      

</template>

<style scoped>
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
</style>



<script>

import * as actions from "../config/ApiUrl";
import axios from 'axios';
import Swal from 'sweetalert2';

export default {
    name: 'psyCard',

    data() {
        return {
            userName: 'Andrea',
            userLastName:'Giovanni',
            userFullName:'',
            userInstance:1,
            userId:0,

            selectedOption: null,
            sum: 0,


            accessData:[
               
                id => 14,
                name => 'Alessio',
                lastname => 'Ortu',
                
            ],
            psySaDoctorId:0,
            psySaDoctorName:'',
            psySaDoctorLastname:'',
            psySaDate:null,
            psyCardId:null,
            date:new Date(),

            psyCardSa:{},
            psyriskFactor:{},


            panel:'sa',

            psyCardSa:{},


            mainTitle:"psy",
            firstSave:true,
            sASaved:false,

            
            btnSaSend:"Salva",
            total:0,               
            allPsySuicideAssessments:null,
        }
    },

    created: function () {
        // this.getPermissions();
        this.getPsyCardsByUserInstanceId(1);
        
    },

    methods: {

        // printpsyCard(printPdf){

        //     let v_myWindow

        //     let url= 'printPdf/2';

        //     v_myWindow = window.open(url, 'v_myWindow', 'width=' + screen.width + ',height=' + screen.height + ', scrollbars=yes, titlebar=no, top=0, left=0');

        //     return false;
        // },


        calculateSum() {
            // Calcola la somma delle opzioni selezionate
            //this.sum = parseInt(this.selectedOption) || 0;
            
            let i=0;
            for (const property in this.psyriskFactor) {
                if(this.psyriskFactor[property]!==null){
                    i += parseInt(this.psyriskFactor[property]);
                }
            }
            this.sum=i;

        },

        
        addPsyCard(panel){
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
            
            if(_panel=='sa'){
                
                if(!this.sASaved){
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
                form.append('section', 'sa');
                if(!this.isObjEmpty(this.psyriskFactor)){
                    let _psyriskFactor=JSON.stringify(this.psyriskFactor);
                    //alert(JSON.stringify(this.psyriskFactor))
                    form.append('psyCard', _psyriskFactor);
                }
                if(!this.isObjEmpty(this.psyCardSa)){
                    //alert(JSON.stringify(this.psyCardSa));
                    let _psyCard=JSON.stringify(this.psyCardSa);
                    form.append('psyCard', _psyCard);
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
                        form.append('psyCardMh', _psyCardMh);
                    }
                    // else{
                    //     _errors++;
                    //     _errorTitle="Attenzione";
                    //     _errorDescription="Compilare il modulo prima di inviarlo"
                    // }    
                }
                // else{
                //     _errors++;
                //     _errorTitle="Attenzione";
                //     _errorDescription="Compilare prima l\'anamnesi tossicologica"
                // }
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
                            this.getPsyCardsByUserInstanceId(this.userInstance);
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

        getPsyCards(){
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
        getPsyCardById(id){
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
        getPsyCardsByUserInstanceId(id){
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
                        if(response.data.PsySuicideAssessment){
                            _wm.sASaved=true;
                            _wm.btnSaSend="Aggiorna";

                            let _SuicideRep=response.data.PsySuicideAssessment;
                            // _wm.psyCardId=response.data.psyCard.id;
    
                            _wm.psyCardId=response.data.psyCard.id;
                            _wm.psySaDoctorId = _SuicideRep.id_doctor;

                            _wm.psySaDoctorName = _SuicideRep.doctor_name;
                            _wm.psySaDoctorLastname = _SuicideRep.doctor_lastname;

                            
                            _wm.psyriskFactor.maritalStatus =_SuicideRep.marital_status;
                            _wm.psyriskFactor.drugAndAlcoholAbuse = _SuicideRep.drug_and_alcohol_abuse 	
                            _wm.psyriskFactor.psychiatricAspect = _SuicideRep.psychiatric_aspect 
                            _wm.psyriskFactor.suicideAttempt = _SuicideRep.suicide_attempt
                            _wm.psyriskFactor.suicideAttemptInInstitution = _SuicideRep.suicide_attempt_in_institution 
                            _wm.psyriskFactor.familySuicide = _SuicideRep.family_suicide
                            _wm.psyriskFactor.arrestStory = _SuicideRep.arrest_story
                            _wm.psyriskFactor.compulsiveBehavior = _SuicideRep.compulsive_behavior 
                            _wm.psyriskFactor.highCrimeProfile = _SuicideRep.high_crime_profile
                            _wm.psyriskFactor.currentIntoxication = _SuicideRep.current_intoxication 
                            _wm.psyriskFactor.worryAboutLifeProblem = _SuicideRep.worry_about_life_problem
                            _wm.psyriskFactor.feelingOfHopelessness = _SuicideRep.feeling_of_hopelessness 
                            _wm.psyriskFactor.psychoticSymptom = _SuicideRep.psychotic_symptom
                            _wm.psyriskFactor.depressiveSymptom = _SuicideRep.depressive_symptom
                            _wm.psyriskFactor.stressAndCoping = _SuicideRep.stress_and_coping 
                            _wm.psyriskFactor.socialSupport = _SuicideRep.social_support
                            _wm.psyriskFactor.recentMajorLosse = _SuicideRep.recent_major_losse 
                            _wm.psyriskFactor.suicidalIdeation = _SuicideRep.suicidal_ideation 
                            _wm.psyriskFactor.suicidalIntent = _SuicideRep.suicidal_intent 
                            _wm.psyriskFactor.suicidePlan = _SuicideRep.suicide_plan


                            _wm.psyCardSa.psySuicideNote = _SuicideRep.psy_suicide_note
                            _wm.psyCardSa.imminentRiskOfSuicide = _SuicideRep.imminent_risk_of_suicide
                            _wm.psyCardSa.monitoringRecommendation = _SuicideRep.monitoring_recommendation
                            _wm.psyCardSa.frequency = _SuicideRep.frequency
                            _wm.psyCardSa.referralMentalHealthService = _SuicideRep.referral_mental_health_service
                            _wm.psyCardSa.comment = _SuicideRep.comment

                            _wm.allPsySuicideAssessments=response.data.allPsySuicideAssessments;
                        }else{
                            _wm.btnSaSend="Salva";
                        }
                        
                        _wm.firstSave=false;
                    }else if(error == 7){
                        _wm.btnSaSend="Salva";
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
