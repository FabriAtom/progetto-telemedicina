

export const GET_PERMISSIONS = '/serd/getpermissions';


export const GET_SERD_CARDS = '/serd/getSerdCards';
export const GET_SERD_CARD_BY_ID = '/serd/getSerdCardById';
export const GET_SERD_CARDS_BY_USER_INSTANCE_ID = '/serd/getSerdCardsByUserIstanceId';


export const GET_TOXICOLOGY_REPORTS_BY_SERD_ID= '/serd/getToxicologyReportsBySerdId';
export const GET_PSYCHOLOGICAL_ANAMNESES_BY_SERD_ID= '/serd/getPsychologicalAnamnesesBySerdId';
export const GET_SOCIAL_FOLDERS_BY_SERD_ID= '/serd/getSocialFoldersBySerdId';

export const GET_CURRENT_TOXICOLOGY_REPORTS_BY_SERD_ID= '/serd/getCurrentToxicologyReportBySerdId';
export const GET_CURRENT_PSYCHOLOGICAL_ANAMNESES_BY_SERD_ID= '/serd/getCurrentPsychologicalAnamnesisBySerdId';
export const GET_CURRENT_SOCIAL_FOLDERS_BY_SERD_ID= '/serd/getCurrentSocialFolderBySerdId';

export const ADD_SERD_CARD= '/serd/store';
export const ADD_TOXICOLOGY_REPORT= '/serd/addToxicologyReport';
export const ADD_PSICHOLOGICAL_ANAMNESIS= '/serd/addPsychologicalAnamnesis';
export const ADD_SOCIAL_FOLDER= '/serd/addSocialFolder';
export const DELETE_SERD_CARD= '/serd/destroy';







export const GET_PSY_CARDS = '/psy/getPsyCards';
export const GET_PSY_CARD_BY_ID = '/psy/getPsyCardById';
export const GET_PSY_CARDS_BY_USER_INSTANCE_ID = '/psy/getPsyCardsByUserIstanceId';
export const ADD_PSY_CARD= '/psy/store';




// SuicideAssessment
export const GET_SUICIDE_ASSESSMENT_BY_PSY_ID= '/psy/getSuicideAssessmentsByPsyId';
export const ADD_SUICIDE_ASSESSMENT= '/psy/addSuicideAssessment';
export const GET_SUICIDES_BY_USER_ISTANCE_ID= '/psy/getPsySuicideAssessmentsByUserInstanceId';







// export const GET_PSY_SUICIDE_ASSESSMENT_BY_USER_INSTANCE_ID = '/psy/getPsySuicideAssessmentsByUserIstanceId';
// export const ADD_PSY_SUICIDE_ASSESSMENT= '/psy/store';


// MentalHealthDepartment
export const GET_MENTAL_HEALTH_DEPARTMENT_BY_PSY_ID= '/psy/getMentalHealthDepartmentsByPsyId';
export const ADD_MENTAL_HEALTH_DEPARTMENT= '/psy/addMentalHealthDepartment';
// export const GET_MENTAL_HEALTH_DEPARTMENTS_BY_PSY_ID= '/psy/getMentalHealthDepartmentsByPsyId';
// export const GET_TRACEABILITYS_BY_USER_ISTANCE_ID = '/therapies/getTraceabilityTherapysByUserIstanceId';



// PsyRating
export const GET_RATING_BY_PSY_ID= '/psy/getRatingsByPsyId';
export const ADD_RATING= '/psy/addRating';


// PsYUocDepartment
export const GET_UOC_DEPARTMENT_BY_PSY_ID= '/psy/getUocDepartmentsByPsyId';
export const ADD_UOC_DEPARTMENT= '/psy/addUocDepartment';


// PsySocialFolder
// export const GET_SOCIAL_FOLDER_BY_PSY_ID= '/psy/getSocialFoldersByPsyId';
// export const ADD_SOCIAL_FOLDER= '/psy/addSocialFolder';



