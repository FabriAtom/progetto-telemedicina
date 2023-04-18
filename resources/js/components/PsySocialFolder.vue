<!-- PsySocialFolder 4° pagina scheda psichiatrica -->
<template>
    <div class="container">
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <h1 style="" class="ml-3"><strong>CARTELLA SOCIALE</strong></h1>
                        
                        <!-- 1. DATI ANAGRAFICI -->
                        
                        <div class="x_title" style="background:lightgrey;padding:7px; border-radius:3px; margin-top:5px; margin-left: 10px;  width: 900px;">
                            <span style="margin-left:10px;" ><strong>1. DATI ANAGRAFICI</strong></span> 
                        </div>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left align-items-center">
                            <div class="x_content">
                                <div style="border:2px solid black; max-width: 900px; max-height: 650px; margin-left: 10px;margin-bottom: 10px;">

                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="citizenship" class="col-form-label col-md-3 col-sm-2 label-align"><strong>CITTADINANZA</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="text" name="citizenship" v-model="psyCardSf.citizenship"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="residency_permit" class="col-form-label col-md-3 col-sm-2 label-align"><strong>PERMESSO DI SOGGIORNO</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <span>SI</span>
                                                    <input type="radio" name="residency_permit" value="1" v-model="psyCardSf.residencyPermit"/>
                                                    <span>NO</span>
                                                    <input type="radio" name="residency_permit" value="0" v-model="psyCardSf.residencyPermit"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="typology" class="col-form-label col-md-3 col-sm-2 label-align"><strong>TIPOLOGIA</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="text" name="typology" v-model="psyCardSf.typology"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="expiration" class="col-form-label col-md-3 col-sm-2 label-align"><strong>SCADENZA</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="date" name="expiration" v-model="psyCardSf.expiration"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="identification_document" class="col-form-label col-md-3 col-sm-2 label-align"><strong>DOCUMENTO DI RICONOSCIMENTO</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="text" name="identification_document" v-model="psyCardSf.identificationDocument"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
    
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="social_note" class="col-form-label col-md-3 col-sm-2 label-align"><strong>NOTE</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="text" name="social_note" v-model="psyCardSf.socialNote"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="marital_status" class="col-form-label col-md-3 col-sm-2 label-align"><strong>STATO CIVILE</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="text" name="marital_status" v-model="psyCardSf.maritalStatus"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="social_degree" class="col-form-label col-md-3 col-sm-2 label-align"><strong>TITOLO DI STUDIO</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <span style="border:1px solid black; padding:3px; margin-right: 5px;">Scuola primaria
                                                        <input type="radio" name="social_degree" value="Scuola primaria" v-model="psyCardSf.socialDegree"/>
                                                    </span>
                                                    <span style="border:1px solid black; padding:3px; margin-right: 5px;">Scuola media
                                                        <input type="radio" name="social_degree" value="Scuola media" v-model="psyCardSf.socialDegree"/>
                                                    </span>
                                                    <span style="border:1px solid black; padding:3px; margin-right: 5px;">Scuola secondaria superiore
                                                        <input type="radio" name="social_degree" value="Scuola secondaria superiore" v-model="psyCardSf.socialDegree"/>
                                                    </span>
                                                    <span style="border:1px solid black; padding:3px; margin-right: 5px;">Laurea
                                                        <input type="radio" name="social_degree" value="Laurea" v-model="psyCardSf.socialDegree"/>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 2. STATO GIURIDICO -->

                            <div class="x_title" style="background:lightgrey;padding:7px; border-radius:3px; margin-top:5px; margin-left: 10px; width: 900px;">
                                <span style="margin-left:10px;" ><strong>2. STATO GIURIDICO</strong></span> 
                            </div>
                            <div class="x_content">
                                <div style="border:2px solid black; max-width: 900px; max-height: 750px; margin-left: 10px;margin-bottom: 10px;">
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="legal_status_educator" class="col-form-label col-md-3 col-sm-2 label-align"><strong>EDUCATORE</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="text" name="legal_status_educator" v-model="psyCardSf.legalStatusEducator"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="legal_status_lawyer" class="col-form-label col-md-3 col-sm-2 label-align"><strong>AVVOCATO</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="text" name="legal_status_lawyer" value="SI" v-model="psyCardSf.legalStatusLawyer"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="legal_status_provenance" class="col-form-label col-md-3 col-sm-2 label-align"><strong>PROVENIENZA</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="text" name="legal_status_provenance" v-model="psyCardSf.legalStatusProvenance"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="legal_status_entered" class="col-form-label col-md-3 col-sm-2 label-align"><strong>ENTRATO IL</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="date" name="legal_status_entered" v-model="psyCardSf.legalStatusEntered"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="legal_status_end_of_sentence" class="col-form-label col-md-3 col-sm-2 label-align"><strong>FINE PENA</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="date" name="legal_status_end_of_sentence" v-model="psyCardSf.legalStatusEndOfSentence"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="legal_status_security_measure" class="col-form-label col-md-3 col-sm-2 label-align"><strong>MISURE DI SICUREZZA PRECEDENTI</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <span>SI</span>
                                                    <input type="radio" name="legal_status_security_measure" value="1" v-model="showInput"/>
                                                    <span>NO</span>
                                                    <input type="radio" name="legal_status_security_measure" value="0" v-model="psyCardSf.legalStatusSecurityMeasure"/>
                                                    <input type="text" name="legal_status_security_measure_text"  v-if="showInput" v-model="psyCardSf.legalStatusSecurityMeasureText"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="legal_status_end_of_the_sentence" class="col-form-label col-md-3 col-sm-2 label-align"><strong>A FINE PENA</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <span>SI</span>
                                                    <input type="radio" name="legal_status_end_of_the_sentence" value="1" v-model="showInput2"/>
                                                    <span>NO</span>
                                                    <input type="radio" name="legal_status_end_of_the_sentence" value="0" v-model="psyCardSf.legalStatusEndOfTheSentence"/>
                                                    <input type="text" name="legal_status_end_of_the_sentence_text" v-if="showInput2" v-model="psyCardSf.legalStatusEndOfTheSentenceText"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="legal_status_list_mix" class="col-form-label col-md-1 col-sm-2 label-align"><strong></strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <span style="border:1px solid black; padding:3px; margin-right: 5px;">INTERNATO
                                                        <input type="radio" name="legal_status_list_mix" value="INTERNATO" v-model="psyCardSf.legalStatusListMix"/>
                                                    </span>
                                                    <span style="border:1px solid black; padding:3px; margin-right: 5px;">GIUDICABILE
                                                        <input type="radio" name="legal_status_list_mix" value="GIUDICABILE" v-model="psyCardSf.legalStatusListMix"/>
                                                    </span>
                                                    <span style="border:1px solid black; padding:3px; margin-right: 5px;">APPELLANTE
                                                        <input type="radio" name="legal_status_list_mix" value="APPELLANTE" v-model="psyCardSf.legalStatusListMix"/>
                                                    </span>
                                                    <span style="border:1px solid black; padding:3px; margin-right: 5px;">DEFINITIVO
                                                        <input type="radio" name="legal_status_list_mix" value="DEFINITIVO" v-model="psyCardSf.legalStatusListMix"/>
                                                    </span>
                                                    <span style="border:1px solid black; padding:3px; margin-right: 5px;">CASSAZIONE
                                                        <input type="radio" name="legal_status_list_mix" value="CASSAZIONE" v-model="psyCardSf.legalStatusListMix"/>
                                                    </span>
                                                    <span style="border:1px solid black; padding:3px; margin-right: 5px;">MISTO
                                                        <input type="radio" name="legal_status_list_mix" value="MISTO" v-model="psyCardSf.legalStatusListMix"/>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="legal_status_rems_other" class="col-form-label col-md-3 col-sm-2 label-align"><strong>REMS O ALTRO</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <span>SI</span>
                                                    <input type="radio" name="legal_status_rems_other" value="1" v-model="showInput3"/>
                                                    <span>NO</span>
                                                    <input type="radio" name="legal_status_rems_other" value="0" v-model="psyCardSf.legalStatusRemsOther"/>
                                                    <input type="text" name="legal_status_rems_other_text" v-if="showInput3" v-model="psyCardSf.legalStatusRemsOtherText"/>

                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="legal_status_uncensored" class="col-form-label col-md-5 col-sm-2 label-align"><strong>INCENSURATO - PRECEDENTI DETENZIONI O MISURE ALTERNATIVE</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <span>SI</span>
                                                    <input type="radio" name="legal_status_uncensored" value="1" v-model="showInput4"/>
                                                    <span>NO</span>
                                                    <input type="radio" name="legal_status_uncensored" value="0" v-model="psyCardSf.legalStatusUncensored"/>
                                                    <input type="text" name="legal_status_uncensored_text" v-if="showInput4" v-model="psyCardSf.legalStatusUncensoredText"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <!-- 3. SITUAZIONE SOCIO SANITARIA -->
                        
                            <div class="x_title" style="background:lightgrey;padding:7px; border-radius:3px; margin-top:5px; margin-left: 10px; width: 900px;">
                                <span style="margin-left:10px;" ><strong>3. SITUAZIONE SOCIO SANITARIA</strong></span> 
                            </div>
                            <div class="x_content">
                                <div style="border:2px solid black; max-width: 900px; max-height:720px; margin-left: 10px;margin-bottom: 10px;">
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="social_health_situation_csm" class="col-form-label col-md-1 col-sm-2 label-align"><strong>CSM</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="checkbox" name="social_health_situation_csm"  v-model="showInput1"/> 
                                                    <input type="text" name="social_health_situation_csm" v-if="showInput1" v-model="psyCardSf.socialHealthSituationCsm"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="social_health_situation_serd" class="col-form-label col-md-1 col-sm-2 label-align"><strong>SERD</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="checkbox" name="social_health_situation_serd"  v-model="showInput5"/> 
                                                    <input type="text" name="social_health_situation_serd" v-if="showInput5" v-model="psyCardSf.socialHealthSituationSerd"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="social_health_situation_asl" class="col-form-label col-md-3 col-sm-1 label-align"><strong>ALTRI SERVIZI ASL</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="checkbox" name="social_health_situation_asl"  v-model="showInput6"/> 
                                                    <input type="text" name="social_health_situation_asl" v-if="showInput6" v-model="psyCardSf.socialHealthSituationAsl"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="social_health_situation_certificate" class="col-form-label col-md-2 col-sm-1 label-align"><strong>CERTIFICATO</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="text" name="social_health_situation_certificate" v-model="psyCardSf.socialHealthSituationCertificate"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    
    
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="social_health_situation_therapeutic_pathway" class="col-form-label col-md-5 col-sm-2 label-align"><strong>PERCORSI TERAPEUTICI PRECEDENTI / IN CORSO</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="text" name="social_health_situation_therapeutic_pathway" v-model="psyCardSf.socialHealthSituationTherapeuticPathway"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="social_health_situation_disability_text" class="col-form-label col-md-3 col-sm-2 label-align"><strong>INVALIDITA' ACCOMPAGNO /LEGGE 104/92 - I.68/99</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="checkbox" name="social_health_situation_disability"  v-model="showInput7"/> 
                                                    <span v-if="showInput7">DAL</span>
                                                    <input type="date" name="social_health_situation_disability" v-if="showInput7" v-model="psyCardSf.socialHealthSituationDisability"/>
                                                    <input type="text" name="social_health_situation_disability_text" v-if="showInput7" v-model="psyCardSf.socialHealthSituationDisabilityText"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="social_health_situation_revision" class="col-form-label col-md-3 col-sm-2 label-align"><strong>REVISIONE</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <span>SI</span>
                                                    <input type="radio" name="social_health_situation_revision" value="1" v-model="psyCardSf.socialHealthSituationRevision"/>
                                                    <span>NO</span>
                                                    <input type="radio" name="social_health_situation_revision" value="0" v-model="psyCardSf.socialHealthSituationRevision"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="social_health_situation_inps" class="col-form-label col-md-3 col-sm-2 label-align"><strong>INPS DI RIFERIMENTO</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="text" name="social_health_situation_inps" v-model="psyCardSf.socialHealthSituationInps"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="social_health_situation_administrator" class="col-form-label col-md-5 col-sm-2 label-align"><strong>AMMINISTRATORE SOSTEGNO/INTERDIZIONE/INABILITAZIONE</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="text" name="social_health_situation_administrator" v-model="psyCardSf.socialHealthSituationAdministrator"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 4 -->

                            <div class="x_title" style="background:lightgrey;padding:7px; border-radius:3px; margin-top:5px; margin-left: 10px; width: 900px;">
                                <span style="margin-left:10px;" ><strong>  4. ANALISI SITUAZIONE SOCIO-AMBIENTALE</strong></span> 
                            </div>
                            <div class="x_content">
                                <div style="border:2px solid black; max-width: 900px; max-height: 650px; margin-left: 10px;margin-bottom: 10px;">
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="environmental_analysis_family_of_origin" class="col-form-label col-md-4 col-sm-2 label-align"><strong>FAMIGLIA DI ORIGINE E ACQUISITA</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="text" name="environmental_analysis_family_of_origin" v-model="psyCardSf.environmentalAnalysisFamilyOfOrigin"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="environmental_analysis_accommodation" class="col-form-label col-md-2 col-sm-2 label-align"><strong>ALLOGGIO</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="text" name="environmental_analysis_accommodation" v-model="psyCardSf.environmentalAnalysisAccommodation"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="environmental_analysis_work" class="col-form-label col-md-2 col-sm-2 label-align"><strong>LAVORO</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="text" name="environmental_analysis_work" v-model="psyCardSf.environmentalAnalysisWork"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="environmental_analysis_income" class="col-form-label col-md-2 col-sm-2 label-align"><strong>REDDITO</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="text" name="environmental_analysis_income" v-model="psyCardSf.environmentalAnalysisIncome"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="environmental_analysis_formal_network" class="col-form-label col-md-7 col-sm-6 label-align"><strong>RETI FORMALI E INFORMALI (INTERNE ED ESTERNE AL CARCERE)</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="text" name="environmental_analysis_formal_network" v-model="psyCardSf.environmentalAnalysisFormalNetwork"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="x_title" style="background:lightgrey;padding:7px; border-radius:3px; margin-top:5px; margin-left: 10px; width: 900px;">
                                <span style="margin-left:10px;" ><strong> 5. IPOTESI DI INTERVENTO /PROGETTUALITA'</strong></span> 
                            </div>
                            <div class="x_content">
                                <div style="border:2px solid black; max-width: 900px; max-height: 650px; margin-left: 10px;margin-bottom: 10px;">
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="intervention_hypothesis_project" class="col-form-label col-md-4 col-sm-2 label-align"><strong>IPOTESI DI INTERVENTO /PROGETTUALITA' </strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="text" name="intervention_hypothesis_project" v-model="psyCardSf.interventionHypothesisSocialProject"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="intervention_hypothesis_social_worker" class="col-form-label col-md-2 col-sm-2 label-align"><strong>Assistente sociale</strong></label>
                                                <span class="col-md-12 col-sm-12">
                                                    <input type="text" name="intervention_hypothesis_social_worker" v-model="psyCardSf.interventionHypothesisSocialWorker"/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{ psyCardSf }}
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="pull-right">
                                        <span class="btn btn-success i2hBtn ml-3" @click="addPsySocialFolder('sf')">{{btnSfSend}}</span>
                                    </div>
                                </div>
                                <a  class="btn btn-success i2hBtnPrint"  @click=" printPsySocialFolder('printPdf')"><i class="fa fa-print"></i>Stampa</a>
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

