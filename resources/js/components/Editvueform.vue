<template>
    <FormRenderer
            :form-configuration="formData"
            v-model="formInputData"
    />


</template>

<script>
    import {FormRenderer} from 'v-form-builder'

    export default {

        components: {
            FormRenderer,
        },

        data() {
            return {
                formData: null,
                formInputData: null,
            }
        },

        methods: {
            getFormData() {
                // get form data...

                //...
              this.formData = window.formData; ////;
            },
        },

        created() {
            this.getFormData()
        }
    }
</script>
