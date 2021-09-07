@extends('layouts.default')

@section('content')
<div class="orders">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <?php $index = 0; ?>
                    @foreach($items as $judul)
                        <?php $index++; ?>
                        @if($index == 1)
                            <h4 class="box-tittle">
                                Response Form {{$judul->event['judul_event']}}
                            </h4>
                        @endif

                    @endforeach
                </div>
            </div class="card-body--">

                <button onclick="ExportExcel('xlsx')" type="button" class="btn btn-success"><i class="menu-icon fa fa-download"></i> Export Excle</button>
            <div class="row mt-5 mx-auto" style="margin-bottom: 100px;">
            
                <div class="table-stats order-table ov-h">
                    <table class="table" id="exportable_table">
                        <thead>
                            <tr>
                                <?php 
                                    $index = 0;
                                    foreach ($items as $key => $value) {
                                        $index++;
                                        $json = json_decode($value->isi);   
                                        if ($index == 1) {
                                            echo "<th>Nama</th>";
                                            echo "<th>Email</th>";

                                            foreach ($json as $atribut => $tes) {
                                                echo "<th>". $atribut."<th>";
                                            }
                                        }
                                        
                                    }
                                    echo "</tr>";
                                    echo "</thead>";
                                    echo "<tbody>";
                                    foreach ($items as $key => $value) {
                                        $json = json_decode($value->isi);
                                        
                                        echo "<td>".$value->nama."</td>";
                                        echo "<td>".$value->email."</td>";
                                        foreach ($json as  $jawaban) {
                                            if (strpos($jawaban, 'assets') === false) {
                                                echo "<td>".$jawaban."<td>";
                                            }else {
                                                echo "<td>".url('storage/'.$jawaban)."><td>";
                                            }
                                            
                                        }
                                        echo '</tbody>';
                                    }
                                ?>
                            
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<script type="text/javascript">
    function ExportExcel(type, fn, dl) {
    var elt = document.getElementById('exportable_table');
    var wb = XLSX.utils.table_to_book(elt, {sheet:"Sheet JS"});
    return dl ?
        XLSX.write(wb, {bookType:type, bookSST:true, type: 'base64'}) :
        XLSX.writeFile(wb, fn || (
            
            <?php
                $index = 0; 
                foreach ($items as $judul) {
                    $index++;
                    if ($index == 1) {
                        $export = $judul->event['judul_event'];
                        echo "'$export.'";
                    }
                } 
            ?>
            
            // 'Export.'
            
            + (type || 'xlsx')));
    }

</script>
@endsection