<div class="card-body">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="name" value="{{ old('name') ?? $member->name ?? null }}"  id="nome">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" name="email" value="{{ old('email') ?? $member->email ?? null }}" id="email">
    </div>
    <div class="form-group">
        <label for="cargo">Cargo</label>
        <select class="form-control" id="cargo">
            <option></option>
            @foreach ($roles as $role)
                <option value="{{ $role->id }}" >{{ $role->name}}</option>    
            @endforeach
        </select>
      </div>
</div>