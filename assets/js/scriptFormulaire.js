const showPopupButtonForm = document.getElementById('PopupForm');
const popupForm = document.getElementById('FormPop');
const closePopupButtonForm = document.getElementById('closePopupForm');

showPopupButtonForm.addEventListener('click', () => {
    popupForm.style.display = 'block';
});

closePopupButtonForm.addEventListener('click', () => {
    popupForm.style.display = 'none';
});

// Fermer la popup si l'utilisateur clique en dehors de celle-ci
window.addEventListener('click', (event) => {
    if (event.target === popupForm) {
        popupForm.style.display = 'none';
    }
});
