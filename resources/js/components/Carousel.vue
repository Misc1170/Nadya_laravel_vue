<script setup>
import {VueperSlides, VueperSlide} from 'vueperslides'
import 'vueperslides/dist/vueperslides.css'

</script>

<template>

    <vueper-slides
        class="no-shadow"
        :visible-slides="3"
        :slide-ratio="1 / 4"
        :dragging-distance="70">
        <vueper-slide v-for="i in 6"
                      :key="i"
                      :title="i.toString()"/>
    </vueper-slides>

</template>

<style scoped>

</style>
