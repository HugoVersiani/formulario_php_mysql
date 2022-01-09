<?php 
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Formulário RH</title>
</head>

<body>
    <section class="header">
        <h1>Formulário RH</h1>
        <small>Novas contratações</small>
    </section>
    <section class="container">
        <?php 
        if(isset($_SESSION['msg']))
        echo $_SESSION['msg'];
        unset ($_SESSION['msg']);
        ?>

        <form method="post" action="processa.php">
            <div class="my-3 form-group">
                <label for="formGroupExampleInput">Nome</label>
                <input required name="nome" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome">
            </div>
            <div class="my-3 form-group">
                <label for="exampleFormControlInput1">Endereço de email</label>
                <input required name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
            </div>
            <div class="form-group">
                <label for="inputFone" class="control-label">Telefone</label>
                <input type="text" class="form-control" id="inputFone" placeholder="Telefone" name="telefone"  size=10 maxlength=11 minlength=10 required>
                <div class="help-block with-errors"></div>
            </div>
            <div class="my-3 form-group col-md-4">
                <label for="inputGenero">Gênero</label>
                <select required name="genero" id="inputGenero" class="form-control">
                    <option selected>Outros</option>
                    <option>Masculino</option>
                    <option>Feminino</option>
                </select>
            </div>
            <div class="my-3  form-group">
                <label for="exampleFormControlTextarea1">Comentário</label>
                <textarea required name="comentario" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="my-3 ">
                <h6>Atuação</h6>
                <div class="form-check">
                    <input value="0" class="form-check-input" type="radio" name="atuacao" id="exampleRadios1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        UX e UI Design
                    </label>
                </div>
                <div class="form-check">
                    <input value="1" class="form-check-input" type="radio" name="atuacao" id="exampleRadios2">
                    <label class="form-check-label" for="exampleRadios2">
                        Desenvolvimento
                    </label>
                </div>
                <div class="form-check">
                    <input value="2" class="form-check-input" type="radio" name="atuacao" id="exampleRadios2">
                    <label class="form-check-label" for="exampleRadios2">
                        Gestão
                    </label>
                </div>
            </div>
            <div class="row my-3 ">
                <h6>Soft Skills</h6>
                <div class="col-sm d-flex flex-column">
                    <div class="form-check form-check-inline">
                        <input name="skills[]" class="form-check-input" type="checkbox" id="inlineCheckbox0" value="0">
                        <label class="form-check-label" for="inlineCheckbox0">Organização</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input name="skills[]" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1">
                        <label class="form-check-label" for="inlineCheckbox1">Pontualidade</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input name="skills[]" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2">
                        <label class="form-check-label" for="inlineCheckbox2">Proatividade</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input name="skills[]" class="form-check-input" type="checkbox" id="inlineCheckbox3" value="3">
                        <label class="form-check-label" for="inlineCheckbox3">Trabalho em equipe</label>
                    </div>
                </div>
                <div class="d-flex flex-column col-sm">
                    <div class="form-check form-check-inline">
                        <input name="skills[]" class="form-check-input" type="checkbox" id="inlineCheckbox4" value="4">
                        <label class="form-check-label" for="inlineCheckbox4">Trabalho sob pressão</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input name="skills[]" class="form-check-input" type="checkbox" id="inlineCheckbox5" value="5">
                        <label class="form-check-label" for="inlineCheckbox5">Comunicação</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input name="skills[]" class="form-check-input" type="checkbox" id="inlineCheckbox6" value="6">
                        <label class="form-check-label" for="inlineCheckbox6">Curiosidade</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input name="skills[]" class="form-check-input" type="checkbox" id="inlineCheckbox7" value="7">
                        <label class="form-check-label" for="inlineCheckbox7">Criatividade</label>
                    </div>
                </div>
            </div>
            <div class="my-3  form-group col-md-6">
                <label for="inputPassword4">Senha</label>
                <input required name="senha" type="password" class="form-control" id="inputPassword4" placeholder="Senha">
            </div>
            <button type="submit" class="my-3 d-flex justify-content-between btn btn-primary">Enviar</button>
        </form>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>