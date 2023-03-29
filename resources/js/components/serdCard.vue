<template>
    <div class="container">
        <!-- <errorsDisplay 
        :errorNumber="errNum"
        ></errorsDisplay> -->
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h3 style="background:#F5F7FA;padding:7px; border-radius:3px">{{mainTitle}} - <small>{{userFullName}}</small></h3>
                        </div>
                        
                        <div v-if="!firstSave">
                            <!-- <div class="pull-right">Data Serd: {{moment(date).format('DD/MM/YYYY')}}</div> -->
                        </div>
                        <!-- <div class="pull-right" v-else >Roma: {{moment(date).format('DD/MM/YYYY')}}</div> -->
                        <div class="clearfix"></div>

                        <div class="x_content">
                            <ul class="nav nav-tabs justify-content-end bar_tabs" id="myTab" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link" id="toxicologicalHistory-tab" data-toggle="tab" href="#toxicologicalHistory" role="tab" aria-controls="toxicologicalHistory" aria-selected="false">Anamnesi tossicologica</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="psychologicalHistory-tab" data-toggle="tab" href="#psychologicalHistory" role="tab" aria-controls="psychologicalHistory" aria-selected="false">Anamnesi psicologica</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="socialFolder-tab" data-toggle="tab" href="#socialFolder" role="tab" aria-controls="socialFolder" aria-selected="false">Cartella Sociale</a>
                                </li>
                            </ul>
                            <!-- serd card form panel -->
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane active" id="toxicologicalHistory" role="tabpanel" aria-labelledby="toxicologicalHistory-tab">

                                <div v-if="tXCSaved">
                                    <div class="pull-right">Anamnesi tossicologica registrata il: {{serdTxDate}} dal dottore: {{serdTxDoctorName}} {{serdTxDoctorLastname}}</div>
                                </div>
                                    <!-- TOXICOLOGICAL HISTORY -->
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left align-items-center">
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="priSubce" class="col-form-label col-md-2 col-sm-2 label-align">Sostanza Primaria:</label>
                                                    <div class="col-md-10 col-sm-10 ">
                                                        <input type="text" id="priSubce"  v-model="serdCardTsc.priSubce" /> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="ageFirstTakePriSubce" class="col-form-label col-md-2 col-sm-2 label-align">Età prima assunzione:</label>
                                                    <div class="col-md-10 col-sm-10 ">
                                                        <input type="number" id="ageFirstTakePriSubce"  v-model="serdCardTsc.ageFirstTakePriSubce" /> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="ageContinuedUsePriSubce" class="col-form-label col-md-2 col-sm-2 label-align">Età uso continuativo</label>
                                                    <div class="col-md-10 col-sm-10 ">
                                                        <input type="number" id="ageContinuedUsePriSubce"  v-model="serdCardTsc.ageContinuedUsePriSubce" /> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="waysTakingPriSubce" class="col-form-label col-md-2 col-sm-2 label-align">Modalità di assunzione</label>
                                                    <div class="col-md-10 col-sm-10 ">
                                                        <input type="text" id="waysTakingPriSubce"  v-model="serdCardTsc.waysTakingPriSubce" /> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="frequencyTakingPriSubce" class="col-form-label col-md-2 col-sm-2 label-align">Frequenza di assunzione</label>
                                                    <div class="col-md-10 col-sm-10 ">
                                                        <input type="text" id="frequencyTakingPriSubce"  v-model="serdCardTsc.frequencyTakingPriSubce" /> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="dosePriSubce">Dose</label>
                                                    <textarea id="dosePriSubce" v-model="serdCardTsc.dosePriSubce" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:40px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="secSubce" class="col-form-label col-md-2 col-sm-2 label-align">Sostanza Secondaria:</label>
                                                    <div class="col-md-10 col-sm-10 ">
                                                        <input type="text" id="secSubce"  v-model="serdCardTsc.secSubce" /> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="ageFirstTakeSecSubce" class="col-form-label col-md-2 col-sm-2 label-align">Età prima assunzione:</label>
                                                    <div class="col-md-10 col-sm-10 ">
                                                        <input type="number" id="ageFirstTakeSecSubce"  v-model="serdCardTsc.ageFirstTakeSecSubce" /> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="ageContinuedUseSecSubce" class="col-form-label col-md-2 col-sm-2 label-align">Età uso continuativo</label>
                                                    <div class="col-md-10 col-sm-10 ">
                                                        <input type="number" id="ageContinuedUseSecSubce"  v-model="serdCardTsc.ageContinuedUseSecSubce" /> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="waysTakingSecSubce" class="col-form-label col-md-2 col-sm-2 label-align">Modalità di assunzione</label>
                                                    <div class="col-md-10 col-sm-10 ">
                                                        <input type="text" id="waysTakingSecSubce"  v-model="serdCardTsc.waysTakingSecSubce" /> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="frequencyTakingSecSubce" class="col-form-label col-md-2 col-sm-2 label-align">Frequenza di assunzione</label>
                                                    <div class="col-md-10 col-sm-10 ">
                                                        <input type="text" id="frequencyTakingSecSubce"  v-model="serdCardTsc.frequencyTakingSecSubce" /> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="doseSecSubce">Dose</label>
                                                    <textarea id="doseSecSubce" v-model="serdCardTsc.doseSecSubce" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:40px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="terSubce" class="col-form-label col-md-2 col-sm-2 label-align">Sostanza terziaria:</label>
                                                    <div class="col-md-10 col-sm-10 ">
                                                        <input type="text" id="terSubce"  v-model="serdCardTsc.terSubce" /> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="ageFirstTakeTerSubce" class="col-form-label col-md-2 col-sm-2 label-align">Età prima assunzione:</label>
                                                    <div class="col-md-10 col-sm-10 ">
                                                        <input type="number" id="ageFirstTakeTerSubce"  v-model="serdCardTsc.ageFirstTakeTerSubce" /> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="ageContinuedUseTerSubce" class="col-form-label col-md-2 col-sm-2 label-align">Età uso continuativo</label>
                                                    <div class="col-md-10 col-sm-10 ">
                                                        <input type="number" id="ageContinuedUseTerSubce"  v-model="serdCardTsc.ageContinuedUseTerSubce" /> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="waysTakingTerSubce" class="col-form-label col-md-2 col-sm-2 label-align">Modalità di assunzione</label>
                                                    <div class="col-md-10 col-sm-10 ">
                                                        <input type="text" id="waysTakingTerSubce"  v-model="serdCardTsc.waysTakingTerSubce" /> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="frequencyTakingTerSubce" class="col-form-label col-md-2 col-sm-2 label-align">Frequenza di assunzione</label>
                                                    <div class="col-md-10 col-sm-10 ">
                                                        <input type="text" id="frequencyTakingTerSubce"  v-model="serdCardTsc.frequencyTakingTerSubce" /> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="doseTerSubce">Dose</label>
                                                    <textarea id="doseTerSubce" v-model="serdCardTsc.doseTerSubce" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div>                                        
                                        <div class="row" style="margin-top:40px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="otherSubce">Altre sostanze</label>
                                                    <textarea id="otherSubce" v-model="serdCardTsc.otherSubce" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <h4 class="dbTitle">Precedenti trattamenti farmacologici con dosaggi (metadone, buprenorfina o altro)</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="serdFacility">Serd</label>
                                                    <input type="radio" v-model="serdCardTsc.serdFacility" v-bind:value="true"> Sì
                                                    <input type="radio" v-model="serdCardTsc.serdFacility" v-bind:value="false"> No
                                                    <br/><textarea id="serdFacility" v-model="serdCardTsc.serdFacilityDesc" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="otherSerdFacility">Altre Strutture</label>
                                                    <input type="radio" v-model="serdCardTsc.otherSerdFacility" v-bind:value="true"> Sì
                                                    <input type="radio" v-model="serdCardTsc.otherSerdFacility" v-bind:value="false"> No
                                                    <br/><textarea id="otherSerdFacility" v-model="serdCardTsc.otherSerdFacilityDesc" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="psychotherapeuticTreatments">Trattamenti psicoterapeutici</label>
                                                    <input type="radio" v-model="serdCardTsc.psychotherapeuticTreatments" v-bind:value="true"> Sì
                                                    <input type="radio" v-model="serdCardTsc.psychotherapeuticTreatments" v-bind:value="false"> No
                                                    <br/><textarea id="psychotherapeuticTreatments" v-model="serdCardTsc.psychotherapeuticTreatmentsDesc" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="therapeuticCommunityTreatments">Trattamenti comunità terapeutica</label>
                                                    <input type="radio" v-model="serdCardTsc.therapeuticCommunityTreatments" v-bind:value="true"> Sì
                                                    <input type="radio" v-model="serdCardTsc.therapeuticCommunityTreatments" v-bind:value="false"> No
                                                    <br/><textarea id="therapeuticCommunityTreatments" v-model="serdCardTsc.therapeuticCommunityTreatmentsDesc" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="verificationContacts">Contatti telefonici di verifica <small>(ente operatore e data)</small></label>
                                                    <textarea id="verificationContacts" v-model="serdCardTsc.verificationContacts" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="overdoseEpisodes">Episodi di overdose <small>(data e sostanza)</small></label>
                                                    <input type="radio" v-model="serdCardTsc.overdoseEpisodes" v-bind:value="true"> Sì
                                                    <input type="radio" v-model="serdCardTsc.overdoseEpisodes" v-bind:value="false"> No
                                                    <textarea id="overdoseEpisodes" v-model="serdCardTsc.overdoseEpisodesDesc" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="urineTestsDrugMetabolites">Esami urine per ricerca metaboliti sostanze stupefacenti <small>(data della richiesta)</small></label>
                                                    <input type="radio" v-model="serdCardTsc.urineTestsDrugMetabolites" v-bind:value="true"> Sì
                                                    <input type="radio" v-model="serdCardTsc.urineTestsDrugMetabolites" v-bind:value="false"> No
                                                    <textarea id="urineTestsDrugMetabolites" v-model="serdCardTsc.urineTestsDrugMetabolitesDesc" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="venosclerosissigns">Segni di venosclerosi</label>
                                                    <input type="radio" v-model="serdCardTsc.venosclerosisSigns" v-bind:value="true"> Sì
                                                    <input type="radio" v-model="serdCardTsc.venosclerosisSigns" v-bind:value="false"> No
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="venipunctureMarks">Segni di venopuntura</label>
                                                    <input type="radio" v-model="serdCardTsc.venipunctureMarks" v-bind:value="true"> Sì
                                                    <input type="radio" v-model="serdCardTsc.venipunctureMarks" v-bind:value="false"> No
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <h4 class="dbTitle">Scala Clinica per l'Astinenza da Oppiacei (COWS, Clinical Opiate Withdrawal Scale)</h4>
                                            </div>
                                        </div>

                                       <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="asssessmentReason">Motivo della seguente valutazione</label>
                                                    <textarea id="asssessmentReason" v-model="asssessmentReason" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div> 


                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="item form-group" >
                                                    <label for="restingPulseRate">Frequenza cardiaca a riposo <small>battiti/minuto</small></label>
                                                    <input type="Number" id="restingPulseRate" @change="countCowsTotal()"  v-model="restingPulseRate" >
                                                </div>
                                            </div>
                                             
                                            <div class="col-md-6 col-sm-6">
                                                <label for="giUpset">Disturbo gastrointestinale <small><em>nell'ultima mezz'ora</em></small></label>
                                                <select :id="`giUpset`" @change="countCowsTotal()" v-model="cows.giUpset" class="flex-grow form-control">
                                                    <option value="0">assenza di sintomi gastrointestinali</option>
                                                    <option value="1">crampi allo stomaco</option>
                                                    <option value="2">nausea o feci molli</option>
                                                    <option value="3">vomito o diarrea</option>
                                                    <option value="4">episodi multipli di diarrea o vomito</option>
                                                </select>
                                            </div>
                                        </div> 

                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-6 col-sm-6">
                                                <label for="sweating">sudorazione <small><em>nell'ultima mezz'ora non dovuta alla temperatura della stanza o ad attività fisica del paziente</em></small></label>
                                                <select :id="`sweating`" @change="countCowsTotal()" v-model="cows.sweating" class="flex-grow form-control">
                                                    <option value="0">non si riportano brividi o vampate</option>
                                                    <option value="1">il paziente riferisce brividi o vampate</option>
                                                    <option value="2">volto visibilmente umido e accaldato</option>
                                                    <option value="3">fronte imperlata di sudore</option>
                                                    <option value="4">sudore che cola sul volto</option>
                                                </select>
                                            </div>
                                            
                                            <div class="col-md-6 col-sm-6">
                                                <label for="tremor">Tremore <small><em>osservazione delle mani tese</em></small></label>
                                                <select :id="`tremor`" @change="countCowsTotal()" v-model="cows.tremor" class="flex-grow form-control">
                                                    <option value="0">nessun tremore</option>
                                                    <option value="1">il tremore viene avvertito, ma non osservato</option>
                                                    <option value="2">lieve tremore osservabile</option>
                                                    <option value="4">evidente tremore o contrazione muscolare</option>
                                                </select>
                                            </div> 
                                        </div> 

                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-6 col-sm-6">
                                                <label for="restlessness">Irrequitezza <small><em>osservazione durante la valutazione</em></small></label>
                                                <select :id="`restlessness`" @change="countCowsTotal()" v-model="cows.restlessness" class="flex-grow form-control">
                                                    <option value="0">riesce a stare seduto immobile</option>
                                                    <option value="1">difficoltà a stare seduto immobile, ma in grado di farlo</option>
                                                    <option value="3">spostamenti frequenti o movimenti non necessari di braccia/gambe</option>
                                                    <option value="5">non riesce a stare seduto immobile per più di pochi secondi</option>
                                                </select>
                                            </div>
                                            
                                            <div class="col-md-6 col-sm-6">
                                                <label for="yawning">Sbadiglio <small><em>osservazione durante la valutazione</em></small></label>
                                                <select :id="`yawning`" @change="countCowsTotal()" v-model="cows.yawning" class="flex-grow form-control">
                                                    <option value="0">nessuno sbadiglio</option>
                                                    <option value="1">il paziente sbadiglia 1 o 2 volte durante la valutazione</option>
                                                    <option value="2">il paziente sbadiglia 3 o più volte durante la valutazione</option>
                                                    <option value="4">il paziente sbadiglia molte volte/minuto</option>
                                                </select>
                                            </div>
                                        </div> 

                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-6 col-sm-6">
                                                <label for="pupilSize">Dimensione delle pupille</label>
                                                <select :id="`pupilSize`" @change="countCowsTotal()" v-model="cows.pupilSize" class="flex-grow form-control">
                                                    <option value="0">pupille puntiformi o di dimensione normale per la luce della stanza</option>
                                                    <option value="1">pupille presumibilmente più grandi del normale per la luce della stanza</option>
                                                    <option value="2">pupille moderatamente dilatate</option>
                                                    <option value="5">pupille così dilatate da essere visibile solo il margine dell'iride</option>
                                                </select>
                                            </div>
                                            
                                            <div class="col-md-6 col-sm-6">
                                                <label for="anxietyOrIrritability">Ansia o irritabilità</label>
                                                <select :id="`anxietyOrIrritability`" @change="countCowsTotal()" v-model="cows.anxietyOrIrritability" class="flex-grow form-control">
                                                    <option value="0">nessuna</option>
                                                    <option value="1">il paziente riferisce maggiore irritabilità o ansia</option>
                                                    <option value="2">il paziente appare visibilmente irritabile e ansioso</option>
                                                    <option value="4">il paziente è così irritabile o ansioso da rendere difficile la valutazione</option>
                                                </select>
                                            </div>
                                        </div> 

                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-6 col-sm-6">
                                                <label for="boneOrJointAches">Dolori osteoarticolari <small style="font-size:9px"><em>Se il paziente avvertiva dolore prima dell'esame, considerare solo la  componente del dolore attribuita all'astinenza da oppiacei</em></small></label>
                                                <select :id="`boneOrJointAches`" @change="countCowsTotal()" v-model="cows.boneOrJointAches" class="flex-grow form-control">
                                                    <option value="0">non presente</option>
                                                    <option value="1">lieve fastidio diffuso</option>
                                                    <option value="2">il paziente riferisce grave dolore diffuso alle articolazioni/muscoli</option>
                                                    <option value="4">il paziente si massaggia articolazioni e muscoli e non riesce a stare seduto immobile senza provare dolore</option>
                                                </select>
                                            </div>
                                            
                                            <div class="col-md-6 col-sm-6">
                                                <label for="gooseflashSkin">Pelle d'oca</label>
                                                <select :id="`gooseflashSkin`" @change="countCowsTotal()" v-model="cows.gooseflashSkin" class="flex-grow form-control">
                                                    <option value="0">la pelle è liscia</option>
                                                    <option value="3">la piloerezione è visibile o i peli si rizzano sulle braccia</option>
                                                    <option value="5">piloerezione considerevole</option>
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-6 col-sm-6">
                                                <label for="runnyNoseOrTearing">Rinorrea o lacrimazione <small><em>Non riconducibile a sintomi allergici o a raffreddore</em></small></label>
                                                <select :id="`runnyNoseOrTearing`" @change="countCowsTotal()" v-model="cows.runnyNoseOrTearing" class="flex-grow form-control">
                                                    <option value="0">non presente</option>
                                                    <option value="1">otturazione nasale o occhi insolitamente umidi</option>
                                                    <option value="2">naso che cola o lacrimazione</option>
                                                    <option value="4">naso che cola sempre o lacrime che scorrono sulle guance</option>
                                                </select>
                                            </div> 
                                            
                                            <div class="col-md-6 col-sm-6">
                                                <label for="giUpset">Grado astinenziale</label>
                                                <input type="text" :value="total"  disabled /> 
                                                <p> {{abstinenceDegreeScore}} </p>

                                            </div>
                                        </div> 
                                        <div class="ln_solid"></div>
                                        <div class="item form-group" >
                                            <div class="pull-right">
                                                <span  class="btn btn-success i2hBtn" @click="addSerdCard('txc')">{{btnTxcSend}}</span>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END TOXICOLOGICAL HISTORY -->
                                    
                                    <!-- Archives -->
                                    <div v-if="allSerdToxicologyReports" class="card" style="width: 100%;">
                                        <div class="card-body">
                                            <h5 class="card-title">Archivio</h5>
                                            <!-- <div style="cursor:pointer" v-for="(serdToxicologyArchive) in allSerdToxicologyReports" :key="serdToxicologyArchive.id" v-on:click="printSerdArchives(serdToxicologyArchive.id,'txc')">Id: {{serdToxicologyArchive.id}} Medico: {{serdToxicologyArchive.doctor_name}} {{serdToxicologyArchive.doctor_lastname}} Data:{{serdToxicologyArchive.tsa_date | moment("DD/MM/YYYY hh:ss")}}</div> -->
                                        </div>
                                    </div>
                                    <!-- Archives -->
                                </div>
                                <div class="tab-pane" id="psychologicalHistory" role="tabpanel" aria-labelledby="psychologicalHistory-tab"> 
                                    <!-- PSYCHOLOGICAL HISTORY -->
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left align-items-center">
                                        <div v-if="sPASaved">
                                            <div class="pull-right">Anamnesi Psicologica registrata il: {{serdPsiDate}} dal dottore: {{serdPsyDoctorName}} {{serdPsyDoctorLastname}}</div>
                                        </div>

                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="psychologicalHistoryText">Anamnesi Psicologica</label>
                                                    <textarea id="psychologicalHistoryText" v-model="serdCardPsy.psychologicalHistoryText" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="psychologicalDiagnosisPsychodiagnosticTests">Diagnosi Psicologica <small>(Test psicodiagnostici)</small></label>
                                                    <textarea id="psychologicalDiagnosisPsychodiagnosticTests" v-model="serdCardPsy.psychologicalDiagnosisText" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="therapeuticProgram">Programma terapeutico</label>
                                                    <textarea id="therapeuticProgram" v-model="serdCardPsy.therapeuticProgram" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="ln_solid"></div>
                                        <div class="item form-group" >
                                            <div class="pull-right">
                                                <span  class="btn btn-success i2hBtn" @click="addSerdCard('psy')" >{{btnPsySend}}</span>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Archives -->
                                    <div v-if="allSerdPsychologicalAnamneses" class="card" style="width: 100%;">
                                        <div class="card-body">
                                            <h5 class="card-title">Archivio</h5>
                                            <!-- <div style="cursor:pointer" v-for="(serdPsyArchive) in allSerdPsychologicalAnamneses" :key="serdPsyArchive.id" v-on:click="printSerdArchives(serdPsyArchive.id,'psy')">Id: {{serdPsyArchive.id}} Medico: {{serdPsyArchive.doctor_name}} {{serdPsyArchive.doctor_lastname}} Data:{{serdPsyArchive.psa_date | moment("DD/MM/YYYY hh:ss")}}</div> -->
                                        </div>
                                    </div>
                                    <!-- Archives -->
                                    <!-- END PSYCHOLOGICAL HISTORY -->
                                </div>


                                <div class="tab-pane" id="socialFolder" role="tabpanel" aria-labelledby="socialFolder-tab">  

                                    <div v-if="sFSaved">
                                        <div class="pull-right">Cartella sociale registrata il: {{serdSfDate}} dal dottore: {{serdSfDoctorName}} {{serdSfDoctorLastname}}</div>
                                    </div>
                                    <!-- SOCIAL FOLDER -->
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left align-items-center">
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="psychologicalHistoryText">Richiesta dell'utente</label>
                                                    <textarea id="psychologicalHistoryText" v-model="serdCardSf.userRequest" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="onSendingSpecify">Su invio <small>(specificare)</small></label>
                                                    <textarea id="onSendingSpecify" v-model="serdCardSf.onSendingSpecify" placeholder="" style="width:100%"></textarea>
                                                </div>

                                            </div>
                                        </div> 
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="serdOfResidence">Serd di residenza</label>
                                                    <textarea id="serdOfResidence" v-model="serdCardSf.serdOfResidence" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="socialFamilyHistory">Anamnesi sociale e famigliare</label>
                                                    <textarea id="socialFamilyHistory" v-model="serdCardSf.socialFamilyHistory" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="whoCurrentlyLiveWith">Attualmente con chi vive</label>
                                                    <textarea id="whoCurrentlyLiveWith" v-model="serdCardSf.whoCurrentlyLiveWith" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="userFamiliarResources">Risorse familiari dell'utente</label>
                                                    <textarea id="userFamiliarResources" v-model="serdCardSf.userFamiliarResources" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="schooling">Scolarità</label>
                                                    <textarea id="schooling" v-model="serdCardSf.schooling" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="workingActivity">Attività lavorativa</label>
                                                    <textarea id="workingActivity" v-model="serdCardSf.workingActivity" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="assessmentSubstanceUseBehaviors">Valutazione dei coportamenti dell'uso di sostanze <small>Famiglia multiproblematica - Fattori di Crisi - Come ha inciso la problematica sulla famiglia</small></label>
                                                    <textarea id="assessmentSubstanceUseBehaviors" v-model="serdCardSf.assessmentSubstanceUseBehaviors" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="juridicalStatusEvaluationDeviantBehaviours">Stato giuridico e valutazione dei comportamenti devianti <small>Confronto con area educativa</small></label>
                                                    <textarea id="juridicalStatusEvaluationDeviantBehaviours" v-model="serdCardSf.juridicalStatusEvaluationDeviantBehaviours" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="detention">Detenzione</label>
                                                    <input type="radio" name="detention" v-model="serdCardSf.detention" v-bind:value="true"> Sì
                                                    <input type="radio" name="detention" v-model="serdCardSf.detention" v-bind:value="false"> No
                                                    <label for="detentionSpecifications">Specificare</label>
                                                    <br/><textarea id="detentionSpecifications" v-model="serdCardSf.detentionSpecifications" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="legalPosition">Posizione Giuridica</label>
                                                    <textarea id="legalPosition" v-model="serdCardSf.legalPosition" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="endSentence">Fine Pena</label>
                                                    <textarea id="endSentence" v-model="serdCardSf.endSentence" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="previousAlternativeMeasures">Precedenti misure alternative <small>se si specificare</small></label>
                                                    <textarea id="previousAlternativeMeasures" v-model="serdCardSf.previousAlternativeMeasures" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div> 
                                            <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="servicesInvolved">Servizi coinvolti<small>(enti pubblici e/o privato sociale)</small></label>
                                                    <textarea id="servicesInvolved" v-model="serdCardSf.servicesInvolved" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div>                                        
                                            <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="interventionHypothesis">Ipotesi d'intervento</label>
                                                    <textarea id="interventionHypothesis" v-model="serdCardSf.interventionHypothesis" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div>  
                                            <div class="row" style="margin-top:20px;">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="item form-group" >
                                                    <label for="otherInformation">Altre informazioni</label>
                                                    <textarea id="otherInformation" v-model="serdCardSf.otherInformation" placeholder="" style="width:100%"></textarea>
                                                </div>
                                            </div>
                                        </div>  

                                        <div class="ln_solid"></div>
                                        <div class="item form-group" >
                                            <div class="pull-right">
                                                <span  class="btn btn-success i2hBtn" @click="addSerdCard('sf')">{{btnSfSend}}</span>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END SOCIAL FOLDER -->
                                    <!-- Archives -->
                                    <div v-if="allSerdSocialFolder" class="card" style="width: 100%;">
                                        <div class="card-body">
                                            <h5 class="card-title">Archivio</h5>
                                            <!-- <div style="cursor:pointer" v-for="(serdSocialFolderArchives) in allSerdSocialFolder" :key="serdSocialFolderArchives.id" v-on:click="printSerdArchives(serdSocialFolderArchives.id,'sf')">Id: {{serdSocialFolderArchives.id}} Medico: {{serdSocialFolderArchives.doctor_name}} {{serdSocialFolderArchives.doctor_lastname}} Data:{{serdSocialFolderArchives.sf_date</div> -->
                                        </div>
                                    </div>
                                    <!-- Archives -->
                                </div>
                            </div>
                            <!-- END serd card forms panel -->
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
  margin-left: 10px;
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
    //import moment from 'moment';
    // import checkErrors from "./checkErrors";
    // import {eventBus} from "../app";
    import axios from 'axios';
    import Swal from 'sweetalert2';
    //Vue.prototype.moment = moment;
    export default {
        name: 'serdCard',
        // props: {
        //      userName: String,
        //      userLastName: String,
        //      userFullName: String,
        //      userInstance: Number,
        //      userId:Number,
        //      paiUser: Object,
        //      detentionStartDate: String,
        // }, 
        data() {
            return {
                userName: 'Andrea',
                userLastName:'Giovanni',
                userFullName:'',
                userInstance:1,
                userId:0,
                detentionStartDate:null,

                accessData:[
                   
                    id => 14,
                    name => 'Alessio',
                    lastname => 'Ortu',
                    
                ],
                serdTxDoctorId:0,
                serdTxDoctorName:'',
                serdTxDoctorLastname:'',
                serdTxDate:null,
                serdPsyDoctorId:0,
                serdPsyDoctorName:'',
                serdPsyDoctorLastname:'',
                serdPsiDate:null,
                serdSfDoctorId:0,
                serdSfDoctorName:'',
                serdSfDoctorLastname:'',
                serdSfDate:null,
                
                serdCardId:null,
                date:new Date(),
                serdCardTsc:{},

                serdCardPsy:{},
                serdCardSf:{},
                cows:{},

                asssessmentReason:'',
                restingPulseRate:0,
                degreeOfAbstinence:0,
                errNum:0,
                mainTitle:"Serd",
                btnTxcSend:"Salva",
                btnPsySend:"Salva",
                btnSfSend:"Salva",
                btnPay:'Attiva PAI',
                pdfFile:null,
                file:'Carica file',
                psyDocuments:[],
                firstSave:true,
                tXCSaved:false,
                sPASaved:false,
                sFSaved:false,
                total:0,
                abstinenceDegreeScore:'',
                allSerdSocialFolder:null,
                allSerdPsychologicalAnamneses:null,
                allSerdToxicologyReports:null,
            }
        },
        watch: {
            total(newValue, oldValue) {
                if(newValue >= 5 && newValue <= 12){
                    this.abstinenceDegreeScore = "lieve"
                } else if(newValue >= 13 && newValue <= 24){
                    this.abstinenceDegreeScore = "moderato"
                } else if(newValue >= 25 && newValue <= 36){
                    this.abstinenceDegreeScore = "moderatamente grave"
                } else if(newValue > 36){
                    this.abstinenceDegreeScore = "grave"
                }
            },
        },

        created: function () {
            // this.getPermissions();
            //alert(JSON.stringify(this.getSerdCardsByUserInstanceId(1)));
            
        },
        mounted() {

        },
        computed: {
            // abstinenceDegreeScore(){
            //     if(this.total >= 5 && this.total <= 12){
            //         return "lieve"
            //     } else if(this.total >= 13 && this.total <= 24){
            //         return "moderato"
            //     } else if(this.total >= 25 && this.total <= 36){
            //         return "moderatamente grave"
            //     } else if(this.total > 36){
            //         return "grave"
            //     }
            // },
            // restingPulseRateResult(){

            //     if (this.restingPulseRate <= 80) {
            //         return 0;
            //     }
            //     else if(this.restingPulseRate > 80 && this.restingPulseRate <= 100){
            //         return 1;
            //     }
            //     else if(this.restingPulseRate > 100 && this.restingPulseRate <= 120){
            //         return 2;
            //     }
            //     else if(this.restingPulseRate > 120){
            //         return 4;
            //     }
            // },
            // total(){
            //     let i=0;
            //     for (const property in this.cows) {
            //         i += parseInt(this.cows[property]);
            //     }
            //     return i + parseInt(this.restingPulseRateResult);
            // },
        },
        methods: {
            // printSerdArchives(archive,panel){
            //     let _wm = this;
            //     let _panel=panel;
            //     let _archive=archive
            //     let v_myWindow
            //     let url= '/serd/printArchive/'+_archive+'/'+_panel
            //     v_myWindow = window.open(url, 'v_myWindow', 'width=' + screen.width + ',height=' + screen.height + ', scrollbars=yes, titlebar=no, top=0, left=0'); 
            //     return false;
            // },
            countCowsTotal(){
                let i=0;
                for (const property in this.cows) {
                    i += parseInt(this.cows[property]);  
                }
                this.total=i + parseInt(this.restingPulseRateResult())
            },
            restingPulseRateResult(){
                if (this.restingPulseRate <= 80) {
                    return 0;
                }
                else if(this.restingPulseRate > 80 && this.restingPulseRate <= 100){
                    return 1;
                }
                else if(this.restingPulseRate > 100 && this.restingPulseRate <= 120){
                    return 2;
                }
                else if(this.restingPulseRate > 120){
                    return 4;
                }
            },

            getPermissions(){
                let _wm = this;
                try {
                axios.get(actions.GET_PERMISSIONS).then(response => {

                    let error=response.data.errorNumber;
                    let _attempts=response.data.attempts;
                    _wm.errNum=error;
                    if(error == 0){
                        _wm.accessData=response.data.data;
                        if(response.data.data.id != 0){
                            if(response.data.data.settings==3){
                                _wm.userCanEdit=true;
                            }
                            
                        }
                    }else{
                        // eventBus.$emit('errorEvent', error, _attempts);
                    }
                });
                } catch (error) {
                    throw error
                }
            },

            addSerdCard(panel){
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
                form.append('doctorId', this.accessData.id);
                form.append('doctorName', this.accessData.name);
                form.append('doctorUserName', this.accessData.lastname);
                if(_panel=='txc'){
                    if(!this.tXCSaved){
                        form.append('action', 'store');
                    }else{
                        form.append('action', 'update');
                        if(this.serdCardId){
                            form.append('serdId',this.serdCardId);
                        }else{
                            _errors++;
                            _errorTitle="Attenzione";
                            _errorDescription="Dati mancanti o incompleti contattare l\'amministratore di sistema"
                        }
                    }
                    form.append('section', 'txc');
                    if(!this.isObjEmpty(this.serdCardTsc)){
                        let _serdCard=JSON.stringify(this.serdCardTsc);
                        form.append('serdCard', _serdCard);
                    }
                    if (this.asssessmentReason !== "") {
                        form.append('asssessmentReason', this.asssessmentReason);
                    }
                    if (this.restingPulseRate) {
                        form.append('restingPulseRate', this.restingPulseRate);
                    }
                    if(!this.isObjEmpty(this.cows)){
                        let _cows=JSON.stringify(this.cows);
                        form.append('cows', _cows);
                    }
                    if (this.total) {
                        form.append('totalAbstinenceDegrreeScore', this.total);
                    }
                    if (this.abstinenceDegreeScore) {
                        form.append('abstinenceDegreeScoreDescription', this.abstinenceDegreeScore);
                    }
                }else if(_panel=='psy'){
                    if(!this.sPASaved){
                        form.append('action', 'store');
                    }else{
                        form.append('action', 'update');
                    }

                    if(this.tXCSaved){
                        if(this.serdCardId){
                            form.append('serdId',this.serdCardId);
                        }else{
                            _errors++;
                            _errorTitle="Attenzione";
                            _errorDescription="Dati mancanti o incompleti contattare l\'amministratore di sistema"
                        }
                        form.append('section', 'psy');
                        if(!this.isObjEmpty(this.serdCardPsy)){
                            let _serdCardPsy=JSON.stringify(this.serdCardPsy);
                            form.append('serdCardPsy', _serdCardPsy);
                        }else{
                            _errors++;
                            _errorTitle="Attenzione";
                            _errorDescription="Compilare il modulo prima di inviarlo"
                        }
                    }else{
                        _errors++;
                        _errorTitle="Attenzione";
                        _errorDescription="Compilare prima l\'anamnesi tossicologica"
                    }

                }else if(_panel=='sf'){
                    if(!this.sFSaved){
                        form.append('action', 'store');
                    }else{
                        form.append('action', 'update');
                    }
                    if(this.tXCSaved && this.sPASaved){
                        if(this.serdCardId){
                            form.append('serdId',this.serdCardId);
                        }else{
                            _errors++;
                            _errorTitle="Attenzione";
                            _errorDescription="Dati mancanti o incompleti contattare l\'amministratore di sistema"
                        }
                        form.append('section', 'sf');
                        if(!this.isObjEmpty(this.serdCardSf)){
                            let _serdCardSf=JSON.stringify(this.serdCardSf);
                            form.append('serdCardSf', _serdCardSf);
                        }else{
                            _errors++;
                            _errorTitle="Attenzione";
                            _errorDescription="Compilare il modulo prima di inviarlo"
                        }
                    }else{
                        _errors++;
                        _errorTitle="Attenzione";
                        _errorDescription="Compilare prima l\'anamnesi tossicologica e l'anamnesi psicologica"
                    }
                }
                if(_errors==0){
                    try {
                        axios.post(actions.ADD_SERD_CARD,form).then(response => {
                            let error=response.data.errorNumber;
                            let _attempts=response.data.attempts;
                            _wm.errNum=error;
                            if(error == 0){

                                Swal.fire(
                                    'Scheda',
                                    'Aggiornata correttamente',
                                    'success'
                                )
                                this.getSerdCardsByUserInstanceId(this.userInstance);
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

            getSerdCards(){
                //GET ALL SERCARDS
                let _wm = this;
                try {
                    axios.get(actions.GET_SERD_CARDS).then(response => {
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
            getSerdCardById(id){
                let _wm = this;
                try {
                    let url=actions.GET_SERD_CARD_BY_ID+'/'+id;
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
            getSerdCardsByUserInstanceId(id){
                let _wm = this;
                
                try {
                    let url=actions.GET_SERD_CARDS_BY_USER_INSTANCE_ID+'/'+id;
                    axios.get(url).then(response => {
                        let error=response.data.errorNumber;
                        let _attempts=response.data.attempts;
                        _wm.errNum=error;
                        if(error == 0){
                            
                            _wm.mainTitle="Aggiornamento Cartella serd";
                            if(response.data.SerdToxicologyReport){
                                _wm.tXCSaved=true;
                                _wm.btnTxcSend="Aggiorna";
                                let _toxicologyRep=response.data.SerdToxicologyReport;
                                _wm.serdCardId=response.data.serdCard.id;
                                _wm.serdTxDoctorId = _toxicologyRep.id_doctor;
                                _wm.serdTxDoctorName = _toxicologyRep.doctor_name;
                                _wm.serdTxDoctorLastname = _toxicologyRep.doctor_lastname;
                                _wm.serdTxDate = _wm.i2hFormatDate(_toxicologyRep.tsa_date);
                                	
                                _wm.restingPulseRate =_toxicologyRep.resting_pulse_rate;
                                _wm.serdCardTsc.priSubce = _toxicologyRep.pri_subce 	
                                _wm.serdCardTsc.ageFirstTakePriSubce = _toxicologyRep.age_first_take_pri_subce 
                                _wm.serdCardTsc.ageContinuedUsePriSubce = _toxicologyRep.age_continued_use_pri_subce
                                _wm.serdCardTsc.waysTakingPriSubce = _toxicologyRep.ways_taking_pri_subce 
                                _wm.serdCardTsc.frequencyTakingPriSubce = _toxicologyRep.frequency_taking_pri_subce
                                _wm.serdCardTsc.dosePriSubce = _toxicologyRep.dose_pri_subce
                                _wm.serdCardTsc.secSubce = _toxicologyRep.sec_subce 
                                _wm.serdCardTsc.ageFirstTakeSecSubce = _toxicologyRep.age_first_take_sec_subce
                                _wm.serdCardTsc.ageContinuedUseSecSubce = _toxicologyRep.age_continued_use_sec_subce 
                                _wm.serdCardTsc.waysTakingSecSubce = _toxicologyRep.ways_taking_sec_subce
                                _wm.serdCardTsc.frequencyTakingSecSubce = _toxicologyRep.frequency_taking_sec_subce 
                                _wm.serdCardTsc.doseSecSubce = _toxicologyRep.dose_sec_subce
                                _wm.serdCardTsc.terSubce = _toxicologyRep.ter_subce
                                _wm.serdCardTsc.ageFirstTakeTerSubce = _toxicologyRep.age_first_take_ter_subce 
                                _wm.serdCardTsc.ageContinuedUseTerSubce = _toxicologyRep.age_continued_use_ter_subce
                                _wm.serdCardTsc.waysTakingTerSubce = _toxicologyRep.ways_taking_ter_subce 
                                _wm.serdCardTsc.frequencyTakingTerSubce = _toxicologyRep.frequency_taking_ter_subce 
                                _wm.serdCardTsc.doseTerSubce = _toxicologyRep.dose_ter_subce 
                                _wm.serdCardTsc.otherSubce = _toxicologyRep.other_subce
                                _wm.serdCardTsc.serdFacility = Boolean(_toxicologyRep.serd_facility)
                                _wm.serdCardTsc.serdFacilityDesc = _toxicologyRep.serd_facility_desc 
                                _wm.serdCardTsc.otherSerdFacility = Boolean(_toxicologyRep.other_serd_facility)
                                _wm.serdCardTsc.otherSerdFacilityDesc = _toxicologyRep.other_serd_facility_desc
                                _wm.serdCardTsc.psychotherapeuticTreatments = Boolean(_toxicologyRep.psychotherapeutic_treatments) 
                                _wm.serdCardTsc.psychotherapeuticTreatmentsDesc = _toxicologyRep.psychotherapeutic_treatments_desc
                                _wm.serdCardTsc.therapeuticCommunityTreatments = Boolean(_toxicologyRep.therapeutic_community_treatments)
                                _wm.serdCardTsc.therapeuticCommunityTreatmentsDesc = _toxicologyRep.therapeutic_community_treatments_desc 
                                _wm.serdCardTsc.verificationContacts = _toxicologyRep.verification_contacts
                                _wm.serdCardTsc.overdoseEpisodes = Boolean(_toxicologyRep.overdose_episodes)
                                _wm.serdCardTsc.overdoseEpisodesDesc = _toxicologyRep.overdose_episodes_desc
                                _wm.serdCardTsc.urineTestsDrugMetabolites = Boolean(_toxicologyRep.urine_tests_drug_metabolites)
                                _wm.serdCardTsc.urineTestsDrugMetabolitesDesc = _toxicologyRep.urine_tests_drug_metabolites_desc
                                _wm.serdCardTsc.venosclerosisSigns = Boolean(_toxicologyRep.venosclerosis_signs) 
                                _wm.serdCardTsc.venipunctureMarks = Boolean(_toxicologyRep.venipuncture_marks)
                                _wm.asssessmentReason = _toxicologyRep.assessment_reason
                                _wm.cows.giUpset = _toxicologyRep.gi_Upset;
                                _wm.cows.sweating = _toxicologyRep.sweating;
                                _wm.cows.tremor = _toxicologyRep.tremor;
                                _wm.cows.restlessness = _toxicologyRep.restlessness; 
                                _wm.cows.yawning = _toxicologyRep.yawning;
                                _wm.cows.pupilSize = _toxicologyRep.pupil_size;
                                _wm.cows.anxietyOrIrritability = _toxicologyRep.anxiety_or_irritability;
                                _wm.cows.boneOrJointAches = _toxicologyRep.bone_or_joint_aches;
                                _wm.cows.gooseflashSkin = _toxicologyRep.gooseflash_skin;
                                _wm.cows.runnyNoseOrTearing = _toxicologyRep.runny_nose_or_tearing;
                                _wm.countCowsTotal();
                                _wm.allSerdToxicologyReports=response.data.allSerdToxicologyReports;
                            }else{
                                _wm.btnTxcSend="Salva";
                            }
                            
    	                    if(response.data.SerdPsychologicalAnamnesis){
                                let _serdCardPsy=response.data.SerdPsychologicalAnamnesis;
                                _wm.sPASaved=true;
                                _wm.btnPsySend="Aggiorna";
                                _wm.serdPsyDoctorId = _serdCardPsy.id_doctor;
                                _wm.serdPsyDoctorName = _serdCardPsy.doctor_name;
                                _wm.serdPsyDoctorLastname = _serdCardPsy.doctor_lastname;
                                _wm.serdPsiDate = _wm.i2hFormatDate(_serdCardPsy.psa_date);
                                _wm.serdCardPsy.psychologicalHistoryText =  _serdCardPsy.psychological_history;
                                _wm.serdCardPsy.psychologicalDiagnosisText = _serdCardPsy.psychological_diagnosis;
                                _wm.serdCardPsy.therapeuticProgram = _serdCardPsy.therapeutic_program;
                                _wm.allSerdPsychologicalAnamneses =response.data.allSerdPsychologicalAnamneses;
                            }else{
                                _wm.btnPsySend="Salva";
                            }
                            if(response.data.SerdSocialFolder){
                                _wm.sFSaved=true;
                                let _serdCardSf=response.data.SerdSocialFolder;
                                _wm.btnSfSend="Aggiorna";
                                _wm.serdSfDoctorId = _serdCardSf.id_doctor;
                                _wm.serdSfDoctorName = _serdCardSf.doctor_name;
                                _wm.serdSfDoctorLastname = _serdCardSf.doctor_lastname;
                                _wm.serdSfDate = _wm.i2hFormatDate(_serdCardSf.sf_date); 		
                                _wm.serdCardSf.userRequest = _serdCardSf.user_request;
                                _wm.serdCardSf.onSendingSpecify = _serdCardSf.on_sending_specify;
                                _wm.serdCardSf.serdOfResidence = _serdCardSf.serd_of_residence;
                                _wm.serdCardSf.socialFamilyHistory = _serdCardSf.social_family_history;
                                _wm.serdCardSf.whoCurrentlyLiveWith = _serdCardSf.who_currently_live_with;
                                _wm.serdCardSf.userFamiliarResources = _serdCardSf.user_familiar_resources;
                                _wm.serdCardSf.schooling = _serdCardSf.schooling;
                                _wm.serdCardSf.workingActivity = _serdCardSf.working_activity;
                                _wm.serdCardSf.assessmentSubstanceUseBehaviors = _serdCardSf.assessment_substance_use_behaviors;
                                _wm.serdCardSf.juridicalStatusEvaluationDeviantBehaviours = _serdCardSf.juridical_status_evaluation_deviant_behaviours;
                                _wm.serdCardSf.detention = Boolean(_serdCardSf.detention); 
                                _wm.serdCardSf.detentionSpecifications = _serdCardSf.detention_specifications;
                                _wm.serdCardSf.legalPosition = _serdCardSf.legal_position;
                                _wm.serdCardSf.endSentence = _serdCardSf.end_sentence;
                                _wm.serdCardSf.previousAlternativeMeasures = _serdCardSf.previous_alternative_measures;
                                _wm.serdCardSf.servicesInvolved = _serdCardSf.services_involved;
                                _wm.serdCardSf.interventionHypothesis = _serdCardSf.intervention_hypothesis;
                                _wm.serdCardSf.otherInformation = _serdCardSf.other_information;
                                _wm.allSerdSocialFolder=response.data.allSerdSocialFolder;
                            }else{
                                _wm.btnSfSend="Salva";
                            }

                            _wm.firstSave=false;
                        }else if(error == 7){
                            _wm.btnTxcSend="Salva";
                            _wm.btnPsySend="Salva";
                            _wm.btnSfSend="Salva";
                            _wm.mainTitle="Salva Cartella serd";
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
            deleteSerdCardsById(id){
                let _wm = this;                
                try {
                    let url=actions.DELETE_SERD_CARD;
                    axios.delete(url,{"id":id}).then(response => {
                        let error=response.data.errorNumber;
                        let _attempts=response.data.attempts;
                        _wm.errNum=error;
                        if(error == 0){
                            alert(JSON.stringify(response))
                        }else{
                            // eventBus.$emit('errorEvent', error, _attempts);
                        }
                    });
                } catch (error) {
                    throw error
                }
            }, 
            i2hFormatDate(date){
                // return moment(date,"YYYY-MM-DD hh:mm").format('DD/MM/YYYY');
            },
            i2hFormatDate2(date){
                const detentionStartDate = new Date(date);
                // return moment(detentionStartDate,"YYYY-MM-DD hh:mm").format('DD/MM/YYYY');
            },
            getNow: function() {
                const today = new Date();
                const date = today.getFullYear()+'-'+this.zeroFill((today.getMonth()+1))+'-'+this.zeroFill(today.getDate());
                const time = today.getHours() + ":" + this.zeroFill(today.getMinutes()) + ":" + this.zeroFill(today.getSeconds());
                const dateTime = date +' '+ time;
                return  dateTime;
            },
            zeroFill(value){
                if(value<10){
                    value = '0'+value;
                }
                return value
            },
            getGenderLetter(gender){
                return  (gender == 1) ? 'M' : 'F'; 
            },
            isObjEmpty (obj) {
                return Object.keys(obj).length === 0;
            },
        }
    }
</script>