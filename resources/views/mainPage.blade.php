<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Fonts -->
{{--    <link rel="preconnect" href="https://fonts.bunny.net">--}}
{{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova&display=swap" rel="stylesheet">--}}

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/fonts.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
<div id="app" class="bg-F6E1A9">
    {{--        БЛОК С ФОТКОЙ НАДИ И ТЕКСТ--}}
    <div>
        <img class="" src="{{ asset('images/banner.png') }}" alt="BANNER"/>
        <div class="container grid grid-cols-3 justify-center py-20">
            <div class="flex justify-end col-span-1">
                <img src="{{ asset('images/Nadya_preview.png') }}" alt=""/>
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
    {{--    БЛОК С ЛИСТЬЯМИ--}}
    <leaf-wrapper></leaf-wrapper>

    <div class="container grid grid-cols-2 justify-center p-20 gap-x-10">
        <div class="flex flex-col gap-y-4 justify-center col-span-1 py-14">
            <p>Мне с детства интересно наблюдать за людьми, их поведением, состоянием. Попытка проанализировать и
                понять
                переживания другого, как захватывающий квест, который неизвестно куда приведет.</p>
            <p>Для меня важно увидеть человека, понять его и принять его. А после показать, какой он на самом деле
                уникальный и неповторимый.</p>
            <p>Я встаю рядом, беру за руку и открываю необъятный мир, который так разнообразен и широк, что
                невозможно
                вобрать в себя все и сразу. Но Вы не одни, я буду сопровождать Вас и стоять рядом.</p>
        </div>
        <carousel></carousel>
    </div>
    {{--ФОРМА--}}
    <div class="flex justify-center">
        <contact-form></contact-form>
    </div>
    {{--ОТЗЫВЫ--}}
    <reviews></reviews>

    <div class="p-20">
        <carousel></carousel>
    </div>
    <img class="" src="{{ asset('images/banner.png') }}" alt="FOOTER"/>
</div>
</body>
</html>
