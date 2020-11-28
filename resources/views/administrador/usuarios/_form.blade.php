<div class="row">
    <div class="col offset-s3 s6">
        <div class="card white">
            <div class="card-content white-text">
                <div class="input-field">
                    <input placeholder="Digite o nome" id="nome" name="nome" value="{{old('nome', $UsuarioEditar->nome)}}" type="text" class="validate">
                    <label for="first_name">Nome</label>
                </div>
                <div class="input-field">
                    <input placeholder="Digite o E-mail" id="email" name="email" value="{{old('email', $UsuarioEditar->email)}}" type="email" class="validate">
                    <label for="first_name">E-mail</label>
                </div>
                <div class="input-field">
                    <input placeholder="Digite a senha" id="senha" name="senha" type="password" class="validate">
                    <label for="first_name">Senha</label>
                </div>
                <div class="input-field">
                    <select name="tipo" id="tipo">
                        <option value="" disabled selected>Selecione uma opção</option>
                        <option value="administrador">Administrador</option>
                        <option value="usuario">Usuário</option>
                    </select>
                    <label>Perfil</label>
                </div>
                <br>
                <br>
                <br>
            </div>
            <div class="card-action right-align">
                <button type="reset" class="btn red">Resetar</button>
                <button type="submit" class="btn green">Adicionar</button>
            </div>
        </div>
    </div>
</div>
