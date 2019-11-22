<div class="row">
    <div class="form-group col-sm-6">
        <label class="required" for="nome">Nome</label>
        <input type="text" class="form-control" required value="{{ old('name', $project->name) }}" name="name" id="nome">
    </div>
    <div class="form-group col-sm-6">
        <label class="required" for="price">Preço</label>
        <input type="number" step="0.01" class="form-control" required value="{{ old('price', $project->price) }}" name="price" id="price">
    </div>
    <div class="form-group col-sm-6">
        <label class="required">Categoria de Projetos</label>
        <select class="form-control select2" name="category_id" value="{{ old('category_id', $project->category_id) }}" required>
            <option ></option>
            @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label class="required">Membros</label>
            <select class="select2" multiple="multiple" name="user[]" value="{{ json_encode(old('users', $project->user->pluck('id'))) }}" required style="width: 100%;">
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group col-sm-6">
        <label class="required" for="price">Cliente</label>
        <input type="text" class="form-control" required value="{{ old('client', $project->client) }}" name="client" id="client">
    </div>
    <div class="form-group col-sm-12">
        <label class="required">Descrição do Projeto</label>
        <textarea name="description" class="form-control" required id="description" rows="5">{{ old('description',$project->description) }}</textarea>        
    </div>
</div>