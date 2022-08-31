@extends('layouts.admin')

@section('title', 'Vendor Details')
@section('content-header', 'Vendor Details')
@section('content-actions')
    <a href="{{ route('vendors.index') }}" class="btn btn-primary">Back</a>
    <button onclick="window.print()"><span class="fas fa-print"></span></button>
@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
           <img src="{{ $vendor->vendor_picture }}" class="rounded mx-auto d-block" alt="...">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <ul class="list-group">
              <li class="list-group-item active" aria-current="true">Personal Information</li>
              <li class="list-group-item">Name: {{ $vendor->name }}</li>
              <li class="list-group-item">Address: {{ $vendor->address }}</li>
              <li class="list-group-item">Contact Number: {{ $vendor->contact_no }}</li>
              <li class="list-group-item">National ID: {{ $vendor->nid }}</li>
            </ul>
        </div>
        <div class="col-md-6">
            <ul class="list-group">
              <li class="list-group-item active" aria-current="true">Payment Information</li>
              <li class="list-group-item">Bkash: {{ $vendor->bkash }}</li>
              <li class="list-group-item">Rocket: {{ $vendor->rocket }}</li>
              <li class="list-group-item">Nagad: {{ $vendor->nagad }}</li>
              <li class="list-group-item">Bank Account(Bank Name, Branch and Acc. no.): </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <ul class="list-group">
              <li class="list-group-item active" aria-current="true">Category Based Discounts</li>
              <li class="list-group-item">Dhaka Choice Discount</li>
              <li class="list-group-item">Vendor Discount</li>
              <li class="list-group-item">Total Discount</li>
            </ul>
        </div>
        <div class="col-md-6">
            <ul class="list-group">
              <li class="list-group-item active" aria-current="true">Sub Category Based Discounts</li>
              <li class="list-group-item">Dhaka Choice Discount</li>
              <li class="list-group-item">Vendor Discount</li>
              <li class="list-group-item">Total Discount</li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <ul class="list-group">
              <li class="list-group-item active" aria-current="true">Category Based Comissions</li>
              <li class="list-group-item">Dhaka Choice Commission</li>
              <li class="list-group-item">Vendor Commission</li>
              <li class="list-group-item">Total Commission</li>
            </ul>
        </div>
        <div class="col-md-6">
            <ul class="list-group">
              <li class="list-group-item active" aria-current="true">Sub Category Based Commissions</li>
              <li class="list-group-item">Dhaka Choice Commission</li>
              <li class="list-group-item">Vendor Commission</li>
              <li class="list-group-item">Total Commission</li>
            </ul>
        </div>
    </div>
</div>
   
@endsection
