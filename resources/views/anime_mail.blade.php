@extends("layouts.app")
@section("content")
    @include("navigation")
    <div class="content">
        @include("layouts/navigation_part")
        <div class="main_container" onclick="close_modal_getin()">
            <div class="part_left_container anime_mail" style="padding-top: 0">
                <h1 class="page_h">Почтовые аниме-ящики</h1>
                <p class="anime_mail">Если у вас еще нет своего ящика в одном
                    из адресов героев Наруто, то вы можете
                    зарегистрировать его:</p>
                <div class="button">
                    <button class="anime_mail">Регистрация</button>
                </div>
                <form action="" class="anime_mail">
                    <div class="mail">
                        <div class="input">
                            <input type="text" placeholder="Ваш логин...">
                        </div>
                        <div>
                            {{--                            <span class="select">@1hokage.ru</span>--}}
                            <select name="" id="" class="anime_mail">
                                <option value="1">@1hokage.ru</option>
                                <option value="2">@2hokage.ru</option>
                                <option value="3">@3hokage.ru</option>
                                <option value="118">@aburame.ru</option>
                                <option value="4">@akamaru.ru</option>
                                <option value="5">@akatsuchi.ru</option>
                                <option value="87">@akimichi-clan.ru</option>
                                <option value="117">@amaterasu-jutsu.ru</option>
                                <option value="6">@anko-mitarashi.ru</option>
                                <option value="7">@ao-anbu.ru</option>
                                <option value="8">@aoba-yamashiro.ru</option>
                                <option value="9">@asuma.ru</option>
                                <option value="10">@bipolar-jugo.ru</option>
                                <option value="11">@byakugan.ru</option>
                                <option value="12">@chidori-raikiri.ru</option>
                                <option value="13">@chiyo.ru</option>
                                <option value="14">@choji.ru</option>
                                <option value="15">@choza-akimichi.ru</option>
                                <option value="16">@chunin-tenten.ru</option>
                                <option value="106">@clan-uchiha.ru</option>
                                <option value="107">@clan-uzumaki.ru</option>
                                <option value="134">@dan-kato.ru</option>
                                <option value="17">@danzo.ru</option>
                                <option value="18">@deidara.ru</option>
                                <option value="92">@dojutsu.ru</option>
                                <option value="108">@edo-tensei.ru</option>
                                <option value="105">@fireball-jutsu.ru</option>
                                <option value="104">@flying-thunder-god.ru</option>
                                <option value="19">@fukasaku.ru</option>
                                <option value="20">@gamabunta.ru</option>
                                <option value="102">@genjutsu.ru</option>
                                <option value="125">@genma.ru</option>
                                <option value="123">@ginkaku.ru</option>
                                <option value="21">@guren.ru</option>
                                <option value="124">@hagoromo.ru</option>
                                <option value="22">@hanzo-salamander.ru</option>
                                <option value="129">@hayate-gekko.ru</option>
                                <option value="23">@hidan.ru</option>
                                <option v alue="24">@hinata-hyuga.ru</option>
                                <option value="25">@hiruko.ru</option>
                                <option value="93">@hozuki.ru</option>
                                <option value="94">@hyuga-clan.ru</option>
                                <option value="26">@ibiki.ru</option>
                                <option value="27">@ice-haku.ru</option>
                                <option value="28">@ino-yamanaka.ru</option>
                                <option value="29">@inoichi-yamanaka.ru</option>
                                <option value="116">@inuzuka.ru</option>
                                <option value="30">@iruka-umino.ru</option>
                                <option value="31">@itachi-uchiha.ru</option>
                                <option value="121">@izuna.ru</option>
                                <option value="32">@jinchuriki-naruto.ru</option>
                                <option value="135">@jiraiya.ru</option>
                                <option value="132">@jirobo.ru</option>
                                <option value="33">@jonin-c.ru</option>
                                <option value="34">@jonin-darui.ru</option>
                                <option value="35">@jonin-temari.ru</option>
                                <option value="36">@kabuto-yakushi.ru</option>
                                <option value="120">@kaguya.ru</option>
                                <option value="37">@kakashi-hatake.ru</option>
                                <option value="38">@kakuzu.ru</option>
                                <option value="39">@kankuro.ru</option>
                                <option value="40">@karin-uzumaki.ru</option>
                                <option value="41">@kazekage-gaara.ru</option>
                                <option value="111">@kazekage.ru</option>
                                <option value="42">@kiba-inuzuka.ru</option>
                                <option value="130">@kidomaru.ru</option>
                                <option value="43">@killer-b.ru</option>
                                <option value="44">@kimimaro.ru</option>
                                <option value="122">@kinkaku.ru</option>
                                <option value="88">@kirin-jutsu.ru</option>
                                <option value="45">@kisame.ru</option>
                                <option value="46">@konan-akatsuki.ru</option>
                                <option value="103">@konoha-village.ru</option>
                                <option value="47">@konohamaru.ru</option>
                                <option value="128">@kotetsu.ru</option>
                                <option value="96">@kuchiyose.ru</option>
                                <option value="48">@kurenai.ru</option>
                                <option value="49">@kushina.ru</option>
                                <option value="50">@madara-uchiha.ru</option>
                                <option value="51">@menma.ru</option>
                                <option value="52">@mifune.ru</option>
                                <option value="53">@might-guy.ru</option>
                                <option value="54">@minato-namikaze.ru</option>
                                <option value="55">@mizukage.ru</option>
                                <option value="99">@mokuton.ru</option>
                                <option value="109">@nara-clan.ru</option>
                                <option value="56">@neji-hyuga.ru</option>
                                <option value="57">@nine-tails.ru</option>
                                <option value="58">@orochimaru-akatsuki.ru</option>
                                <option value="59">@pain-nagato.ru</option>
                                <option value="60">@pakkun.ru</option>
                                <option value="126">@pakura.ru</option>
                                <option value="61">@raiga.ru</option>
                                <option value="62">@raikage.ru</option>
                                <option value="63">@rasen-shuriken.ru</option>
                                <option value="64">@rasengan.ru</option>
                                <option value="65">@rikudo-sennin.ru</option>
                                <option value="127">@rin-nohara.ru</option>
                                <option value="66">@rinnegan.ru</option>
                                <option value="67">@rock-lee.ru</option>
                                <option value="113">@sage-mode.ru</option>
                                <option value="68">@sai-anbu.ru</option>
                                <option value="133">@sakon-and-ukon.ru</option>
                                <option value="69">@sakura-haruno.ru</option>
                                <option value="70">@sannin-jiraiya.ru</option>
                                <option value="115">@sarutobi.ru</option>
                                <option value="71">@sasori.ru</option>
                                <option value="72">@sasuke.ru</option>
                                <option value="98">@senju-clan.ru</option>
                                <option value="101">@senjutsu.ru</option>
                                <option value="110">@shadow-clone.ru</option>
                                <option value="73">@sharingan-eye.ru</option>
                                <option value="74">@shikaku-nara.ru</option>
                                <option value="75">@shikamaru-nara.ru</option>
                                <option value="136">@shikamaru.ru</option>
                                <option value="95">@shimura.ru</option>
                                <option value="76">@shino-aburame.ru</option>
                                <option value="112">@shinra-tensei.ru</option>
                                <option value="119">@shisui.ru</option>
                                <option value="77">@shizune.ru</option>
                                <option value="100">@six-paths.ru</option>
                                <option value="78">@suigetsu.ru</option>
                                <option value="97">@susanoo.ru</option>
                                <option value="131">@tayuya.ru</option>
                                <option value="89">@the-akatsuki.ru</option>
                                <option value="79">@tobi-obito.ru</option>
                                <option value="80">@tsuchikage.ru</option>
                                <option value="90">@tsukuyomi.ru</option>
                                <option value="81">@tsunade.ru</option>
                                <option value="82">@utakata.ru</option>
                                <option value="114">@water-dragon.ru</option>
                                <option value="83">@yahiko.ru</option>
                                <option value="91">@yamanaka-clan.ru</option>
                                <option value="84">@yamato-tenzo.ru</option>
                                <option value="85">@zabuza.ru</option>
                                <option value="86">@zetsu-akatsuki.ru</option>
                            </select>
                        </div>
                        <div class="input">
                            <input type="text" placeholder="Ваш пароль...">
                        </div>
                    </div>
                    <div class="come_in">
                        <button>
                            <span>Войти в почту</span>
                        </button>
                        <div class="problem_continuation">
                            <a href="">Забыли пароль?</a>
                            <a href="">Сменить пароль</a>
                        </div>
                    </div>
                </form>
            </div>
            @include("layouts/part_right")
            @include("layouts/link_line")
        </div>
    </div>
@stop
