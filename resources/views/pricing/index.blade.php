@extends('layouts.master')

@section('content')
<div class="card card-code card-outline card">
    <div class="card-header ">
        <h3>Precificação</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="form-group col-sm-6">
                <label class="required" >Valor/Hora Projetista</label>
                <input type="number" step="1" min="0" class="form-control" required name="valor_projetista">
            </div>
            <div class="form-group col-sm-6">
                <label class="required" >Valor/Hora Gerente de Projetos</label>
                <input type="number" step="1" min="0" class="form-control" required name="valor_gerente">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label class="required" >Horas Trabalhadas Projetista</label>
                <input type="number" step="1" min="0" class="form-control" required name="horas_projetista">
            </div>
            <div class="form-group col-sm-6">
                <label class="required" >Horas Trabalhadas Gerente de Projetos</label>
                <input type="number"  min="0" step="1" class="form-control" required name="horas_gerente">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label class="required" >Quantidade de Projetistas</label>
                <input type="number" step="1" min="0" class="form-control" required name="quantidade_projetista">
            </div>
            <div class="form-group col-sm-6">
                <label class="required" >Quantidade de Gerente de Projetos</label>
                <input type="number"  disabled class="form-control" required name="quantidade_gerente" value="1">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="form-group col-sm-6">
                <label class="required" >Semanas de Projetos</label>
                <input type="number" step="1"  min="0" class="form-control" required name="semanas_projeto">
            </div>
            <div class="form-group col-sm-6">
                <label class="required" >Dias de Projeto</label>
                <input type="number" disabled step="1" min="0" value="0" class="form-control" required name="dias_projeto">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="form-group col-sm-6">
                <label class="required" >Semanas Descontadas</label>
                <input type="number" step="1" min="0" class="form-control" required name="semanas_descontadas">
            </div>
            <div class="form-group col-sm-6">
                <label class="required" >Desconto</label>
                <input type="number" step="1"  min="0" max="100" class="form-control" required name="desconto">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="form-group col-sm-4">
                <label class="required" >Total sem Desconto</label>
                <input type="number" disabled step="1" min="0" value="0" class="form-control" required name="total_sem_desconto">
            </div>
            <div class="form-group col-sm-4">
                <label class="required" >Total com Desconto</label>
                <input type="number" disabled step="1" min="0" value="0" class="form-control" required name="total_desconto">
            </div>
            <div class="form-group col-sm-4">
                <label class="required" >Total à Vista</label>
                <input type="number" disabled step="1" min="0" value="0" class="form-control" required name="total_vista">
            </div>
        </div>
        <hr>
        <div class="row">
            <button class="btn btn-code btn-parcelas" type="button">Gerar Parcelas</button>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/components/dataTable.js') }}"></script>
    <script src="{{ asset('js/components/sweetAlert.js') }}"></script>
@endpush