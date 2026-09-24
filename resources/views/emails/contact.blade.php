<!DOCTYPE html>
<html>
<head>
    <title>Nouveau message de contact</title>
</head>
<body>

    <h2>Nouveau message depuis le site Ace_Arts & Déco</h2>

    <p><strong>Nom :</strong> {{ $name }}</p>
    <p><strong>Email :</strong> {{ $email }}</p>
    <p><strong>Objet :</strong> {{ $subject }}</p>

    <hr>

    <p><strong>Message :</strong></p>

    <p>{{ $body }}</p>

</body>
</html>