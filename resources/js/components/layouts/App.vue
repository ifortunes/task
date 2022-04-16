<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
import {mapActions, mapGetters} from "vuex";

export default {
    name: "App",
    data: () => ({

    }),
    methods: {
        ...mapActions(['CHART_INDEX']),
    },
    created() {
        this.CHART_INDEX()
    }
}
</script>

<style scoped>

</style>
