@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.appointment.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.appointments.update", [$appointment->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="required" for="to_id">{{ trans('cruds.appointment.fields.client') }}</label>
                    <select class="form-control select2 {{ $errors->has('client_id') ? 'is-invalid' : '' }}" name="client_id" id="client_id" required>
                        @foreach($clients as $id => $client)
                            <option value="{{ $id }}" {{ ($appointment->client ? $appointment->client->id : old('client_id')) == $id ? 'selected' : '' }}>{{ $client }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('client_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('client_id') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.appointment.fields.client_helper') }}</span>
                </div>

                <div class="form-group">
                    <label class="required" for="to_id">{{ trans('cruds.appointment.fields.doctor') }}</label>
                    <select class="form-control select2 {{ $errors->has('doctor') ? 'is-invalid' : '' }}" name="doctor_id" id="doctor_id" required>
                        @foreach($doctors as $id => $doctor)
                            <option value="{{ $id }}" {{ ($appointment->doctor? $appointment->doctor->id : old('doctor_id')) == $id ? 'selected' : '' }}>{{ $doctor }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('doctor'))
                        <div class="invalid-feedback">
                            {{ $errors->first('doctor') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.appointment.fields.doctor_helper') }}</span>
                </div>

                <div class="form-group {{ $errors->has('start_time') ? 'has-error' : '' }}">
                    <label for="start_time">{{ trans('cruds.appointment.fields.start_time') }}*</label>
                    <input type="text" id="start_time" name="start_time" class="form-control datetime" autocomplete="off" value="{{ old('start_time', isset($appointment) ? $appointment->start_time : '') }}" required>
                    @if($errors->has('start_time'))
                        <div class="invalid-feedback">
                            {{ $errors->first('start_time') }}
                        </div>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.appointment.fields.start_time_helper') }}
                    </p>
                </div>

                <div class="form-group {{ $errors->has('finish_time') ? 'has-error' : '' }}">
                    <label for="finish_time">{{ trans('cruds.appointment.fields.finish_time') }}*</label>
                    <input type="text" id="finish_time" name="finish_time" class="form-control datetime" autocomplete="off" value="{{ old('finish_time', isset($appointment) ? $appointment->finish_time : '') }}" required>
                    @if($errors->has('finish_time'))
                        <div class="invalid-feedback">
                            {{ $errors->first('finish_time') }}
                        </div>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.appointment.fields.finish_time_helper') }}
                    </p>
                </div>

                <div class="form-group">
                    <label class="required" for="roles">{{ trans('cruds.appointment.fields.service') }}</label>
                    <select class="form-control select2 {{ $errors->has('service_id') ? 'is-invalid' : '' }}" name="service_id" id="service_id" required>
                        @foreach($appointment->doctor->services->pluck('name', 'id') as $key => $service)
                            <option value="{{$key}}" {{($appointment->$service ? $appointment->service->id : old('service_id')) == $key ? 'selected' : ''}}>{{$service}}</option>
                        @endforeach
                    </select>
                    @if($errors->has('service_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('service_id') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.appointment.fields.service_helper') }}</span>
                </div>

                <div class="form-group">
                    <label class="required" for="price">{{ trans('cruds.appointment.fields.price') }}</label>
                    <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', $appointment->price?? '' ) }}" required>
                    @if($errors->has('price'))
                        <div class="invalid-feedback">
                            {{ $errors->first('price') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.appointment.fields.price_helper') }}</span>
                </div>

                <div class="form-group {{ $errors->has('comment') ? 'has-error' : '' }}">
                    <label for="comments">{{ trans('cruds.appointment.fields.comment') }}</label>
                    <textarea id="comments" name="comments" class="form-control ">{{ old('comments', isset($appointment) ? $appointment->comment : '') }}</textarea>
                    @if($errors->has('comment'))
                        <em class="invalid-feedback">
                            {{ $errors->first('comment') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.appointment.fields.comment_helper') }}
                    </p>
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">
                        {{ trans('global.update') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
