export default {
    state: {
        charts: [],
    },
    actions: {
        CHART_CREATE({commit}, data) {
            axios.post('/api/v1/chart/store', {
                data: data
            })
                .then(response => {
                    console.log(response.data)
                    commit('MUTATE_CHARTS', response.data.data);
                }).catch(err => {
                console.log(err)
            })
        },
        CHART_EDIT({commit}, data) {
            axios.post('/api/v1/chart/edit/' + data.id, {
                data: data
            })
                .then(response => {
                    console.log(response.data)
                    commit('MUTATE_CHARTS', response.data.data);
                }).catch(err => {
                console.log(err)
            })
        },
        CHART_REMOVE({commit}, id) {
            axios.get('/api/v1/chart/remove/' + id)
                .then(response => {
                    console.log(response.data)
                    commit('MUTATE_CHARTS', response.data.data);
                }).catch(err => {
                console.log(err)
            })
        },
        CHART_INDEX({commit}) {
            axios.get('/api/v1/chart/index')
                .then(response => {
                    console.log(response.data)
                    commit('MUTATE_CHARTS', response.data.data);
                }).catch(err => {
                console.log(err)
            })
        },
    },
    mutations: {
        MUTATE_CHARTS(state, data) {
            state.charts = data
        },
    },
    getters: {
        GET_CHARTS(state) {
            return state.charts
        },
        GET_CHART: state => id => {
            return state.charts.find(item => item.id == id);
        },
    }
}
