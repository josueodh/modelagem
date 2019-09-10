<div class="row">
    <div class="form-group col-sm-12">
        <label class="required" >Nome</label>
        <input type="text" class="form-control" required value="{{ old('name', $departament->name) }}" name="name" id="nome">
    </div>
    <div class="col-sm-12">
        <label for="description" class="required">Descrição</label>
        <textarea name="description" class="form-control" required id="description" rows="5">{{ old('description',$departament->description) }}</textarea>
    </div>
</div>