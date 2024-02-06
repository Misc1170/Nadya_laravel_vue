<script setup>
const reviews = [
    {
        text: 'rew1'
    },
    {
        text: 'rew2'
    },
    {
        text: 'rew3'
    },
    {
        text: 'rew4'
    },
    {
        text: 'rew5'
    },
];
</script>

<template>
    <div class="container py-10">
        <h1 class="text-663434 text-5xl text-center">ОТЗЫВЫ</h1>
        <div class="grid grid-cols-2 gap-6 justify-center my-10">
            <div
                v-for="review in reviews"
                class="flex justify-center">
                <div class="text-center rounded-md bg-A9ADD4 w-5/12">
                    <span>{{ review.text }}</span>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
