<template>
    <div class="container mt-4">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th class="text-center">N°</th>
                    <th class="text-center">anrede</th>
                    <th class="text-center">vorname</th>
                    <th class="text-center">nachname</th>
                    <th class="text-center">email</th>
                    <th class="text-center">telefon</th>
                    <th class="text-center">StraßeHausnummer</th>
                    <th class="text-center">Ort</th>
                    <th class="text-center">PLZ</th>
                    <th class="text-center">farbe</th>
                    <th class="text-center">vorname_2</th>
                    <th class="text-center">nachname_2</th>
                    <th class="text-center">phone_2</th>
                    <th class="text-center">anrede_2</th>
                    <th class="text-center">email_2</th>
                    <th class="text-center">created_at</th>
                    <th class="text-center">actions</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(i,index) in Orders">
                    <td class="text-center">{{i.id}}</td>
                    <td class="text-center">{{i.anrede}}</td>
                    <td class="text-center">{{i.vorname}}</td>
                    <td class="text-center">{{i.nachname}}</td>
                    <td class="text-center">{{i.email}}</td>
                    <td class="text-center">{{i.phone}}</td>
                    <td class="text-center">{{i.StraßeHausnummer}}</td>
                    <td class="text-center">{{i.Ort}}</td>
                    <td class="text-center">{{i.PLZ}}</td>
                    <td class="text-center">{{i.farbe}}</td>
                    <td class="text-center">{{i.vorname_2}}</td>
                    <td class="text-center">{{i.nachname_2}}</td>
                    <td class="text-center">{{i.phone_2}}</td>
                    <td class="text-center">{{i.anrede_2}}</td>
                    <td class="text-center">{{i.email_2}}</td>
                    <td class="text-center">{{i.created_at}}</td>
                    <td class="action">
                        <span><input @click="remove(i.id,index)" class="btn btn-danger" type="button" value="löschen">
                    </span>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</template>

<script>
    export default {
        props: ['datauids'],
        data: function () {
            return {
                Orders: [],

            }
        }, methods: {
            remove: function (id, index) {
                if (confirm('willst du wirklich löschen')) {
                    axios.delete('/admin/bestellungen/' + id, {params: {id: id}})
                        .then(res => {
                            if (res.status == 200) {
                                this.Orders.splice(index, 1);
                            }
                        }).catch(err => {
                        console.log('bitte laden sie die Seite neu')
                    });
                }
            }
        },
        mounted() {
            axios.get('/allOrders')
                .then(res => {
                    this.Orders = res.data;
                }).catch(err => {
                console.log(err)
            });
        }
    }
</script>
<style scoped>
    .form-new {
        display: flex;
        justify-content: space-around;
    }

    .action {
        display: flex;
        justify-content: space-around;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
