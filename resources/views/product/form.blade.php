<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idPedido') }}
            {{ Form::text('idPedido', $product->idPedido, ['class' => 'form-control' . ($errors->has('idPedido') ? ' is-invalid' : ''), 'placeholder' => 'Idpedido']) }}
            {!! $errors->first('idPedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('producto,') }}
            {{ Form::text('producto,', $product->producto,, ['class' => 'form-control' . ($errors->has('producto,') ? ' is-invalid' : ''), 'placeholder' => 'Producto,']) }}
            {!! $errors->first('producto,', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $product->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>