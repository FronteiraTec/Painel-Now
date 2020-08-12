<?php require_once("../includes/header.php");?>


    <div class="grup-forms">
        <form action="#">
            <div class="name-grupos">
                <label for="fname">Nome do grupo:</label>
                <input type="text" class="form-control" id="namegrupo" name='namegrupo' placeholder="Nome do grupo"
                    required>
            </div>

            <div class="curso-oferece">
                <label for="fname">Curso:</label>
                <input type="text" class="form-control" id="namegrupo" name='namegrupo' placeholder="Nome do grupo"
                    required>
            </div>

            <div class="email-grupo">
                <label for="email">E-mail:</label>
                <input type="email" id="emailgrupo" name="emailgrupo" placeholder="email@email.com" required>
            </div>

            <div class="contato-grupo">
                <label for="phone">Telefone:</label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="tel.">
            </div>
        </form>
    </div>

<?php require_once("../includes/footer.php")?>    