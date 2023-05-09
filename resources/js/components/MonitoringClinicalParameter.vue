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


                                <!-- <div v-if="newTheraphyPnl">
                                    <div v-for="(newTherapy, index) in newTherapies" :key="newTherapy.id" class="demot">
                                        <table> 
                                            <tr>
                                                <td>
                                                    <input type="date" class="autoCompResp" :id="`newTherapy1`" :name="index" v-model="newTherapy.mcpDate" style="margin: 0 0; width: 7rem;">
                                                    // :class="form-control" 
                                                </td>
                                                <td>
                                                    <td>
                                                        <input type="checkbox" :id="`newTherapy2`" style="margin: 0 0; width: 5rem;" :name="index" v-model="newTherapy.breakfast">
                                                    </td>
                                                    <td>                                                
                                                        <input type="checkbox" style="margin: 0 0; width: 5rem;" :name="index" v-model="newTherapy.lunch">
                                                    </td>
                                                    <td>   
                                                        <input type="checkbox" style="margin: 0 0;width: 5rem;" :name="index" v-model="newTherapy.dinner">
                                                    </td>
                                                </td>
                                                <td> 
                                                    <input type="text" :id="`newTherapy3`" :name="index" v-model="newTherapy.bodyWeight"  style="margin: 0 0; width: 5rem;">
                                                </td>
                                                <td>
                                                    <input type="text" :id="`newTherapy4`" :name="index" v-model="newTherapy.monitoringPa"  style="margin: 0 0; width: 5rem;">
                                                </td>
                                                <td>
                                                    <input type="text" :id="`newTherapy5`" :name="index" v-model="newTherapy.monitoringFc"  style="margin: 0 0; width: 5rem;">
                                                </td>
                                                <td>
                                                    <input type="text" :id="`newTherapy6`" :name="index" v-model="newTherapy.collectionOperatorSignature"  style="margin: 0 0; width: 5rem;">
                                                </td>
                                            </tr>    
                                        </table>
                                    </div>
                                </div> -->
<!-- 
                                <hr><hr>

                                {{therapies}}

                                <hr><hr>

                                {{newTherapies}} -->



                                {{nursMcp}}


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


                nursMcp:{},

                

                mainTitle:"psy",
                firstSave:true,
                mCPSaved:false,

                
                btnMcpSend:"Salva",
                total:0,               
                allMonitoringClinicalParameters:null,


                // therapies: [
                // {
                //     id: 1,
                //     drug: "tachipirina",
                //     posology: "2 volte al di",
                //     frequency: "test test",
                //     startTherapy: "2022-10-12",
                //     endTherapy: "2023-06-10",
                //     drugRoute: "intramuscolare",
                //     morning: "",
                //     afternoon: true,
                //     evening: "",
                //     external_doctor_prescription:0
                // },
                // {
                //     id: 2,          
                //     drug: "toradol",
                //     posology: "2 volte al di",
                //     frequency: "il venerdì",
                //     startTherapy: "2023-01-01",
                //     endTherapy: "2023-12-31",
                //     drugRoute: "orale",
                //     morning: true,
                //     afternoon: true,
                //     evening: "",
                //     external_doctor_prescription:0
                // },
                // {
                //     id: 3,        
                //     drug: "buscopan",
                //     posology: "unidie",
                //     frequency: "tutti i giorni",
                //     startTherapy: "2022-08-12",
                //     endTherapy: "2023-07-23",
                //     drugRoute: "intramuscolare",
                //     morning: true,
                //     afternoon: "",
                //     evening: "",
                //     external_doctor_prescription:0
                // },
                // ],

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
            this.getMonitoringClinicalParametersByUserIstanceId(1)
        },


        methods: {

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
                            // _wm.btnMcpSend="Aggiorna";
                            _wm.MonitoringClinicalParameter=response.data.MonitoringClinicalParameter;
                            // alert(JSON.stringify(_wm.MonitoringClinicalParameter));

                            
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
                                _wm.btnNhSend="Salva";
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
