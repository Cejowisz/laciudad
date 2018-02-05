<template>
    <div>
        <div class="container">
            <div class="row" style="padding-bottom: 15px; padding-top: 25px;">
                <!--@include('pages.partials._message')-->
                <div class="col m6 wow fadeInLeft" style="margin-bottom: 20px;">

                    <h5 class="wwo pri-color" style="margin-top: 35px;">Get In Touch</h5>
                    <p>
                        <span class="mi2"><i class="material-icons pri-color">phone</i></span>
                        <span class="mi2"><a href="tel:+2349050896842">09050896842</a></span>
                    </p>
                    <p>
                        <span><i class="material-icons pri-color">email</i></span>
                        <span><a href="mailto:info@wisemanconcept">info@wisemanconcept</a></span>
                    </p>
                </div>
                <div class="col m6 wow fadeInRight" style="margin-bottom: 20px;">
                    <form method="POST">
                        <div class="row">
                            <div class="col m6">
                                <div class="input-field">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" v-model="info.name" class="" required >
                                </div>
                            </div>
                            <div class="col m6">
                                <div class="input-field">
                                    <label for="company_name">Company Name</label>
                                    <input type="text" id="company_name" v-model="info.company_name" class="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col m6">
                                <div class="input-field">
                                    <label for="phone">Phone</label>
                                    <input type="text" id="phone" v-model="info.phone" class="" >
                                </div>
                            </div>
                            <div class="col m6">
                                <div class="input-field">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" v-model="info.email" class="" required >
                                </div>
                            </div>
                        </div>

                        <div class="input-field">
                            <label for="how">How Did You Find Us?</label>
                            <input type="text" id="how" v-model="info.how" class="">
                        </div>

                        <div class="input-field">
                            <label for="message">Message</label>
                            <textarea type="text" id="message" v-model="info.message" data-length="200" class="materialize-textarea"></textarea>
                        </div>

                        <div class="input-field">
                            <input type="submit" @click="postContact" class="btn blue white-text" value="Submit">
                        </div>
                    </form>
                </div>
                {{ info.feedback }} <br/>
                {{ info.errors }}
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                info: {
                    name: '',
                    company_name: '',
                    phone: '',
                    email: '',
                    how: '',
                    message: '',
                    feedback: '',
                    errors: ''
                }
            }
        },

        methods: {
            postContact() {
                let self = this;
                axios.post('/contact', self.info)
                    .then(response => {
                        self.feedback = response.data.feedback
                    })
                    .catch(error => {
                        this.errors = error;
                        console.log(error)
                    })
            }
        }
    }
</script>