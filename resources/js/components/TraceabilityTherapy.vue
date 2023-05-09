<template>

<!-- Scheda terapie non somministrate del paziente -->

    <div class="container">
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title" style="background:lightgrey;padding:7px; border-radius:3px; margin-top:200px;">
                            <h1>Scheda terapie <strong>non</strong> somministrate del paziente</h1>
                        </div>

                        <div class="x_content">

                        <!-- <div class="tab-content" id="myTabContent"> -->
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left align-items-center">

                               <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <!-- <span class="item form-group">
                                            <label for="doctor_name" class="col-form-label col-md-4 col-sm-2 label-align"><strong><h4>Personale addetto alla terapia</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input style="margin-right: 8rem;" type="text" name="doctor_name" v-model="doctorName">
                                            </span>
                                        </span> -->
                                        <!-- <span class="item form-group ml-5">
                                            <label for="" class="col-form-label col-md-1 col-sm-2 label-align"><strong><h4>Turno</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="text" name="" v-model="">
                                            </span>
                                        </span> -->
                                    </div>
                                </div> 

                                <div class="ml-3 mt-4">
                                    <h5>Visto il mattinale, verificati i presenti segnalati e le relative terapie prescritte dai medici per ogni detenuto, <br> si attesta quanto segue:</h5>
                                    
                                    <h2 class="mt-4 mb-3">Terapia <strong>non somministata </strong>al paziente:</h2>
                                </div>

                                
                                <table>
                                    <tr>
                                        <th><strong>FARMACO</strong></th>
                                        <th><strong>DAL</strong></th>
                                        <th><strong>AL</strong></th>
                                        <th><strong>ORA</strong></th>
                                        <th><strong>FREQUENZA</strong></th>
                                        <th><strong>NON <br> SOMMINISTRATO</strong></th>
                                    </tr>

                                    <tr v-for="(therapy, index) in therapies" :key="index">
                                        
                                        <td>
                                            {{therapy.drug}}
                                        </td>
                                        <td>
                                            {{therapy.startTherapy}}
                                        </td>
                                        <td>
                                            {{therapy.endTherapy}}
                                        </td>
                                        <td>
                                            {{therapy.posology}}
                                        </td>
                                        <td>
                                            {{therapy.frequency}}
                                        </td>
                                        <td>
                                            <label  class="i2hCheckboxLabel" :for="therapy.drug">{{therapy.drug}}</label>
                                            <input type="checkbox" class="form-control i2hCheckbox" :id="therapy.drug" :name="therapy.drug" :value="therapy.drug" v-model="refusedTreatments.checked[therapy.drug]"> 
                                            <input v-if="refusedTreatments.checked[therapy.drug]" type="text" class="form-control mt-3" :id="therapy.id" :name="therapy.id" placeholder="motivazione" v-model="refusedTreatments.descriptions[therapy.drug]">
                                        </td>
                                    </tr>  
                                </table>

                                <!-- <button @click="saveRefusedTreatments">Save</button> -->
                                <br>
                                TERAPIE RIFIUTATE: {{ refusedTreatments }}
                                <br>
                                <br>
                                nursTh: {{nursCardTh}}
                                <br>


                                <hr><hr>
                                
                                <div class="row" style="margin-top:50px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="medical_alert" class="col-form-label col-md-2 col-sm-2 label-align"><h4><strong>Avvisato medico</strong></h4></label>
                                            <span class="col-md-12 col-sm-12">
                                                <span>SI</span>
                                                <input type="radio" name="medical_alert" value="1" v-model="nursCardTh.medicalAlert"/>
                                                <span>NO</span>
                                                <input type="radio" name="medical_alert" value="0" v-model="nursCardTh.medicalAlert"/>
                                                <input type="text" name="medical_alert_note" placeholder="Note" v-model="nursCardTh.medicalAlertNote"/>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="doctors_prescriptions" class="col-form-label col-md-5 col-sm-2 label-align"><h4><strong>Annotazione o prescrizione del medico</strong></h4></label>
                                            <span class="col-md-12 col-sm-12">
                                                <span>SI</span>
                                                <input type="radio" name="doctors_prescriptions" value="1" v-model="nursCardTh.doctorsPrescriptions" />
                                                <span>NO</span>
                                                <input type="radio" name="doctors_prescriptions" value="0" v-model="nursCardTh.doctorsPrescriptions"/>
                                                <input type="text" name="doctors_prescriptions_note" placeholder="Note" v-model="nursCardTh.doctorsPrescriptionsNote"/>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="pull-right">
                                        <span class="btn btn-success i2hBtn ml-3" @click="addTraceabilityTherapy('th')">{{btnThSend}}</span>
                                        <a  class="btn btn-success i2hBtnPrint"  @click=" printTraceabilityTherapy('printPdf')"><i class="fa fa-print"></i>Stampa</a>
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

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 2px solid #dddddd;
  text-align: center;
  padding: 6px;
}

