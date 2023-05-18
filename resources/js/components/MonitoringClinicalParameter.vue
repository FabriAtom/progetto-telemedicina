<template>
    <div class="container">
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title" style="background:lightgrey;padding:7px; border-radius:3px; margin-top:50px;">
                            <h1>Modulo di monitoraggio parametri clinici in caso di rifiuto della alimentazione (sia liquidi, sia solidi).</h1>
                        </div>

                        <div class="x_content">

                        <!-- <div class="tab-content" id="myTabContent"> -->
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left align-items-center">

                                <div class="row" style="margin-top:20px;">
                                    <span class="col-md-12 col-sm-12">
                                        <span class="item form-group">
                                            <label for="department" class="col-form-label col-md-2 col-sm-2 label-align"><strong><h4>Reparto/Sezione</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="text" name="department" v-model="nursMcp.department">
                                            </span>
                                        </span>
                                    </span>
                                </div>

                                <!-- <div class="row" style="margin-top:20px;"> -->
                                <!-- </div> -->
                                <div class="row mb-3" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <span class="item form-group">
                                            <label for="date_start_rejection" class="col-form-label col-md-4 col-sm-2 label-align"><strong><h4>Data inizio rifiuto alimentazione</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input style="margin-right: 8rem;" type="date" name="date_start_rejection" v-model="nursMcp.dateStartRejection">
                                            </span>
                                            <label for="date_end_rejection" class="col-form-label col-md-2 col-sm-2 label-align"><strong><h4>Data fine</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="date" name="date_end_rejection" v-model="nursMcp.dateEndRejection">
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                 
                                
                               
                                <table>
                                    <tr>
                                        <th colspan="3"><strong>ALIMENTAZIONE</strong></th>
                                        <th rowspan="1"><strong> PESO <br> CORPOREO</strong></th>
                                        <th colspan="2"><strong>P.A.</strong></th>
                                        <th>F.C.</th>
                                    </tr>
                                    <tr>
                                        <td><strong>colazione</strong></td>
                                        <td><strong>pranzo</strong></td>
                                        <td><strong>cena</strong></td>   
                                        
                                        <td></td>
                                        <td><strong>sistolica</strong></td>  
                                        <td><strong>diastolica</strong></td>
                                        <td></td>
                                    </tr>
                                     <tr>
                                        <td>
                                            <input style="width: 5rem;" type="radio" value="colazione" name="mcp_diet" v-model="nursMcp.mcpDiet">
                                        </td>
                                        <td>                                                
                                            <input style="width: 5rem;" type="radio" value="pranzo" name="mcp_diet" v-model="nursMcp.mcpDiet">
                                        </td>
                                        <td>   
                                            <input style="width: 5rem;" type="radio" value="cena" name="mcp_diet" v-model="nursMcp.mcpDiet">
                                        </td>
                                        
                                        <td>
                                            <input style="width: 5rem;" type="text" name="body_weight" v-model="nursMcp.bodyWeight">     
                                        </td>

                                        <td>
                                            <input style="width: 5rem;" type="text" name="monitoring_pa_systolic" v-model="nursMcp.monitoringPaSystolic">
                                        </td>
                                        <td>
                                            <input style="width: 5rem;" type="text" name="monitoring_pa_diastolic" v-model="nursMcp.monitoringPaDiastolic">
                                        </td>

                                        <td>
                                            <input style="width: 5rem;" type="text" name="monitoring_fc" v-model="nursMcp.monitoringFc">  
                                        </td>
                                    </tr>
                                </table>


                                <div class="mt-4">
                                    <h2 class="ml-4 mb-4 mt-4"><strong>Archivio</strong></h2>
                                    <ul style="display: flex; flex-wrap: wrap;">
                                        <span v-for="(item, key, index) in MonitoringClinicalParameter" :key="index" class="mr-5">

                                            <div class="card text-white bg-secondary mb-3" style="max-width: 19rem; border-radius: 20px;">
                                                <div class="card-header">
                                                    <span style="min-width: 100px;">
                                                        <div><strong>Nome: </strong><h5 style="display: inline-block;">{{ item['doctor_name'] }} {{ item['doctor_lastname'] }}</h5></div>
                                                    </span> 
                                            </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">
                                                        <div style="min-width: 100px;"><strong>Data inizio: </strong>{{ i2hDateFormat(item['date_start_rejection']) }}</div>
                                                        <div style="min-width: 100px;"><strong>Data fine: </strong>{{ i2hDateFormat(item['date_end_rejection']) }} </div>
                                                    </h5>
                                                    <p class="card-text">
                                                        <div style="min-width: 100px;"><strong>Data:</strong> {{ i2hDateFormat(item['mcp_date']) }}</div>
                                                        <div style="min-width: 100px;"><strong>Alimentazione:</strong> {{ ((item['mcp_diet'])) }}</div>
                                                        <div style="min-width: 100px;"><strong>Peso Corporeo:</strong> {{ (item['body_weight']) }} </div>
                                                        <div style="min-width: 100px;"><strong>Pressione Sistolica:</strong> {{ (item['monitoring_pa_systolic']) }}</div>
                                                        <div style="min-width: 100px;"><strong>Pressione Diastolica:</strong> {{ (item['monitoring_pa_diastolic']) }}</div>
                                                        <div style="min-width: 100px;"><strong>F.C:</strong> {{ (item['monitoring_fc']) }}</div>

                                                    </p>
                                                </div>
                                            </div>
                                            <br><br>
                                        </span>
                                    </ul>
                                </div> 

                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="pull-right">
                                        <a class="btn bg-primary text-white i2hBtnPrint ml-4"><i class="fa fa-print"></i>Stampa Archivio</a>
                                    </div>
                                </div>

                                ::{{MonitoringClinicalParameter}}
                                <br><br>

                                <div class="ln_solid mt-2"></div>
                                <div class="item form-group">
                                    <div class="pull-right">
                                        <span class="btn btn-success i2hBtn ml-3" @click="addMonitoringClinicalParameter('mcp')">{{btnMcpSend}}</span>
                                        <a  class="btn btn-success i2hBtnPrint"  @click=" printMonitoringClinicalParameter('printPdf')"><i class="fa fa-print"></i>Stampa</a>
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
  padding: 3;
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
        
        name: 'MonitoringClinicalParameter',


        data() {
            return {
                userName: 'mario',
                userLastName:'rossi',
                userFullName:'',
                userInstanceId:36,
                userId:237,


                // showInput1:false,


                // department:null,
                // dateStartRejection:null,
                // dateEndRejection:null,
                // mcpDate:null,
                // inmateFeed:null,
                // bodyWeight:null,  
                // monitoringPa:null,
                // monitoringFc:null,
                // operatorSignature:null, 
                // folderPage:null,
                // breakfast:null,
                // lunch:null,
                // dinner:null,


                nursMcp:{},
                MonitoringClinicalParameter:{},



                accessData:[

                    id => 31,
                    name => 'mario',
                    lastname => 'rossi',
                    
                ],
                // psyMhDoctorId:0,
                // psyMhDoctorName:'',
                // psyMhDoctorLastname:'',
                // psyMhDate:null,
                // psyCardId:null,
                date:new Date(),
            

                mainTitle:"psy",
                firstSave:true,
                mCPSaved:false,

                
                btnMcpSend:"Salva",
                total:0,               
                allMonitoringClinicalParameters:null,

                // testMonitoring:[],
            }
        },

        created: function () {
            this.getMonitoringClinicalParametersByUserIstanceId(1)
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


            // addTherapy () {

            //     this.newTherapies.push({
            //         idDoctor:14,
            //         doctorName:'medico',
            //         doctorLastname:'test',   
            //         userInstanceId :17,
            //         userId:36,
            //         // drug: "",
            //         // posology: "",
            //         // frequency: "",
            //         // drugRoute: "",
            //         // morning: 0,
            //         // afternoon: 0,
            //         // evening: 0,
            //         // external_doctor_prescription:0,
            //         // deleted:0, 
            //         // acceptance:0,  
            //         // acceptanceId:0 
            //         cpc_date:'',
            //         collection_pa:'',
            //         collection_fc:'',
            //         collection_spo2:'',
            //         collection_tc:'',
            //     })
            // },

            // saveTherapy(){
            // let _wm=this;
            // var addTherapyForm = new FormData();
            // addTherapyForm.append('therapies', JSON.stringify(this.newTherapies));  
            // if(this.newTherapies.length>0){
            //     try {
            //         //let url=actions.ADD_THERAPIES_DATA;
            //         //  axios.post(url,addTherapyForm).then(response => {
            //         //      let error=response.data.errorNumber;
            //         //      let _attempts=response.data.attempts;
            //         //      _wm.errNum=error;
            //         //      if(error == 0){
            //         //         // eventBus.$emit('errorEvent', 0, _attempts,'show','Terapie aggiunte con successo');
            //         //         // setTimeout(function(){
            //         //         //     _wm.hideSuccess();
            //         //         // }, 4000);
            //         //         _wm.i2hLoader=true;
            //         //         _wm.initTherapies();
            //         //         _wm.getTherapies();
            //         //      }else{
            //         //         let _errorDescription=response.data.errorDescription
            //         //          eventBus.$emit('errorEvent', error,'show',_errorDescription);
            //         //      }
            //         //  })
            //     }catch (error) {
            //         throw error
            //     }                             
            // }else{
            //     eventBus.$emit('errorEvent', 1000, 4,'show','Aggiungi almeno una terapia');
            // }
            // },






            printMonitoringClinicalParameter(printPdf){

                let v_myWindow

                let url= 'printPdf/2';

                v_myWindow = window.open(url, 'v_myWindow', 'width=' + screen.width + ',height=' + screen.height + ', scrollbars=yes, titlebar=no, top=0, left=0');

                return false;
            },
                 
            
            


            addMonitoringClinicalParameter(panel){
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

                if(_panel=='mcp'){

                    if(!this.nTSaved){
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
                    form.append('section', 'mcp');
                    if(!this.isObjEmpty(this.nursMcp)){
                        let _nurs=JSON.stringify(this.nursMcp);

                        form.append('mcpDiet', this.nursMcp.mcpDiet);
                        form.append('bodyWeight', this.nursMcp.bodyWeight);
                        form.append('monitoringPaSystolic', this.nursMcp.monitoringPaSystolic);
                        form.append('monitoringPaDiastolic', this.nursMcp.monitoringPaDiastolic);
                        form.append('monitoringFc', this.nursMcp.monitoringFc);

                        form.append('MonitoringClinicalParameter', _nurs);
                    }
                }
                
                if(_errors==0){
                    try {
                        axios.post(actions.ADD_MONITORING,form).then(response => {
                            let error=response.data.errorNumber;
                            let _attempts=response.data.attempts;
                            _wm.errNum=error;
                            if(error == 0){

                                Swal.fire(
                                    'Scheda',
                                    'Aggiornata correttamente',
                                    'success'
                                )
                                //this.getMonitoringClinicalParametersByUserIstanceId(this.userInstance);
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

            getMonitoringClinicalParameters(){
                let _wm = this;
                try {
                    axios.get(actions.GET_MONITORINGS).then(response => {
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

            getMonitoringClinicalParameterById(id){
                let _wm = this;
                try {
                    let url=actions.GET_MONITORING_BY_ID+'/'+id;
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

            getMonitoringClinicalParametersByUserIstanceId(id){
                let _wm = this;
                id=36;
                try {
                    let url=actions.GET_MONITORINGS_BY_USER_ISTANCE_ID+'/'+id;
                    axios.get(url).then(response => {
                        // alert(JSON.stringify(response));
                        let error=response.data.errorNumber;
                        // let _attempts=response.data.attempts;
                        _wm.errNum=error;

                        if(error == 0){
                        
                            _wm.mainTitle="Aggiornamento Cartella nurs";
                            if(response.data.MonitoringClinicalParameter){
                            // _wm.mCPSaved=true;
                            // alert(JSON.stringify(_wm.MonitoringClinicalParameter));
                            // _wm.btnMcpSend="Aggiorna";

                            _wm.MonitoringClinicalParameter=response.data.MonitoringClinicalParameter;
                            // console.log(_wm.MonitoringClinicalParameter);

                            for (let prop in _wm.MonitoringClinicalParameter) {


                                
                                // _wm.MonitoringClinicalParameter[prop];
                                // let clinicalParameter={};

                                // //clinicalParameter['data']=_wm.MonitoringClinicalParameter[prop];
                                // clinicalParameter['fullName']=_wm.MonitoringClinicalParameter[prop] + _wm.MonitoringClinicalParameter[prop].doctor_lastname;

                                // clinicalParameter['mcpDiet']=_wm.MonitoringClinicalParameter[prop].mcp_diet;
                                // clinicalParameter['bodyWeight']=_wm.MonitoringClinicalParameter[prop].body_weight;
                                // clinicalParameter['monitoringPaSystolic']=_wm.MonitoringClinicalParameter[prop].monitoring_pa_systolic;
                                // clinicalParameter['monitoringPaDiastolic']=_wm.MonitoringClinicalParameter[prop].monitoring_pa_diastolic;
                                // clinicalParameter['monitoringFc']=_wm.MonitoringClinicalParameter[prop].monitoring_fc;


                                // _wm.testMonitoring.push(clinicalParameter)
                            }





                            // let _NursMcp=response.data.MonitoringClinicalParameter;

                            // _wm.nursMcp.department = _NursMcp.department
                            // _wm.nursMcp.dateStartRejection = _NursMcp.date_start_rejection
                            // _wm.nursMcp.dateEndRejection = _NursMcp.date_end_rejection
                            // _wm.nursMcp.mcpDate = _NursMcp.mcp_date
                            // _wm.nursMcp.breakfast = _NursMcp.breakfast
                            // _wm.nursMcp.lunch = _NursMcp.lunch
                            // _wm.nursMcp.dinner = _NursMcp.dinner

                            // _wm.nursMcp.bodyWeight = _NursMcp.body_weight
                            // _wm.nursMcp.monitoringPa = _NursMcp.monitoring_pa
                            // _wm.nursMcp.monitoringFc = _NursMcp.monitoring_fc
                            // _wm.nursMcp.operatorSignature = _NursMcp.operator_signature

                            // _wm.allMonitoringClinicalParameters=response.data.allMonitoringClinicalParameters;
                            }else{
                                _wm.btnMcpSend="Salva";
                            }
                            
                            _wm.firstSave=false;
                        }else if(error == 7){
                            _wm.btnMcpSend="Salva";
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
