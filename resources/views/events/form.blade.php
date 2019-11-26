<div class="row">
    <div class="form-group col-sm-12">
        <label class="required" >Titulo</label>
        <input type="text" class="form-control" required value="{{ old('title', $event->title) }}" name="title" id="nome">
    </div>
    <div class="col-sm-12">
        <label for="description" class="required">Data</label>
        <input type="date" class="form-control" required value="{{ old('date', $event->date) }}" name="date" id="nome">
    </div>
</div>