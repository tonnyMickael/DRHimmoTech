const showPopupButtonDRH = document.getElementById('PopupDRH');
const popupDRH = document.getElementById('DRH');
const closePopupButtonDRH = document.getElementById('closePopupDRH');

showPopupButtonDRH.addEventListener('click', () => {
    popupDRH.style.display = 'block';
});

closePopupButtonDRH.addEventListener('click', () => {
    popupDRH.style.display = 'none';
});

// Fermer la popup si l'utilisateur clique en dehors de celle-ci
window.addEventListener('click', (event) => {
    if (event.target === popupDRH) {
        popupDRH.style.display = 'none';
    }
});
