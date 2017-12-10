<h3>BANK ACCOUNT DETAILS FOR EMPLOYEE'S</h3>
<hr />
<input name="selector" type="hidden" value="bank_info.create">

<!-- Labels on forms -->
<div class="row">
    <div class="col-lg-6">
        <b>Employee ID</b>
        <input name="esn" type="text" class="form-control" />
    </div>

    <div class="col-lg-6">
        <b>BVN</b>
        <input type="text" class="form-control"/>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <b>BANK NAME</b>
        <input type="text" list="BANK NAME" class="form-control"/>
        <datalist id="BANK NAME">
            <option>Access Bank</option>
            <option>Citibank</option>
            <option>Dynamic Standard Bank</option>
            <option>Diamond Bank</option>
            <option>Development Financial Pruben Bank</option>
            <option>Ecobank Nigeria</option>
            <option>Fidelity Bank Nigeria</option>
            <option>First Bank of Nigeria</option>
            <option>First City Monument Bank</option>
            <option>Guaranty Trust Bank</option>
            <option>Heritage Bank plc</option>
            <option>Keystone Bank Limited</option>
            <option>Providus Bank plc</option>
            <option>Skye Bank</option>
            <option>Stanbic IBTC Bank Nigeria Limited</option>
            <option>Standard Chartered Bank</option>
            <option>Sterling Bank</option>
            <option>Suntrust Bank Nigeria Limited</option>
            <option>Union Bank of Nigeria</option>
            <option>United Bank for Africa</option>
            <option>Unity Bank plc</option>
            <option>Wema Bank</option>
            <option>Zenith Bank</option>
            <option>Non-interest banks</option>
            <option>Jaiz Bank</option>
            <option>Coronation Merchant Bank</option>
            <option>Rand Merchant Bank</option>
            <option>FBN Merchant Bank Limited</option>
            <option>FSDH Merchant Bank</option>
        </datalist>
    </div>

    <div class="col-lg-6">
        <b>ACCOUNT NUMBER</>
        <input type="text" class="form-control" />
    </div>
</div>