ul, li{
    list-style: none;
}

* {
box-sizing: border-box;
}

html {
    font-family: 'Jost', sans-serif;
}

body {
    margin: 0;
}

header {
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26);
    margin: 3rem;
    border-radius: 10px;
    padding: 1rem;
    background-color: #1b995e;
    color: white;
    text-align: center;
}

#demo {
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26);
    margin: 3rem;
    border-radius: 10px;
    padding: 1rem;
    text-align: center;
}

.demot {
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26);
    margin: 3rem;
    border-radius: 10px;
    padding: 1rem;
    text-align: center;
}

#assignment h2 {
    font-size: 2rem;
    border-bottom: 4px solid #ccc;
    color: #1b995e;
    margin: 0 0 1rem 0;
}

#assignment p {
    font-size: 1.25rem;
    font-weight: bold;
    background-color: #8ddba4;
    padding: 0.5rem;
    color: #1f1f1f;
    border-radius: 25px;
}


#assignment input {
    font: inherit;
    border: 1px solid #ccc;
}

#assignment input:focus {
    outline: none;
    border-color: #1b995e;
    background-color: #d7fdeb;
}

#assignment button {
font: inherit;
cursor: pointer;
    border: 1px solid #ff0077;
    background-color: #ff0077;
    color: white;
    padding: 0.05rem 1rem;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.26);
}

#assignment button:hover,
#assignment button:active {
    background-color: #ec3169;
    border-color: #ec3169;
    box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.26);
}

.i2hCheckbox{
    margin-right: 10px;
}

.i2hCheckboxLabel{
    min-width:100px; 
    display:inline-block;
}

.btnArchives{
    background:none;
    border:none;
    color:#333;
    cursor:pointer;
}

.i2hLoaderContainer{
    height: 100vh;
    width:100vw;
    background:#fff;
}

.i2hLoader{
    position: absolute;
    left: 50%;
    top: 40%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}

label {
    font-weight: 100;
}

.form-control {
    height: 28px;
    padding: 6px 12px;
    font-size: 12px;
    line-height: 1.2;
}
.acceptance{
    -moz-box-shadow: inset -3px -3px 10px #1cee77;
    -webkit-box-shadow: inset -3px -3px 10px #1cee77;
    box-shadow: inset -3px -3px 10px #1cee77;
    background: rgb(255,255,255);
    background: linear-gradient(45deg, rgba(255,255,255,1) 0%, rgba(235,255,235,1) 44%, rgba(255,255,255,1) 100%);
}
.noAcceptance{
    -moz-box-shadow: inset -3px -3px 10px #fafddc;
    -webkit-box-shadow: inset -3px -3px 10px #fafddc;
    box-shadow: inset -3px -3px 10px #fafddc;
    background: rgb(255,255,255);
    background: linear-gradient(45deg, rgba(255,255,255,1) 0%, rgba(252,255,227,1) 44%, rgba(255,255,255,1) 100%);
}

