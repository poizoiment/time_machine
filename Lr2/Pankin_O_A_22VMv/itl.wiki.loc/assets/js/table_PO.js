function open_po(evt, poName) {
    // Объявить все переменные
    var i, tabcontent, tablinks;

    // Получить все элементы с class="tabcontent" и скрыть их
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Получите все элементы с class="tablinks" и удалите класс "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Показать текущую вкладку и добавить «активный» класс к ссылке, открывающей вкладку
    document.getElementById(poName).style.display = "block";
    evt.currentTarget.className += " active";
}