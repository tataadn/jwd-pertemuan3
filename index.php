<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>JWD Pertemuan 3</title>

    <style>
      #style-header {
        padding: 10rem;
      }
      #style-sidebar {
        padding: 8rem;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <section id="navbar">
      <?php include('navbar.php') ?>
    </section>
    <!-- End of Navbar -->

    <!-- Form -->
    <section id="form" class="pt-4">
      <?php include('form.php') ?>
    </section>
    <!-- End of Form -->

    <!-- btn -->
    <div class="container">
      <div class="row pt-3 text-center">
        <div class="col">
          <a href="grid.php">
            <button class="btn btn-warning">
              Klik di sini untuk melihat hasil Grid Layout
            </button>
          </a>
        </div>
      </div>
    </div>
    <!-- End of btn -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
