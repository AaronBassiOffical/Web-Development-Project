function clear(e){

    e.preventDefault();

    let decision = confirm('Are you sure you want to clear?');
    
    if(decision){
        document.getElementById('addpost').reset();
    }
    
}

let reset = document.getElementById('clear');
reset.addEventListener('click', clear);



function formStatus(e){

    let textTitle = document.getElementById('title');
    let textContent = document.getElementById('entry');

    
    if(textTitle.value == "" && textContent.value == ""){
        e.preventDefault();
    }
    
    if(textTitle.value == "" ){
        e.preventDefault();
    }

    if(textContent.value == ""){
        e.preventDefault();
    }



}

let error = document.getElementById('checks');
error.addEventListener('click', formStatus);




