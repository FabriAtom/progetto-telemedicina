<!-- 2° PAGINA SCHEDA PSICHIATRICA -->
<!-- BRIEF PSYCHIATRIC RATING SCALE BPRS CON TABLE -->
<template>
    <div class="container">
            <div class="page-content">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-sm-12">
                        <div class="x_panel">
                            <div class="x_title" style="background:lightgrey;padding:7px; border-radius:3px; margin-top:5px;">
                                <h1><strong>BRIEF PSYCHIATRIC RATING SCALE BPRS</strong></h1>
                            </div>
                            <div class="x_content">
    
                                <!-- <div class="tab-content" id="myTabContent"> -->
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left align-items-center">
    
                                    <table>
                                        <tr>
                                            <th>Descrizioni</th>
                                        </tr>
                                        <tr>
                                            <td>Preoccupazioni somatiche</td>
                                            <td>NV
                                                <input type="radio" @click="calculateSum" name="somatic_concern" value="0" v-model="psyCardPr.somaticConcern">
                                            </td>
                                            <td>1
                                                <input type="radio" @click="calculateSum" name="somatic_concern" value="1" v-model="psyCardPr.somaticConcern">
                                            </td>
                                            <td>2
                                                <input type="radio" @click="calculateSum" name="somatic_concern" value="2" v-model="psyCardPr.somaticConcern">
                                            </td>
                                            <td>3
                                                <input type="radio" @click="calculateSum" name="somatic_concern" value="3" v-model="psyCardPr.somaticConcern">
                                            </td>
                                            <td>4
                                                <input type="radio" @click="calculateSum" name="somatic_concern" value="4" v-model="psyCardPr.somaticConcern">
                                            </td>
                                            <td>5
                                                <input type="radio" @click="calculateSum" name="somatic_concern" value="5" v-model="psyCardPr.somaticConcern">
                                            </td>
                                            <td>6
                                                <input type="radio" @click="calculateSum" name="somatic_concern" value="6" v-model="psyCardPr.somaticConcern">
                                            </td>
                                            <td>7
                                                <input type="radio" @click="calculateSum" name="somatic_concern" value="7" v-model="psyCardPr.somaticConcern">
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td>Ansia</td>
                                            <td>NV
                                                <input type="radio" @click="calculateSum" name="anxiety" value="0" v-model="psyCardPr.anxiety">
                                            </td>
                                            <td>1
                                                <input type="radio" @click="calculateSum" name="anxiety" value="1" v-model="psyCardPr.anxiety">
                                            </td>
                                            <td>2
                                                <input type="radio" @click="calculateSum" name="anxiety" value="2" v-model="psyCardPr.anxiety">
                                            </td>
                                            <td>3
                                                <input type="radio" @click="calculateSum" name="anxiety" value="3" v-model="psyCardPr.anxiety">
                                            </td>
                                            <td>4
                                                <input type="radio" @click="calculateSum" name="anxiety" value="4" v-model="psyCardPr.anxiety">
                                            </td>
                                            <td>5
                                                <input type="radio" @click="calculateSum" name="anxiety" value="5" v-model="psyCardPr.anxiety">
                                            </td>
                                            <td>6
                                                <input type="radio" @click="calculateSum" name="anxiety" value="6" v-model="psyCardPr.anxiety">
                                            </td>
                                            <td>7
                                                <input type="radio" @click="calculateSum" name="anxiety" value="7" v-model="psyCardPr.anxiety">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Depressione</td>
                                            <td>NV
                                                <input type="radio" @click="calculateSum" name="depression" value="0" v-model="psyCardPr.depression">
                                            </td>
                                            <td>1
                                                <input type="radio" @click="calculateSum" name="depression" value="1" v-model="psyCardPr.depression">
                                            </td>
                                            <td>2
                                                <input type="radio" @click="calculateSum" name="depression" value="2" v-model="psyCardPr.depression">
                                            </td>
                                            <td>3
                                                <input type="radio" @click="calculateSum" name="depression" value="3" v-model="psyCardPr.depression">
                                            </td>
                                            <td>4
                                                <input type="radio" @click="calculateSum" name="depression" value="4" v-model="psyCardPr.depression">
                                            </td>
                                            <td>5
                                                <input type="radio" @click="calculateSum" name="depression" value="5" v-model="psyCardPr.depression">
                                            </td>
                                            <td>6
                                                <input type="radio" @click="calculateSum" name="depression" value="6" v-model="psyCardPr.depression">
                                            </td>
                                            <td>7
                                                <input type="radio" @click="calculateSum" name="depression" value="7" v-model="psyCardPr.depression">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Rischio di suicidio</td>
                                            <td>NV
                                                <input type="radio" @click="calculateSum" name="risk_of_suicide" value="0" v-model="psyCardPr.riskOfSuicide">
                                            </td>
                                            <td>1
                                                <input type="radio" @click="calculateSum" name="risk_of_suicide" value="1" v-model="psyCardPr.riskOfSuicide">
                                            </td>
                                            <td>2
                                                <input type="radio" @click="calculateSum" name="risk_of_suicide" value="2" v-model="psyCardPr.riskOfSuicide">
                                            </td>
                                            <td>3
                                                <input type="radio" @click="calculateSum" name="risk_of_suicide" value="3" v-model="psyCardPr.riskOfSuicide">
                                            </td>
                                            <td>4
                                                <input type="radio" @click="calculateSum" name="risk_of_suicide" value="4" v-model="psyCardPr.riskOfSuicide">
                                            </td>
                                            <td>5
                                                <input type="radio" @click="calculateSum" name="risk_of_suicide" value="5" v-model="psyCardPr.riskOfSuicide">
                                            </td>
                                            <td>6
                                                <input type="radio" @click="calculateSum" name="risk_of_suicide" value="6" v-model="psyCardPr.riskOfSuicide">
                                            </td>
                                            <td>7
                                                <input type="radio" @click="calculateSum" name="risk_of_suicide" value="7" v-model="psyCardPr.riskOfSuicide">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sentimenti di colpa</td>
                                            <td>NV
                                                <input type="radio" @click="calculateSum" name="feeling_of_guilt" value="0" v-model="psyCardPr.feelingOfGuilt">
                                            </td>
                                            <td>1
                                                <input type="radio" @click="calculateSum" name="feeling_of_guilt" value="1" v-model="psyCardPr.feelingOfGuilt">
                                            </td>
                                            <td>2
                                                <input type="radio" @click="calculateSum" name="feeling_of_guilt" value="2" v-model="psyCardPr.feelingOfGuilt">
                                            </td>
                                            <td>3
                                                <input type="radio" @click="calculateSum" name="feeling_of_guilt" value="3" v-model="psyCardPr.feelingOfGuilt">
                                            </td>
                                            <td>4
                                                <input type="radio" @click="calculateSum" name="feeling_of_guilt" value="4" v-model="psyCardPr.feelingOfGuilt">
                                            </td>
                                            <td>5
                                                <input type="radio" @click="calculateSum" name="feeling_of_guilt" value="5" v-model="psyCardPr.feelingOfGuilt">
                                            </td>
                                            <td>6
                                                <input type="radio" @click="calculateSum" name="feeling_of_guilt" value="6" v-model="psyCardPr.feelingOfGuilt">
                                            </td>
                                            <td>7
                                                <input type="radio" @click="calculateSum" name="feeling_of_guilt" value="7" v-model="psyCardPr.feelingOfGuilt">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ostilità</td>
                                            <td>NV
                                                <input type="radio" @click="calculateSum" name="hostility" value="0" v-model="psyCardPr.hostility">
                                            </td>
                                            <td>1
                                                <input type="radio" @click="calculateSum" name="hostility" value="1" v-model="psyCardPr.hostility">
                                            </td>
                                            <td>2
                                                <input type="radio" @click="calculateSum" name="hostility" value="2" v-model="psyCardPr.hostility">
                                            </td>
                                            <td>3
                                                <input type="radio" @click="calculateSum" name="hostility" value="3" v-model="psyCardPr.hostility">
                                            </td>
                                            <td>4
                                                <input type="radio" @click="calculateSum" name="hostility" value="4" v-model="psyCardPr.hostility">
                                            </td>
                                            <td>5
                                                <input type="radio" @click="calculateSum" name="hostility" value="5" v-model="psyCardPr.hostility">
                                            </td>
                                            <td>6
                                                <input type="radio" @click="calculateSum" name="hostility" value="6" v-model="psyCardPr.hostility">
                                            </td>
                                            <td>7
                                                <input type="radio" @click="calculateSum" name="hostility" value="7" v-model="psyCardPr.hostility">
                                            </td>
                                        </tr> 
                                        
                                        <tr>
                                            <td>Elevazione del tono dell'umore</td>
                                            <td>NV
                                                <input type="radio" @click="calculateSum" name="mood_elevation" value="0" v-model="psyCardPr.moodElevation">
                                            </td>
                                            <td>1
                                                <input type="radio" @click="calculateSum" name="mood_elevation" value="1" v-model="psyCardPr.moodElevation">
                                            </td>
                                            <td>2
                                                <input type="radio" @click="calculateSum" name="mood_elevation" value="2" v-model="psyCardPr.moodElevation">
                                            </td>
                                            <td>3
                                                <input type="radio" @click="calculateSum" name="mood_elevation" value="3" v-model="psyCardPr.moodElevation">
                                            </td>
                                            <td>4
                                                <input type="radio" @click="calculateSum" name="mood_elevation" value="4" v-model="psyCardPr.moodElevation">
                                            </td>
                                            <td>5
                                                <input type="radio" @click="calculateSum" name="mood_elevation" value="5" v-model="psyCardPr.moodElevation">
                                            </td>
                                            <td>6
                                                <input type="radio" @click="calculateSum" name="mood_elevation" value="6" v-model="psyCardPr.moodElevation">
                                            </td>
                                            <td>7
                                                <input type="radio" @click="calculateSum" name="mood_elevation" value="7" v-model="psyCardPr.moodElevation">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Grandiosità</td>
                                            <td>NV
                                                <input type="radio" @click="calculateSum" name="grandeur" value="0" v-model="psyCardPr.grandeur">
                                            </td>
                                            <td>1
                                                <input type="radio" @click="calculateSum" name="grandeur" value="1" v-model="psyCardPr.grandeur">
                                            </td>
                                            <td>2
                                                <input type="radio" @click="calculateSum" name="grandeur" value="2" v-model="psyCardPr.grandeur">
                                            </td>
                                            <td>3
                                                <input type="radio" @click="calculateSum" name="grandeur" value="3" v-model="psyCardPr.grandeur">
                                            </td>
                                            <td>4
                                                <input type="radio" @click="calculateSum" name="grandeur" value="4" v-model="psyCardPr.grandeur">
                                            </td>
                                            <td>5
                                                <input type="radio" @click="calculateSum" name="grandeur" value="5" v-model="psyCardPr.grandeur">
                                            </td>
                                            <td>6
                                                <input type="radio" @click="calculateSum" name="grandeur" value="6" v-model="psyCardPr.grandeur">
                                            </td>
                                            <td>7
                                                <input type="radio" @click="calculateSum" name="grandeur" value="7" v-model="psyCardPr.grandeur">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sospettosità</td>
                                            <td>NV
                                                <input type="radio" @click="calculateSum" name="suspiciousness" value="0" v-model="psyCardPr.suspiciousness">
                                            </td>
                                            <td>1
                                                <input type="radio" @click="calculateSum" name="suspiciousness" value="1" v-model="psyCardPr.suspiciousness">
                                            </td>
                                            <td>2
                                                <input type="radio" @click="calculateSum" name="suspiciousness" value="2" v-model="psyCardPr.suspiciousness">
                                            </td>
                                            <td>3
                                                <input type="radio" @click="calculateSum" name="suspiciousness" value="3" v-model="psyCardPr.suspiciousness">
                                            </td>
                                            <td>4
                                                <input type="radio" @click="calculateSum" name="suspiciousness" value="4" v-model="psyCardPr.suspiciousness">
                                            </td>
                                            <td>5
                                                <input type="radio" @click="calculateSum" name="suspiciousness" value="5" v-model="psyCardPr.suspiciousness">
                                            </td>
                                            <td>6
                                                <input type="radio" @click="calculateSum" name="suspiciousness" value="6" v-model="psyCardPr.suspiciousness">
                                            </td>
                                            <td>7
                                                <input type="radio" @click="calculateSum" name="suspiciousness" value="7" v-model="psyCardPr.suspiciousness">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Allucinazioni</td>
                                            <td>NV
                                                <input type="radio" @click="calculateSum" name="hallucination" value="0" v-model="psyCardPr.hallucination">
                                            </td>
                                            <td>1
                                                <input type="radio" @click="calculateSum" name="hallucination" value="1" v-model="psyCardPr.hallucination">
                                            </td>
                                            <td>2
                                                <input type="radio" @click="calculateSum" name="hallucination" value="2" v-model="psyCardPr.hallucination">
                                            </td>
                                            <td>3
                                                <input type="radio" @click="calculateSum" name="hallucination" value="3" v-model="psyCardPr.hallucination">
                                            </td>
                                            <td>4
                                                <input type="radio" @click="calculateSum" name="hallucination" value="4" v-model="psyCardPr.hallucination">
                                            </td>
                                            <td>5
                                                <input type="radio" @click="calculateSum" name="hallucination" value="5" v-model="psyCardPr.hallucination">
                                            </td>
                                            <td>6
                                                <input type="radio" @click="calculateSum" name="hallucination" value="6" v-model="psyCardPr.hallucination">
                                            </td>
                                            <td>7
                                                <input type="radio" @click="calculateSum" name="hallucination" value="7" v-model="psyCardPr.hallucination">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Contenuto insolito del pensiero</td>
                                            <td>NV
                                                <input type="radio" @click="calculateSum" name="unusual_content_of_thought" value="0" v-model="psyCardPr.unusualContentOfThought">
                                            </td>
                                            <td>1
                                                <input type="radio" @click="calculateSum" name="unusual_content_of_thought" value="1" v-model="psyCardPr.unusualContentOfThought">
                                            </td>
                                            <td>2
                                                <input type="radio" @click="calculateSum" name="unusual_content_of_thought" value="2" v-model="psyCardPr.unusualContentOfThought">
                                            </td>
                                            <td>3
                                                <input type="radio" @click="calculateSum" name="unusual_content_of_thought" value="3" v-model="psyCardPr.unusualContentOfThought">
                                            </td>
                                            <td>4
                                                <input type="radio" @click="calculateSum" name="unusual_content_of_thought" value="4" v-model="psyCardPr.unusualContentOfThought">
                                            </td>
                                            <td>5
                                                <input type="radio" @click="calculateSum" name="unusual_content_of_thought" value="5" v-model="psyCardPr.unusualContentOfThought">
                                            </td>
                                            <td>6
                                                <input type="radio" @click="calculateSum" name="unusual_content_of_thought" value="6" v-model="psyCardPr.unusualContentOfThought">
                                            </td>
                                            <td>7
                                                <input type="radio" @click="calculateSum" name="unusual_content_of_thought" value="7" v-model="psyCardPr.unusualContentOfThought">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Comportamento bizzarro</td>
                                            <td>NV
                                                <input type="radio" @click="calculateSum" name="bizarre_behavior" value="0" v-model="psyCardPr.bizarreBehavior">
                                            </td>
                                            <td>1
                                                <input type="radio" @click="calculateSum" name="bizarre_behavior" value="1" v-model="psyCardPr.bizarreBehavior">
                                            </td>
                                            <td>2
                                                <input type="radio" @click="calculateSum" name="bizarre_behavior" value="2" v-model="psyCardPr.bizarreBehavior">
                                            </td>
                                            <td>3
                                                <input type="radio" @click="calculateSum" name="bizarre_behavior" value="3" v-model="psyCardPr.bizarreBehavior">
                                            </td>
                                            <td>4
                                                <input type="radio" @click="calculateSum" name="bizarre_behavior" value="4" v-model="psyCardPr.bizarreBehavior">
                                            </td>
                                            <td>5
                                                <input type="radio" @click="calculateSum" name="bizarre_behavior" value="5" v-model="psyCardPr.bizarreBehavior">
                                            </td>
                                            <td>6
                                                <input type="radio" @click="calculateSum" name="bizarre_behavior" value="6" v-model="psyCardPr.bizarreBehavior">
                                            </td>
                                            <td>7
                                                <input type="radio" @click="calculateSum" name="bizarre_behavior" value="7" v-model="psyCardPr.bizarreBehavior">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Trascuratezza della cura di sé</td>
                                            <td>NV
                                                <input type="radio" @click="calculateSum" name="neglect_of_self_care" value="0" v-model="psyCardPr.neglectOfSelfCare">
                                            </td>
                                            <td>1
                                                <input type="radio" @click="calculateSum" name="neglect_of_self_care" value="1" v-model="psyCardPr.neglectOfSelfCare">
                                            </td>
                                            <td>2
                                                <input type="radio" @click="calculateSum" name="neglect_of_self_care" value="2" v-model="psyCardPr.neglectOfSelfCare">
                                            </td>
                                            <td>3
                                                <input type="radio" @click="calculateSum" name="neglect_of_self_care" value="3" v-model="psyCardPr.neglectOfSelfCare">
                                            </td>
                                            <td>4
                                                <input type="radio" @click="calculateSum" name="neglect_of_self_care" value="4" v-model="psyCardPr.neglectOfSelfCare">
                                            </td>
                                            <td>5
                                                <input type="radio" @click="calculateSum" name="neglect_of_self_care" value="5" v-model="psyCardPr.neglectOfSelfCare">
                                            </td>
                                            <td>6
                                                <input type="radio" @click="calculateSum" name="neglect_of_self_care" value="6" v-model="psyCardPr.neglectOfSelfCare">
                                            </td>
                                            <td>7
                                                <input type="radio" @click="calculateSum" name="neglect_of_self_care" value="7" v-model="psyCardPr.neglectOfSelfCare">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Disorientamento</td>
                                            <td>NV
                                                <input type="radio" @click="calculateSum" name="disorientation" value="0" v-model="psyCardPr.disorientation">
                                            </td>
                                            <td>1
                                                <input type="radio" @click="calculateSum" name="disorientation" value="1" v-model="psyCardPr.disorientation">
                                            </td>
                                            <td>2
                                                <input type="radio" @click="calculateSum" name="disorientation" value="2" v-model="psyCardPr.disorientation">
                                            </td>
                                            <td>3
                                                <input type="radio" @click="calculateSum" name="disorientation" value="3" v-model="psyCardPr.disorientation">
                                            </td>
                                            <td>4
                                                <input type="radio" @click="calculateSum" name="disorientation" value="4" v-model="psyCardPr.disorientation">
                                            </td>
                                            <td>5
                                                <input type="radio" @click="calculateSum" name="disorientation" value="5" v-model="psyCardPr.disorientation">
                                            </td>
                                            <td>6
                                                <input type="radio" @click="calculateSum" name="disorientation" value="6" v-model="psyCardPr.disorientation">
                                            </td>
                                            <td>7
                                                <input type="radio" @click="calculateSum" name="disorientation" value="7" v-model="psyCardPr.disorientation">
                                            </td>
                                        </tr>
                                    </table>

                                    <div>
                                        <h2>
                                            Valutare i seguenti item da 15 a 24 in base all'eloquio del paziente a al suo comportamento durante l'intervista 
                                        </h2>
                                    </div>

                                    <table>
                                        <tr>
                                            <td>Disorganizzazione Concettuale</td>
                                            <td>NV
                                                <input type="radio" @click="calculateSum" name="conceptual_disorganization" value="0" v-model="psyCardPr.conceptualDisorganization">
                                            </td>
                                            <td>1
                                                <input type="radio" @click="calculateSum" name="conceptual_disorganization" value="1" v-model="psyCardPr.conceptualDisorganization">
                                            </td>
                                            <td>2
                                                <input type="radio" @click="calculateSum" name="conceptual_disorganization" value="2" v-model="psyCardPr.conceptualDisorganization">
                                            </td>
                                            <td>3
                                                <input type="radio" @click="calculateSum" name="conceptual_disorganization" value="3" v-model="psyCardPr.conceptualDisorganization">
                                            </td>
                                            <td>4
                                                <input type="radio" @click="calculateSum" name="conceptual_disorganization" value="4" v-model="psyCardPr.conceptualDisorganization">
                                            </td>
                                            <td>5
                                                <input type="radio" @click="calculateSum" name="conceptual_disorganization" value="5" v-model="psyCardPr.conceptualDisorganization">
                                            </td>
                                            <td>6
                                                <input type="radio" @click="calculateSum" name="conceptual_disorganization" value="6" v-model="psyCardPr.conceptualDisorganization">
                                            </td>
                                            <td>7
                                                <input type="radio" @click="calculateSum" name="conceptual_disorganization" value="7" v-model="psyCardPr.conceptualDisorganization">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Appiattimento affettivo</td>
                                            <td>NV
                                                <input type="radio" @click="calculateSum" name="emotional_flattening" value="0" v-model="psyCardPr.emotionalFlattening">
                                            </td>
                                            <td>1
                                                <input type="radio" @click="calculateSum" name="emotional_flattening" value="1" v-model="psyCardPr.emotionalFlattening">
                                            </td>
                                            <td>2
                                                <input type="radio" @click="calculateSum" name="emotional_flattening" value="2" v-model="psyCardPr.emotionalFlattening">
                                            </td>
                                            <td>3
                                                <input type="radio" @click="calculateSum" name="emotional_flattening" value="3" v-model="psyCardPr.emotionalFlattening">
                                            </td>
                                            <td>4
                                                <input type="radio" @click="calculateSum" name="emotional_flattening" value="4" v-model="psyCardPr.emotionalFlattening">
                                            </td>
                                            <td>5
                                                <input type="radio" @click="calculateSum" name="emotional_flattening" value="5" v-model="psyCardPr.emotionalFlattening">
                                            </td>
                                            <td>6
                                                <input type="radio" @click="calculateSum" name="emotional_flattening" value="6" v-model="psyCardPr.emotionalFlattening">
                                            </td>
                                            <td>7
                                                <input type="radio" @click="calculateSum" name="emotional_flattening" value="7" v-model="psyCardPr.emotionalFlattening">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Isolamento emotivo</td>
                                            <td>NV
                                                <input type="radio" @click="calculateSum" name="emotional_isolation" value="0" v-model="psyCardPr.emotionalIsolation">
                                            </td>
                                            <td>1
                                                <input type="radio" @click="calculateSum" name="emotional_isolation" value="1" v-model="psyCardPr.emotionalIsolation">
                                            </td>
                                            <td>2
                                                <input type="radio" @click="calculateSum" name="emotional_isolation" value="2" v-model="psyCardPr.emotionalIsolation">
                                            </td>
                                            <td>3
                                                <input type="radio" @click="calculateSum" name="emotional_isolation" value="3" v-model="psyCardPr.emotionalIsolation">
                                            </td>
                                            <td>4
                                                <input type="radio" @click="calculateSum" name="emotional_isolation" value="4" v-model="psyCardPr.emotionalIsolation">
                                            </td>
                                            <td>5
                                                <input type="radio" @click="calculateSum" name="emotional_isolation" value="5" v-model="psyCardPr.emotionalIsolation">
                                            </td>
                                            <td>6
                                                <input type="radio" @click="calculateSum" name="emotional_isolation" value="6" v-model="psyCardPr.emotionalIsolation">
                                            </td>
                                            <td>7
                                                <input type="radio" @click="calculateSum" name="emotional_isolation" value="7" v-model="psyCardPr.emotionalIsolation">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Rallentamento motorio</td>
                                            <td>NV
                                                <input type="radio" @click="calculateSum" name="motor_slowdown" value="0" v-model="psyCardPr.motorSlowdown">
                                            </td>
                                            <td>1
                                                <input type="radio" @click="calculateSum" name="motor_slowdown" value="1" v-model="psyCardPr.motorSlowdown">
                                            </td>
                                            <td>2
                                                <input type="radio" @click="calculateSum" name="motor_slowdown" value="2" v-model="psyCardPr.motorSlowdown">
                                            </td>
                                            <td>3
                                                <input type="radio" @click="calculateSum" name="motor_slowdown" value="3" v-model="psyCardPr.motorSlowdown">
                                            </td>
                                            <td>4
                                                <input type="radio" @click="calculateSum" name="motor_slowdown" value="4" v-model="psyCardPr.motorSlowdown">
                                            </td>
                                            <td>5
                                                <input type="radio" @click="calculateSum" name="motor_slowdown" value="5" v-model="psyCardPr.motorSlowdown">
                                            </td>
                                            <td>6
                                                <input type="radio" @click="calculateSum" name="motor_slowdown" value="6" v-model="psyCardPr.motorSlowdown">
                                            </td>
                                            <td>7
                                                <input type="radio" @click="calculateSum" name="motor_slowdown" value="7" v-model="psyCardPr.motorSlowdown">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tensione motoria</td>
                                            <td>NV
                                                <input type="radio" @click="calculateSum" name="motor_tension" value="0" v-model="psyCardPr.motorTension">
                                            </td>
                                            <td>1
                                                <input type="radio" @click="calculateSum" name="motor_tension" value="1" v-model="psyCardPr.motorTension">
                                            </td>
                                            <td>2
                                                <input type="radio" @click="calculateSum" name="motor_tension" value="2" v-model="psyCardPr.motorTension">
                                            </td>
                                            <td>3
                                                <input type="radio" @click="calculateSum" name="motor_tension" value="3" v-model="psyCardPr.motorTension">
                                            </td>
                                            <td>4
                                                <input type="radio" @click="calculateSum" name="motor_tension" value="4" v-model="psyCardPr.motorTension">
                                            </td>
                                            <td>5
                                                <input type="radio" @click="calculateSum" name="motor_tension" value="5" v-model="psyCardPr.motorTension">
                                            </td>
                                            <td>6
                                                <input type="radio" @click="calculateSum" name="motor_tension" value="6" v-model="psyCardPr.motorTension">
                                            </td>
                                            <td>7
                                                <input type="radio" @click="calculateSum" name="motor_tension" value="7" v-model="psyCardPr.motorTension">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mancanza di cooperazione</td>
                                            <td>NV
                                                <input type="radio" @click="calculateSum" name="lack_of_cooperation" value="0" v-model="psyCardPr.lackOfCooperation">
                                            </td>
                                            <td>1
                                                <input type="radio" @click="calculateSum" name="lack_of_cooperation" value="1" v-model="psyCardPr.lackOfCooperation">
                                            </td>
                                            <td>2
                                                <input type="radio" @click="calculateSum" name="lack_of_cooperation" value="2" v-model="psyCardPr.lackOfCooperation">
                                            </td>
                                            <td>3
                                                <input type="radio" @click="calculateSum" name="lack_of_cooperation" value="3" v-model="psyCardPr.lackOfCooperation">
                                            </td>
                                            <td>4
                                                <input type="radio" @click="calculateSum" name="lack_of_cooperation" value="4" v-model="psyCardPr.lackOfCooperation">
                                            </td>
                                            <td>5
                                                <input type="radio" @click="calculateSum" name="lack_of_cooperation" value="5" v-model="psyCardPr.lackOfCooperation">
                                            </td>
                                            <td>6
                                                <input type="radio" @click="calculateSum" name="lack_of_cooperation" value="6" v-model="psyCardPr.lackOfCooperation">
                                            </td>
                                            <td>7
                                                <input type="radio" @click="calculateSum" name="lack_of_cooperation" value="7" v-model="psyCardPr.lackOfCooperation">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Eccitamento</td>
                                            <td>NV
                                                <input type="radio" @click="calculateSum" name="excitement" value="0" v-model="psyCardPr.excitement">
                                            </td>
                                            <td>1
                                                <input type="radio" @click="calculateSum" name="excitement" value="1" v-model="psyCardPr.excitement">
                                            </td>
                                            <td>2
                                                <input type="radio" @click="calculateSum" name="excitement" value="2" v-model="psyCardPr.excitement">
                                            </td>
                                            <td>3
                                                <input type="radio" @click="calculateSum" name="excitement" value="3" v-model="psyCardPr.excitement">
                                            </td>
                                            <td>4
                                                <input type="radio" @click="calculateSum" name="excitement" value="4" v-model="psyCardPr.excitement">
                                            </td>
                                            <td>5
                                                <input type="radio" @click="calculateSum" name="excitement" value="5" v-model="psyCardPr.excitement">
                                            </td>
                                            <td>6
                                                <input type="radio" @click="calculateSum" name="excitement" value="6" v-model="psyCardPr.excitement">
                                            </td>
                                            <td>7
                                                <input type="radio" @click="calculateSum" name="excitement" value="7" v-model="psyCardPr.excitement">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Distraibilità</td>
                                            <td>NV
                                                <input type="radio" @click="calculateSum" name="distractibility" value="0" v-model="psyCardPr.distractibility">
                                            </td>
                                            <td>1
                                                <input type="radio" @click="calculateSum" name="distractibility" value="1" v-model="psyCardPr.distractibility">
                                            </td>
                                            <td>2
                                                <input type="radio" @click="calculateSum" name="distractibility" value="2" v-model="psyCardPr.distractibility">
                                            </td>
                                            <td>3
                                                <input type="radio" @click="calculateSum" name="distractibility" value="3" v-model="psyCardPr.distractibility">
                                            </td>
                                            <td>4
                                                <input type="radio" @click="calculateSum" name="distractibility" value="4" v-model="psyCardPr.distractibility">
                                            </td>
                                            <td>5
                                                <input type="radio" @click="calculateSum" name="distractibility" value="5" v-model="psyCardPr.distractibility">
                                            </td>
                                            <td>6
                                                <input type="radio" @click="calculateSum" name="distractibility" value="6" v-model="psyCardPr.distractibility">
                                            </td>
                                            <td>7
                                                <input type="radio" @click="calculateSum" name="distractibility" value="7" v-model="psyCardPr.distractibility">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Iperattività motoria</td>
                                            <td>NV
                                                <input type="radio" @click="calculateSum" name="motor_hyperactivity" value="0" v-model="psyCardPr.motorHyperactivity">
                                            </td>
                                            <td>1
                                                <input type="radio" @click="calculateSum" name="motor_hyperactivity" value="1" v-model="psyCardPr.motorHyperactivity">
                                            </td>
                                            <td>2
                                                <input type="radio" @click="calculateSum" name="motor_hyperactivity" value="2" v-model="psyCardPr.motorHyperactivity">
                                            </td>
                                            <td>3
                                                <input type="radio" @click="calculateSum" name="motor_hyperactivity" value="3" v-model="psyCardPr.motorHyperactivity">
                                            </td>
                                            <td>4
                                                <input type="radio" @click="calculateSum" name="motor_hyperactivity" value="4" v-model="psyCardPr.motorHyperactivity">
                                            </td>
                                            <td>5
                                                <input type="radio" @click="calculateSum" name="motor_hyperactivity" value="5" v-model="psyCardPr.motorHyperactivity">
                                            </td>
                                            <td>6
                                                <input type="radio" @click="calculateSum" name="motor_hyperactivity" value="6" v-model="psyCardPr.motorHyperactivity">
                                            </td>
                                            <td>7
                                                <input type="radio" @click="calculateSum" name="motor_hyperactivity" value="7" v-model="psyCardPr.motorHyperactivity">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Manierismi e posture</td>
                                            <td>NV
                                                <input type="radio" @click="calculateSum" name="mannerism_and_posture" value="0" v-model="psyCardPr.mannerismAndPosture">
                                            </td>
                                            <td>1
                                                <input type="radio" @click="calculateSum" name="mannerism_and_posture" value="1" v-model="psyCardPr.mannerismAndPosture">
                                            </td>
                                            <td>2
                                                <input type="radio" @click="calculateSum" name="mannerism_and_posture" value="2" v-model="psyCardPr.mannerismAndPosture">
                                            </td>
                                            <td>3
                                                <input type="radio" @click="calculateSum" name="mannerism_and_posture" value="3" v-model="psyCardPr.mannerismAndPosture">
                                            </td>
                                            <td>4
                                                <input type="radio" @click="calculateSum" name="mannerism_and_posture" value="4" v-model="psyCardPr.mannerismAndPosture">
                                            </td>
                                            <td>5
                                                <input type="radio" @click="calculateSum" name="mannerism_and_posture" value="5" v-model="psyCardPr.mannerismAndPosture">
                                            </td>
                                            <td>6
                                                <input type="radio" @click="calculateSum" name="mannerism_and_posture" value="6" v-model="psyCardPr.mannerismAndPosture">
                                            </td>
                                            <td>7
                                                <input type="radio" @click="calculateSum" name="mannerism_and_posture" value="7" v-model="psyCardPr.mannerismAndPosture">
                                            </td>
                                        </tr>
                                        

                                        <div class="row" style="margin-top:20px;">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="item form-group" >
                                                <label for="total_score_rating" class="col-form-label col-md-6 col-sm-2 label-align"><strong><h2>Punteggio totale:</h2></strong></label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input type="text" name="punteggio" v-model="sum"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    </table>
                                    {{ psyCardPr }}
                                    <div class="ln_solid"></div>
                                    <div class="item form-group" >
                                        <div class="pull-right">
                                            <span  class="btn btn-success i2hBtn ml-3" @click="addPsyRating('pr')">{{btnPrSend}}</span>
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
    name: 'psyRating',

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
            psyPrDoctorId:0,
            psyPrDoctorName:'',
            psyPrDoctorLastname:'',
            psyPrDate:null,
            psyCardId:null,
            date:new Date(),

            psyCardPr:{},


            panel:'pr',

            psyCardMh:{},


            mainTitle:"psy",
            firstSave:true,
            pRSaved:false,

            
            btnPrSend:"Salva",
            total:0,               
            allPsyRatings:null,
        }
    },

    created: function () {
        // this.getPermissions();
        this.getPsyRatingsByUserInstanceId(1);
    },


    methods: {
        calculateSum() {
            // Calcola la somma delle opzioni selezionate
            //this.sum = parseInt(this.selectedOption) || 0;
            let i=0;
            for (const property in this.psyCardPr) {
                i += parseInt(this.psyCardPr[property]);  
            }
            console.log(i);
            this.sum=i;
        },

        
        addPsyRating(panel){
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
            
            if(_panel=='pr'){

                if(!this.pRSaved){
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
                form.append('section', 'pr');
                if(!this.isObjEmpty(this.psyCardMh)){
                    let _psyCardMh=JSON.stringify(this.psyCardMh);
                    alert(JSON.stringify(this.psyCardMh))
                    form.append('psyCardMh', _psyCardMh);
                }
                if(!this.isObjEmpty(this.psyCardPr)){
                    let _psyCard=JSON.stringify(this.psyCardPr);
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
                            this.getPsyRatingsByUserInstanceId(this.userInstance);
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


        getPsyRatings(){
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
        getPsyRatingById(id){
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
        getPsyRatingsByUserInstanceId(id){
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
                        if(response.data.PsyRating){
                            _wm.pRSaved=true;
                            _wm.btnPrSend="Aggiorna";

                            let _PsychiatricScal=response.data.PsyRating;
                            // _wm.psyCardId=response.data.psyCard.id;
    
                            _wm.psyCardId=response.data.psyCard.id;
                            _wm.psyPrDoctorId = _PsychiatricScal.id_doctor;

                            _wm.psyPrDoctorName = _PsychiatricScal.doctor_name;
                            _wm.psyPrDoctorLastname = _PsychiatricScal.doctor_lastname;

                            
                            _wm.psyCardPr.somaticConcern =_PsychiatricScal.somatic_concern;
                            _wm.psyCardPr.anxiety = _PsychiatricScal.anxiety 	
                            _wm.psyCardPr.depression = _PsychiatricScal.depression 
                            _wm.psyCardPr.riskOfSuicide = _PsychiatricScal.risk_of_suicide
                            _wm.psyCardPr.feelingOfGuilt = _PsychiatricScal.feeling_of_guilt 
                            _wm.psyCardPr.hostility = _PsychiatricScal.hostility
                            _wm.psyCardPr.moodElevation = _PsychiatricScal.mood_elevation
                            _wm.psyCardPr.grandeur = _PsychiatricScal.grandeur 
                            _wm.psyCardPr.suspiciousness = _PsychiatricScal.suspiciousness
                            _wm.psyCardPr.hallucination = _PsychiatricScal.hallucination 
                            _wm.psyCardPr.unusualContentOfThought = _PsychiatricScal.unusual_content_of_thought
                            _wm.psyCardPr.bizarreBehavior = _PsychiatricScal.bizarre_behavior 
                            _wm.psyCardPr.neglectOfSelfCare = _PsychiatricScal.neglect_of_self_care
                            _wm.psyCardPr.disorientation = _PsychiatricScal.disorientation
                            _wm.psyCardPr.conceptualDisorganization = _PsychiatricScal.conceptual_disorganization
                            _wm.psyCardPr.emotionalFlattening = _PsychiatricScal.emotional_flattening 
                            _wm.psyCardPr.emotionalIsolation = _PsychiatricScal.emotional_isolation 
                            _wm.psyCardPr.motorSlowdown = _PsychiatricScal.motor_slowdown 
                            _wm.psyCardPr.lackOfCooperation = _PsychiatricScal.lack_of_cooperation
                            _wm.psyCardPr.excitement = _PsychiatricScal.excitement
                            _wm.psyCardPr.distractibility = _PsychiatricScal.distractibility
                            _wm.psyCardPr.motorHyperactivity = _PsychiatricScal.motor_hyperactivity
                            _wm.psyCardPr.mannerismAndPosture = _PsychiatricScal.mannerism_and_posture
                            _wm.psyCardPr.totalScotrRating = _PsychiatricScal.total_score_rating



                            _wm.allPsyRatings=response.data.allPsyRatings;
                        }else{
                            _wm.btnPrSend="Salva";
                        }
                        
                        _wm.firstSave=false;
                    }else if(error == 7){
                        _wm.btnPrSend="Salva";
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
