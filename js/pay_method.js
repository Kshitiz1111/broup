const recip_individual = document.querySelector('.single');
const recip_split = document.querySelector('.split_members');
const payMethods = document.querySelector('.pay_methods');
const split_money_box = document.querySelector('.split_money_box'); 
const total_amount = document.querySelector('.total_amount');
const guide_text = document.querySelector('.guide_text');
const payById = document.querySelector('.pay_via_id');
const payByQR = document.querySelector('.pay_via_qr');
const payByNFC = document.querySelector('.pay_via_nfc');

const addIdNode = document.querySelector('.add_member_id');
const addQRNode = document.querySelector('.add_qr');
const camera = document.querySelector('.camera_view');
// scan popup
const qr_container = document.querySelector('.add_qr>.container');
const blur_background = document.querySelector('.blur_background');
//number of members to split into
let recipientSize = 0;
let paymentMethod = null;
var selectedIndicator = 0;

recip_individual.onchange = () =>{
    var prevSize = addIdNode.childElementCount;
    if(recip_individual.checked == true){
        recip_split.value = 0;
        if(prevSize < 1){
            recipientSize = 1;
            if(selectedIndicator == 1){
                addInputField();
            }
            
        }
        if(prevSize > 1){
            for(let i = prevSize; i > 1; i--){
                destroyInputField();
            }
        }
    }else if(recip_individual.checked == false && recip_split.value == 0){
        recipientSize = 0;
    }

    if(recip_individual.checked == false && recip_split.value == 0){
        for(let i = prevSize; i > 0; i--){
            destroyInputField();
        }
    }
updateMoney();
};

recip_split.onchange = () =>{
    recip_individual.checked = false;
    var prevSize = addIdNode.childElementCount;
    var currentSize = recip_split.value;
    if(currentSize > prevSize){
        recipientSize = currentSize - prevSize; 
        //if inputfield is 1 but want to add more input
        if(prevSize > 1 || currentSize > 1){
            var temp = selectedIndicator;
            if(temp == 1){
            addInputField();
            console.log(temp);
            }   
        }
    }

    if(currentSize < prevSize){
        var a = prevSize - currentSize;
        while(a){
            destroyInputField();
            a--;
        }
    }
    updateMoney();
};
total_amount.onchange = ()=>{
    updateMoney();
}

payMethods.onclick = function selectPayMethod(e){
    var target = e.target;
    paymentMethod = target.value;
    if(paymentMethod == 'ID'){ 
        // while click ID btn and members equals no of inputfield  
        var prevSize = addIdNode.childElementCount;
        var currentSize = recip_split.value; 
        if((currentSize == prevSize) && recip_individual.checked == false){
            recipientSize  = 0;
        }  
        addInputField();
        console.log(recipientSize);

        guideText("id");
        guide_text.appendChild(text);

    }else if(paymentMethod == 'QR'){
        blur_background.style.display = "block";
        qr_container.style.display = "block";
        openCamera();
    }
    
    selectedIndicator = 1;
    return selectedIndicator;
}


const text = document.createElement("p");
function guideText(msg){
    text.style.fontSize = '14px';
    if(msg == "id"){
        text.textContent = "enter members id below";
    }
}

function addInputField(){

    if(recipientSize > 0){
        for(let i = 0; i < recipientSize; ++i){            
            const input = document.createElement("input");
    
                function setAttributes(el, attrs) {
                    for(var key in attrs) {
                        el.setAttribute(key, attrs[key]);
                    }
                }
                setAttributes(input, {"type": "text", "name": "receiver_id",});
            
            addIdNode.appendChild(input);
        }
    }

    if(recip_individual.checked == true ){
        recipientSize = 0;
    }
    updateMoney();
}


function destroyInputField(){
    var lastElement = addIdNode.lastChild;
    addIdNode.removeChild(lastElement);
}


let showAmount = document.createElement('p');
split_money_box.appendChild(showAmount);

function updateMoney(){
    var totalAmount = total_amount.value;

    if(totalAmount == ""){
        totalAmount = 0;
    }
    parseInt(totalAmount);

    var totalHead = addIdNode.childElementCount;
    var amountPerHead = null;
    if(totalHead == 0 ){
        amountPerHead = 0;
        showAmount.textContent = `${parseFloat(amountPerHead).toFixed(2) +' '+'total'}`;
    }else if(totalHead > 1){
        amountPerHead = totalAmount / totalHead;
        showAmount.textContent = `${parseFloat(amountPerHead).toFixed(2) +' '+'per head'}`;
    }else if (totalHead == 1){
        amountPerHead = totalAmount;
        showAmount.textContent = `${parseFloat(amountPerHead).toFixed(2) +' '+'total'}`;
    }
}
updateMoney();

// for qr 

blur_background.onclick = ()=>{
    qr_container.style.display = 'none';
    blur_background.style.display = 'none';
}

function openCamera(){

}

function scan(){
    console.log('scanning');
}