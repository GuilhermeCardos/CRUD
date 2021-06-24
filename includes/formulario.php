<main class="container col-md-6 offset-md-3">
    <h2 class="pt-5">Cadastrar usuário</h2>

    <form action="" method="POST">
        <div class="">
            <label for="nome" class="p-2">Nome Completo</label>
            <div class="row">
                <div class="col"> 
                    <input type="text" class="form-control" id="nome" placeholder="Nome">
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="Sobrenome" placeholder="Sobrenome">
                </div>
                <div class="col-auto m-2">
                    <div class="form-check form-check-inline">
                        <label for="sexo1" class="form-check-label">Masculino</label>
                        <input type="radio" class="form-check-input "id="sexoradio" name="sexo" value="masc"checked>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="sexo2">Feminino</label>
                        <input type="radio" class="form-check-input "id="sexoradio" name="sexo" value="fem">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class=" col-auto">
                    <label class="mt-2 p-2">Data de Nascimento:</label>
                    <input type="date" class="form-control" id="datanascimento" >
                </div>
                <div class=" col">
                    <label for="telefone" class="mt-2 p-2">Telefone:</label>
                    <input type="tel" class="form-control" id="email" placeholder="Telefone">
                </div>
                <div class="col">
                    <label for="celular" class="mt-2 p-2">Celular:</label>
                    <input type="tel" class="form-control" id="celular" placeholder="Celular">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="endereco" class="mt-2 p-2">Endereço:</label>
                    <input type="text" class="form-control" id="endereco" placeholder="Endereço">
                </div>
                <div class="col form-group">
                    <label for="cid" class="mt-2 p-2">Cidade:</label>
                    <select class="form-select">
                        <option value="--" selected >---</option>
                        <option value="rj">Rio de Janeiro</option>
                        <option value="es">Espírito Santo</option>
                        <option value="mg">Minas Gerais</option>
                        <option value="sp">São Paulo</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-auto">
                    <label for="email" class="mt-2 p-2">E-mail:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                </div>    
            </div>
            <div class="row ">
                <div class="col-auto">
                    <label for="password" class="mt-2 p-2">Senha:</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="*************">
                </div>
                <div class=" col mt-4 p-4">
                    <button class="btn btn-success">Enviar </button>    
                </div>     
            </div>
       </div>
    </form>
</main>

<!-- 
    