<div class="row">
        <div class="form-group col-sm-6">
            <label class="required" for="nome">Nome</label>
            <input type="text" class="form-control" required value="{{ old('name', $client->name) }}" name="name" id="nome">
        </div>
        <div class="form-group col-sm-6">
            <label class="required" for="email">E-mail</label>
            <input type="email" class="form-control" required value="{{ old('email', $client->email) }}" name="email" id="mail">
        </div>
    </div>
    <div class="row">
    </div>
    <hr>
    