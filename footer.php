<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<?php include 'header.php' ?><br><br><br>
    <div class="container mt-5">
        <h1 class="card-title text-danger text-decoration-underline">Contactez-nous</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-danger">Nous Contacter</h5>
                        <form class="text-danger fw-bold ">
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" class="form-control" id="nom" placeholder="Votre nom">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Votre email">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Votre message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger fw-bold mt-3">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title text-danger">Coordonnées</h5>
                        <p class="card-text ">
                            Vous pouvez nous contacter en utilisant le formulaire de contact à gauche ou en utilisant les informations de contact ci-dessous :
                        </p>
                        <ul>
                            <li><strong class="text-danger">Adresse:</strong> 123 Rue de l'Exemple, Ville, Pays</li>
                            <li><strong class="text-danger">Téléphone:</strong> +33 123 456 789</li>
                            <li><strong class="text-danger">Email:</strong> contact@example.com</li>
                        </ul>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15432.763578333019!2d-17.433532627983556!3d14.75827267190618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10ce53e08bff3%3A0x7d75e86138a2ca65!2sPharmacie%20Ndingala%20cit%C3%A9%20Fadia!5e0!3m2!1sfr!2ssn!4v1698421280090!5m2!1sfr!2ssn" width="600" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <footer class="bg-danger text-light mt-3 ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-3 mb-3 fs-4 fw-bold">
                    <p>&copy; 2023 Sarr Apple</p>
                </div>
                <div class="col-md-6 text-right mt-3 mb-3 ">
                    <a href="#"><i class="fab fa-youtube m-2 text-white fs-4"></i></a>
                    <a href="#"><i class="fab fa-facebook m-2 text-white fs-4"></i></a>
                    <a href="#"><i class="fab fa-instagram m-2 text-white fs-4"></i></a>
                    <a href="#"><i class="fab fa-tiktok m-2 text-white fs-4"></i></a>
                    <a href="#"><i class="fab fa-linkedin m-2 text-white fs-4"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
