@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ route('ledo.create') }}" method="get">
                @csrf
                <div class="col-md-12 mb-4">
                    <button type="submit" class="btn btn-primary">Shto nje fature</button>
                </div>
            </form>
        </div>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Pershkrimi</th>
                    <th>m2/cope</th>
                    <th>Cmimi</th>
                    <th>Sasia</th>
                    <th>Total Pa Tvsh</th>
                    <th>Tvsh</th>
                    <th>Total me Tvsh</th>
                    <th>Bleresi</th>
                    <th>Modifiiko / Fshi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bill as $item)
                    
                <tr>
                    <td>{{$item->data}}</td>
                    <td>{{$item->pershkrimi}}</td>
                    <td>{{$item->Kategoria}}</td>
                    <td>{{$item->Cmimi}}</td>
                    <td>{{$item->sasi}}</td>
                    <td>{{$item->TotalPaTVSHimi	}}</td>
                    <td>{{$item->TVSH}}</td>
                    <td>{{$item->TotalmeTVSH}}</td>
                    <td>{{$item->user->name}}</td>

                    <td><a href=""><i class="fa fa-edit" style="font-size:36px"></i></a> <a href=""><i class="fa fa-trash-o" style="font-size:36px"></i>
                    </a></td>
                </tr>
                @endforeach

            </tbody>
            <tfoot>
                <tr>
                    <th>Total :</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><span id="cmimipa"></span></th>
                    <th><span id="tvshspan"></span></th>
                    <th><span id="cmimime"></span></th>
                    <th></th>
                </tr>
               
                    
        
               
            </tfoot>
        </table>


    </div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script>
         var table = document.getElementById("example"), cmimipa = 0, cmimime=0, tvsh=0;
            
            for(var i = 1; i < table.rows.length-1; i++)
            {
                cmimipa = cmimipa + parseFloat(table.rows[i].cells[5].innerHTML);
                cmimime = cmimime + parseFloat(table.rows[i].cells[7].innerHTML);
                tvsh = tvsh + parseFloat(table.rows[i].cells[6].innerHTML);
            }
            
            document.getElementById("cmimipa").innerHTML = parseFloat(cmimipa).toFixed(2);
            document.getElementById("tvshspan").innerHTML =parseFloat(tvsh).toFixed(2);
            document.getElementById("cmimime").innerHTML = parseFloat(cmimime).toFixed(2);
          
    </script>
@endsection
