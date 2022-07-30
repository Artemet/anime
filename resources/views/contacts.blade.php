@extends("layouts.app")
@section("content")
    @include("navigation")
    <div class="content">
        @include("layouts/navigation_part")
       <div class="main_container" onclick="close_modal_getin()">
           <div class="part_left_container contact_page" style="position: relative;">
               <h1 class="page_h_two">Контакты</h1>
               <p class="contacts_page">Адрес нашей электронной почты: <span>no@jut.su</span></p>
           </div>
           @include("layouts/part_right")
           @include("layouts/link_line")
       </div>
    </div>
@stop
