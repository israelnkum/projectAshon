
// Checking the password Strength
var pass = document.getElementById("new_password");
pass.addEventListener('keyup',function () {
    checkPassword(pass.value);
});
function checkPassword(new_password){
    var strengthBar = document.getElementById("strength");
    var strength =0;

    if (new_password.length >= 8) {
        strength +=2;
    }
    if (new_password.match(/[A-Z]+/)) {
        strength +=1;
    }
    if (new_password.match(/[a-z0-9]+/)) {
        strength +=1;
    }
    if (new_password.match(/[!@#$%^&*()_+~<>?]+/)) {
        strength +=1;
    }

    switch(strength){
        case 0:
            strengthBar.value=0;
            break;
        case 2:
            strengthBar.value=50;
            break;
        case 3:
            strengthBar.value=70;
            break;
        case 4:
            strengthBar.value=80;
            strengthBar.backgroundColor('red');
            break;
        case 5:
            strengthBar.value=100;
            break;

    }

}
