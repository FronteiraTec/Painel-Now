<?php require_once("../includes/header.php"); ?>


    <div class="redacao">
        <form action="#">

            <div class="titulo">
                <input type="text" class="form-control" id="TituloEnquete" placeholder="Titulo da Enquete" name="TituloEnquete" required>
            </div>

            <div class="form-image">
                <label for="exampleFormControlFile1">Anexar imagem</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>


            <div class="redacao-post">
                <textarea name="my_editor" id="my_editor" rows="400" cols="110"></textarea>
                <!-- <input type="submit" value="Submit" name="submit_text"> -->
                
                <button type="button" class="buttonpost">Postar</button>
                <button type="button" class="buttoncancel">Cancelar</button>
            </div>
        </form>
    </div>
    <script src="../assets/js/ckeditor/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.getElementById('my_editor'));
    </script>


<?php require_once("../includes/footer.php"); ?>