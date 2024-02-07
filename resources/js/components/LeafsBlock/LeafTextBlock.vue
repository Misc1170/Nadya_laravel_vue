<script setup>
defineProps({
    textBlocks: Object,
})
</script>

<template>
    <div class="py-10 flex flex-col items-center">
        <template
            v-for="(textBlock, i) in textBlocks">
            <!--            Если четный индекс, анимация слева направо-->
            <div
                class="leaf_text_block"
                v-if="i % 2 === 0"
                style="animation-name: leftToRight">
                <p>{{ textBlock.title }}</p>
                <div
                    v-if="textBlock.textList"
                    v-for="listItem in textBlock.textList">
                    <p>{{ listItem.title }}</p>
                    <span>{{ listItem.text }}</span>
                </div>
                <span>{{ textBlock.text }}</span>
            </div>
            <!--            Если нечетный индекс, анимация справа налево-->
            <div
                class="leaf_text_block"
                v-if="i % 2 === 1"
                style="animation-name: rightToLeft">
                <p>{{ textBlock.title }}</p>
                <div
                    v-if="textBlock.textList"
                    class="columns-2">
                    <div
                        v-for="listItem in textBlock.textList">
                        <p>{{ listItem.title }}</p>
                        <span>{{ listItem.text }}</span>
                    </div>
                </div>
                <span>{{ textBlock.text }}</span>
            </div>
        </template>
    </div>
</template>

<style lang="scss">
$toLeft: 200px;
$toRight: 200px;
$toTop: 200px;
$toBottom: 200px;

.leaf_text_block {
    background: linear-gradient(90deg, rgba(251, 251, 251, 1) 65%, rgba(174, 174, 200, 1) 100%, rgba(0, 212, 255, 1) 100%);
    display: flex;
    flex-direction: column;
    width: 50%;
    margin: 20px 0;
    padding: 10px 40px;
    border-radius: 38px;

    position: relative;
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
        top: $toTop;
        opacity: 0
    }
    100% {
        left: 0;
        top: 0;
        opacity: 1
    }
}
</style>
