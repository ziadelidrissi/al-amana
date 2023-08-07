// AJAX FORM CONNEXION
document.getElementById('connexion-form').addEventListener('submit', function(event) {
    
    var form = event.target;
    
    var formData = new FormData(form);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', '?action=connexion_traitement', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);

                if (!(response.success)) {
                    document.getElementById('error-message').innerHTML = response.message;
                } else if (response.success) {
                    window.location.href = "?admin=&action=";
                }
            }
        }   
    };
    xhr.send(formData);

    
    event.preventDefault();
});
// AJAX FORM CONNEXION