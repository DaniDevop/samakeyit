<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Letter Template</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.letter-container {
  width: 8.5in; /* Standard letter paper width */
  margin: 0 auto; /* Center the letter on the page */
  padding: 1in; /* Add some padding around the content */
}

.letter-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.letter-logo {
  width: 150px; /* Adjust as needed */
}

.letter-info {
  text-align: right;
}

.letter-content {
  margin-top: 1in; /* Add space between the header and content */
}

.letter-date {
  text-align: right;
  margin-bottom: 0.5in;
}

.letter-salutation {
  margin-bottom: 0.5in;
}

.letter-body {
  text-align: justify; /* Justify the text */
  line-height: 1.5; /* Adjust line spacing as needed */
}

.letter-closing {
  margin-top: 1in;
}

.letter-signature {
  margin-top: 0.5in;
}

  </style>
</head>
<body>

  <div class="letter-container">
    <header class="letter-header">
      <div class="letter-logo">

      </div>

      <div class="letter-info">
      <p>Date  : {{  date('Y-m-d') }}</p>
        <p> Name : {{  $demandeur->nom }}</p>
        <p> Title : {{  $document->titre}}</p>

      </div>
    </header>

    <div class="letter-content">
      <p class="letter-date">Date</p>

      <p class="letter-salutation">Dear [Recipient Name],</p>

      <p class="letter-body">


      <a href="{{ Storage::url($demande->document) }}" target="_blank">Telecharger</a>
      </p>

      <p class="letter-closing">Sincerely,</p>

      <p class="letter-signature">A bientot</p>
    </div>
  </div>

</body>
</html>
