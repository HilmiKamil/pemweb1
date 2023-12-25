
function validateForm() {
    let x = document.forms["myForm"]["fname"].value;
    let email = document.forms["myForm"]["email"].value;
    let jberangkat = document.forms["myForm"]["jberangkat"].value
    let tberangkat = document.forms["myForm"]["tberangkat"].value
    let tiket = document.forms["myForm"]["tiket"].value
    var error = [];
    
    if (x.length === 0 || x.length > 30) {
        error.push("Nama harus diisi dan maksimal 30 karakter");
        document.getElementById("username").style.borderColor = "red";
    } else {
        document.getElementById("username").style.borderColor = "";
    }
    
    if (email == "") {
        error.push("Email harus diisi");
        document.getElementById("email").style.borderColor = "red";
    } else {
        document.getElementById("email").style.borderColor = "";
    }
    
    if (jberangkat == "") {
        error.push("Jam Keberangkatan harus diisi");
        document.getElementById("jberangkat").style.borderColor = "red";
    } else {
        document.getElementById("jberangkat").style.borderColor = "";
    }
    
    if (tberangkat == "") {
        error.push("Tujuan Keberangkatan harus diisi");
        document.getElementById("tberangkat").style.borderColor = "red";
    } else {
        document.getElementById("tberangkat").style.borderColor = "";
    }
    
    if (tiket < 1 || tiket > 10 || isNaN(tiket)) {
        error.push("Jumlah Tiket harus diisi dari bilangan bulat 1 sampai 10");
        document.getElementById("ticket").style.borderColor = "red";
    } else {
        document.getElementById("ticket").style.borderColor = "";
    }

    if (error.length > 0) {
        document.getElementById("error").innerHTML = "<strong>Error:</strong><br>" + error.join("<br>");
        document.getElementById("error").style.color = "red";
        result();
    } else {
        document.getElementById("error").innerHTML = "";
        document.getElementById("hasilUser").innerText = x;
        document.getElementById("hasilEmail").innerText = email;
        document.getElementById("hasilJam").innerText = jberangkat;
        document.getElementById("hasilTujuan").innerText = tberangkat;
        document.getElementById("hasilTiket").innerText = tiket;
        message();
    }
}

function message() {
    document.getElementById("username").style.borderColor = "";
    document.getElementById("email").style.borderColor = "";
    document.getElementById("jberangkat").style.borderColor = "";
    document.getElementById("tberangkat").style.borderColor = "";
    document.getElementById("ticket").style.borderColor = "";
}

function result() {
    document.getElementById("hasilUser").innerText = "";
    document.getElementById("hasilEmail").innerText = "";
    document.getElementById("hasilJam").innerText = "";
    document.getElementById("hasilTujuan").innerText = "";
    document.getElementById("hasilTiket").innerText = "";
}
