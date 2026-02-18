
function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

function getCookie(name) {
    let nameEQ = name + "=";
    let ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i].trim();
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length);
    }
    return null;
}

document.addEventListener("DOMContentLoaded", function() {

    let consent = getCookie("cookie_consent");

    if (consent) {
        document.getElementById("cookie-banner").style.display = "none";
    }

    document.getElementById("accept-cookies").addEventListener("click", function() {
        setCookie("cookie_consent", "accepted", 365);
        document.getElementById("cookie-banner").style.display = "none";
    });

    document.getElementById("decline-cookies").addEventListener("click", function() {
        setCookie("cookie_consent", "declined", 365);
        document.getElementById("cookie-banner").style.display = "none";
    });

});

