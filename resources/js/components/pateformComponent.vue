<template>
    <div class="col-md-12 ml-2">
        <h3 class="contact-title mt-4 mb-4">neue Pate anlegen</h3>
        <div class="well form-horizontal">
            <fieldset>
                <div class="form-group">
                    <label class="col-md-4 control-label">Anrede</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i
                            class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fullName"
                                                                               placeholder="Anrede"
                                                                               v-model="form.anrede"
                                                                               class="form-control" required="true"
                                                                               value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Vorname</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i
                            class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fullName"
                                                                               placeholder="Vorname"
                                                                               v-model="form.vorname"
                                                                               class="form-control" required="true"
                                                                               value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Nachname</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i
                            class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fullName"
                                                                               placeholder="Nachname"
                                                                               v-model="form.nachname"
                                                                               class="form-control" required="true"
                                                                               value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Straße und Hausnummer</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i
                            class="glyphicon glyphicon-home"></i></span><input id="city" name="city" placeholder="Straßennummer"
                                                                               class="form-control" required="true"
                                                                               v-model="form.straße"
                                                                               value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Stadt</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i
                            class="glyphicon glyphicon-home"></i></span><input id="state" name="state"
                                                                               placeholder="Stadt"
                                                                               class="form-control" required="true"
                                                                               v-model="form.stadt"
                                                                               value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">PLZ</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i
                            class="glyphicon glyphicon-home"></i></span><input id="postcode" name="postcode"
                                                                               placeholder="PLZ"
                                                                               class="form-control" required="true"
                                                                               v-model="form.plz"
                                                                               value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Email Optional </label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i
                            class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email"
                                                                                   placeholder="Email"
                                                                                   v-model="form.email"
                                                                                   class="form-control" required="true"
                                                                                   value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Telefonnummer</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i
                            class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber" name="phoneNumber"
                                                                                   placeholder="Telefonnummer"
                                                                                   v-model="form.phone"
                                                                                   class="form-control" required="true"
                                                                                   value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group float-right mt-3 mb-3 mr-5 pr-5">
                    <button @click="formSubmit" class="btn btn-success">speichern</button>
                </div>
            </fieldset>
        </div>
        <div v-if="hasError" class="form-group float-right mt-3 mb-3 mr-5 pr-5">
            <p class="bg-red-500 text-white text-center">Bitte füllen Sie alle Eingabefelder aus , um vorzuführen</p>
        </div>
        <div v-if="message_success" class="form-group float-right mt-3 mb-3 mr-5 pr-5">
            <p class="bg-green-500 text-white text-center">Ihre Pate wurde succesful angelegt :)</p>
        </div>
    </div>
</template>
<script>
export default {
    props: ['id'],
    data: function () {

        return{
            hasError: false,
            message_success: false,
            form: {
                id: this.id,
                anrede: '',
                vorname: '',
                nachname: '',
                email: '',
                phone: '',
                stadt: '',
                straße: '',
                plz: ''
            }
        }
    },
    methods:{
        formSubmit: function () {
            if (this.form.phone !== '' && this.form.email !== '' && this.form.plz !== "" && this.form.nachname !== '' && this.form.vorname !== '' && this.form.stadt !== '' && this.form.anrede !== ''){
                axios.put('/Bestellung/create/'+this.id,this.form)
                    .then(function(response){
                        window.location = response.data;
                    });
            }else {
                this.hasError = true;
            }
        }
    }
}
</script>
