@extends('layouts.app')



@section('title', 'Details of the serviveman/woman')

@section('content')

    <form action="/service-details" method="post" class="govuk-form" id="subject-army" novalidate="novalidate">
        <div class="govuk-form-group {{ count($errors) >0 ? 'govuk-form-group--error' :'' }}">
            <legend class="govuk-fieldset__legend">
                Please provide any further details if you know them, as this will help
                us complete and speed up your request.
            </legend>

            @include('partials.form-errors')

            <div class="govuk-form-group">
                <label class="govuk-label govuk-label--s" for="service_number">Official Service Number</label>
                <input value="{{ isset($service_details['service_number'] ) ? $service_details['service_number'] : old('service_number') }}" class="govuk-input govuk-input--width-10" id="service_number" name="service_number" type="text" spellcheck="false">
            </div>
            <div class="govuk-form-group">
                <label class="govuk-label govuk-label--s" for="dis_date">Year of death in service</label>
                <span id="army-dis-1-item-hint" class="govuk-hint">
            Approximate if you are unsure
          </span>
                <input value="{{ isset($service_details['discharge_year'] ) ? $service_details['discharge_year'] : old('discharge_year') }}" class="govuk-input govuk-input--width-4" id="dis_date" name="discharge_year" type="number" patter="[0-9]*" size="4">
            </div>
            <div class="govuk-form-group">
                <label class="govuk-label govuk-label--s" for="regt_corps">Regt/Corps</label>
                <span id="army-dis-1-item-hint" class="govuk-hint">
                    At time of death
                </span>
                <input value="{{ isset($service_details['regt_corps'] ) ? $service_details['regt_corps'] : old('regt_corps') }}" class="govuk-input govuk-input--width-10" id="regt_corps" name="regt_corps" type="text" spellcheck="false">
            </div>
            <div class="govuk-form-group">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}" />
                <button type="submit" class="govuk-button">Save and continue</button>
            </div>
        </fieldset>
    </form>

@endsection