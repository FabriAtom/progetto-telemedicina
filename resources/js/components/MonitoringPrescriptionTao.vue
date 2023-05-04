<template>
    <div class="container">
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title" style="background:lightgrey;padding:7px; border-radius:3px; margin-top:100px;">
                            <h1>Modulo di monitoraggio della prescrizione e della somministrazione della terapia <strong>TAO</strong></h1>
                        </div>

                        <div class="x_content">

                        <!-- <div class="tab-content" id="myTabContent"> -->
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left align-items-center">

                                <div class="row mt-4">
                                    <span class="col-md-12 col-sm-12">
                                        <span class="item form-group">
                                            <label for="department_tao" class="col-form-label col-md-2 col-sm-2 label-align"><strong><h4>Reparto/Sezione</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input style="margin-right: 10.6rem;" type="text" name="department_tao" v-model="nursTao.departmentTao">
                                            </span>            
                                        </span>
                                        <span class="item form-group">
                                            <label for="drug_prescribed" class="col-form-label col-md-3 col-sm-2 label-align"><strong><h4>Farmaco Prescritto</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="text" name="drug_prescribed" v-model="nursTao.drugPrescribed">
                                            </span>               
                                        </span>
                                        
                                    </span>
                                </div>


                                <div class="row mt-3">
                                    <span class="col-md-12 col-sm-12">
                                        <span class="item form-group">
                                            <label for="diagnosis_tao" class="col-form-label col-md-2 col-sm-2 label-align"><strong><h4>Diagnosi</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="text" name="diagnosis_tao" v-model="nursTao.diagnosisTao">
                                            </span>               
                                        </span>
                                        <span class="item form-group">
                                            <label for="date_tao" style="margin-left: 10rem;" class="col-form-label col-md-1 col-sm-2 label-align"><strong><h4>Data</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="date" name="date_tao" v-model="nursTao.dateTao">
                                            </span>               
                                        </span>
                                    </span>
                                </div>

                                <div class="ln_solid mt-5"></div>
                                <div class="item form-group">
                                    <div class="pull-right">
                                        <span class="btn btn-success i2hBtn ml-3" @click="addMonitoringPrescriptionTao('tao')">{{btnTaoSend}}</span>
                                        <a  class="btn btn-success i2hBtnPrint"  @click=" printMonitoringPrescriptionTao('printPdf')"><i class="fa fa-print"></i>Stampa</a>
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
</style>


<script>

    import * as actions from "../config/ApiUrl";
    import axios from 'axios';
    import Swal from 'sweetalert2';

    export default {

        name: 'MonitoringPrescriptionTao',

        data() {
            return {
                userName: 'mario',
                userLastName:'rossi',
                userFullName:'',
                userInstanceId:36,
                userId:237,

                MonitoringPrescriptionTao:{},

                nursTao:{},


                accessData:[
                    id => 31,
                    name => 'mario',
                    lastname => 'rossi',  
                ],
                
                date:new Date(),


                mainTitle:"psy",
                firstSave:true,
                tAOSaved:false,

                
                btnTaoSend:"Salva",
                total:0,               
                allMonitoringPrescriptionTaos:null,
            }
        },

        created: function () {
            this.getMonitoringPrescriptionTaosByUserIstanceId(1)
        },

        methods: {
            printMonitoringPrescriptionTao(printPdf){
                let v_myWindow
                let url= 'printPdf/2';
                v_myWindow = window.open(url, 'v_myWindow', 'width=' + screen.width + ',height=' + screen.height + ', scrollbars=yes, titlebar=no, top=0, left=0');
                return false;
            },
                 
            
            addMonitoringPrescriptionTao(panel){
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

                if(_panel=='tao'){

                    if(!this.nTSaved){
                        form.append('action', 'store');
                    }else{
                        form.append('action', 'update');
                        if(this.userIstanceId){
                            form.append('userIstanceId',this.userIstanceId);
                        }else{
                            _errors++;
                            _errorTitle="Attenzione";
                            _errorDescription="Dati mancanti o incompleti contattare l\'amministratore di sistema"
                        }
                    }
                    form.append('section', 'tao');
                    if(!this.isObjEmpty(this.nursTao)){
                        let _nurs=JSON.stringify(this.nursTao);
                        form.append('MonitoringPrescriptionTao', _nurs);
                    }
                }
                
                if(_errors==0){
                    try {
                        axios.post(actions.ADD_PRESCRIPTION,form).then(response => {
                            let error=response.data.errorNumber;
                            let _attempts=response.data.attempts;
                            _wm.errNum=error;
                            if(error == 0){

                                Swal.fire(
                                    'Scheda',
                                    'Aggiornata correttamente',
                                    'success'
                                )
                                // this.getMonitoringPrescriptionTaosByUserIstanceId(this.userInstance);
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

            getMonitoringPrescriptionTaos(){
                let _wm = this;
                try {
                    axios.get(actions.GET_PRESCRIPTIONS).then(response => {
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
            getMonitoringPrescriptionTaoById(id){
                let _wm = this;
                try {
                    let url=actions.GET_PRESCRIPTION_BY_ID+'/'+id;
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

            getMonitoringPrescriptionTaosByUserIstanceId(id){
                let _wm = this;
                id=36;
                try {
                    let url=actions.GET_PRESCRIPTIONS_BY_USER_ISTANCE_ID+'/'+id;
                    axios.get(url).then(response => {
                        // alert(JSON.stringify(response));
                        let error=response.data.errorNumber;
                        // let _attempts=response.data.attempts;
                        _wm.errNum=error;

                        if(error == 0){
                        
                            _wm.mainTitle="Aggiornamento Cartella nurs";
                            if(response.data.MonitoringPrescriptionTao){
                            // _wm.hGTSaved=true;
                            // _wm.btnHgtSend="Aggiorna";

                            _wm.MonitoringPrescriptionTao=response.data.MonitoringPrescriptionTao;
                            // alert(JSON.stringify(_wm.MonitoringPrescriptionTao));

                            
                            // let _nursTao=response.data.MonitoringPrescriptionTao;
                            // _wm.departmentHgt = _nursTao.department_hgt
                            // _wm.dateStartCollectionHgt = _nursTao.date_start_collection_hgt
                            // _wm.dateEndCollectionHgt = _nursTao.date_end_collection_hgt
                            // _wm.doctorPrescriberHgt = _nursTao.doctor_prescriber_hgt
                            // _wm.hgtDate = _nursTao.hgt_date
                            // _wm.hours = _nursTao.hours
                            // _wm.hgt = _nursTao.hgt
                            // _wm.hgtOperatorSignature = _nursTao.hgt_operator_signature
                            // _wm.folderPageCollectionHgt = _nursTao.folder_page_collection_hgt

                
                            // _wm.allMonitoringPrescriptionTaos=response.data.allMonitoringPrescriptionTaos;
                            }else{
                                _wm.btnTaoSend="Salva";
                            }
                            
                            _wm.firstSave=false;
                        }else if(error == 7){
                            _wm.btnTaoSend="Salva";
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
