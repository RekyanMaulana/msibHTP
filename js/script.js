function dataPerson() {
    let forms = document.getElementById('frm');
    let nama = forms.nama.value;
    let pekerjaan = forms.pekerjaan.value;
    let hoby = forms.hoby.value;
    let data = `Input data :
    <br> Nama : ${nama}
    <br> Pekerjaan : ${pekerjaan}
    <br> hobby : ${hoby}`

    document.getElementById('hasil').innerHTML = data;
}