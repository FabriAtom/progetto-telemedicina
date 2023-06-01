

<template>
    
    
    <div class="ln_solid mt-2"></div>
    <div class="item form-group">
        <div class="pull-right">
            <a class="btn bg-primary text-white i2hBtnPrint ml-4" @click=" printAnagrafic('printPdf')"><i class="fa fa-print"></i>Stampa Archivio</a>

            <!-- <a  class="btn btn-success i2hBtnPrint"  @click=" printCollectionFormHgt('printPdf')"><i class="fa fa-print"></i>Stampa</a> -->
        </div>
    </div>


</template>


<script>

export default {

    name: 'ButtonAnagrafic',
    
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