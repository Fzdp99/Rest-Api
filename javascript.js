// =========================inisialisasi==========================

const btnmi = document.getElementById("btnmi");
const btnmo = document.getElementById("btnmo");
const btnmh = document.getElementById("btnmh");

const ip = document.getElementById("ip");
const tm = document.getElementById("tm");
const hp = document.getElementById("hp");

var ipjb = document.getElementById("ipjb").value;
var iptp = document.getElementById("iptp").value;
var ippn = document.getElementById("ippn").value;
var ipps = document.getElementById("ipps").value;

const btninput = document.getElementById("btninput");
const btntampil = document.getElementById("btntampil");
const btnhapus = document.getElementById("btnhapus");

// ===========================visible hidden=======================

btnmi.addEventListener("click", function(){
     ip.style.visibility = "visible";
     tm.style.visibility = "hidden";
     hp.style.visibility = "hidden";
})

btnmo.addEventListener("click", function(){
     tm.style.visibility = "visible";
     ip.style.visibility = "hidden";
     hp.style.visibility = "hidden";
})

btnmh.addEventListener("click", function(){
     hp.style.visibility = "visible";
     ip.style.visibility = "hidden";
     tm.style.visibility = "hidden";
})
