
const modalAlterar = document.getElementById("modalAlterar");
const modalAdicionar = document.getElementById("modalAdicionar");

const spanAlt = document.getElementsByClassName("close")[0];
const spanAdd = document.getElementsByClassName("close")[1];


function openModal() {
  modalAlterar.style.display = "block";
}

function openModalAdd() {
  modalAdicionar.style.display = "block";
}

spanAlt.onclick = function() {
  modalAlterar.style.display = "none";
  modalAdicionar.style.display = "none";
}

spanAdd.onclick = function() {
  modalAlterar.style.display = "none";
  modalAdicionar.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modalAlterar || event.target == modalAdicionar) {
    modalAlterar.style.display = "none";
    modalAdicionar.style.display = "none";
  }
}