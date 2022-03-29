
let display_element = null;

function display(box_id){
    let custom_create_box_id = `#${box_id}`;
    
    const box = document.querySelector(custom_create_box_id);
    box.style.display = "block";

    display_element = box;

}

function hide(){
    display_element.style.display = "none";
    display_element = null;

}
