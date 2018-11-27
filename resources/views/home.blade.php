@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <textarea style="border:none;width:100%;height:500px"><?xmlversion="1.0"encoding="UTF-8"?><site><status>0</status><bankAccountuniqueId="23232323"acctType="checking"accountClassification="personal"><accountName>PremierChecking</accountName><routingNumber>999999989</routingNumber><accountNumber>XXXX7890</accountNumber><fullAccountNumber>1234567890</fullAccountNumber><accountHolder>PSQATEST</accountHolder><individualInformationaccountHolderType="others"><name><firstName>John</firstName><middleName/><lastName>Doe</lastName></name></individualInformation><individualInformationaccountHolderType="others"><name><firstName>Jane</firstName><middleName/><lastName>Doe</lastName></name></individualInformation><balancebalType="availableBalance"><curAmtcurCode="USD">54.78</curAmt></balance><balancebalType="currentBalance"><curAmtcurCode="USD">44.78</curAmt></balance><transactionList><transactionuniqueId="14141414"type="debit"baseType="debit"><description>CHECK#998</description><checkNumber>998</checkNumber><amountcurCode="USD">59.00</amount><transactionRunningBalance>59.00</transactionRunningBalance><link>link</link><category>category</category><transDatelocalFormat="MM/dd/yy">2017-06-10T00:00:00</transDate><postDatelocalFormat="yyyy-MM-dd">2017-06-10T00:00:00</postDate></transaction><transactionuniqueId="1111111"type="deposit"baseType="credit"><description>DESC</description><link>http://www.altova.com</link><amountcurCode="USD">343465.00</amount><transactionRunningBalance>59.00</transactionRunningBalance><transDatelocalFormat="yyyy-MM-dd">2017-06-06T00:00:00</transDate><postDatelocalFormat="yyyy-MM-dd">2017-06-06T00:00:00</postDate><checkNumber>DAG-333</checkNumber><categorycategoryId="333">other</category></transaction></transactionList></bankAccount><bankAccountuniqueId="23232323"acctType="savings"accountClassification="personal"><accountName>PremierSavings</accountName><routingNumber>999999989</routingNumber><accountNumber>XXXX1234</accountNumber><fullAccountNumber>1234561234</fullAccountNumber><accountHolder>JOHNDOE</accountHolder><individualInformationaccountHolderType="others"><name><firstName>John</firstName><middleName/><lastName>Doe</lastName></name><fullName>JohnDoe</fullName></individualInformation><individualInformationaccountHolderType="others"><name><firstName>Jane</firstName><middleName/><lastName>Doe</lastName></name><gender>Female</gender></individualInformation><balancebalType="availableBalance"><curAmtcurCode="USD">54.78</curAmt></balance><balancebalType="currentBalance"><curAmtcurCode="USD">44.78</curAmt></balance><transactionList><transactionuniqueId="14141414"type="debit"baseType="debit"><description>CHECK#998</description><checkNumber>998</checkNumber><amountcurCode="USD">59.00</amount><transactionRunningBalance>59.00</transactionRunningBalance><link>link</link><category>category</category><transDatelocalFormat="MM/dd/yy">2017-06-10T00:00:00</transDate><postDatelocalFormat="yyyy-MM-dd">2017-06-10T00:00:00</postDate></transaction><transactionuniqueId="1111111"type="deposit"baseType="credit"><description>DESC</description><link>http://www.altova.com</link><amountcurCode="USD">343465.00</amount><transactionRunningBalance>59.00</transactionRunningBalance><transDatelocalFormat="yyyy-MM-dd">2017-06-06T00:00:00</transDate><postDatelocalFormat="yyyy-MM-dd">2017-06-06T00:00:00</postDate><checkNumber>DAG-333</checkNumber><categorycategoryId="333">other</category></transaction></transactionList></bankAccount></site></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
