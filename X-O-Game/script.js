const divs   = document.querySelectorAll('.div');
const status = document.getElementById('status');
const turnSym = document.getElementById('turn-sym');
const btn    = document.getElementById('btn');

const scoreX = document.getElementById('score-x');
const scoreO = document.getElementById('score-o');
const scoreD = document.getElementById('score-d');

const WINS = [
  [0,1,2],[3,4,5],[6,7,8], // rows
  [0,3,6],[1,4,7],[2,5,8], // columns
  [0,4,8],[2,4,6]          // diagonals
];

let turn     = 'x';
let gameOver = false;
let scores   = { x: 0, o: 0, d: 0 };

// Cell click 
for (let i = 0; i < divs.length; i++) {
  divs[i].addEventListener('click', function () {
    if (gameOver || divs[i].classList.contains('taken')) return;

    // Mark the cell
    divs[i].classList.add(turn, 'taken', 'pop');
    divs[i].textContent = turn.toUpperCase();

    // Remove pop class after animation ends
    divs[i].addEventListener('animationend', () => {
      divs[i].classList.remove('pop');
    }, { once: true });

    // Check win
    const winCombo = checkWinner();
    if (winCombo) {
      gameOver = true;
      scores[turn]++;
      updateScores();
      winCombo.forEach(idx => divs[idx].classList.add('win-cell'));
      status.innerHTML = `<span class="win-msg ${turn}">${turn.toUpperCase()} wins! 🎉</span>`;
      return;
    }

    // Check draw
    if ([...divs].every(d => d.classList.contains('taken'))) {
      gameOver = true;
      scores.d++;
      updateScores();
      status.innerHTML = `<span class="win-msg draw">It's a draw!</span>`;
      return;
    }

    // Switch turn
    turn = turn === 'x' ? 'o' : 'x';
    turnSym.textContent  = turn.toUpperCase();
    turnSym.className    = `symbol ${turn}`;
    status.innerHTML     = `Turn: <span class="symbol ${turn}" id="turn-sym">${turn.toUpperCase()}</span>`;
  });
}

//  Win checker 
function checkWinner() {
  for (const [a, b, c] of WINS) {
    if (
      divs[a].classList.contains('taken') &&
      divs[a].classList.contains(turn) &&
      divs[b].classList.contains(turn) &&
      divs[c].classList.contains(turn)
    ) {
      return [a, b, c];
    }
  }
  return null;
}

// Update scoreboard 
function updateScores() {
  scoreX.textContent = scores.x;
  scoreO.textContent = scores.o;
  scoreD.textContent = scores.d;
}

// Restart 
btn.addEventListener('click', function () {
  divs.forEach(d => {
    d.className = 'div';     // removes x, o, taken, win-cell, pop
    d.textContent = '';
  });
  turn     = 'x';
  gameOver = false;
  status.innerHTML = `Turn: <span class="symbol x" id="turn-sym">X</span>`;
});