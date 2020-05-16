<template>
    <div class="container">
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step col-xs-2">
                    <a class="btn btn-default btn-circle" href="#step-1" type="button">1</a>
                    <p><small>Persönliche Daten</small></p>
                </div>
                <div class="stepwizard-step col-xs-2">
                    <a class="btn btn-default btn-circle" href="#step-2" type="button">2</a>
                    <p><small>Rechnungsadresse</small></p>
                </div>
                <div class="stepwizard-step col-xs-2">
                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                    <p><small>
                        Farbe des SCHLÜ
                    </small></p>
                </div>
                <div class="stepwizard-step col-xs-2">
                    <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                    <p><small>Wie Wollen Sie gerne bezahlen ?</small></p>
                </div>
            </div>
        </div>
        <div class="">
            <div class="panel panel-primary setup-content" id="step-1" v-if="step1.status">
                <div class="panel-heading">
                    <h3 class="panel-title">Persönliche Daten</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Anrede</label>
                                <v-select v-model="step1.anrede" :options="step1.options"></v-select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Telefonnummer</label>
                                <VuePhoneNumberInput :preferred-countries="['DE' ,'FR', 'BE']"
                                                     :translations="step2.translations" v-model="step1.phone"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Vorname</label>
                                <input class="form-control alert-error" maxlength="100" placeholder="Vorname"
                                       type="text"
                                       v-model="step1.vorname"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Nachname</label>
                                <input class="form-control" maxlength="100" placeholder="Nachname" type="text"
                                       v-model="step1.nachname"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input class="form-control" maxlength="100" placeholder="Email Adresse" type="text"
                                       v-model="step1.email"/>
                            </div>
                        </div>
                    </div>
                    <button @click="steps1Validate()" class="btn btn-primary nextBtn pull-right" type="button">Weiter
                    </button>
                </div>
            </div>
            <div class="panel panel-primary setup-content" id="step-2" v-if="step2.status">
                <div class="panel-heading">
                    <span class="panel-title">Liefer-Adresse</span>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Straße Hausnummer </label>
                                <input class="form-control alert-error" maxlength="100" placeholder="Straße Hausnummer"
                                       type="text"
                                       v-model="step2.StraßeHausnummer"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Ort</label>
                                <input class="form-control" maxlength="100" placeholder="Ort" type="text"
                                       v-model="step2.Ort"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">PLZ</label>
                                <input class="form-control" maxlength="100" placeholder="PLZ" type="text"
                                       v-model="step2.PLZ"/>
                            </div>
                        </div>
                    </div>
                    <button @click="steps2Validate()" class="btn btn-primary nextBtn pull-right" type="button">Weiter
                    </button>
                </div>
            </div>
            <div class="panel panel-primary setup-content" id="step-3" v-if="step3.status">
                <div class="panel-heading">
                    <h3 class="panel-title">Farbe des SCHLÜ</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Farbe des SCHLÜ</label>
                                <v-select v-model="step3.farbe" :options="step3.options"></v-select>
                            </div>
                        </div>
                    </div>
                    <button @click="steps3Validate()" class="btn btn-primary nextBtn pull-right" type="button">Weiter
                    </button>
                </div>
            </div>
            <div class="panel panel-primary setup-content" id="step-4" v-if="step4.status">
                <div class="panel-heading">
                    <h3 class="panel-title">Wie Wollen Sie gerne bezahlen ?</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6 option text-center">
                            <span>Bank</span>
                            <input type="radio" name="bank" :value="false" v-model="step4.paypal">
                        </div>
                        <div class="col-md-6 option text-center">
                            <span>Paypal</span>
                            <input type="radio" name="paypal" :value="true" v-model="step4.paypal">
                        </div>
                        <div v-if="!step4.paypal" class="row">
                            <div class="col-md-6 bank">
                                <div class="form-group">
                                    <label class="control-label">Bankname</label>
                                    <input class="form-control" maxlength="200" placeholder="Bankname" type="text"
                                           v-model="step4.Bankname"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">IBAN</label>
                                    <input class="form-control" maxlength="200" placeholder="IBAN" type="text"
                                           v-model="step4.Iban"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">BIC</label>
                                    <input class="form-control" maxlength="200" placeholder="BIC" type="text"
                                           v-model="step4.Bic"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row"></div>
                    <button @click="submitForm()" class="btn btn-primary nextBtn pull-right submit-btn" type="button">
                        Abschicken
                    </button>
                </div>
            </div>
        </div>
        <div class="form-group has_error" v-if="error.status">
            <p class="has_error">{{error.message}}<i
                class="fas fa-exclamation-circle"></i></p>
        </div>
        <div class="form-group bg-success" v-if="success_message.status">
            <p class="success-message">{{success_message.message}}<i
                class="fas fa-exclamation-circle"></i></p>
        </div>
        <div class="form-group has_error" v-if="emailExist.status">
            <p class="has_error">{{emailExist.message}}<i
                class="fas fa-exclamation-circle"></i></p>
        </div>
    </div>
</template>

