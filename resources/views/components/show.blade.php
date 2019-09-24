<div class="col-md-10 offset-md-1 col-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title title-form">{{ $title ?? null }} </h3>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                {{ $list ?? null }}
            </ul>
        </div>
        <div class="card-footer">
            <form class="form-delete" action="{{ $delete ?? '/' }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger float-right "><i class="fas fa-trash"></i> Deletar</button>
            </form>
            <a href="{{ $edit ?? '/'}}">
                <button type="submit"  class="btn btn-primary float-right btn-delete"><i class="fas fa-pen"></i> Editar</button>
            </a>
        </div>
    </div>
</div>