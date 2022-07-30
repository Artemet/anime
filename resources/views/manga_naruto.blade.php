@extends("layouts.app")
@section("content")
    @include("navigation")
    <div class="content">
        @include("layouts/navigation_part")
        <div class="main_container" onclick="close_modal_getin()">
            <div class="part_left_container manga_naruto" style="padding-top: 0">
                <h1 class="page_h">Вся манга Наруто</h1>
                <div class="card_container">
{{--                    @foreach($naruto_video_page as $item)--}}
                        <div class="card_manga">
                            <div class="img">
                                <img src="{{asset("res/pages/manga_gaiden.jpg")}}" alt="">
                            </div>
                            <div>
                                <a href="">
{{--                                    <p>{{$item->name}}</p>--}}
                                    <p>Наруто</p>
                                    <p class="word_number">700 слов</p>
                                </a>
                            </div>
                        </div>
{{--                    @endforeach--}}
                </div>
            </div>
            @include("layouts/part_right")
            @include("layouts/link_line")
        </div>
    </div>
@stop
