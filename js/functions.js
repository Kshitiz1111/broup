function preText(){
    let text = document.querySelectorAll('.details>p');
    let maxLength = 70;
    let indicator = '...';
    for(let i = 0; i < text.length; i++){
        if(text[i].textContent.length > 70){
            let a = text[i].textContent;
            let b = a.substring(0,maxLength)+indicator;
            text[i].textContent = b; 
        }
    }
}
window.onload=preText();


let toggleBtn = document.querySelector('.mob_member_btn>strong');

function showHideMember(){
    let memberContainer = document.querySelector('.member_container');

    if(toggleBtn.textContent == 'members'){
        toggleBtn.textContent = 'close';
        memberContainer.style.display = 'block';
        memberContainer.style.marginBottom = '1em';

    }else{
        toggleBtn.textContent = 'members';
        memberContainer.style.display = 'none';
    }
}

toggleBtn.addEventListener('click',showHideMember);

