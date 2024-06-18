import './bootstrap';
import '~resources/scss/app.scss';
import.meta.glob(["../img/**"]);
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

const whereYouGoModal = document.getElementById('whereYouGoModal');
const whereYouGoButton = document.getElementById('whereYouGo');
const userModal = document.getElementById('userModal');
const user = document.getElementById('user');
let isVisible = false;
let isVisibleUser = false;

function toggleMenu() {
    // Chiudi l'altro modale se è aperto
    if (isVisibleUser) {
        isVisibleUser = false;
        userModal.style.display = 'none';
    }

    // Toggle del modale corrente
    isVisible = !isVisible;
    whereYouGoModal.style.display = isVisible ? 'block' : 'none';
}

function toggleMenuUser() {
    // Chiudi l'altro modale se è aperto
    if (isVisible) {
        isVisible = false;
        whereYouGoModal.style.display = 'none';
    }

    // Toggle del modale corrente
    isVisibleUser = !isVisibleUser;
    userModal.style.display = isVisibleUser ? 'block' : 'none';
}

whereYouGoButton.addEventListener('click', function (e) {
    if (isVisible === false) {
        toggleMenu();
    }
    e.stopPropagation();
});

user.addEventListener('click', function (e) {
    toggleMenuUser();
    e.stopPropagation();
});

document.addEventListener('click', function () {
    if (isVisible) {
        isVisible = false;
        whereYouGoModal.style.display = 'none';
    }
    if (isVisibleUser) {
        isVisibleUser = false;
        userModal.style.display = 'none';
    }
});

whereYouGoModal.addEventListener('click', function (event) {
    event.stopPropagation();
});

userModal.addEventListener('click', function (event) {
    event.stopPropagation();
});