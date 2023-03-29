<template>
    <div class="container">
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title" style="background:lightgrey;padding:7px; border-radius:3px; margin-top:5px;">
                            <h1>AREA RIABILTAZIONE PSICHIATRICA <strong>(TRP)</strong></h1>
                        </div>

                        <div class="x_content">

                        <!-- <div class="tab-content" id="myTabContent"> -->
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left align-items-center">

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="project_description" class="col-form-label col-md-6 col-sm-2 label-align"><strong><h2>Breve Descrizione Progetto</h2></strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <textarea name="project_description" cols="100" rows="4" v-model="psyCardRh.projectDescription"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="treatment_area_objective" class="col-form-label col-md-6 col-sm-2 label-align"><strong><h2>Obiettivi In Cui Viene Specificata Area Trattamento:</h2></strong></label>
                                            <p>-Descrizione:</p>
                                            <div class="col-md-12 col-sm-12">
                                                <textarea name="treatment_area_objective" cols="100" rows="7" v-model="psyCardRh.treatmentAreaObjective"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="psychiatric_intervention" class="col-form-label col-md-6 col-sm-2 label-align"><strong><h2>Interventi:</h2></strong></label>                                    
                                                <p>
                                                    <select name="trattamenti">
                                                        <option value="trattamento1">Trattamento 1</option>
                                                        <option value="trattamento2">Trattamento 2</option>
                                                        <option value="trattamento3">Trattamento 3</option>
                                                    </select>
    
                                                    <label for="dataInizio">Data di inizio:</label>
                                                    <input type="date" id="dataInizio" name="dataInizio">
    
                                                    <label for="dataFine">Data di fine:</label>
                                                    <input type="date" id="dataFine" name="dataFine">
                                                </p>
                                                <span>-Setting: 1. Individuale e/o 2. Gruppale
                                                    <form action="">
                                                        <input type="checkbox" id="" name="" value="">
                                                        <label for=""></label>
                                                        <input type="checkbox" id="" name="" value="">
                                                        <label for=""></label><br>
                                                        <input type="submit" value="Submit">
                                                    </form>
                                                </span> 

                                            <div class="col-md-12 col-sm-12">
                                                <!-- <textarea name="psychiatric_intervention" cols="100" rows="7" v-model="psyCardRh.psychiatricIntervention"></textarea> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="project_menager" class="col-form-label col-md-6 col-sm-2 label-align"><strong><h2>Responsabile Progetto:</h2></strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <textarea name="project_menager" cols="40" rows="2" v-model="psyCardRh.projectManager"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="psychiatric_attachment" class="col-form-label col-md-6 col-sm-2 label-align"><strong><h2>Allegati:</h2></strong></label>
                                            <div class="col-md-12 col-sm-12">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{ psyCardRh }}
                                <div class="ln_solid"></div>
                                <div class="item form-group" >
                                    <div class="pull-right">
                                        <span  class="btn btn-success i2hBtn" @click="addPsyRehabilitationPsychiatricCard('rh')">{{btnRhSend}}</span>
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
        name: 'PsyRehabilitationPsychiatricCard',


        data() {
            return {
                userName: 'Andrea',
                userLastName:'Giovanni',
                userFullName:'',
                userInstance:1,
                userId:0,

                // selectedOption: null,

                accessData:[
                   
                    id => 14,
                    name => 'dott.',
                    lastname => 'Sbardella',
                    
                ],
                psyRhDoctorId:0,
                psyRhDoctorName:'',
                psyRhDoctorLastname:'',
                psyRhDate:null,
                psyCardId:null,
                date:new Date(),

                psyCardRh:{},
                psyCardSa:{},
              
                panel:'rh',

                mainTitle:"psy",
                firstSave:true,
                rHSaved:false,

                
                btnRhSend:"Salva",
                total:0,               
                allPsyRehabilitationPsychiatricCards:null,
            }
        },

        created: function () {
            // this.getPermissions();
            //alert(JSON.stringify(this.getPsyMentalHealthDepartmentsByUserInstanceId(1)));
            this.getPsyRehabilitationPsychiatricCardsByUserInstanceId(1)
        },

        methods: {
            
            addPsyRehabilitationPsychiatricCard(panel){
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
                form.append('doctorName', 'dott.');
                form.append('doctorUserName', 'Sbardella');

                if(_panel=='rh'){

                    if(!this.rHSaved){
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
                    form.append('section', 'rh');
                    if(!this.isObjEmpty(this.psyCardRh)){
                        let _psyCard=JSON.stringify(this.psyCardRh);
                        form.append('PsyRehabilitationPsychiatricCard', _psyCard);
                    }
                }else if(_panel=='sa'){
                    if(!this.sASaved){
                        form.append('action', 'store');
                    }else{
                        form.append('action', 'update');
                    }

                    if (this.sASaved) {
                        if(this.psyCardId){
                            form.append('psyId',this.psyCardId);
                        }else{
                            _errors++;
                            _errorTitle="Attenzione";
                            _errorDescription="Dati mancanti o incompleti contattare l\'amministratore di sistema"
                        }
                        form.append('section', 'sa');
                        if(!this.isObjEmpty(this.psyCardSa)){
                            let _psyCard=JSON.stringify(this.psyCardSa);
                            form.append('psyCard', _psyCard);
                        }
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
                            let _psyCard=JSON.stringify(this.psyCardMh);
                            form.append('psyMentalHealthDepartment', _psyCard);
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
                                this.getPsyRehabilitationPsychiatricCardsByUserInstanceId(this.userInstance);
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
            getPsyRehabilitationPsychiatricCards(){
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
            getPsyRehabilitationPsychiatricCardById(id){
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

            getPsyRehabilitationPsychiatricCardsByUserInstanceId(id){
                let _wm = this;
        
                
                try {
                    let url=actions.GET_PSY_CARDS_BY_USER_INSTANCE_ID+'/'+id;
                    axios.get(url).then(response => {
                        let error=response.data.errorNumber;
                        // let _attempts=response.data.attempts;
                        _wm.errNum=error;

                        if(error == 0){
                        
                            _wm.mainTitle="Aggiornamento Cartella psy";
                            if(response.data.PsyMentalHealthDepartment){
                            _wm.rHSaved=true;
                            //alert(JSON.stringify(response.data.PsyMentalHealthDepartment))
                            _wm.btnRhSend="Aggiorna";
                                
                            let _RehabPsyc=response.data.PsyMentalHealthDepartment;
                            //     // _wm.psyCardId=response.data.psyCard.id;
                            _wm.psyCardId=_RehabPsyc.id;
                            _wm.psyRhDoctorId = _RehabPsyc.id_doctor;
                            _wm.psyRhDoctorName = _RehabPsyc.doctor_name;
                            _wm.psyRhDoctorLastname = _RehabPsyc.doctor_lastname;


                            _wm.psyCardRh.projectDescription =_RehabPsyc.project_description;
                            _wm.psyCardRh.treatmentAreaObjective = _RehabPsyc.treatment_area_objective 	
                            _wm.psyCardRh.psychiatricIntervention = _RehabPsyc.psychiatric_intervention
                            _wm.psyCardRh.projectManager = _RehabPsyc.project_manager
                            _wm.psyCardRh.psychiatricAttachment = _RehabPsyc.psychiatric_attachment 
 
        
                            _wm.allPsyRehabilitationPsychiatricCards=response.data.allPsyRehabilitationPsychiatricCards;
                            }else{
                                _wm.btnRhSend="Salva";
                            }
                            
                            _wm.firstSave=false;
                        }else if(error == 7){
                            _wm.btnRhSend="Salva";
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
        }
    }
</script>