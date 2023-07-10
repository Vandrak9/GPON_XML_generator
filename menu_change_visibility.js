var select = document.getElementById('ONU_mode');
var input1 = document.getElementById('ONU_ROUTER');
var input2 = document.getElementById('ONU_BRIDGE');

select.addEventListener('change', handleSelectChange);

function handleSelectChange() {

    input1.classList.add('hidden');
    input2.classList.add('hidden');

    if (select.value === 'ROUTER') {
         input1.classList.remove('hidden');
    } else if  (select.value === 'BRIDGE') {
        input2.classList.remove('hidden');
    } 
}


