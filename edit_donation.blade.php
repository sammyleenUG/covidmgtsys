@extends('layouts.admin')

@section('content')
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-10">
	            <div class="card">
	                <div class="card-header"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
	                    <path d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
	                  </svg>{{ __('Edit Donation') }}</div>

	                <div class="card-body">

	                    <form method="POST" action="/update_donation/{{ $donation->id }}">
	                        @csrf
	                        @method('PATCH')

	                        <div class="form-group row">
	                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Well Wisher') }}</label>

	                            <div class="col-md-6">
	                                <input id="" type="text" class="form-control" name="well_wisher" value="{{ $donation->well_wisher }}" required autofocus>
	                            </div>
	                        </div>

	                        <div class="form-group row">
	                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Amount') }}</label>

	                            <div class="col-md-6">
	                                <input id="" type="number" class="form-control" name="amount" required value="{{ $donation->amount }}">

	                            </div>
	                        </div>
	                        <div class="form-group row mb-0">
	                            <div class="col-md-8 offset-md-4">
	                                <button type="submit" class="btn btn-primary">
	                                    {{ __('Save changes') }}
	                                </button>
	                                <a href="/donation" type="button" class="btn btn-warning">
	                                    {{ __('Cancel') }}
	                                </a>
	                            </div>
	                        </div>
	                    </form>
	                 
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection
