document.addEventListener('DOMContentLoaded', (event) => {
    const cookieConsent = document.getElementById('cookieConsent');
    const acceptCookies = document.getElementById('acceptCookies');

    if (!getCookie('cookiesAccepted')) {
        cookieConsent.style.display = 'block';
    }

    acceptCookies.addEventListener('click', () => {
        setCookie('cookiesAccepted', true, 365);
        cookieConsent.style.display = 'none';
    });
});

function setCookie(name, value, days) {
    const d = new Date();
    d.setTime(d.getTime() + (days*24*60*60*1000));
    const expires = "expires=" + d.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

function getCookie(name) {
    const cname = name + "=";
    const decodedCookie = decodeURIComponent(document.cookie);
    const ca = decodedCookie.split(';');
    for(let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(cname) == 0) {
            return c.substring(cname.length, c.length);
        }
    }
    return "";
}
