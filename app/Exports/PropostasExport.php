<?php

namespace App\Exports;

use App\Models\proposta;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;

class PropostasExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return proposta::all();
    }
    public function headings(): array
    {
        return [
            'Nº Identificação Proposta',
            'Cliente',
            'Endereço da Obra',
            'Tipo de Serviço',
            'Proposta feita em',
            'Valor Total',
            'Valor de Sinal',
            'Quantidade de Parcelas',
            'Valor das Parcelas',
            'Data de Início do Pagamento',
            'Data do Pagamento das Parcelas',
            'Status',
            'Proposta Registrada por'
        ];
    }
}
