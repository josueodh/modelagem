<div class="row">
    <div class="form-group col-sm-6">
        <label class="required" for="nome">Nome</label>
        <input type="text" class="form-control" required value="{{ old('name', $role->name) }}" name="name" id="nome">
    </div>
    <div class="form-group col-sm-6">
        <label class="required">Departamento</label>
        <select class="form-control select2" name="departament_id" value="{{ old('departament_id', $role->departament_id) }}" required>
            <option></option>
            @foreach ($departaments as $departament)
                <option value="{{ $departament->id }}">{{ $departament->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-sm-12">
        <label class="required">Descrição do Cargo</label>
        <textarea name="description" class="form-control" required id="description" rows="5">{{ old('description',$role->description) }}</textarea>        
    </div>
</div>