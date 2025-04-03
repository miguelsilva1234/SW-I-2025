<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/meustyle.css">
</head>
<body>
    <div class="container">
        <form action="processa.php" method="POST">
            <p style="font-size: 24px; font-weight: bold; text-align: center;">Pagina de login</p>
        
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control" name="email" />
                <label class="form-label" for="form2Example1">Email</label>
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form2Example2" class="form-control" name="senha" />
                <label class="form-label" for="form2Example2">Senha</label>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
            <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
                <label class="form-check-label" for="form2Example34"> lembrar de mim </label>
            </div>
            </div>

            <div class="col">
            <!-- Simple link -->
                <a href="#!">Esqueceu sua senha?</a>
            </div>
            </div>

            <!-- Submit button -->
                <!--<button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Sign in</button> -->
                <input type="submit" class="btn btn-primary btn-block mb-4" value="Entrar" style="align-self: center;">

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Nao e um membro? <a href="#!">Registrar-se</a></p>
                </button>
                </div>
        </form>
    </div>


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>