document.getElementById('myForm').addEventListener('submit', function(event) {
    var macAddressInput = document.getElementById('macAddress');
    var macErrorSpan = document.getElementById('macError');
    var macAddress = macAddressInput.value.trim();
    var macRegex = /^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/;

    if (!macRegex.test(macAddress)) {
        macErrorSpan.textContent = 'Neplatná MAC adresa';
        event.preventDefault();
    } else {
        macErrorSpan.textContent = '';
    }
});
