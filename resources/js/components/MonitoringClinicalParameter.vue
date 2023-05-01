<template>
    <div class="container">
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title" style="background:lightgrey;padding:7px; border-radius:3px; margin-top:100px;">
                            <h1>Modulo di monitoraggio parametri clinici</h1>
                        </div>

                        <div class="x_content">

                        <!-- <div class="tab-content" id="myTabContent"> -->
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left align-items-center">

                                <div class="row" style="margin-top:20px;">
                                    <span class="col-md-12 col-sm-12">
                                        <span class="item form-group">
                                            <label for="department" class="col-form-label col-md-2 col-sm-2 label-align"><strong><h4>Reparto/Sezione</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="text" name="department" v-model="department">
                                            </span>
                                        </span>
                                    </span>
                                </div>

                                <!-- <div class="row" style="margin-top:20px;"> -->
                                <!-- </div> -->
                                <div class="row mb-3" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <span class="item form-group">
                                            <label for="date_start_rejection" class="col-form-label col-md-4 col-sm-2 label-align"><strong><h4>data inizio rifiuto alimentazione</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input style="margin-right: 8rem;" type="date" name="date_start_rejection" v-model="dateStartRejection">
                                            </span>
                                            <label for="date_end_rejection" class="col-form-label col-md-2 col-sm-2 label-align"><strong><h4>data fine</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="date" name="date_end_rejection" v-model="dateEndRejection">
                                            </span>
                                        </span>
                                    </div>
                                </div>
                               
                                <table>
                                    <tr>
                                        <td>DATA</td>
                                        <td>ALIMENTAZIONE</td>
                                        <td>PESO <br> CORPOREO</td>
                                        <td>P.A.</td>
                                        <td>F.C.</td>
                                        <td>FIRMA <br> OPERATORE</td>
                                    </tr>

                                     <!-- mcp_date -->
                                    <!-- inmate_feed -->
                                    <!-- body_weight
                                    monitoring_pa
                                    monitoring_fc
                                    operator_signature -->
                                </table>

                                <div class="row" style="margin-top:320px; ">
                                    <span class="col-md-12 col-sm-12">
                                        <span class="item form-group">
                                            <label for="folder_page" class="col-form-label col-md-3 col-sm-2 label-align"><strong><h4>Pagina della cartella n</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="text" name="folder_page" v-model="folderPage">
                                            </span>
                                        </span>
                                    </span>
                                </div>

                                
                                <div class="ln_solid mt-5"></div>
                                <div class="item form-group">
                                    <div class="pull-right">
                                        <span class="btn btn-success i2hBtn ml-3" @click="addMonitoringClinicalParameter('mcp')">{{btnMcpSend}}</span>
                                    </div>
                                </div>
                                <a  class="btn btn-success i2hBtnPrint"  @click=" printMonitoringClinicalParameter('printPdf')"><i class="fa fa-print"></i>Stampa</a>
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


                showInput:null,
                showInput1:null,
                doctorName:null,
                department:null,
                dateStartRejection:null,
                dateEndRejection:null,
                mcpDate:null,
                inmateFeed:null,
                bodyWeight:null,  
                monitoringPa:null,
                monitoringFc:null,
                operatorSignature:null, 
                folderPage:null,




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


                // nursCardTh:{},
                // psyCardSa:{},
                // psyCardTsc

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
                form.append('userFullName', this.userFullName);
                form.append('userInstance', this.userInstance);
                form.append('userId', this.userId);
                // form.append('doctorId', this.accessData.id);
                // form.append('doctorName', this.accessData.name);
                // form.append('doctorUserName', this.accessData.lastname);
                form.append('doctorId', 36);
                form.append('doctorName', 'mario');
                form.append('doctorUserName', 'rossi');

                if(_panel=='mcp'){

                    if(!this.nTSaved){
                        form.append('action', 'store');
                    }else{
                        form.append('action', 'update');
                        if(this.userIstanceId){
                            form.append('nursId',this.userIstanceId);
                        }else{
                            _errors++;
                            _errorTitle="Attenzione";
                            _errorDescription="Dati mancanti o incompleti contattare l\'amministratore di sistema"
                        }
                    }
                    form.append('section', 'mcp');
                    if(!this.isObjEmpty(this.nursCardTh)){
                        let _nurs=JSON.stringify(this.nursCardTh);
                        form.append('NursingTherapies', _nurs);
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
                                this.getMonitoringClinicalParametersByUserIstanceId(this.userInstance);
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
                            alert(JSON.stringify(response))
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
                            alert(JSON.stringify(response))
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
                            _wm.mCPSaved=true;
                            _wm.btnMcpSend="Aggiorna";
                            
                            let _NursTerapy=response.data.MonitoringClinicalParameter;
                                

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
