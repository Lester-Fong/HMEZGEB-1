<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentReferences extends Model
{
    use HasFactory;

    public function billPayment()
    {
        return $this->hasOne(BillPayments::class, 'payment_reference_id','id');
    }
    public function vatPayment()
    {
        return $this->hasOne(VatPayment::class, 'payment_reference_id','id');
    }
    public function withholdingPayment()
    {
        return $this->hasOne(WithholdingPayments::class, 'payment_reference_id','id');
    }
    public function payrollPayment()
    {
        return $this->hasOne(PayrollPayments::class, 'payment_reference_id','id');
    }
    public function journalEntry()
    {
        return $this->hasOne(JournalEntries::class, 'moedl_reference_id','id');
    }

    
}
