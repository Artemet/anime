<div class="navigation_container">
    <a href="{{asset("home")}}">
        <div class="img">
            <img src="{{asset("res/dark_mode_moon.png")}}" alt="">
        </div>
    </a>
{{--    <div class="container_menu">--}}
{{--        <p>Типы</p>--}}
{{--    </div>--}}
{{--    <div class="container_menu">--}}
{{--        <p>Вода</p>--}}
{{--    </div>--}}
{{--    <div class="container_menu">--}}
{{--        <p>Молния</p>--}}
{{--    </div>--}}
{{--    <div class="container_menu">--}}
{{--        <p>Земля</p>--}}
{{--    </div>--}}
{{--    <div class="container_menu">--}}
{{--        <p>Ветер</p>--}}
{{--    </div>--}}
{{--    <div class="container_menu">--}}
{{--        <p>Огонь</p>--}}
{{--    </div>--}}
{{--    <div class="container_menu">--}}
{{--        <p>Чакра</p>--}}
{{--    </div>--}}
    <ul>
        <li class="{{-- active--}}">
            <div class="menu">
                <span onmouseover="open_sub(this)">Типы</span>
                <div class="sub_li active_li">
                    @foreach($test as $item)
                        <div class="sub">
                            <div>
                                <div class="img">
                                    <img src="{{asset($item->img)}}" alt="">
{{--                                    <img src="{{asset($item->img)}}" alt="">--}}
                                </div>
                                <a href=""><p>{{$item->name}}</p></a>
                            </div>
                            <b>▲</b>
                        </div>
                    @endforeach
                </div>
            </div>
        </li>
        <li>
            <div class="menu">
                <span onmouseover="open_sub(this)">Вода</span>
                <div class="sub_li">
                    <div class="sub">
                        <a href=""><p>Дерево</p></a>
                    </div>
                    <div class="sub">
                        <a href=""><p>Лёд</p></a>
                    </div>
                    <div class="sub">
                        <a href=""><p>Шторм</p></a>
                    </div>
                    <div class="sub">
                        <a href=""><p>Сталь</p></a>
                    </div>
                    <div class="sub">
                        <a href=""><p>Пар</p></a>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="menu">
                <span onmouseover="open_sub(this)">Молния</span>
                <div class="sub_li">
                    <div class="sub">
                        <a href=""><p>Шторм</p></a>
                    </div>
                    <div class="sub">
                        <a href=""><p>Скорость</p></a>
                    </div>
                    <div class="sub">
                        <a href=""><p>Магнетизм</p></a>
                    </div>
                    <div class="sub">
                        <a href=""><p>Взрыв</p></a>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="menu">
                <span onmouseover="open_sub(this)">Земля</span>
                <div class="sub_li">
                    <div class="sub">
                        <a href=""><p>Дерево</p></a>
                    </div>
                    <div class="sub">
                        <a href=""><p>Кристалл</p></a>
                    </div>
                    <div class="sub">
                        <a href=""><p>Лава</p></a>
                    </div>
                    <div class="sub">
                        <a href=""><p>Пыль</p></a>
                    </div>
                    <div class="sub">
                        <a href=""><p>Тьма</p></a>
                    </div>
                    <div class="sub">
                        <a href=""><p>Сталь</p></a>
                    </div>
                    <div class="sub">
                        <a href=""><p>Магнетизм</p></a>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div>
                <span onmouseover="open_sub(this)">Ветер</span>
                <div class="sub_li">
                    <div class="sub">
                        <a href=""><p>Лёд</p></a>
                    </div>
                    <div class="sub">
                        <a href=""><p>Пыль</p></a>
                    </div>
                    <div class="sub">
                        <a href=""><p>Скорость</p></a>
                    </div>
                    <div class="sub">
                        <a href=""><p>Жар</p></a>
                    </div>
                    <div class="sub">
                        <a href=""><p>Тайфун</p></a>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div>
                <span onmouseover="open_sub(this)">Огонь</span>
                <div class="sub_li">
                    <div class="sub">
                        <div class="img">
                            <img src="{{asset("menu/img.png")}}" alt="">
                        </div>
                        <a href=""><p>Лава</p></a>
                    </div>
                    <div class="sub">
                        <a href=""><p>Пыль</p></a>
                    </div>
                    <div class="sub">
                        <a href=""><p>Тьма</p></a>
                    </div>
                    <div class="sub">
                        <a href=""><p>Сталь</p></a>
                    </div>
                    <div class="sub">
                        <a href=""><p>Пламя</p></a>
                    </div>
                    <div class="sub">
                        <a href=""><p>Жар</p></a>
                    </div>
                    <div class="sub">
                        <a href=""><p>Взрыв</p></a>
                    </div>
                    <div class="sub">
                        <a href=""><p>Пар</p></a>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div>
                <span>Чакра</span>
            </div>
        </li>
    </ul>
</div>
<div class="home_container">
    <a href="{{asset("home")}}">
        <div class="img logo">
            <img src="{{asset("res/logo_home.dark.png")}}" alt="">
        </div>
    </a>
</div>
