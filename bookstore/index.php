<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

    <title>Book Store|محل بيع كتب</title>
</head>

<body>
<nav class="navbar navbar-light  navbar-expand-sm">
    <a href="index.php" class="navbar-brand">BookStore CRUD</a>
    <button class="navbar-toggler"
    data-bs-toggle="collapse" 
    data-bs-target="#mainmenu" 
    aria-controls="toggleMobileMenu"
    aria-expanded="false"
    aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="ToggleMobileMenu" >
    <ul class="navbar-nav mr-auto" id="mainmenu">
        <li class="nav-item">
            <a href="./index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">login</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">signup</a>
        </li>
    </ul>
    </div>
</nav>
    <div class="row justify-content-center">
        <form action="process.php" method="post">

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label>location</label>
                <input type="text" name="location" class="form-control" value="" placeholder="Enter your location">
            </div>
            <div class="form-group">
                <button type="submit" name="save" class="btn btn-primary"> Save </button>
            </div>
        </form>
    </div>

    <footer>

    </footer>
</body>

</html>