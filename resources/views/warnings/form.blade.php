<div class="row">
    <div class="form-group col-12">
        <label class="required" for="title">Titulo</label>
        <input type="text" class="form-control" required value="{{ old('title', $warning->title) }}" name="title" id="title">
    </div>
    <div class="form-group col-12">
        <label class="required">Mensagem</label>
        <textarea required class="form-control" id="mensagem" name="description" rows="5">{{ $warning->description }}</textarea>
    </div>
    <input type="hidden" name="user_id" value="1">
</div>