{{-- resources/views/emails/components/details-table.blade.php --}}
{{-- Usage: @include('emails.components.details-table', ['rows' => [['label' => 'Name', 'value' => 'John'], ...]]) --}}

@if(isset($rows) && count($rows))
<table class="details-table" cellpadding="0" cellspacing="0" border="0" width="100%">
    @foreach($rows as $row)
    <tr>
        <td>{{ $row['label'] }}</td>
        <td>{{ $row['value'] }}</td>
    </tr>
    @endforeach
</table>
@endif
