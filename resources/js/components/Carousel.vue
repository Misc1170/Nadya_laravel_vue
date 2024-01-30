<script setup>
import {VueperSlides, VueperSlide} from 'vueperslides'
import 'vueperslides/dist/vueperslides.css'

const slides = [
    {
        title: 'Slide #1',
        content: 'Slide 1 content.'
    },
    {
        title: 'Slide #2',
        content: 'Slide 2 content.'
    }
]
</script>

<template>

    <vueper-slides
        class="no-shadow"
        :visible-slides="3"
        :slide-ratio="1 / 4"
        :dragging-distance="70">
        <vueper-slide v-for="i in 9"
                      :key="i"
                      :title="i.toString()" />
    </vueper-slides>

</template>

<style scoped>

</style>
