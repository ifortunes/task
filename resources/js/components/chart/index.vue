<template>
    <div>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <button type="button" @click="$router.push({name: 'create'})" class="mt-3 px-6 py-2.5 bg-purple-800 font-medium text-xs leading-tight uppercase rounded shadow-lg hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Создать</button>
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead class="border-b">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Дата
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Число
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="border-b" v-for="(item, i) in GET_CHARTS" :key="i">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ item.date }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ item.number }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    <div class="flex space-x-2 justify-center">
                                        <div>
                                            <button type="button" @click="$router.push({name: 'chart-show', params: { id: item.id }})" class="inline-block px-6 py-2.5 bg-blue-800 font-medium text-xs leading-tight uppercase rounded shadow-lg hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Редактировать</button>
                                            <button type="button" @click="remove(item.id)" class="inline-block px-6 py-2.5 bg-purple-800 font-medium text-xs leading-tight uppercase rounded shadow-lg hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Удалить</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {mapActions, mapGetters} from "vuex";

export default {
    name: "index",
    computed: {
        ...mapGetters(['GET_CHARTS']),
    },
    data: () => ({

    }),
    methods: {
        ...mapActions(['CHART_REMOVE']),

        remove(id){
            this.CHART_REMOVE(id)
        }
    },
}
</script>

<style scoped>

</style>
