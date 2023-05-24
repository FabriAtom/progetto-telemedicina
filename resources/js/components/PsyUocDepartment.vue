<!-- DIPARTIMENTO SALUTE MENTALE, 
3° FOGLIO DELLA SCHEDA PSICHIATRICA -->
<template>
   <div class="container">
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel ml-2">
                        <div class="x_title" style="background:lightgrey;padding:7px; border-radius:3px; margin-top:5px;">
                            <h1>Dipartimento Salute Mentale<strong> UOC</strong></h1>
                        </div>
                        <div class="x_content">

                            <!-- <div class="tab-content" id="myTabContent"> -->
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left align-items-center">

                                <h3 class="pt-3 pl-3">ELEMENTI ANAMNESTICI RILEVANTI</h3>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="psychiatric_treatment" class="col-form-label col-md-3 col-sm-2 label-align">Trattamenti psichiatrici precedenti</label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="checkbox" name="psychiatric_treatment" v-model="showInput"/> 
                                                <input type="text" name="psychiatric_treatment" v-if="showInput" placeholder="Diagnosi riferita" v-model="psyCardUd.psychiatricTreatment"/>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="csm" class="col-form-label col-md-2 col-sm-2 label-align">- CSM</label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="checkbox" name="csm" v-model="showInput1"/> 
                                                <input type="text" name="csm" v-if="showInput1" v-model="psyCardUd.csm"/>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="spdc" class="col-form-label col-md-2 col-sm-2 label-align">- SPCD</label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="checkbox" name="spdc" v-model="showInput2"/> 
                                                <input type="text" name="spdc" v-if="showInput2" v-model="psyCardUd.spdc"/>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="rems" class="col-form-label col-md-2 col-sm-2 label-align">- REMS</label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="checkbox" name="rems" v-model="showInput3"/> 
                                                <input type="text" name="rems" v-if="showInput3" v-model="psyCardUd.rems"/>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="prison" class="col-form-label col-md-2 col-sm-2 label-align">- CARCERE</label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="checkbox" name="prison" v-model="showInput4"/> 
                                                <input type="text" name="prison" v-if="showInput4" v-model="psyCardUd.prison"/>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="psychiatric_familiarity" class="col-form-label col-md-2 col-sm-2 label-align">Familiarità psichiatrica</label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="checkbox" name="psychiatric_familiarity" v-model="showInput5"/> 
                                                <input type="text" name="psychiatric_familiarity" v-if="showInput5" v-model="psyCardUd.psychiatricFamiliarity"/>
                                                <span>
                                                    <span v-if="showInput5">Se si, Chi?</span>
                                                <input type="text" name="if_familiarity" v-if="showInput5" v-model="psyCardUd.ifFamiliarity"/>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="on_set_of_psychiatric_symptom" class="col-form-label col-md-3 col-sm-2 label-align">Esordio sintomatologia psichiatrica</label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="text" name="on_set_of_psychiatric_symptom" v-model="psyCardUd.onSetOfPsychiatricSymptom"/>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="substance_use" class="col-form-label col-md-3 col-sm-2 label-align">Uso di sostanze</label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="checkbox" name="substance_use" value="1" v-model="psyCardUd.substanceUse"/>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="in_charge_at_serd_territorial" class="col-form-label col-md-3 col-sm-2 label-align">in carico presso Ser.D. territoriali</label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="checkbox" name="in_charge_at_serd_territorial" v-model="showInput6"/> 
                                                <input type="text" name="in_charge_at_serd_territorial" v-if="showInput6" v-model="psyCardUd.inChargeAtSerdTerritorial"/>
                                                <span>
                                                    <span v-if="showInput6">quale?</span>
                                                <input type="text" name="in_charge_at_serd_territorial_which" v-if="showInput6" v-model="psyCardUd.inChargeAtSerdTerritorialWhich"/>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="pb-2">STATUS ALL'INGRESSO</h3>
                                <h3>SINTOMATOLOGIA:</h3>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="psychotic_symptom" class="col-form-label col-md-3 col-sm-2 label-align">Psicotico</label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="checkbox" name="psychotic_symptom" value="1" v-model="psyCardUd.psychoticSymptom"/> 
                                            </span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="anxious_affective_symptom" class="col-form-label col-md-3 col-sm-2 label-align">Affettivo-Ansioso</label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="checkbox" name="anxious_affective_symptom" value="1" v-model="psyCardUd.anxiousAffectiveSymptom"/> 
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="impulsive_symptom" class="col-form-label col-md-3 col-sm-2 label-align">Impulsivo</label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="checkbox" name="impulsive_symptom" value="1" v-model="psyCardUd.impulsiveSymptom"/> 
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <h3>ORIENTAMENTO DIAGNOSTICO:</h3>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="psychotic_diagnostic_orientation" class="col-form-label col-md-3 col-sm-2 label-align">D. Psicotico</label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="checkbox" name="psychotic_diagnostic_orientation" value="1" v-model="psyCardUd.psychoticDiagnosticOrientation"/> 
                                            </span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="anxious_affective_orientation" class="col-form-label col-md-3 col-sm-2 label-align">D. Affettivo-Ansioso</label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="checkbox" name="anxious_affective_orientation" value="1" v-model="psyCardUd.anxiousAffectiveOrientation"/> 
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="personality_orientation" class="col-form-label col-md-3 col-sm-2 label-align">D. Personalità</label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="checkbox" name="personality_orientation" value="1" v-model="psyCardUd.personalityOrientation"/> 
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <h3 style="text-decoration:underline;"><strong>PROFILO DI TRATTAMENTO /PDTA proposto dopo valutazione:</strong></h3>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="taking_charge_pdta" class="col-form-label col-md-3 col-sm-2 label-align">Presa in carico</label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="checkbox" name="taking_charge_pdta" value="1" v-model="psyCardUd.takingChargePdta"/> 
                                            </span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="care_intake_pdta" class="col-form-label col-md-3 col-sm-2 label-align">Assunzione in cura</label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="checkbox" name="care_intake_pdta" value="1" v-model="psyCardUd.careIntakePdta"/> 
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="item form-group">
                                            <label for="consultancy_pdta" class="col-form-label col-md-3 col-sm-2 label-align">Consulenza</label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="checkbox" name="consultancy_pdta" value="1" v-model="psyCardUd.consultancyPdta"/> 
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                {{ psyCardUd }}



                                <div>
                                    <h2 class="ml-4 mb-4 mt-4"><strong>Archivio</strong></h2>
                                    <ul style="display:flex; flex-wrap: wrap;">
                                        <span v-for="(item, key, index) in PsyUocDepartment" :key="index" class="mr-5">

                                            <div  @click="printArchivesCardPsyUocDepartment(item['id'])" class="card text-white bg-secondary mb-2" style="max-width: 19rem;  border-radius: 20px;">
                                                <div class="card-header">
                                                    <span style="min-width: 100px;"> 
                                                        <div style="min-width: 100px;"><strong>Nome Medico: </strong><h5 style="display: inline-block;">{{ item['doctor_name'] }} {{ item['doctor_lastname'] }}</h5></div>
                                                        <div><strong>Data: </strong> {{ i2hDateFormat(item['ud_date']) }}</div>
                                                    </span> 
                                            </div>
                                                <!-- <div class="card-body">
                                                    <h5 class="card-title">
                                                        <div><strong>Data inizio:</strong> {{ i2hDateFormat(item['ud_date']) }}</div>
                                                    </h5>
                                                    <p class="card-text">
                                                        <div style="min-width: 100px;"><strong>Trattamenti psichiatrici precedenti: </strong> <br>{{ (item['psychiatric_treatment']) }}</div>
                                                        <div style="min-width: 100px;"><strong>Csm: </strong> <br> {{ (item['csm']) }}</div>
                                                        <div style="min-width: 100px;"><strong>Spdc: </strong> <br>{{ ((item['spdc'])) }} </div>
                                                        <div style="min-width: 100px;"><strong>Rems: </strong> <br>{{ (item['rems']) }} </div> 

                                                        <div style="min-width: 100px;"><strong>Carcere: </strong> <br>{{ (item['prison']) }}</div>
                                                        <div style="min-width: 100px;"><strong>Familiarità psichiatrica: </strong> {{ (item['psychiatric_familiarity']) }}</div>
                                                        <div style="min-width: 100px;"><strong>Se si, Chi: </strong> {{ ((item['if_familiarity'])) }} </div>
                                                        <div style="min-width: 100px;"><strong>Esordio sintomatologia psichiatrica: </strong> <br>{{ (item['on_set_of_psychiatric_symptom']) }} </div> 

                                                        <div style="min-width: 100px;"><strong>Uso di sostanze: </strong> {{ (item['substance_use']) }}</div>
                                                        <div style="min-width: 100px;"><strong>Presso Serd. : </strong> {{ (item['in_charge_at_serd_territorial']) }}</div>
                                                        <div style="min-width: 100px;"><strong> Quale: </strong> {{ ((item['in_charge_at_serd_territorial_which'])) }} </div>
                                                        <div style="min-width: 100px;"><strong>Psicotico: </strong> {{ (item['psychotic_symptom']) }} </div> 
                                                        
                                                        <div style="min-width: 100px;"><strong>Affettivo-Ansioso: </strong> {{ (item['anxious_affective_symptom']) }}</div>
                                                        <div style="min-width: 100px;"><strong>Impulsivo: </strong> {{ (item['impulsive_symptom']) }}</div>
                                                        <div style="min-width: 100px;"><strong> D. Psicotico: </strong> {{ ((item['psychotic_diagnostic_orientation'])) }} </div>
                                                        <div style="min-width: 100px;"><strong>D. Affettivo-Ansioso: </strong> {{ (item['anxious_affective_orientation']) }} </div> 
                                                        
                                                        <div style="min-width: 100px;"><strong>D. Personalità: </strong> {{ (item['personality_orientation']) }}</div>
                                                        <div style="min-width: 100px;"><strong>Presa in carico: </strong> {{ (item['taking_charge_pdta']) }}</div>
                                                        <div style="min-width: 100px;"><strong>Assunzione in cura: </strong> {{ ((item['care_intake_pdta'])) }} </div>
                                                        <div style="min-width: 100px;"><strong>Consulenza: </strong> {{ (item['consultancy_pdta']) }} </div> 
                                                    </p>
                                                </div> -->
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
                                                <input type="date" name="start_date" v-model="psyCardUd.startDate">
                                            </span>
                                            <label for="end_date" class="col-form-label col-md-1 col-sm-2 label-align"><strong><h4>AL</h4></strong></label>
                                            <span class="col-md-12 col-sm-12">
                                                <input type="date" name="end_date" v-model="psyCardUd.endDate">
                                            </span>
                                            <span class="search-bar">
                                                <a class="search-button btn btn-success"  @click="getPsyUocDepartmentsByUserIstanceId(36,true)">Cerca</a>
                                            </span>
                                        </span>
                                    </div>
                                </div>

    

                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="pull-right">
                                        <a class="btn bg-primary text-white i2hBtnPrint ml-4" @click=" printArchivePsyUocDepartment('printPdf')"><i class="fa fa-print"></i>Stampa Archivio</a>
                                    </div>
                                </div>
























                                <div class="ln_solid"></div>
                                <div class="item form-group" >
                                    <div class="pull-right">
                                        <span  class="btn btn-success i2hBtn ml-3" @click="addPsyUocDepartment('ud')">{{btnUdSend}}</span>
                                    </div>
                                </div>
                                <a  class="btn btn-success i2hBtnPrint"  @click=" printPsyUocDepartment('printPdf')"><i class="fa fa-print"></i>Stampa</a>
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

