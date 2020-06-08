<template>
    <div class="row">
        <div class="col-md-12 ml-1">
            <h3 class="contact-title mt-4 mb-4 ml-5">Daten</h3>
            <!-- User Daten -->
            <div class="col-md-6">
                <div class="contact-content">
                    <div class="list-group bg-success">
                        <a href="#" class="list-group-item list-group-item-action active">
                            Persönliche Infos | UID : {{ useruid }}
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
                        <div v-if="zeige">
                            <a href="#" class="list-group-item list-group-item-action"><span
                                class="item-title">Anrede</span><span class="item">{{form.anrede_2 ? form.anrede_2 : ''}}</span></a>
                            <a href="#" class="list-group-item list-group-item-action"><span
                                class="item-title">Vorname</span><span
                                class="item">{{form.vorname_2 ? form.vorname_2 : ''}}</span></a>
                            <a href="#" class="list-group-item list-group-item-action"><span
                                class="item-title">Nachname</span><span
                                class="item">{{form.nachname_2 ? form.nachname_2 : ''}}</span></a>
                            <a href="#" class="list-group-item list-group-item-action"><span
                                class="item-title">Email</span><span
                                class="item">{{form.email_2 ? form.email_2 : ''}}</span></a>
                            <a href="#" class="list-group-item list-group-item-action"><span
                                class="item-title">Phone</span><span
                                class="item">{{form.phone_2 ? form.phone_2 : ''}}</span></a>
                        </div>
                        <div v-if="!zeige">
                            <a href="#" class="list-group-item list-group-item-action"><span class="item-title">Firmaname</span><span
                                class="item">IchFindeMeinem</span></a>
                            <a href="#" class="list-group-item list-group-item-action"><span
                                class="item-title">Email</span><span class="item">kontakt@ichfindemeinen.de</span></a>
                            <a href="#" class="list-group-item list-group-item-action"><span
                                class="item-title">PLZ</span><span
                                class="item">12053</span></a>
                            <a href="#" class="list-group-item list-group-item-action"><span
                                class="item-title">Stadt</span><span
                                class="item">Berlin</span></a>
                            <a href="#" class="list-group-item list-group-item-action"><span
                                class="item-title">Telefon</span><span
                                class="item">+49 30 62933447</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pate Form -->
        <div class="col-md-12 ml-2">
            <div class="well form-horizontal">
                <div class="form-group text-center mb-8 text-bold">
                    <button @click="userDataPaten()" class="btn btn-success mb-3">Schlü Paten</button>
                    <button @click="addIFM()" class="btn btn-success mb-3">Daten IFM anlegen</button>
                    <button @click="ifmPate()" class="btn btn-success mb-3">IFM als Pate</button>
                </div>
                <div v-if="formShow">
                    <fieldset>
                        <hr>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Anrede</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i
                                    class="glyphicon glyphicon-user"></i></span><input placeholder="Anrede"
                                                                                       v-model="formdata.anrede"
                                                                                       class="form-control"
                                                                                       required="true"
                                                                                       value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Vorname</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i
                                    class="glyphicon glyphicon-user"></i></span><input placeholder="Vorname"
                                                                                       v-model="formdata.vorname"
                                                                                       class="form-control"
                                                                                       required="true"
                                                                                       value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nachname</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i
                                    class="glyphicon glyphicon-user"></i></span><input placeholder="Nachname"
                                                                                       v-model="formdata.nachname"
                                                                                       class="form-control"
                                                                                       required="true"
                                                                                       value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Email Optional </label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input placeholder="Email Adresse" v-model="formdata.email" class="form-control" type="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Telefonnummer</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon">
                                    <i class="glyphicon glyphicon-earphone"></i></span><input
                                    placeholder="Telefonnummer"
                                    v-model="formdata.phone"
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
                zeige: true,
                formdata: {
                    id: null,
                    anrede: "",
                    vorname: "",
                    nachname: "",
                    email: "",
                    phone: "",
                },
                message_success: false,
                form: {
                    id: this.id,
                    anrede: '',
                    vorname: '',
                    nachname: '',
                    email: '',
                    phone: '',
                    Firma_name: ''
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
            if (this.profile.status === 0) {
                this.zeige = false;
            }
        },
        methods: {
            formSubmit: function () {
                let el = this;
                if (this.formdata.phone !== '' && this.formdata.email !== '' && this.formdata.nachname !== '' && this.form.vorname !== '' && this.form.anrede !== '') {
                    this.formdata.id = this.form.id;
                    axios.put('/Bestellung/create/' + this.form.id, el.formdata)
                        .then(function (response) {
                            el.formdata.anrede = '';
                            el.formdata.phone = '';
                            el.formdata.email = '';
                            el.formdata.nachname = '';
                            el.formdata.vorname = '';

                            el.zeige = true;
                        });
                } else {
                    this.hasError = true;
                }
            },
            addIFM() {
                this.formShow = true;
            },
            ifmPate() {
                let el = this;
                el.form.Firma_name = 'IchFindeMeinem';
                axios.put('/Bestellung/create/' + this.form.id, el.form)
                    .then(function (response) {
                        el.zeige = false;
                    });
            },
            userDataPaten() {
                this.formShow = false;
                this.form = this.profile;
                this.form.status = 'IFM';
                axios.put('/Bestellung/create/' + this.form.id, this.form)
                    .then(function (response) {
                        console.log('success')
                    });

            }
        }
    }
</script>
