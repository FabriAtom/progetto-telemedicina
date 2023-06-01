<template>

    <div class="container">

        <!-- NAVBAR -->

 

        <h2 class="header">Anagrafica</h2>

 

        <!-- END NAVABAR -->

        <!-- ANAGRAFICA -->

        <form name="anagrafica" >

            <div class="borderQuestion mt-2"  style="margin-top:50px">

                <fieldset class="scheduler-border " v-if="roleSwitchVisible">

                    <div>

                        <legend class="scheduler-border">Asur</legend>

                        <div class="form-row ">

                            <div v-if="viewTipology=='users'">

                                <div class="col-md-3 col-sm-3">

                                    <div class="control-group ">

                                        <label class="control-label">Ruolo:</label>

                                        <select class="select2_single form-control" v-model='role' @change="roleChange($event)">

                                            <option value='1'>Operatore</option>

                                            <option value='2'>Infermiere</option>

                                            <option value='3'>Mmg</option>

                                            <option value='4'>medico</option>

                                        </select>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-3 col-sm-3" v-show="rolePermissionsVisible" :key="componentKey">

                                <label>Permessi:</label>

                                <ul id="checked-list-inputs" class="checked-list-inputs" @click="toggleSelectVisibility()">

                                    <li v-for="pCheckedNode in checkedNodes" :key="pCheckedNode.id">{{ pCheckedNode.id }} </li>

                                    <span class="treeArrow">

                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>

                                    </span>

                                </ul>

                                <div class="scroll" v-show="selectVisible">

                                    <tree-view id="my-tree" :initial-model="treeOptions" ref="addUsertreeInputs" :model-defaults="modelDefaults" :skin-class="'grayscale'" @treeViewNodeRadioChange="treeViewNodeRadioChange"></tree-view>

                                </div>

                            </div>

                        </div>

 

                        <div class="col-md-3 col-sm-3" v-if="doctorStructures && viewTipology=='users'">

                            <div class="item form-group">

                                <label class="col-form-label label-align" for="provinceOfBirth">Istituto: </label><br><br>

                                    <!-- <select class="select2_single form-control" v-model='structures' multiple>

                                        <option value='61'>Rebibbia-Nuovo Complesso</option>

                                        <option value='62'>Rebibbia-Casa Reclusione</option>

                                        <option value='63'>Rebibbia-Terza casa</option>

                                        <option value='64'>Rebibbia-Casa Circondariale Femminile</option>

                                    </select> -->

                                    <input type="checkbox" id="ucp1" value="61" v-model="structures">

                                    <label for="nuovoComplesso">UCP1</label><br>

                                    <input type="checkbox" id="ucp2" value="62" v-model="structures">

                                    <label for="casaReclusione">UCP2</label><br>

 

                            </div>

                        </div>

                       <div v-else-if="role!=5 && !doctorStructures && viewTipology=='users'"   class="col-md-3 col-sm-3"  >

                               

                            <div class="item form-group">

                                <label class="col-form-label label-align" for="provinceOfBirth">Struttura ocp: </label><br>

                                    <!-- <select class="select2_single form-control" v-model='structures' multiple>

                                        <option v-for="item in accessData.structures" :key="item" v-bind:value="item">

                                            {{structuresDesc[item]}}

                                        </option>

 

                                    </select> -->

 

                                    <input type="checkbox" id="nuovoComplesso" value="61" v-model="structures">

                                    <label for="nuovoComplesso">UCP1</label><br>

                                    <input type="checkbox" id="casaReclusione" value="62" v-model="structures">

                                    <label for="casaReclusione">UCP1</label><br>

 

                            </div>

                        </div>

                        <div class="col-md-3 col-sm-3" v-if="registerDataEnabled">

                            <div class="item form-group">

                                <label class="col-form-label label-align" for="provinceOfBirth">Cerca Codice fiscale /STP/ENI su Asur: </label>

                                <input :disabled="!userEnabled" type="text" id="codFisAsur" class="form-control" v-model="codFisAsur" v-on:keyup="findUserDataByCodFis($event)">

                            </div>

                        </div>

 

                    </div>

                </fieldset>

                <div class="clearfix"></div>

                <fieldset class="scheduler-border">

                    <legend class="scheduler-border">Anagrafica</legend>

                    <div class="form-row">

                        <div class="col-md-2 col-sm-4">

                            <div class="item form-group">

                                <label class="col-form-label  label-align" for="first-name">Nome: </label>

                                <input :disabled="!userEnabled" type="text" id="first-name" class="form-control" v-model="addUserInputs.name" @change="generateFiscalCode()">

                            </div>

                        </div>

                        <div class="col-md-2 col-sm-4">

                            <div class="item form-group">

                                <label class="col-form-label label-align" for="last-name">Cognome: </label>

                                <input :disabled="!userEnabled" type="text" id="last-name" class="form-control" v-model="addUserInputs.lastname" @change="generateFiscalCode()">

                            </div>

                        </div>

                        <div class="col-md-2 col-sm-2">

                            <label class="">Sesso</label><br>

                            <div class="btn-group btn-group-toggle">

                                <label class=" ">

                                    <input :disabled="!userEnabled" type="radio" name="genderOptions" id="male" value="1" v-model="newGender" @change="generateFiscalCode()"> Maschio

                                </label>

                                <label class=" ">

                                    <input :disabled="!userEnabled" type="radio" name="genderOptions" id="female" value="2" v-model="newGender" @change="generateFiscalCode()"> Femmina

                                </label>

                            </div>

                        </div>

                        <div class="col-md-4 col-sm-4">

                            <div v-if="userEnabled">

                                <v-date-picker v-model="birthDate" :max-date="maxDate" :format="'YYYY-MM-gg HH:mm:ss'" @input="[generateFiscalCode(), calculateScores(birthDate,'birthDate')]">

                                    <template v-slot="{ inputValue, inputEvents }">

                                        <div class="flex flex-col sm:flex-row justify-start items-center">

                                            <div >

                                                <label>Data di nascita:</label>

                                                <input class=" flex-grow form-control"

                                                       :value="inputValue"

                                                       v-on="inputEvents" />

                                            </div>

                                        </div>

                                    </template>

                                </v-date-picker>

                            </div>

                            <div v-else>

                                <div class="col-md-4 col-sm-4">

                                    <div class="item form-group">

                                        <label class="col-form-label  label-align" for="birthDate">Data di Nascita: </label>

                                        <input :disabled="true" type="text" id="birthDate" class="form-control" @change="calculateScores(birthDate,'birthDate')" v-model="birthDate">

                                    </div>

                                </div>

                            </div>

                        </div>

 

                    </div>

                    <div class="clearfix"></div>

 

                    <div class="form-row">

                        <div class="col-md-3 col-sm-3">

                            <div class="item form-group">

                                <label class="col-form-label label-align" for="birthplace">Città di nascita: </label>

                                <input :disabled="!userEnabled" type="text" id="birthplace" class="form-control" v-model="addUserInputs.birthplace" v-on:keyup="fieldAddUserAutocomplete($event,'birthplace')">

                                <div class="cityResponse" v-if="birthPlaceResults.length > 0">

                                    <ul>

                                        <li v-for="(bcity,index) in birthPlaceResults" :key="bcity.id" v-on:click="changeCity(index,'birthPlace')">{{bcity.city}}</li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-1 col-sm-1">

                            <div class="item form-group">

                                <label class="col-form-label label-align" for="provinceOfBirth">Provincia: </label>

                                <input type="text" id="provinceOfBirth" class="form-control" v-model="addUserInputs.provinceOfBirth" :disabled="disabled">

                            </div>

                        </div>

                        <div class="col-md-3 col-sm-4">

                            <div class="item form-group">

                                <label class="col-form-label label-align" for="codiceFiscale">Codice fiscale /STP/ENI:</label>

                                <input :disabled="!userEnabled" type="text" id="codiceFiscale" class="form-control" v-model="codiceFiscale" v-on:keyup="fieldUnicAutocomplete($event,'codiceFiscale')" :class="{ 'inputFieldOk' : codFisMatch === true}">

                            </div>

                        </div>

                    </div>

                </fieldset>

                <div class="clearfix"></div>

                <fieldset class="scheduler-border" v-if="dataAddressVisible">

                    <legend class="scheduler-border">

                        <div class="form-check">

                            <input v-if="role==3" class="form-check-input" type="checkbox" checked :value="addressData" id="flexCheckDefault" v-model="addressData">

                            <label class="form-check-label" for="flexCheckDefault">

                                Indirizzi

                            </label>

                        </div>

                    </legend>

                    <div class="form-row" v-if="addressData">

                        <div class="col-md-2 col-sm-2">

                            <div class="item form-group">

                                <label class="col-form-label label-align" for="city">Città di residenza: </label>

                                <input type="text" id="city" class="form-control" v-model="addUserInputs.city" v-on:keyup="fieldAddUserAutocomplete($event,'city')">

                                <div class="cityResponse" v-if="cityResults.length > 0">

                                    <ul>

                                        <li v-for="(city,index) in cityResults" :key="city.id" v-on:click="changeCity(index,'city')">{{city.city}}</li>

                                    </ul>

 

                                </div>

                            </div>

                        </div>

                        <div class="col-md-1 col-sm-1">

                            <div class="item form-group">

                                <label class="col-form-label label-align" for="province">Provincia: </label>

                                <input type="text" id="province" class="form-control" v-model="addUserInputs.province">

                            </div>

                        </div>

 

                        <div class="col-md-5 col-sm-5">

                            <div class="item form-group">

                                <label class="col-form-label label-align" for="address">Indirizzo di residenza: </label>

                                <input type="text" id="address" class="form-control" v-model="addUserInputs.address">

                            </div>

                        </div>

                        <div class="col-md-1 col-sm-1">

                            <div class="item form-group">

                                <label class="col-form-label label-align" for="houseNumber">Civico: </label>

                                <input type="text" id="houeseNumber" class="form-control" v-model="addUserInputs.houseNumber">

                            </div>

                        </div>

                        <div class="col-md-3 col-sm-3">

                            <div class="item form-group">

                                <label class="col-form-label label-align" for="cap">Cap: </label>

                                <input type="text" id="cap" class="form-control" v-model="addUserInputs.cap">

                            </div>

                        </div>

 

                    </div>

                    <div class="form-row" v-else>

                        <div class="alert alert-info" role="alert">Dati Indirizzo disabilitati <small>(nessun dato verrà inviato)</small> </div>

                    </div>

                </fieldset>

                <div class="clearfix"></div>

                <fieldset class="scheduler-border" v-if="dataDomicileVisible">

                    <legend class="scheduler-border">

                        <div class="form-check">

                            <input  class="form-check-input" type="checkbox" checked :value="addressDataD" id="flexCheckDefault" v-model="addressDataD">

                            <label class="form-check-label" for="flexCheckDefault">

                                Domicilio

                            </label>

                        </div>

                    </legend>

                    <div class="form-row" v-if="addressDataD">

                        <div class="col-md-2 col-sm-2">

                            <div class="item form-group">

                                <label class="col-form-label label-align" for="city">Città di residenza: </label>

                                <input type="text" id="city" class="form-control" v-model="addUserInputs.cityD" v-on:keyup="fieldAddUserAutocomplete($event,'city')">

                                <div class="cityResponse" v-if="cityResults.length > 0">

                                   <ul>

                                        <li v-for="(city,index) in cityResults" :key="city.id" v-on:click="changeCity(index,'city')">{{city.city}}</li>

                                    </ul>

 

                                </div>

                            </div>

                        </div>

                        <div class="col-md-1 col-sm-1">

                            <div class="item form-group">

                                <label class="col-form-label label-align" for="province">Provincia: </label>

                                <input type="text" id="province" class="form-control" v-model="addUserInputs.provinceD">

                            </div>

                        </div>

 

                        <div class="col-md-5 col-sm-5">

                            <div class="item form-group">

                                <label class="col-form-label label-align" for="address">Indirizzo di residenza: </label>

                                <input type="text" id="address" class="form-control" v-model="addUserInputs.addressD">

                            </div>

                        </div>

                        <div class="col-md-1 col-sm-1">

                            <div class="item form-group">

                                <label class="col-form-label label-align" for="houseNumber">Civico: </label>

                                <input type="text" id="houeseNumber" class="form-control" v-model="addUserInputs.houseNumberD">

                            </div>

                        </div>

                        <div class="col-md-3 col-sm-3">

                            <div class="item form-group">

                                <label class="col-form-label label-align" for="cap">Cap: </label>

                                <input type="text" id="cap" class="form-control" v-model="addUserInputs.capD">

                            </div>

                        </div>

 

                    </div>

                    <div class="form-row" v-else>

                        <div class="alert alert-info" role="alert">Dati Domicilio disabilitati <small>(nessun dato verrà inviato)</small> </div>

                    </div>

                </fieldset>

                <div class="clearfix"></div>

                <fieldset class="scheduler-border" v-if="dataAccessVisible">

                    <legend class="scheduler-border">

                        <div class="form-check">

                            <input v-if="role==3" class="form-check-input" type="checkbox" checked value="" id="flexCheckDefault" v-model="access">

                            <label class="form-check-label" for="flexCheckDefault">

                                Dati d'accesso

                            </label>

                        </div>

                    </legend>

                    <div class="form-row" v-if="access">

                        <div class="col-md-4 col-sm-4">

                            <div class="item form-group">

                                <label class="col-form-label label-align" for="user-id">UserId: </label>

                                <input :disabled="!userEnabled" type="text" id="user-id" class="form-control" v-model="addUserInputs.userId" v-on:keyup="fieldUnicAutocomplete($event,'userId')" :class="{ 'inputFieldOk' : userIdMatch === true}">

                            </div>

                        </div>

                        <div class="col-md-4 col-sm-4">

                            <div class="item form-group">

                                <label class="col-form-label  label-align" for="password">Password: </label>

                                <input type="password" id="password" class="form-control" v-model="addUserInputs.password" :class="{ 'inputFieldOk' : passwordMatch === true}"

                                       v-on:keyup="checkPasswordMatch($event,'password')" autocomplete="off">

                            </div>

                        </div>

                        <div class="col-md-4 col-sm-4">

                            <div class="item form-group">

                                <label class="col-form-label  label-align" for="confirmPassword">Conferma Password: </label>

                                <input type="Password" id="confirmPassword" class="form-control" v-model="addUserInputs.confirmPassword" :class="{ 'inputFieldOk' : passwordMatch === true}"

                                       v-on:keyup="checkPasswordMatch($event,'confirm')" autocomplete="off">

                            </div>

                        </div>

                    </div>

                    <div class="form-row" v-else>

                        <div class="alert alert-info" role="alert">Dati d'accesso disabilitati <small>(nessun dato verrà inviato)</small> </div>

                    </div>

                </fieldset>

                <div class="clearfix"></div>

                <fieldset class="scheduler-border" v-if="dataContactsVisible">

                    <legend class="scheduler-border">

                        <div class="form-check">

                            <input v-if="role==3" class="form-check-input" type="checkbox" checked :value="contactsData" id="flexCheckDefault" v-model="contactsData">

                            <label class="form-check-label" for="flexCheckDefault">

                                Contatti

                            </label>

                        </div>

                    </legend>

                    <div class="form-row" v-if="contactsData">

                        <div class="col-md-6 col-sm-6">

                            <div class="item form-group">

                                <label class="col-form-label label-align" for="email">Email: </label>

                                <input type="text" id="email" :disabled="!contactsData" class="form-control" v-model="addUserInputs.email" v-on:keyup="fieldUnicAutocomplete($event,'email')" :class="computedClass">

                            </div>

                        </div>

                        <div class="col-md-6 col-sm-6">

                            <div class="item form-group">

                                <label class="col-form-label label-align" for="telefono">Telefono: </label>

                                <input type="text" id="telefono" :disabled="!contactsData" class="form-control" v-model="addUserInputs.mobile">

                            </div>

                        </div>

                    </div>

                    <div class="form-row" v-else>

                        <div class="alert alert-info" role="alert">Anagrafica contatti disabilitata <small>(nessun dato verrà inviato)</small> </div>

                    </div>

 

                </fieldset>

                <div class="clearfix"></div>

                <fieldset>

                    <div class="form-row">

                        <div class="col-md-5">

                            <label for="note">Note:</label>

                            <textarea id="note" style="width:100%" v-model='note'></textarea>

                        </div>

                        <div   class="col-md-3 col-sm-3" v-if="viewTipology=='acceptance'">

                            <div class="item form-group">

                                <label class="col-form-label label-align" for="provinceOfBirth">Strutture Ocp: </label>

                                    <select class="select2_single form-control" v-model='carcere' >

                                        <option v-for="item in accessData.structures" :key="item" v-bind:value="item">

                                            {{structuresDesc[item]}}

                                        </option>

                                    </select>

                            </div>

                        </div>

                        <div class="col-md-2 col-sm-12">

                            <div class="btn-group btn-group-toggle btn-ric-av" data-toggle="buttons">

                                <label class=" active">

                                    <input type="checkbox" name="options" id="option1" checked v-model="active"> Attivo

                                </label>

                            </div>

                        </div>

                    </div>

                </fieldset>

                <h3 class="scoresTitle">SCORES per la valutazione (mmg) nell'arruolamento dei pazienti nel Progetto AmbuCri-T</h3>

                <div class="clearfix"></div>

               <div class="row" style="margin-top: 30px;" v-if="viewTipology=='acceptance'">

                    <div class="col-md-12 col-sm-12">

                        <h4 class="dbTitle">DATI PRELIMINARI DA INSERIRE (*= campo obbligatorio)</h4>

                    </div>

                </div>

                <fieldset class="scheduler-border" v-if="viewTipology=='acceptance'">

                    <div class="form-row" style="margin-top: 30px;">

                        <div class="col-md-4">

                            <label for="weight">Peso in kg:</label>

                            <input type="number" id="weight" name="weight" style="width:100%" @input="calculateScores(scores.weight,'bmi')" v-model='scores.weight'>

                        </div>

                        <div class="col-md-4">

                            <label for="height">Altezza in centimetri:</label>

                            <input type="number" id="height" name="height" style="width:100%" @input="calculateScores(scores.height,'bmi')" v-model='scores.height'>

                        </div>

                        <div class="col-md-4">

                            <label for="bmi">Bmi:</label>

                            <input :disabled="true" type="number" id="bmi" name="bmi" style="width:100%" v-model='scores.bmi'>

                        </div>

                    </div>

                    <div class="clearfix" ></div>

                    <div class="form-row" style="margin-top: 30px;">

                        <div class="col-md-4 col-sm-12">

                            <div class="btn-group btn-group-toggle btn-ric-av" data-toggle="buttons">

                                <label for="emergencyRoom">Ricorso al pronto soccorso più di 3 volte nel corso di un anno</label><br>

                                <input type="checkbox" name="emergencyRoom" id="emergencyRoom"  @change="calculateScores(scores.emergencyRoom,'emergencyRoom')" v-model="scores.emergencyRoom">

                               

                            </div>

                        </div>

                        <div class="col-md-4 col-sm-12">

                            <div class="btn-group btn-group-toggle btn-ric-av" data-toggle="buttons">

                                <label for="pharmacologicalTreatment">Sono in trattamento farmacologico con più di 4 farmaci die</label><br>

                                    <input type="checkbox" name="pharmacologicalTreatment" id="pharmacologicalTreatment"  @change="calculateScores(scores.pharmacologicalTreatment,'pharmacologicalTreatment')" v-model="scores.pharmacologicalTreatment">

                               

                            </div>

                        </div>

                    </div> 

                    

                    <div class="clearfix" ></div>

 

                    <div class="diagnosiTitle">Specificare eventuali farmaci*</div>

                    <div  class="threeGrid-container withBackground" >

 

                        <div >

                            <label for="anticoagulantDrugs">Anticoagulanti</label><br>

                            <input type="checkbox" name="anticoagulantDrugs" id="anticoagulantDrugs"  @change="calculateScores(scores.anticoagulantDrugs,'aaaDrugs')" v-model="scores.anticoagulantDrugs">

                        </div>

                        <div>

                            <label for="antineoplasticDrugs">Antineoplastici</label><br>

                            <input type="checkbox" name="antineoplasticDrugs" id="antineoplasticDrugs"  @change="calculateScores(scores.antineoplasticDrugs,'aaaDrugs')" v-model="scores.antineoplasticDrugs">

                        </div>

                        <div>

                            <label for="antiarrhythmicDrugs">Antiaritmici</label><br>

                            <input type="checkbox" name="antiarrhythmicDrugs" id="antiarrhythmicDrugs"  @change="calculateScores(scores.antiarrhythmicDrugs,'aaaDrugs')" v-model="scores.antiarrhythmicDrugs">

                        </div>

 

                    </div> 

                    

                    <div class="clearfix" ></div>

 

                    <div class="diagnosiTitle">Diagnosi di:</div>

 

                    <div  class="fourGrid-container withBackground" >

                            <div>

                                    <label for="chronicHeartFailure">Scompenso cardiaco cronico</label><br>

                                    <input type="checkbox" name="chronicHeartFailure" id="chronicHeartFailure" @change="calculateScores(scores.chronicHeartFailure,'chronicHeartFailure')" v-model="scores.chronicHeartFailure">

                            </div>

                            

                            <div>

                                    <label for="diabetes">Diabete</label><br>

                                    <input type="checkbox" name="diabetes" id="diabetes" @change="calculateScores(scores.diabetes,'dabDesease')" v-model="scores.diabetes">

                            </div>

                            <div>

                                    <label for="atrialFibrillation">Fibrillazione atriale</label><br>

                                    <input type="checkbox" name="atrialFibrillation" id="atrialFibrillation" @change="calculateScores(scores.atrialFibrillation,'dabDesease')" v-model="scores.atrialFibrillation">

                            </div>

                            <div>

                                    <label for="bpco">BPCO</label><br>

                                    <input type="checkbox" name="bpco" id="bpco" @change="calculateScores(scores.bpco,'dabDesease')" v-model="scores.bpco">

                            </div>

 

                    </div> 

                    <div class="clearfix" ></div>

                    <div class="form-row" style="margin-top: 30px;">

                        <div class="col-md-3 col-sm-12">

                            <div >

                                <label for="emergencyRoom">Sovrappeso</label>

                                <input :disabled="true" type="radio" name="overweightObesity" id="overweightObesity" value="1"  v-model="scores.overweightObesity">

                                <label for="emergencyRoom">Obesità</label>

                                <input :disabled="true" type="radio" name="overweightObesity" id="overweightObesity" value="2"  v-model="scores.overweightObesity"> 

                            </div>

                        </div>

                    </div> 

                    <div class="clearfix" ></div>

                    <div class="form-row" style="margin-top: 30px;">

                        <div class="col-md-12 col-sm-12">

                            <div class="btn-group btn-group-toggle btn-ric-av" data-toggle="buttons">

                                <label for="hospLastYearCardiovDisAcuteCerebrovaAccCancer">Ricovero ospedaliero nell'ultimo anno per malattia cardiovascolare acuta o accidenti cerebrovascolari acuti oppure cancro</label><br>

                                <input type="checkbox" name="hospLastYearCardiovDisAcuteCerebrovaAccCancer" id="hospLastYearCardiovDisAcuteCerebrovaAccCancer" @change="calculateScores(scores.hospLastYearCardiovDisAcuteCerebrovaAccCancer,'cdAcCaDisease')"  v-model="scores.hospLastYearCardiovDisAcuteCerebrovaAccCancer">

                            </div>

                        </div>

                    </div> 

 

                    <div class="clearfix" ></div>

                    <div class="fiveGrid-container" style="margin-top: 50px;">

 

                        <div>

                                <label for="hypertension">Ipertensione arteriosa</label><br>

                                <input type="checkbox" name="hypertension" id="hypertension"  @change="calculateScores(scores.hypertension,'hypertension')" v-model="scores.hypertension">

                        </div>

                        <div>

                                <label for="hypercholesterolemia">ipercolesterolemia</label><br>

                                <input type="checkbox" name="hypercholesterolemia" id="hypercholesterolemia"  @change="calculateScores(scores.hypercholesterolemia,'hypercholesterolemia')" v-model="scores.hypercholesterolemia">

                        </div>

                        <div>

                                <label for="chronicRenalFailure">Insufficienza renale cronica</label><br>

                                <input type="checkbox" name="chronicRenalFailure" id="chronicRenalFailure"  @change="calculateScores(scores.chronicRenalFailure,'chronicRenalFailure')" v-model="scores.chronicRenalFailure">

                        </div>

                        <div>

                                <label for="dialysis">Dialisi</label><br>

                                <input type="checkbox" name="dialysis" id="dialysis"  @change="calculateScores(scores.dialysis,'chronicRenalFailure')" v-model="scores.dialysis">

                        </div>

                        <div>

                                <label for="chronicNeurodegenerativeDiseases">Malattie neurodegenerative croniche</label><br>

                                <input type="checkbox" name="chronicNeurodegenerativeDiseases" id="chronicNeurodegenerativeDiseases" @change="calculateScores(scores.chronicNeurodegenerativeDiseases,'chronicNeurodegenerativeDiseases')" v-model="scores.chronicNeurodegenerativeDiseases">

                        </div>

                    </div> 

 

                    <div class="clearfix" ></div>

                    <div class="fourGrid-container" style="margin-top: 50px;">

 

                        <div>

                                <label for="surgeriesInLastYear">Interventi chirurgici nell'ultimo anno/Traumi con conseguente</label><br>

                                <input type="checkbox" name="surgeriesInLastYear" id="surgeriesInLastYear"  @change="calculateScores(scores.surgeriesInLastYear,'surgeriesInLastYear')" v-model="scores.surgeriesInLastYear">

                        </div>

                        <div>

                                <label for="sociallyFragile">Vivi da solo* o senza fissa dimora o socialmente fragile</label><br>

                                <input type="checkbox" name="sociallyFragile" id="sociallyFragile"  @change="calculateScores(scores.sociallyFragile,'sociallyFragile')" v-model="scores.sociallyFragile">

                        </div>

                    </div> 

                </fieldset>

                <div class="row" style="margin-top: 30px;" v-if="viewTipology=='acceptance'">

                    <div class="col-md-12 col-sm-12">

                        <h4 class="dbTitle">DATI OBBIETTIVI(NEWS) al momento della visita</h4>

                    </div>

                </div>

                <div class="clearfix"></div>

                <fieldset class="scheduler-border" v-if="viewTipology=='acceptance'">

                    <div class="fiveGrid-container" style="margin-top: 50px;">

 

                        <div>

                                <label for="bloodPressure">Pressione arteriosa > 150/90 mmHg</label><br>

                                <input type="checkbox" name="bloodPressure" id="bloodPressure"  @change="calculateScores(scores.bloodPressure,'bloodPressure')" v-model="scores.bloodPressure">

                        </div>

                        <div>

                                <label for="oximetry">Ossimetria 90 - 93%</label><br>

                                <input type="checkbox" name="oximetry" id="oximetry"  @change="calculateScores(scores.oximetry,'oximetry')" v-model="scores.oximetry">

                        </div>

                        <div>

                                <label for="heartRate">Frequenza cardiaca: (&gt;50 - &lt;60) o (&ge;90 - &lt;120) o (60 - 90 + Aritmia)</label><br>

                                <input type="text" name="heartRate" id="heartRate"  @input="calculateScores(scores.heartRate,'heartRate')" v-model="scores.heartRate">

                        </div>

                        <div>

                                <label for="arrhythmia">Aritmia</label><br>

                                <input type="checkbox" name="arrhythmia" id="arrhythmia"  @change="calculateScores(scores.arrhythmia,'heartRate')" v-model="scores.arrhythmia">

                        </div>

                        <div>

                                <label for="breathFrequency">Frequenza respiratoria 22 - 30</label><br>

                                <input type="checkbox" name="breathFrequency" id="breathFrequency"  @change="calculateScores(scores.breathFrequency,'breathFrequency')" v-model="scores.breathFrequency">

                        </div>

                    </div> 

                    <div class="clearfix"></div>

                    <div class="fourGrid-container" style="margin-top: 50px;">

 

                        <div>

                                <label for="chestAuscultationNoises">Rumori di alterzioni all'ascolazione del torace</label><br>

                                <input type="checkbox" name="chestAuscultationNoises" id="chestAuscultationNoises" @change="calculateScores(scores.chestAuscultationNoises,'chestAuscultationNoises')" v-model="scores.chestAuscultationNoises">

                        </div>

                        <div>

                                <label for="bodyTemperature">Temperatura corporea (37.5 - 39)</label><br>

                                <input type="checkbox" name="bodyTemperature" id="bodyTemperature" @change="calculateScores(scores.bodyTemperature,'bodyTemperature')"  v-model="scores.bodyTemperature">

                        </div>

                        <div>

                                <label for="breathlessnessStairs">Ho Affanno quando salgo le scale? da 1 a 10 se &gt; 4</label><br>

                                <input type="checkbox" name="breathlessnessStairs" id="breathlessnessStairs"  @change="calculateScores(scores.breathlessnessStairs,'breathlessnessStairs')" v-model="scores.breathlessnessStairs">

                        </div>

                        <div>

                                <label for="snoring">Russo durante il sonno?</label><br>

                                <input type="checkbox" name="snoring" id="snoring" @change="calculateScores(scores.snoring,'snoring')"  v-model="scores.snoring">

                        </div>

                    </div> 

 

 

 

                </fieldset>

            </div>

            <div class="clearfix" style="margin-top:20px;"></div>


 

        </form>

        <div class="totalScoreContainer" :class="containerBackground" v-if="totalScores">

            <div class="totalScoreLabel">Punteggio:</div>

            <div class="totalScore">{{totalScores}}</div>

        </div>

        <div class="btnSendContainer" @click="alert('click')" v-if="totalScores">

            Salva

        </div>

 

 

        <!-- END ANAGRAFICA -->

 

 

 

        <!-- <div v-if="errorVisible" class="errorMessage"><h5>{{errorMessage}} Numero di tentativi rimasti: {{attempts}}</h5></div>

    <transition name="fade">

        <p style="border: 1px inset #ccc; border-radius: 5px; padding: 5px 10px; background-color: #28a745; color: white;" v-if="showSuccess">{{responseMessage}}</p>

    </transition> -->

 

 

 

        <div class="bg-warning" v-if="userAddErrors > 0">

            <ul class="errorAlert">

                <li v-for="errors in errorDescriptions" :key="errors.id" class="text-danger">{{errors}}</li>

            </ul>

        </div>

 

    </div>

</template>


<script>

export default {

    name: 'Anagrafic',
    
    methods: {
        
        printAnagrafic(printPdf){
            
            let v_myWindow
            let url= 'printPdf/2';
            v_myWindow = window.open(url, 'v_myWindow', 'width=' + screen.width + ',height=' + screen.height + ', scrollbars=yes, titlebar=no, top=0, left=0');
            return false;
        },
    }
}


</script>