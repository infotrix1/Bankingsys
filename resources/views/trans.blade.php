@extends('layouts.app')
@section('content')
        <div class="body-wrapper">
        <div>

<div class="row align-items-center mb-30 justify-content-between">
<div class="col-lg-6 col-sm-6">
<h6 class="page-title">Transection History</h6>
</div>
</div>

    <div class="row">

<div class="col-lg-12">
<div class="card">
<div class="card-body p-0">
    <div class="table-responsive--sm table-responsive">
        <table class="table table--light style--two">
            <thead>
            <tr>
                <th>Transection ID</th>
                <th>Amount</th>
                <th>Payment Method</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($data as $d)
                 <tr>
                 <td>{{ $d->trans_id }}</td>
                 <td>{{ $d->amount }}</td>
                 <td>{{ $d->channel }}</td>
                <td data-label="Status">
                <span class="text--small badge font-weight-normal badge--success">{{ $d->status }}</span>
                </td>
                <td>{{ $d->created_at }}</td>
                </tr>
                @endforeach


            </tbody>
        </table><!-- table end -->
    </div>
</div>
            </div><!-- card end -->
</div>
</div>



</div>
        </div>
</div>




    </div>

            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>
    @endsection
