document.getElementById('searchInp').onchange = function() {
    console.log("function is working")
    var location = document.getElementById('searchInp').value;
    document.getElementById('searchform').action = '?filter=&&order=date&&srch=' + location + '&&sort=ASC';
    
};