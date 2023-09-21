<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../../../public/style.css">
    <script src="/jquery.js"></script>
    <script src="/Slam-book/public/jquery.js"></script>
    <title>{{ $title ?? 'Slam Book'}}</title>
    @stack('style')
</head>
<body>
    <header class="navbar navbar-dark bg-info">
        <div class="container-flud">
            <a href="#"class="navbar-brand p-4 text-danger">Slam Book</a>
        </div>
    </header>  
    <main>
        {{ $slot }}
    </main>
    <footer class="footer bg-info text-white text-center p-3">
        <p>&copy;copyright 2023</p>
        <p>Developed by : Raju Kumar</p>
        <p>Contact No. +91- 8252077457</p>
    </footer>
    @stack('script')
    <script>
        (function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
        }
        form.classList.add('was-validated')
        }, false)
    })
    })()
    </script>
</body>
</html>