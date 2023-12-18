function kursDollar(){
    const dollar = 15494

    let rup = document.getElementById("rupiah").value
        console.log(rup)

        let kurs = rup / dollar

        let hasilKurs = document.getElementById("hasilKurs")

        hasilKurs.innerHTML = kurs
    }