</style>


<script>
   
import * as actions from "../config/ApiUrl";
import axios from 'axios';
import Swal from 'sweetalert2';

export default {
    name: 'PsySocialFolder',

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

            psySfDoctorId:0,
            psySfDoctorName:'',
            psySfDoctorLastname:'',
            psySfDate:null,
            psyCardId:null,
            date:new Date(),

            psyCardSf:{},

            panel:'sf',

            // psyCardMh:{},


            mainTitle:"psy",
            firstSave:true,
            sFSaved:false,

            
            btnSfSend:"Salva",
            total:0,               
            allPsySocialFolders:null,
        }
    },

    created: function () {
        // this.getPermissions();
        this.getPsySocialFoldersByUserInstanceId(1);
    },

    methods: {


        printPsySocialFolder(printPdf){

        let v_myWindow

        let url= 'printPdf/2';

        v_myWindow = window.open(url, 'v_myWindow', 'width=' + screen.width + ',height=' + screen.height + ', scrollbars=yes, titlebar=no, top=0, left=0');

        return false;
        },
 
        addPsySocialFolder(panel){
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
            
            if(_panel=='sf'){

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
                form.append('section', 'sf');
                if(!this.isObjEmpty(this.psyCardSf)){
                    let _psyCardSf=JSON.stringify(this.psyCardSf);
                    alert(JSON.stringify(this.psyCardSf))
                    form.append('psyCardSf', _psyCardSf);
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
                            this.getPsySocialFoldersByUserInstanceId(this.userInstance);
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
        getPsySocialFolders(){
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

        getPsySocialFolderById(id){
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

        getPsySocialFoldersByUserInstanceId(id){
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
                        if(response.data.PsySocialFolder){
                            _wm.sFSaved=true;
                            _wm.btnSfSend="Aggiorna";

                            let _SocialFold=response.data.PsySocialFolder;
                            // _wm.psyCardId=response.data.psyCard.id;
    
                            _wm.psyCardId=response.data.psyCard.id;
                            _wm.psySfDoctorId = _SocialFold.id_doctor;

                            _wm.psySfDoctorName = _SocialFold.doctor_name;
                            _wm.psySfDoctorLastname = _SocialFold.doctor_lastname;

                            
                            _wm.psyCardSf.citizenship =_SocialFold.citizenship;
                            _wm.psyCardSf.residencyPermit = _SocialFold.residency_permit 	
                            _wm.psyCardSf.typology = _SocialFold.typology 
                            _wm.psyCardSf.expiration = _SocialFold.expiration
                            _wm.psyCardSf.socialNote = _SocialFold.social_note 
                            _wm.psyCardSf.maritalStatus = _SocialFold.marital_status
                            _wm.psyCardSf.socialDegree = _SocialFold.social_degree

                            _wm.psyCardSf.legalStatusEducator = _SocialFold.legal_status_educator 
                            _wm.psyCardSf.legalStatusLawyer = _SocialFold.legal_status_lawyer
                            _wm.psyCardSf.legalStatusProvenance = _SocialFold.legal_status_provenance 
                            _wm.psyCardSf.legalStatusEntered = _SocialFold.legal_status_entered
                            _wm.psyCardSf.legalStatusEndOfSentence = _SocialFold.legal_status_end_of_sentence 
                            _wm.psyCardSf.legalStatusSecurityMeasure = _SocialFold.legal_status_security_measure
                            _wm.psyCardSf.legalStatusEndOfTheSentence = _SocialFold.legal_status_end_of_the_sentence

                            
                            _wm.psyCardSf.legalStatusRemsOther = _SocialFold.legal_status_rems_other
                            _wm.psyCardSf.legalStatusUncensored = _SocialFold.legal_status_uncensored 

                            _wm.psyCardSf.socialHealthSituationCsm = _SocialFold.social_health_situation_csm
                            _wm.psyCardSf.socialHealthSituationSerd = _SocialFold.social_health_situation_serd 
                            _wm.psyCardSf.socialHealthSituationAsl = _SocialFold.social_health_situation_asl 
                            _wm.psyCardSf.socialHealthSituationCertificate = _SocialFold.social_health_situation_certificate 

                            
                            _wm.psyCardSf.socialHealthSituationTherapeuticPathway = _SocialFold.social_health_situation_therapeutic_pathway 
                            _wm.psyCardSf.socialHealthSituationDisability = _SocialFold.social_health_situation_disability
                            _wm.psyCardSf.socialHealthSituationDisability_text = _SocialFold.social_health_situation_disability_text

                            _wm.psyCardSf.socialHealthSituationRevision = _SocialFold.social_health_situation_revision
                            _wm.psyCardSf.socialHealthSituationInps = _SocialFold.social_health_situation_inps 
                            _wm.psyCardSf.socialHealthSituationAdministrator = _SocialFold.social_health_situation_administrator 

                            _wm.psyCardSf.environmentalAnalysisFamilyOfOrigin = _SocialFold.environmental_analysis_family_of_origin
                            _wm.psyCardSf.environmentalAnalysisAccommodation = _SocialFold.environmental_analysis_accommodation 
                            _wm.psyCardSf.environmentalAnalysisWork = _SocialFold.environmental_analysis_work 
                            _wm.psyCardSf.environmentalAnalysisIncome = _SocialFold.environmental_analysis_income
                            _wm.psyCardSf.environmentalAnalysisFormalNetwork = _SocialFold.environmental_analysis_formal_network 

                            _wm.psyCardSf.interventionHypothesisSocialProject = _SocialFold.intervention_hypothesis_project
                            _wm.psyCardSf.interventionHypothesisSocialWorker = _SocialFold.intervention_hypothesis_social_worker


                            _wm.allPsySocialFolders=response.data.allPsySocialFolders;
                        }else{
                            _wm.btnSfSend="Salva";
                        }
                        
                        _wm.firstSave=false;
                    }else if(error == 7){
                        _wm.btnSfSend="Salva";
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