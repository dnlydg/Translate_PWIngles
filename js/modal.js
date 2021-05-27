
const alterModal = document.getElementById("alter-modal");
const modalAdicionar = document.getElementById("modalAdicionar");

const spanAlt = document.getElementsByClassName("close")[0];
const spanAdd = document.getElementsByClassName("close")[1];


function openModal() {
  alterModal.style.display = "block";
}

function openModalAdd() {
  modalAdicionar.style.display = "block";
}

spanAlt.onclick = function() {
  alterModal.style.display = "none";
  modalAdicionar.style.display = "none";
}

spanAdd.onclick = function() {
  alterModal.style.display = "none";
  modalAdicionar.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modalAlterar || event.target == modalAdicionar) {
    modalAlterar.style.display = "none";
    modalAdicionar.style.display = "none";
  }
}



const altBotao = document.getElementById("alterar-termo");

altBotao.disabled
