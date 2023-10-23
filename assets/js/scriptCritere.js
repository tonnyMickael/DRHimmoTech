const showPopupButtonCrite = document.getElementById('Critepop');
const popupCrite = document.getElementById('Crite');
const closePopupButtonCrite = document.getElementById('closePopupCrite');

showPopupButtonCrite.addEventListener('click', () => {
    popupCrite.style.display = 'block';
});

closePopupButtonCrite.addEventListener('click', () => {
    popupcrite.style.display = 'none';
});

// Fermer la popup si l'utilisateur clique en dehors de celle-ci
window.addEventListener('click', (event) => {
    if (event.target === popupCrite) {
        popupCrite.style.display = 'none';
    }
});
