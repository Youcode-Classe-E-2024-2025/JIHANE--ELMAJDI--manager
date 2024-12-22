<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My librairy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My librairy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=list_article&view=article">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?view=user&action=list_user">User</a>
                    </li>
                </ul>

                <form class="d-flex" role="sign-in">
                    <input class="form-control me-2" type="search" placeholder="Email" aria-label="Search">
                    <input class="form-control me-2" type="search" placeholder="Password" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Login</button>
                </form>
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="container mt-5 text-center">
            <h1 class="display-4 wow-title mb-4">User</h1>
            <a class="btn btn-outline-success btn-lg wow-button" href="index.php?view=article_form">
                <i class="fas fa-plus-circle"></i> Create Article
            </a>
        </div>
        <style>
            .wow-title {
                font-size: 3rem;
                font-weight: bold;
                color: #333;
                text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.1);
                transition: color 0.3s ease;
            }

            .wow-title:hover {
                color: #28a745;
            }

            .wow-button {
                background-color: #28a745;
                border: 2px solid #28a745;
                color: white;
                font-size: 1.2rem;
                padding: 15px 30px;
                border-radius: 50px;
                text-transform: uppercase;
                box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease, background-color 0.3s ease;
            }

            .wow-button:hover {
                background-color: #218838;
                transform: translateY(-5px);
            }

            .wow-button i {
                margin-right: 10px;
                transition: transform 0.2s ease;
            }

            .wow-button:hover i {
                transform: rotate(15deg);
            }
        </style>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="container mt-5">
                <div class="row justify-content-center">

                    <div class="col-md-6 col-lg-4">
                        <div class="card wow-card shadow-lg" style="border-radius: 25px; background: linear-gradient(145deg, #f5f5dc, #e1e0c6);">
                            <div class="card-body text-dark">
                                <h3 class="card-title text-center wow-title"><?= $row["name"] ?></h3>
                                <p class="card-text text-center wow-description"><?= $row["email"] ?></p>
                                <div class="mt-4">
                                    <h6><strong>Créé le:</strong> <?= $row["created_at"] ?></h6>
                                    <h6><strong>Mis à jour le:</strong> <?= $row["updated_at"] ?></h6>
                                    <h6><strong>Statut:</strong> <?= $row["status"] ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-auto">
                        <form action="controllers/delete_user.php?id=<?= $row['id'] ?>" method="POST">
                            <input type="hidden" name="id" value="<?= $row["id"] ?>">
                            <button type="submit" class="btn btn-danger btn-lg wow-button" style="border-radius: 50px; padding: 12px 30px; box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2); transition: transform 0.3s ease;">
                                <i class="fas fa-trash-alt"></i> Supprimer
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <style>
                .wow-card:hover {
                    transform: translateY(-15px);
                    box-shadow: 0 30px 40px rgba(0, 0, 0, 0.2);
                }

                .wow-title {
                    font-size: 1.8rem;
                    font-weight: bold;
                    color: #333;
                    text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.1);
                    transition: color 0.3s ease;
                }

                .wow-title:hover {
                    color: #ff6347;
                }

                .wow-description {
                    font-size: 1.1rem;
                    color: #555;
                    transition: color 0.3s ease;
                }

                .wow-description:hover {
                    color: #777;
                }

                .wow-button {
                    background-color: #ff6347;
                    border: none;
                    font-size: 1.1rem;
                    color: white;
                    transition: transform 0.3s ease, background-color 0.3s ease;
                }

                .wow-button:hover {
                    background-color: #e53e3e;
                    transform: translateY(-5px);
                }

                .wow-button i {
                    margin-right: 8px;
                    transition: transform 0.2s ease;
                }

                .wow-button:hover i {
                    transform: rotate(15deg);
                }
            </style>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">




        <?php
        }
        ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>