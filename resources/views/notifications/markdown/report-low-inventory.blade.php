@component('mail::message')

{{ trans_choice('mail.There_are',count($items)) }} {{ count($items) }} {{ trans_choice('mail.items_below_minimum',count($items)) }}

@component('mail::table')
|{{ trans('mail.name') }} |{{ trans('mail.type') }} |{{ trans('mail.current_QTY') }}|{{ trans('mail.min_QTY') }}
|:-------------|:---------|:---------:|:---------:|
@for($i=0; count($items) > $i; $i++)
|<a href="({{ route($items[$i]['type'].'.show', $items[$i]['id']) }}">{{ $items[$i]['name'] }}</a>|{{ $items[$i]['type'] }} |{{ $items[$i]['remaining'] }} |{{ $items[$i]['min_amt'] }} |
@endfor
@endcomponent


@endcomponent
