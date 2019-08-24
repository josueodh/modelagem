<div class="card-body">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="name" value="{{ old('name') ?? $roles->name ?? null }}"  id="nome">
    </div>
</div>