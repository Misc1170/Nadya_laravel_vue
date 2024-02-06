<script setup>
defineProps({
    textBlocks: Object,
})
</script>

<template>
    <div class="py-10 flex flex-col items-center">
        <div
            v-for="(textBlock, i) in textBlocks"
            class="leaf_text_block ">
            <p>{{ textBlock.title }}</p>
            <span>{{ textBlock.text }}</span>
        </div>
    </div>
</template>

<style lang="scss">
$toLeft: 200px;
$toRight: 200px;
$toTop: 200px;
$toBottom: 200px;

.leaf_text_block {
    background-image: url('/images/cloud_bg.png');
    display: flex;
    flex-direction: column;
    width: 50%;
    margin: 20px 0;
    padding: 10px 40px;
    border-radius: 38px;

    position: relative;
    animation-name: leftToRight;
    animation-duration: 1.2s;

    p {
        font-size: 23px;
        text-align: center;
        color: #663434;
    }

    span {
        font-size: 17px;
        color: #663434;
    }
}

@keyframes leftToRight {
    0% {
        right: $toLeft;
        bottom: $toBottom;
        opacity: 0
    }
    100% {
        right: 0;
        bottom: 0;
        opacity: 1
    }
}

@keyframes rightToLeft {
    0% {
        left: $toRight;
        top: 30%;
        opacity: 0
    }
    100% {
        left: 0;
        top: 0;
        opacity: 1
    }
}
</style>
