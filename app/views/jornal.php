<?php require_once("../includes/header.php");?>


    <div class="redacao">
        <form action="#">

            <div class="titulo">
                <input type="text" class="form-control" id="TituloEnquete" placeholder="Titulo da Enquete"
                    name="TituloEnquete" required>
            </div>

            <div class="form-image">
                <label for="exampleFormControlFile1">Anexar imagem</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>


            <div class="redacao-post">
                <textarea name="message" rows="40" cols="110"></textarea>
                <br><br>
                <button type="button" class="buttonpost">Postar</button>
                <button type="button" class="buttoncancel">Cancelar</button>
            </div>
        </form>
    </div>


<?php require_once("../includes/footer.php");?>

    