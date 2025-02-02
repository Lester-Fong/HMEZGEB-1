@extends('template.index')

@section('content')

<div>
    
    <div class="d-flex justify-content-between align-items-end">
        {{-- Tab Navigation --}}
        <ul class="nav nav-tabs d-flex" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="bill_payment-tab" data-toggle="tab" href=".bill_payment" role="tab" aria-controls="bill-payment" aria-selected="true">Bill Payment</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="other_payment-tab" data-toggle="tab" href=".other_payment" role="tab" aria-controls="other-payment" aria-selected="false">Other Payment</a>
            </li>
        </ul>
        {{-- btn groups --}}
        <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon text-white-50">
                    <i class="fas fa-pen"></i>
                </span>
                <span class="text">New</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <a role="button" class="dropdown-item" data-toggle="modal" data-target=".bill-payment-modal">Bill</a>
                <a role="button" class="dropdown-item" data-toggle="modal" data-target=".VAT-payment-modal">VAT</a>
                <a role="button" class="dropdown-item" data-toggle="modal" data-target=".Withholding-payment-modal">Withholding</a>
                <a role="button" class="dropdown-item" data-toggle="modal" data-target=".payroll-payment-modal">Payroll</a>
                <a role="button" class="dropdown-item" data-toggle="modal" data-target="#modal-proforma">Income Tax</a>
                <a role="button" class="dropdown-item" data-toggle="modal" data-target=".pension-payment-modal">Pension</a>
                <a role="button" class="dropdown-item" data-toggle="modal" data-target=".commission-payment-modal">Commision</a>
            </div>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-import">
                <span class="icon text-white-50">
                    <i class="fas fa-file-import"></i>
                </span>
                <span class="text">Import</span>
            </button>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-export">
                <span class="icon text-white-50">
                    <i class="fas fa-download"></i>
                </span>
                <span class="text">Export</span>
            </button>
            <button type="button" class="btn btn-secondary">
                <span class="icon text-white-50">
                    <i class="fas fa-download"></i>
                </span>
                <span class="text">Download Excel Format</span>
            </button>
        </div>
    </div>

    {{-- Modals --}}
    {{-- BillPayment  --}}
    <div class="modal fade bill-payment-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-between align-items-center">
                        <img class="mr-5" src="https://user-images.githubusercontent.com/75387615/156304203-f98fe8db-d7a4-409f-a83c-8221c88e6e80.jpg">
                        <p class="h3 pl-4 m-auto">New Bill</p>
                        <a class="close" data-dismiss="modal">×</a>
                    </div>
                    <form id="contactForm" name="contact" role="form">
                       @include('vendors.payments.forms.billPaymentModal')
                        <div class="modal-footer">					
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-success" id="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- BillPayment  --}}
    <div class="modal fade bill-payment-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-between align-items-center">
                        <img class="mr-5" src="https://user-images.githubusercontent.com/75387615/156304203-f98fe8db-d7a4-409f-a83c-8221c88e6e80.jpg">
                        <p class="h3 pl-4 m-auto">New Bill</p>
                        <a class="close" data-dismiss="modal">×</a>
                    </div>
                    <form id="contactForm" name="contact" role="form">
                       @include('vendors.payments.forms.billPaymentModal')
                        <div class="modal-footer">					
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-success" id="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- VAT --}}
    <div class="modal fade VAT-payment-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-between align-items-center">
                        <img class="mr-5" src="https://user-images.githubusercontent.com/75387615/156304203-f98fe8db-d7a4-409f-a83c-8221c88e6e80.jpg">
                        <p class="h3 pl-4 m-auto">VAT Payment/Receivable</p>
                        <a class="close" data-dismiss="modal">×</a>
                    </div>
                    <form id="contactForm" name="contact" role="form">
                       @include('vendors.payments.forms.VATPaymentModal')
                        <div class="modal-footer">					
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-success" id="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Withholding --}}
    <div class="modal fade Withholding-payment-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-between align-items-center">
                        <img class="mr-5" src="https://user-images.githubusercontent.com/75387615/156304203-f98fe8db-d7a4-409f-a83c-8221c88e6e80.jpg">
                        <p class="h3 pl-4 m-auto">Withholding</p>
                        <a class="close" data-dismiss="modal">×</a>
                    </div>
                    <form id="contactForm" name="contact" role="form">
                       @include('vendors.payments.forms.withholdingPaymentModal')
                        <div class="modal-footer">					
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-success" id="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Payroll --}}
    <div class="modal fade payroll-payment-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-between align-items-center">
                        <img class="mr-5" src="https://user-images.githubusercontent.com/75387615/156304203-f98fe8db-d7a4-409f-a83c-8221c88e6e80.jpg">
                        <p class="h3 pl-4 m-auto">Payroll</p>
                        <a class="close" data-dismiss="modal">×</a>
                    </div>
                    <form id="contactForm" name="contact" role="form">
                       @include('vendors.payments.forms.payrollPaymentModal')
                        <div class="modal-footer">					
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-success" id="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Income TAX --}}
    {{-- Pension  --}}
    {{-- Commission  --}}
    <div class="modal fade commission-payment-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-between align-items-center">
                        <img class="mr-5" src="https://user-images.githubusercontent.com/75387615/156304203-f98fe8db-d7a4-409f-a83c-8221c88e6e80.jpg">
                        <p class="h3 pl-4 m-auto">Commission</p>
                        <a class="close" data-dismiss="modal">×</a>
                    </div>
                    <form id="contactForm" name="contact" role="form">
                       @include('vendors.payments.forms.commissionPaymentModal')
                        <div class="modal-footer">					
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-success" id="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

        {{-- Tab Contents --}}
    <div class="card">
        <div class="card-body tab-content">
            <!--Bill Payment content--->
            <div class="table-responsive tab-pane fade show active bill_payment">
                <table class="table table-bordered" id="dataTables" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Reference#</th>
                            <th>Type</th>
                            <th>Paid to</th>
                            <th>Remark</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr onclick="window.location='/individualBill'">
                            <td>December 20, 2021</td>
                            <td>P007</td>
                            <td class="h5"><span class="badge badge-warning">Credit Bill</span></td>
                            <td>John Doe</td>
                            <td>Sales Commision</td>
                            <td>2,900.00</td>
                        </tr>
                        <tr>
                            <td>December 22, 2021</td>
                            <td>P002</td>
                            <td class="h5"><span class="badge badge-danger">Pension</span></td>
                            <td>Jane Dough</td>
                            <td>January 2022</td>
                            <td>1,500.00</td>
                        </tr>
                        <tr>
                            <td>January 11, 2021</td>
                            <td>P012</td>
                            <td class="h5"><span class="badge badge-secondary">Commision</span></td>
                            <td>John Smith</td>
                            <td>March 2021</td>
                            <td>1,199.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--Other Payment content--->
            <div class="table-responsive tab-pane fade other_payment">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTables2" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Vendor Name</th>
                                <th>Date</th>
                                <th>Due Date</th>
                                <th>Bill No.</th>
                                <th>Bill Type</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr onclick="window.location='/individualBill'">
                                <td>Anna Halcon</td>
                                <td>December 20, 2021</td>
                                <td>February 14, 2022</td>
                                <td>000293</td>
                                <td>Credit Invoice</td>
                                <td>Paid</td>
                            </tr>
                            <tr>
                                <td>Alvin Dexter</td>
                                <td>December 22, 2021</td>
                                <td>February 10, 2022</td>
                                <td>000293</td>
                                <td>Credit Invoice</td>
                                <td>Partially Paid</td>
                            </tr>
                            <tr>
                                <td>Ate Che-Che</td>
                                <td>January 11, 2021</td>
                                <td>February 15, 2022</td>
                                <td>000255</td>
                                <td>Credit Invoice</td>
                                <td>Paid</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#dataTables').DataTable();
        $('#dataTables2').DataTable();
        $('.dataTables_filter').addClass('pull-right');
    });
</script>
@endsection