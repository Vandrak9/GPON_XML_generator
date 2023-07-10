var select = document.getElementById('ONU');
var input1 = document.getElementById('input1');
var input2 = document.getElementById('input2');
var input3 = document.getElementById('input3');

select.addEventListener('change', handleSelectChange);

function handleSelectChange() {
    if (select.value === 'DASAN_H665') {
        input1.style.display = 'block';
        input2.style.display = 'none';
        input3.style.display = 'none';
    } else if (select.value === 'DASAN_H665C') {
        input1.style.display = 'none';
        input2.style.display = 'block';
        input3.style.display = 'none';
    } else if (select.value === 'HALNY_HL-1GE') {
        input1.style.display = 'none';
        input2.style.display = 'none';
        input3.style.display = 'block';
    } else {
        input1.style.display = 'none';
        input2.style.display = 'none';
        input3.style.display = 'none';
    }
}