// RehabilitationPsychiatricCard
export const GET_REHABILITATION_PSYCHIATRIC_CARD_BY_PSY_ID= '/psy/getRehabilitationPsychiatricCardsByPsyId';
export const ADD_REHABILITATION_PSYCHIATRIC_CARD= '/psy/addRehabilitationPsychiatricCard';


// PsyMembershipCard
export const GET_MEMBERSHIP_CARD_BY_PSY_ID= '/psy/getMembershipCardsByPsyId';
export const ADD_MEMBERSHIP_CARD= '/psy/addMembershipCard';


// PsySurvey
export const GET_SURVEY_BY_PSY_ID= '/psy/getSurveysByPsyId';
export const ADD_SURVEY= '/psy/addSurvey';


// PsyJsat
export const GET_JSAT_BY_PSY_ID= '/psy/getJsatsByPsyId';
export const ADD_JSAT= '/psy/addJsat';






// export const GET_NURSING = '/therapies/getNursingTherapiesByUserIstanceId';
// export const ADD_NURSING= '/therapies/addtNursingTherapies';






export const GET_TRACEABILITYS = '/therapies/getTraceabilityTherapys';
export const GET_TRACEABILITY_BY_ID = '/therapies/getTraceabilityTherapyById';
export const GET_TRACEABILITYS_BY_USER_ISTANCE_ID = '/therapies/getTraceabilityTherapysByUserIstanceId';
export const ADD_TRACEABILITY= '/therapies/addTraceabilityTherapy';



export const GET_MONITORINGS = '/therapies/getMonitoringClinicalParameters';
export const GET_MONITORING_BY_ID = '/therapies/getMonitoringClinicalParameterById';
export const GET_MONITORINGS_BY_USER_ISTANCE_ID = '/therapies/getMonitoringClinicalParametersByUserIstanceId';
export const ADD_MONITORING= '/therapies/addMonitoringClinicalParameter';



export const GET_COLLECTIONS = '/therapies/getClinicalParameterCollections';
export const GET_COLLECTION_BY_ID = '/therapies/getClinicalParameterCollectionById';
export const GET_COLLECTIONS_BY_USER_ISTANCE_ID = '/therapies/getClinicalParameterCollectionsByUserIstanceId';
export const ADD_COLLECTION= '/therapies/addClinicalParameterCollection';
 


export const GET_HGTS = '/therapies/getCollectionFormHgts';
export const GET_HGT_BY_ID = '/therapies/getCollectionFormHgtById';
export const GET_HGTS_BY_USER_ISTANCE_ID = '/therapies/getCollectionFormHgtsByUserIstanceId';
export const ADD_HGT= '/therapies/addCollectionFormHgt';



export const GET_NURSINGS = '/therapies/getNursingTherapys';
export const GET_NURSING_BY_ID = '/therapies/getNursingTherapysById';
export const GET_NURSINGS_BY_USER_ISTANCE_ID = '/therapies/getNursingTherapysByUserIstanceId';
export const ADD_NURSING= '/therapies/addNursingTherapy';




export const GET_PRESCRIPTIONS = '/therapies/getMonitoringPrescriptionTaos';
export const GET_PRESCRIPTION_BY_ID = '/therapies/getMonitoringPrescriptionTaosById';
export const GET_PRESCRIPTIONS_BY_USER_ISTANCE_ID = '/therapies/getMonitoringPrescriptionTaosByUserIstanceId';
export const ADD_PRESCRIPTION= '/therapies/addMonitoringPrescriptionTao';





// export const GET_REFUSEDS = '/therapies/getRefusedTreatments';
// export const GET_REFUSED_BY_ID = '/therapies/getRefusedTreatmentsById';
// export const GET_REFUSED_BY_USER_ISTANCE_ID = '/therapies/getRefusedTreatmentsByUserIstanceId';


export const ADD_REFUSED = '/therapies/addRefusedTreatment';



