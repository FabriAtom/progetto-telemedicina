<!-- DIPARTIMENTO SALUTE MENTALE, 
3° FOGLIO DELLA SCHEDA PSICHIATRICA -->
<template>
   <div class="container">
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title" style="background:lightgrey;padding:7px; border-radius:3px; margin-top:5px;">
                            <h1>Dipartimento Salute Mentale<strong> UOC</strong></h1>
                        </div>
                        <div class="x_content">

                            <!-- <div class="tab-content" id="myTabContent"> -->
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left align-items-center">

                                <h2>ELEMENTI ANAMNESTICI RILEVANTI</h2>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="marital_status" class="col-form-label col-md-6 col-sm-2 label-align">Trattamenti psichiatrici precedenti</label>
                                            <span class="col-md-12 col-sm-12">
                                                
                                            </span>
                                        </div>
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

</style>



<script>

import * as actions from "../config/ApiUrl";
import axios from 'axios';
import Swal from 'sweetalert2';

export default {
    name: 'psyUocDepartment',

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
            psyUdDoctorId:0,
            psyUdDoctorName:'',
            psyUdDoctorLastname:'',
            psyUdDate:null,
            psyCardId:null,
            date:new Date(),

            psyCardUd:{},
            psyCardMh:{},

            panel:'ud',



            mainTitle:"psy",
            firstSave:true,
            uDSaved:false,

            
            btnUdSend:"Salva",
            total:0,               
            allpsyUocDepartments:null,
        }
    },

    created: function () {
        // this.getPermissions();
        this.getPsyUocDepartmentsByUserInstanceId(1);
    },


    methods: {
        calculateSum() {
            // Calcola la somma delle opzioni selezionate
            //this.sum = parseInt(this.selectedOption) || 0;
            let i=0;
            for (const property in this.psyCardUd) {
                i += parseInt(this.psyCardUd[property]);  
            }
            console.log(i);
            this.sum=i;
        },

        
        addPsyUocDepartment(panel){
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
            
            if(_panel=='ud'){

                if(!this.uDSaved){
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
                form.append('section', 'ud');
                if(!this.isObjEmpty(this.psyCardUd)){
                    let _psyCardUd=JSON.stringify(this.psyCardUd);
                    alert(JSON.stringify(this.psyCardUd))
                    form.append('psyCardUd', _psyCardUd);
                }
                // if(!this.isObjEmpty(this.psyCardPr)){
                //     let _psyCard=JSON.stringify(this.psyCardPr);
                //     form.append('psyCard', _psyCard);
                // }
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
                        form.append('psyMentalHealthDepartment', _psyCardMh);
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
                            this.getPsyUocDepartmentsByUserInstanceId(this.userInstance);
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


        getPsyUocDepartments(){
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
        getPsyUocDepartmentById(id){
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
        getPsyUocDepartmentsByUserInstanceId(id){
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
                        if(response.data.PsyUocDepartment){
                            _wm.uDSaved=true;
                            _wm.btnUdSend="Aggiorna";

                            let _PsyUoc=response.data.PsyUocDepartment;
                            // _wm.psyCardId=response.data.psyCard.id;
    
                            _wm.psyCardId=response.data.psyCard.id;
                            _wm.psyUdDoctorId = _PsyUoc.id_doctor;

                            _wm.psyUdDoctorName = _PsyUoc.doctor_name;
                            _wm.psyUdDoctorLastname = _PsyUoc.doctor_lastname;

                            
                            _wm.psyCardUd.psychiatricTreatment =_PsyUoc.psychiatric_treatment;
                            _wm.psyCardUd.csm = _PsyUoc.csm 	
                            _wm.psyCardUd.spdc = _PsyUoc.spdc 
                            _wm.psyCardUd.rems = _PsyUoc.rems
                            _wm.psyCardUd.prison = _PsyUoc.prison 
                            _wm.psyCardUd.psychiatricFamiliarity = _PsyUoc.psychiatric_familiarity
                            _wm.psyCardUd.onSetOfPsychiatricSymptom = _PsyUoc.on_set_of_psychiatric_symptom
                            _wm.psyCardUd.substanceUse = _PsyUoc.substance_use 
                            _wm.psyCardUd.inChargeAtSerdTerritorial = _PsyUoc.in_charge_at_serd_territorial
                            _wm.psyCardUd.psychoticDymptom = _PsyUoc.psychotic_symptom 
                            _wm.psyCardUd.anxiousAffectiveSymptom = _PsyUoc.anxious_affective_symptom
                            _wm.psyCardUd.impulsiveSymptom = _PsyUoc.impulsive_symptom 
                            _wm.psyCardUd.psychoticDiagnosticOrientation = _PsyUoc.psychotic_diagnostic_orientation
                            _wm.psyCardUd.anxiousAffectiveOrientation = _PsyUoc.anxious_affective_orientation
                            _wm.psyCardUd.personalityOrientation = _PsyUoc.personality_orientation
                            _wm.psyCardUd.takingChargePdta = _PsyUoc.taking_charge_pdta 

                            _wm.psyCardUd.consultancyPdta = _PsyUoc.consultancy_pdta 

                            _wm.allpsyUocDepartments=response.data.allpsyUocDepartments;
                        }else{
                            _wm.btnUdSend="Salva";
                        }
                        
                        _wm.firstSave=false;
                    }else if(error == 7){
                        _wm.btnUdSend="Salva";
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
