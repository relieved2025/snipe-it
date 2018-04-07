@extends('layouts/edit-form', [
    'createText' => trans('admin/insurance/table.create') ,
    'updateText' => trans('admin/insurance/table.update'),
    'helpTitle' => trans('admin/insurance/table.about_insurance_title'),
    'helpText' => trans('admin/insurance/table.about_insurance_text'),
    'formAction' => ($item) ? route('insurance.update', ['insurance' => $item->id]) : route('insurance.store'),
])


{{-- Page content --}}
@section('inputFields')
@include ('partials.forms.edit.name', ['translated_name' => trans('admin/insurance/table.name')])

<!-- Provider -->
<div class="form-group {{ $errors->has('provider') ? ' has-error' : '' }}">
    <label for="provider" class="col-md-3 control-label">{{ trans('admin/insurance/provider') }}</label>
    <div class="col-md-7 col-sm-12">
        <input class="form-control" type="text" name="provider" id="provider" value="{{ Input::old('provider', $item->provider) }}" />
        {!! $errors->first('provider', '<span class="alert-msg"><i class="fa fa-times"></i> :message</span>') !!}
    </div>
</div>

<!-- Policy Number -->
<div class="form-group {{ $errors->has('policy_number') ? ' has-error' : '' }}">
    <label for="provider" class="col-md-3 control-label">{{ trans('admin/insurance/policy.number') }}</label>
    <div class="col-md-7 col-sm-12">
        <input class="form-control" type="text" name="policy_number" id="policy_number" value="{{ Input::old('policy_number', $item->policy_number) }}" />
        {!! $errors->first('policy_number', '<span class="alert-msg"><i class="fa fa-times"></i> :message</span>') !!}
    </div>
</div>
    <!-- Started At -->
    <div class="form-group {{ $errors->has('started_at') ? ' has-error' : '' }}">
        <label for="started_at" class="col-md-3 control-label">{{ trans('admin/insurance/started.at') }}</label>
        <div class="input-group col-md-3">
            <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd"  data-autoclose="true">
                <input type="text" class="form-control" placeholder="{{ trans('general.select_date') }}" name="started_at" id="started_at" value="{{ Input::old('started_at', ($item->started_at) ? $item->started_at->format('Y-m-d') : '') }}">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
            </div>
            {!! $errors->first('started_at', '<span class="alert-msg"><i class="fa fa-times"></i> :message</span>') !!}
        </div>
    </div>

    <!-- Ended At -->
    <div class="form-group {{ $errors->has('ended_at') ? ' has-error' : '' }}">
        <label for="ended_at" class="col-md-3 control-label">{{ trans('admin/insurance/ended.at') }}</label>
        <div class="input-group col-md-3">
            <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd"  data-autoclose="true">
                <input type="text" class="form-control" placeholder="{{ trans('general.select_date') }}" name="ended_at" id="ended_at" value="{{ Input::old('ended_at', ($item->ended_at) ? $item->ended_at->format('Y-m-d') : '') }}">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
            </div>
            {!! $errors->first('ended_at', '<span class="alert-msg"><i class="fa fa-times"></i> :message</span>') !!}
        </div>
    </div>
@include ('partials.forms.edit.notes')


@stop
