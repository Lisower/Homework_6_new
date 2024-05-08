const Button_Stats = document.getElementById('Button_Stats');
const Button_Exit = document.getElementById('Exit');
const Button_Change = document.getElementById('Button_Change');
const Popup = document.getElementById('Popup');
const Stats = document.getElementById('Stats');
const Form = document.getElementById('Form');

Button_Stats.addEventListener('click', () => {
    Popup.style.display = 'block';
});

Button_Exit.addEventListener('click', () => {
    window.location.href = 'logout_admin.php';
});

Button_Change.addEventListener('click', () => {
    ;
});

window.addEventListener('popstate', () => {
    Popup.style.display = 'none';
});
