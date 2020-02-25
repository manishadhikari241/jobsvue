import axios from "axios";

const state = {
    try: "q",
    dialog: false,

};
const getters = {};

const mutation = {};
const actions = {
    addJobLevel() {
        axios({
            method: 'POST',
        }).then(() => {
            state.dialog = true;
            console.log(state.dialog);
        }).catch(error => {

        });
    }
};

export default {
    state,
    getters,
    mutation,
    actions,
    namespaced: true,
}
