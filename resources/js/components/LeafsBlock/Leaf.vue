<script setup>

defineProps({
    title: String,
    image: String
})

</script>

<template>

    <div class="pt-12">
        <div class="relative"
             :style="{ backgroundImage: `url(${image})` }"
             style="background-repeat: no-repeat; width: 230px; height: 200px;">
            <span class="absolute top-1/3 left-1/4" style="font-weight: bold; font-size: 23px">
                {{ title }}
            </span>
        </div>
    </div>

</template>

<style scoped>

</style>
