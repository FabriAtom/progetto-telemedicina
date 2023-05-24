<!-- 1° PAGINA SCHEDA PSICHIATRICA (TRP) -->
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
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left align-items-center">
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="project_description" class="col-form-label col-md-6 col-sm-2 label-align"><strong><h2> Breve Descrizione Progetto</h2></strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <textarea name="project_description" cols="100" rows="4" v-model="psyCardRp.projectDescription"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="treatment_area_objective" class="col-form-label col-md-6 col-sm-2 label-align"><strong><h2>Obiettivi In Cui Viene Specificata Area Trattamento:</h2></strong></label>
                                            <h5 class="ml-3">- Descrizione:</h5>
                                            <div class="col-md-12 col-sm-12">
                                                <textarea name="treatment_area_objective" cols="100" rows="7" v-model="psyCardRp.treatmentAreaObjective"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="project_menager" class="col-form-label col-md-6 col-sm-2 label-align"><strong><h2> Responsabile Progetto:</h2></strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <textarea name="project_menager" cols="40" rows="2" v-model="psyCardRp.projectManager"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                {{ psyCardRp }}


                                <div>
                                    <h2 class="ml-4 mb-4 mt-4"><strong>Archivio</strong></h2>
                                    <ul style="display:flex; flex-wrap: wrap;">
                                        <span v-for="(item, key, index) in PsyRehabilitationPsychiatricCard" :key="index" class="mr-5">

                                            <div @click="printArchivesCardPsyRehabilitationPsychiatricCard(item['id'])" class="card text-white bg-secondary mb-2" style="max-width: 19rem;  border-radius: 20px;">
                                                <div class="card-header">
                                                    <span style="min-width: 100px;"> 
                                                        <div style="min-width: 100px;"><strong>Nome: </strong><h5 style="display: inline-block;">{{ item['doctor_name'] }} {{ item['doctor_lastname'] }}</h5></div>
                                                        <div><strong>Data inizio:</strong> {{ i2hDateFormat(item['rp_date']) }}</div>
                                                    </span> 
                                            </div>
                                                <!-- <div class="card-body">
                                                    <h5 class="card-title">
                                                        <div><strong>Data inizio:</strong> {{ i2hDateFormat(item['rp_date']) }}</div>
                                                    </h5>
                                                    <p class="card-text">
                                                        <div style="min-width: 100px;"><strong>Breve Descrizione Progetto:</strong> <br>{{ (item['project_description']) }}</div>
                                                         <div style="min-width: 100px;"><strong>Obiettivi In Cui Viene Specificata Area <br> Trattamento:</strong> <br> {{ (item['treatment_area_objective']) }}</div>
                                                        <div style="min-width: 100px;"><strong>Responsabile Progetto:</strong> <br>{{ ((item['psychiatric_intervention'])) }} </div>
                                                        <div style="min-width: 100px;"><strong>:</strong> <br>{{ (item['project_manager']) }} </div>
                                                        <div style="min-width: 100px;"><strong>:</strong> <br>{{ (item['psychiatric_attachment']) }} </div>

                                                    </p>
                                                </div> -->
                                            </div>
                                            <br><br>
                                        </span>
                                    </ul>
                                </div> 



                                <div class="row mb-3 ml-2 mt-4">
                                    <div class="col-md-12 col-sm-12">
                                        <span class="item form-group">
                                            <label for="start_date" class="col-form-label col-md-1 col-sm-2 label-align"><strong><h4>DAL</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="date" name="start_date" v-model="psyCardRp.startDate">
                                            </span>
                                            <label for="end_date" class="col-form-label col-md-1 col-sm-2 label-align"><strong><h4>AL</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="date" name="end_date" v-model="psyCardRp.endDate">
                                            </span>
                                            <span class="search-bar">
                                                <a class="search-button btn btn-success"  @click="getPsyRehabilitationPsychiatricCardsByUserIstanceId(36,true)">Cerca</a>
                                            </span>
                                        </span>
                                    </div>
                                </div>

    

                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="pull-right">
                                        <a class="btn bg-primary text-white i2hBtnPrint ml-4" @click=" printArchivePsyRehabilitationPsychiatricCard('printPdf')"><i class="fa fa-print"></i>Stampa Archivio</a>
                                    </div>
                                </div>







                                <div class="ln_solid"></div>
                                <div class="item form-group" >
                                    <div class="pull-right">
                                        <span  class="btn btn-success i2hBtn ml-3" @click="addPsyRehabilitationPsychiatricCard('rp')">{{btnRpSend}}</span>
                                    </div>
                                </div>
                                <hr>
                                
                                <a  class="btn btn-success i2hBtnPrint"  @click=" printPsyRehabilitationPsychiatricCard('printPdf')"><i class="fa fa-print"></i>Stampa</a>

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
                psyCardId:1,


                accessData:[
                   
                    id => 14,
                    name => 'dott.',
                    lastname => 'Sbardella',
                    
                ],
                psyRpDoctorId:0,
                psyRpDoctorName:'',
                psyRpDoctorLastname:'',
                psyRpDate:null,
                psyCardId:null,
                date:new Date(),

                psyCardRp:{},
                // psyCardSa:{},
              
                PsyRehabilitationPsychiatricCard:{},


                mainTitle:"psy",
                firstSave:true,
                rPSaved:false,

                
                btnRpSend:"Salva",
                total:0,               
                allPsyRehabilitationPsychiatricCards:null,
            }
        },

        created: function () {
            // this.getPermissions();
            this.getPsyRehabilitationPsychiatricCardsByUserIstanceId(1)
        },

        methods: {

            i2hDateFormat(date){
                let current=new Date(date);
                let year = `${current.getFullYear()}`;
                let month = `${current.getMonth()}`;
                let timeHours=`${current.getHours()}`;
                let timeMinuts=`${current.getMinutes()}`;
                let day = `${current.getDate()}`;
                month=this.zeroFill(month);
                day=this.zeroFill(day);
                timeMinuts=this.zeroFill(timeMinuts);
                timeHours=this.zeroFill(timeHours);
                let tDate=day+'/'+month+'/'+year+' - '+ timeHours + ':' + timeMinuts;
                return tDate;
            },

            zeroFill(value){
                if(parseInt(value)<10){
                    value = '0'+value;
                }
                return value
            },

            i2hHourFormat(dataz){
                let dataw= new Date(dataz);
                //return date;
                return dataw.getHours() +':'+dataw.getMinutes();
            },


            printPsyRehabilitationPsychiatricCard(printPdf){

            let v_myWindow
            let url= 'printPdf/2';
            v_myWindow = window.open(url, 'v_myWindow', 'width=' + screen.width + ',height=' + screen.height + ', scrollbars=yes, titlebar=no, top=0, left=0');
            return false;
        },

        printArchivePsyRehabilitationPsychiatricCard(printPdf){

            let v_myWindow
            let url= 'printPdf/2';
            v_myWindow = window.open(url, 'v_myWindow', 'width=' + screen.width + ',height=' + screen.height + ', scrollbars=yes, titlebar=no, top=0, left=0');
            return false;
        },

        printArchivesCardPsyRehabilitationPsychiatricCard(id){

            let v_myWindow
            let url= 'printPdf/'+id;
            v_myWindow = window.open(url, 'v_myWindow', 'width=' + screen.width + ',height=' + screen.height + ', scrollbars=yes, titlebar=no, top=0, left=0');
            return false;
        },


            
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
                form.append('userInstanceId', this.userInstanceId);
                form.append('userId', this.userId);
                // form.append('doctorId', this.accessData.id);
                // form.append('doctorName', this.accessData.name);
                // form.append('doctorUserName', this.accessData.lastname);
                form.append('doctorId', 14);
                form.append('doctorName', 'dott.');
                form.append('doctorUserName', 'Sbardella');

                if(_panel=='rp'){

                    if(!this.rPSaved){
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
                    form.append('section', 'rp');
                    if(!this.isObjEmpty(this.psyCardRp)){
                        let _psyCard=JSON.stringify(this.psyCardRp);
                        form.append('PsyRehabilitationPsychiatricCard', _psyCard);

                        form.append('projectDescription', this.psyCardRp.projectDescription);
                        form.append('treatmentAreaObjective', this.psyCardRp.treatmentAreaObjective);
                        form.append('psychiatricIntervention', this.psyCardRp.psychiatricIntervention);
                        form.append('projectManager', this.psyCardRp.projectManager);
                        form.append('psychiatricAttachment', this.psyCardRp.psychiatricAttachment);

                    }
                }
                
                if(_errors==0){
                    try {
                        axios.post(actions.ADD_REHABILITATION_PSYCHIATRIC_CARD,form).then(response => {
                            let error=response.data.errorNumber;
                            let _attempts=response.data.attempts;
                            _wm.errNum=error;
                            if(error == 0){

                                Swal.fire(
                                    'Scheda',
                                    'Aggiornata correttamente',
                                    'success'
                                )
                                // this.getPsyRehabilitationPsychiatricCardsByUserInstanceId(this.userInstanceId);
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
                    axios.get(actions.GET_REHABILITATION_PSYCHIATRIC_CARDS).then(response => {
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
            getRehabilitationPsychiatricCardsByPsyId(id){
                let _wm = this;
                try {
                    let url=actions.GET_REHABILITATION_PSYCHIATRIC_CARD_BY_PSY_ID+'/'+id;
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

            
            getPsyRehabilitationPsychiatricCardsByUserIstanceId(id,first){
                let _wm = this;
        
                
                let _param;
                _wm.PsyRehabilitationPsychiatricCard=[];

                
                try {
                    let url=actions.GET_REHABILITATION_PSYCHIATRIC_CARDS_BY_USER_ISTANCE_ID+'/'+id;
                    axios.get(url,{params:{first:first,startDate:this.psyCardRp.startDate,endDate:this.psyCardRp.endDate}}).then(response => {
                        let error=response.data.errorNumber;
                        // let _attempts=response.data.attempts;
                        _wm.errNum=error;

                        if(error == 0){
                        
                            _wm.mainTitle="Aggiornamento Cartella psy";
                            if(response.data.PsyRehabilitationPsychiatricCard){
                            // _wm.rPSaved=true;
                            // _wm.btnRpSend="Aggiorna";
                                
                            // let _RehabPsyc=response.data.PsyRehabilitationPsychiatricCard;
                            //     // _wm.psyCardId=response.data.psyCard.id;
                            _wm.PsyRehabilitationPsychiatricCard=response.data.PsyRehabilitationPsychiatricCard;



                            for (let prop in _wm.PsyRehabilitationPsychiatricCard) {

                            }



                            // _wm.psyCardId=_RehabPsyc.id;
                            // _wm.psyRpDoctorId = _RehabPsyc.id_doctor;
                            // _wm.psyRpDoctorName = _RehabPsyc.doctor_name;
                            // _wm.psyRpDoctorLastname = _RehabPsyc.doctor_lastname;


                            // _wm.psyCardRp.projectDescription =_RehabPsyc.project_description;
                            // _wm.psyCardRp.treatmentAreaObjective = _RehabPsyc.treatment_area_objective 	
                            // _wm.psyCardRp.psychiatricIntervention = _RehabPsyc.psychiatric_intervention
                            // _wm.psyCardRp.projectManager = _RehabPsyc.project_manager
                            // _wm.psyCardRp.psychiatricAttachment = _RehabPsyc.psychiatric_attachment 
 
        
                            // _wm.allPsyRehabilitationPsychiatricCards=response.data.allPsyRehabilitationPsychiatricCards;
                            }else{
                                _wm.btnRpSend="Salva";
                            }
                            
                            _wm.firstSave=false;
                        }else if(error == 7){
                            _wm.btnRpSend="Salva";
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