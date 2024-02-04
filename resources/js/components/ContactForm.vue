<script setup>

</script>

<template>
    <form
        action=""
        method="post"
        class="bg-no-repeat bg-center bg-cover rounded-xl pb-10 px-24"
        style="background-image: url('../images/form_bg.jpg')">
        <p class="text-center text-663434 py-10">А теперь мне хотелось бы познакомиться с Вами :)</p>
        <div class="flex flex-col justify-center gap-6">
            <input
                type="text"
                placeholder='Имя и Фамилия (Отчество, если Вам это принципиально)'
                class="course-category__input"
            />
            <input
                type="text"
                placeholder='Контактный номер телефона'
                class="course-category__input"
            />

            <div class="rounded-xl" style="background-color: #A9ADD4">

                <p class="text-663434 text-center">Какое направление Вас интересует?</p>
                <div class="container">
                    <div class="radio">
                        <input id="radio-1" name="radio" type="radio" checked>
                        <label for="radio-1" class="radio-label">Театральная студия</label>
                    </div>
                    <div class="radio">
                        <input id="radio-2" name="radio" type="radio">
                        <label for="radio-2" class="radio-label">Актерские курсы</label>
                    </div>
                    <div class="radio">
                        <input id="radio-3" name="radio" type="radio">
                        <label for="radio-3" class="radio-label">Актерские интенсивы</label>
                    </div>
                </div>

            </div>

            <textarea
                placeholder="Если остались вопросы, пожелания, предложения, то пишите здесь. Я с радостью, на все отвечу."
                style="background-color: #A9ADD4"
                class="course-category__input"
            ></textarea>
        </div>
    </form>
</template>

<style lang="scss">

.course-category__input {
    background-color: #A9ADD4;
    border: none;
    border-radius: 15px;
    padding: 10px 20px;

    &::placeholder {
        color: #000;
        font-size: 14px;
        opacity: 1;
    }
}

$color1: #663434;
$color2: #F6E1A9;
.radio {
    margin: 0.5rem;

    input[type="radio"] {
        position: absolute;
        opacity: 0;

        + .radio-label {
            &:before {
                content: '';
                background: $color1;
                border-radius: 100%;
                border: 1px solid darken($color1, 25%);
                display: inline-block;
                width: 1em;
                height: 1em;
                position: relative;
                //top: 0em;
                margin-right: 1em;
                //vertical-align: top;
                cursor: pointer;
                text-align: center;
                transition: all 250ms ease;
            }
        }

        &:hover {
            + .radio-label {
                &:before {
                    background-color: #F6E1A9;
                }
            }
        }

        &:checked {
            + .radio-label {
                &:before {
                    background-color: $color2;
                    box-shadow: inset 0 0 0 4px $color1;
                }
            }
        }

        &:focus {
            + .radio-label {
                &:before {
                    outline: none;
                    border-color: $color2;
                }
            }
        }

        &:disabled {
            + .radio-label {
                &:before {
                    box-shadow: inset 0 0 0 4px $color1;
                    border-color: darken($color1, 25%);
                    background: transparent;
                }
            }
        }

        + .radio-label {
            &:empty {
                &:before {
                    margin-right: 0;
                }
            }
        }
    }
}
</style>
