<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Input</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- vendor\bootstrap -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col col-lg-6">
                <h1>Add Books </h1>
            </div>
            <!-- form -->
            <div class=" col-lg-6 col-md-12">
                <form action="includes/bookInput-inc.php" method="POST">
                    <div class="form-group">
                        <label class="form-control-label">Book Name</label>
                        <input type="text" class="form-control" name="bookName">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Author Name</label>
                        <input type="text" class="form-control" name="authorName">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Published date</label>
                        <input type="date" class="form-control" name="publishedDate">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Price</label>
                        <input type="number" class="form-control" name="price" placeholder="Rs.">
                    </div>
                    <div class="form-group">
                        <div class="form-group green-border-focus">
                            <label for="exampleFormControlTextarea5">Discription</label>
                            <textarea class="form-control" name="discription" id="discription" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 loginbttm">
                        <div class="col-lg-12  lg-padding">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Add Book
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



</body>

</html>