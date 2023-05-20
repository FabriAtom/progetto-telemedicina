<template>

<!-- Modulo di raccolta dei parametri clinici come da prescrizione -->

    <div class="container">
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title" style="background:lightgrey;padding:7px; border-radius:3px; margin-top:50px;">
                            <h1>Modulo di raccolta dei parametri clinici come da prescrizione</h1>
                        </div>

                        <div class="x_content">

                        <!-- <div class="tab-content" id="myTabContent"> -->
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left align-items-center">

                                <div class="row" style="margin-top:20px;">
                                    <span class="col-md-12 col-sm-12">
                                        <span class="item form-group">
                                            <label for="department_cpc" class="col-form-label col-md-2 col-sm-2 label-align"><strong><h4>Reparto/Sezione</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input style="margin-right: 10.6rem;" type="text" name="department_cpc" v-model="nursCpc.departmentCpc">
                                            </span>
                                            <span class="item form-group">
                                            <label for="doctor_prescriber" class="col-form-label col-md-3 col-sm-2 label-align"><strong><h4>Medico Prescrittore</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="text" name="doctor_prescriber" v-model="nursCpc.doctorPrescriber">
                                            </span>
                                        </span>
                                        </span>
                                    </span>
                                </div>

                                <!-- <div class="row" style="margin-top:20px;"> -->
                                <!-- </div> -->
                                <div class="row mb-3" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <span class="item form-group">
                                            <label for="date_start_collection" class="col-form-label col-md-3 col-sm-2 label-align"><strong><h4>data inizio raccolta dati </h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input style="margin-right: 8rem;" type="date" name="date_start_collection" v-model="nursCpc.dateStartCollection">
                                            </span>
                                            <label for="date_end_collection" class="col-form-label col-md-3 col-sm-2 label-align"><strong><h4>data fine raccolta dati</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="date" name="date_end_collection" v-model="nursCpc.dateEndCollection">
                                            </span>
                                        </span>
                                    </div>
                                </div>

                        
                                <table>
                                    <thead>
                                        <tr>
                                            <th colspan="2"><strong>P.A.</strong></th>
                                            <th><strong>F.C.</strong></th>
                                            <th><strong>SPO2</strong></th>
                                            <th><strong>T.C.</strong></th>
                                        </tr>
                                        <tr>
                                            <td><strong>sistolica</strong></td>  
                                            <td><strong>diastolica</strong></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            
                                                <td>
                                                    <input style="width: 5rem;"  type="text" name="collection_pa_systolic" v-model="nursCpc.collectionPaSystolic">
                                                </td>
                                                <td>
                                                    <input style="width: 5rem;"  type="text" name="collection_pa_diastolic" v-model="nursCpc.collectionPaDiastolic">
                                                </td>
                                            
                                            <td>
                                                <input style="width: 5rem;"  type="text" name="collection_fc" v-model="nursCpc.collectionFc">
                                            </td>
                                            <td>
                                                <input style="width: 5rem;"  type="text" name="collection_spo2" v-model="nursCpc.collectionSpo2">
                                            </td>
                                            <td>
                                                <input style="width: 5rem;"  type="text" name="collection_tc"  v-model="nursCpc.collectionTc">
                                            </td>
                                        </tr> 
                                    </tbody>

                                </table>

                                {{nursCpc}}
                              




                                <div>
                                    <h2 class="ml-4 mb-4 mt-4"><strong>Archivio</strong></h2>
                                    <ul style="display:flex; flex-wrap: wrap;">
                                        <span v-for="(item, key, index) in ClinicalParameterCollection" :key="index" class="mr-5">

                                            <div class="card text-white bg-secondary mb-2" style="max-width: 20rem;  border-radius: 20px;">
                                                <div class="card-header">
                                                    <span style="min-width: 100px;"> 
                                                        <div style="min-width: 100px;"><strong>Nome: </strong><h5 style="display: inline-block;">{{ item['doctor_name'] }} {{ item['doctor_lastname'] }}</h5></div>
                                                    </span> 
                                            </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">
                                                        <div><strong>Data inizio:</strong> {{ i2hDateFormat(item['cpc_date']) }}</div>
                                                    </h5>
                                                    <p class="card-text">
                                                        <div style="min-width: 100px;"><strong>Sistolica:</strong> {{ (item['collection_pa_systolic']) }}</div>
                                                        <div style="min-width: 100px;"><strong>Diastolica:</strong> {{ (item['collection_pa_diastolic']) }}</div>
                                                        <div style="min-width: 100px;"><strong>F.C:</strong> {{ ((item['collection_fc'])) }} </div>
                                                        <div style="min-width: 100px;"><strong>SPO2:</strong> {{ (item['collection_spo2']) }} </div>
                                                        <div style="min-width: 100px;"><strong>T.C:</strong> {{ (item['collection_tc']) }} </div>
                                                    </p>
                                                </div>
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
                                                <input type="date" name="start_date" v-model="nursCpc.startDate">
                                            </span>
                                            <label for="end_date" class="col-form-label col-md-1 col-sm-2 label-align"><strong><h4>AL</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="date" name="end_date" v-model="nursCpc.endDate">
                                            </span>
                                            <span class="search-bar">
                                                <a class="search-button btn btn-success"  @click="getClinicalParameterCollectionsByUserIstanceId(36,true)">Cerca</a>
                                            </span>
                                        </span>
                                    </div>
                                </div>

    

                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="pull-right">
                                        <a class="btn bg-primary text-white i2hBtnPrint ml-4"><i class="fa fa-print"></i>Stampa Archivio</a>
                                    </div>
                                </div>

                                <br>
                                ::{{ClinicalParameterCollection}}

                                <br><br>
 
                                <div class="ln_solid mt-2"></div>
                                <div class="item form-group">
                                    <div class="pull-right">
                                        <span class="btn btn-success i2hBtn ml-3" @click="addClinicalParameterCollection('cpc')">{{btnCpcSend}}</span>
                                        <a  class="btn btn-success i2hBtnPrint"  @click=" printClinicalParameterCollection('printPdf')"><i class="fa fa-print"></i>Stampa</a>
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
//   font-size: ;
}

