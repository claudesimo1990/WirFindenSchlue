export default {

    state: {

        uidsList: [],
        allErrors: [],
        allMessages: []

    },

    getters: {

        getUidsFormGetters(state) { //take parameter state
            return state.uidsList
        },
        getAllErrors(state) {
            return state.allErrors;
        },
        getAllMessages(state) {
            return state.allMessages;
        }
    },

    actions: {
        allUidsFromDatabase(context) {

            axios.get("/api/ids")

                .then((response) => {
                    context.commit("uids", response.data)

                })
                .catch(() => {
                    console.log("Error........")
                })
        },
        allMessagesFromDatabase(context) {

            axios.get("/api/messages")

                .then((response) => {
                    context.commit("messages", response.data)

                })
                .catch(() => {
                    console.log("Error........")
                })
        },
        addUidToList(context, inhalt) {
            if (inhalt !== '') {
                axios.post('/admin/uuids', inhalt)
                    .then(res => {
                        context.commit('addUid', inhalt);
                        console.log(res)
                    }).catch(err => {
                    context.commit('setErrors', err.response.data.errors.content[0]);
                });

            }
        },
        deleteMessageFromDatabase(context, payload) {
            context.commit('deleteMessage', payload)
        }
    },

    mutations: {
        uids(state, data) {
            return state.uidsList = data
        },
        messages(state, data) {
            return state.allMessages = data
        },
        deleteMessage(state, payload) {
            let id = state.allMessages[payload].id;
            axios.post('/admin/message/delete/'+id,{'id':id})
                .then(res => {
                    return state.allMessages.splice(payload, 1);
                }).catch(err => {
                context.commit('setErrors', err.response.data.errors.content[0]);
            });
        },
        addUid(state, inhalt) {
            state.uidsList.push(inhalt);
        },
        setErrors(state, error) {
            state.allErrors.push(error);
        }
    }
}
