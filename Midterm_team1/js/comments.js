var button = document.getElementById('btnFade'); 

button.onclick = function() {
    var div = document.getElementById('hideMe');
    if (div.style.display !== 'none') {
        div.style.display = 'none';
    }
    else {
        div.style.display = 'block';
    }
};