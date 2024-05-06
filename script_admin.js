const Button_Stats = document.getElementById('Button_Stats');
const Button_Exit = document.getElementById('Exit');
const Button_Change = document.getElementById('Button_Change');
const Popup_Stats = document.getElementById('Popup_Stats');
const Stats = document.getElementById('Stats');
const Form = document.getElementById('Form');

Button_Stats.addEventListener('click', () => {
    Popup_Stats.style.display = 'block';
});

Button_Exit.addEventListener('click', () => {
    
});

Button_Change.addEventListener('click', () => {
    
});

window.addEventListener('popstate', () => {
    Popup.style.display = 'none';
});
