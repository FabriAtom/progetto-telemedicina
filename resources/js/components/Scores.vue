<div class="scores">

    <h3 class="scoresTitle">SCORES per la valutazione (mmg) nell'arruolamento dei pazienti nel Progetto AmbuCri-Tx</h3>
    <div class="clearfix"></div>

    <div class="row" style="margin-top: 30px;" v-if="viewTipology=='acceptance'">
        <div class="col-md-12 col-sm-12">
            <h4 class="dbTitle">DATI PRELIMINARI DA INSERIRE (*= campo obbligatorio)</h4>
        </div>
    </div>

    <fieldset class="scheduler-border" v-if="viewTipology=='acceptance'">
        <div class="form-row" style="margin-top: 30px;">
            <div class="col-md-4">
                <label for="weight">Peso in kg:</label>
                <input type="number" id="weight" name="weight" style="width:100%" @input="calculateScores(scores.weight,'bmi')" v-model='scores.weight'>
            </div>
            <div class="col-md-4">
                <label for="height">Altezza in centimetri:</label>
                <input type="number" id="height" name="height" style="width:100%" @input="calculateScores(scores.height,'bmi')" v-model='scores.height'>
            </div>
            <div class="col-md-4">
                <label for="bmi">Bmi:</label>
                <input :disabled="true" type="number" id="bmi" name="bmi" style="width:100%" v-model='scores.bmi'>
            </div>
            <div class="col-md-4">
                <label for="Type">Genere:</label>
                <input type="text" id="Type" name="Type" style="width:100%" v-model='scores.Type'>
            </div>
            <div class="col-md-4">
                <label for="age">Età:</label>
                <input type="number" id="age" name="age" style="width:100%" v-model='scores.age'>
            </div>
        </div>


        <div class="clearfix" ></div>
        <div class="form-row" style="margin-top: 30px;">
            <div class="col-md-12 col-sm-12">
                <div class="btn-group btn-group-toggle btn-ric-av" data-toggle="buttons">

                    <label class="aaaDrugsLabel" for="previousDiagnosisCardioDiseases ">Diagnosi pregresse di Patologie Cardiovascolari*</label>
                    <input type="checkbox" name="previousDiagnosisCardioDiseases" id="previousDiagnosisCardioDiseases"  @change="calculateScores(scores.previousDiagnosisCardioDiseases,'previousDiagnosisCardioDiseases')" v-model="scores.previousDiagnosisCardioDiseases"><br/>

                    <label class="aaaDrugsLabel" for="pharmacologicalTreatment ">Sono in trattamento farmacologico*</label>
                    <input type="checkbox" name="pharmacologicalTreatment" id="pharmacologicalTreatment"  @change="calculateScores(scores.pharmacologicalTreatment,'pharmacologicalTreatment')" v-model="scores.pharmacologicalTreatment">

                    <label class="aaaDrugsLabel" for="specifyMedications ">Specificare eventuali farmaci*</label>
                    <input type="text" name="specifyMedications" id="specifyMedications"  @change="calculateScores(scores.specifyMedications,'specifyMedications')" v-model="scores.specifyMedications">
                </div>
            </div>
        </div>  
    </fieldset>


    <fieldset class="scheduler-border" v-if="viewTipology=='acceptance'">
        <div class="clearfix" ></div>
        <div class="row" style="margin-top: 30px;" v-if="viewTipology=='acceptance'">
            <div class="col-md-12 col-sm-12">
                <h4 class="dbTitle">FATTORI DI RISCHIO (*= campo obbligatorio)</h4>
            </div>
        </div>
        
        <div class="form-row" style="margin-top: 30px;">
            <div class="col-md-12 col-sm-12">
                <div class="btn-group btn-group-toggle btn-ric-av" data-toggle="buttons">

                    <label class="aaaDrugsLabel" for="hypertension">Ipertensione arteriosa</label>
                    <input type="checkbox" name="hypertension" id="hypertension"  @change="calculateScores(scores.hypertension,'hypertension')" v-model="scores.hypertension"><br>

                    <label class="aaaDrugsLabel" for="smoke">Fumo*</label>
                    <input type="checkbox" name="smoke" id="smoke" @change="calculateScores(scores.smoke,'smoke')" v-model="scores.smoke"><br>

                    <label class="aaaDrugsLabel" for="overweightObesity">Sovrappeso</label>
                    <input type="checkbox" name="overweightObesity" id="overweightObesity" value="1" @change="calculateScores(scores.overweightObesity,'overweightObesity')" v-model="scores.overweightObesity"><br>

                    <label class="aaaDrugsLabel" for="overweightObesity">Obesità</label>
                    <input type="checkbox" name="overweightObesity" id="overweightObesity" value="2" @change="calculateScores(scores.overweightObesity,'overweightObesity')"  v-model="scores.overweightObesity"><br>  


                    <label class="aaaDrugsLabel" for="familyHistoryCardiovascular">Storia familiare di malattia cardiovascolare*</label>
                    <input type="checkbox" name="familyHistoryCardiovascular" id="familyHistoryCardiovascular" @change="calculateScores(scores.familyHistoryCardiovascular,'familyHistoryCardiovascular')" v-model="scores.familyHistoryCardiovascular"><br>  


                    <label class="aaaDrugsLabel" for="diabetes">Diabete mellito*</label>
                    <input type="checkbox" name="diabetes" id="diabetes" @change="calculateScores(scores.diabetes,'diabetes')" v-model="scores.diabetes"><br>  

                   
                    <label class="aaaDrugsLabel" for="hypercholesterolemia">Ipercolesterolemia</label>
                    <input type="checkbox" name="hypercholesterolemia" id="hypercholesterolemia"  @change="calculateScores(scores.hypercholesterolemia,'hypercholesterolemia')" v-model="scores.hypercholesterolemia"><br>


                    <label class="aaaDrugsLabel" for="heartFailure">Scompenso cardiaco noto e/o renale*</label>
                    <input type="checkbox" name="heartFailure" id="heartFailure"  @change="calculateScores(scores.heartFailure,'heartFailure')" v-model="scores.heartFailure"><br>


                    <label class="aaaDrugsLabel" for="physicalActivity">Fai attività fisica almeno 30' al giorno</label>
                    <input type="checkbox" name="physicalActivity" id="physicalActivity"  @change="calculateScores(scores.physicalActivity,'physicalActivity')" v-model="scores.physicalActivity"><br>


                    <label class="aaaDrugsLabel" for="eatFruitEvery">Mangi frutta e verdura tutti i giorni*</label>
                    <input type="checkbox" name="eatFruitEvery" id="eatFruitEvery"  @change="calculateScores(scores.eatFruitEvery,'eatFruitEvery')" v-model="scores.eatFruitEvery"><br>


                    <label class="aaaDrugsLabel" for="liveAlone">Vivi da solo*</label>
                    <input type="checkbox" name="liveAlone" id="liveAlone"  @change="calculateScores(scores.liveAlone,'liveAlone')" v-model="scores.liveAlone"><br>
                </div>
            </div>
        </div>  
    </fieldset>

    
    <div class="row" style="margin-top: 30px;" v-if="viewTipology=='acceptance'">
        <div class="col-md-12 col-sm-12">
            <h4 class="dbTitle">DATI SCOMPENSO CARDIACO E PATOLOGIE CARDIOVASCOLARI (*= campo obbligatorio)</h4>
        </div>
    </div>

    <div class="clearfix"></div>
    <fieldset class="scheduler-border" v-if="viewTipology=='acceptance'">
        <div class="form-row" style="margin-top: 30px;">
            <div class="col-md-12 col-sm-12">

                <label class="aaaDrugsLabel" for="historyHeartFailure">Storia di scompenso cardiaco</label>
                <input type="checkbox" name="historyHeartFailure" id="historyHeartFailure"  @change="calculateScores(scores.historyHeartFailure,'historyHeartFailure')" v-model="scores.historyHeartFailure"><br>

                <label class="aaaDrugsLabel" for="BloodPressure">Oggi la mia pressione arteriosa è:</label>
                <input type="text" name="PressureDiastolic" id="PressureDiastolic"  @change="calculateScores(scores.PressureDiastolic,'PressureDiastolic')" v-model="scores.PressureDiastolic"><br>
                <input type="text" name="PressureSistolic" id="PressureSistolic"  @change="calculateScores(scores.PressureSistolic,'PressureSistolic')" v-model="scores.PressureSistolic"><br>

                <label class="aaaDrugsLabel" for="IrregularHeartbeatDevice">l'apparecchio ha rilevato battiti cardiaci irregolari? (campo da compilare <br> solo per chi usa un apparecchio con tecnologia in grado di rilevare battiti cardiaci irregolari)</label>
                <input type="checkbox" name="IrregularHeartbeatDevice" id="IrregularHeartbeatDevice"  @change="calculateScores(scores.IrregularHeartbeatDevice,'IrregularHeartbeatDevice')" v-model="scores.IrregularHeartbeatDevice"><br>

                <label class="aaaDrugsLabel" for="heartAttack">Ho avuto un infarto Miocardico in passato?</label>
                <input type="checkbox" name="heartAttack" id="heartAttack"  @change="calculateScores(scores.heartAttack,'heartAttack')" v-model="scores.heartAttack"><br>
            
                <label class="aaaDrugsLabel" for="myocardialStroke">Ho avuto un Ictus Miocardico in passato?</label>
                <input type="checkbox" name="myocardialStroke" id="myocardialStroke"  @change="calculateScores(scores.myocardialStroke,'myocardialStroke')" v-model="scores.myocardialStroke"><br>

                <label class="aaaDrugsLabel" for="atrialFibrillation">Ho avuto mai Fibrillazione Atriale?</label>
                <input type="checkbox" name="atrialFibrillation" id="atrialFibrillation" @change="calculateScores(scores.atrialFibrillation,'atrialFibrillation')" v-model="scores.atrialFibrillation"><br>
            
                <label class="aaaDrugsLabel" for="breathlessnessStairs">Ho affanno quando salgo le scale?</label>
                <input type="checkbox" name="breathlessnessStairs" id="breathlessnessStairs" @change="calculateScores(scores.breathlessnessStairs,'breathlessnessStairs')" v-model="scores.breathlessnessStairs"><br>

                <label class="aaaDrugsLabel" for="snoring">Russo durante il sonno?</label>
                <input type="checkbox" name="snoring" id="snoring" @change="calculateScores(scores.snoring,'snoring')" v-model="scores.snoring"><br>
            
                <label class="aaaDrugsLabel" for="difficultyErection">Ho difficoltà all'erezione? se uomo</label>
                <input type="checkbox" name="difficultyErection" id="difficultyErection" @change="calculateScores(scores.difficultyErection,'difficultyErection')" v-model="scores.difficultyErection"><br>

                <label class="aaaDrugsLabel" for="measureBelly">Misura rapporto pancia/anche</label>
                <input type="text" name="measureBelly" id="measureBelly" @change="calculateScores(scores.measureBelly,'measureBelly')" v-model="scores.measureBelly"><br>

            </div>
        </div>  
    </fieldset>















    if($request->has('scores')) {
        $scoresArr = json_decode($request->input('scores'), true);
        $score = new Score;
        $score->acceptance_id=$UAcceptance->id;
        $score->user_id=$UserId;
        if(array_key_exists('height',$scoresArr)){
            $score->height=$scoresArr['height'];
        }
        if(array_key_exists('weight',$scoresArr)){
            $score->weight=$scoresArr['weight'];
        }
        if(array_key_exists('bmi',$scoresArr)){
            $score->bmi=$scoresArr['bmi'];
        }

        <!------------------- DATI PRELIMINARI DA INSERIRE  ------------------------------------------------>

        if(array_key_exists('previousDiagnosisCardioDiseases',$scoresArr)){
            $score->previous_diagnosis_cardio_diseases=$scoresArr['previousDiagnosisCardioDiseases'];
        }
        if(array_key_exists('pharmacologicalTreatment',$scoresArr)){
            $score->pharmacological_treatment_more_than_four_day=$scoresArr['pharmacologicalTreatment'];
        }
        if(array_key_exists('specifyMedications',$scoresArr)){
            $score->specify_medications=$scoresArr['specifyMedications'];
        }

<!---------------------------  FATTORI DI RISCHIO   ------------------------------------------------>
        if(array_key_exists('hypertension',$scoresArr)){
            $score->hypertension=$scoresArr['hypertension'];
        }
        if(array_key_exists('smoke',$scoresArr)){
            $score->smoke=$scoresArr['smoke'];
        }
        if(array_key_exists('overweightObesity',$scoresArr)){
            $score->overweight_obesity=$scoresArr['overweightObesity'];
        }
        if(array_key_exists('familyHistoryCardiovascular',$scoresArr)){
            $score->family_history_cardiovascular=$scoresArr['familyHistoryCardiovascular'];
        }
        if(array_key_exists('diabetes',$scoresArr)){
            $score->diabetes=$scoresArr['diabetes'];
        }
        if(array_key_exists('hypercholesterolemia',$scoresArr)){
            $score->hypercholesterolemia=$scoresArr['hypercholesterolemia'];
        }
        if(array_key_exists('HeartFailure',$scoresArr)){
            $score->heart_failure=$scoresArr['HeartFailure'];
        }
        if(array_key_exists('physicalActivity',$scoresArr)){
            $score->physical_activity=$scoresArr['physicalActivity'];
        }
        if(array_key_exists('eatFruitEvery',$scoresArr)){
            $score->eat_fruit_every=$scoresArr['eatFruitEvery'];
        }
        if(array_key_exists('liveAlone',$scoresArr)){
            $score->live_alone=$scoresArr['liveAlone'];
        }

<!----------------------- DATI SCOMPENSO CARDIACO E PATOLOGIE CARDIOVASCOLARI  ------------------------------------>

        if(array_key_exists('historyHeartFailure',$scoresArr)){
            $score->history_heart_failure=$scoresArr['historyHeartFailure'];
        }
        if(array_key_exists('bloodPressure',$scoresArr)){
            $score->blood_pressure_greater_than_150_90=$scoresArr['bloodPressure'];
        }
        if(array_key_exists('IrregularHeartbeatDevice',$scoresArr)){
            $score->Irregular_heartbeat_device=$scoresArr['IrregularHeartbeatDevice'];
        }
        if(array_key_exists('heartAttack',$scoresArr)){
            $score->heart_attack=$scoresArr['heartAttack'];
        }
        if(array_key_exists('myocardialStroke',$scoresArr)){
            $score->myocardial_stroke=$scoresArr['myocardialStroke'];
        }
        if(array_key_exists('atrialFibrillation',$scoresArr)){
            $score->atrial_fibrillation=$scoresArr['atrialFibrillation'];
        }
        if(array_key_exists('breathlessnessStairs',$scoresArr)){
            $score->breathlessness_stairs_greater_than_4=$scoresArr['breathlessnessStairs'];
        }
        if(array_key_exists('snoring',$scoresArr)){
            $score->snoring=$scoresArr['snoring'];
        }
        if(array_key_exists('difficultyErection',$scoresArr)){
            $score->difficulty_erection=$scoresArr['difficultyErection'];
        }
        if(array_key_exists('measureBelly',$scoresArr)){
            $score->measure_belly=$scoresArr['measureBelly'];
        }

<!--------------------------------------------------------------------------->

        if($request->has('idDoctor')) {
            $score->id_doctor=$request['idDoctor'];
        } 
        if($request->has('doctorFullName')) {
            $score->doctor_full_name=$request['doctorFullName'];
        } 
        if($request->has('totalScores')) {
            $score->total_score=$request['totalScores'];
        }
        $score->save();

    }