<template>
    <div>
        <div class="flex justify-center">
            <div>
                <div class="mb-3 xl:w-96">
                    <label
                        for="chart-date"
                        class="form-label inline-block mb-2 text-gray-700 text-xl"
                    >Выберите дату</label
                    >
                    <input
                        type="date"

                        :value="forms.date"
                        class="
                                  form-control
                                  block
                                  w-full
                                  px-4
                                  py-2
                                  text-xl
                                  font-normal
                                  text-gray-700
                                  bg-white bg-clip-padding
                                  border border-solid border-gray-300
                                  rounded
                                  transition
                                  ease-in-out
                                  m-0
                                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                                "
                        id="chart-date"
                    />
                </div>

                <div class="mb-3 xl:w-96">
                    <label for="chart-number" class="form-label inline-block mb-2 text-gray-700"
                    >Введите число</label
                    >
                    <input
                        type="text"
                        v-model="forms.number"
                        class="
                          form-control
                          block
                          w-full
                          px-3
                          py-1.5
                          text-base
                          font-normal
                          text-gray-700
                          bg-white bg-clip-padding
                          border border-solid border-gray-300
                          rounded
                          transition
                          ease-in-out
                          m-0
                          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                        "
                        id="chart-number"
                    />
                </div>
            </div>
        </div>
        <div class="flex space-x-2 justify-center mx-4">
            <button type="button"
                    @click="edit"
                    class="inline-block px-6 py-2.5 bg-blue-600 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                Button
            </button>
        </div>
    </div>
</template>

<script>
import {mapActions, mapGetters} from "vuex";

export default {
    name: "show",
    computed: {
        ...mapGetters(['GET_CHART']),
    },
    data: () => ({
        forms: {
            date: '',
            number: 0
        }
    }),
    methods: {
        ...mapActions(['CHART_EDIT']),

        edit(){
            this.CHART_EDIT({
                id: this.$route.params.id,
                data: this.forms
            })

            this.$router.push({name: 'home'})
        },

        remove(id){
            this.CHART_REMOVE(id)
        }
    },
    created() {
        let $chart;

        $chart = this.GET_CHART(this.$route.params.id)

        this.forms = {
            date: $chart.date,
            number: $chart.number,
        }
    }
}
</script>

<style scoped>

</style>
