<template>
    <div class="container">
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title" style="background:lightgrey;padding:7px; border-radius:3px; margin-top:100px;">
                            <h1>Modulo di raccolta <strong>HGT</strong></h1>
                        </div>

                        <div class="x_content">

                        <!-- <div class="tab-content" id="myTabContent"> -->
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left align-items-center">

                                <div class="row mt-4">
                                    <span class="col-md-12 col-sm-12">
                                        <span class="item form-group">
                                            <label for="department_hgt" class="col-form-label col-md-2 col-sm-2 label-align"><strong><h4>Reparto/Sezione</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input style="margin-right: 10.6rem;" type="text" name="department_hgt" v-model="nursHgt.departmentHgt">
                                            </span>
                                            <span class="item form-group">
                                            <label for="doctor_prescriber_hgt" class="col-form-label col-md-3 col-sm-2 label-align"><strong><h4>Medico Prescrittore</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="text" name="doctor_prescriber_hgt" v-model="nursHgt.doctorPrescriberHgt">
                                            </span>
                                        </span>
                                        </span>
                                    </span>
                                </div>
                                

                                <!-- <div class="row" style="margin-top:20px;"> -->
                                <!-- </div> -->
                                <div class="row mb-2 mt-2">
                                    <div class="col-md-12 col-sm-12">
                                        <span class="item form-group">
                                            <label for="date_start_collection_hgt" class="col-form-label col-md-3 col-sm-2 label-align"><strong><h4>Data inizio raccolta dati </h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input style="margin-right: 8rem;" type="date" name="date_start_collection_hgt" v-model="nursHgt.dateStartCollectionHgt">
                                            </span>
                                            <label for="date_end_collection_hgt" class="col-form-label col-md-3 col-sm-2 label-align"><strong><h4>Data fine raccolta dati</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="date" name="date_end_collection_hgt" v-model="nursHgt.dateEndCollectionHgt">
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div>
                                    <a style="margin-left: 949px; margin-top: 20px; margin-bottom: 10px;" class="btn btn-info i2hBtnPrint"><i class="fa fa-print"><input type="radio" v-model="showInput1" value="true"></i>Aggiungi Modulo</a>
                                </div>

                              
                                <table>
                                    <tr>
                                        <td>DATA</td>
                                        <td>ORA</td>
                                        <td>HGT</td>
                                        <td>FIRMA</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="date" name="hgt_date" v-model="nursHgt.hgtDate">
                                        </td>
                                        <td>
                                            <input type="text" name="hours" v-model="nursHgt.hours">
                                        </td>
                                        <td>
                                            <input type="text" name="hgt" v-model="nursHgt.hgt">
                                        </td>
                                        <td>
                                            <input type="text" name="hgt" v-model="nursHgt.hgtOperatorSignature">{{ nursHgt.hgtOperatorSignature }}
                                        </td>
                                    </tr>
                                </table>
                                            
                                <div class="ln_solid mt-5"></div>
                                <div class="item form-group">
                                    <div class="pull-right">
                                        <span class="btn btn-success i2hBtn ml-3" @click="addCollectionFormHgt('hgt')">{{btnHgtSend}}</span>
                                        <a  class="btn btn-success i2hBtnPrint"  @click=" printCollectionFormHgt('printPdf')"><i class="fa fa-print"></i>Stampa</a>
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

        name: 'CollectionFormHgt',


        data() {
            return {
                userName: 'mario',
                userLastName:'rossi',
                userFullName:'',
                userInstanceId:36,
                userId:237,


                showInput1:false,


                // departmentHgt:null,
                // dateStartCollectionHgt:null,
                // dateEndCollectionHgt:null,
                // doctorPrescriberHgt:null,
                // hgtDate:null,  
                // hours:null,
                // hgt:null,
                // hgtOperatorSignature:null, 
                // folderPageCollectionHgt:null,
                



                CollectionFormHgt:{},

                nursHgt:{},


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
                hGTSaved:false,

                
                btnHgtSend:"Salva",
                total:0,               
                allCollectionFormHgts:null,
            }
        },

        created: function () {
            this.getCollectionFormHgtsByUserIstanceId(1)
        },


        methods: {

            printCollectionFormHgt(printPdf){

                let v_myWindow

                let url= 'printPdf/2';

                v_myWindow = window.open(url, 'v_myWindow', 'width=' + screen.width + ',height=' + screen.height + ', scrollbars=yes, titlebar=no, top=0, left=0');

                return false;
            },
                 
            


            addCollectionFormHgt(panel){
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

                if(_panel=='hgt'){

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
                    form.append('section', 'hgt');
                    if(!this.isObjEmpty(this.nursHgt)){
                        let _nurs=JSON.stringify(this.nursHgt);
                        form.append('CollectionFormHgt', _nurs);
                    }
                }
                
                if(_errors==0){
                    try {
                        axios.post(actions.ADD_HGT,form).then(response => {
                            let error=response.data.errorNumber;
                            let _attempts=response.data.attempts;
                            _wm.errNum=error;
                            if(error == 0){

                                Swal.fire(
                                    'Scheda',
                                    'Aggiornata correttamente',
                                    'success'
                                )
                                // this.getCollectionFormHgtsByUserIstanceId(this.userInstance);
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

            getCollectionFormHgts(){
                let _wm = this;
                try {
                    axios.get(actions.GET_HGTS).then(response => {
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
            getCollectionFormHgtById(id){
                let _wm = this;
                try {
                    let url=actions.GET_HGT_BY_ID+'/'+id;
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

            getCollectionFormHgtsByUserIstanceId(id){
                let _wm = this;
                id=36;
                try {
                    let url=actions.GET_HGTS_BY_USER_ISTANCE_ID+'/'+id;
                    axios.get(url).then(response => {
                        alert(JSON.stringify(response));
                        let error=response.data.errorNumber;
                        // let _attempts=response.data.attempts;
                        _wm.errNum=error;

                        if(error == 0){
                        
                            _wm.mainTitle="Aggiornamento Cartella nurs";
                            if(response.data.CollectionFormHgt){
                            // _wm.hGTSaved=true;
                            // _wm.btnHgtSend="Aggiorna";

                            _wm.CollectionFormHgt=response.data.CollectionFormHgt;
                            alert(JSON.stringify(_wm.CollectionFormHgt));

                            
                            // let _NursHgt=response.data.CollectionFormHgt;
                            // _wm.departmentHgt = _NursHgt.department_hgt
                            // _wm.dateStartCollectionHgt = _NursHgt.date_start_collection_hgt
                            // _wm.dateEndCollectionHgt = _NursHgt.date_end_collection_hgt
                            // _wm.doctorPrescriberHgt = _NursHgt.doctor_prescriber_hgt
                            // _wm.hgtDate = _NursHgt.hgt_date
                            // _wm.hours = _NursHgt.hours
                            // _wm.hgt = _NursHgt.hgt
                            // _wm.hgtOperatorSignature = _NursHgt.hgt_operator_signature
                            // _wm.folderPageCollectionHgt = _NursHgt.folder_page_collection_hgt

                
                            // _wm.allCollectionFormHgts=response.data.allCollectionFormHgts;
                            }else{
                                _wm.btnHgtSend="Salva";
                            }
                            
                            _wm.firstSave=false;
                        }else if(error == 7){
                            _wm.btnHgtSend="Salva";
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
