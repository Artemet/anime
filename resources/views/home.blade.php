@extends("layouts.app")
@section("content")
    @include("modal_parts/get_in")
    @include("navigation")
    <div class="content">
        <div class="watch">
            <div class="img">
                <img src="https://gen.jut.su/uploads/notice/thumbs/anime_26029.jpg" alt="">
            </div>
            <div class="part_container">
                <div class="watch_part">
                    {{--            <div class="img">--}}
                    {{--                <img src="https://upload.wikimedia.org/wikipedia/commons/9/92/Orange_animated_right_arrow.gif" alt="">--}}
                    {{--            </div>--}}
                    <p class="p_one ">Ван Пис: 1018 серия</p>
                </div>
                <div class="watch_part">
                    <p class="p_two">сегодня вечером</p>
                </div>
            </div>
        </div>
        @include("layouts/navigation_part")
        <div class="main_container" onclick="close_modal_getin()">
            <div class="part_left_container">
                <div class="paragraph_container">
                    @include("modal_parts/rong_information")
                    <div class="paragraph main_part">
                        <div class="img">
                            <img src="{{asset("res/naruto_sasuke_new.png")}}" alt="">
                        </div>
                        <div>
                            <h2>Добро пожаловать в Школу техник Наруто!</h2>
                            <p>В вашем разделе «На очереди» пока еще нет аниме
                                (просмотр которых вы не закончили). Начните что-то смотреть и раздел появится.</p>
                            <p>Рады видеть вас на нашем портале - здесь есть чем заняться
                                как опытным поклонникам вселенной <span>«Наруто»</span>,
                                так и новичкам, недавно познакомившимся с серией!</p>
                            <p><a href="">Техники</a> - основа сайта: на персональной странице каждой
                                узнайте о них всё и даже больше, а с продвинутой
                                навигацией найти и изучить нужную технику не составит проблем!
                                Смотрите новые эпизоды <a href="">«Наруто»</a>, читайте <a href="">мангу</a>, <a href="">новеллы</a>,
                                общайтесь на форуме или узнайте больше о мире ниндзя на нашей <a href="">Нарутопедии</a>.</p>
                            <p>У нас имеется коллекция превосходных <a href="">аниме</a> на любой вкус.</p>
                        </div>
                    </div>
                    <div class="under_paragraph">
                        <p class="paragraph_information">Могут присутствовать материалы <span>18+</span></p>
                        <p class="paragraph_information paragraph_information_two">...а еще сегодня День Рождения <a href="">Пакуры</a> и <a href="">Гинкаку!</a>
                            <a href="">[календарь Дней Рождений]</a></p>
                    </div>
                </div>
                <div class="recommendations">
                    <h2>Рекомендации</h2>
                    <div class="card_list">
{{--                        @foreach($test as $item_two)--}}
{{--                            <div class="card_list">--}}
{{--                                <a href="#" class="card">--}}
{{--                                    <div class="card">--}}
{{--                                        <div class="img">--}}
{{--                                            <img src="{{asset($item_two->img)}}" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div clhu ass="description">--}}
{{--                                            <h3>Восхождение<br> чародея</h3>--}}
{{--                                            <p>боевик, комедия,</p>--}}
{{--                                            <p>приключения, фэнтези</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="bottom_part"></div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
                        @foreach($anime as $item)
                            <a href="{{route('in_card')}}" class="card">
                                <div class="card">
                                    <div class="img">
                                        <img src="{{asset($item->img)}}" alt="">
                                    </div>
                                    <div class="description">
                                        <h3>{{$item->name}}</h3>
                                        <p>боевик, комедия,</p>
                                        <p>приключения, фэнтези</p>
                                    </div>
                                </div>
                                <div class="bottom_part"></div>
                            </a>
                        @endforeach
                    </div>
                </div>
{{--                <div class="new_video">--}}
{{--                    <h2>Новые серии</h2>--}}
{{--                    <a href="#">--}}
{{--                        <div class="img">--}}
{{--                            <img src="{{asset("res/video.jpg")}}" alt="">--}}
{{--                        </div>--}}
{{--                        <p>Разящие волны воздуха</p>--}}
{{--                    </a>--}}
{{--                </div>--}}
                <div class="vk_box">
                    <div class="vk_header">
                        <div class="img">
                            <img src="{{asset("res/a2hCmuE2UQIcalhJmahvulyXy3CE3iEWsuIyXbvFtZTsuAxZyR2ycrFcR7Mep4Y6IHCp0cQpJWmave9VnVwgzZWu.jpg")}}" class="vk_img" alt="">
                        </div>
                        <p>Школа техник Наруто</p>
                    </div>
                    <div class="main_box_vk">
                        <a href=""><p>698 435 подписчиков</p></a>
                        <div class="recommendation_rows">
                            @for($i = 0; $i < 6; $i++)
                                <div class="img">
                                    <img src="{{asset("res/dLGpdkXd4HhYPY66g-HJLmWCZFVBdKCFlyVDUrDZYCKw8vi3bc2USNc3fwBtyRdUUauz6v9yABvxX1Djvqk5CS2g.jpg")}}" alt="">
                                </div>
                            @endfor
                        </div>
                        <div class="under_row">
                            @for($i = 0; $i < 2; $i++)
                                <div class="img">
                                    <img src="{{asset("res/dLGpdkXd4HhYPY66g-HJLmWCZFVBdKCFlyVDUrDZYCKw8vi3bc2USNc3fwBtyRdUUauz6v9yABvxX1Djvqk5CS2g.jpg")}}" alt="">
                                </div>
                            @endfor
                        </div>
                        <button><img src="{{asset("res/vk.svg")}}" alt="">Подписаться на новости</button>
                    </div>
                </div>
            </div>
            @include("layouts/part_right")
            @include("layouts/link_line")
        </div>
    </div>
    <script src="{{asset("js/home.js")}}"></script>
@stop
