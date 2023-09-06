// Menambahkan informasi pribadi ke elemen HTML dengan innerHTML
let Nama = "Devia Fitri Nopiani";
let jenis_kelamin = "Perempuan";
let umur = 20;
let Alamat = "Jln raya Rancabali-Patengan Ciwidey";
let noHp = +6285216486908;
let email = 'dviafnopiani@gmail.com';

const InformasiDiri = () => {
  return ` <p>Nama: <span class="highlight">${Nama}</span></p>
  <p>Jenis Kelamin: <span class="highlight">${jenis_kelamin}</span></p>
  <p>Umur: <span class="highlight">${umur}</span></p>
  <p>Alamat: <span class="highlight">${Alamat}</span></p>
  <p>No Handphone: <span class="highlight">${noHp}</span></p>
  <p>email: <span class="highlight">${email}</span></p>
  `;
};
document.getElementById("content").innerHTML = InformasiDiri();

// Button Theme dark
const toggleTheme = document.getElementById("toggleTheme");
toggleTheme.addEventListener("change", function () {
  const body = document.body;
  if (toggleTheme.checked) {
    document.cookie = "theme=dark; ";
    body.classList.add("dark-mode");
  } else {
    document.cookie = "theme=light; ";
    body.classList.remove("dark-mode");
  }
});