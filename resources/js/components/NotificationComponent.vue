<template>
    <div id="w">
        <div id="content">

            <div v-for="(item,index) in messages" class="notify successbox">
                <h4><em>{{item.name}}</em></h4>
                <span class="alerticon"><span class="text-green-400">{{item.email}}</span> <span class="float-right">{{item.created_at}}</span></span>
                <hr>
                <h5 class="text-red-600">Subject : {{item.subject}}</h5>
                {{item.content}}
                <hr>
                <button @click="messageDelete(item.id,index)" class="bg-red hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                    löschen
                </button>
            </div>
        </div>
    </div>
</template>
<script>
    import vuex from 'vuex';

    vuex.mapGetters([
        'getAllMessages'
    ]);
    export default {
        data: function () {
            return {
                datas: []
            }
        },
        computed: {
            messages() { //final output from here
                return this.$store.getters.getAllMessages;
            }
        },
        mounted() {
            this.$store.dispatch("allMessagesFromDatabase");
        },
        methods: {
            messageDelete(id,index) {
                this.$store.commit('deleteMessage',index)
            }
        }
    }
</script>
<style>
    /** notifications **/
    .notify {
        display: block;
        background: #fff;
        padding: 12px 18px;
        max-width: 1000px;
        margin: 0 auto;
        cursor: pointer;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        margin-bottom: 20px;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 2px 0px;
    }

    .notify h1 {
        margin-bottom: 6px;
    }

    .successbox h1 {
        color: #678361;
    }

    .errorbox h1 {
        color: #6f423b;
    }

    .successbox h1:before, .successbox h1:after {
        background: #cad8a9;
    }

    .errorbox h1:before, .errorbox h1:after {
        background: #d6b8b7;
    }

    .notify .alerticon {
        display: block;
        text-align: center;
        margin-bottom: 10px;
    }
</style>
