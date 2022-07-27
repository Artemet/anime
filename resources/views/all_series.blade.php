@extends("layouts.app")
@section("content")
    @include("navigation")
    <div class="content">
        @include("layouts/navigation_part")
        <div class="main_container">
            <div class="part_left_container all_series" style="padding-top: 0">
                <h1 class="page_h">Все серии аниме Наруто</h1>
                <div class="card_list">
                    @foreach($manga_naruto as $item)
                        <a href="" class="card card_href">
                            <div class="card_block">
                                <div class="img">
                                    <img src="{{asset($item->img)}}" alt="">
                                </div>
                                <div class="description">
                                    <h3>{{$item->name}}</h3>
                                    <p>{{$item->number_card}}</p>
                                </div>
                            </div>
                            <div class="bottom_part"></div>
                        </a>
                    @endforeach
                </div>
            </div>
            @include("layouts/part_right")
            @include("layouts/link_line")
        </div>
    </div>
@stop
