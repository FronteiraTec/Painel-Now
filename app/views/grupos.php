<?php require_once("../includes/header.php"); ?>


<div class="grup-forms">
    <form action="#">
        <div class="name-grupos">
            <label for="fname">Nome do grupo</label>
            <input type="text" class="form-control" id="namegrupo" name='namegrupo' placeholder="Nome do grupo" required>
        </div>

        <div class="curso-oferece">
            <label for="fname">Curso</label>
            <input type="text" class="form-control" id="namegrupo" name='namegrupo' placeholder="Nome do curso" required>
        </div>

        <div class="grupo-descricao">
            <label for="fname">Descrição</label>
            <textarea id="descricaogrupo" name="descricaogrupo" rows="4" cols="50" placeholder= "Descrição da atividade"></textarea>
        </div>

        <div class="email-grupo">
            <label for="email">E-mail</label>
            <input type="email" id="emailgrupo" name="emailgrupo" placeholder="email@email.com" required>
        </div>

        <div class="contato-grupo">
            <label for="phone">Telefone</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="tel.">
        </div>
        <br><br>
            <button type="button" class="buttonpost-grupo">Postar</button>
            <button type="button" class="buttoncancel-grupo">Cancelar</button>
    </form>
</div>

<?php require_once("../includes/footer.php") ?>