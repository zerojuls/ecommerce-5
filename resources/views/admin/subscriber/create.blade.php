@extends('mage2-ecommerce::admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">{{ __('mage2-ecommerce::subscriber.create') }}</div>
                    <div class="card-body">

                        <form action="{{ route('admin.subscriber.store') }}" method="post">
                            {{ csrf_field() }}

                            @include('mage2-ecommerce::admin.subscriber._fields')

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">{{ __('mage2-ecommerce::subscriber.create') }}</button>
                                <a href="{{ route('admin.subscriber.index') }}" class="btn">{{ __('mage2-ecommerce::lang.cancel') }}</a>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection