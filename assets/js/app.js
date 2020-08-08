function redirectTo(url) {

    location.replace(url)
}

var number = {
    'firstname' : 0,
    'lastname' : 0,
    'email' : 0,
    'phone' : 0,
    'account' :0

};
function showSettings(inputName) {

    var input = document.getElementById(inputName)
    
    if(number[inputName] == 0){
        if(input.classList.contains("d-none")){
            input.classList.remove("d-none") ;
        }
        input.classList.replace("animate-right", "animate-left");
        number[inputName] ++;
    }

    else {
        number[inputName] = 0;
        input.classList.replace("animate-left", "animate-right");
        setTimeout(function(){
            if(!input.classList.contains("d-none")){
                input.classList.add("d-none");
            }
        },350);

    }

}

function showButton(inputName) {

    var input = document.getElementById(inputName)

    if(number[inputName] == 0){
        if(input.classList.contains("d-none")){
            input.classList.remove("d-none") ;
        }
        input.classList.replace("fade-out", "fade-in");
        number[inputName] ++;
    }

    else {
        number[inputName] = 0;
        input.classList.replace("fade-in", "fade-out");
        setTimeout(function(){
            if(!input.classList.contains("d-none")){
                input.classList.add("d-none");
            }
        },350);

    }

}