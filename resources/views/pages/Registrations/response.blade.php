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
            <a href="#">
                <button type="button" class="btn btn-success"><i class="menu-icon fa fa-download"></i> Export Excle</button>
            </a>
            <div class="row mt-5 mx-auto" style="margin-bottom: 100px;">
            
                <div class="table-stats order-table ov-h">
                    <table class="table">
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
                                                echo "<td>" .$jawaban."<td>";
                                            }else {
                                                echo "<td><img src='".asset('storage/'.$jawaban)."'/><td>";
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
@endsection