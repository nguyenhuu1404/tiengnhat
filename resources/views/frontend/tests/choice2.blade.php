<div class="choice form-row full mb-3">
	@foreach($answers as $key =>$value)


        <div class="form-check col-6 m-0 mb-3 form-check-inline {{($value['check'] == 1) ? 'check' : 'wrong'}}">
            <input class="form-check-input dapan" type="radio" name="answers[{{$qestionId}}]" id="answers_{{$qestionId}}_{{$value['id']}}" value="{{$value['id']}}"/>
            <label class="form-check-label" for="answers_{{$qestionId}}_{{$value['id']}}">{!!$value['name']!!}</label>
        </div>

	@endforeach
</div>
