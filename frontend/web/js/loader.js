window.addEventListener('load', function () {
    var el = document.querySelector('#loader-main');
    var fooSt = sessionStorage.getItem('loadHex');
    if (!fooSt) {
        el.style.display = 'block';
        sessionStorage.setItem('loadHex', 'load');
        setTimeout(function () {
            el.classList.add('hide');
        }, 2600);
        setTimeout(function () {
            el.style.display = 'none';
        }, 3100);
    }
});
