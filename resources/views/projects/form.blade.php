<div class="row">
    <div class="form-group col-sm-12">
        <label class="required" for="nome">Nome</label>
        <input type="text" class="form-control" required value="{{ old('name', $project->name) }}" name="name" id="nome">
    </div>
    <div class="form-group col-sm-12">
        <label class="required">Descrição do Projeto</label>
        <textarea name="description" class="form-control" required id="description" rows="5">{{ old('description',$project->description) }}</textarea>        
    </div>
    <div class="form-group col-sm-6">
        <label class="required" for="price">Preço</label>
        <input type="text" class="form-control" required value="{{ old('price', $project->price) }}" name="price" id="price">
    </div>
    <div class="form-group col-sm-6">
        <label class="required" for="price">Cliente</label>
        <input type="text" class="form-control" required value="{{ old('client', $project->client) }}" name="client" id="client">
    </div>
    <div class="form-group col-sm-12">
        <label class="required">Categoria de Projetos</label>
        <select class="form-control select2" name="category_id" value="{{ old('category_id', $project->category_id) }}" required>
            <option value="1">asdasd</option>
            <option value="1">{{ $project->category_id}}</option>
        </select>
    </div>
</div>