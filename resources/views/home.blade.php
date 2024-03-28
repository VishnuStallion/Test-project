<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>

</head>
<body>
<style>
table.dataTable {
  clear: both;
  margin-top: 6px !important;
  margin-bottom: 6px !important;
  max-width: none !important;
  border-collapse: separate !important;
  border-spacing: 0;
}
table.dataTable td,
table.dataTable th {
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
}
table.dataTable td.dataTables_empty,
table.dataTable th.dataTables_empty {
  text-align: center;
}
table.dataTable.nowrap th,
table.dataTable.nowrap td {
  white-space: nowrap;
}

div.dataTables_wrapper div.dataTables_length label {
  font-weight: normal;
  text-align: left;
  white-space: nowrap;
}
div.dataTables_wrapper div.dataTables_length select {
  width: auto;
  display: inline-block;
}
div.dataTables_wrapper div.dataTables_filter {
  text-align: right;
}
div.dataTables_wrapper div.dataTables_filter label {
  font-weight: normal;
  white-space: nowrap;
  text-align: left;
}
div.dataTables_wrapper div.dataTables_filter input {
  margin-left: 0.5em;
  display: inline-block;
  width: auto;
}
div.dataTables_wrapper div.dataTables_info {
  padding-top: 0.85em;
}
div.dataTables_wrapper div.dataTables_paginate {
  margin: 0;
  white-space: nowrap;
  text-align: right;
}
div.dataTables_wrapper div.dataTables_paginate ul.pagination {
  margin: 2px 0;
  white-space: nowrap;
  justify-content: flex-end;
}
div.dataTables_wrapper div.dataTables_processing {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 200px;
  margin-left: -100px;
  margin-top: -26px;
  text-align: center;
  padding: 1em 0;
}

table.dataTable > thead > tr > th:active,
table.dataTable > thead > tr > td:active {
  outline: none;
}
table.dataTable > thead > tr > th:not(.sorting_disabled),
table.dataTable > thead > tr > td:not(.sorting_disabled) {
  padding-right: 30px;
}
table.dataTable > thead .sorting,
table.dataTable > thead .sorting_asc,
table.dataTable > thead .sorting_desc,
table.dataTable > thead .sorting_asc_disabled,
table.dataTable > thead .sorting_desc_disabled {
  cursor: pointer;
  position: relative;
}
table.dataTable > thead .sorting:before, table.dataTable > thead .sorting:after,
table.dataTable > thead .sorting_asc:before,
table.dataTable > thead .sorting_asc:after,
table.dataTable > thead .sorting_desc:before,
table.dataTable > thead .sorting_desc:after,
table.dataTable > thead .sorting_asc_disabled:before,
table.dataTable > thead .sorting_asc_disabled:after,
table.dataTable > thead .sorting_desc_disabled:before,
table.dataTable > thead .sorting_desc_disabled:after {
  position: absolute;
  bottom: 0.9em;
  display: block;
  opacity: 0.3;
}
table.dataTable > thead .sorting:before,
table.dataTable > thead .sorting_asc:before,
table.dataTable > thead .sorting_desc:before,
table.dataTable > thead .sorting_asc_disabled:before,
table.dataTable > thead .sorting_desc_disabled:before {
  right: 1em;
  content: "↑";
}
table.dataTable > thead .sorting:after,
table.dataTable > thead .sorting_asc:after,
table.dataTable > thead .sorting_desc:after,
table.dataTable > thead .sorting_asc_disabled:after,
table.dataTable > thead .sorting_desc_disabled:after {
  right: 0.5em;
  content: "↓";
}
table.dataTable > thead .sorting_asc:before,
table.dataTable > thead .sorting_desc:after {
  opacity: 1;
}
table.dataTable > thead .sorting_asc_disabled:before,
table.dataTable > thead .sorting_desc_disabled:after {
  opacity: 0;
}

div.dataTables_scrollHead table.dataTable {
  margin-bottom: 0 !important;
}

div.dataTables_scrollBody table {
  border-top: none;
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}
div.dataTables_scrollBody table thead .sorting:before,
div.dataTables_scrollBody table thead .sorting_asc:before,
div.dataTables_scrollBody table thead .sorting_desc:before,
div.dataTables_scrollBody table thead .sorting:after,
div.dataTables_scrollBody table thead .sorting_asc:after,
div.dataTables_scrollBody table thead .sorting_desc:after {
  display: none;
}
div.dataTables_scrollBody table tbody tr:first-child th,
div.dataTables_scrollBody table tbody tr:first-child td {
  border-top: none;
}

div.dataTables_scrollFoot > .dataTables_scrollFootInner {
  box-sizing: content-box;
}
div.dataTables_scrollFoot > .dataTables_scrollFootInner > table {
  margin-top: 0 !important;
  border-top: none;
}

@media screen and (max-width: 767px) {
  div.dataTables_wrapper div.dataTables_length,
div.dataTables_wrapper div.dataTables_filter,
div.dataTables_wrapper div.dataTables_info,
div.dataTables_wrapper div.dataTables_paginate {
    text-align: center;
  }
  div.dataTables_wrapper div.dataTables_paginate ul.pagination {
    justify-content: center !important;
  }
}
table.dataTable.table-sm > thead > tr > th:not(.sorting_disabled) {
  padding-right: 20px;
}
table.dataTable.table-sm .sorting:before,
table.dataTable.table-sm .sorting_asc:before,
table.dataTable.table-sm .sorting_desc:before {
  top: 5px;
  right: 0.85em;
}
table.dataTable.table-sm .sorting:after,
table.dataTable.table-sm .sorting_asc:after,
table.dataTable.table-sm .sorting_desc:after {
  top: 5px;
}

table.table-bordered.dataTable {
  border-right-width: 0;
}
table.table-bordered.dataTable th,
table.table-bordered.dataTable td {
  border-left-width: 0;
}
table.table-bordered.dataTable th:last-child, table.table-bordered.dataTable th:last-child,
table.table-bordered.dataTable td:last-child,
table.table-bordered.dataTable td:last-child {
  border-right-width: 1px;
}
table.table-bordered.dataTable tbody th,
table.table-bordered.dataTable tbody td {
  border-bottom-width: 0;
}

div.dataTables_scrollHead table.table-bordered {
  border-bottom-width: 0;
}

div.table-responsive > div.dataTables_wrapper > div.row {
  margin: 0;
}
div.table-responsive > div.dataTables_wrapper > div.row > div[class^=col-]:first-child {
  padding-left: 0;
}
div.table-responsive > div.dataTables_wrapper > div.row > div[class^=col-]:last-child {
  padding-right: 0;
}
</style>
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <h2>DETAILS</h2><span><a href="{{route('home.create')}}" class="btn btn-primary">Create</a></span>
                
            </div>
        </div>

    </div>
            <div class="card">
                <div class="card-body">
                    {{-- <div class="table-responsive"> --}}
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Action</th>                           
                        </tr>
                        @foreach ($data as $dt)
                        <tr>
                            <td>{{$dt->name}}</td>
                            <td>{{$dt->phone}}</td>
                            <td>
                                <div class="row no-gutters">
                                    <div class="col">
                                        <a href="{{route('home.edit',$dt->id)}}" class="btn btn-warning">Edit</a>
                                    </div>
                                    <div  class="col">
                                         {!! Form::open(['route'=>["home.destroy",$dt->id], 'method'=>'delete']) !!}
                                         {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                                         {!! Form::close() !!}  
                                    </div>
                                </div>
                            </td> 
                        </tr>
                             
                        @endforeach

                    </table>
                  {{-- </div> --}}
                </div>
       
            </div>

       
    
</body>
</html>