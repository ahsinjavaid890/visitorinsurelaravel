@extends('frontend.layouts.maintwo')
@include('frontend.companypages.includes.mettatittle')
@section('content')
    @if ($data->quotation_form_on_stylish_page == 1)
        @if ($data->stylish_form_layout == 'layout_1')
            @include('frontend.companypages.includes.main')
            <link rel="stylesheet" type="text/css" href="{{ url('public/front/tabs/pricelayoutthree.css') }}">
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <div style="background-color:#f4f7fa" class="container-homepage">
                <div class="quotationscards">

                </div>
            </div>
        @endif

        @if ($data->stylish_form_layout == 'layout_2')
            @include('frontend.companypages.includes.mainlayouttwo')
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <div style="background-color:#f4f7fa" class="container-homepage">
                <div class="quotationscards">

                </div>
            </div>
        @endif
    @else
        @include('frontend.companypages.includes.includes.heroinclude')
    @endif
    @include('frontend.companypages.includes.sectiontwo')
    @include('frontend.companypages.includes.sectionthree')
    @include('frontend.companypages.includes.sectionfour')
    @include('frontend.companypages.includes.faqsection')
    @include('frontend.companypages.includes.productsection')
@endsection


@section('script')
    <link href="{{ url('public/front/css/select2.min.css') }}" rel="stylesheet" />
    <script src="{{ url('public/front/js/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/front/js/jquery.mask.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dateofbirthfull').mask('00/00/0000');
            $('.dateofbirthfull2').mask('00/00/0000');
            $('.dateofbirthfull3').mask('00/00/0000');
            $('.dateofbirthfull4').mask('00/00/0000');
            $('.dateofbirthfull5').mask('00/00/0000');
            $('.dateofbirthfull6').mask('00/00/0000');
        });
    </script>
    <script>
        $(".sum_insured2").select2({
            minimumResultsForSearch: -1,
            placeholder: "Select Coverage Amount",
            allowClear: false
        });
        $(".primarydestination").select2({
            minimumResultsForSearch: -1,
            placeholder: "Select Primary Destination",
            allowClear: false
        });


        $(".pre_existing_condition1").select2({
            minimumResultsForSearch: -1,
            placeholder: "Pre Existing",
            allowClear: false
        });
        $(".pre_existing_condition2").select2({
            minimumResultsForSearch: -1,
            placeholder: "Pre Existing",
            allowClear: false
        });
        $(".pre_existing_condition3").select2({
            minimumResultsForSearch: -1,
            placeholder: "Pre Existing",
            allowClear: false
        });
        $(".pre_existing_condition4").select2({
            minimumResultsForSearch: -1,
            placeholder: "Pre Existing",
            allowClear: false
        });
        $(".pre_existing_condition5").select2({
            minimumResultsForSearch: -1,
            placeholder: "Pre Existing",
            allowClear: false
        });
        $(".pre_existing_condition6").select2({
            minimumResultsForSearch: -1,
            placeholder: "Pre Existing",
            allowClear: false
        });
    </script>
@endsection
