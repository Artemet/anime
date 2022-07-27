//toggle_click
window.toggle_click=(back)=>{
    const get_circle = document.querySelector(".toggle-circle");
        get_circle.style.right = "2px";
    const get_toggle = document.querySelector(".toggle");
        get_toggle.style.background = "#666";
    const get_chat_container = document.querySelector(".chat_container");
        get_chat_container.style.display = "none";
    toggle.get_circle.classList = "no_display";
}
//proverka_in
const get_come_in = document.querySelector(".come_in");
const get_text_in = document.querySelector(".text_in");
console.log(get_come_in.style.display);
if (get_come_in.style.display == "block"){
    get_text_in.style.display = "none";
}
//menu
window.open_sub=(open)=>{
    const get_sub = open.querySelector(".navigation_container");
        open.style.display = "block";
}

//page_desiding
const get_link_line = document.querySelector(".tag_a a");
const get_page_menu = document.querySelector(".choice_navigation a");
console.log(get_link_line);
console.log(get_page_menu);
window.change_link=(get_information_tag)=>{
    //
}
