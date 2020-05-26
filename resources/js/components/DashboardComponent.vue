<template>
    <div class="row">
        <div class="col-md-12 ml-1">
            <h3 class="contact-title mt-4 mb-4 ml-5">Daten</h3>
            <!-- User Daten -->
            <div class="col-md-6">
                <div class="contact-content">
                    <div class="list-group bg-success">
                        <a href="#" class="list-group-item list-group-item-action active">
                            Persönliche Infos | UID : {{useruid}}
                        </a>
                        <a href="#" class="list-group-item list-group-item-action"><span
                            class="item-title">Anrede</span><span class="item">{{profile.anrede ? profile.anrede : ''}}</span></a>
                        <a href="#" class="list-group-item list-group-item-action"><span
                            class="item-title">Vorname</span><span class="item">{{profile.vorname ? profile.vorname : ''}}</span></a>
                        <a href="#" class="list-group-item list-group-item-action"><span
                            class="item-title">Nachname</span><span class="item">{{profile.nachname ? profile.nachname : ''}}</span></a>
                        <a href="#" class="list-group-item list-group-item-action"><span class="item-title">email</span><span
                            class="item">{{ profile.email ? profile.email : '' }}</span></a>
                        <a href="#" class="list-group-item list-group-item-action"><span
                            class="item-title">Straße</span><span class="item">{{profile.StraßeHausnummer ? profile.StraßeHausnummer : ''}}</span></a>
                        <a href="#" class="list-group-item list-group-item-action"><span
                            class="item-title">Plz</span><span class="item">{{profile.PLZ ? profile.PLZ : ''}}</span></a>
                        <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Stadt</span><span
                            class="item">{{profile.Ort ? profile.Ort : ''}}</span></a>
                        <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Phone</span><span
                            class="item">{{ profile.phone ? profile.phone : '' }}</span></a>
                    </div>
                </div>
            </div>
            <!-- Pate Daten -->
            <div class="col-md-6">
                <div class="contact-content">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active">
                            Pate Infos
                        </a>
                        <a href="#" class="list-group-item list-group-item-action"><span
                            class="item-title">Anrede</span><span class="item">{{form.anrede_2 ? form.anrede_2 : ''}}</span></a>
                        <a href="#" class="list-group-item list-group-item-action"><span
                            class="item-title">Vorname</span><span
                            class="item">{{form.vorname_2 ? form.vorname_2 : ''}}</span></a>
                        <a href="#" class="list-group-item list-group-item-action"><span
                            class="item-title">Nachname</span><span
                            class="item">{{form.nachname_2 ? form.nachname_2 : ''}}</span></a>
                        <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Email</span><span
                            class="item">{{form.email_2 ? form.email_2 : ''}}</span></a>
                        <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Phone</span><span
                            class="item">{{form.phone_2 ? form.phone_2 : ''}}</span></a>
                        <a href="#" class="list-group-item list-group-item-action"><span
                            class="item-title">Straße</span><span class="item">{{form.strasse_2 ? form.strasse_2 : ''}}</span></a>
                        <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Stadt</span><span
                            class="item">{{form.Ort ? form.Ort : ''}}</span></a>
                        <a href="#" class="list-group-item list-group-item-action"><span
                            class="item-title">PLZ</span><span class="item">{{form.plz_2 ? form.plz_2 : ''}}</span></a>

                    </div>
                </div>
            </div>
        </div>
        <!-- Pate Form -->
        <div class="col-md-12 ml-2">
            <div class="well form-horizontal">
                <div class="form-group text-center mb-8 text-bold">
                    <button @click="userDataPaten()" class="btn btn-success px-6 mx-20">Kontaktdaten Schlü Paten</button>
                    <button @click="addIFM()" class="btn btn-success">Kontaktdaten IFM anlegen</button>
                </div>
                <div v-if="formShow">
                    <fieldset>
                        <hr>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Anrede</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i
                                    class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fullName"
                                                                                       placeholder="Anrede"
                                                                                       v-model="form.anrede"
                                                                                       class="form-control"
                                                                                       required="true"
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
                                                                                       class="form-control"
                                                                                       required="true"
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
                                                                                       class="form-control"
                                                                                       required="true"
                                                                                       value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Straße und Hausnummer</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i
                                    class="glyphicon glyphicon-home"></i></span><input id="city" name="city"
                                                                                       placeholder="Straßennummer"
                                                                                       class="form-control"
                                                                                       required="true"
                                                                                       v-model="form.StraßeHausnummer"
                                                                                       value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Stadt</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i
                                    class="glyphicon glyphicon-home"></i></span><input id="state" name="state"
                                                                                       placeholder="Stadt"
                                                                                       class="form-control"
                                                                                       required="true"
                                                                                       v-model="form.Ort"
                                                                                       value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">PLZ</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i
                                    class="glyphicon glyphicon-home"></i></span><input id="postcode" name="postcode"
                                                                                       placeholder="PLZ"
                                                                                       class="form-control"
                                                                                       required="true"
                                                                                       v-model="form.PLZ"
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
                                                                                           class="form-control"
                                                                                           required="true"
                                                                                           value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Telefonnummer</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i
                                    class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber"
                                                                                           name="phoneNumber"
                                                                                           placeholder="Telefonnummer"
                                                                                           v-model="form.phone"
                                                                                           class="form-control"
                                                                                           required="true"
                                                                                           value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group float-right mt-3 mb-3 mr-5 pr-5">
                            <button @click="formSubmit" class="btn btn-success">speichern</button>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div v-if="hasError" class="form-group float-right mt-3 mb-3 mr-5 pr-5">
                <p class="bg-red-500 text-white text-center">Bitte füllen Sie alle Eingabefelder aus , um
                    vorzuführen</p>
            </div>
            <div v-if="message_success" class="form-group float-right mt-3 mb-3 mr-5 pr-5">
                <p class="bg-green-500 text-white text-center">Ihre Pate wurde succesful angelegt :)</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['profiledata','useruid'],
        data: function () {

            return {
                hasError: false,
                message_success: false,
                form: {
                    id: this.id,
                    anrede: '',
                    vorname: '',
                    nachname: '',
                    email: '',
                    phone: '',
                    Ort: '',
                    StraßeHausnummer: '',
                    PLZ: '',
                    status: ''
                },
                formShow: false,
                profile: {}
            }
        },
        created(){
            this.profile = this.profiledata;
        },
        mounted() {
            this.form = this.profile;
        },
        methods: {
            formSubmit: function () {
                if (this.form.phone !== '' && this.form.email !== '' && this.form.plz !== "" && this.form.nachname !== '' && this.form.vorname !== '' && this.form.stadt !== '' && this.form.anrede !== '') {
                    axios.put('/Bestellung/create/' + this.form.id, this.form)
                        .then(function (response) {

                        });
                } else {
                    this.hasError = true;
                }
            },
            addIFM() {
                this.formShow = true;
            },
            userDataPaten(){
                this.formShow = false;
                this.form = this.profile;
                this.form.status = 'IFM';
                axios.put('/Bestellung/create/' + this.form.id,this.form)
                    .then(function (response) {
                        console.log('success')
                    });

            }
        }
    }
</script>
