@extends('layouts.admin')
@section('content')

<div class="container-fluid py-4">
  <!-- static over view items start -->
  @include('admin.dashboardItems.overview')
  <!-- static over view items end -->

  <!-- daily finance view items start -->
  <div class="row mt-4">
    <!-- today's money section start -->
    @include('admin.dashboardItems.todaysMoney')
    <!-- today's money section end -->
    <!-- today's expense section start -->
    @include('admin.dashboardItems.todaysExpense')
    <!-- today's expense section end -->
    <!-- payment due section start -->
    @include('admin.dashboardItems.paymentDue')
    <!-- payment due section end -->
  </div>
</div>

@endsection