<div class="row">
    <div class="form-group col-sm-6">
        <label class="required" for="nome">Nome</label>
        <input type="text" class="form-control" required value="{{ old('name', $user->name) }}" name="name" id="nome">
    </div>
    <div class="form-group col-sm-6">
        <label class="required" for="sobrenome">Sobrenome</label>
        <input type="text" class="form-control" required value="{{ old('last_name', $user->last_name) }}" name="last_name" id="sobrenome">
    </div>
    <div class="form-group col-sm-12">
        <label class="required" for="email">E-mail</label>
        <input type="email" class="form-control" required value="{{ old('email', $user->email) }}" name="email" id="mail">
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        <label for="photo">Foto de perfil</label>
        <div class="input-group">
            <div class="custom-file">
            <input type="file" class="custom-file-input" name="photo" id="photo">
            <label class="custom-file-label" for="photo">Selecione uma imagem de perfil</label>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <label class="required">Cargo</label>
        <select class="form-control select2" name="role_id" value="{{ old('role_id', $user->role_id) }}" required>
            <option value="1">Projetista</option>
        </select>
    </div>
</div>
<hr>
<div class="row">
    @if($edit ?? false)
        <div class="form-group col-6">
            <label for="password">Senha</label>
            <input autocomplete="new-password" type="password" class="form-control" name="password" id="password">
        </div>
        <div class="form-group col-6">
            <label for="password">Confirme sua senha</label>
            <input autocomplete="new-password" type="password" class="form-control" name="password_confirmation" id="password">
        </div>
    @else
        <div class="form-group col-6">
            <label class="required" for="password">Senha</label>
            <input autocomplete="new-password" type="password" class="form-control" name="password" id="password" required>
        </div>
        <div class="form-group col-6">
            <label class="required" for="password">Confirme sua senha</label>
            <input autocomplete="new-password" type="password" class="form-control" name="password_confirmation" id="password" required>
        </div>
    @endif
</div>
