/* <script>
        alert(hasil)
       switch(barang){
        case 'TV' : harga_satuan = 2000000; break;
        case 'Kulkas' : harga_satuan = 4000000; break;
        case 'AC' : harga_satuan = 3000000; break;
        default: harga_satuan = 0;
    }
</script> */


function dataPembeli(){
    let forms = document.getElementById('form');
    let nama = forms.nama.value;
    let produk = forms.produk.value;
    let jumlah = forms.jumlah.value;
    let data = `Input Data
    <br> Nama : ${nama}
    <br> Produk : ${produk}
    <br> Jumlah Produk : ${jumlah}
    `;
    document.getElementById('hasil').innerHTML = data;
} 
{/* <script>
        alert(hasil)
       switch(barang){
        case 'TV' : harga_satuan = 2000000; break;
        case 'Kulkas' : harga_satuan = 4000000; break;
        case 'AC' : harga_satuan = 3000000; break;
        default: harga_satuan = 0;
    }
</script> */}