*p{
    margin-left: 15px;
}

</style>



<script>

import * as actions from "../config/ApiUrl";
import axios from 'axios';
import Swal from 'sweetalert2';

export default {

    name: 'PsyUocDepartment',

    data() {
        return {
            userName: 'Andrea',
            userLastName:'Giovanni',
            userFullName:'',
            userInstance:1,
            userId:0,
            
            showInput: false,
            showInput1: false,
            showInput2: false,
            showInput3: false,
            showInput4: false,
            showInput5: false,
            showInput6: false,
    

            accessData:[
               
                id => 14,
                name => 'Alessio',
                lastname => 'Ortu',
                
            ],
            psyUdDoctorId:0,
            psyUdDoctorName:'',
            psyUdDoctorLastname:'',
            psyUdDate:null,
            psyCardId:null,
            date:new Date(),

            psyCardUd:{},
            // psyCardMh:{},

            // panel:'ud',

            PsyUocDepartment:{},

            mainTitle:"psy",
            firstSave:true,
            uDSaved:false,

            
            btnUdSend:"Salva",
            total:0,               
            allPsyUocDepartments:null,
        }
    },

    created: function () {
        // this.getPermissions();
        this.getPsyUocDepartmentsByUserIstanceId(1);
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



        printPsyUocDepartment(printPdf){

            let v_myWindow
            let url= 'printPdf/2';
            v_myWindow = window.open(url, 'v_myWindow', 'width=' + screen.width + ',height=' + screen.height + ', scrollbars=yes, titlebar=no, top=0, left=0');
            return false;
        },
        
        

        printArchivePsyUocDepartment(printPdf){

            let v_myWindow
            let url= 'printPdf/2';
            v_myWindow = window.open(url, 'v_myWindow', 'width=' + screen.width + ',height=' + screen.height + ', scrollbars=yes, titlebar=no, top=0, left=0');
            return false;
        },

        

        printArchivesCardPsyUocDepartment(id){

            let v_myWindow
            let url= 'printPdf/'+id;
            v_myWindow = window.open(url, 'v_myWindow', 'width=' + screen.width + ',height=' + screen.height + ', scrollbars=yes, titlebar=no, top=0, left=0');
            return false;
        },



        
        addPsyUocDepartment(panel){
            let _wm = this;
            let _panel=panel;
            let _errors=0;
            let _errorTitle="Scheda"
            let _errorDescription="Non aggiornata";
            let form = new FormData();
            form.append('userName', this.userName);
            form.append('userLastName', this.userLastName);
            form.append('userFullName', this.userFullName);
            form.append('userInstanceId', this.userInstanceId);
            form.append('userId', this.userId);
            // form.append('doctorId', this.accessData.id);
            // form.append('doctorName', this.accessData.name);
            // form.append('doctorUserName', this.accessData.lastname);
            form.append('doctorId', 14);
            form.append('doctorName', 'mario');
            form.append('doctorUserName', 'bross');
            
            if(_panel=='ud'){

                if(!this.uDSaved){
                    form.append('action', 'store');
                }else{
                    form.append('action', 'update');
                    if(this.psyCardId){
                        form.append('psyId',this.psyCardId);
                    }else{
                        _errors++;
                        _errorTitle="Attenzione";
                        _errorDescription="Dati mancanti o incompleti contattare l\'amministratore di sistema"
                    }
                }
                form.append('section', 'ud');
                if(!this.isObjEmpty(this.psyCardUd)){
                    let _psyCardUd=JSON.stringify(this.psyCardUd);
                    // alert(JSON.stringify(this.psyCardUd))
                    form.append('PsyUocDepartment', _psyCardUd);
                    
                    form.append('psychiatricTreatment', this.psyCardUd.psychiatricTreatment);
                    form.append('csm', this.psyCardUd.csm);
                    form.append('spdc', this.psyCardUd.spdc);
                    form.append('rems', this.psyCardUd.rems);
                }
            }
            if(_errors==0){
                try {
                    axios.post(actions.ADD_UOC_DEPARTMENT,form).then(response => {
                        let error=response.data.errorNumber;
                        let _attempts=response.data.attempts;
                        _wm.errNum=error;
                        if(error == 0){

                            Swal.fire(
                                'Scheda',
                                'Aggiornata correttamente',
                                'success'
                            )
                            // this.getPsyUocDepartmentsByUserIstanceId(this.userInstance);
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


        getPsyUocDepartments(){
            //GET ALL CARDS
            let _wm = this;
            try {
                axios.get(actions.GET_UOC_DEPARTMENTS).then(response => {
                    let error=response.data.errorNumber;
                    let _attempts=response.data.attempts;
                    _wm.errNum=error;
                    if(error == 0){
                        //alert(JSON.stringify(response))
                    }else{
                        // eventBus.$emit('errorEvent', error, _attempts);
                    }
                });
            } catch (error) {
                throw error
            }
        },
        getUocDepartmentsByPsyId(id){
            let _wm = this;
            try {
                let url=actions.GET_UOC_DEPARTMENT_BY_PSY_ID+'/'+id;
                axios.get(url).then(response => {
                    let error=response.data.errorNumber;
                    let _attempts=response.data.attempts;
                    _wm.errNum=error;
                    if(error == 0){
                        //alert(JSON.stringify(response))
                    }else{
                        // eventBus.$emit('errorEvent', error, _attempts);
                    }
                });
            } catch (error) {
                throw error
            }
        },
        getPsyUocDepartmentsByUserIstanceId(id,first){
            let _wm = this;

            let _param;
            _wm.PsyUocDepartment=[];


            try {
                let url=actions.GET_UOC_DEPARTMENTS_BY_USER_ISTANCE_ID+'/'+id;
                axios.get(url,{params:{first:first,startDate:this.psyCardUd.startDate,endDate:this.psyCardUd.endDate}}).then(response => {
                    let error=response.data.errorNumber;
                    // let _attempts=response.data.attempts;
                    _wm.errNum=error;
                    //alert(JSON.stringify(response.data));
                    if(error == 0){
                      
                        _wm.mainTitle="Aggiornamento Cartella psy";
                        if(response.data.PsyUocDepartment){
                            // _wm.uDSaved=true;
                            // _wm.btnUdSend="Aggiorna";

                            _wm.PsyUocDepartment=response.data.PsyUocDepartment;

                            


                            for (let prop in _wm.PsyUocDepartment) {

                            }

                            // let _psyDep=response.data.PsyUocDepartment;
                            // // _wm.psyCardId=response.data.psyCard.id;
    
                            // _wm.psyCardId=response.data.psyCard.id;
                            // _wm.psyUdDoctorId = _psyDep.id_doctor;

                            // _wm.psyUdDoctorName = _psyDep.doctor_name;
                            // _wm.psyUdDoctorLastname = _psyDep.doctor_lastname;

                            
                            // _wm.psyCardUd.psychiatricTreatment =_psyDep.psychiatric_treatment;
                            // _wm.psyCardUd.csm = _psyDep.csm 	
                            // _wm.psyCardUd.spdc = _psyDep.spdc 
                            // _wm.psyCardUd.rems = _psyDep.rems
                            // _wm.psyCardUd.prison = _psyDep.prison 
                            // _wm.psyCardUd.psychiatricFamiliarity = _psyDep.psychiatric_familiarity
                            // _wm.psyCardUd.ifFamiliarity = _psyDep.if_familiarity
                            // _wm.psyCardUd.onSetOfPsychiatricSymptom = _psyDep.on_set_of_psychiatric_symptom
                            // _wm.psyCardUd.substanceUse = _psyDep.substance_use 
                            // _wm.psyCardUd.inChargeAtSerdTerritorial = _psyDep.in_charge_at_serd_territorial
                            // _wm.psyCardUd.inChargeAtSerdTerritorialWhich = _psyDep.in_charge_at_serd_territorial_which
                            // _wm.psyCardUd.psychoticDymptom = _psyDep.psychotic_symptom 
                            // _wm.psyCardUd.anxiousAffectiveSymptom = _psyDep.anxious_affective_symptom
                            // _wm.psyCardUd.impulsiveSymptom = _psyDep.impulsive_symptom 
                            // _wm.psyCardUd.psychoticDiagnosticOrientation = _psyDep.psychotic_diagnostic_orientation
                            // _wm.psyCardUd.anxiousAffectiveOrientation = _psyDep.anxious_affective_orientation
                            // _wm.psyCardUd.personalityOrientation = _psyDep.personality_orientation
                            // _wm.psyCardUd.takingChargePdta = _psyDep.taking_charge_pdta
                            // _wm.psyCardUd.careIntakePdta = _psyDep.care_intake_pdta 

                            // _wm.psyCardUd.consultancyPdta = _psyDep.consultancy_pdta 

                            // _wm.allPsyUocDepartments=response.data.allPsyUocDepartments;
                        }else{
                            _wm.btnUdSend="Salva";
                        }
                        
                        _wm.firstSave=false;
                    }else if(error == 7){
                        _wm.btnUdSend="Salva";
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
