<!-- PsyMentalHealthDepartment  -->
<!-- ASL ROMA2  FOGLIO SINGOLO -->
<template>
    <div class="container">
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title" style="background:lightgrey;padding:7px; border-radius:3px; margin-top:5px;">
                            <h1>PARTE PSICOLOGICA PER CARTELLA CLINICA</h1>
                        </div>

                        <div class="x_content">

                        <!-- <div class="tab-content" id="myTabContent"> -->
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left align-items-center">

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="psychological_interview" class="col-form-label col-md-6 col-sm-2 label-align"><strong><h2>Colloquio Psicologico</h2></strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <textarea name="psychological_interview" cols="100" rows="7" v-model="psyCardMh.psychologicalInterview"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="hypothesis_psychopathological_classification" class="col-form-label col-md-6 col-sm-2 label-align"><strong><h2>Ipotesi/Inquadramento Psicopatologico</h2></strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <textarea name="hypothesis_psychopathological_classification" cols="100" rows="4" v-model="psyCardMh.hypothesisPsychopathologicalClassification"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="planning_type_of_intervention" class="col-form-label col-md-6 col-sm-2 label-align"><strong><h2>Progettualità/Tipologia di Intervento</h2></strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <textarea name="planning_type_of_intervention" cols="100" rows="4" v-model="psyCardMh.planningTypeOfIntervention"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="test" class="col-form-label col-md-6 col-sm-2 label-align"><strong><h2>Test</h2></strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <textarea name="test" cols="100" rows="5" v-model="psyCardMh.test"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{ psyCardMh }}

                                <hr><hr>
                                
                                <div>
                                    <h2 class="ml-4 mb-4 mt-4"><strong>Archivio</strong></h2>
                                    <ul style="display:flex; flex-wrap: wrap;">
                                        <span v-for="(item, key, index) in PsyMentalHealthDepartment" :key="index" class="mr-5">

                                            <div @click="printArchivesCardPsyMentalHealthDepartment( item['id'])" class="card text-white bg-secondary mb-2 cursor" style="max-width: 19rem;  border-radius: 20px;">
                                                <div class="card-header">
                                                    <span style="min-width: 100px;"> 
                                                        <div style="min-width: 100px;"><strong>Nome Medico: </strong><h5 style="display: inline-block;">{{ item['doctor_name'] }} {{ item['doctor_lastname'] }}</h5></div>
                                                        <div><strong>Data: </strong> {{ i2hDateFormat(item['mh_date']) }}</div>
                                                    </span> 
                                            </div>
                                                <!-- <div class="card-body">
                                                    <h5 class="card-title">
                                                        <div><strong>Data inizio:</strong> {{ i2hDateFormat(item['mh_date']) }}</div>
                                                    </h5>
                                                    <p class="card-text">
                                                        <div style="min-width: 100px;"><strong>Colloquio Psicologico:</strong> <br>{{ (item['psychological_interview']) }}</div>
                                                        <div style="min-width: 100px;"><strong>Ipotesi/Inquadramento Psicopatologico:</strong> <br> {{ (item['hypothesis_psychopathological_classification']) }}</div>
                                                        <div style="min-width: 100px;"><strong>Progettualità/Tipologia di Intervento:</strong> <br>{{ ((item['planning_type_of_intervention'])) }} </div>
                                                        <div style="min-width: 100px;"><strong>Test:</strong> <br>{{ (item['test']) }} </div> 
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
                                                <input type="date" name="start_date" v-model="psyCardMh.startDate">
                                            </span>
                                            <label for="end_date" class="col-form-label col-md-1 col-sm-2 label-align"><strong><h4>AL</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="date" name="end_date" v-model="psyCardMh.endDate">
                                            </span>
                                            <span class="search-bar">
                                                <a class="search-button btn btn-success"  @click="getPsyMentalHealthDepartmentsByUserIstanceId(36,true)">Cerca</a>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                

                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="pull-right">
                                        <span class="btn btn-success i2hBtn ml-3" @click="addPsyMentalHealthDepartment('mh')">{{btnMhSend}}</span>
                                        <a class="btn bg-primary text-white i2hBtnPrint ml-4" @click=" printArchivePsyMentalHealthDepartment('printPdf')"><i class="fa fa-print"></i>Stampa Archivio</a>
                                    </div>
                                </div>
                                <!-- <a  class="btn btn-success i2hBtnPrint"  @click=" printPsyMentalHealthDepartment('printPdf')"><i class="fa fa-print"></i>Stampa</a> -->
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

.cursor:hover {
  cursor: pointer;
}
        
</style>


