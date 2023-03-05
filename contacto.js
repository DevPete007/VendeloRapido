const form = document.getElementById('contact-form');
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const messageInput = document.getElementById('message');
const nameError = document.getElementById('name-error');
const emailError = document.getElementById('email-error');
const messageError = document.getElementById('message-error');

form.addEventListener('submit', (e) => {
  e.preventDefault();
  
  // Validate name
  if (nameInput.value === '') {
    nameError.textContent = 'Please enter your name';
    nameInput.classList.add('error');
  } else {
    nameError.textContent = '';
    nameInput.classList.remove('error');
  })
  
  // Validate email
  const emailRegex = /^\S+@\S+\.\
  const form = document.getElementById('contact-form');

form.addEventListener('submit', function(event) {
  event.preventDefault(); // Previene la acción predeterminada del formulario

  if (validateForm()) {
    form.submit(); // Envía el formulario si pasa la validación
  }
});

