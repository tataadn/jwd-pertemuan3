<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>JWD Pertemuan 3</title>

    <style>
        #style-header{
            padding: 10rem;
        }
        #style-sidebar{
            padding: 8rem;
        }
    </style>
  </head>
  <body>

    <!-- Grid -->
    <section id="grid" class="p-3">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">DIGITAL TALENT | Grid Layout Bootstrap</h1>
                <p class="text-center text-white p-2 bg-primary">Ini Header</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <p class="text-center text-white bg-primary" id="style-header">Ini Header</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <p class="text-center text-white bg-primary" id="style-sidebar">Ini sidebar</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="text-center text-white p-2 bg-primary">Ini footer</p>
            </div>
        </div>
    </section>
    <!-- End of Grid -->

    <!-- btn -->
    <section>
        <div class="container">
            <div class="row p-3 text-center">
                <div class="col">
                    <a href="index.php">
                        <button class="btn btn-warning">Kembali ke index</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end of btn -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
