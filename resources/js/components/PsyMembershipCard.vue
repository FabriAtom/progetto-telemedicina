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




                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="pull-right">
                                        <span class="btn btn-success i2hBtn ml-3" @click="addPsyMembershipCard('mc')">{{btnMcSend}}</span>
                                    </div>
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
// .labelWidth {
// min-width: 190px;
// }
// .dbTitle {
// background: #184140;
// color: white;
// padding: 10px;
// font-weight: bold !important;
// }
// .item input, .item textarea {
// margin-right: 10px;
// }
// .treatment{
// border:1px double #f1f1f1;
// margin: 1.5rem 0;
// padding: 20px 15px;
// font-style: italic; 
// -webkit-box-shadow: 1px 1px 3px 1px #ccc; 
// box-shadow: 1px 1px 3px 1px #ccc; 
// border-radius: 5px;
// color: #333; 
// }

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

                            // _wm.psyCardMc.socialHealthSituationAsl = _SocialFold.social_health_situation_asl 
                            // _wm.psyCardMc.socialHealthSituationCertificate = _SocialFold.social_health_situation_certificate 
                            // _wm.psyCardMc.socialHealthSituationTherapeuticPathway = _SocialFold.social_health_situation_therapeutic_pathway 
                            // _wm.psyCardMc.socialHealthSituationDisability = _SocialFold.social_health_situation_disability
                            // _wm.psyCardMc.socialHealthSituationRevision = _SocialFold.social_health_situation_revision
                            // _wm.psyCardMc.socialHealthSituationInps = _SocialFold.social_health_situation_inps 
                            // _wm.psyCardMc.socialHealthSituationAdministrator = _SocialFold.social_health_situation_administrator 
                            // _wm.psyCardMc.environmentalAnalysisFamilyOfOrigin = _SocialFold.environmental_analysis_family_of_origin
                            // _wm.psyCardMc.environmentalAnalysisAccommodation = _SocialFold.environmental_analysis_accommodation 
                            // _wm.psyCardMc.environmentalAnalysisWork = _SocialFold.environmental_analysis_work 
                            // _wm.psyCardMc.environmentalAnalysisIncome = _SocialFold.environmental_analysis_income
                            // _wm.psyCardMc.environmentalAnalysisFormalNetwork = _SocialFold.environmental_analysis_formal_network 
                            // _wm.psyCardMc.interventionHypothesisSocialProject = _SocialFold.intervention_hypothesis_project
                            // _wm.psyCardMc.interventionHypothesisSocialWorker = _SocialFold.intervention_hypothesis_social_worker


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
