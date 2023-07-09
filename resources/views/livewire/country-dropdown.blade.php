<div>
    <div class="mb-8">
        <label class="inline-block w-32 font-bold">Empresa:</label>
        <select name="empresa" wire:model="empresa" class="form-control custom-select d-block w-100">
            <option value=''>Seleccione una empresa</option>
            @foreach($empresas as $empresa)
            <option value={{ $empresa->id}}>{{ $empresa->name }}</option>
            @endforeach
        </select>
    </div>
    @if(count($clientes) > 0)
    <div class="mb-8">
        <label class="inline-block w-32 font-bold">Cliente:</label>
        <select name="cliente" wire:model="cliente" class="form-control custom-select d-block w-100">
            <option value=''>Seleccione un cliente</option>
            @foreach($clientes as $cliente)
            <option value={{ $cliente->id}}>{{ $cliente->cliente}}</option>
            @endforeach
        </select>
    </div>
    @endif
    @if(count($usuarios) > 0)
    <div class="mb-8">
        <label class="inline-block w-32 font-bold">Usuario:</label>
        <select name="usuario" wire:model="usuario" class="form-control custom-select d-block w-100">
            <option value=''>Seleccione un usuario</option>
            @foreach($usuarios as $usuario)
            <option name="usuario" value={{ $usuario->id}}>{{ $usuario->name }}</option>
            @endforeach
        </select>
    </div>
    @endif
</div>