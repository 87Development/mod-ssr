@extends('layouts.app')

@section('title', 'Service record request')

@section('content')

    <p class="govuk-body-l">Use this service to obtain information relating to a servicemen/servicewoman who has served
    in the Royal Navy, Royal Marines, Army, Royal Air Force or Home Guard.</p>

    <p class="govuk-body"> It contains all you need to prototype anything from simple static pages to complex, data-driven transactions.</p>

    <h2 class="govuk-heading-m">Before you start</h2>

    <ul class="govuk-list govuk-list--bullet">
        <li>A death certificate may be required in some cases (<a class="govuk-link" href="https://www.gov.uk/guidance/request-records-of-deceased-service-personnel">see
                notes</a>)</li>
        <li>An administrative fee may apply (<a class="govuk-link" href="https://www.gov.uk/guidance/request-records-of-deceased-service-personnel">see
                notes</a>)</li>
    </ul>

    <a href="/request" role="button" draggable="false" class="govuk-button govuk-button--start">
        Start now
    </a>

    <h2 class="govuk-heading-m">Other Information</h2>

    <p class="govuk-body">You can also <a href="https://www.gov.uk/guidance/request-records-of-deceased-service-personnel#how-to-apply" class="govuk-link">request records by post</a>.</p>

@endsection