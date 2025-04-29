document.getElementById('contactForm').addEventListener('submit', function(event) {
   event.preventDefault(); //impede o envio do formulario


   const name = Document.getElementById ('name').value.trim();
   const email = Document.getElementById ('email').value.trim();
   const message = Document.getElementById('message').value.trim();
   const status = Document.getElementById ('formStatus');
   
   if (name == '' || email === '' || message === ''){
    status
   }





});