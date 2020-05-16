export default {

    state: {

        uidsList: [],
        allErrors:[]

    },

    getters: {

        getUidsFormGetters(state) { //take parameter state
            return state.uidsList
        },
        getAllErrors(state){
            return state.allErrors;
        }
    },

    actions: {
        allUidsFromDatabase(context) {

            axios.get("/api/IDS")

                .then((response) => {
                    context.commit("uids", response.data) //categories will be run from mutation

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
                        context.commit('setErrors',err.response.data.errors.content[0]);
                });

            }
        }
    },

    mutations: {
        uids(state, data) {
            return state.uidsList = data
        },
        addUid(state, inhalt) {
            state.uidsList.push(inhalt);
        },
        setErrors(state,error){
            state.allErrors.push(error);
        }
    }
}
