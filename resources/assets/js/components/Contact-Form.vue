<template>

<div class="content">
    <h2 class="content-head is-center">"Professionalität ist unsere stärke"</h2>

    <div class="pure-g">
        <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
            <form method="POST" class="pure-form pure-form-stacked" v-on:submit.prevent="onSubmit">
                <fieldset>
                <label for="name">NAME:<span class="error" v-if="! newContact.name">*</span></label>
                <input type="text" name="name" id="name" class="form-control" v-model="newContact.name">

                <label for="email">E-MAIL:<span class="error" v-if="! newContact.email">*</span></label>
                <input type="text" name="email" id="email" class="form-control" v-model="newContact.email">


                <label for="message">NACHRICHT:<span class="error" v-if="! newContact.message">*</span></label>
                <textarea type="text" rows="4" cols="50" name="message" id="message" class="form-control" v-model="newContact.message"></textarea>

                <div class="form-group" v-if="! submitted">
                    <button v-on:click="onSubmitForm" class="pure-button" :disabled = "errors">
                        SENDEN
                    </button>
                </div>

                <div class="alert alert-success" v-if="submitted">Danke!</div>
            </fieldset>
            </form>
        </div>

        <div class="l-box-lrg pure-u-1 pure-u-md-3-5">
            <h4>HIER FINDEN SIE UNS:</h4>

            <div class="contact">
                <h5>SUDITUBAU</h5>
                    <span>Pulverhäuserweg 83,64295 Darmstadt<br>
                    Deutschland</span>
                <h5>Telefon</h5>
                    <span>+49 152 15667119<br>
                    +49 176 26656952</span>
                <h5>E-mail</h5>
                <span>suditubau@gmail.com</span>
            </div>
        </div>
    </div>

</div>

</template>

<script>
    export default {
        data() {
            return {
                newContact: { name: '', email: '', message: '' },
                submitted: false
            };
        },
        computed: {
            errors: function() {
                for (var key in this.newContact) {
                    if ( ! this.newContact[key]) return true;
                }
                return false;
            }
        },

        methods: {
            onSubmitForm: function(e) {
                e.preventDefault();

                var contact = this.newContact;

                this.newContact = { name: '', email: '', message: '' };
                this.submitted = true;

                this.$http.post('/api/contact', contact);
            }
        }
    }
</script>