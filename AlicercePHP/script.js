document.getElementById('contactForm').addEventListener('submit', function(event) {
   event.preventDefault(); // Impede o envio do formulário
 
   const name = document.getElementById('name').value.trim();
   const email = document.getElementById('email').value.trim();
   const message = document.getElementById('message').value.trim();
   const status = document.getElementById('formStatus');
 
   if (name === '' || email === '' || message === '') {
     status.textContent = 'Por favor, preencha todos os campos.';
     status.style.color = 'red';
   } else {
     status.textContent = 'Mensagem enviada com sucesso!';
     status.style.color = 'green';
     // Aqui você pode integrar com o PHP futuramente
   }
 });
 