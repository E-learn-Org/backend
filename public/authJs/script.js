function checkPassword(){
    // e.preventDefault();
    let password = document.getElementById("password").value;


    let cpassword = document.getElementById("cpassword").value;
    let message = document.getElementById("message");
    console.log(password.length);
    // return false;
    if(password.length > 0){
        if(password == cpassword){
            message.innerHTML = "Password match";
            console.log('password match');
            message.style.color('')
            return true;
        }else{
            message.innerHTML = "Password and confirm password donot match!";
            console.log('Password and confirm password donot match!');
            return false;
        }
    }else{
        alert("password field is empty!");
        message.innerHTML= "password field is empty";
        console.log('password field is empty!');
        return false;
    }

    console.log(password, cpassword);
    return false;
}
