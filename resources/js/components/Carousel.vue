<script setup>
import {VCarousel, VCarouselItem} from "vuetify/components";

const photos = [
    {
        src: 'https://cdn.vuetifyjs.com/images/cards/docks.jpg'
    },
    {
        src: 'https://cdn.vuetifyjs.com/images/cards/hotel.jpg'
    },
    {
        src: 'https://cdn.vuetifyjs.com/images/cards/sunshine.jpg'
    },
];
</script>

<template>

    <v-carousel
        class="rounded-xl"
        show-arrows=""
        color="yellow"
        next-icon="red"
        next="red"
    >
        <v-carousel-item
            v-for="photo in photos"
            :src="photo"
            cover
        ></v-carousel-item>
    </v-carousel>

</template>

<style scoped>

</style>
