

function copyText(text,btn){
    let customTextId = `#${text}`;
    let customBtnId = `#${btn}`;

    let button = document.querySelector(customBtnId);
    let content = document.querySelector(customTextId);

    navigator.clipboard.writeText(content.textContent)
    .then(()=>{
        button.textContent = " copied";    
        setTimeout(()=>{

            button.textContent="";
        },4000)

    }).catch(()=>{
        console.log("could not copy")
    })

    
}
