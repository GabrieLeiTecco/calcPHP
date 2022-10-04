function insert(num) {
    var previousResult = document.getElementById('resultado').nodeValue;
    document.getElementById('resultado').value = previousResult + num;
}