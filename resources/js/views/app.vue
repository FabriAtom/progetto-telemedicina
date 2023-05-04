<template>
  <div>
    <!-- il router view monta il componente Home.vue -->
    <!-- rotta percorso e path sono in routes -->

    <router-view></router-view>

    <div>
      <psyCard/>
      <!-- <PsySuicideAssessment/> -->
      <!-- <serdCard/> -->
      <PsyMentalHealthDepartment/>
      <PsyRehabilitationPsychiatricCard/>
      <PsyRating/>
      <PsyUocDepartment/>
      <PsySocialFolder/>
      <PsyMembershipCard/>
      <PsySurvey/>
      <PsyJsat/>

      <TraceabilityTherapy/>
      <MonitoringClinicalParameter/>
      <ClinicalParameterCollection/>
      <CollectionFormHgt/>
      <MonitoringPrescriptionTao/>
    </div>
    
  </div>
</template>

<script>
// import Home from '../pages/Home.vue';
import psyCard from '../components/psyCard.vue';
// import serdCard from '../components/serdCard.vue';
// import PsySuicideAssessment from '../components/PsySuicideAssessment.vue';
import PsyMentalHealthDepartment from '../components/PsyMentalHealthDepartment.vue';

import PsyRehabilitationPsychiatricCard from '../components/PsyRehabilitationPsychiatricCard.vue';
import PsyRating from '../components/PsyRating.vue';
import PsyUocDepartment from '../components/PsyUocDepartment.vue';
import PsySocialFolder from '../components/PsySocialFolder.vue';

import PsyMembershipCard from '../components/PsyMembershipCard.vue';
import PsySurvey from '../components/PsySurvey.vue';
import PsyJsat from '../components/PsyJsat.vue';



import TraceabilityTherapy from '../components/TraceabilityTherapy.vue';
import MonitoringClinicalParameter from '../components/MonitoringClinicalParameter.vue';
import ClinicalParameterCollection from '../components/ClinicalParameterCollection.vue';
import CollectionFormHgt from '../components/CollectionFormHgt.vue';
import MonitoringPrescriptionTao from '../components/MonitoringPrescriptionTao.vue';


export default {
  components: {
    // serdCard, 
    // Home,
    psyCard,
    // PsySuicideAssessment,
    PsyMentalHealthDepartment,
    PsyRehabilitationPsychiatricCard,
    PsyRating,
    PsyUocDepartment,
    PsySocialFolder,
    PsyMembershipCard,
    PsySurvey,
    PsyJsat,


    TraceabilityTherapy,
    MonitoringClinicalParameter,
    ClinicalParameterCollection,
    CollectionFormHgt,
    MonitoringPrescriptionTao,
}
}
</script>

<style lang="scss" scoped>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
</style>