.therapy{
    border:1px double #f1f1f1;
    margin: 1.5rem 0;
    padding: 20px 15px;
    font-style: italic; 
    -webkit-box-shadow: 1px 1px 3px 1px #ccc;
    box-shadow: 1px 1px 3px 1px #ccc; 
    border-radius: 5px;
    color: #333; 
}

.container{
    margin-top:30px;
}

.closeButton{
    width:25px;
    height:25px;
}


</style>


<script>



    import * as actions from "../config/ApiUrl";
    import axios from 'axios';
    import Swal from 'sweetalert2';

    export default {

        name: 'TraceabilityTherapy',


        data() {
            return {
                userName: 'mario',
                userLastName:'rossi',
                userFullName:'',
                userInstanceId:36,
                userId:237,



                refusedTreatments: {
                    checked:{},
                    descriptions:{}
                },


                chechedDescriptions: [],



                therapies:[{id:1,drug:'tachipirina',start_date:'2022-10-12',end_date:'2023-06-10'},
                    {id:2,drug:'toradol',start_date:'2023-01-01',end_date:'2023-12-31'},
                    {id:3,drug:'buscopan',start_date:'2022-08-12',end_date:'2023-07-23'
                }],


                therapies:{
                    check_drugs_not_administered: [],
                    note_drugs_not_administered: [],
                },
                terapieRifiutate:[],
                drug:'',        

                
                nursCardTh:{},
                TraceabilityTherapy:{},
                
                
                
                accessData:[
                    id => 31,
                    name => 'mario',
                    lastname => 'rossi',   
                ],
                


           
                date:new Date(),

                mainTitle:"psy",
                firstSave:true,
                tHSaved:false,

                btnThSend:"Salva",
                total:0,               
                allTraceabilityTherapys:null,
                allNursingTherapys:null,
            }
        },

        created: function () {
            this.getTraceabilityTherapysByUserIstanceId(1)
            this.getNursingTherapysByUserIstanceId(1)
        },
        

        computed: {
        },

        watch: {
        },

        methods: {


            saveRefusedTreatments(){
                for (var refusedTreatment in this.refusedTreatments.checked){
                    if (this.refusedTreatments.checked.hasOwnProperty(refusedTreatment)) {
                        
                        if(this.refusedTreatments.checked[refusedTreatment]==true){
                            this.refused[refusedTreatment]=this.refusedTreatments.descriptions[refusedTreatment];
                        }
                        //alert("Selezionato " + refusedTreatment + ", valore " + this.refusedTreatments.checked[refusedTreatment]);
                        // alert(this.refusedTreatments.descriptions[refusedTreatment])
                    }
                }
            },


            printTraceabilityTherapy(printPdf){

                let v_myWindow

                let url= 'printPdf/2';

                v_myWindow = window.open(url, 'v_myWindow', 'width=' + screen.width + ',height=' + screen.height + ', scrollbars=yes, titlebar=no, top=0, left=0');

                return false;
            },
                 
          
            addTraceabilityTherapy(panel){
                // alert('yy')
                let _wm = this;
                let _panel=panel;
                let _errors=0;
                let _errorTitle="Scheda"
                let _errorDescription="Non aggiornata";
                let form = new FormData();
                form.append('userName', this.userName);
                form.append('userLastName', this.userLastName);
                // form.append('userFullName', this.userFullName);
                form.append('userInstanceId', this.userInstanceId);
                form.append('userId', this.userId);
                // form.append('doctorId', this.accessData.id);
                // form.append('doctorName', this.accessData.name);
                // form.append('doctorUserName', this.accessData.lastname);
                form.append('doctorId', 63);
                form.append('doctorName', 'mario');
                form.append('doctorUserName', 'rossi');

                if(_panel=='th'){
                    // alert('th')
                    if(!this.tHSaved){
                        form.append('action', 'store');
                    }else{
                        form.append('action', 'update');
                        if(this.userInstanceId){
                            form.append('userInstanceId',this.userInstanceId);
                        }else{
                            _errors++;
                            _errorTitle="Attenzione";
                            _errorDescription="Dati mancanti o incompleti contattare l\'amministratore di sistema"
                        }
                    }
                    form.append('section', 'th');
                    if(!this.isObjEmpty(this.nursCardTh)){
                        let _nurs=JSON.stringify(this.nursCardTh);

                        form.append('medicalAlertNote', this.nursCardTh.medicalAlertNote);
                        form.append('medicalAlert', this.nursCardTh.medicalAlert);
                        form.append('doctorsPrescriptionsNote', this.nursCardTh.doctorsPrescriptionsNote);
                        form.append('doctorsPrescriptions', this.nursCardTh.doctorsPrescriptions);
                        
                    }
                    if(!this.isObjEmpty(this.refusedTreatments.checked)){
                        let _nurs2=JSON.stringify(this.refusedTreatments);
                        
                        // for (let i = 0; i < refusedTreatments.length; i++) {
                        //     const value = refusedTreatments[i];
                        //     if (value == true) {
                        //         return (`${value} is true.`);
                        //     }else {
                        //         return(`${value} è false.`);
                        //     }
                        // }
                        
                        form.append('RefusedTreatment', _nurs2);
                    }  
                }

                if(_errors==0){
                    try {
                        axios.post(actions.ADD_TRACEABILITY,form).then(response => {
                            let error=response.data.errorNumber;
                            let _attempts=response.data.attempts;
                            _wm.errNum=error;
                            if(error == 0){

                                Swal.fire(
                                    'Scheda',
                                    'Aggiornata correttamente',
                                    'success'
                                )
                                // this.getTraceabilityTherapysByUserIstanceId(this.userInstanceId);
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

            getTraceabilityTherapys(){
                let _wm = this;
                try {
                    axios.get(actions.GET_TRACEABILITYS).then(response => {
                        let error=response.data.errorNumber;
                        let _attempts=response.data.attempts;
                        _wm.errNum=error;
                        if(error == 0){
                            // alert(JSON.stringify(response))
                        }else{
                            // eventBus.$emit('errorEvent', error, _attempts);
                        }
                    });
                } catch (error) {
                    throw error
                }
            },
            getTraceabilityTherapyById(id){
                let _wm = this;
                try {
                    let url=actions.GET_TRACEABILITY_BY_ID+'/'+id;
                    axios.get(url).then(response => {
                        let error=response.data.errorNumber;
                        let _attempts=response.data.attempts;
                        _wm.errNum=error;
                        if(error == 0){
                            // alert(JSON.stringify(response))
                        }else{
                            // eventBus.$emit('errorEvent', error, _attempts);
                        }
                    });
                } catch (error) {
                    throw error
                }
            },

            getTraceabilityTherapysByUserIstanceId(id){
                let _wm = this;
                id=36;
                try {
                    let url=actions.GET_TRACEABILITYS_BY_USER_ISTANCE_ID+'/'+id;
                    axios.get(url).then(response => {
                        // alert(JSON.stringify(response));
                        let error=response.data.errorNumber;
                        // let _attempts=response.data.attempts;
                        _wm.errNum=error;

                        if(error == 0){
                        
                            _wm.mainTitle="Aggiornamento Cartella nurs";
                            if(response.data.TraceabilityTherapy){
                            // _wm.tHSaved=true;
                            //alert(JSON.stringify(response.data.PsyMentalHealthDepartment))
                            // _wm.btnThSend="Aggiorna";

                            _wm.TraceabilityTherapy=response.data.TraceabilityTherapy;
                            alert(JSON.stringify(_wm.TraceabilityTherapy));

                            
                            // let _Trachterapy=response.data.TraceabilityTherapy;
                                
                            // _wm.thDate = _Trachterapy.th_date
                            // _wm.drugsNotAdministered = _Trachterapy.drugs_not_administered
                            // _wm.drugs = _Trachterapy.drugs
                            // _wm.motivationNotTakeMedicine = _Trachterapy.motivation_not_take_medicine
                            // _wm.medicalAlert = _Trachterapy.medical_alert
                            // _wm.medicalAlertNote = _Trachterapy.medical_alert_note
                            // _wm.doctorsPrescriptions = _Trachterapy.doctors_prescriptions
                            // _wm.doctorsPrescriptionsNote = _Trachterapy.doctors_prescriptions_note

                            // _wm.thFromThe = _Trachterapy.th_from_the
                            // _wm.thToThe = _Trachterapy.th_to_the
                            // _wm.thHours = _Trachterapy.th_hours
                            // _wm.thFrequency = _Trachterapy.th_frequency

                            // _wm.allTraceabilityTherapys=response.data.allTraceabilityTherapys;
                            }else{
                                _wm.btnThSend="Salva";
                            }
                            
                            _wm.firstSave=false;
                        }else if(error == 7){
                            _wm.btnThSend="Salva";
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




            addNursingTherapy(panel){
                let _wm = this;
                let _panel=panel;
                let _errors=0;
                let _errorTitle="Scheda"
                let _errorDescription="Non aggiornata";
                let form = new FormData();
                form.append('userName', this.userName);
                form.append('userLastName', this.userLastName);
                // form.append('userFullName', this.userFullName);
                form.append('userInstanceId', this.userInstanceId);
                form.append('userId', this.userId);
                // form.append('doctorId', this.accessData.id);
                // form.append('doctorName', this.accessData.name);
                // form.append('doctorUserName', this.accessData.lastname);
                form.append('doctorId', 36);
                form.append('doctorName', 'mario');
                form.append('doctorUserName', 'rossi');

                if(_panel=='nt'){

                    if(!this.tHSaved){
                        form.append('action', 'store');
                    }else{
                        form.append('action', 'update');
                        if(this.userInstanceId){
                            form.append('userInstanceId',this.userInstanceId);
                        }else{
                            _errors++;
                            _errorTitle="Attenzione";
                            _errorDescription="Dati mancanti o incompleti contattare l\'amministratore di sistema"
                        }
                    }
                    form.append('section', 'nt');
                    if(!this.isObjEmpty(this.nursCardNt)){
                        let _nurs=JSON.stringify(this.nursCardNt);
                        form.append('NursingTherapy', _nurs);
                    }    
                }
                
                if(_errors==0){
                    try {
                        axios.post(actions.ADD_NURSING,form).then(response => {
                            let error=response.data.errorNumber;
                            let _attempts=response.data.attempts;
                            _wm.errNum=error;
                            if(error == 0){

                                Swal.fire(
                                    'Scheda',
                                    'Aggiornata correttamente',
                                    'success'
                                )
                                // this.getNursingTherapysByUserIstanceId(this.userInstanceId);
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

            getNursingTherapys(){
                let _wm = this;
                try {
                    axios.get(actions.GET_NURSINGS).then(response => {
                        let error=response.data.errorNumber;
                        let _attempts=response.data.attempts;
                        _wm.errNum=error;
                        if(error == 0){
                            // alert(JSON.stringify(response))
                        }else{
                            // eventBus.$emit('errorEvent', error, _attempts);
                        }
                    });
                } catch (error) {
                    throw error
                }
            },

            getNursingTherapysById(id){
                let _wm = this;
                try {
                    let url=actions.GET_NURSING_BY_ID+'/'+id;
                    axios.get(url).then(response => {
                        let error=response.data.errorNumber;
                        let _attempts=response.data.attempts;
                        _wm.errNum=error;
                        if(error == 0){
                            // alert(JSON.stringify(response))
                        }else{
                            // eventBus.$emit('errorEvent', error, _attempts);
                        }
                    });
                } catch (error) {
                    throw error
                }
            },


            getNursingTherapysByUserIstanceId(id){
                let _wm = this;
                id=36;
                try {
                    let url=actions.GET_NURSINGS_BY_USER_ISTANCE_ID+'/'+id;
                    axios.get(url).then(response => {
                        
                        let error=response.data.errorNumber;
                        // let _attempts=response.data.attempts;
                        _wm.errNum=error;

                        if(error == 0){
                        
                            _wm.mainTitle="Aggiornamento Cartella nurs";
                            if(response.data.therapies){
                            // _wm.therapies=response.data.therapies;

                            // alert(JSON.stringify(_wm.therapies));


                            _wm.therapies=response.data.therapies;
                            alert(JSON.stringify(_wm.therapies));

                            // alert(JSON.stringify(response.data.PsyMentalHealthDepartment))
                            //_wm.btnThSend="Aggiorna";
                            
                            // let _NursTherapy=response.data.NursingTherapy;
                                
                            //     _wm.drug = _NursTherapy.drug
                            //     _wm.posology = _NursTherapy.posology
                            //     _wm.frequency = _NursTherapy.frequency
                            //     _wm.startTherapy = _NursTherapy.start_therapy
                            //     _wm.endTherapy = _NursTherapy.end_therapy
                            //     _wm.drugRoute = _NursTherapy.drug_route
                            //     _wm.morning = _NursTherapy.morning
                            //     _wm.afternoon = _NursTherapy.afternoon
                            //     _wm.evening = _NursTherapy.evening
                                
                                
                            
                            // _wm.allNursingTherapys=response.data.allNursingTherapys;
                            }else{
                                _wm.btnThSend="Salva";
                            }
                            
                            _wm.firstSave=false;
                        }else if(error == 7){
                            _wm.btnThSend="Salva";
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




            addRefusedTreatment(panel){
                alert('test1')
                let _wm = this;
                let _panel=panel;
                let _errors=0;
                let _errorTitle="Scheda"
                let _errorDescription="Non aggiornata";
                let form = new FormData();
                form.append('userName', this.userName);
                form.append('userLastName', this.userLastName);
                // form.append('userFullName', this.userFullName);
                form.append('userInstanceId', this.userInstanceId);
                form.append('userId', this.userId);
                // form.append('doctorId', this.accessData.id);
                // form.append('doctorName', this.accessData.name);
                // form.append('doctorUserName', this.accessData.lastname);
                form.append('doctorId', 36);
                form.append('doctorName', 'mario');
                form.append('doctorUserName', 'rossi');
    
                if(_panel=='rt'){
    
                    if(!this.tHSaved){
                        form.append('action', 'store');
                    }else{
                        form.append('action', 'update');
                        if(this.userInstanceId){
                            form.append('userInstanceId',this.userInstanceId);
                        }else{
                            _errors++;
                            _errorTitle="Attenzione";
                            _errorDescription="Dati mancanti o incompleti contattare l\'amministratore di sistema"
                        }
                    }
                    form.append('section', 'rt');
                    // if(!this.isObjEmpty(this.refusedTreatments)){
                        let _nurs=JSON.stringify(this.refusedTreatments);
                        form.append('RefusedTreatment', _nurs);
                        alert('test');
                    //}    
                }
                alert(form);
                
                // if(_errors==0){
                //     try {
                //         axios.post(actions.ADD_REFUSED,form).then(response => {
                //             let error=response.data.errorNumber;
                //             let _attempts=response.data.attempts;
                //             _wm.errNum=error;
                //             if(error == 0){
    
                //                 Swal.fire(
                //                     'Scheda',
                //                     'Aggiornata correttamente',
                //                     'success'
                //                 )
                //                 // this.getRefusedTreatmentsByUserIstanceId(this.userInstanceId);
                //             }else{
                //                 // eventBus.$emit('errorEvent', error, _attempts);
                //                 Swal.fire(
                //                     'Scheda',
                //                     'Non aggiornata contattare l\'amministratore di sistema',
                //                     'warning'
                //                 )
                //             }
                //         });
                //     } catch (error) {
                //         throw error
                //     }
                // }else{
                //     Swal.fire(
                //         _errorTitle,
                //         _errorDescription,
                //         'error'
                //     )
                // }
            },
        },
    };
</script>
