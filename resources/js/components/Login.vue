<template>

  <form @submit.prevent="submit()" method="POST">



    <div class="form-group loginput">
      <label for="exampleInputEmail1">Email address</label>

      <input id="email" type="email" class="form-control" name="email"
        value="" required autocomplete="email" autofocus v-model="email">

        <span v-if="errors.email">{{ errors.email[0] }}</span>


    </div>
    <div class="form-group loginput">
      <label>Password</label>
      <div class="input-group" id="show_hide_password">

        <input id="password" :type="type" class="form-control"
          name="password" required autocomplete="current-password" v-model="password">



        <div class="input-group-addon faeye">
          <a href="javascript:void(0)" @click="showPassword" class=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
        </div>


      </div>
      <a href="password/reset">Forgot Password?</a>

      <section v-if="errorMessage">
       <p  style="color:red;" > {{errorMessage}} </p>
      </section>
    </div>

    <br><br><br><br>

    <div class="form-group">

      <button type="submit" class="btn btn-default loginbtn hoverbtn">Login</button>

      <div v-if="loading"><img style="width:40px;" src="/assets/img/loader.gif"></div>

    </div>

    <!-- <div class="form-group">

      <button type="submit" class="btn btn-default googlebtn hoverbtn">Login with Google</button>

  </div> -->




  </form>
</template>

<script>
export default {

      mounted() {
            console.log('Component mounted.')
        },


        //all the variables inside data funciton,
    data() {
        return {
            email: '',
            password: '',
            errors: [],
            errorMessage: null,
            loading:false,
            type:"password",
        }
    },

    //all the methods inside methods  function
    methods: {
        submit() {

            // axios.get('/api/user')
            //     .then(({data}) => {
            //         console.log(data);
                // });

            axios.get('/sanctum/csrf-cookie').then(response => {
                this.loading=true;
                //axios is the Promise based HTTP client for the browser and node.js
                axios.post("/login", {
                    email: this.email,
                    password: this.password
                })
                    .then(({data}) => {
                        console.log(data);

                        this.loading = false;

                        if(data.group === 'client') {
                            window.location.href = "/home"
                            return;
                        }

                        window.location.href = '/dashboard';
                        return;

                    })
                    .catch((error) => {
                        this.errors = error.response.data.errors;
                        this.errorMessage = error.response.data.message;
                        this.loading=false;
                    });
            });


        },
          showPassword(){
            if(this.type === 'password'){
                this.type="text";
            }
            else{
                this.type="password";
            }


        }

    }

}
</script>

<style>

</style>
