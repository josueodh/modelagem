@extends('layouts.master')

@section('content')
<div class="card card-code card-outline card">
    <div class="card-header ">
        <h3>Precificação</h3>
    </div>
    <div class="card-body">
        <form name="payment" method="POST">
            <div class="row">
                <div class="form-group col-sm-6">
                    <label class="required">Valor/Hora Projetista</label>
                    <input type="number" oninput="valueInput('valor_projetista')" step="1" min="0" class="form-control"
                        required id="valor_projetista">
                </div>
                <div class="form-group col-sm-6">
                    <label class="required">Valor/Hora Gerente de Projetos</label>
                    <input type="number" step="1" min="0" oninput="valueInput('valor_gerente')" class="form-control"
                        required id="valor_gerente">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-6">
                    <label class="required">Horas Trabalhadas Projetista</label>
                    <input type="number" step="1" min="0" class="form-control" oninput="valueInput('horas_projetista')"
                        required id="horas_projetista">
                </div>
                <div class="form-group col-sm-6">
                    <label class="required">Horas Trabalhadas Gerente de Projetos</label>
                    <input type="number" min="0" step="1" class="form-control" oninput="valueInput('horas_gerente')"
                        required id="horas_gerente">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-6">
                    <label class="required">Quantidade de Projetistas</label>
                    <input type="number" step="1" min="0" class="form-control"
                        oninput="valueInput('quantidade_projetista')" required id="quantidade_projetista">
                </div>
                <div class="form-group col-sm-6">
                    <label class="required">Quantidade de Gerente de Projetos</label>
                    <input type="number" disabled class="form-control" required id="quantidade_gerente" value="1">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="form-group col-sm-4">
                    <label class="required">Semanas de Projetos</label>
                    <input type="number" step="1" min="0" class="form-control" oninput="valueInput('semanas_projeto')"
                        required id="semanas_projeto">
                </div>
                <div class="form-group col-sm-4">
                    <label class="required">Semanas Descontadas</label>
                    <input type="number" step="1" min="0" class="form-control"
                        oninput="valueInput('semanas_descontadas')" required id="semanas_descontadas">
                </div>
                <div class="form-group col-sm-4">
                    <label class="required">Dias de Projeto</label>
                    <input type="number" disabled step="1" min="0" value="0" class="form-control" required
                        id="dias_projeto">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="form-group col-sm-4">
                    <label class="required">Desconto</label>
                    <input type="number" step="1" min="0" max="100" class="form-control"
                        oninput="valueInput('desconto')" required id="desconto">
                </div>
                <div class="form-group col-sm-4">
                    <label class="required">Desconto à vista</label>
                    <input type="number" step="1" min="0" max="100" class="form-control"
                        oninput="valueInput('desconto_vista')" required id="desconto_vista">
                </div>
                <div class="form-group col-sm-4">
                    <label class="required">Desconto Total</label>
                    <input type="number" step="0.01" min="0" value="0" disabled class="form-control"
                        oninput="valueInput('desconto_final')" required id="desconto_final">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="form-group col-sm-4">
                    <label class="required">Total sem Desconto</label>
                    <input type="number" disabled step="1" min="0" value="0" class="form-control" required
                        id="total_sem_desconto">
                </div>
                <div class="form-group col-sm-4">
                    <label class="required">Total com Desconto</label>
                    <input type="number" disabled step="1" min="0" value="0" class="form-control" required
                        id="total_desconto">
                </div>
                <div class="form-group col-sm-4">
                    <label class="required">Total à Vista</label>
                    <input type="number" disabled step="1" min="0" value="0" class="form-control" required
                        id="total_vista">
                </div>
            </div>
            <hr>
            <div class="row">
                <button class="btn btn-code btn-parcelas" type="submit">Gerar Parcelas</button>
            </div>
        </form>
    </div>
</div>
<div class="card card-code card-outline card card-parcelas" >
        <div class="card-header ">
                <h3>Precificação</h3>
            </div>
    <div class="card-body table-responsive ">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Número de Parcelas</th>
                    <th>Sem desconto</th>
                    <th>Com desconto</th>
                </tr>
            </thead>
            <tbody id="gerar-parcelas">
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/components/pricing.js') }}"></script>
<script src="{{ asset('js/components/parcela.js') }}"></script>
<script src="{{ asset('js/components/dataTable.js') }}"></script>
<script src="{{ asset('js/components/sweetAlert.js') }}"></script>
@endpush