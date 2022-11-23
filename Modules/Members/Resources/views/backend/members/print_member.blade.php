@extends('backend.layouts.app')
@section('title')
{{ $module_action }} {{ $module_title }}
@stop

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{!!route('backend.dashboard')!!}"><i class="icon-speedometer"></i> Dashboard</a></li>
<li class="breadcrumb-item active"><i class="{{ $module_icon }}"></i> {{ $module_title }}</li>
@stop
@push('after-styles')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}">
@endpush

@section('content')
<!-- Section Content -->
<div class="card">
    <div class="card-body" id="print">
        <div class="col-sm-12">
            <div class="form-print">
                <div class="fp-header ml-3">
                    <div class="fp-header-left text-center">
                        <h3>Physics Alumni Association, Rajshahi University (PAARU)</h3>
                        <p>Department of Physics, University of Rajshahi, Bangladesh.</p>
                        <h4>Membership Form</h4>
                    </div>
                    <div class="fp-hearer-right">
                        <img src="{{ asset('assets/images/members/' . $member->image) }}" alt="Pasport Size Images">
                    </div>
                </div>
                <div class="form-body">
                    <div class="form-body-mane bb1px">
                        <div class="fbn-left">
                            <p>
                                <b>1. Name<br>(Capital letters)</b>: {{ $member->name }}
                            </p>
                        </div>
                        <div class="fbn-right">
                            <p>
                                <b>Title: &nbsp; </b>
                                <span><i class="fa fa-check-square-o" aria-hidden="true"></i>{{ $member->title }}</span>
                            </p>
                        </div>
                    </div>
                    <div class="form-body-birth bb1px">
                        <p>
                            <b>2. Date of Birth</b>: {{ $member->date_of_birth }}
                        </p>
                    </div>
                    <div class="form-body-degobt bb1px">
                        <div class="fbn-left">
                            <p>
                                <b>3. Degree obtained<br>(from RU)</b>
                                <strong>: Bachelor</strong>
                                <span>Year: {{ $member->bachelor_year }}</span>
                                <span>Roll No:
                                    {{ $member->bachelor_roll }}
                                </span><br>
                                <strong>&nbsp; Masters</strong>
                                <span>Year: {{ $member->masters_year }}</span>
                                <span>Roll No:
                                    {{ $member->masters_roll }}
                                </span>
                            </p>
                        </div>
                        <div class="fbn-right">
                            <p>
                                <strong>MPhil:</strong>
                                <span>
                                    Year: {{ $member->mphil_year }}
                                </span><br>
                                <strong>PhD:</strong>
                                <span>Year: {{ $member->mphil_roll }}</span></span>
                            </p>
                        </div>
                    </div>
                    <div class="form-body-maddress bb1px">
                        <div class="fbn-left">
                            <p>
                                <b>4. Mailing address</b>
                            </p>
                        </div>
                        <div class="fbn-right">
                            <p>: {{ $member->m_location }}</p>
                            <p>
                                <span>&nbsp; <b>Postcode:</b>
                                    {{ $member->m_post_code }}
                                </span>
                                <span><b>District:</b>
                                    {{ $member->getDistrict->name }}
                                </span>
                            </p>
                            <p>
                                <span>&nbsp; <b>e-mail:</b>
                                    {{ $member->m_email }}
                                </span>
                                <span><b>Tel/Cell:</b>
                                    {{ $member->m_phone }}
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="form-body-maddress bb1px">
                        <div class="fbn-left">
                            <p>
                                <b>5. Permanent address</b>
                            </p>
                        </div>
                        <div class="fbn-right">
                            <p>: {{ $member->p_location }} </p>
                            <p>
                                <span>&nbsp; <b>Postcode:</b>
                                    {{ $member->p_post_code }}
                                </span>
                                <span><b>District:</b>
                                    {{ $member->getPDistrict['name'] }}
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="form-body-mane bb1px">
                        <div class="fbn-left">
                            <p>
                                <b>6. Occupation</b> : {{ $member->occupation }}
                            </p>
                        </div>
                        <div class="fbn-right">
                            <p>
                                <strong>Designation (if any):</strong>
                                {{ $member->designation }}
                            </p>
                        </div>
                    </div>
                    <div class="form-body-mane bb1px">
                        <div class="fbn-left">
                            <p>
                                <b>7. Name of spouse</b> :
                                {{ $member->name_of_spouse }}
                            </p>
                        </div>
                        <div class="fbn-right">
                            <p>
                                <strong>No. of son:</strong>
                                {{ $member->no_of_son }}
                            </p>
                            <p>
                                <strong>No. of daughter:</strong>
                                {{ $member->no_of_daughter }}
                            </p>
                        </div>
                    </div>
                    <div class="form-body-mane bb1px">
                        <div class="fbn-left">
                            <p>
                                <b>8. Category of Membership</b> :
                                {{ $member->types->name }}
                            </p>
                        </div>
                    </div>
                    <div class="form-body-maddress bb1px">
                        <div class="fbn-left">
                            <p>
                                <b>9. Amount payable for membership</b>
                            </p>
                        </div>
                        <div class="fbn-right">
                            <p>: Tk: {{ $member->amount }} </p>
                            <!-- <p>&nbsp; [in words]: </p> -->
                        </div>
                    </div>
                    <div class="form-body-maddress bb1px">
                        <div class="fbn-left">
                            <p>
                                <b>10. Mode of payment </b>:
                            </p>
                        </div>
                        <div class="fbn-right">
                            <p>
                                <Span><i class="fa fa-check-square-o" aria-hidden="true"></i>{{ $member->mode_of_payment }}</Span>
                                <Span><i class="fa fa-square-o" aria-hidden="true"></i> Online Transfer,
                                Ref.No.:</Span>
                            </p>
                            <p>
                                <span>Date: {{ $pay_date }}</span>
                                <span>Bank: {{ $member->bank_name }}</span>
                                <span>Branch: {{ $member->branch_name }}</span>
                            </p>
                        </div>
                    </div>
                    <div class="form-body-mane bb1px">
                        <p><b>Payable in favour of</b> : <strong> Physics Alumni Association RU;</strong> DBBL A/C No. 135-515-0240869 <br> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dutch-Bangla Bank LTD., Rajshahi Rranch, Rajshahi.</p>
                    </div>
                    <div class="form-body-mane fb-sign bb1px">
                        <div class="row ml-5">
                                 <div class="col-sm-3 ">
                                     <img src="{{ asset('assets/images/signatures/' . $member->signature) }}" alt="Pasport Size Images">
                                 </div>
                            </div>
                        <div class="fbn-left">
                            <p><b>Signature</b></p>
                        </div>
                        <div class="fbn-right">
                            <p><b>Date: </b></p>
                        </div>
                    </div>
                    <div class="form-body-mane fb-office bb1px mt-2">
                        <div class="fbn-left">
                            <p><b>For office use only</b> : </p>
                        </div>
                        <div class="fbn-right">
                            <table class="table table-bordered" style="width: 120px; float: left; margin-right: 40px;">
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                            <table class="table table-bordered" style="width: 150px;">
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="form-body-mane fb-sign bb1px text-center">
                        <h5><strong>Membership No.</strong></h5>
                        <p><strong>Please contact for any other Information:</strong></p>
                        <p>Tel.: +880 (721) 711102 &#9679; Fax: +880 (721) 750064 (atten: Physics Alumni Association RU)<br>
                            Special Contact with General Secretary Dr. M. Rafiqul Ahsan, Mobile: +8801718822065<br>
                            email:<span style="color: #009FFF;"> paaru@ru.ac.bd</span> &#9679; website: <span style="color: #009FFF;">www.paaru.org</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-3">
            <div class="col-6">
                <div class="form-group">
                    {{ html()->button($text = "<i class='fas fa-print'></i> " . ucfirst($module_action) . "", $type = 'submit')->id('printKitten')->class('btn btn-success') }}
                </div>
            </div>
            <div class="col-6">
                <div class="float-right">
                    <div class="form-group">
                        <a type="button" class="btn btn-warning" href="{{ route("backend.$module_path.index") }}"><i class="fas fa-print"></i> Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Section Content -->
@endsection
@push('after-scripts')
<script type="text/javascript" src="{{ asset('assets/frontend/js/printThis.js')}}"></script>
<script type="text/javascript">
    $("#printKitten").click(function() {
        $("#print").printThis({
            debug: false,
        });
    });
</script>
@endpush
