<?php
// Обработка отправки формы
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);
    
    // Здесь можно добавить обработку и отправку данных (например, на email или в базу данных)
    // Для демонстрации просто покажем введенные данные
    $successMessage = "Thank you for your message, $name!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Modern landing page to collect contacts">
  <meta name="author" content="CapitalX">
  <title>Contact Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <header>
      <h1>Leave Your Contact Information</h1>
      <p>To receive more information, fill out the form below.</p>
      <!-- Logo moved below the text -->
      <img src="logo.png" alt="Company Logo" class="logo">
    </header>
    
    <?php if (isset($successMessage)): ?>
      <div class="success-message">
        <p><?php echo $successMessage; ?></p>
      </div>
    <?php endif; ?>
    
    <form id="contact-form" method="POST" action="index.php">
      <label for="name">Your Name</label>
      <input type="text" id="name" name="name" required placeholder="Enter your name" value="<?php echo isset($name) ? $name : ''; ?>">
      
      <label for="email">Your Email</label>
      <input type="email" id="email" name="email" required placeholder="Enter your email" value="<?php echo isset($email) ? $email : ''; ?>">
      
      <label for="message">Message</label>
      <textarea id="message" name="message" placeholder="Your message"><?php echo isset($message) ? $message : ''; ?></textarea>
      
      <button type="submit" class="submit-btn">Submit</button>
    </form>
    
    <footer>
      <p>© 2024 CapitalX | <a href="privacy.php">Privacy Policy</a></p>
      <p>Contact us: <a href="mailto:capitalx@gmail.com">capitalx@gmail.com</a></p>
    </footer>
  </div>

  <script src="script.js"></script>
</body>
</html>
