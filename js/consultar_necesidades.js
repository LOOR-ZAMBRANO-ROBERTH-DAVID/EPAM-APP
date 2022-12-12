getData()
document.getElementById("campo").addEventListener("keyup", getData);

function getData() {
  let input = document.getElementById("campo").value; //traemos el campo a buscar
  let content = document.getElementById("content"); //tbody
  let url = "../database/consultar_necesidades.php"; //ruta de archivo que hace la consulta
  let formaData = new FormData();
  formaData.append("campo", input);

  fetch(url, {
    method: "POST",
    body: formaData,
  })
    .then((response) => response.json())
    .then((data) => {
      content.innerHTML = data;
    })
    .catch((err) => console.log(err));
    
}
