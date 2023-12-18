function biayaparkir(){
    let masuk = document.querySelector("#masuk").value
    let keluar = document.querySelector("#keluar").value

    let durasi = keluar - masuk

    let biaya = 3000

        for (let i = 2; i < durasi; i++){
            biaya +=1000
        }
    
        let hasilDurasi = document.querySelector("#hasilDurasi")
        let totalBiaya = document.querySelector("#totalBiaya")

        hasilDurasi.innerHTML = durasi
        totalBiaya.innerHTML = biaya

    }

    