var select = document.getElementById('ONU_mode');
var input1 = document.getElementById('ONU_ROUTER');
var input2 = document.getElementById('ONU_BRIDGE');

select.addEventListener('change', handleSelectChange);

function handleSelectChange() {
    if (select.value === 'DASAN_H665') {
        input1.style.display = 'block';
        input2.style.display = 'none';
    } else if (select.value === 'DASAN_H665C') {
        input1.style.display = 'none';
        input2.style.display = 'block';
    } else {
        input1.style.display = 'none';
        input2.style.display = 'none';
    }
}
