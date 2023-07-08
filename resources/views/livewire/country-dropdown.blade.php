<div class="row">
    <div class="col-md-12 mb-3">
        <label for="country" class="block text-sm font-medium text-gray-700">Cliente</label>
        <select id="cliente" name="cliente" class="form-control" wire:model="country">
            <option>--- Selecciona un cliente ---</option>
            @foreach($countries as $country)
            <option value="{{$country->cliente}}">{{$country->cliente}}</option>
            @endforeach
        </select>
    </div>

   
</div>