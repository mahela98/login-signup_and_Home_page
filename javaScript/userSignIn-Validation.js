function validateForm() {
    var x = document.forms["userSignIn"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
        alert("Not a valid e-mail address");
        return false;
    } else {
        return true;
    }
}

function CheckPassword() {
var inputtxt = document.forms["userSignIn"]["password"].value;
    var passw = /^[A-Za-z]\w{7,14}$/;
    if (inputtxt.value.match(passw)) {
        alert('right...!');
        return true;
    } else {
        alert('Wrong...!');
        return false;
    }
}