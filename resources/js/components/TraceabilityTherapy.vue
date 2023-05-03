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

                               <!-- <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <span class="item form-group">
                                            <label for="doctor_name" class="col-form-label col-md-4 col-sm-2 label-align"><strong><h4>Personale addetto alla terapia</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input style="margin-right: 8rem;" type="text" name="doctor_name" v-model="doctorName">
                                            </span>
                                        </span>
                                        <span class="item form-group ml-5">
                                            <label for="" class="col-form-label col-md-1 col-sm-2 label-align"><strong><h4>Turno</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="text" name="" v-model="">
                                            </span>
                                        </span>
                                    </div>
                                </div>  -->

                                <div class="ml-3 mt-4">
                                    <h5>Visto il mattinale, verificati i presenti segnalati e le relative terapie prescritte dai medici per ogni detenuto, <br> si attesta quanto segue:</h5>
                                    
                                    <h2 class="mt-4 mb-2">Terapia <strong>non somministata </strong>al paziente:</h2>
                                </div>

                                
                                <table>
                                    <tr>
                                        <td><strong>FARMACO</strong></td>
                                        <td><strong>DAL</strong></td>
                                        <td><strong>AL</strong></td>
                                        <td><strong>ORA</strong></td>
                                        <td><strong>FREQUENZA</strong></td>
                                        <td><strong>NON <br> SOMMINISTRATO</strong></td>
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
                                        

                                            <input type="checkbox" :value="therapy.drug" v-model="terapieRifiutate">
                                            <!-- <input style="width: 5rem;" type="checkbox" v-model=""> -->
                                        </td>     
                                    </tr>  
                                </table>

                                {{ terapieRifiutate }}


                               
                                <div class="row" style="margin-top:50px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="medical_alert" class="col-form-label col-md-2 col-sm-2 label-align"><h4><strong>Avvisato medico</strong></h4></label>
                                            <span class="col-md-12 col-sm-12">
                                                <span>SI</span>
                                                <input type="radio" name="medical_alert" value="1" />
                                                <span>NO</span>
                                                <input type="radio" name="medical_alert" value="0" />
                                                <input type="text" name="medical_alert_note" placeholder="Note"/>
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
                                                <input type="radio" name="doctors_prescriptions" value="1" />
                                                <span>NO</span>
                                                <input type="radio" name="doctors_prescriptions" value="0" />
                                                <input type="text" name="doctors_prescriptions_note" placeholder="Note" />
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

                computed: {
                },

                watch: {

                },
                                    


                


                
                showInput:false,
                // showInput1:false,
                // showInput2:false,
                // showInput3:false,


                therapies:{
                    check_drugs_not_administered: [],
                    note_drugs_not_administered: [],
                },
                terapieRifiutate:[],
                drug:'',



                // startTherapy:null,
                // endTherapy:null,
                // hours:null,
                // frequency:null,
                // doctorName:'',
                // thDate:'',  




                // doctorName:null,
                // drugsNotAdministered:null,
                // drugs:null,
                // motivationNotTakeMedicine:null,
                // thFromThe:null,
                // thToThe:null, 
                // thHours:null,
                // thFrequency:null,
                // medicalAlert:null,
                // medicalAlertNote:null,
                // doctorsPrescriptions:null,
                // doctorsPrescriptionsNote:null,


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


            addTherapy () {

                this.newTherapies.push({
                    idDoctor:14,
                    doctorName:'medico',
                    doctorLastname:'test',   
                    userInstanceId :17,
                    userId:36,
                    drug: "",
                    posology: "",
                    frequency: "",
                    drugRoute: "",
                    morning: 0,
                    afternoon: 0,
                    evening: 0,
                    external_doctor_prescription:0,
                    deleted:0, 
                    acceptance:0,  
                    acceptanceId:0 
                })
            },

            saveTherapy(){
                let _wm=this;
                var addTherapyForm = new FormData();
                addTherapyForm.append('therapies', JSON.stringify(this.newTherapies));  
                if(this.newTherapies.length>0){
                    try {
                        //let url=actions.ADD_THERAPIES_DATA;
                        //  axios.post(url,addTherapyForm).then(response => {
                        //      let error=response.data.errorNumber;
                        //      let _attempts=response.data.attempts;
                        //      _wm.errNum=error;
                        //      if(error == 0){
                        //         // eventBus.$emit('errorEvent', 0, _attempts,'show','Terapie aggiunte con successo');
                        //         // setTimeout(function(){
                        //         //     _wm.hideSuccess();
                        //         // }, 4000);
                        //         _wm.i2hLoader=true;
                        //         _wm.initTherapies();
                        //         _wm.getTherapies();
                        //      }else{
                        //         let _errorDescription=response.data.errorDescription
                        //          eventBus.$emit('errorEvent', error,'show',_errorDescription);
                        //      }
                        //  })
                    }catch (error) {
                        throw error
                    }                             
                }else{
                    eventBus.$emit('errorEvent', 1000, 4,'show','Aggiungi almeno una terapia');
                }
            },









            printTraceabilityTherapy(printPdf){

                let v_myWindow

                let url= 'printPdf/2';

                v_myWindow = window.open(url, 'v_myWindow', 'width=' + screen.width + ',height=' + screen.height + ', scrollbars=yes, titlebar=no, top=0, left=0');

                return false;
            },
                 
            // toggleField(field) {
            //     const index = this.fields.indexOf(field);
            //     if (index > -1) {
            //         this.fields.splice(index, 1);
            //     } else {
            //         this.fields.push(field);
            //     }           
            // },


            addTraceabilityTherapy(panel){
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
                form.append('doctorId', 36);
                form.append('doctorName', 'mario');
                form.append('doctorUserName', 'rossi');

                if(_panel=='th'){

                    if(!this.tHSaved){
                        form.append('action', 'store');
                    }else{
                        form.append('action', 'update');
                        if(this.userInstanceId){
                            form.append('nursId',this.userInstanceId);
                        }else{
                            _errors++;
                            _errorTitle="Attenzione";
                            _errorDescription="Dati mancanti o incompleti contattare l\'amministratore di sistema"
                        }
                    }
                    form.append('section', 'th');
                    if(!this.isObjEmpty(this.nursCardTh)){
                        let _nurs=JSON.stringify(this.nursCardTh);
                        form.append('TraceabilityTherapy', _nurs);
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
                                this.getTraceabilityTherapysByUserIstanceId(this.userInstanceId);
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
                        // alert('xx');
                        // alert(JSON.stringify(response));
                        let error=response.data.errorNumber;
                        // let _attempts=response.data.attempts;
                        _wm.errNum=error;

                        if(error == 0){
                        
                            _wm.mainTitle="Aggiornamento Cartella nurs";
                            if(response.data.TraceabilityTherapy){
                            _wm.tHSaved=true;
                            //alert(JSON.stringify(response.data.PsyMentalHealthDepartment))
                            _wm.btnThSend="Aggiorna";
                            
                            let _Trachterapy=response.data.TraceabilityTherapy;
                                
                            _wm.thDate = _Trachterapy.th_date
                            _wm.drugsNotAdministered = _Trachterapy.drugs_not_administered
                            _wm.drugs = _Trachterapy.drugs
                            _wm.motivationNotTakeMedicine = _Trachterapy.motivation_not_take_medicine
                            _wm.medicalAlert = _Trachterapy.medical_alert
                            _wm.medicalAlertNote = _Trachterapy.medical_alert_note
                            _wm.doctorsPrescriptions = _Trachterapy.doctors_prescriptions
                            _wm.doctorsPrescriptionsNote = _Trachterapy.doctors_prescriptions_note

                            _wm.thFromThe = _Trachterapy.th_from_the
                            _wm.thToThe = _Trachterapy.th_to_the
                            _wm.thHours = _Trachterapy.th_hours
                            _wm.thFrequency = _Trachterapy.th_frequency

                            _wm.allTraceabilityTherapys=response.data.allTraceabilityTherapys;
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
                form.append('userFullName', this.userFullName);
                form.append('userInstance', this.userInstance);
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
                            form.append('nursId',this.userInstanceId);
                        }else{
                            _errors++;
                            _errorTitle="Attenzione";
                            _errorDescription="Dati mancanti o incompleti contattare l\'amministratore di sistema"
                        }
                    }
                    form.append('section', 'nt');
                    if(!this.isObjEmpty(this.nursCardTh)){
                        let _nurs=JSON.stringify(this.nursCardTh);
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
                                this.getNursingTherapysByUserIstanceId(this.userInstanceId);
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
                            alert(JSON.stringify(response))
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
                            _wm.therapies=response.data.therapies;

                            // alert(JSON.stringify(_wm.therapies));


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
        }    
    };
</script>
