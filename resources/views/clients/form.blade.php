<div class="row">
    <div class="form-group col-sm-6">
        <label class="required" for="nome">Nome</label>
        <input type="text" class="form-control" required value="{{ old('name', $client->name) }}" name="name" id="nome">
    </div>
    <div class="form-group col-sm-6">
        <label class="required" for="email">E-mail</label>
        <input type="email" class="form-control" required value="{{ old('email', $client->email) }}" name="email" id="mail">
    </div>
    <div class="form-group col-sm-6">
        <label class="required" for="cellphone">Telefone</label>
        <input type="text" class="form-control" required value="{{ old('cellphone', $client->cellphone) }}" name="cellphone" id="cellphone">
    </div>
    <div class="form-group col-sm-6">
        <label class="required" for="status">Status</label>
        <input type="text" class="form-control" required value="{{ old('status', $client->status) }}" name="status" id="status">
    </div>
    <div class="form-group col-sm-12">
        <label class="required" for="description">Descrição</label>
        <textarea type="text" class="form-control" required name="description" id="nome">{{ old('description', $client->description) }}</textarea>
    </div>
</div>
    