<script>

    import * as actions from "../config/ApiUrl";
    import axios from 'axios';
    import Swal from 'sweetalert2';

    export default {

        name: 'PsyMentalHealthDepartment',


        data() {
            return {
                userName: 'Andrea',
                userLastName:'Giovanni',
                userFullName:'',
                userInstanceId:1,
                userId:0,
                psyCardId:1,


                cursorType: 'default',


                accessData:[
                   
                    id => 14,
                    name => 'Alessio',
                    lastname => 'Ortu',
                    
                ],
                psyMhDoctorId:0,
                psyMhDoctorName:'',
                psyMhDoctorLastname:'',
                psyMhDate:null,
                psyCardId:null,

                date:new Date(),

                psyCardMh:{},
                // psyCardSa:{},
                PsyMentalHealthDepartment:{},

                mainTitle:"psy",
                firstSave:true,
                mHSaved:false,

                
                btnMhSend:"Salva",
                total:0,               
                allPsyMentalHealthDepartments:null,
            }
        },

        created: function () {
            this.getPsyMentalHealthDepartmentsByUserIstanceId(1)

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



            printPsyMentalHealthDepartment(printPdf){

                let v_myWindow
                let url= 'printPdf/2';
                v_myWindow = window.open(url, 'v_myWindow', 'width=' + screen.width + ',height=' + screen.height + ', scrollbars=yes, titlebar=no, top=0, left=0');
                return false;
            },


            printArchivePsyMentalHealthDepartment(printPdf){

                let v_myWindow
                let url= 'printPdf/2';
                v_myWindow = window.open(url, 'v_myWindow', 'width=' + screen.width + ',height=' + screen.height + ', scrollbars=yes, titlebar=no, top=0, left=0');
                return false;
            },

            printArchivesCardPsyMentalHealthDepartment(id){
                
                let v_myWindow
                let url= 'printPdf/'+id;
                v_myWindow = window.open(url, 'v_myWindow', 'width=' + screen.width + ',height=' + screen.height + ', scrollbars=yes, titlebar=no, top=0, left=0');
                return false;
            },

                                
            


            addPsyMentalHealthDepartment(panel){
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
                form.append('doctorName', 'mario');
                form.append('doctorUserName', 'bross');

                if(_panel=='mh'){

                    if(!this.mHSaved){
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
                    form.append('section', 'mh');
                    if(!this.isObjEmpty(this.psyCardMh)){
                        let _psyCard=JSON.stringify(this.psyCardMh);
                        form.append('PsyMentalHealthDepartment', _psyCard);

                        form.append('psychologicalInterview', this.psyCardMh.psychologicalInterview);
                        form.append('hypothesisPsychopathologicalClassification', this.psyCardMh.hypothesisPsychopathologicalClassification);
                        form.append('planningTypeOfIntervention', this.psyCardMh.planningTypeOfIntervention);
                        form.append('test', this.psyCardMh.test);
                    }
                }
                
                if(_errors==0){
                    try {
                        axios.post(actions.ADD_MENTAL_HEALTH_DEPARTMENT,form).then(response => {
                            let error=response.data.errorNumber;
                            let _attempts=response.data.attempts;
                            _wm.errNum=error;
                            if(error == 0){

                                Swal.fire(
                                    'Scheda',
                                    'Aggiornata correttamente',
                                    'success'
                                )
                                // this.getMentalHealthDepartmentsByUserIstanceId(this.userInstanceId);
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

            getPsyMentalHealthDepartments(){
                let _wm = this;
                try {
                    axios.get(actions.GET_MENTAL_HEALTH_DEPARTMENTS).then(response => {
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
            getMentalHealthDepartmentsByPsyId(id){
                let _wm = this;
                try {
                    let url=actions.GET_MENTAL_HEALTH_DEPARTMENT_BY_PSY_ID+'/'+id;
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

            getPsyMentalHealthDepartmentsByUserIstanceId(id,first){
                let _wm = this;

                
                let _param;
                _wm.PsyMentalHealthDepartment=[];



                try {
                    let url=actions.GET_MENTAL_HEALTH_DEPARTMENTS_BY_USER_ISTANCE_ID+'/'+id;
                    axios.get(url,{params:{first:first,startDate:this.psyCardMh.startDate,endDate:this.psyCardMh.endDate}}).then(response => {
                        let error=response.data.errorNumber;
                        // let _attempts=response.data.attempts;
                        _wm.errNum=error;

                        if(error == 0){
                        
                            _wm.mainTitle="Aggiornamento Cartella psy";
                            if(response.data.PsyMentalHealthDepartment){
                            // _wm.mHSaved=true;
                            //alert(JSON.stringify(response.data.PsyMentalHealthDepartment))
                            // _wm.btnMhSend="Aggiorna";
                            
                            // let _MentalInterview=response.data.PsyMentalHealthDepartment;
                            //     // _wm.psyCardId=response.data.psyCard.id;
                            _wm.PsyMentalHealthDepartment=response.data.PsyMentalHealthDepartment;

                            for (let prop in _wm.PsyMentalHealthDepartment) {

                            }







                            // _wm.psyCardId=_MentalInterview.id;
                            // _wm.psyMhDoctorId = _MentalInterview.id_doctor;
                            // _wm.psyMhDoctorName = _MentalInterview.doctor_name;
                            // _wm.psyMhDoctorLastname = _MentalInterview.doctor_lastname;

                            // _wm.psyCardMh.psychologicalInterview =_MentalInterview.psychological_interview;
                            // _wm.psyCardMh.hypothesisPsychopathologicalClassification = _MentalInterview.hypothesis_psychopathological_classification 	
                            // _wm.psyCardMh.planningTypeOfIntervention = _MentalInterview.planning_type_of_intervention
                            // _wm.psyCardMh.test = _MentalInterview.test 
        
                            // _wm.allPsyMentalHealthDepartments=response.data.allPsyMentalHealthDepartments;
                            }else{
                                _wm.btnMhSend="Salva";
                            }
                            
                            _wm.firstSave=false;
                        }else if(error == 7){
                            _wm.btnMhSend="Salva";
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
