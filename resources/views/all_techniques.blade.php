@extends("layouts.app")
@section("content")
    @include("navigation")
    <div class="content">
        @include("layouts/navigation_part")
        <div class="main_container" onclick="close_modal_getin()">
            <div class="part_left_container all_techniques">
                <h1 class="page_h_two">Список дзюцу из Наруто по порядку серий</h1>
                <div class="technique_container">
                    <div class="technique_part">
                        <h2>Техники из первого сезона:</h2>
                        <div class="series_item">
                            <div>
                                <span>1 серия</span>
                            </div>
                            <div>
                                <ul>
                                    <div>
                                        <div class="img">
                                            <a href=""><img src="{{asset("res/pages/hand.png")}}" alt=""></a>
                                        </div>
                                        <li><a href="#">Превращение</a></li>
                                    </div>
                                    <div>
                                        <div class="img">
                                            <a href=""><img src="{{asset("res/pages/hand.png")}}" alt=""></a>
                                        </div>
                                        <li><a href="#">Теневое клонирование</a></li>
                                    </div>
                                    <div>
                                        <div class="img">
                                            <a href=""><img src="{{asset("res/pages/hand.png")}}" alt=""></a>
                                        </div>
                                        <li><a href="#">Плащ-невидимка</a></li>
                                    </div>
                                    <div>
                                        <div class="img">
                                            <a href=""><img src="{{asset("res/pages/hand.png")}}" alt=""></a>
                                        </div>
                                        <li><a href="#">Отслеживание в отражении</a></li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div class="series_item">
                            <div>
                                <span>2 серия</span>
                            </div>
                            <div>
                                <ul>
                                    <div>
                                        <div class="img">
                                            <a href=""><img src="{{asset("res/pages/hand.png")}}" alt=""></a>
                                        </div>
                                        <li><a href="#">Гарем</a></li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div class="series_item">
                            <div>
                                <span>3 серия</span>
                            </div>
                            <div>
                                <ul>
                                    <div>
                                        <div class="img">
                                            <a href=""><img src="{{asset("res/pages/hand.png")}}" alt=""></a>
                                        </div>
                                        <li><a href="#">Освобождение от верёвок</a></li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div class="series_item">
                            <div>
                                <span>4 серия</span>
                            </div>
                            <div>
                                <ul>
                                    <div>
                                        <div class="img">
                                            <a href=""><img src="{{asset("res/pages/hand.png")}}" alt=""></a>
                                        </div>
                                        <li><a href="#">Тысячелетие боли</a></li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div class="series_item">
                            <span>5 серия</span>
                            <div>
                                <ul>
                                    <div>
                                        <div class="img">
                                            <a href=""><img src="{{asset("res/pages/hand.png")}}" alt=""></a>
                                        </div>
                                        <li><a href="#">Простое пламя</a></li>
                                    </div>
                                    <div>
                                        <div class="img">
                                            <a href=""><img src="{{asset("res/pages/hand.png")}}" alt=""></a>
                                        </div>
                                        <li><a href="#">Кара громом и молнией</a></li>
                                    </div>
                                    <div>
                                        <div class="img">
                                            <a href=""><img src="{{asset("res/pages/hand.png")}}" alt=""></a>
                                        </div>
                                        <li><a href="#">Мираж смертиа</a></li>
                                    </div>
                                    <div>
                                        <div class="img">
                                            <a href=""><img src="{{asset("res/pages/hand.png")}}" alt=""></a>
                                        </div>
                                        <li><a href="#">Подземное обезглавливание</a></li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="technique_part">
                        <h2>Техники ураганных хроник:</h2>
                        <div class="series_item">
                            <div>
                                <span>1 серия</span>
                            </div>
                            <div>
                                <ul>
                                    <div>
                                        <div class="img">
                                            <a href=""><img src="{{asset("res/pages/hand.png")}}" alt=""></a>
                                        </div>
                                        <li><a href="#">Соблазнение</a></li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div class="series_item">
                            <div>
                                <span>2 серия</span>
                            </div>
                            <div>
                                <ul>
                                    <div>
                                        <div class="img">
                                            <a href=""><img src="{{asset("res/pages/hand.png")}}" alt=""></a>
                                        </div>
                                        <li><a href="#">Песчаное сокрытие памяти</a></li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div class="series_item">
                            <div>
                                <span>3 серия</span>
                            </div>
                            <div>
                                <ul>
                                    <div>
                                        <div class="img">
                                            <a href=""><img src="{{asset("res/pages/hand.png")}}" alt=""></a>
                                        </div>
                                        <li><a href="#">Увеличение глиняной фигуры</a></li>
                                    </div>
                                    <div>
                                        <div class="img">
                                            <a href=""><img src="{{asset("res/pages/hand.png")}}" alt=""></a>
                                        </div>
                                        <li><a href="#">C1</a></li>
                                    </div>
                                    <div>
                                        <div class="img">
                                            <a href=""><img src="{{asset("res/pages/hand.png")}}" alt=""></a>
                                        </div>
                                        <li><a href="#">Расцветающая вишня</a></li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div class="series_item">
                            <div>
                                <span>4 серия</span>
                            </div>
                            <div>
                                <ul>
                                    <div>
                                        <div class="img">
                                            <a href=""><img src="{{asset("res/pages/hand.png")}}" alt=""></a>
                                        </div>
                                        <li><a href="#">C3</a></li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include("layouts/part_right")
            @include("layouts/link_line")
        </div>
    </div>
@stop
