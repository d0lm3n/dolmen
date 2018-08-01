<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Ilgalaiko turtas</title>
    <style type="text/css" media="print">
    @page 
    {
        size:  auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */
    }

    html
    {
        background-color: #FFFFFF; 
        margin: 0px;  /* this affects the margin on the html before sending to printer */
    }

    body
    {
        margin: 10mm 10mm 10mm 10mm; /* margin you want for the content */
    }
    </style>
    <style>
        .testas {
    font-family: "Arial, Helvetica", sans-serif;
    
}

.testas h3 {
text-align: center;
font-size: 16px;
font-weight: 100;
}


.testas p {
font-size: 14px;
font-weight: 100;
line-height: 2.5;

}
.testas2 {
    font-family: "Arial, Helvetica", sans-serif;
    size: A4;
}
.testas2 h3 {
font-size: 16px;
text-align: center;
line-height: 0.1;
}
.testas2 p {
font-size: 14px;
text-align: center;
line-height: 0.1;
}
.testas2 p.sumazinti {
font-size: 10px;
text-align: center;

}
.testas2 p.padidinti {
    font-size: 14px;
}

table.inventory {
    border: solid #000;
    border-width: 1px 1px 1px 1px;
    width: 100%;
    font-size: 12px;
}

@page {
    size: A4;
}
table.inventory th, table.inventory td {
    border: solid #000;
    border-width: 0 1px 1px 0;
    padding: 3px;
    font-size: 12px;
}

    </style>
</head>
        <body>
                         
                    </div>
                    <div class="testas2">
                            <h3><b> UAB „TeleSoftas“</h3></b>
                            <p class="vidury">(įmonės pavadinimas)</p>
                            <h3><b>30003871</h3></b>
                            <p class="vidury">(įmonės kodas)</p>
                            <br><br>
                            <p><b>KOMPIUTERINĖS ĮRANGOS PRIĖMIMO – PERDAVIMOS AKTAS</b></p>                            
                            <p> {{ date('Y-m-d') }} </p>
                            <p>Kaunas</p>
                            <p class="sumazinti">(sudarymo vieta)</p><br>

                            <p class="padidinti" style="text-align:left"><b>PAGRINDAS: 2018 m. liepos mėn. 2 d. įsakymas Nr. ĮV/18-02 Dėl kompiuterinės įrangos</b></p>
                            <p class="padidinti" style="text-align:left"><b>naudojimo tvarkos</p></b>
                            <p class="sumazinti">(Įsakymo pavadinimas)</p><br> </div>
                            <dd><p>Programuotojas Nerijus Kriaučiūnas perdavė,</p> </dd>
                            <dd><p>o darbuotojas {{ $show_user->present()->fullName() }} priėmė šias materialines vertybes</p> </dd>
                        
                            <div class="inventory">
                @if ($assets->count() > 0)
        @php
            $counter = 1;
        @endphp
        <table class="inventory">
            <thead>
            <tr>
                <th colspan="8">Inventorius</th>
            </tr>
            </thead>
            <thead>
                <tr>
                    <th style="width: 20px;"></th>
                    <th style="width: 20%;">Pavadinimas</th>
                    <th style="width: 10%;">Modelis</th>
                    <th style="width: 20%;">Serijinis Numeris</th>
                    <th style="width: 20%;">Pirkimo Sąskaita</th>
                    <th style="width: 10%;">Pirkimo Kaina</th>
                    <th style="width: 10%;">Įsigyjimo data</th>
                    <th style="width: 10%;">Perdavimo data</th>
                </tr>
            </thead>
                @foreach ($assets as $asset)
            <tr>
                    <td>{{ $counter }}</td>
                    <td>{{ $asset->name }}</td>
                    <td>{{ $asset->model->name }}</td>
                    <td>{{ $asset->serial }}</td>
                    <td>{{ $asset->order_number }}</td>
                    <td>{{ $asset->purchase_cost }}</td>
                    <td>@if ($asset->purchase_date) {{ $asset->purchase_date->format('Y-m-d') }} @endif</td>
                    <td>{{ $asset->last_checkout->format('Y-m-d') }}</td>
                </tr>
                    @php
                        $counter++
                    @endphp
            @endforeach
        </table>
        @endif
@if ($accessories->count() > 0)
    <br><br>
    <table class="inventory">
        <thead>
        <tr>
            <th colspan="4">Aksesuarai</th>
        </tr>
        </thead>
        <thead>
            <tr>
                <th style="width: 20px;"></th>
                <th style="width: 40%;">Pavadinimas</th>
                <th style="width: 50%;">Kategorija</th>
                <th style="width: 10%;">Išduota</th>
            </tr>
        </thead>
        @php
            $acounter = 1;
        @endphp

        @foreach ($accessories as $accessory)

            <tr>
                <td>{{ $acounter }}</td>
                <td>{{ ($accessory->manufacturer) ? $accessory->manufacturer->name : '' }} {{ $accessory->name }} {{ $accessory->model_number }}</td>
                <td>{{ $accessory->category->name }}</td>
                <td>{{ $accessory->assetlog->first()->created_at->format('Y-m-d') }}</td>
            </tr>
            @php
                $acounter++
            @endphp
        @endforeach
    </table>
    @endif
<br><br><br><br><br>
    </div>
     <div class="tekstas3"></div><br>
       <p>Pardavė: &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
       &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
       &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
       &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Nerijus Kriaučiūnas</p><br><br>
        <p>Priėmė: &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
       &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
       &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
       &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;{{$show_user->present()->fullName()}} </p><br><br>
       
</body>
</html>
