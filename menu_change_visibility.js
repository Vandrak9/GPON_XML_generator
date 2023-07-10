var select = document.getElementById('ONU_mode');
var input1 = document.getElementById('ONU_ROUTER');
var input2 = document.getElementById('ONU_BRIDGE');
var label1 = document.getElementById('label_select_router');
var label2 = document.getElementById('label_select_bridge');
select.addEventListener('change', handleSelectChange);

function handleSelectChange() {

    input1.classList.add('hidden');
    input2.classList.add('hidden');
    label1.classList.add('hidden');
    label2.classList.add('hidden');

    if (select.value === 'ROUTER') {
         input1.classList.remove('hidden');
         label1.classList.remove('hidden');
    } else if  (select.value === 'BRIDGE') {
        input2.classList.remove('hidden');
        label2.classList.remove('hidden');
    } 
}


