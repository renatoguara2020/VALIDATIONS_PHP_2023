<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>Document</title>
</head>

<body>
    <form class="row g-3 needs-validation" action="./insert_into.php" method="post">
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">First name</label>
            <input type="text" class="form-control" name="firstname" />
            <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Last name</label>
            <input type="text" class="form-control" name="lastname" />
            <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Username</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" name="username" />
                />
                <div class="invalid-feedback">Please choose a username.</div>
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">City</label>
            <input type="text" class="form-control" name="cidade" />
            <div class="invalid-feedback">Please provide a valid city.</div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom04" class="form-label">State</label>
            <select class="form-select" id="validationCustom04" name="estados">
                <option selected disabled value="">Estados...</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
                <option value="EX">Estrangeiro</option>
            </select>
            <div class="invalid-feedback">Please select a valid state.</div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">Zip</label>
            <input type="text" class="form-control" name="cep" />
            <div class="invalid-feedback">Please provide a valid zip.</div>
        </div>
        <div class="col-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required />
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">You must agree before submitting.</div>
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationCustom05" class="form-label">Digite sua dúvida</label>
            <textarea type="text" class="form-control" name="description" required /></textarea><br><br>
            <div class="col-12">
                <button class="btn btn-primary btn-lg" type="submit">Submit form</button>
            </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>