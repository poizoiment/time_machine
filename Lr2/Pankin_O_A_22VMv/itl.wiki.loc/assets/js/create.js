function create()
{
    newdiv = document.createElement('div');
  newdiv.id = "Block";
  document.body.appendChild(newdiv);
  newdiv.innerHTML = "<p>Обновление платформы 1с – это, по своей сути, установка нужной версии платформы «поверх» старой. Однако в этом деле есть нюансы и особенности, которые необходимо знать.</p>";
}
 
document.getElementById("bttn").onclick = create;