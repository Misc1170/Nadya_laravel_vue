<script setup>
defineProps({
    textBlocks: Object,
})
</script>

<template>
    <div
        v-for="(textBlock, i) in textBlocks"
        class="leaf_text_block ">
        <p>{{ textBlock.title }}</p>
        <span>{{ textBlock.text }}</span>
    </div>
</template>

<style scoped>
.leaf_text_block {
    background-image: url('/images/cloud_bg.png');
    display: flex;
    flex-direction: column;
    width: 50%;
    margin: 20px 0;
    padding: 10px 40px;
    border-radius: 38px;

    position: relative;
    animation-duration: 1.5s;

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
    0%   {right:20%; bot:30%; opacity: 0}
    100% {right:0px; top:0px; opacity: 1}
}
@keyframes rightToLeft {
    0%   {left:20%; top:30%;}
    100% {left:0px; top:0px;}
}
</style>
