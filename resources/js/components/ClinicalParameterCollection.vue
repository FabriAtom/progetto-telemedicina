<template>
    <div class="container">
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title" style="background:lightgrey;padding:7px; border-radius:3px; margin-top:100px;">
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
                                                <input type="text" name="department_cpc" v-model="departmentCpc">
                                            </span>
                                        </span>
                                    </span>
                                </div>

                                <!-- <div class="row" style="margin-top:20px;"> -->
                                <!-- </div> -->
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <span class="item form-group">
                                            <label for="date_start_collection" class="col-form-label col-md-4 col-sm-2 label-align"><strong><h4>data inizio raccolta dati </h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="date" name="date_start_collection" v-model="dateStartCollection">
                                            </span>
                                            <label for="date_end_collection" class="col-form-label col-md-2 col-sm-2 label-align"><strong><h4>data fine raccolta dati</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="date" name="date_end_collection" v-model="dateEndCollection">
                                            </span>
                                        </span>
                                    </div>
                                </div>


                                <div class="row" style="margin-top:20px;">
                                    <span class="col-md-12 col-sm-12">
                                        <span class="item form-group">
                                            <label for="doctor_prescriber" class="col-form-label col-md-2 col-sm-2 label-align"><strong><h4>Medico Prescrittore</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="text" name="doctor_prescriber" v-model="doctorPrescriber">
                                            </span>
                                        </span>
                                    </span>
                                </div>
                               
                                <table>
                                    <tr>
                                        <td>DATA</td>
                                        <td>P.A.</td>
                                        <td>F.C.</td>
                                        <td>SPO2</td>
                                        <td>T.C.</td>
                                        <td>FIRMA</td>
                                    </tr>
                                    <!-- cpc_date
                                    collection_pa
                                    collection_fc
                                    collection_spo2
                                    collection_tc
                                    collection_operator_signature -->

                                    
                                </table>

                                <div class="row" style="margin-top:320px; ">
                                    <span class="col-md-12 col-sm-12">
                                        <span class="item form-group">
                                            <label for="folder_page_collection" class="col-form-label col-md-4 col-sm-2 label-align"><strong><h4>Pagina della cartella n</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="text" name="folder_page_collection" v-model="folderPageCollection">
                                            </span>
                                        </span>
                                    </span>
                                </div>

                                
                                <div class="ln_solid mt-5"></div>
                                <div class="item form-group">
                                    <div class="pull-right">
                                        <span class="btn btn-success i2hBtn ml-3" @click="addClinicalParameterCollection('mcp')">{{btnCpcSend}}</span>
                                    </div>
                                </div>
                                <a  class="btn btn-success i2hBtnPrint"  @click=" printClinicalParameterCollection('printPdf')"><i class="fa fa-print"></i>Stampa</a>
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
        name: 'ClinicalParameterCollection',


        data() {
            return {
                userName: 'mario',
                userLastName:'rossi',
                userFullName:'',
                userInstanceId:36,
                userId:237,


               
                doctorName:null,
                department:null,
                departmentCpc:null,
                dateStartCollection:null,
                dateEndCollection:null,
                doctorPrescriber:null,
                cpcDate:null,  
                collectionPa:null,
                collectionFc:null,
                collectionSpo2:null, 
                collectionTc:null,
                collectionOperatorSignature:null,
                folderPageCollection:null,

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
                cPCSaved:false,

                
                btnCpcSend:"Salva",
                total:0,               
                allClinicalParameterCollections:null,
            }
        },

        created: function () {
            this.getClinicalParameterCollectionsByUserIstanceId(1)
        },


        methods: {

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
                                this.getClinicalParameterCollectionsByUserIstanceId(this.userInstance);
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
                            alert(JSON.stringify(response))
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
                            alert(JSON.stringify(response))
                        }else{
                            // eventBus.$emit('errorEvent', error, _attempts);
                        }
                    });
                } catch (error) {
                    throw error
                }
            },

            getClinicalParameterCollectionsByUserIstanceId(id){
                let _wm = this;
                id=36;
                try {
                    let url=actions.GET_COLLECTIONS_BY_USER_ISTANCE_ID+'/'+id;
                    axios.get(url).then(response => {
                        // alert(JSON.stringify(response));
                        let error=response.data.errorNumber;
                        // let _attempts=response.data.attempts;
                        _wm.errNum=error;

                        if(error == 0){
                        
                            _wm.mainTitle="Aggiornamento Cartella nurs";
                            if(response.data.ClinicalParameterCollection){
                            _wm.mCPSaved=true;
                            _wm.btnMcpSend="Aggiorna";
                            
                            let _NursTerapy=response.data.ClinicalParameterCollection;
                                

                            _wm.allClinicalParameterCollections=response.data.allClinicalParameterCollections;
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
