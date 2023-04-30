<template>
    <div class="container">
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title" style="background:lightgrey;padding:7px; border-radius:3px; margin-top:5px;">
                            <h1>Scheda terapie <strong>non</strong> somministrate del paziente</h1>
                        </div>

                        <div class="x_content">

                        <!-- <div class="tab-content" id="myTabContent"> -->
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left align-items-center">

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <span class="item form-group">
                                            <label for="doctor_name" class="col-form-label col-md-4 col-sm-2 label-align"><strong><h4>Personale addetto alla terapia</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input style="margin-right: 8rem;" type="text" name="doctor_name" v-model="doctorName">
                                            </span>
                                        </span>
                                        <span class="item form-group ml-5">
                                            <label for="doctor_name" class="col-form-label col-md-1 col-sm-2 label-align"><strong><h4>Turno</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="text" name="doctor_name" v-model="doctorName">
                                            </span>
                                        </span>
                                    </div>
                                </div>

                                <div class="ml-3 mt-4">
                                    <h5>Visto il mattinale, verificati i presenti segnalati e le relative terapie prescritte dai medici per ogni detenuto, <br> si attesta quanto segue:</h5>
                                    
                                    <h2>Terapia <strong>non somministata </strong>al paziente:</h2>
                                </div>

                                <!-- <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="drugs_not_administered" class="col-form-label col-md-6 col-sm-2 label-align"><strong><h2>Farmaci non somministati</h2></strong></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input type="checkbox" name="drugs_not_administered" value="1" v-model="showInput">
                                                <input name="drug" v-model="drug">

                                                <textarea name="motivation_not_take_medicine" v-if="showInput" cols="60" rows="3" placeholder="Motivazione" v-model="motivationNotTakeMedicine"></textarea>
                                            </div> 
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="drugs_not_administered" class="col-form-label col-md-6 col-sm-2 label-align"></label>
                                            <div class="col-md-12 col-sm-12">
                                                <input type="checkbox" name="drugs_not_administered" value="1" v-model="showInput1">
                                                <textarea name="motivation_not_take_medicine" v-if="showInput1" cols="60" rows="3" placeholder="Motivazione" v-model="motivationNotTakeMedicine"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                            
                                <table>
                                        <tr>
                                            
                                        </tr>
                                        <tr>
                                            <td>Farmaco</td>
                                            <td>Dal</td>
                                            <td>Al</td>
                                            <td>Ora</td>
                                            <td>Frequenza</td>
                                        </tr>
                                        <tr>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>

                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>

                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>

                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                    </table>


                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="medical_alert" class="col-form-label col-md-2 col-sm-2 label-align"><h4><strong>Avvisato medico</strong></h4></label>
                                            <span class="col-md-12 col-sm-12">
                                                <span>SI</span>
                                                <input type="radio" name="medical_alert" value="1" v-model="medicalAlert"/>
                                                <span>NO</span>
                                                <input type="radio" name="medical_alert" value="0" v-model="medicalAlert"/>
                                                <input type="text" name="medical_alert_note" placeholder="Note" v-model="medicalAlertNote"/>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="doctors_prescriptions" class="col-form-label col-md-5 col-sm-2 label-align"><h4><strong>Annotazione o prescrizione del medico</strong></h4></label>
                                            <span class="col-md-12 col-sm-12">
                                                <span>SI</span>
                                                <input type="radio" name="doctors_prescriptions" value="1" v-model="doctorsPrescriptions"/>
                                                <span>NO</span>
                                                <input type="radio" name="doctors_prescriptions" value="0" v-model="doctorsPrescriptions"/>
                                                <input type="text" name="doctors_prescriptions_note" placeholder="Note" v-model="doctorsPrescriptionsNote"/>
                                            </span>
                                        </div>
                                    </div>
                                </div>







                                
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="pull-right">
                                        <span class="btn btn-success i2hBtn ml-3" @click="addNursingTherapy('nh')">{{btnNhSend}}</span>
                                    </div>
                                </div>
                                <a  class="btn btn-success i2hBtnPrint"  @click=" printNursingTherapy('printPdf')"><i class="fa fa-print"></i>Stampa</a>
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
  text-align: left;
  padding: 8px;
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
        name: 'NursingTherapy',


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
                motivationNotTakeMedicine:null,
                motivationNotTakeMedicine:null,
                medicalAlertNote:null,
                doctorsPrescriptions:null,
                doctorsPrescriptionsNote:null,
                thDate:null,  
                medicalAlert:null,
                drug:null,


                startTherapy:null, 
                endTherapy:null,




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
                nHSaved:false,

                
                btnNhSend:"Salva",
                total:0,               
                allNursingTherapys:null,
            }
        },

        created: function () {
            this.getNursingTherapysByUserIstanceId(1)
        },


        methods: {

            printNursingTherapy(printPdf){

                let v_myWindow

                let url= 'printPdf/2';

                v_myWindow = window.open(url, 'v_myWindow', 'width=' + screen.width + ',height=' + screen.height + ', scrollbars=yes, titlebar=no, top=0, left=0');

                return false;
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
                    form.append('section', 'nt');
                    if(!this.isObjEmpty(this.nursCardTh)){
                        let _nurs=JSON.stringify(this.nursCardTh);
                        form.append('NursingTherapies', _nurs);
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
                                this.getNursingTherapysByUserIstanceId(this.userInstance);
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
            getNursingTherapyById(id){
                let _wm = this;
                try {
                    let url=actions.GET_NURSING_BY_ID+'/'+id;
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

            getNursingTherapysByUserIstanceId(id){
                let _wm = this;
                alert('xx');
                id=36;
                try {
                    let url=actions.GET_NURSINGS_BY_USER_ISTANCE_ID+'/'+id;
                    axios.get(url).then(response => {
                        alert(JSON.stringify(response));
                        let error=response.data.errorNumber;
                        // let _attempts=response.data.attempts;
                        _wm.errNum=error;

                        if(error == 0){
                        
                            _wm.mainTitle="Aggiornamento Cartella nurs";
                            if(response.data.NursingTherapies){
                            _wm.nHSaved=true;
                            _wm.btnNhSend="Aggiorna";
                            
                            let _NursTerapy=response.data.NursingTherapies;
                                

                            _wm.allNursingTherapies=response.data.allNursingTherapies;
                            }else{
                                _wm.btnNhSend="Salva";
                            }
                            
                            _wm.firstSave=false;
                        }else if(error == 7){
                            _wm.btnNhSend="Salva";
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
