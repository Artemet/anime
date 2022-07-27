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
            <a href="" class="special">Оповещения ВК и TG</a>
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
    <div class="random_technique part_right">
        <h3>Случайная <span>техника</span></h3>
        <a href="#">
            <div class="img">
                <img src="{{asset("res/video.jpg")}}" alt="">
            </div>
            <p>Разящие волны воздуха</p>
        </a>
    </div>
    <div class="information part_right">
        <p><span>Кстати<span class="comma">,</span></span>если вы будете смотреть какое-то аниме,
            то зайдя на <a href="">главную страницу</a>, сможете продолжить просмотр
            с того самого эпизода, на котором остановились.
            Новые вышедшие серии онгоингов тоже будут там появляться
            (если вы до этого уже просмотрели все имеющиеся эпизоды).</p>
    </div>
</div>
