@extends("layouts.app")
@section("content")
    @include("navigation")
    <div class="home_container">
        <a href="{{asset("home")}}">
            <div class="img logo">
                <img src="{{asset("res/logo_home.dark.png")}}" alt="">
            </div>
        </a>
    </div>
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
        <div class="navigation_part">
            <div class="come_in">
                <p><span>Войти</span> на сайт</p>
                <div class="circle_container">
                    <div class="circle"></div>
                </div>
            </div>
            <form action="">
                <label>
                     <input type="text">
                    <button type="submit">Найти</button>
                </label>
            </form>
            <div class="social">
                <div class="social_part">
                    <a href="https://vk.com/jutsu">
                        <div class="img">
                            <img src="{{asset("res/vk-brands.png")}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="social_part">
                    <a href="https://www.youtube.com/user/Vitassam">
                        <div class="img">
                            <img src="{{asset("res/youtube-square-brands.png")}}" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="main_container">
            <div class="part_left_container">
                <div class="paragraph_container">
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
                        @for($i = 0; $i < 9; $i++)
                            <a href="#" class="card">
                                <div class="card">
                                    <div class="img">
                                        <img src="{{asset("res/anime_mahoutsukai-reimeiki.jpg")}}" alt="">
                                    </div>
                                    <div class="description">
                                        <h3>Восхождение<br> чародея</h3>
                                        <p>боевик, комедия,</p>
                                        <p>приключения, фэнтези</p>
                                    </div>
                                </div>
                                <div class="bottom_part"></div>
                            </a>
                        @endfor
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
            <div class="part_right_container">
                <div class="choice_navigation part_right">
                                <h2>Навигация <span>по сайту</span></h2>
                    <div class="navigation_menu_part">
                        <a href="">Аниме</a>
                        <a href="">Форум</a>
                        <a href="">Нарутопедия</a>
                    </div>
                    <div class="navigation_menu_part">
                        <a href="">Смотреть Наруто</a>
                        <a href="">Манга Наруто</a>
                        <a href="">Новеллы Наруто</a>
                        <a href="">Видео-истории</a>
                        <a href="">Все герои</a>
                        <a href="">Список техник</a>
                    </div>
                    <div class="last navigation_menu_part">
                        <a href="">Вакансии</a>
                        <a href="">Оповещения ВК и TG</a>
                        <a href="">Аниме-почта</a>
                        <a href="">Наши контакты</a>
                    </div>
                </div>
                <div class="chat part_right">
                    <div class="chat_open">
                        <h2>Чат</h2>
                        <div class="toggles">
                            <div class="toggle"></div>
                            <div class="toggle-circle toggle-circle_js" onclick="toggle_click(this)"></div>
                        </div>
                    </div>
                    <div class="chat_container">
                        @for($i = 0; $i < 3; $i++)
                            <div class="message">
                                <div class="main_part_message">
                                    <div class="avatar">
                                        <div class="img">
                                            <img src="{{asset("res/avatar_chat.png")}}" alt="">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="name_people">
                                            <p>Mr Yarыk</p>
                                        </div>
                                        <div class="time_message">
                                            <span>11:42:59</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>Soltik, а ты мне помурчишь?</p>
                                </div>
                            </div>
                        @endfor
                        <div class="text_in">
                            <div class="choice_message_do">
                                <button>
                                    <div class="img">
                                        <img src="{{asset("res/b.dark.png")}}" alt="">
                                    </div>
                                </button>
                                <button>
                                    <div class="img">
                                        <img src="{{asset("res/i.dark.png")}}" alt="">
                                    </div>
                                </button>
                                <button>
                                    <div class="img">
                                        <img src="{{asset("res/u.dark.png")}}" alt="">
                                    </div>
                                </button>
                                <button>
                                    <div class="img">
                                        <img src="{{asset("res/emo.png")}}" alt="">
                                    </div>
                                </button>
                                <button>
                                    <div class="img">
                                        <img src="{{asset("res/link.png")}}" alt="">
                                    </div>
                                </button>
                                <button>
                                    <div class="img">
                                        <img src="{{asset("res/quote.png")}}" alt="">
                                    </div>
                                </button>
                                <textarea name="message" id="message" rows="" cols="" onfocus="iChat_setFieldName(this.name)"></textarea>
                            </div>
                            <div class="chat_button_container">
                                <div class="button_row">
                                    <div>
                                        <button>Правила</button>
                                        <button>Архив</button>
                                    </div>
                                    <div>
                                        <button>Отправить</button>
                                    </div>
                                </div>
                                <button class="new_window">Открыть чат в новом окне</button>
                            </div>
                        </div>
                        <div class="information_registor">
                            <p>Только зарегистрированные посетители могут писать в чате.</p>
                        </div>
                    </div>
                </div>
                <div class="information part_right">
                    <p><span>Кстати<span class="comma">,</span></span>если вы будете смотреть какое-то аниме,
                        то зайдя на <a href="">главную страницу</a>, сможете продолжить просмотр
                        с того самого эпизода, на котором остановились.
                        Новые вышедшие серии онгоингов тоже будут там появляться
                        (если вы до этого уже просмотрели все имеющиеся эпизоды).</p>
                </div>
                <div class="random_technique part_right">
                    <h3>Случайная <span>техника</span></h3>
                    <a href="#">
                        <div class="img">
                            <img src="{{asset("res/video.jpg")}}" alt="">
                        </div>
                        <p>Разящие волны воздуха</p>
                    </a>
                </div>
            </div>
            <div class="link_line">
                <a href="" class="boss_a">Главная</a>
                <a href="">Все аниме</a>
                <a href="">Все серии Наруто</a>
                <a href="">Манга Наруто</a>
                <a href="">Все техники</a>
                <a href="">Аниме-почта</a>
                <a href="">Рассылка обновлений</a>
                <a href="">Контакты</a>
            </div>
        </div>
    </div>
    <script src="{{asset("js/home.js")}}"></script>
@stop
