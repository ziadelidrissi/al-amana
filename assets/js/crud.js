// AJAX CONTENT DISPLAYED
let activiteBtn = document.getElementById("tab1");
let evenementBtn = document.getElementById("tab2");
let galerieBtn = document.getElementById("tab3");
let donsBtn = document.getElementById("tab4");

let mainContent = document.getElementById("mainContent");

async function changeContent(dataLocation, newUrl) {
    mainContent.innerHTML = "";
    let stateObject = { id : "100" };
    window.history.pushState(100, "crud", "?admin=&action=".concat(newUrl));
    fetch("?admin=&action=" + dataLocation)
    .then(response => response.json())
    .then(data => data.forEach(element => {
        let newNode = document.createRange().createContextualFragment(element);
        mainContent.appendChild(newNode);
    }))
}

if (activiteBtn != null) {
    activiteBtn.addEventListener("click", () => {changeContent("getAllActivites", "crudActivite")});
}       
if (evenementBtn != null) {
    evenementBtn.addEventListener("click", () => {changeContent("getAllEvenements", "crudEvenement")});
}
if (galerieBtn != null) {
    galerieBtn.addEventListener("click", () => {changeContent("getAllPhotos", "crudPhoto")});
}
if (donsBtn != null) {
    donsBtn.addEventListener("click", () => {changeContent("getAllDons", "crudDon")});
}
// AJAX CONTENT DISPLAYED