<form class="forms-sample" action="{{ route('admin.updatehomesettings.comment') }}"
method="POST" enctype="multipart/form-data" id="szform">
@csrf

<div class="row mb-3 mt-5 border"
    style="border-radius: 25px; border-color: lightgray !important; padding: 2%;">
    <div class="col-md-6">
        <label class="form-label">{{ __('Customer Name') }}:</label>
        <input class="form-control" name="comments_customer_name"
            placeholder="{{ __('Enter Customer Name') }}"
            id="comments_customer_name" />
    </div>
    <div class="col-md-6">
        <label class="form-label">{{ __('Customer Title') }}:</label>
        <input class="form-control mb-4 mb-md-0" name="comments_customer_title"
            placeholder="{{ __('Enter Customer Title') }}"
            id="comments_customer_title" />
    </div>
    <div class="col-md-6 mt-3">
        <label class="form-label">{{ __('Customer Comment') }}:</label>
        <input class="form-control mb-4 mb-md-0" name="comments_customer_comment"
            placeholder="{{ __('Enter Customer Comment') }}"
            id="comments_customer_comment" />
    </div>
    <div class="col-md-6 mt-3">
        <label class="form-label">{{ __('Customer Rate') }}:</label>
        <select class="js-example-basic-multiple form-select"
            name="comments_customer_rate" data-width="100%" required>
            <option value="">{{ __('Select Rate') }}</option>
            @for ($i = 0; $i < 5; $i++)
                <option value="{{ $i + 1 }}">{{ $i + 1 }}</option>
            @endfor
        </select>
    </div>
</div>

<div class="text-center mt-5">
    <button class="btn btn-outline-primary"
        type="submit">{{ __('Add Customer Comment') }}</button>
</div>

</form>

<hr class="mt-5">
<label for="" class="form-label" style="font-weight: 600;">
CURRENT CUSTOMER COMMENTS
</label>
<div class="col-md-12">
@foreach ($data['Home_Settings']->comments['content'] as $key => $comment)
    <hr>
    <div class="row">
        <div class="col-md-2">
            <p>{{ $comment['customer_name'] }}</p>
        </div>
        <div class="col-md-2">
            <p>{{ $comment['customer_title'] }}</p>
        </div>
        <div class="col-md-2">
            <p>{{ $comment['customer_comment'] }}</p>
        </div>
        <div class="col-md-2">
            <p>{{ $comment['customer_rating'] }}</p>
        </div>
        <div class="col-md-4">
            <a href="{{ route('admin.deletehomesettings.comment', $key) }}"
                class="btn btn-danger">Delete</a>
        </div>
    </div>
@endforeach
</div>
</div>
