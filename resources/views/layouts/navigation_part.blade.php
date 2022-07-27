{{--@include("modal_parts/get_in")--}}
<div class="navigation_part">
    <div class="come_in" title="Форма авторизации">
        <p><span>Войти</span> на сайт</p>
        <div class="circle_container">
            <div class="circle"></div>
        </div>
    </div>
    <form action="">
        <label>
            <input type="text">
{{--            <button type="submit">Найти</button>--}}
        </label>
        <input type="submit" value="Найти" class="button">
    </form>
    <div class="social">
        <div class="social_part" title="Школа техник Наруто ВКонтакте">
            <a href="https://vk.com/jutsu">
                <div class="img">
                    <img src="{{asset("res/vk-brands.png")}}" alt="">
                </div>
            </a>
        </div>
        <div class="social_part" title="Youtube-канал Школы техник Наруто">
            <a href="https://www.youtube.com/user/Vitassam">
                <div class="img">
                    <img src="{{asset("res/youtube-square-brands.png")}}" alt="">
                </div>
            </a>
        </div>
    </div>
</div>
