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
                    <p><small> Daten zum Paten</small></p>
                </div>
                <div class="stepwizard-step col-xs-2">
                    <a class="btn btn-default btn-circle" disabled="disabled" href="#step-5" type="button">5</a>
                    <p><small>Bezahlung</small></p>
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
                                                     :translations="step2.translations" v-model="step1.telefonnummer"/>
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
                    <h3 class="panel-title">Daten zum Paten</h3>
                </div>
                <div class="row">
                    <div class="col-md-6 float-left">
                        <small class="kleintext">Mein Schlü Pate soll IFM stellvertretend sein</small>
                        <input v-model="step4.pate_status" class="morebutton" type="checkbox">
                    </div>
                    <div class="col-md-6">
                        <small class="kleintext">Soll der Pate für meinen Schlü sein</small>
                        <input @click="newPate()" class="morebutton" type="checkbox">
                        <div v-if="step4.newpate" class="mt-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Anrede</label>
                                        <v-select v-model="step1.anrede" :options="step1.options"></v-select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Vorname</label>
                                        <input class="form-control" maxlength="200"
                                               placeholder="Vorname"
                                               type="text"/>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Nachname</label>
                                        <input class="form-control" maxlength="200"
                                               placeholder="Nachname"
                                               type="text"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">E-Mailadresse*</label>
                                        <input class="form-control" maxlength="200"
                                               placeholder="E-Mailadresse"
                                               type="text"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Telefon*</label>
                                        <VuePhoneNumberInput :preferred-countries="['DE' ,'FR', 'BE']"
                                                             :translations="step2.translations"
                                                             v-model="step1.telefonnummer"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <button @click="steps4Validate()" class="btn btn-primary nextBtn pull-right" type="button">Weiter
                    </button>
                </div>
            </div>
        </div>
        <div class="panel panel-primary setup-content" id="step-5" v-if="step5.status">
            <div class="panel-heading">
                <h3 class="panel-title">Bankdaten</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
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
                <button @click="steps4Validate()" class="btn btn-primary nextBtn pull-right" type="button">
                    Abschicken
                </button>
            </div>
        </div>
        <div class="form-group has_error" v-if="error.status">
            <p class="has_error">{{error.message}}<i
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
                step4: {'status': false, 'pate': false, 'newpate': false,'vorname_2':null,'nachname_2':null,'phone_2':null,'anrede_2':null,'email':null},
                step5: {'status': false, 'Iban': null, 'Bankname': null, 'Bic': null},
                error: {
                    'status': false,
                    'message': 'Bitte füllen Sie alle benötigten Eingabefelder aus, bevor Sie fortfahren.',
                    'email': 'Die eingegebene E-mail Adresse ist ungültig !.'
                },
                signaturData: null,
            }
        },
        methods: {
            validEmail: function (email) {
                var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
            },
            steps1Validate: function () {
                if (this.step1.vorname !== null || this.step1.nachname !== null || this.step1.email !== null || this.step1.phone !== null || this.step1.geburtsdatum !== null) {
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
                if (this.step2.StraßeHausnummer !== null || this.step2.Ort !== null || this.step2.PLZ !== null) {

                    this.error.status = false;
                    this.step1.status = false;
                    this.step2.status = false;
                    this.step3.status = true;
                } else {
                    this.error.status = true;
                }
            },
            steps3Validate: function () {
                if (this.step3.Strom_zaelernummer !== null || this.step3.kundenummeraktStromAnbieter !== null || this.step3.kundenummeraktGasAnbieter !== null) {
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
            steps5Validate: function () {
                if (this.step5.unterschrift === true) {
                    this.error = false;
                    this.step1.status = false;
                    this.step2.status = false;
                    this.step3.status = false;
                    this.step4.status = false;
                } else {

                }
            },
            submit: function () {
                axios.post('/bestellung', {
                    'step1': this.step1,
                    'step2': this.step2,
                    'step3': this.step3,
                    'step4': this.step4,
                    'step5': this.step5
                })
                    .then((response) => {
                        console.log(response);
                    })
            },
            useGas: function () {
                this.step3.gas = !this.step3.gas;
            },
            newPate: function () {
                this.step4.newpate = !this.step4.newpate;
            },
            datepicker: function () {
                console.log('ca marche');
            }
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
</style>
