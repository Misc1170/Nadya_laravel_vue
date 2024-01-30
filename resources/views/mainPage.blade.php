<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>
<body>
<div id="app" class="bg-F6E1A9">
    <carousel></carousel>
    {{--        БЛОК С ФОТКОЙ НАДИ И ТЕКСТ--}}
    <div>
        <img class="" src="{{ Vite::asset('resources/images/banner.png') }}" alt="BANNER"/>
        <div class="container grid grid-cols-3 justify-center py-20">
            <div class="flex justify-end col-span-1">
                <img src="{{ Vite::asset('resources/images/Nadya_preview.png') }}" alt=""/>
            </div>

            <div class="flex flex-col gap-y-4 justify-center col-span-2 pl-24 pr-48">
                <p>Я рада видеть Вас в моем пространстве, где можно больше узнать о моих работах, проектах и моем
                    творчестве. Для начала мне бы хотелось познакомиться с Вами.</p>
                <p>Меня зовут Надежда Тимолянова, я режиссер, руководитель детской театральной студии и ведущая
                    актерских
                    интенсивов для взрослых. Создаю различные проекты и воплощаю в жизнь то, что кажется для меня
                    важным
                    и
                    ценным!</p>
                <p>Мои работы пронизаны любовью к людям и светом. Я за уважение, принятие и гармонию. Приглашаю Вас
                    окунуться в мой мир. Буду рада, если что-то найдет отклик и, возможно, станет поводом нашего
                    знакомтсва
                    или сотрудничества. какая-то фраза!</p>
            </div>
        </div>
    </div>
    {{--=====================================================================--}}
    <leaf-wrapper></leaf-wrapper>

    <div class="container grid grid-cols-2 justify-center py-20 gap-x-10">
        <div class="flex flex-col gap-y-4 justify-center col-span-1 pl-24 py-14">
            <p>Мне с детства интересно наблюдать за людьми, их поведением, состоянием. Попытка проанализировать и
                понять
                переживания другого, как захватывающий квест, который неизвестно куда приведет.</p>
            <p>Для меня важно увидеть человека, понять его и принять его. А после показать, какой он на самом деле
                уникальный и неповторимый.</p>
            <p>Я встаю рядом, беру за руку и открываю необъятный мир, который так разнообразен и широк, что
                невозможно
                вобрать в себя все и сразу. Но Вы не одни, я буду сопровождать Вас и стоять рядом.</p>
        </div>
        <div style="background: #D9D9D9"></div>
    </div>

    <div class="flex justify-center">
        <form
            action=""
            method="post"
            class="bg-no-repeat bg-center bg-cover rounded-xl py-10 px-24 w-1/3"
            style="background-image: url('../images/form_bg.jpg')"
        >
            <p class="text-center text-663434">А теперь мне хотелось бы познакомиться с Вами :)</p>
            <div class="flex flex-col justify-center gap-6">
                <input
                    style="background-color: #A9ADD4"
                    type="text"
                    placeholder='Имя и Фамилия (Отчество, если Вам это принципиально)'
                    class="course-category__input"
                />
                <input
                    style="background-color: #A9ADD4"
                    type="text"
                    placeholder='Контактный номер телефона'
                    class="course-category__input"
                />

                <div class="rounded-xl" style="background-color: #A9ADD4">
                    <div class="w-4/5">

                        <p class="text-663434">Какое направление Вас интересует?</p>

                        <div class="pl-4">
                            <div>
                                <input type="radio" id="kraken" name="monster" value="K"/>
                                <label for="kraken">Театральная студия</label><br/>
                            </div>
                            <div>
                                <input type="radio" id="sasquatch" name="monster" value="S"/>
                                <label for="sasquatch">Актерские курсы</label><br/>
                            </div>
                            <div>
                                <input type="radio" id="mothman" name="monster" value="M"/>
                                <label for="mothman">Актерские интенсивы</label>
                            </div>
                        </div>

                    </div>
                </div>

                <textarea
                    name=""
                    id=""
                    placeholder="Если остались вопросы, пожелания, предложения, то пишите здесь. Я с радостью, на все отвечу."
                    style="background-color: #A9ADD4"
                    class="course-category__input"
                ></textarea>
            </div>
        </form>
    </div>
</div>
</body>
</html>
