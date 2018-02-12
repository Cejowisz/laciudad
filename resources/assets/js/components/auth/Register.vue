<template lang="html">
    <div :style="{backgroundImage: 'url(' + image + ')'}">
        <div class="container">
            <div class="row">
                <div class="col m6 offset-m3">
                    <div class="card">
                        {{ message }}
                        <form  v-on:submit.prevent="createUser" method="POST">
                            <div class="row">
                                <div class="input-field col m6">
                                    <input type="text" id="fullname" v-model="user.name" required autofocus>
                                    <label for="fullname">Full Name</label>
                                    <span class="help-block" v-if="errors" v-for="error in errors.name">{{ error }} </span>
                                </div>

                                <div class="input-field col m6">
                                    <input type="text" v-model="user.username" id="username" required>
                                    <label for="username">User Name.</label>
                                    <span class="help-block" v-for="error in errors.username">{{ error }} </span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col m6">
                                    <input type="email" id="email" v-model="user.email" required>
                                    <label for="email">E-Mail Address</label>
                                    <span class="help-block" v-for="error in errors.email">{{ error }} </span>
                                </div>
                                <div class="input-field col m6">
                                    <input type="text" id="phone" v-model="user.phone_number" required>
                                    <label for="phone">Phone</label>
                                    <span class="help-block" v-for="error in errors.phone_number">{{ error }} </span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col m6">
                                    <input type="password" id="password" v-model="user.password" required>
                                    <label for="password">Password</label>
                                    <span class="help-block" v-for="error in errors.password">{{ error }} </span>
                                </div>
                                <div class="input-field col m6">
                                    <input type="password"  v-model="user.password_confirmation" required>
                                    <label>Confirm Password</label>
                                </div>
                            </div>

                            <div class="input-field">
                                <button type="submit" class="snip1535a">
                                    Register
                                </button>
                            </div>

                        </form>
                        {{ errors }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    import swal from 'sweetalert2'

    export default{
        props: ['thems'],
        data(){
            return{
                message: '',
                them: '',
                users: '',
                image: 'img/back-register.jpeg',
                errors: '',
                user: {
                    password: '',
                    password_confirmation: '',
                    username: '',
                    name: '',
                    email: '',
                    phone_number: ''
                }
            }
        },


        methods: {
            clearData() {
                this.user = {
                    password: '',
                    password_confirmation: '',
                    username: '',
                    name: '',
                    email: '',
                    phone_number: ''
                }
            },

            createUser(){
                let self = this;
                axios.post('/register', self.user).then(response =>{
                    console.log(response.data);
                    this.clearData();
                    this.message = response.data.message;
                })
                    .catch(error => {
                        this.errors = error.response.data.errors
                        /*swal({
                            title: 'Error occurred',
                            text: JSON.stringify(error.response.data.errors),
                            type: 'warning',
                            showCancelButton: true,
                        })*/
                    });
            },

            created(){
                this.fetchUsers();
            },

            fetchUsers(){
                axios.get('users').then(response =>{
                    this.users = response.data.users;
                });
            },
        }
    }
</script>

<style>
    form{
        padding: 20px;
        margin-top: 20px;
    }

</style>
