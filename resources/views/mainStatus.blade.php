@extends('parent')
@section('content')
<section class="py-7 py-md-0 bg-hero" id="home" style="margin-top:100px;">
    <div class="container">
        <div class="row vh-md-100">
            <div class="col-md-12 col-sm-12 col-12 mx-auto my-auto text-center">
            	<div class="card">
            		<div class="card-header">Status Peternakan</div>
            		<div class="card-body">
            			<table class=" table table-bordered table-dark text-light table-striped table-hover">
            				<thead>
            					<tr>
            						<td>Status</td>
            						<td>Jumlah Sapi</td>
            					</tr>
            				</thead>
            				<tbody>
            					@foreach ($status as $stat)
            						<tr>
            							<td>{{$stat->status}}</td>
            							<td>{{$stat->jumlah_sapi}}</td>
            						</tr>
            					@endforeach
            				</tbody>
            			</table>
            		</div>
            		<div class="card-footer">
            			
            		</div>
            	</div>
            </div>
        </div>
    </div>
</section>
@endsection