@extends('layouts.setup')

@section('content')

    <div class="row justify-content-center">
        <div class="col-12 col-md-8">

            <div class="card">
                <div class="card-header">
                    @lang('setup.check_requirements')
                </div>
                <div class="card-body">

                    <ul>
                        @foreach($results as $key => $successful)
                            <li>
                                @lang('setup.requirements.' . $key)
                                @if($successful)
                                    <i class="fa fa-fw fa-check text-success"></i>
                                @else
                                    <i class="fa fa-fw fa-ban text-danger"></i>
                                @endif
                            </li>
                        @endforeach
                    </ul>

                    <a href="{{ route('setup.requirements') }}" class="btn {{ $success ? 'btn-primary' : ' btn-danger disabled' }}">
                        @lang('setup.check_requirements')
                    </a>

                </div>
            </div>

        </div>
    </div>

@endsection
