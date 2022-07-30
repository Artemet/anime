@extends("layouts.app")
@section("content")
    @include("navigation")
    <div class="content">
        @include("layouts/navigation_part")
        <div class="main_container" onclick="close_modal_getin()">
            <div class="part_left_container distribution_updates_page padding_none" style="position: relative;">
                <h1 class="page_h">Подписка на обновления</h1>
                <p class="distribution_updates_page">Здесь вы можете настроить подписку
                    на новые серии аниме и другие материалы,
                    оповещения о которых будут приходить
                    вам в <span>Telegram</span> или же личным
                    сообщением на <span>ВКонтакте</span>.</p>
                <div class="buttons">
                    <button><a href="">Настроить подписку на получение обновлений в Telegram</a></button>
                    <button><a href="">Настроить подписку на получений обновлений на ВКонтакте</a></button>
                </div>
            </div>
            @include("layouts/part_right")
            @include("layouts/link_line")
        </div>
    </div>
@stop
