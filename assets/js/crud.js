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

function submitForm(formId, actionUrl) {
    var form = document.getElementById(formId);
    
    var formData = new FormData(form);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', actionUrl, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);

                if (!(response.success)) {
                    document.getElementById('error-message').innerHTML = response.message;
                } else if (response.success) {
                    document.getElementById('error-message').innerHTML = response.message;
                }
            }
        }   
    };
    xhr.send(formData);

    event.preventDefault();
}

document.addEventListener('submit', function(event) {
    if (event.target) {
        if (event.target.id === 'ajouter_activite_form') {
            submitForm('ajouter_activite_form', '?admin=&action=ajouter_activite');
        } else if (event.target.id === 'ajouter_evenement_form') {
            submitForm('ajouter_evenement_form', '?admin=&action=ajouter_evenement');
        } else if (event.target.id === 'ajouter_photo_form') {
            submitForm('ajouter_photo_form', '?admin=&action=ajouter_photo');
        }
    }
});




function closeModal(modalId) {
    var modal = document.getElementById(modalId);
    modal.close();
};