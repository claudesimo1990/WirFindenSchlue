<template>
    <div class="container mt-4">
        <div class="row mb-5">
            <div class="col-md-4">
                <div v-show="error.status" class="col-md-8">
                    <p class="alert alert-danger">
                        {{error.text}}
                    </p>
                </div>
                <div v-show="success.status" class="col-md-8">
                    <p class="alert alert-success">
                        {{success.text}}
                    </p>
                </div>
                <p>
                    <input type="text" v-model="amount" class="form-control" placeholder="Neue Paypal Amount">
                </p>
                <div class="div">
                    <input @click="save()" type="button" class="form-control btn btn-success" value="Speichern">
                </div>
            </div>
        </div>
        <table>
            <tr>
                <th class="text-center">paypal Amount</th>
            </tr>
            <tr>
                <td class="text-center">{{ amount }} EUR</td>
            </tr>
        </table>
    </div>

</template>

<script>
    export default {
        props: ['paypal'],
        data: function () {
            return {
                amount: this.paypal,
                success:{
                    status: false,
                    text: 'Der neue Wert wurde gespeichert !'
                },
                error:{
                    status: false,
                    text: 'etwas ist fehlgeschlagen !'
                }
            }
        }, methods: {
            save: function () {
                if (this.amount !== '') {
                    axios.post('/admin/paypal', {'amount': this.amount})
                        .then(res => {
                            this.success.status = true;
                        }).catch(err => {
                        this.error.status = true;
                    });

                }

            }
        },
    }
</script>
<style scoped>
    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    .paypal-amount {
        float: right;
    }
</style>
