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
                    <input type="text" v-model="inhalt" class="form-control" placeholder="Neue UID Erfassen">
                </p>
                <p v-show="update_btn">
                    <input type="text" v-model="status" class="form-control" placeholder="Status">
                    <span class="badge badge-success mb-4 mt-1 mr-4">0 bedeutet Frei</span>
                    <span class="badge badge-danger mb-4 mt-4 ml-3">1 bedeutet vergeben</span>
                </p>
                <div v-show="speichern_btn" class="div mt-4">
                    <input @click="save()" type="button" class="form-control btn btn-success" value="Speichern">
                </div>
                <div v-show="update_btn" class="div mt-4">
                    <input @click="updatesave()" type="button" class="form-control btn btn-success" value="Update">
                </div>
            </div>
        </div>
        <table>
            <tr>
                <th class="text-center">Index</th>
                <th class="text-center">Content</th>
                <th class="text-center">Status</th>
                <th class="text-center">actions</th>
            </tr>
            <tr v-for="(i,index) in uids" v-bind:key="i.id">
                <td class="text-center">{{index +1 }}</td>
                <td class="text-center">{{i.content}}</td>
                <td class="text-center">{{i.status == 0 ? 'Frei': 'benutzt'}}</td>
                <td class="action">
                    <span>
                        <input @click="update(i.id,index)" class="btn btn-info" type="button" value="Update">
                    </span>
                    <span>
                        <input @click="remove(i.id,index)" class="btn btn-danger" type="button" value="löschen">
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
                status: null,

                uids: this.datauids,
                uid: {
                    nummer: null,
                    content: null,
                    date: null,
                    status: false
                },
                error: {
                    status: false,
                    text: 'Geben Sie hier bitte neue zur Verfügung stehende UIDs SCHLÜ ein.'
                },
                success: {
                    status: false,
                    text: 'Super!'
                },
                speichern_btn: true,
                update_btn: false,
                el_id: null,
                el_index: null,

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
            update: function (id, index) {
                this.el_id = id;
                this.el_index = index;
                this.speichern_btn = false;
                this.update_btn = true;
                this.inhalt = this.uids[index].content;
                this.status = this.uids[index].status;
            },
            updatesave: function () {

                axios.put('/admin/uuids/' + this.el_id, {
                    'content': this.inhalt,
                    'status': this.status,
                    'id': this.el_id,
                })
                    .then(res => {
                        this.uids[this.el_index].content = this.inhalt;
                        this.uids[this.el_index].status = this.status;
                        this.inhalt = '';
                        this.status = '';
                        this.update_btn = false;
                        this.speichern_btn = true;
                        this.error.status = false;
                    }).catch(err => {
                    this.error.status = true;
                });
            },
            remove: function (id, index) {
                if (confirm('willst du wirklich löschen')) {
                    axios.delete('/admin/uuids/' + id, {params: {id: id}})
                        .then(res => {
                            if(res.status == 200){
                                Vue.delete(this.uids, index)
                            }
                        }).catch(err => {
                        console.log('bitte laden sie die Seite neu')
                    });
                }
            }
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
