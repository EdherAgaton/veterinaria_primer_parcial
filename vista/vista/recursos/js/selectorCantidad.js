function disminuir() {
  let cantidad = document.getElementById('cantidad').value;
  if (cantidad > 1) {
    document.getElementById('cantidad').value = --cantidad ;
  }
}

function incrementar() {
  let cantidad = document.getElementById('cantidad').value;
  document.getElementById('cantidad').value = ++cantidad;
}
