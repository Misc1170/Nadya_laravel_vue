<script>
import Leaf from "./Leaf.vue";
import cloudBg from '@images/cloud_bg.png'

export default {
    data() {
        return {
            cloudBg,
            leafs: [
                {
                    'image': 'http://127.0.0.1:5173/resources/images/leaves/teatralnaya_studia.png',
                    'title': 'Театральная студия 10+',
                },
                {
                    'image': 'http://127.0.0.1:5173/resources/images/leaves/acterskie_kursi.png',
                    'title': 'Актерские курсы 18+',
                },
                {
                    'image': 'http://127.0.0.1:5173/resources/images/leaves/akterskie_intensivi.png',
                    'title': 'Актерские интенсивы',
                },
                {
                    'image': 'http://127.0.0.1:5173/resources/images/leaves/akterskie_intensivi.png',
                    'title': 'Мои проекты',
                }
            ]
        }
    },
    // name: "LeafWrapper",
    components: {
        Leaf,
    },
};

</script>

<template>

    <div class="bg-cover bg-no-repeat cloud" :style="{ backgroundImage: `url(${cloudBg})` }">
        <div class="relative flex justify-evenly">
            <leaf v-for="(leaf, i) in leafs" :title="leaf.title" :image="leaf.image" :key="i"/>
        </div>
    </div>

</template>

<style scoped>

</style>
