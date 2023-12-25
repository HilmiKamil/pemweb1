

function auth(){

const username = "Hilmi"
const password = "123"

let userInput = document.getElementById('username').value
let passInput = document.getElementById('password').value

if(userInput == username && passInput == password){
    document.location.href = 'home.html',true;
}else{
    alert("Gagal")
}

}