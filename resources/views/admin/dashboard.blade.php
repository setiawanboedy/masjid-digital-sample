@extends('layouts.admin', ['title' => 'Dashboard', 'page_heading' => 'Dashboard Tahunan'])

@section('content')
    <section class="row">
        <div class="col-12 col-lg-12">

            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <a href="#">
                        <div class="card card-stat">
                            <div class="px-3 card-body py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon purple">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="font-semibold text-muted">Customer Service</h6>
                                        <h6 class="font-bold {{ 21 <= 2 ? 'text-danger' : '' }} mb-0">
                                            0
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <a href="#">
                        <div class="card card-stat">
                            <div class="px-3 card-body py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon blue">
                                            <i class="iconly-boldCategory"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="font-semibold text-muted">Transaksi Donasi</h6>
                                        <h6 class="font-bold {{ 12 <= 0 ? 'text-danger' : '' }} mb-0">
                                            0
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <a href="#">
                        <div class="card card-stat">
                            <div class="px-3 card-body py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon green">
                                            <i class="iconly-boldWork"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="font-semibold text-muted">Program</h6>
                                        <h6 class="font-bold {{ 2 <= 0 ? 'text-danger' : '' }} mb-0">
                                            0
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <a href="#">
                        <div class="card card-stat">
                            <div class="px-3 card-body py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon red">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                style="height: 28px !important" fill="white" class="bi bi-people-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="font-semibold text-muted">Donatur</h6>
                                        <h6 class="mb-0 font-bold">0</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            {{-- <div class="h3">
                Rangking Donatur
            </div>
            <div class="card">
                @livewire('dashboard.table-top-donatur')
            </div>

            <div class="h3">
                Pencapaian
            </div>
            <div class="card">
                <div id="target-tahunan"></div>
            </div>

            <div class="h3">
                Jumlah Donasi
            </div>
            <div class="card">
                <div id="chart-cash-transactions-by-year"></div>
                <div id="chart-cash-amount-by-year"></div>
            </div> --}}

        </div>
    </section>
@endsection

@push('scripts')

    <script src="{{ asset('extensions/apexcharts/apexcharts.min.js') }}"></script>
    {{-- @include('script') --}}
@endpush
