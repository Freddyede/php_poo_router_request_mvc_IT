<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/35c69bda3a.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .link-hypertexte {
            color: #000;
        }

        .link-hypertexte:hover {
            color: #000;
        }
    </style>
</head>

<body>
    <?php require_once __DIR__ . '/../components/navbar.php' ?>
    <h1 class="text-center mt-5 mb-5"><?php foreach ($socksView as $sock) : echo $sock->name;
                                        endforeach; ?> :</h1>
    <div class="container">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Color</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($socksView as $sock) : ?>
                    <tr>
                        <td><?= $sock->name ?></td>
                        <td><?= $sock->type ?></td>
                        <td><?= $sock->color ?></td>
                        <td>
                            <div class="row">
                                <div class="col-6 text-center">
                                    <a class="btn btn-outline-primary" href="update/<?= $sock->id ?>">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </div>
                                <div class="col-6 text-center">
                                    <form action="delete/<?= $sock->id ?>" method="post">
                                        <button class="btn btn-outline-danger" type="submit"><i class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>