<script>
    import VuePhoneNumberInput from 'vue-phone-number-input';
    import 'vue-phone-number-input/dist/vue-phone-number-input.css';
    import vSelect from "vue-select";
    import "vue-select/dist/vue-select.css";

    export default {
        components: {
            VuePhoneNumberInput,
            vSelect
        },
        data: function () {
            return {
                step1: {
                    'status': true,
                    'anrede': null,
                    'vorname': null,
                    'nachname': null,
                    'email': null,
                    'phone': null,
                    'options': ['Diverse', 'Herr', 'Frau']

                },
                step2: {
                    'status': false,
                    'StraßeHausnummer': null,
                    'Ort': null,
                    'PLZ': null,
                    translations: {
                        countrySelectorLabel: 'Länder Code',
                        countrySelectorError: 'Wählen ein Land aus',
                        phoneNumberLabel: 'Telefonnummer',
                        example: 'Beispiel',
                        loader: true,
                    }
                },
                step3: {
                    'status': false,
                    'farbe': null,
                    'options': [
                        'Green',
                        'rot',
                        'gelb',
                        'blue',
                        'schwarz',
                        'orange',
                    ],
                },
                step4: {'status': false, 'Iban': null, 'Bankname': null, 'Bic': null,paypal:false},
                error: {
                    'status': false,
                    'message': 'Bitte füllen Sie alle benötigten Eingabefelder aus, bevor Sie fortfahren.',
                    'email': 'Die eingegebene E-mail Adresse ist ungültig !.'
                },
                success_message: {status:false,message:'Ihre Bestellung wurde erfolgreich, Sie kriegen eine Bestätigung per Mail und Die Loginsdaten um ihre Pate anzulegen.'},
                emailExist:{status:false,message:'Die Daten, die Sie eingegeben haben befinden sich schon in unsere Datenbank, bitte prüfen Sie nochmals.'}
            }
        },
        methods: {
            validEmail: function (email) {
                var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
            },
            steps1Validate: function () {
                if (this.step1.anrede !== null && this.step1.vorname !== null && this.step1.nachname !== null && this.step1.email !== null && this.step1.phone !== null) {
                    if (!this.validEmail(this.step1.email)) {
                        this.error.status = true;
                    } else {
                        this.error.status = false;
                        this.step1.status = false;
                        this.step2.status = true;
                    }
                } else {
                    this.error.status = true;
                }
            },
            steps2Validate: function () {
                if (this.step2.StraßeHausnummer !== null && this.step2.Ort !== null && this.step2.PLZ !== null) {

                    this.error.status = false;
                    this.step1.status = false;
                    this.step2.status = false;
                    this.step3.status = true;
                } else {
                    this.error.status = true;
                }
            },
            steps3Validate: function () {
                if (this.step3.Strom_zaelernummer !== null)
                {
                    this.error.status = false;
                    this.step1.status = false;
                    this.step2.status = false;
                    this.step3.status = false;
                    this.step4.status = true;
                } else {
                    this.error.status = true;
                }

            },
            steps4Validate: function () {
                if (this.step4.Iban !== null || this.step4.Bankname !== null || this.step4.Bic !== null) {
                    this.error.status = false;
                    this.step4.status = false;
                    this.step1.status = false;
                    this.step2.status = false;
                    this.step3.status = false;
                    this.step5.status = true;
                } else {
                    this.error.status = true;
                }
            },
            submitForm: function () {
                axios.post('/Bestellung/create', {
                    'anrede':this.step1.anrede,
                    'vorname': this.step1.vorname,
                    'nachname':this.step1.nachname,
                    'email':this.step1.email,
                    'phone':this.step1.phone,
                    'StraßeHausnummer':this.step2.StraßeHausnummer,
                    'Ort':this.step2.Ort,
                    'PLZ':this.step2.PLZ,
                    'farbe': this.step3.farbe,
                    'paypal': this.step4.paypal,
                    'bankname':this.step4.Bankname,
                    'Bic': this.step4.Bic,
                    'Iban':this.step4.Iban
                })
                    .then((data) => {
                        window.location = data.data;
                    }).catch((error) => {
                    this.emailExist.status = true;
                });
            },
            newPate: function () {
                this.step4.newpate = !this.step4.newpate;
            },
        },
    }
</script>
<style scoped>
    .panel-heading {
        display: flex;
        justify-content: space-around;
    }
    .btn-default {
        color: #1a202c !important;
        border: 2px solid #1a202c !important;
    }
    .btn-default:before, .btn-default:after {
        background-color: #1a202c !important;
    }

    .kleintext {
        font-size: 16px;
        color: #2b542c;
        margin-left: 1px;
    }

    .has_error {
        background-color: #da1717;
        color: white !important;
    }
    .success-message{
        background-color: green;
        color: white !important;
        text-align: center;
    }

    form {
        width: 100%;
        float: left;
        margin: 60px;
        margin-bottom: 40px;
        border-color: #1a202c;
    }

    .panel-primary {
        border-color: #1a202c !important;
    }

    .stepwizard-step p {
        margin-top: 0px;
        color: #666;
    }

    .stepwizard-row {
        display: table-row;
    }

    .stepwizard {
        display: table;
        width: 128%;
        position: relative;
        margin-bottom: 20px;
    }

    .btn-primary {
        background-color: #1a202c !important;
        border-color: #1a202c !important;
        color: white !important;
        border-radius: 5px !important;
    }

    .stepwizard-step button[disabled] {
        /*opacity: 1 !important;
        filter: alpha(opacity=100) !important;*/
    }

    .stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
        opacity: 1 !important;
        color: #bbb;
    }

    .stepwizard-row:before {
        top: 14px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 100%;
        height: 1px;
        background-color: #ccc;
        z-index: 0;
    }

    .stepwizard-step {
        display: table-cell;
        text-align: center;
        position: relative;
    }
    .bank{
        padding-left: 36px;
        padding-top: 20px;
    }
    .submit-btn{
        margin-top: 7.25rem;
    }
</style>
