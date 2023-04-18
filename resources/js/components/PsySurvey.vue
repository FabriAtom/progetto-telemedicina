<template>
    <div class="container">
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title" style="background:lightgrey;padding:7px; border-radius:3px; margin-top:5px;">
                            <h1><strong> Clinical Outcome in Routine Evaluation</strong></h1>
                        </div>

                        <div class="x_content">

                        <!-- <div class="tab-content" id="myTabContent"> -->
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left align-items-center">

                                <h3 class="mt-5"><strong>Nell'ultima settimana</strong></h3>

                                <table>
                                    <tr>
                                        <td style="border: 0;"></td>
                                        <td style="border: 0;"></td>
                                        <td style="border: 0;"><strong>Per nulla</strong></td>
                                        <td style="border: 0;"><strong>Solo occasionalmente</strong></td>
                                        <td style="border: 0;"><strong>Ogni tanto</strong></td>
                                        <td style="border: 0;"><strong>Spesso</strong></td>
                                        <td style="border: 0;"> <strong>Molto spesso <br> o sempre</strong></td>
                                    </tr>
                                    <tr style="background:lightgrey;">
                                        <td>1</td>
                                        <td>Mi sono sentito terribilmente solo e isolato</td>
                                        <td>
                                            <input type="radio"  name="survey_heard_alone" value="per nulla" v-model="psyCardPs.surveyHeardAlone">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_heard_alone" value="solo occasionalmente" v-model="psyCardPs.surveyHeardAlone">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_heard_alone" value="ogni tanto" v-model="psyCardPs.surveyHeardAlone">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_heard_alone" value="spesso" v-model="psyCardPs.surveyHeardAlone">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_heard_alone" value="molto spesso o sempre" v-model="psyCardPs.surveyHeardAlone">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>2</td>
                                        <td>Mi sono sentito teso, ansioso o nervoso</td>
                                        <td>
                                            <input type="radio"  name="survey_heard_anxious" value="per nulla" v-model="psyCardPs.surveyHeardAnxious">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_heard_anxious" value="solo occasionalmente" v-model="psyCardPs.surveyHeardAnxious">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_heard_anxious" value="ogni tanto" v-model="psyCardPs.surveyHeardAnxious">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_heard_anxious" value="spesso" v-model="psyCardPs.surveyHeardAnxious">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_heard_anxious" value="molto spesso o sempre" v-model="psyCardPs.surveyHeardAnxious">
                                        </td>
                                    </tr> 
                                    <tr style="background:lightgrey;">
                                        <td>3</td>
                                        <td>Ho sentito di avere qualcuno a cui rivolgermi per ricevere un <br> sostegno quando ne ho avuto bisogno</td>
                                        <td>
                                            <input type="radio"  name="survey_support" value="per nulla" v-model="psyCardPs.surveySupport">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_support" value="solo occasionalmente" v-model="psyCardPs.surveySupport">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_support" value="ogni tanto" v-model="psyCardPs.surveySupport">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_support" value="spesso" v-model="psyCardPs.surveySupport">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_support" value="molto spesso o sempre" v-model="psyCardPs.surveySupport">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>4</td>
                                        <td>Mi sono sentito a posto con me stesso</td>
                                        <td>
                                            <input type="radio"  name="survey_okay_with_myself" value="per nulla" v-model="psyCardPs.surveyOkayWithMyself">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_okay_with_myself" value="solo occasionalmente" v-model="psyCardPs.surveyOkayWithMyself">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_okay_with_myself" value="ogni tanto" v-model="psyCardPs.surveyOkayWithMyself">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_okay_with_myself" value="spesso" v-model="psyCardPs.surveyOkayWithMyself">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_okay_with_myself" value="molto spesso o sempre" v-model="psyCardPs.surveyOkayWithMyself">
                                        </td>
                                    </tr> 
                                    <tr style="background:lightgrey;">
                                        <td>5</td>
                                        <td>Mi sono sentito completamente privo di energia e di entusiasmo</td>
                                        <td>
                                            <input type="radio"  name="survey_devoid_of_energy" value="per nulla" v-model="psyCardPs.surveyDevoidOfEnergy">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_devoid_of_energy" value="solo occasionalmente" v-model="psyCardPs.surveyDevoidOfEnergy">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_devoid_of_energy" value="ogni tanto" v-model="psyCardPs.surveyDevoidOfEnergy">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_devoid_of_energy" value="spesso" v-model="psyCardPs.surveyDevoidOfEnergy">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_devoid_of_energy" value="molto spesso o sempre" v-model="psyCardPs.surveyDevoidOfEnergy">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>6</td>
                                        <td>Sono stato violento fisicamente verso altre persone</td>
                                        <td>
                                            <input type="radio"  name="survey_violent_towards_others" value="per nulla" v-model="psyCardPs.surveyViolentTowardsOthers">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_violent_towards_others" value="solo occasionalmente" v-model="psyCardPs.surveyViolentTowardsOthers">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_violent_towards_others" value="ogni tanto" v-model="psyCardPs.surveyViolentTowardsOthers">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_violent_towards_others" value="spesso" v-model="psyCardPs.surveyViolentTowardsOthers">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_violent_towards_others" value="molto spesso o sempre" v-model="psyCardPs.surveyViolentTowardsOthers">
                                        </td>
                                    </tr> 
                                    <tr style="background:lightgrey;">
                                        <td>7</td>
                                        <td>Mi sono sentito capace di adattarmi in caso di difficoltà</td>
                                        <td>
                                            <input type="radio"  name="survey_able_to_adapt" value="per nulla" v-model="psyCardPs.surveyAbleToAdapt">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_able_to_adapt" value="solo occasionalmente" v-model="psyCardPs.surveyAbleToAdapt">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_able_to_adapt" value="ogni tanto" v-model="psyCardPs.surveyAbleToAdapt">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_able_to_adapt" value="spesso" v-model="psyCardPs.surveyAbleToAdapt">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_able_to_adapt" value="molto spesso o sempre" v-model="psyCardPs.surveyAbleToAdapt">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>8</td>
                                        <td>Sono stato disturbato da malesseri, dolori o altri problemi fisici</td>
                                        <td>
                                            <input type="radio"  name="survey_disturbed" value="per nulla" v-model="psyCardPs.surveyDisturbed">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_disturbed" value="solo occasionalmente" v-model="psyCardPs.surveyDisturbed">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_disturbed" value="ogni tanto" v-model="psyCardPs.surveyDisturbed">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_disturbed" value="spesso" v-model="psyCardPs.surveyDisturbed">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_disturbed" value="molto spesso o sempre" v-model="psyCardPs.surveyDisturbed">
                                        </td>
                                    </tr> 
                                    <tr style="background:lightgrey;">
                                        <td>9</td>
                                        <td>Ho pensato a farmi del male</td>
                                        <td>
                                            <input type="radio"  name="survey_hurt_me" value="per nulla" v-model="psyCardPs.surveyHurtMe">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_hurt_me" value="solo occasionalmente" v-model="psyCardPs.surveyHurtMe">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_hurt_me" value="ogni tanto" v-model="psyCardPs.surveyHurtMe">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_hurt_me" value="spesso" v-model="psyCardPs.surveyHurtMe">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_hurt_me" value="molto spesso o sempre" v-model="psyCardPs.surveyHurtMe">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>10</td>
                                        <td>Non ho avuto la forza di parlare con le altre persone</td>
                                        <td>
                                            <input type="radio"  name="survey_not_force_to_speak" value="per nulla" v-model="psyCardPs.surveyNotForceToSpeak">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_not_force_to_speak" value="solo occasionalmente" v-model="psyCardPs.surveyNotForceToSpeak">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_not_force_to_speak" value="ogni tanto" v-model="psyCardPs.surveyNotForceToSpeak">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_not_force_to_speak" value="spesso" v-model="psyCardPs.surveyNotForceToSpeak">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_not_force_to_speak" value="molto spesso o sempre" v-model="psyCardPs.surveyNotForceToSpeak">
                                        </td>
                                    </tr> 
                                    <tr style="background:lightgrey;">
                                        <td>11</td>
                                        <td>La tensione e l'ansia mi hanno impedito di fare cose importanti</td>
                                        <td>
                                            <input type="radio"  name="survey_tension_prevented" value="per nulla" v-model="psyCardPs.surveyTensionPrevented">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_tension_prevented" value="solo occasionalmente" v-model="psyCardPs.surveyTensionPrevented">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_tension_prevented" value="ogni tanto" v-model="psyCardPs.surveyTensionPrevented">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_tension_prevented" value="spesso" v-model="psyCardPs.surveyTensionPrevented">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_tension_prevented" value="molto spesso o sempre" v-model="psyCardPs.surveyTensionPrevented">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>12</td>
                                        <td>Sono stato contento per le cose che ho fatto</td>
                                        <td>
                                            <input type="radio"  name="survey_happy" value="per nulla" v-model="psyCardPs.surveyHappy">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_happy" value="solo occasionalmente" v-model="psyCardPs.surveyHappy">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_happy" value="ogni tanto" v-model="psyCardPs.surveyHappy">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_happy" value="spesso" v-model="psyCardPs.surveyHappy">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_happy" value="molto spesso o sempre" v-model="psyCardPs.surveyHappy">
                                        </td>
                                    </tr> 
                                    <tr style="background:lightgrey;">
                                        <td>13</td>
                                        <td>Sono stato disturbato da pensieri e stati d'animo indesiderati</td>
                                        <td>
                                            <input type="radio"  name="survey_disturbed_by_thoughts" value="per nulla" v-model="psyCardPs.surveyDisturbedByThoughts">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_disturbed_by_thoughts" value="solo occasionalmente" v-model="psyCardPs.surveyDisturbedByThoughts">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_disturbed_by_thoughts" value="ogni tanto" v-model="psyCardPs.surveyDisturbedByThoughts">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_disturbed_by_thoughts" value="spesso" v-model="psyCardPs.surveyDisturbedByThoughts">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_disturbed_by_thoughts" value="molto spesso o sempre" v-model="psyCardPs.surveyDisturbedByThoughts">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>14</td>
                                        <td>Ho avuto voglia di piangere</td>
                                        <td>
                                            <input type="radio"  name="survey_cry" value="per nulla" v-model="psyCardPs.surveyCry">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_cry" value="solo occasionalmente" v-model="psyCardPs.surveyCry">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_cry" value="ogni tanto" v-model="psyCardPs.surveyCry">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_cry" value="spesso" v-model="psyCardPs.surveyCry">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_cry" value="molto spesso o sempre" v-model="psyCardPs.surveyCry">
                                        </td>
                                    </tr> 
                                    <tr style="background:lightgrey;">
                                        <td>15</td>
                                        <td>Ho provato panico e terrore</td>
                                        <td>
                                            <input type="radio"  name="survey_felt_panic" value="per nulla" v-model="psyCardPs.surveyFeltPanic">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_panic" value="solo occasionalmente" v-model="psyCardPs.surveyFeltPanic">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_panic" value="ogni tanto" v-model="psyCardPs.surveyFeltPanic">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_panic" value="spesso" v-model="psyCardPs.surveyFeltPanic">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_panic" value="molto spesso o sempre" v-model="psyCardPs.surveyFeltPanic">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>16</td>
                                        <td>Ho progettato di mettere fine alla mia vita</td>
                                        <td>
                                            <input type="radio"  name="survey_planned_to_suicide" value="per nulla" v-model="psyCardPs.surveyPlannedToSuicide">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_planned_to_suicide" value="solo occasionalmente" v-model="psyCardPs.surveyPlannedToSuicide">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_planned_to_suicide" value="ogni tanto" v-model="psyCardPs.surveyPlannedToSuicide">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_planned_to_suicide" value="spesso" v-model="psyCardPs.surveyPlannedToSuicide">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_planned_to_suicide" value="molto spesso o sempre" v-model="psyCardPs.surveyPlannedToSuicide">
                                        </td>
                                    </tr> 
                                    <tr style="background:lightgrey;">
                                        <td>17</td>
                                        <td>Mi sono sentito sopraffatto dai miei problemi</td>
                                        <td>
                                            <input type="radio"  name="survey_felt_overwhelmed" value="per nulla" v-model="psyCardPs.surveyFeltOverwhelmed">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_overwhelmed" value="solo occasionalmente" v-model="psyCardPs.surveyFeltOverwhelmed">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_overwhelmed" value="ogni tanto" v-model="psyCardPs.surveyFeltOverwhelmed">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_overwhelmed" value="spesso" v-model="psyCardPs.surveyFeltOverwhelmed">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_overwhelmed" value="molto spesso o sempre" v-model="psyCardPs.surveyFeltOverwhelmed">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>18</td>
                                        <td>Ho avuto difficoltà ad addormentarmi o mantenere il sonno</td>
                                        <td>
                                            <input type="radio"  name="survey_difficulty_falling_asleep" value="per nulla" v-model="psyCardPs.surveyDifficultyFallingAsleep">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_difficulty_falling_asleep" value="solo occasionalmente" v-model="psyCardPs.surveyDifficultyFallingAsleep">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_difficulty_falling_asleep" value="ogni tanto" v-model="psyCardPs.surveyDifficultyFallingAsleep">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_difficulty_falling_asleep" value="spesso" v-model="psyCardPs.surveyDifficultyFallingAsleep">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_difficulty_falling_asleep" value="molto spesso o sempre" v-model="psyCardPs.surveyDifficultyFallingAsleep">
                                        </td>
                                    </tr> 
                                    <tr style="background:lightgrey;">
                                        <td>19</td>
                                        <td>Ho provato calore o affetto per qualcuno</td>
                                        <td>
                                            <input type="radio"  name="survey_felt_affection" value="per nulla" v-model="psyCardPs.surveyFeltAffection">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_affection" value="solo occasionalmente" v-model="psyCardPs.surveyFeltAffection">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_affection" value="ogni tanto" v-model="psyCardPs.surveyFeltAffection">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_affection" value="spesso" v-model="psyCardPs.surveyFeltAffection">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_affection" value="molto spesso o sempre" v-model="psyCardPs.surveyFeltAffection">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>20</td>
                                        <td>Mi è stato impossibile mettere da parte i miei problemi</td>
                                        <td>
                                            <input type="radio"  name="survey_impossible_aside_problems" value="per nulla" v-model="psyCardPs.surveyImpossibleAsideProblems">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_impossible_aside_problems" value="solo occasionalmente" v-model="psyCardPs.surveyImpossibleAsideProblems">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_impossible_aside_problems" value="ogni tanto" v-model="psyCardPs.surveyImpossibleAsideProblems">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_impossible_aside_problems" value="spesso" v-model="psyCardPs.surveyImpossibleAsideProblems">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_impossible_aside_problems" value="molto spesso o sempre" v-model="psyCardPs.surveyImpossibleAsideProblems">
                                        </td>
                                    </tr> 
                                    <tr style="background:lightgrey;">
                                        <td>21</td>
                                        <td>Sono stato in grado di fare le cose la maggior parte delle cose che dovevo fare</td>
                                        <td>
                                            <input type="radio"  name="survey_able_to_do_things" value="per nulla" v-model="psyCardPs.surveyAbleToDoThings">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_able_to_do_things" value="solo occasionalmente" v-model="psyCardPs.surveyAbleToDoThings">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_able_to_do_things" value="ogni tanto" v-model="psyCardPs.surveyAbleToDoThings">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_able_to_do_things" value="spesso" v-model="psyCardPs.surveyAbleToDoThings">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_able_to_do_things" value="molto spesso o sempre" v-model="psyCardPs.surveyAbleToDoThings">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>22</td>
                                        <td>Ho minacciato e intimorito qualcuno</td>
                                        <td>
                                            <input type="radio"  name="survey_threatened_someone" value="per nulla" v-model="psyCardPs.surveyThreatenedSomeone">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_threatened_someone" value="solo occasionalmente" v-model="psyCardPs.surveyThreatenedSomeone">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_threatened_someone" value="ogni tanto" v-model="psyCardPs.surveyThreatenedSomeone">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_threatened_someone" value="spesso" v-model="psyCardPs.surveyThreatenedSomeone">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_threatened_someone" value="molto spesso o sempre" v-model="psyCardPs.surveyThreatenedSomeone">
                                        </td>
                                    </tr> 
                                    <tr style="background:lightgrey;">
                                        <td>23</td>
                                        <td>Mi sono sentito affranto o senza speranza</td>
                                        <td>
                                            <input type="radio"  name="survey_felt_heartbroken" value="per nulla" v-model="psyCardPs.surveyFeltHeartbroken">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_heartbroken" value="solo occasionalmente" v-model="psyCardPs.surveyFeltHeartbroken">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_heartbroken" value="ogni tanto" v-model="psyCardPs.surveyFeltHeartbroken">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_heartbroken" value="spesso" v-model="psyCardPs.surveyFeltHeartbroken">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_heartbroken" value="molto spesso o sempre" v-model="psyCardPs.surveyFeltHeartbroken">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>24</td>
                                        <td>Ho pensato: "sarebbe meglio essere morto"</td>
                                        <td>
                                            <input type="radio"  name="survey_thought_better_to_die" value="per nulla" v-model="psyCardPs.surveyThoughtBetterToDie">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_thought_better_to_die" value="solo occasionalmente" v-model="psyCardPs.surveyThoughtBetterToDie">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_thought_better_to_die" value="ogni tanto" v-model="psyCardPs.surveyThoughtBetterToDie">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_thought_better_to_die" value="spesso" v-model="psyCardPs.surveyThoughtBetterToDie">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_thought_better_to_die" value="molto spesso o sempre" v-model="psyCardPs.surveyThoughtBetterToDie">
                                        </td>
                                    </tr> 
                                    <tr style="background:lightgrey;">
                                        <td>25</td>
                                        <td>Mi sono sentito criticato da altre persone</td>
                                        <td>
                                            <input type="radio"  name="survey_felt_critical" value="per nulla" v-model="psyCardPs.surveyFeltCritical">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_critical" value="solo occasionalmente" v-model="psyCardPs.surveyFeltCritical">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_critical" value="ogni tanto" v-model="psyCardPs.surveyFeltCritical">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_critical" value="spesso" v-model="psyCardPs.surveyFeltCritical">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_critical" value="molto spesso o sempre" v-model="psyCardPs.surveyFeltCritical">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>26</td>
                                        <td>Ho pensato di non avere amici</td>
                                        <td>
                                            <input type="radio"  name="survey_thought_had_no_friends" value="per nulla" v-model="psyCardPs.surveyThoughtHadNoFriends">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_thought_had_no_friends" value="solo occasionalmente" v-model="psyCardPs.surveyThoughtHadNoFriends">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_thought_had_no_friends" value="ogni tanto" v-model="psyCardPs.surveyThoughtHadNoFriends">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_thought_had_no_friends" value="spesso" v-model="psyCardPs.surveyThoughtHadNoFriends">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_thought_had_no_friends" value="molto spesso o sempre" v-model="psyCardPs.surveyThoughtHadNoFriends">
                                        </td>
                                    </tr> 
                                    <tr style="background:lightgrey;">
                                        <td>27</td>
                                        <td>Mi sono sentito infelice</td>
                                        <td>
                                            <input type="radio"  name="survey_felt_unhappy" value="per nulla" v-model="psyCardPs.surveyFeltUnhappy">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_unhappy" value="solo occasionalmente" v-model="psyCardPs.surveyFeltUnhappy">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_unhappy" value="ogni tanto" v-model="psyCardPs.surveyFeltUnhappy">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_unhappy" value="spesso" v-model="psyCardPs.surveyFeltUnhappy">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_unhappy" value="molto spesso o sempre" v-model="psyCardPs.surveyFeltUnhappy">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>28</td>
                                        <td>Sono stato turbato da immagini o ricordi indesiderati</td>
                                        <td>
                                            <input type="radio"  name="survey_troubled_by_images" value="per nulla" v-model="psyCardPs.surveyTroubledByImages">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_troubled_by_images" value="solo occasionalmente" v-model="psyCardPs.surveyTroubledByImages">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_troubled_by_images" value="ogni tanto" v-model="psyCardPs.surveyTroubledByImages">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_troubled_by_images" value="spesso" v-model="psyCardPs.surveyTroubledByImages">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_troubled_by_images" value="molto spesso o sempre" v-model="psyCardPs.surveyTroubledByImages">
                                        </td>
                                    </tr> 
                                    <tr style="background:lightgrey;">
                                        <td>29</td>
                                        <td>Mi sono sentito irritato mentre ero con altre persone</td>
                                        <td>
                                            <input type="radio"  name="survey_felt_irritated" value="per nulla" v-model="psyCardPs.surveyFeltIrritated">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_irritated" value="solo occasionalmente" v-model="psyCardPs.surveyFeltIrritated">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_irritated" value="ogni tanto" v-model="psyCardPs.surveyFeltIrritated">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_irritated" value="spesso" v-model="psyCardPs.surveyFeltIrritated">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_irritated" value="molto spesso o sempre" v-model="psyCardPs.surveyFeltIrritated">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>30</td>
                                        <td>Ho pensato che è mia la colpa dei problemi e delle difficoltà che ho</td>
                                        <td>
                                            <input type="radio"  name="survey_thought_my_fault" value="per nulla" v-model="psyCardPs.surveyThoughtMyFault">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_thought_my_fault" value="solo occasionalmente" v-model="psyCardPs.surveyThoughtMyFault">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_thought_my_fault" value="ogni tanto" v-model="psyCardPs.surveyThoughtMyFault">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_thought_my_fault" value="spesso" v-model="psyCardPs.surveyThoughtMyFault">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_thought_my_fault" value="molto spesso o sempre" v-model="psyCardPs.surveyThoughtMyFault">
                                        </td>
                                    </tr> 
                                    <tr style="background:lightgrey;">
                                        <td>31</td>
                                        <td>Mi sono sentito ottimista per il mio futuro</td>
                                        <td>
                                            <input type="radio"  name="survey_optimistic_about_the_future" value="per nulla" v-model="psyCardPs.surveyOptimisticAboutTheFuture">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_optimistic_about_the_future" value="solo occasionalmente" v-model="psyCardPs.surveyOptimisticAboutTheFuture">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_optimistic_about_the_future" value="ogni tanto" v-model="psyCardPs.surveyOptimisticAboutTheFuture">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_optimistic_about_the_future" value="spesso" v-model="psyCardPs.surveyOptimisticAboutTheFuture">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_optimistic_about_the_future" value="molto spesso o sempre" v-model="psyCardPs.surveyOptimisticAboutTheFuture">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>32</td>
                                        <td>Ho ottenuto ciò che volevo</td>
                                        <td>
                                            <input type="radio"  name="survey_got_what_wanted" value="per nulla" v-model="psyCardPs.surveyGotWhatWanted">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_got_what_wanted" value="solo occasionalmente" v-model="psyCardPs.surveyGotWhatWanted">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_got_what_wanted" value="ogni tanto" v-model="psyCardPs.surveyGotWhatWanted">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_got_what_wanted" value="spesso" v-model="psyCardPs.surveyGotWhatWanted">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_got_what_wanted" value="molto spesso o sempre" v-model="psyCardPs.surveyGotWhatWanted">
                                        </td>
                                    </tr> 
                                    <tr style="background:lightgrey;">
                                        <td>33</td>
                                        <td>Mi sono sentito umiliato o messo in imbarazzo da altre persone</td>
                                        <td>
                                            <input type="radio"  name="survey_felt_humiliated" value="per nulla" v-model="psyCardPs.surveyFeltHumiliated">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_humiliated" value="solo occasionalmente" v-model="psyCardPs.surveyFeltHumiliated">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_humiliated" value="ogni tanto" v-model="psyCardPs.surveyFeltHumiliated">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_humiliated" value="spesso" v-model="psyCardPs.surveyFeltHumiliated">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_felt_humiliated" value="molto spesso o sempre" v-model="psyCardPs.surveyFeltHumiliated">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>34</td>
                                        <td>Mi sono fatto del male fisicamente o ho messo seriamente in pericolo la mia salute</td>
                                        <td>
                                            <input type="radio"  name="survey_hurt_myself" value="per nulla" v-model="psyCardPs.surveyHurtMyself">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_hurt_myself" value="solo occasionalmente" v-model="psyCardPs.surveyHurtMyself">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_hurt_myself" value="ogni tanto" v-model="psyCardPs.surveyHurtMyself">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_hurt_myself" value="spesso" v-model="psyCardPs.surveyHurtMyself">
                                        </td>
                                        <td>
                                            <input type="radio"  name="survey_hurt_myself" value="molto spesso o sempre" v-model="psyCardPs.surveyHurtMyself">
                                        </td>
                                    </tr> 
                                </table>

                                {{ psyCardPs }}
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="pull-right">
                                        <span class="btn btn-success i2hBtn ml-3" @click="addPsySurvey('ps')">{{btnPsSend}}</span>
                                    </div>
                                </div>
                                <a  class="btn btn-success i2hBtnPrint"  @click=" printPsySurvey('printPdf')"><i class="fa fa-print"></i>Stampa</a>
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
    name: 'PsySurvey',

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

            psyPsDoctorId:0,
            psyPsDoctorName:'',
            psyPsDoctorLastname:'',
            psyPsDate:null,
            psyCardId:null,
            date:new Date(),

            psyCardPs:{},
            // psyhowFeel:{},



            panel:'ps',



            mainTitle:"psy",
            firstSave:true,
            pSSaved:false,

            
            btnPsSend:"Salva",
            total:0,               
            allPsySurveys:null,
        }
    },

    created: function () {
        // this.getPermissions();
        this.getPsySurveysByUserInstanceId(1);
    },

    
    methods: {

        printPsySurvey(printPdf){

            let v_myWindow

            let url= 'printPdf/2';

            v_myWindow = window.open(url, 'v_myWindow', 'width=' + screen.width + ',height=' + screen.height + ', scrollbars=yes, titlebar=no, top=0, left=0');

            return false;
        },
 
        addPsySurvey(panel){
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
            
            if(_panel=='ps'){

                if(!this.pSSaved){
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
                form.append('section', 'ps');
                if(!this.isObjEmpty(this.psyCardPs)){
                    // alert(JSON.stringify(this.psyCardPs));
                    let _psyCardPs=JSON.stringify(this.psyCardPs);
                    form.append('psyCardPs', _psyCardPs);
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
                            this.getPsySurveysByUserInstanceId(this.userInstance);
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

        getPsySurveys(){
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

        getPsySurveyById(id){
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

        getPsySurveysByUserInstanceId(id){
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
                        if(response.data.PsySurvey){
                            _wm.pSSaved=true;
                            _wm.btnPsSend="Aggiorna";

                            let _PsySurv=response.data.PsySurvey;
                            // _wm.psyCardId=response.data.psyCard.id;
                            _wm.psyCardId=response.data.psyCard.id;
                            _wm.psyPsDoctorId = _PsySurv.id_doctor;
                            _wm.psyPsDoctorName = _PsySurv.doctor_name;
                            _wm.psyPsDoctorLastname = _PsySurv.doctor_lastname;

                            
                            _wm.psyCardPs.surveyHeardAlone =_PsySurv.survey_heard_alone;
                            _wm.psyCardPs.surveyHeardAnxious = _PsySurv.survey_heard_anxious 	
                            _wm.psyCardPs.surveySupport = _PsySurv.survey_support 
                            _wm.psyCardPs.surveyOkayWithMyself = _PsySurv.survey_okay_with_myself
                            _wm.psyCardPs.surveyDevoidOfEnergy = _PsySurv.survey_devoid_of_energy 
                            _wm.psyCardPs.surveyViolentTowardsOthers = _PsySurv.survey_violent_towards_others
                            _wm.psyCardPs.surveyAbleToAdapt = _PsySurv.survey_able_to_adapt

                            _wm.psyCardPs.surveyDisturbed = _PsySurv.survey_disturbed 
                            _wm.psyCardPs.surveyHurtMe = _PsySurv.survey_hurt_me
                            _wm.psyCardPs.surveyNotForceToSpeak = _PsySurv.survey_not_force_to_speak 
                            _wm.psyCardPs.surveyTensionPrevented = _PsySurv.survey_tension_prevented
                            _wm.psyCardPs.surveyHappy = _PsySurv.survey_happy 
                            _wm.psyCardPs.surveyDisturbedByThoughts = _PsySurv.survey_disturbed_by_thoughts
                            _wm.psyCardPs.surveyCry = _PsySurv.survey_cry
                            _wm.psyCardPs.surveyFeltPanic = _PsySurv.survey_felt_panic
                            _wm.psyCardPs.surveyPlannedToSuicide = _PsySurv.survey_planned_to_suicide 
                            _wm.psyCardPs.surveyFeltOverwhelmed = _PsySurv.survey_felt_overwhelmed

                            _wm.psyCardPs.surveyDifficultyFallingAsleep = _PsySurv.survey_difficulty_falling_asleep 
                            _wm.psyCardPs.surveyFeltAffection = _PsySurv.survey_felt_affection 
                            _wm.psyCardPs.surveyImpossibleAsideProblems = _PsySurv.survey_impossible_aside_problems 
                            _wm.psyCardPs.surveyAbleToDoThings = _PsySurv.survey_able_to_do_things 
                            _wm.psyCardPs.surveyThreatenedSomeone = _PsySurv.survey_threatened_someone
                            _wm.psyCardPs.surveyFeltHeartbroken = _PsySurv.survey_felt_heartbroken
                            _wm.psyCardPs.surveyThoughtBetterToDie = _PsySurv.survey_thought_better_to_die 
                            _wm.psyCardPs.surveyFeltCritical = _PsySurv.survey_felt_critical 
                            _wm.psyCardPs.surveyThoughtHadNoFriends = _PsySurv.survey_thought_had_no_friends
                            _wm.psyCardPs.surveyFeltUnhappy = _PsySurv.survey_felt_unhappy 

                            _wm.psyCardPs.surveyTroubledByImages = _PsySurv.survey_troubled_by_images 
                            _wm.psyCardPs.surveyFeltIrritated = _PsySurv.survey_felt_irritated
                            _wm.psyCardPs.surveyThoughtMyFault = _PsySurv.survey_thought_my_fault 
                            _wm.psyCardPs.surveyOptimisticAboutTheFuture = _PsySurv.survey_optimistic_about_the_future
                            _wm.psyCardPs.surveyGotWhatWanted = _PsySurv.survey_got_what_wanted
                            _wm.psyCardPs.surveyFeltHumiliated = _PsySurv.survey_felt_humiliated
                            _wm.psyCardPs.surveyHurtMyself = _PsySurv.survey_hurt_myself

                            
                            _wm.allPsySurveys=response.data.allPsySurveys;
                        }else{
                            _wm.btnPsSend="Salva";
                        }
                        
                        _wm.firstSave=false;
                    }else if(error == 7){
                        _wm.btnPsSend="Salva";
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