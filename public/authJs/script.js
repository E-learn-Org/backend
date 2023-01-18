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
}

function show(anything){
    document.querySelector('.textBox').value = anything;
}

let dropdown = document.querySelector('.dropdown');
dropdown.onclick = function(){
    dropdown.classList.toggle('active');
}

function display(anything)
{
    document.querySelector('.textBox1').value = anything;
}

let dropdown2 = document.getElementById("dropdown2");
dropdown2.onclick = function(){
    dropdown2.classList.toggle('active');
}

function level(anything)
{
    document.querySelector('.textBox2').value = anything;
}

let dropdown3 = document.getElementById("dropdown3");
dropdown3.onclick = function(){
    dropdown3.classList.toggle('active');
}

// dashboard
function checkBtn(){
    let sideMenu = document.querySelector(".aside_info");
    let menuBtn = document.querySelector(".menu_btn");

    menuBtn.addEventListener('click', () => {
        sideMenu.style.display = 'block';
    })
}

function unCheckBtn(){
    let sideMenu = document.querySelector(".aside_info");
    let closeBtn = document.querySelector(".close_btn");
    closeBtn.addEventListener('click', () => {
        sideMenu.style.display = "none";
    })
}

function checkTheme(){
    let themeChanger = document.querySelector(".theme_toggler");

    themeChanger.addEventListener('click', () => {
        document.body.classList.toggle('dark-them-variables');
        themeChanger.querySelector('i:nth-child(1)').classList.toggle('active');
        themeChanger.querySelector('i:nth-child(2)').classList.toggle('active');
    })
}
