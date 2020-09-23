<template>
<form @submit.prevent="submit()" method="POST">
   <input type="hidden" name="_token" :value="csrf">
    <FormBuilder   :form-configuration="formData" v-model="configuration"></FormBuilder>

   <button type="button" v-on:click="submitData" class="btn btn-danger">Submit</button>
</form>

</template>

<script>
    import {FormBuilder} from 'v-form-builder';

    export default {
        // props:['csrf'],
        name: "VueFormComponent",
        components: {FormBuilder},
        data: () => ({
            formData:null,
            configuration: null,
            formConfig:null,
            csrf:"",
        }),
        mounted(){
            this.csrf=window.Laravel.csrfToken;
        },
        methods:{
            getFormData(){
                console.log(this.formData);
            },
              submitData(){
          let settings = { headers: { "content-type": "multipart/form-data" } };
        let _data = new FormData();
         _data.append("formData", this.formData);

                   axios.post("/form",{
                       formData:this.configuration,


                   }).then(function(response){
                     // console.log(response);
                      window.location.href="/form"
                   }).catch((error)=>{
                        console.log(error);
                   });
            },



        },

    }
</script>
