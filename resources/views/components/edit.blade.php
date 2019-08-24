<div class="col-md-8 offset-md-2 col-12">
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">{{ $h3 ?? null }} </h3>
        </div>
        <form id="form-adicionar" action="{{ $url ?? '/' }}" method="post">
            @csrf
            @method('put')
            {{ $form ?? null }}
        </form>
        <div class="card-footer">
            <button type="submit" form="form-adicionar" class="btn btn-dark">Salvar Alterações</button>
            {{ $voltar ?? null }}
        </div>
    </div>
</div>
