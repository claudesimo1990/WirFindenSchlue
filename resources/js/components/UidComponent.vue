<template>
    <div class="container mt-4">
        <div class="row mb-5">
            <div class="col-md-4">
                <p>
                    <input type="text" v-model="inhalt" class="form-control" placeholder="Content">
                </p>
                <input @click="save()" type="button" class="form-control btn btn-success" value="speichern">
            </div>
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
        </div>
        <table>
            <tr>
                <th class="text-center">N°</th>
                <th class="text-center">Content</th>
                <th class="text-center">Status</th>
                <th class="text-center">actions</th>
            </tr>
            <tr v-for="(i,index) in uids">
                <td class="text-center">{{index + 1}}</td>
                <td class="text-center">{{i.content}}</td>
                <td class="text-center">{{i.status == 0 ? 'Frei': 'benutzt'}}</td>
                <td class="action">
                    <span>
                        <input class="btn btn-info" type="button" value="Update">
                    </span>
                    <span>
                        <input class="btn btn-danger" type="button" value="löschen">
                    </span>
                </td>
            </tr>
        </table>
    </div>

</template>

<script>
    export default {
        props: ['datauids'],
        data: function () {
            return {
                nber: '',
                inhalt: '',

                uids: this.datauids,
                uid: {
                    nummer: null,
                    content: null,
                    date: null,
                    status: false
                },
                error: {
                    status: false,
                    text: 'Die eingegebene UIDS ist schon vergeben, geben Sien einen anderen ein, Bitte !'
                },
                success: {
                    status: false,
                    text: 'Super die Daten sind richtig in der Datenbank gespeichert!'
                }

            }
        }, methods: {
            formatDate: function (date) {
                var strArray = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                var d = date.getDate();
                var m = strArray[date.getMonth()];
                var y = date.getFullYear();
                return '' + (d <= 9 ? '0' + d : d) + '-' + m + '-' + y;
            },
            save: function () {
                if (this.inhalt !== '') {
                    this.uid.nummer = this.nber;
                    this.uid.content = this.inhalt;
                    this.uid.date = this.formatDate(new Date());

                    axios.post('/admin/uuids', this.uid)
                        .then(res => {
                            this.uids.push(this.uid);
                            this.error.status = false;
                            this.success.status = true;
                            //data entleren
                            this.inhalt = '';
                        }).catch(err => {
                        this.error.status = true;
                    });

                }

            },
        },
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
