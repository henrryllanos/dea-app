const container = document.querySelector('.containers');
const seats = document.querySelectorAll('.row .seat:not(.occupied)');
const count = document.getElementById('count');
const total = document.getElementById('total');
const movieSelect = document.getElementById('movie');

let ticketPrice = +movieSelect.value;

//Update total and count
function updateSelectedCount() {
  const selectedSeats = document.querySelectorAll('.row .seat.selected');
  const selectedSeatsCount = selectedSeats.length;
  count.innerText = selectedSeatsCount;
  total.innerText = selectedSeatsCount * ticketPrice;
}

//Movie Select Event
movieSelect.addEventListener('change', e => {
  ticketPrice = +e.target.value;
  updateSelectedCount();
});

//Seat click event
container.addEventListener('click', e => {
  if (document.getElementById('exampleRadios1').checked) {
    if (e.target.classList.contains('seat') &&
      !e.target.classList.contains('occupied')) {
      e.target.classList.toggle('selected');

    }
    updateSelectedCount();
  } else if (document.getElementById('exampleRadios2').checked) {
    if (e.target.classList.contains('seat') &&
      !e.target.classList.contains('occupied')) {
      e.target.classList.toggle('occupied');

    }
  }else{
   if (e.target.classList.contains('selected') ||
      e.target.classList.contains('occupied')) {
      e.target.classList.remove('selected');
      e.target.classList.remove('occupied');

    }
  }


});



function addAutomatic() {
  const botones = document.querySelectorAll('.seat:not(.selected):not(.occupied):not(.seleccionado):not(.sample)');
  const maximo = document.getElementById('numero');

  for (let i = 0; i < maximo.value; i++) {
    const boton = botones[i];
    if (boton.classList.contains('seat') && !boton.classList.contains('occupied')) {
      boton.classList.toggle('selected');
    } else {
      boton.style.background = 'red';
    }
    updateSelectedCount();
  }
}



// Call addInput() function on button click
function addInput() {
  const div = document.createElement('div');
  const filas = document.getElementById('filas');
  div.classList.add('rows');
  //let input = document.createElement('input');
  for (let i = 0; i < filas.value; i++) {
    let input = document.createElement('div');
    input.classList.add('seat');
    let id = i + 1;
    input.setAttribute("id", id);
    div.appendChild(input);
  }
  container.appendChild(div);
}