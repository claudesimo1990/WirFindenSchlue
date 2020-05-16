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
                    <input type="text" v-model="email" class="form-control" placeholder="Email">
                </p>
                <p>
                    <input type="text" v-model="uid" class="form-control" placeholder="UID">
                </p>
                <div class="div">
                    <input @click="updatesave()" type="button" class="form-control btn btn-success" value="Speichern">
                </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h4 class="bg-info text-center">Verfügbare UIDS</h4>
                <hr>
                <table>
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">UID</th>
                    </tr>
                    <tr v-for="(i,index) in getAllUids">
                        <td v-if="i.status == 0" class="text-center">{{i.id}}</td>
                        <td v-if="i.status == 0" class="text-center">{{i.content}}</td>
                    </tr>
                </table>
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
                <td class="text-center">{{i.UID ? i.UID : 'Keine'}}</td>
                <td class="text-center">{{i.password.substring(0,8)}}</td>
                <td class="action">
                    <span>
                        <input @click="update(i.id,index)" class="btn btn-info" type="button" value="ADD UID">
                    </span>
                </td>
            </tr>
        </table>
    </div>

</template>

<script>
    import vuex from 'vuex';

    vuex.mapGetters([
        'getUidsFormGetters'
    ]);
    export default {
        data: function () {

            return {
                'username': '',
                'email': '',
                'uid': '',

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

                el_id: null,
                el_index: null,

            }
        },
        methods: {
            update: function (id, index) {
                console.log(id, this.users[index]);
                this.el_id = id;
                this.el_index = index;

                this.username = this.users[index].name;
                this.email = this.users[index].email;
            },
            updatesave: function () {

                axios.put('/admin/users/update/' + this.el_id, {
                    'name': this.username,
                    'email': this.email,
                    'id': this.el_id,
                    'UID': this.uid,
                })
                    .then(res => {
                        this.users[this.el_index].name = this.username;
                        this.users[this.el_index].email = this.email;
                        this.users[this.el_index].UID = this.uid;
                        this.username = '';
                        this.email = '';
                        this.uid = '';
                        this.error.status = false;
                    }).catch(err => {
                    this.error.status = true;
                });
            }
        },
        mounted() {
            this.$store.dispatch("allUidsFromDatabase");

            axios.get('/admin/allUsers')
                .then(res => {
                    this.users = res.data;
                }).catch(err => {
                console.log(err)
            });
        },
        computed: {
            getAllUids() { //final output from here
                return this.$store.getters.getUidsFormGetters
            }
        },
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
