<div class="row">
    <div class="col offset-s3 s6">
        <div class="card white">
            <div class="card-content white-text">
                <div class="input-field">
                    <input placeholder="Digite o título" maxlength="100" required id="titulo" name="titulo" value="{{old('titulo', $TituloEditar->titulo)}}" type="text" class="validate">
                    <label for="first_name">Título</label>
                </div>
                <div class="input-field">
                    <input placeholder="Digite o autor" required maxlength="100" id="autor" name="autor" value="{{old('autor', $TituloEditar->autor)}}" type="text" class="validate">
                    <label for="first_name">Autor</label>
                </div>
                <div class="input-field">
                    <textarea class="materialize-textarea" name="descricao" required maxlength="500" id="descricao">{{old('descricao', $TituloEditar->descricao)}}</textarea>
                    <label for="first_name">Descrição</label>
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