ul, li{
    list-style: none;
}
</style>


<script>

    import * as actions from "../config/ApiUrl";
    import axios from 'axios';
    import Swal from 'sweetalert2';

    export default {
        
        name: 'ClinicalParameterCollection',

        data() {
            return {
                userName: 'mario',
                userLastName:'rossi',
                userFullName:'',
                userInstanceId:36,
                userId:237,


                ClinicalParameterCollection:{},

                showInput5:false,

                nursCpc:{},

                accessData:[

                    id => 31,
                    name => 'mario',
                    lastname => 'rossi',
                    
                ],
             
                
                date:new Date(),
                
                mainTitle:"psy",
                firstSave:true,
                cPCSaved:false,
                
                
                btnCpcSend:"Salva",
                total:0,               
                allClinicalParameterCollections:null,
                
                

            //     therapies: [
            //     {
            //         id: 1,
            //         drug: "tachipirina",
            //         posology: "2 volte al di",
            //         frequency: "test test",
            //         startTherapy: "2022-10-12",
            //         endTherapy: "2023-06-10",
            //         drugRoute: "intramuscolare",
            //         morning: "",
            //         afternoon: true,
            //         evening: "",
            //         external_doctor_prescription:0
            //     },
            //     {
            //         id: 2,          
            //         drug: "toradol",
            //         posology: "2 volte al di",
            //         frequency: "il venerdì",
            //         startTherapy: "2023-01-01",
            //         endTherapy: "2023-12-31",
            //         drugRoute: "orale",
            //         morning: true,
            //         afternoon: true,
            //         evening: "",
            //         external_doctor_prescription:0
            //     },
            //     {
            //         id: 3,        
            //         drug: "buscopan",
            //         posology: "unidie",
            //         frequency: "tutti i giorni",
            //         startTherapy: "2022-08-12",
            //         endTherapy: "2023-07-23",
            //         drugRoute: "intramuscolare",
            //         morning: true,
            //         afternoon: "",
            //         evening: "",
            //         external_doctor_prescription:0
            //     },
            //     ],

            //     newTherapies: [
            //     {
            //         idDoctor:0,
            //         doctorName:'',
            //         doctorLastname:'',
            //         userInstanceId:0,
            //         userId:0,

            //         cpc_date:'',
            //         collection_pa:'',
            //         collection_fc:'',
            //         collection_spo2:'',
            //         collection_tc:'',
            //         // drug: "",
            //         // posology: "",
            //         // frequency: "",
            //         // startTherapy: "",
            //         // endTherapy: null,
            //         // drugRoute: "",
            //         // morning: 0,
            //         // afternoon: 0,
            //         // evening: 0,
            //         // external_doctor_prescription:0,
            //         // deleted:0,
            //         // acceptance:0,
            //         // acceptanceId:0 
            //     },
            // ],
            // showtherapies:true,
            // newTheraphyPnl:true,
            }
        },

        created: function () {
            this.getClinicalParameterCollectionsByUserIstanceId(1)
        },

        computed: {
        },

        watch: {
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


            printClinicalParameterCollection(printPdf){

                let v_myWindow

                let url= 'printPdf/2';

                v_myWindow = window.open(url, 'v_myWindow', 'width=' + screen.width + ',height=' + screen.height + ', scrollbars=yes, titlebar=no, top=0, left=0');

                return false;
            },



            addClinicalParameterCollection(panel){
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

                if(_panel=='cpc'){

                    if(!this.cPCSaved){
                        form.append('action', 'store');
                    }else{
                        form.append('action', 'update');
                        if(this.userIstanceId){
                            form.append('userInstanceId',this.userIstanceId);
                        }else{
                            _errors++;
                            _errorTitle="Attenzione";
                            _errorDescription="Dati mancanti o incompleti contattare l\'amministratore di sistema"
                        }
                    }
                    form.append('section', 'cpc');
                    if(!this.isObjEmpty(this.nursCpc)){
                        let _clinical=JSON.stringify(this.nursCpc);
                        form.append('ClinicalParameterCollection', _clinical);
                        
                        form.append('cpcDate', this.nursCpc.cpcDate);
                        form.append('collectionPaSystolic', this.nursCpc.collectionPaSystolic);
                        form.append('collectionPaDiastolic', this.nursCpc.collectionPaDiastolic);
                        form.append('collectionFc', this.nursCpc.collectionFc);
                        form.append('collectionSpo2', this.nursCpc.collectionSpo2);
                        form.append('collectionTc', this.nursCpc.collectionTc);

                        form.append('ClinicalParameterCollection', _clinical);
                    }
                }
                
                if(_errors==0){
                    try {
                        axios.post(actions.ADD_COLLECTION,form).then(response => {
                            let error=response.data.errorNumber;
                            let _attempts=response.data.attempts;
                            _wm.errNum=error;
                            if(error == 0){

                                Swal.fire(
                                    'Scheda',
                                    'Aggiornata correttamente',
                                    'success'
                                )
                                // this.getClinicalParameterCollectionsByUserIstanceId(this.userInstanceId);
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

            getClinicalParameterCollections(){
                let _wm = this;
                try {
                    axios.get(actions.GET_COLLECTIONS).then(response => {
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
            getClinicalParameterCollectionById(id){
                let _wm = this;
                try {
                    let url=actions.GET_COLLECTION_BY_ID+'/'+id;
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

            getClinicalParameterCollectionsByUserIstanceId(id,first){
                let _wm = this;
                id=36;


                let _param;
                _wm.ClinicalParameterCollection=[];


                try {
                    let url=actions.GET_COLLECTIONS_BY_USER_ISTANCE_ID+'/'+id;
                    axios.get(url,{params:{first:first,startDate:this.nursCpc.startDate,endDate:this.nursCpc.endDate}}).then(response => {
                        // alert(JSON.stringify(response));
                        let error=response.data.errorNumber;
                        // let _attempts=response.data.attempts;
                        _wm.errNum=error;

                        if(error == 0){
                        
                            _wm.mainTitle="Aggiornamento Cartella nurs";
                            if(response.data.ClinicalParameterCollection){
                            // _wm.cPCSaved=true;
                            // alert(JSON.stringify(response.data.ClinicalParameterCollection))
                            // _wm.btnCpcSend="Aggiorna";

                            _wm.ClinicalParameterCollection=response.data.ClinicalParameterCollection;
                            // alert(JSON.stringify(_wm.ClinicalParameterCollection));
                            // console.log(_wm.ClinicalParameterCollection);

                            for (let prop in _wm.ClinicalParameterCollection) {

                            }

                        
                            // _wm.nursCpc.allClinicalParameterCollections=response.data.allClinicalParameterCollections;
                            }else{
                                _wm.btnCpcSend="Salva";
                            }
                            _wm.firstSave=false;
                        }else if(error == 7){
                            _wm.btnCpcSend="Salva";
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
