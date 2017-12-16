<h4>PROMOTIONS</H4>
<form>
    <div class="row">
        <div class="col-lg-4">
            <label for="inputTYPEOFPROMOTION">TYPE OF PROMOTION</label>
            <input type="text" list="TYPE OF PROMOTION" class="form-control" id="inputTYPEOFPROMOTION" placeholder="TYPE OF PROMOTION" />
            <datalist id="TYPE OF PROMOTION">
                <Option>Accelerated Promotion</Option>
                <Option>Normal Promotion</Option>
                <Option>Upgrading/Advancement</Option>
                <Option>Conversion/Change of Cadre</Option>
                <Option>Demotion/Reversal of Promotion</Option>
            </datalist>
        </div>

        <div class="col-lg-4">
            <label for="inputMDA">EFFECTIVE DATE</label><BR>
            <div class="form-group col-sm">
                <input type="Date" list="EFFECTIVE DATE" class="form-control" id="inputEFFECTIVEDATE" placeholder="EFFECTIVE DATE"/>
            </div>
        </div>
        
        <div class="col-lg-4">
            <label for="inputFROMRANK">FROM RANK</label>
            <input type="text" list="FROM RANK" class="form-control" id="inputFROMRANK" placeholder="FROM RANK" />
		</div>
    </div>

    <div class="form-group pull-right">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</form>