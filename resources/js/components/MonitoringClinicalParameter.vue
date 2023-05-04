<template>
    <div class="container">
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title" style="background:lightgrey;padding:7px; border-radius:3px; margin-top:100px;">
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
                                <div>
                                    <a style="margin-left: 949px; margin-top: 20px; margin-bottom: 10px;" class="btn btn-info i2hBtnPrint"><i class="fa fa-print"><input type="radio" v-model="showInput1" value="true"></i>Aggiungi Modulo</a>
                                </div>
                               
                                <table>
                                    
                                    <tr>
                                        <th>DATA</th>
                                        <th colspan="4">
                                            ALIMENTAZIONE 
                                            
                                        </th>

                                        <th>PESO <br> CORPOREO</th>

                                        <th>P.A.</th>
                                        <th>F.C.</th>
                                        <th>FIRMA <br> OPERATORE</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <!-- data -->
                                        </td>
                                        <td>
                                            <td>
                                                colazione
                                            </td>
                                            <td>
                                                pranzo
                                            </td>
                                            <td>
                                                cena
                                            </td>
                                        </td>

                                        <td>
                                            <!-- <input style="width: 5rem;" type="text" name="body_weight" v-model="bodyWeight">      -->
                                        </td>
                                        
                                        <td>
                                            <!-- <input style="width: 5rem;" type="text" name="monitoring_pa" v-model="monitoringPa"> -->
                                        </td>
                                        <td>
                                            <!-- <input style="width: 5rem;" type="text" name="monitoring_fc" v-model="monitoringFc">   -->
                                        </td>
                                        <td>
                                           <!-- {{operatorSignature}} -->
                                        </td>
                                    </tr>


                                    <!-- <tr v-for="(therapies, index) in MonitoringClinicalParameter" :key="index">
                                        <td>
                                            <input style="width: 7rem;" type="date" name="mcp_date" v-model="therapies.mcpDate">
                                        </td>

                                        <td>
                                            <td>
                                                <input style="width: 5rem;" type="checkbox" name="breakfast" v-model="therapies.breakfast">
                                                {{therapies.breakfast}}
                                            </td>
                                            <td>                                                
                                                <input style="width: 5rem;" type="checkbox" name="lunch" v-model="therapies.lunch">
                                            </td>
                                            <td>   
                                                <input style="width: 5rem;" type="checkbox" name="dinner" v-model="therapies.dinner">
                                            </td>
                                        </td>

                                        <td>
                                            <input style="width: 5rem;" type="text" name="body_weight" v-model="therapies.bodyWeight">     
                                        </td>
                                        <td>
                                            <input style="width: 5rem;" type="text" name="monitoring_pa" v-model="therapies.monitoringPa">
                                        </td>
                                        <td>
                                            <input style="width: 5rem;" type="text" name="monitoring_fc" v-model="therapies.monitoringFc">  
                                        </td>
                                        <td>
                                           {{therapies.operatorSignature}}
                                        </td> 
                                    </tr>-->

                                     <tr>
                                        <td>
                                            <input style="width: 7rem;" type="date" name="mcp_date" v-model="nursMcp.mcpDate">
                                        </td>
                                        <td>
                                            <td>
                                                <input style="width: 5rem;" type="checkbox" name="breakfast" v-model="nursMcp.breakfast">
                                            </td>
                                            <td>                                                
                                                <input style="width: 5rem;" type="checkbox" name="lunch" v-model="nursMcp.lunch">
                                            </td>
                                            <td>   
                                                <input style="width: 5rem;" type="checkbox" name="dinner" v-model="nursMcp.dinner">
                                            </td>
                                        </td>

                                        <td>
                                            <input style="width: 5rem;" type="text" name="body_weight" v-model="nursMcp.bodyWeight">     
                                        </td>
                                        <td>
                                            <input style="width: 5rem;" type="text" name="monitoring_pa" v-model="nursMcp.monitoringPa">
                                        </td>
                                        <td>
                                            <input style="width: 5rem;" type="text" name="monitoring_fc" v-model="nursMcp.monitoringFc">  
                                        </td>
                                        <td>
                                           {{nursMcp.operatorSignature}}
                                        </td>
                                    </tr>




                                    <!-- <tr v-if="showInput1">
                                        <td>{{mcpDate}}</td>
                                         <td>
                                            <td>
                                                <input style="width: 5rem;" type="checkbox" name="breakfast" v-model="breakfast">
                                            </td>
                                            <td>
                                                <input style="width: 5rem;" type="checkbox" name="lunch" v-model="lunch">
                                            </td>
                                            <td>
                                                <input style="width: 5rem;" type="checkbox" name="dinner" v-model="dinner">
                                            </td>
                                        </td>

                                        <td>
                                            <input style="width: 5rem;" type="text" name="body_weight" v-model="bodyWeight">     
                                        </td>
                                        
                                        <td>
                                            <input style="width: 5rem;" type="text" name="monitoring_pa" v-model="monitoringPa">
                                        </td>
                                        <td>
                                            <input style="width: 5rem;" type="text" name="monitoring_fc" v-model="monitoringFc">  
                                        </td>
                                        <td>
                                           {{operatorSignature}}
                                        </td>
                                    </tr> -->
                                </table>

                                
                                <div class="ln_solid mt-3"></div>
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
  padding: 2;
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


                showInput1:false,


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
            }
        },

        created: function () {
            this.getMonitoringClinicalParametersByUserIstanceId(1)
        },


        methods: {

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
                        alert(JSON.stringify(response));
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

                            
                            let _NursMcp=response.data.MonitoringClinicalParameter;

                            _wm.nursMcp.department = _NursMcp.department
                            _wm.nursMcp.dateStartRejection = _NursMcp.date_start_rejection
                            _wm.nursMcp.dateEndRejection = _NursMcp.date_end_rejection
                            _wm.nursMcp.mcpDate = _NursMcp.mcp_date
                            _wm.nursMcp.breakfast = _NursMcp.breakfast
                            _wm.nursMcp.lunch = _NursMcp.lunch
                            _wm.nursMcp.dinner = _NursMcp.dinner

                            _wm.nursMcp.bodyWeight = _NursMcp.body_weight
                            _wm.nursMcp.monitoringPa = _NursMcp.monitoring_pa
                            _wm.nursMcp.monitoringFc = _NursMcp.monitoring_fc
                            _wm.nursMcp.operatorSignature = _NursMcp.operator_signature

                            _wm.allMonitoringClinicalParameters=response.data.allMonitoringClinicalParameters;
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
