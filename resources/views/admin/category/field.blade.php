<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label mb-10" for="description">Description</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="icon-user"></i></div>
                <input type="text" class="form-control" name="description" id="description" value="@if(isset($category['description'])){{$category['description']}}@endif" placeholder="description">
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label mb-10" for="filterBy">Product Category</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="icon-user"></i></div>
                <select name="orderLineTypeId" class="form-control" id="orderLineTypeId">
                    <option value="1" @if(isset($category['orderLineTypeId']) == 1)selected @endif>Items</option>
                    <option value="2" @if(isset($category['orderLineTypeId']) == 2)selected @endif>Tax</option>
                    <option value="3" @if(isset($category['orderLineTypeId']) == 3)selected @endif>Penalty</option>
                </select>
            </div>
        </div>
    </div>
</div>