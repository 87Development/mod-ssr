@extends('layouts.app')

@section('title', 'Your details')

@section('content')

    <form action="/your-details" method="post" class="govuk-form" id="requestor-info" novalidate="novalidate">
        <div class="govuk-form-group {{ count($errors) >0 ? 'govuk-form-group--error' :'' }}">
            <fieldset class="govuk-fieldset">
                <legend class="govuk-fieldset__legend">
                    We require these as any matching service records will be posted to you.
                </legend>

               @include('partials.form-errors')

                <div class="govuk-form-group">
                    <label class="govuk-label govuk-label--s" for="fullname">Your fullname</label>
                    @if($errors->has('fullname'))
                        <span id="fullname-error" class="govuk-error-message">{{$errors->first('fullname')}}</span>
                    @endif
                    <input value="{{ isset($your_details['fullname'] ) ? $your_details['fullname'] : old('fullname') }}" class="govuk-input {{"" !== $errors->first('fullname') ? 'govuk-input--error' : ''}}" id="fullname" name="fullname" type="text" spellcheck="false" aria-required="true" aria-describedby="{{null !== $errors->first('fullname') ? 'fullname-error' : ''}}">
                </div>
                <div class="govuk-form-group">
                    <label class="govuk-label govuk-label--s" for="address-line-1">
                        Building and street <span class="govuk-visually-hidden">line 1 of 2</span>
                    </label>
                    @if($errors->has('address_line_1'))
                        <span id="address-line-1-error" class="govuk-error-message">Enter your house name/number and street address</span>
                    @endif
                    <input value="{{ isset($your_details['address_line_1'] ) ? $your_details['address_line_1'] : old('address_line_1') }}" class="govuk-input {{"" !== $errors->first('address_line_1') ? 'govuk-input--error' : ''}}" id="address-line-1" name="address_line_1" type="text" aria-required="true" aria-describedby="{{null !== $errors->first('address_line_1') ? 'address-line-1-error' : ''}}">
                </div>

                <div class="govuk-form-group">
                    <label class="govuk-label govuk-label--s" for="address-line-2">
                        <span class="govuk-visually-hidden">Building and street line 2 of 2</span>
                    </label>
                    <input value="{{ isset($your_details['address_line_2'] ) ? $your_details['address_line_2'] : old('address_line_2') }}" class="govuk-input" id="address-line-2" name="address_line_2" type="text">
                </div>

                <div class="govuk-form-group">
                    <label class="govuk-label govuk-label--s" for="address-town">
                        Town or city
                    </label>
                    <input value="{{ isset($your_details['address_town'] ) ? $your_details['address_town'] : old('address_town') }}" class="govuk-input govuk-!-width-two-thirds" id="address_town" name="address_town" type="text">
                </div>

                <div class="govuk-form-group">
                    <label class="govuk-label govuk-label--s" for="address-county">
                        County
                    </label>
                    @if($errors->first('address_county'))
                        <span id="address-county-error" class="govuk-error-message">Enter the county of your address</span>
                    @endif
                    <input value="{{ isset($your_details['address_county'] ) ? $your_details['address_county'] : old('address_county') }}" class="govuk-input govuk-!-width-two-thirds {{"" !== $errors->first('address_county') ? 'govuk-input--error' : ''}}" id="address-county" name="address_county" type="text" aria-required="true" aria-describedby="{{null !== $errors->first('address_line_1') ? 'address-county-error' : ''}}">
                </div>

                <div class="govuk-form-group">
                    <label class="govuk-label govuk-label--s" for="address-postcode">
                        Postcode
                    </label>
                    @if($errors->first('address_postcode'))
                        <span id="address-postcode-error" class="govuk-error-message">Enter your postcode or zipcode for your address</span>
                    @endif
                    <input value="{{ isset($your_details['address_postcode'] ) ? $your_details['address_postcode'] : old('address_postcode') }}" class="govuk-input govuk-input--width-10 {{"" !== $errors->first('address_postcode')}} ? 'govuk-input--error' : ''}}" id="address-postcode" name="address_postcode" type="text" aria-required="true" aria-describedby="{{null !== $errors->first('address_postcode') ? 'address-postcode-error' : ''}}">
                </div>
            </fieldset>
        </div>
        <div class="govuk-form-group">
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            <button type="submit" class="govuk-button">Save and continue</button>
        </div>
    </form>

@endsection