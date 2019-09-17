@extends('layouts.master')

@section('content')
<div class="card card-code card-outline card">
    <div class="card-header ">
        <h3>Precificação</h3>
    </div>
    <div class="card-body">
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
                <input type="number" step="1" min="0" class="form-control" oninput="valueInput('quantidade_projetista')"
                    required id="quantidade_projetista">
            </div>
            <div class="form-group col-sm-6">
                <label class="required">Quantidade de Gerente de Projetos</label>
                <input type="number" disabled class="form-control" required id="quantidade_gerente" value="1">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="form-group col-sm-6">
                <label class="required">Semanas de Projetos</label>
                <input type="number" step="1" min="0" class="form-control" oninput="valueInput('semanas_projeto')"
                    required id="semanas_projeto">
            </div>
            <div class="form-group col-sm-6">
                <label class="required">Dias de Projeto</label>
                <input type="number" disabled step="1" min="0" value="0" class="form-control" required
                    id="dias_projeto">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="form-group col-sm-6">
                <label class="required">Semanas Descontadas</label>
                <input type="number" step="1" min="0" class="form-control" oninput="valueInput('semanas_descontadas')"
                    required id="semanas_descontadas">
            </div>
            <div class="form-group col-sm-6">
                <label class="required">Desconto</label>
                <input type="number" step="1" min="0" max="100" class="form-control" oninput="valueInput('desconto')"
                    required id="desconto">
            </div>
            <div class="form-group col-sm-6">
                <label class="required">Desconto à vista</label>
                <input type="number" step="1" min="0" max="100" class="form-control" oninput="valueInput('desconto_vista')"
                    required id="desconto_vista">
            </div>
            <div class="form-group col-sm-6">
                <label class="required">Desconto Total</label>
                <input type="number" step="0.01" min="0"  disabled class="form-control" oninput="valueInput('desconto_final')"
                    required id="desconto_final">
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
                <input type="number" disabled step="1" min="0" value="0" class="form-control"  required id="total_vista">
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
<script>
    var valores = [];
    var dias_projetos = document.querySelector('#dias_projeto');
    var total_sem_desconto = document.querySelector('#total_sem_desconto');
    var total_a_vista = document.querySelector('#total_vista');
    var total_com_desconto = document.querySelector('#total_desconto');
    var desconto_final = document.querySelector('#desconto_final');
        function valueInput(elemento) {
        valores[elemento.valueOf()] = document.getElementById(elemento.valueOf()).value;
        calcularDias();
        calculaTotal();
    }
    function calcularDias() {
        if (valores['semanas_projeto']) {
            valores['dias'] = valores['semanas_projeto'] * 7;
            dias_projetos.value = valores['dias'];
        } else {
            valores['dias'] = 0;
            dias_projetos.value = valores['dias'];
        }
    }
    function calculaTotal() {
        if (valores['valor_gerente'] && valores['valor_projetista'] && valores['horas_projetista'] && valores['horas_gerente'] && valores['quantidade_projetista'] && valores['semanas_projeto']) {
            valores['total'] = valores['valor_gerente'] * valores['horas_gerente'];
            valores['total'] = valores['total'] +  valores['horas_projetista'] * valores['valor_projetista'] * valores['quantidade_projetista'];
            valores['total'] = valores['total'] * valores['semanas_projeto'];
            total_sem_desconto.value = valores['total'].toFixed(2);
            calculaDescontoTotal();
        } else {
            total_sem_desconto.value = 0,00;
            total_a_vista.value = 0,00;
            total_a_vista.value = 0.00;
            total_desconto.value = 0.00
        }
    }
    function calculaDesconto(){
        if(valores['desconto']){
            return  (valores['total'] - (valores['total'] * valores['desconto']/100)).toFixed(2) ;
        }else{
             return valores['total'].toFixed(2);
        }
    }

    function descontoAVista(){
        if(valores['desconto_vista']){
            return (valores['total'] - (valores['total'] * valores['desconto_vista'] / 100)).toFixed(2); 
        }else{
            return valores['total'].toFixed(2);
        }
    }

    function calculaDescontoTotal(){
        total_com_desconto.value= calculaDesconto();
        total_a_vista.value = descontoAVista();
    }

</script>
<script src="{{ asset('js/components/dataTable.js') }}"></script>
<script src="{{ asset('js/components/sweetAlert.js') }}"></script>
@endpush