@extends("layouts.app")
@section("content")
    @include("navigation")
    <div class="content">
        @include("layouts/navigation_part")
        <div class="main_container">
            <div class="part_left_container in_card">
                <div class="img reclam">
                    <a href="https://inlnk.ru/dnYvXm">
                        <img src="{{asset("res/reclam/Screenshot_1.png")}}" alt="">
                    </a>
                </div>
                <div class="header_name_video">
                    <div class="title_img">
                        <span class="age">16<small>+</small></span>
                        <div class="img">
                            {{--                    <img src="{{asset("")}}" alt="">--}}
                            <a href="">
                                <img src="{{asset($anime->img)}}" alt="" class="circle">
                            </a>
                        </div>
                    </div>
                    <h1 class="name_video">{{$anime->name}}</h1>
                </div>
                <div class="h_two">
                    <div class="dots">
                        @for($more_div = 0; $more_div < 2; $more_div++)
                            <div class="div_{{$more_div}} close_dots_element"></div>
                        @endfor
                    </div>
                    <h2 class="under_name_video">Я твой Дя... &#8213; твоя Тётя</h2>
                </div>
                <div class="video_container">
                    <div class="video">
                        <div class="img video_part">
{{--                            <img src="{{asset("")}}" alt="">--}}
                            <img src="https://gen.jut.su/uploads/preview/858/0/0/3_1658488282.jpg" alt="" class="video">
                        </div>
                        <div class="img pause">
                            <img src="{{asset("res/pages/pause.png")}}" alt="" class="pause_video" title="Воспроизвести видео">
                        </div>
                    </div>
                    <div class="buttons">
                        <div class="button">
                            <button class="number_video">2 серия</button>
                        </div>
                        <div class="button button_row_two">
                            <button>Перерождение Дяди</button>
                        </div>
                    </div>
             <div class="information_use">
                        <p>использовать старый плеер</p>
                        <span title="Подробнее">?</span>
                    </div>
                </div>
            </div>
            @include("layouts/part_right")
            @include("layouts/link_line")
        </div>
    </div>
@stop
