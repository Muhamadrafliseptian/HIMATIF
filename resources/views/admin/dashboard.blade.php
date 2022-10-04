@extends("admin.layouts.template")

@section("css")

<link rel="stylesheet" href="{{ url('/theme') }}/css/data-table/bootstrap-table.css">
<link rel="stylesheet" href="{{ url('/theme') }}/css/data-table/bootstrap-editable.css">

@endsection

@section("content")

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline13-list">
                <div class="sparkline13-hd">
                    <div class="main-sparkline13-hd">
                        <h1>Projects <span class="table-project-n">Data</span> Table</h1>
                    </div>
                </div>
                <div class="sparkline13-graph">
                    <div class="datatable-dashv1-list custom-datatable-overright">
                        <div id="toolbar">
                            <select class="form-control dt-tb">
                                <option value="">Export Basic</option>
                                <option value="all">Export All</option>
                                <option value="selected">Export Selected</option>
                            </select>
                        </div>
                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mohammad</td>
                                <td>
                                    <button type="submit" class="btn btn-warning btn-sm">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

@section('js')
<script src="{{ url('/theme') }}/js/data-table/bootstrap-table.js"></script>
<script src="{{ url('/theme') }}/js/data-table/tableExport.js"></script>
<script src="{{ url('/theme') }}/js/data-table/data-table-active.js"></script>
<script src="{{ url('/theme') }}/js/data-table/bootstrap-table-editable.js"></script>
<script src="{{ url('/theme') }}/js/data-table/bootstrap-editable.js"></script>
<script src="{{ url('/theme') }}/js/data-table/bootstrap-table-resizable.js"></script>
<script src="{{ url('/theme') }}/js/data-table/colResizable-1.5.source.js"></script>
<script src="{{ url('/theme') }}/js/data-table/bootstrap-table-export.js"></script>
@endsection
