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
                    <input type="text" v-model="username" class="form-control" placeholder="Name">
                </p>
                <p>
                    <input type="text" v-model="email_addresse" class="form-control" placeholder="Email">
                </p>
                <p>
                    <input type="text" v-model="new_uid" class="form-control" placeholder="UID">
                </p>
                <div v-show="speichern_btn" class="div">
                    <input @click="save()" type="button" class="form-control btn btn-success" value="Speichern">
                </div>
                <div v-show="update_btn" class="div">
                    <input @click="updatesave()" type="button" class="form-control btn btn-success" value="Update">
                </div>
            </div>
        </div>
        <table>
            <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Name</th>
                <th class="text-center">Email</th>
                <th class="text-center">Verify?</th>
                <th class="text-center">UID</th>
                <th class="text-center">Ramdom Password</th>
                <th class="text-center">Actions</th>
            </tr>
            <tr v-for="(i,index) in users">
                <td class="text-center">{{i.id}}</td>
                <td class="text-center">{{i.name}}</td>
                <td class="text-center">{{i.email}}</td>
                <td class="text-center">{{i.email_verified_at ? 'Ja schon' : 'noch nicht'}}</td>
                <td class="text-center">{{i.uid ? i.uid : 'Keine'}}</td>
                <td class="text-center">{{i.name === 'Martin' ? '': i.password}}</td>
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
        data: function () {

            return {
                'username': '',
                'email_addresse': '',
                'new_uid': '',

                users: [],

                user: {
                    'name': '',
                    'email': '',
                    'UID': '',
                    'verify': false,
                },
                error: {
                    status: false,
                    text: 'Oups etwas ist fehlgeschlagen !!.'
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
        },
        methods: {
            save: function () {
                if (this.username.trim().length !== 0 && this.email_addresse.trim().length !== 0) {
                    this.user.name = this.username;
                    this.user.email = this.email_addresse;
                    this.user.UID = this.new_uid;
                    this.user.verify = false;

                    axios.post('/admin/users/store', this.user)
                        .then(res => {
                            this.users.push(this.user);
                            this.error.status = false;
                            this.success.status = true;
                            //data entleren
                            this.username = '';
                            this.email_addresse = '';
                            this.new_uid = '';
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
                            if (res.status == 200) {
                                this.uids.splice(index, 1);
                            }
                        }).catch(err => {
                        console.log('bitte laden sie die Seite neu')
                    });
                }
            }
        },
        mounted() {
            axios.get('/admin/allUsers')
                .then(res => {
                    this.users = res.data;
                }).catch(err => {
                console.log(err)
            });
        }
    }

</script>

<style scoped>
    .action{
        display: flex;
        justify-content:space-around;
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
