<thead>
<tr>
    <th width="5%" class="text-center">{!! lang('common.id') !!}</th>
    <th>Title</th>
    <th>file</th>
     <th width="6%" class="text-center"> {!! lang('common.status') !!} </th>
     <th class="text-center">{!! lang('common.action') !!}</th>
</tr>
</thead>
<tbody>
<?php $index = 1; ?>
@foreach($data as $detail)
<tr id="order_{{ $detail->id }}">
    <td style="vertical-align: middle;" class="text-center">{!! pageIndex($index++, $page, $perPage) !!}</td>
    
    <td style="vertical-align: middle;">{!! $detail->title !!}</td>    
    <td><a href="{{ route('home') }}{!! $detail->file !!}" target="_blank"><i class="fa fa-file" style="font-size: 18px !important;"></i></a></td>
        <td style="vertical-align: middle;" class="text-center">
            <a href="javascript:void(0);" class="toggle-status" data-message="{!! lang('messages.change_status') !!}" data-route="{!! route('form.toggle', $detail->id) !!}" title="@if($detail->status == 0) Deactive @else Active @endif">
                {!! HTML::image('images/' . $detail->status . '.gif') !!}
            </a>
        </td>
        <td style="vertical-align: middle;" class="text-center col-md-1">
            <a class="btn btn-xs btn-primary" href="{{ route('form.edit', [$detail->id]) }}"><i class="fa fa-edit"></i></a>
        </td>    
</tr>
@endforeach
@if (count($data) < 1)
<tr>
    <td class="text-center" colspan="8"> {!! lang('messages.no_data_found') !!} </td>
</tr>
@else
<tr>
    <td colspan="10">
        {!! paginationControls($page, $total, $perPage) !!}
    </td>
</tr>
@endif
</tbody>