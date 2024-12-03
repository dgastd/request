document.getElementById('contact-form').addEventListener('submit', function(event) {
  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  
  if (!name || !email) {
    alert('Please fill in all required fields.');
    event.preventDefault();
  }
});
