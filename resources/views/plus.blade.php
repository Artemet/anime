@extends("layouts.app")
@section("content")
    @include("navigation")
    <div class="content">
        @include("layouts/navigation_part")
        <div class="main_container" onclick="close_modal_getin()">
            <div class="part_left_container plus_page" style="padding-top: 0;">
                <h1 class="page_h">Jutsu+</h1>
                <div class="plus_page_part">
                    <div>
                        <b>Что такое Jutsu+?</b>
                        <p>Поддерживая наш сайт через Jutsu+, вы открываете следующие возможности:</p>
                        <p class="point">Полное отсутствие рекламы</p>
                        <p class="point">Дополнительные настройки просмотра аниме - например автоматический пропуск заставок и переход к следующим сериям</p>
                        <p class="point">Некоторые другие приятные дополнения</p>
                        <p>Также постепенно добавляются новые улучшения.</p>
                    </div>
                </div>
                <div class="plus_page_part">
                    <b>Стоимость:</b>
                    <p class="information">59 ₽ на месяц</p>
                    <p class="information">Доступно только для зарегистрированных пользователей.</p>
                </div>
            </div>
            @include("layouts/part_right")
            @include("layouts/link_line")
        </div>
    </div>
@stop
