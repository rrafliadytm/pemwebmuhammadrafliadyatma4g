 // Fungsi untuk menghitung volume kubus
 function calculateVolumeKubus() {
    const sisiKubus = parseFloat(document.getElementById('sisiKubus').value);
    if (isNaN(sisiKubus) || sisiKubus <= 0) {
        alert('Tolong inputkan angka bernilai positif dulu loh ya rek.');
        return;
    }
    const volume = sisiKubus * sisiKubus * sisiKubus;
    document.getElementById('hasilKubus').textContent = 'Volume Kubus Adalah: ' + volume.toFixed(2) + ' cm kubik';
}

// Fungsi untuk menghitung volume balok
function calculateVolumeBalok() {
    const panjangBalok = parseFloat(document.getElementById('panjangBalok').value);
    const lebarBalok = parseFloat(document.getElementById('lebarBalok').value);
    const tinggiBalok = parseFloat(document.getElementById('tinggiBalok').value);
    if (isNaN(panjangBalok) || panjangBalok <= 0 || isNaN(lebarBalok) || lebarBalok <= 0 || isNaN(tinggiBalok) || tinggiBalok <= 0) {
        alert('Tolong inputkan angka bernilai positif dulu loh ya rek.');
        return;
    }
    const volume = panjangBalok * lebarBalok * tinggiBalok;
    document.getElementById('hasilBalok').textContent = 'Volume Balok Adalah ' + volume.toFixed(2) + ' cm kubik';
}

// Fungsi untuk menghitung volume tabung
function calculateVolumeTabung() {
    const jariTabung = parseFloat(document.getElementById('jariTabung').value);
    const tinggiTabung = parseFloat(document.getElementById('tinggiTabung').value);
    if (isNaN(jariTabung) || jariTabung <= 0 || isNaN(tinggiTabung) || tinggiTabung <= 0) {
        alert('Tolong inputkan angka bernilai positif dulu loh ya rek.');
        return;
    }
    const volume = Math.PI * jariTabung * jariTabung * tinggiTabung;
    document.getElementById('hasilTabung').textContent = 'Volume Tabung Adalah: ' + volume.toFixed(2) + ' cm kubik';
}

// Fungsi untuk menghitung volume kerucut
function calculateVolumeKerucut() {
    const jariKerucut = parseFloat(document.getElementById('jariKerucut').value);
    const tinggiKerucut = parseFloat(document.getElementById('tinggiKerucut').value);
    if (isNaN(jariKerucut) || jariKerucut <= 0 || isNaN(tinggiKerucut) || tinggiKerucut <= 0) {
        alert('Tolong inputkan angka bernilai positif dulu loh ya rek.');
        return;
    }
    const volume = (1 / 3) * Math.PI * jariKerucut * jariKerucut * tinggiKerucut;
    document.getElementById('hasilKerucut').textContent = 'Volume Kerucut Adalah: ' + volume.toFixed(2) + ' cm kubik';
}

// Fungsi untuk menghitung volume bola
function calculateVolumeBola() {
    const jariBola = parseFloat(document.getElementById('jariBola').value);
    if (isNaN(jariBola) || jariBola <= 0) {
        alert('Tolong inputkan angka bernilai positif dulu loh ya rek.');
        return;
    }
    const volume = (4 / 3) * Math.PI * jariBola * jariBola * jariBola;
    document.getElementById('hasilBola').textContent = 'Volume Bola Adalah: ' + volume.toFixed(2) + ' cm kubik';
}

// Fungsi untuk menghitung volume prisma segitiga
function calculateVolumePrismaSegitiga() {
    const panjangAlasPrisma = parseFloat(document.getElementById('panjangAlasPrisma').value);
    const tinggiAlasPrisma = parseFloat(document.getElementById('tinggiAlasPrisma').value);
    const tinggiPrisma = parseFloat(document.getElementById('tinggiPrisma').value);
    if (isNaN(panjangAlasPrisma) || panjangAlasPrisma <= 0 || isNaN(tinggiAlasPrisma) || tinggiAlasPrisma <= 0 || isNaN(tinggiPrisma) || tinggiPrisma <= 0) {
        alert('Tolong inputkan angka bernilai positif dulu loh ya rek.');
        return;
    }
    const volume = (1 / 2) * panjangAlasPrisma * tinggiAlasPrisma * tinggiPrisma;
    document.getElementById('hasilPrisma').textContent = 'Volume Prisma Segitiga Adalah: ' + volume.toFixed(2) + ' cm kubik';
}
